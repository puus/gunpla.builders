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
                'title' => 'Edit Timeline'
            ]
        ]
    ])

    <div class='card'>
        <div class='card-content'>
            <span class='card-title'>Timeline Information
                <span class='card-collapse'>
                    <i class='material-icons'>keyboard_arrow_up</i>
                </span>
            </span>
            <div class='row'>
                <form method='POST' action="/admin/timelines/<?= $timeline->timeline_id ?>/edit">
                    {!! csrf_field() !!}

                    <input name="id" type="hidden" value="<?= $timeline->timeline_id ?>">

                    <div class='input-field col s12'>
                        <input id="name" name='name' type="text" value="<?= $timeline->name ?>">
                        <label for="name">Name</label>
                    </div>

                    <div class='input-field col s12'>
                        <input id="name" name='name' type="text" value="<?= $timeline->abbreviation ?>">
                        <label for="name">abbreviation</label>
                    </div>

                    <input type='submit' class='btn right' value='Save'></input>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
