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
                'href'  => '/admin/pilots',
                'title' => 'Pilots'
            ], [
                'href' => '#',
                'title' => 'Add Pilot'
            ]
        ]
    ])

    <div class='card'>
        <div class='card-content'>
            <span class='card-title'>Add Pilot</span>
            <div class='row'>
                <form method='POST' action="/admin/pilots">
                    {!! csrf_field() !!}

                    <div class='input-field col s12'>
                        <input id="name" name='name' type="text">
                        <label for="name">Name</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='factions' name='factions[]' multiple>
                            <?php foreach($factions as $faction): ?>
                                <option value="<?= $faction->faction_id ?>"><?= $faction->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class="active">Factions</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='mobileSuits' name='mobileSuits[]' multiple>
                            <?php foreach($mobileSuits as $ms): ?>
                                <option value="<?= $ms->mobile_suit_id ?>"><?= $ms->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class='active'>Mobile Suits</label>
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
