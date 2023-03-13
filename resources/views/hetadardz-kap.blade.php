@extends('layouts.app')
@section('title', 'hetadardz-kap')
@section('content')
<section class="map-wrapper d-flex flex-column align-items-center bg-light">
   @include('components.map')
    @include('components.maps_text')
</section>
@endsection
