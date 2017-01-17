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
                'href'  => '/admin/factions',
                'title' => 'Factions'
            ], [
                'href' => '#',
                'title' => 'Edit Faction'
            ]
        ]
    ])

    <div class='card'>
        <div class='card-content'>
            <span class='card-title'>Faction Information
                <span class='card-collapse'>
                    <i class='material-icons'>keyboard_arrow_up</i>
                </span>
            </span>
            <div class='row'>
                <form method='POST' action="/admin/factions/<?= $faction->faction_id ?>/edit">
                    {!! csrf_field() !!}

                    <input name="id" type="hidden" value="<?= $faction->faction_id ?>">

                    <div class='input-field col s12'>
                        <input id="name" name='name' type="text" value="<?= $faction->name ?>">
                        <label for="name">Name</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='pilots' name='pilots[]' multiple>
                            <?php foreach($pilots as $pilot): ?>
                                <option value="<?= $pilot->pilot_id ?>" <?= in_array($pilot->pilot_id, $factionPilots) ? 'selected' : '' ?>><?= $pilot->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class="active">Pilots</label>
                    </div>

                    <input type='submit' class='btn right' value='Save'></input>
                </form>
            </div>
        </div>
    </div>
</div>


@endsection
