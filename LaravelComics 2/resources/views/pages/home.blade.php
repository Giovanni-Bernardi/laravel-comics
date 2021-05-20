@extends('layouts.main-layout')
@section('content')
    <main>
        <section class="section-one">
            <div class="current">
                <h2>
                    current series
                </h2>
            </div>
            <ul>
                @foreach ($data as $item)
                    <li>
                        <a href="{{route('elem', $loop->index )}}">
                            <div class="box">
                                <div class="box-img">
                                    <img src="{{$item['thumb']}}" alt="">
                                </div>
                                <h3>
                                    {{$item['series']}}
                                </h3>
                            </div>
                        </a>
                    </li>
                @endforeach
            </ul>
            <div class="load-button">
                <button>
                    LOAD MORE
                </button>
            </div>
        </section>
        <section class="section-two">
            <ul>
                <li>
                    <img src="{{ url('/storage/assets/buy-comics-digital-comics.png') }}" alt="">
                    <span>
                        digital comics
                    </span>
                </li>
                <li>
                    <img src="{{ url('/storage/assets/buy-comics-merchandise.png') }}" alt="">
                    <span>
                        dc merchandise
                    </span>
                </li>
                <li>
                    <img src="{{ url('/storage/assets/buy-comics-subscriptions.png') }}" alt="">
                    <span>
                        subscription
                    </span>
                </li>
                <li>
                    <img src="{{ url('/storage/assets/buy-comics-shop-locator.png') }}" alt="">
                    <span>
                        comic shop locator
                    </span>
                </li>
                <li>
                    <img id="img-svg" src="{{ url('/storage/assets/buy-dc-power-visa.svg') }}" alt="">
                    <span>
                        dc power visa
                    </span>
                </li>
            </ul>
        </section>
    </main>
@endsection