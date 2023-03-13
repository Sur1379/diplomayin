@extends('layouts.app')
@section('title', 'qnnutyunner')
@section('content')
    <section>
        <div class="main-wrapper">
            <div class="main p-4">
                <div class="main-text">
                    <h4 class="mb-3">ՄԱՍՆԱԳԻՏՈՒԹՅՈՒՆՆԵՐԻ ՑԱՆԿ</h4>
                    @include('components.tabs')
                </div>
            </div>
        </div>
    </section>
@endsection
