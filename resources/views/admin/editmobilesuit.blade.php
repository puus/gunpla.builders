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
                'href'  => '/admin/mobilesuits',
                'title' => 'Mobile Suits'
            ], [
                'href' => '#',
                'title' => 'Edit Mobile Suit'
            ]
        ]
    ])

    <div class='card'>
        <div class='card-content'>
            <span class='card-title'>Mobile Suit Information
                <span class='card-collapse'>
                    <i class='material-icons'>keyboard_arrow_up</i>
                </span>
            </span>
            <div class='row'>
                <form method='POST' action="/admin/mobilesuits/<?= $id ?>/edit">
                    {!! csrf_field() !!}

                    <input name="id" type="hidden" value="<?= $id ?>">

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
                                <option value="<?= $manufacturer->manufacturer_id ?>" <?= $msManufacturer == $manufacturer->manufacturer_id ? 'selected' : '' ?>><?= $manufacturer->name ?></option>
                            <?php endforeach; ?>
                        </select>
                        <label class="active">Manufacturer</label>
                    </div>
                    <div style='height: 1em; float: left; width: 100%;'></div>

                    <div class="input-field col s12">
                        <select id='pilots' name='pilots[]' multiple>
                            <?php foreach($pilots as $pilot): ?>
                                <option value="<?= $pilot->pilot_id ?>" <?= in_array($pilot->pilot_id, $msPilots) ? 'selected' : '' ?>><?= $pilot->name ?></option>
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

    <div class='card'>
        <div class='card-content collapsed'>
            <span class='card-title'>Variations (<?= count($variations) ?> total)
                <span class='card-collapse'>
                    <i class='material-icons'>keyboard_arrow_down</i>
                </span>
            </span>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Model</th>
                        <th>Manufacturer</th>
                        <th>Actions</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach($variations as $msv)
                        <tr>
                            <td>{{$msv->name}}</td>
                            <td>{{$msv->model}}</td>
                            <td>{{$msv->manufacturer->name}}</td>
                            <td>
                                <a href='/admin/mobilesuitvariations/<?= $msv->mobile_suit_variation_id ?>/edit'><i class="material-icons">mode_edit</i></a>
                                <a href='/admin/mobilesuitvariations/<?= $msv->mobile_suit_variation_id ?>/delete'><i class="material-icons">delete</i></a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>



@endsection
