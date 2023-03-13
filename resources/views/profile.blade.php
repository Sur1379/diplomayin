@extends('layouts.app')
@section('title', 'profile')
@section('content')
    <section>
        <div class="container-fluid">
            <div class="row profile-wrapper align-items-center justify-content-center p-4">
                <div class="col-12 col-md-6 col-sm-8 d-flex justify-content-center">
                    <a href="{{$imageUrl}}" data-rel="lightcase:my-slideshow">
                        <img src="{{$imageUrl}}" class="w-100 rounded" alt="Profile Image">
                    </a>
                </div>
                <div class="col-12 col-md-6 col-sm-8 text">
                    <h1>{{$firstName}} {{$lastName}}</h1>
                    <p>
                        <i>{{$faculty}} բաժին</i>
                    </p>
                    <p>{{$dob}}</p>
                    <p>
                        <a href="mailto:{{$email}}">{{$email}}</a>
                    </p>
                    <p>
                        <a href="tel:{{$phoneNumber}}">{{$phoneNumber}}</a>
                    </p>
                    <p>{{$address}}</p>
                </div>
            </div>
        </div>
    </section>
@endsection
