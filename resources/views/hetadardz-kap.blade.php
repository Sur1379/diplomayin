@extends('layouts.app')
@section('title', 'hetadardz.kap')
@section('content')

<section class="map-wrapper d-flex flex-column align-items-center bg-light">
    <div class="map-outer mt-5">
        <div class="g-map_canvas">
            <iframe width="600" height="500" id="g-map_canvas"
                    src="https://maps.google.com/maps?q=109%20Teryan%20St,%20Yerevan%200009&t=&z=13&ie=UTF8&iwloc=&output=embed">
            </iframe>
        </div>
    </div>
    <div class="map-text-container d-flex flex-column flex-xl-row m-5">
        <div class="map-text text-center">
            <h1>
                <span id="words">34000 և ավելի շրջանավարտ</span>
            </h1>
        </div>
    </div>
</section>

@endsection

