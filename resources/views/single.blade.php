@extends('layouts.app')

@section('titolo-pagina', 'DC-Single')

@section('contenuto-main')

    <div>
        <div class="sec2">
            
        </div>
        <div class="bg-bluestripe">
          
        </div>
        <div class="container p-3">
            <div class="row d-flex flex-nowrap">
                <div class="w-75 comicDesc">
                  <img src="{{ $fumetto_singolo['thumb'] }}" alt="{{ $fumetto_singolo['series'] }}">
                    <h3>{{ $fumetto_singolo['title'] }}</h3>
                    <div class="bg-success">
                        <h6>U.S. Price: {{ $fumetto_singolo['price'] }}</h6>
                        <h6 class="avaible">AVAIBLE</h6>
                    </div>
                    <p>{!! $fumetto_singolo['description'] !!}</p>
                </div>
                <div>
                    <h3>ADVERTISEMENT</h3>
                    <img src="{{ asset('img/adv.jpg') }}" alt="adv">
                </div>
            </div>
        </div>
        <div class="bg-white-50 border-top border-bottom">
            <div class="container">
                <div class="row">
                    <h2> {{ $fumetto_singolo['series'] }}</h2>
                </div>
            </div>
        </div>

    </div>

@endsection
