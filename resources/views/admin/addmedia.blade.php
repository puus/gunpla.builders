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
                'href'  => '/admin/media',
                'title' => 'Media'
            ], [
                'href' => '#',
                'title' => 'Add Media'
            ]
        ]
    ])

    <div class='card'>
        <div class='card-content'>
            <span class='card-title'>Add Media</span>
            <div class='row'>
                <form method='POST' action="/admin/media">
                    {!! csrf_field() !!}

                    <div class='input-field col s12'>
                        <input id="name" name='name' type="text">
                        <label for="name">Name</label>
                    </div>

                    <div class='input-field col s12'>
                        <input id="abbreviation" name='abbreviation' type="text">
                        <label for="name">Abbreviation</label>
                    </div>

                    <div class='input-field col s12'>
                        <input id="shortname" name='shortname' type="text">
                        <label for="name">Short Name</label>
                    </div>

                    <div class='input-field col s12'>
                        <input id="year" name='year' type="text">
                        <label for="name">Year</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='mediatype' name='mediatype'>
                            <option value="" disabled selected>Choose Media Type</option>

                            <?php foreach($mediaTypes as $type): ?>
                                <option value="<?= $type->media_type_id ?>"><?= $type->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class="active">Media Type</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='timeline' name='timeline'>
                            <option value="" disabled selected>Choose Timeline</option>

                            <?php foreach($timelines as $timeline): ?>
                                <option value="<?= $timeline->timeline_id ?>"><?= $timeline->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class="active">Timeline</label>
                    </div>

                    <input type='submit' class='btn right' value='Save'></input>
                </form>
            </div>
        </div>
    </div>


</div>

@endsection
