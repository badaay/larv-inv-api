<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use JWTAuth;
use App\UserKey;
use JWTAuthException;
use JWTFactory;

class UserController extends Controller
{
    // private $user;
    public function __construct(){
        // $this->user = $user;
    }
   
    // public function register(Request $request){
    //     $user = $this->user->create([
    //       'name' => $request->get('name'),
    //       'email' => $request->get('email'),
    //       'password' => bcrypt($request->get('password'))
    //     ]);
    //     return response()->json(['status'=>true,'message'=>'User created successfully','data'=>$user]);
    // }
    
    public function loginku(Request $request){
        $credentials = $request->only('server_key', 'project_key');
        $token = null;
        try {
           if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['invalid_email_or_password'], 422);
           }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        return response()->json(compact('token'));
    } 
    public function login2(Request $request){
        $credentials = $request->only('email', 'password');
        $token = null;
        try {
           if (!$token = JWTAuth::attempt($credentials)) {
            return response()->json(['invalid_email_or_password'], 422);
           }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        return response()->json(compact('token'));
    }

    public function login(Request $request)
    {

        // $user = User::where('project_key', $project_key)
                // ->where('server_key', $server_key)->first();
        $credentials = $request->only('server_key', 'project_key');
        $token = null;
        try {
           if (!$token = UserKey::where('project_key', $request->input('project_key'))
                ->where('server_key', $request->input('server_key'))->first()) {
            return response()->json(['invalid_email_or_password'], 422);
           }
        } catch (JWTAuthException $e) {
            return response()->json(['failed_to_create_token'], 500);
        }
        $token = JWTFactory::customClaims($credentials);
        $token = $token->make();
        return response()->json(compact('token'));
        // if($user){
 
        //     $apikey = md5($server_key.$project_key);

        //     return response()->json(['status' => 'success','token' => $apikey]);
 
        // }else{
 
        //     return response()->json(['status' => 'fail'],401);
 
        // }
 
    } 
    public function logina($project_key, $server_key)
    {

        // $user = UserKey::where('project_key', $project_key)
                // ->where('server_key', $server_key)->first();
        // $credentials = $request->only('server_key', 'project_key');
        $token = null;
        // print_r($user);
        // dd('logina');
        try {

            $user = UserKey::where('project_key', $project_key)->where('server_key', $server_key)->first();

           if (!$user ) {
            return response()->json(['invalid_email_or_password'], 422);
           }
            $token = JWTFactory::make(((array)$user));
        } catch (JWTAuthException $e) {
        //     return response()->json(['failed_to_create_token'], 500);
        }
            // echo $token;
        return response()->json(compact('token'));
        // if($user){
 
        //     $apikey = md5($server_key.$project_key);

        //     return response()->json(['status' => 'success','token' => $apikey]);
 
        // }else{
 
        //     return response()->json(['status' => 'fail'],401);
 
        // }
 
    }
    public function getAuthUser(Request $request){
        $user = JWTAuth::toUser($request->token);
        return response()->json(['result' => $user]);
    }
}
