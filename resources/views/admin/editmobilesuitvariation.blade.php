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
                'href'  => '/admin/mobilesuitvariations',
                'title' => 'Mobile Suit Variations'
            ], [
                'href' => '#',
                'title' => 'Edit Mobile Suit Variation'
            ]
        ]
    ])

    <div class='card'>
        <div class='card-content'>
            <span class='card-title'>Mobile Suit Variation Information
                <span class='card-collapse'>
                    <i class='material-icons'>keyboard_arrow_up</i>
                </span>
            </span>
            <div class='row'>
                <form method='POST' action="/admin/mobilesuitvariations/<?= $id ?>/edit">
                    {!! csrf_field() !!}

                    <div class='input-field col s12'>
                        <input id="name" name='name' type="text" value="<?= $name ?>">
                        <label for="name">Name</label>
                    </div>

                    <div class='input-field col s12'>
                        <input id="model" name='model' type="text" value="<?= $model ?>">
                        <label for="model">Model</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='manufacturer' name='manufacturer'>
                            <option value="" disabled selected>Choose MS Manufactrer</option>

                            <?php foreach($manufacturers as $manufacturer): ?>
                                <option value="<?= $manufacturer->manufacturer_id ?>" <?= $msvManufacturer == $manufacturer->manufacturer_id ? 'selected' : '' ?>><?= $manufacturer->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class="active">Manufacturer</label>
                    </div>
                    <div style='height: 1em; float: left; width: 100%;'></div>

                    <div class="input-field col s12">
                        <select id='pilots' name='pilots[]' multiple>
                            <?php foreach($pilots as $pilot): ?>
                                <option value="<?= $pilot->pilot_id ?>" <?= in_array($pilot->pilot_id, $msvPilots) ? 'selected' : '' ?>><?= $pilot->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class='active'>Pilots</label>
                    </div>

                    <div class='col s12'>
                        <input type='submit' class='btn right' value='Save'></input>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>



@endsection
