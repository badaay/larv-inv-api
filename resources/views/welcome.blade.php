
<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>INVENTO</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
        

        <!-- HTTPS required. HTTP will give a 403 forbidden response -->
        <script src="https://sdk.accountkit.com/en_US/sdk.js"></script>


    </head>
   <!--  style="background-image: url('{{ asset('images/bg.png') }}') " -->
    <body >
        

        <script>
          // initialize Account Kit with CSRF protection
          AccountKit_OnInteractive = function(){
            AccountKit.init(
              {
                appId:"1412798915422551", 
                state:"fdj9248a13290d923bjde", 
                version:"v1.0",
                fbAppEventsEnabled:true,
                // redirect:"login"
              }
            );
          };

          // login callback
          function loginCallback(response) {
            if (response.status === "PARTIALLY_AUTHENTICATED") {
              var code = response.code;
              var csrf = response.state;
              document.getElementById("login_success").submit();
              // Send code to server to exchange for access token
            }
            else if (response.status === "NOT_AUTHENTICATED") {
              // handle authentication failure
            }
            else if (response.status === "BAD_PARAMS") {
              // handle bad parameters
            }
          }

          // phone form submission handler
          function smsLogin() {
            var countryCode = document.getElementById("country_code").value;
            var phoneNumber = document.getElementById("phone_number").value;
            AccountKit.login(
              'PHONE', 
              {countryCode: countryCode, phoneNumber: phoneNumber}, // will use default values if not specified
              loginCallback
            );
          }


          // email form submission handler
          function emailLogin() {
            var emailAddress = document.getElementById("email").value;
            AccountKit.login(
              'EMAIL',
              {emailAddress: emailAddress},
              loginCallback
            );
          }

      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1412798915422551',
          cookie     : true,
          xfbml      : true,
          version    : 'v2.10'
        });
          
        FB.AppEvents.logPageView();   
          
      };

      function onButtonClick() {
          // Add this to a button's onclick handler
          FB.AppEvents.logEvent("sentFriendRequest");
        }

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "https://connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>

            
        <div class="flex-center position-ref full-height" >
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/overview') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif
            <form id="login_success" method="post" action="{{ url('/login_success') }}">
                {{ csrf_field() }}
              <input id="csrf" type="hidden" name="csrf" />
              <input id="code" type="hidden" name="code" />
            </form>
            <div class="content" ">
                <input value="+62" id="country_code" />
                <input placeholder="phone number" id="phone_number"/>
                <button onclick="smsLogin();">Login via SMS</button>
                <div>OR</div>
                <input placeholder="email" id="email"/>
                <button onclick="emailLogin();">Login via Email</button>
               <!--  <div class="title m-b-md">
                    INVENTO 
                </div> -->

                <button onclick="onButtonClick()">click this bro</button>
                
            </div>
        </div>
    </body>
</html>

