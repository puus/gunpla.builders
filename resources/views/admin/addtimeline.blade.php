@extends('layouts.app')

@section('content')

<div class='container'>
    @include('partials/breadcrumbs', [
        'crumbs' => [
            [
                'href' => '/admin',
                'title' => 'Administration'
            ],
            [
                'href'  => '/admin/timelines',
                'title' => 'Timelines'
            ], [
                'href' => '#',
                'title' => 'Add Timeline'
            ]
        ]
    ])

    <div class='card'>
        <div class='card-content'>
            <span class='card-title'>Add Timeline</span>
            <div class='row'>
                <form method='POST' action="/admin/timelines">
                    {!! csrf_field() !!}

                    <div class='input-field col s12'>
                        <input id="name" name='name' type="text">
                        <label for="name">Name</label>
                    </div>

                    <div class='input-field col s12'>
                        <input id="abbreviation" name='abbreviation' type="text">
                        <label for="name">Abbreviation</label>
                    </div>

                    <input type='submit' class='btn right' value='Save'></input>
                </form>
            </div>
        </div>
    </div>


</div>

@endsection
