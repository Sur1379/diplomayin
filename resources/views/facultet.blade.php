@extends('layouts.app')
@section('title', 'facultet')
@section('content')
    <section class="gallery-wrapper">
        <x-video-banner/>
        @include('components.slider')
        @include('components.accordion')
    </section>
@endsection
