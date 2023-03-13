@extends('layouts.app')
@section('title', 'design')
@section('content')
    <section class="accordion-direction d-flex flex-column flex-xl-row">
        @include('components.accordion')
        <div class="gallery-wrapper d-flex ">
            @include('components.rich-text')
        </div>
    </section>
@endsection
