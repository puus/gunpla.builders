<nav class='blue lighten-2'>
    <div class='nav-wrapper'>
        <div class='col s12'>
            @foreach($crumbs as $crumb)
                <a href='{{$crumb["href"]}}' class='breadcrumb'>{{$crumb["title"]}}</a>
            @endforeach
        </div>
    </div>
</nav>
