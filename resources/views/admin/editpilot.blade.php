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
                'title' => 'Edit Pilot'
            ]
        ]
    ])

    <div class='card'>
        <div class='card-content'>
            <span class='card-title'>Pilot Information
                <span class='card-collapse'>
                    <i class='material-icons'>keyboard_arrow_up</i>
                </span>
            </span>
            <div class='row'>
                <form method='POST' action="/admin/pilots/<?= $pilot->pilot_id ?>/edit">
                    {!! csrf_field() !!}

                    <input name="id" type="hidden" value="<?= $pilot->pilot_id ?>">

                    <div class='input-field col s12'>
                        <input id="name" name='name' type="text" value="<?= $pilot->name ?>">
                        <label for="name">Name</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='factions' name='factions[]' multiple>
                            <?php foreach($factions as $faction): ?>
                                <option value="<?= $faction->faction_id ?>" <?= in_array($faction->faction_id, $pilotFactions) ? 'selected' : '' ?>><?= $faction->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class='active'>Factions</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='mobileSuits' name='mobileSuits[]' multiple>
                            <?php foreach($mobileSuits as $ms): ?>
                                <option value="<?= $ms->mobile_suit_id ?>" <?= in_array($ms->mobile_suit_id, $pilotMobileSuits) ? 'selected' : '' ?>><?= $ms->model . ' ' . $ms->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class='active'>Mobile Suits</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='timeline' name='timeline'>
                            <?php foreach($timelines as $timeline): ?>
                                <option value="<?= $timeline->timeline_id ?>" <?= $timeline->timeline_id == $pilot->timeline_fk ? 'selected' : '' ?>><?= $timeline->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class='active'>Timeline</label>
                    </div>

                    <input type='submit' class='btn right' value='Save'></input>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
