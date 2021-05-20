@extends('layouts.main-layout')
@section('content')
<main>
  <section class="jumbotron">

  </section>

  <section class="comics">
    <div class="container">
      <h2>CURRENT SERIES</h2>
      <ul>
        @foreach ($data as $comic)
        <li>
          <div class="images">
            <img src="{{$comic['thumb']}}" alt="">
          </div>
          <p>{{$comic['series']}}</p>
        </li>
        @endforeach
      </ul>
      <div class="btn">
        <button id="load" type="button" name="button">LOAD MORE</button>
      </div>

    </div>
  </section>

  <section class="icons">
    <div class="container">
      <ul>
        <li>
          <img src="{{ url('/storage/assets/buy-comics-digital-comics.png') }}" alt="">
          <p>DIGITAL COMICS</p>
        </li>
        <li>
          <img src="{{ url('/storage/assets/buy-comics-merchandise.png') }}" alt="">
          <p>DC MERCHANDISE</p>
        </li>
        <li>
          <img src="{{ url('/storage/assets/buy-comics-subscriptions.png') }}" alt="">
          <p>SUBSCRIPTION</p>
        </li>
        <li>
          <img src="{{ url('/storage/assets/buy-comics-shop-locator.png') }}" alt="">
          <p>COMIC SHOP LOCATOR</p>
        </li>
        <li>
          <img id="svg" src="{{ url('/storage/assets/buy-dc-power-visa.svg') }}" alt="">
          <p>DC POWER VISA</p>
        </li>
      </ul>
    </div>
  </section>
</main>
@endsection