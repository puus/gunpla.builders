@extends('layouts.app')

@section('content')

    <hr />
    <div class='row'>
        <form class='col s8 m6 offset-s2 offset-m3' method='POST' action='/login' style='margin-top: 3em;'>
            {!! csrf_field() !!}
        </form>
    </div>
@endsection
