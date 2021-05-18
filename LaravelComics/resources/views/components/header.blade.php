<header>
    <div class="header-top">
        <div class="content-htop">

        </div>
    </div>
    <div class="header-bottom">
        <a href="{{ route('home')}}">
            <img src="{{ url('/storage/assets/dc-logo.png') }}" alt="">
        </a>
        <ul>
            @foreach ($linksHeader as $link)
            <li>
                {{$link}}
            </li>
            @endforeach
        </ul>
        <div class="searchbar">
            <input type="text" placeholder="Search">
            <i class="fas fa-search"></i>
        </div>
    </div>

</header>
<div id="jumbotron">

</div>