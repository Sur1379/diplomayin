@extends('layouts.app')
@section('title', 'shinararutyun')
@section('content')
    <section class="accordion-direction d-flex flex-column flex-xl-row">
        @include('components.accordion')
        @include('components.rich-text')
    </section>
@endsection
