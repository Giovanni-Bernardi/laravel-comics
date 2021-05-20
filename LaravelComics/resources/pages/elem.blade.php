@extends('layouts.main-layout')
@section('title')
{{$elem['series']}}
@endsection
@section('content')

<main>
    <div class="box-img-elem">
        <img src="{{$elem['thumb']}}" alt="">
        <div class="comic-book">
            <span>
                comic book
            </span>
        </div>
        <div class="gallery">
            <span>
                view gallery
            </span>
        </div>
    </div>
    <div class="blue-lines"></div>
    <div class="container-info-top">
        <div class="content">
            <div class="left">
                <h2>
                    {{$elem['title']}}
                </h2>
                <div class="price">
                    <span>
                        U.S.Price: <strong> {{$elem['price']}} </strong>
                    </span>
                    <div>
                        <span>
                            available
                        </span>
                        <div class="check">
                            <span>
                                Check Availability
                            </span>
                            <i class="fas fa-caret-down"></i>
                        </div>
                    </div>
                </div>
                <div class="description">
                    <p>
                        {{$elem['description']}}
                    </p>
                </div>
            </div>
            <div class="right">
                <h4>
                    advertisement
                </h4>
                <img src="{{ url('/storage/assets/adv-new.png') }}" alt="">
            </div>
        </div>
    </div>
    <div class="container-info-bottom">
        <div class="content">
            <div class="left">
                <h4>
                    Talent
                </h4>
                <div class="art-by">
                    <span class="subtitle cl-blue">
                        Art by:
                    </span>
                    <div class="container-link">
                        @foreach ($elem['artists'] as $a)
                        @if ($loop->last)
                        <a href="" class="blue">
                            {{$a}}
                        </a>
                        @else
                        <a href="" class="blue">
                            {{$a}}
                        </a>
                        ,
                        @endif
                        @endforeach
                    </div>
                </div>
                <div class="written-by">
                    <span class="subtitle cl-blue">
                        Written by:
                    </span>
                    <div class="container-link">
                        @foreach ($elem['writers'] as $a)
                        @if ($loop->last)
                        <a href="" class="blue">
                            {{$a}}
                        </a>
                        @else
                        <a href="" class="blue">
                            {{$a}}
                        </a>
                        ,
                        @endif
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="right">
                <h4>
                    Specs
                </h4>
                <div class="series-right">
                    <span class="subtitle cl-blue">
                        Series:
                    </span>
                    <a href="" class="blue">
                        {{$elem['series']}}
                    </a>
                </div>
                <div class="price-right">
                    <span class="subtitle cl-blue">
                        U.S. Price:
                    </span>
                    <span class="cl-blue">
                        {{$elem['price']}}
                    </span>
                </div>
                <div class="sale-right">
                    <span class="subtitle cl-blue">
                        On Sale Date:
                    </span>
                    <span class="cl-blue">
                        {{$elem['sale_date']}}
                    </span>
                </div>
            </div>
        </div>
        <div class="container-main-info-bottom">
            <div class="content-main-info-bottom">
                <div class="box-one">
                    <a href="">
                        digital comics
                    </a>
                    <img src="{{ url('/storage/assets/icons-1.png') }}" alt="">
                </div>
                <div class="box-two">
                    <a href="">
                        shop dc
                    </a>
                    <img src="{{ url('/storage/assets/icons-4.png') }}" alt="">
                </div>
                <div class="box-three">
                    <a href="">
                        comic shop locator
                    </a>
                    <img src="{{ url('/storage/assets/icons-3.png') }}" alt="">
                </div>
                <div class="box-four">
                    <a href="">
                        subscription
                    </a>
                    <img src="{{ url('/storage/assets/icons-2.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
</main>

@endsection