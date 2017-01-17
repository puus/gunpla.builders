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
                'title' => 'Add Faction'
            ]
        ]
    ])

    <div class='card'>
        <div class='card-content'>
            <span class='card-title'>Add Faction</span>
            <div class='row'>
                <form method='POST' action="/admin/factions">
                    {!! csrf_field() !!}

                    <div class='input-field col s12'>
                        <input id="name" name='name' type="text">
                        <label for="name">Name</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='pilots' name='pilots[]' multiple>
                            <?php foreach($pilots as $pilot): ?>
                                <option value="<?= $pilot->pilot_id ?>"><?= $pilot->name ?></option>
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
