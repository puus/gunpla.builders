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
                'title' => 'Add Mobile Suit Variation'
            ]
        ]
    ])

    <div class='card'>
        <div class='card-content'>
            <span class='card-title'>Add Mobile Suit Variation</span>
            <div class='row'>
                <form method='POST' action="/admin/mobilesuitvariations/add">
                    {!! csrf_field() !!}

                    <div class='input-field col s12'>
                        <input id="name" name='name' type="text">
                        <label for="name">Name</label>
                    </div>

                    <div class='input-field col s12'>
                        <input id="model" name='model' type="text">
                        <label for="model">Model</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='manufacturer' name='manufacturer'>
                            <option value="" disabled selected>Choose MS Manufactrer</option>

                            <?php foreach($manufacturers as $manufacturer): ?>
                                <option value="<?= $manufacturer->manufacturer_id ?>"><?= $manufacturer->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class="active">Manufacturer</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='developedfrom' name='developedfrom'>
                            <option value="" disabled selected>Choose Base MS</option>

                            <?php foreach($mobilesuits as $ms): ?>
                                <option value="<?= $ms->mobile_suit_id ?>"><?= $ms->model ?> <?= $ms->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class="active">Developed From</label>
                    </div>

                    <div class="input-field col s12">
                        <select id='pilots' name='pilots[]' multiple>
                            <?php foreach($pilots as $pilot): ?>
                                <option value="<?= $pilot->pilot_id ?>"><?= $pilot->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class='active'>Pilots</label>
                    </div>

                    <input type='submit' class='btn right' value='Save'></input>
                </form>
            </div>
        </div>
    </div>


</div>

@endsection
