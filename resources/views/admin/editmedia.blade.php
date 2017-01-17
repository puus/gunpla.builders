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
                'title' => 'Edit Media'
            ]
        ]
    ])

    <div class='card'>
        <div class='card-content'>
            <span class='card-title'>Media Information
                <span class='card-collapse'>
                    <i class='material-icons'>keyboard_arrow_up</i>
                </span>
            </span>
            <div class='row'>
                <form method='POST' action="/admin/media/<?= $media->media_id ?>/edit">
                    {!! csrf_field() !!}

                    <div class='input-field col s12'>
                        <input id="name" name='name' type="text" value="<?= $media->name ?>">
                        <label for="name">Name</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='mediaType' name='mediaType'>
                            <option value="" disabled selected>Choose Media Type</option>

                            <?php foreach($mediaTypes as $mediaType): ?>
                                <option value="<?= $mediaType->media_type_id ?>" {{ $media->media_type_fk == $mediaType->media_type_id ? 'selected' : '' }}><?= $mediaType->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class="active">Media Type</label>
                    </div>

                    <div class='input-field col s12'>
                        <input id="abbreviation" name='abbreviation' type="text" value="<?= $media->abbreviation ?>">
                        <label for="abbreviation">Abbreviation</label>
                    </div>

                    <div class='input-field col s12'>
                        <input id="shortName" name='shortName' type="text" value="<?= $media->short_name ?>">
                        <label for="shortName">Short Name</label>
                    </div>

                    <div class='input-field col s12'>
                        <input id="year" name='year' type="text" value="<?= $media->year ?>">
                        <label for="year">Year</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='timeline' name='timeline'>
                            <option value="" disabled selected>Choose Timeline</option>

                            <?php foreach($timelines as $timeline): ?>
                                <option value="<?= $timeline->timeline_id ?>" {{ $media->timeline_fk == $timeline->timeline_id ? 'selected' : '' }}><?= $timeline->name ?></option>
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
