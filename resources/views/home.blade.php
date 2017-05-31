@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    @role('admin') 
                        You are admin <br>
                    @endrole

                    @role('user.apis') 
                        You are User <br>
                    @endrole
                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
