@extends('layouts.app')
@section('title', 'history')
@section('content')
    <section class="container-fluid accordion-direction d-flex flex-column flex-xl-row">
        @include('components.accordion')
        @include('components.rich-text')
    </section>
@endsection
