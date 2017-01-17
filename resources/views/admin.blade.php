@extends('layouts.app')

@section('content')

<h3 class='header'>&nbsp;Metaverse Administration</h3>

<div class='row'>
    <div class='col s12 m3'>
        <a href='/admin/mobilesuits'>
            <div class='card'>
                <div class='card-content center-align'>
                    <i class='large material-icons'>android</i><br />
                    <span class='card-title'>Mobile Suits</span>
                </div>
            </div>
        </a>
    </div>

    <div class='col s12 m3'>
        <a href='/admin/mobilesuitvariations'>
            <div class='card'>
                <div class='card-content center-align'>
                    <i class='large material-icons'>android</i><br />
                    <span class='card-title'>MSVs</span>
                </div>
            </div>
        </a>
    </div>

    <div class='col s12 m3'>
        <a href='/admin/pilots'>
            <div class='card'>
                <div class='card-content center-align'>
                    <i class='large material-icons'>person</i><br />
                    <span class='card-title'>Pilots</span>
                </div>
            </div>
        </a>
    </div>

    <div class='col s12 m3'>
        <a href='/admin/media'>
            <div class='card'>
                <div class='card-content center-align'>
                    <i class='large material-icons'>movie</i><br />
                    <span class='card-title'>Media</span>
                </div>
            </div>
        </a>
    </div>

    <div class='col s12 m3'>
        <a href='/admin/timelines'>
            <div class='card'>
                <div class='card-content center-align'>
                    <i class='large material-icons'>history</i><br />
                    <span class='card-title'>Timelines</span>
                </div>
            </div>
        </a>
    </div>

    <div class='col s12 m3'>
        <a href='/admin/factions'>
            <div class='card'>
                <div class='card-content center-align'>
                    <i class='large material-icons'>pie_chart</i><br />
                    <span class='card-title'>Factions</span>
                </div>
            </div>
        </a>
    </div>
</div>

<h3 class='header'>&nbsp;Gunpla Administration</h3>
<div class='row'>
    <div class='col s12 m3'>
        <a href='/admin/scales'>
            <div class='card'>
                <div class='card-content center-align'>
                    <i class='large material-icons'>nature_people</i><br />
                    <span class='card-title'>Scales</span>
                </div>
            </div>
        </a>
    </div>
</div>

<h3 class='header'>&nbsp;Scraping Administration</h3>

<h3 class='header'>&nbsp;Parsing Administration</h3>


@endsection
