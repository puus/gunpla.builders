@extends('layouts.app')

@section('content')

    <div class='row'>
        <form class='col s8 m6 offset-s2 offset-m3' method='POST' action='/login' style='margin-top: 3em;'>
            {!! csrf_field() !!}

            <div class='card'>
                <div class='card-content'>
                    <span class='card-title'>Login</span>

                    @if (count($errors) > 0)
                        <ul class='row'>
                            @foreach ($errors->all() as $error)
                                <li class='col s12'><i class='material-icons'>error</i> {{ $error }}</li>
                            @endforeach
                        </ul>
                    @endif

                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class='material-icons prefix'>email</i>
                            <input id='email' name='email' type='text' value="{{ old('email') }}">
                            <label for='email'>Email</label>
                        </div>
                    </div>
                    <div class='row'>
                        <div class='input-field col s12'>
                            <i class='material-icons prefix'>vpn_key</i>
                            <input id='password' name='password' type='password'>
                            <label for='password'>Password</label>
                        </div>
                    </div>
                </div>
                <div class='card-action'>
                    <p style="float: left; margin-top: 8px;">
                        <input type='checkbox' name='remember' id='remember'>
                        <label for='remember'>Remember Me</label>
                    </p>
                    <input class='waves-effect blue waves-light btn' style='float: right;' type='submit' value='Login'>
                    <div class='clearfix'></div>
                </div>
            </div>
        </form>
    </div>
@endsection
