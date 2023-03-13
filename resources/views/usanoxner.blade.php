@extends('layouts.app')
@section('title', 'usanoxner')
@section('content')
    <section class="students-section d-flex mt-5 pt-5 align-items-center justify-content-evenly gap-2">
        @foreach($members as $member)
            <div class="students">
                <a href="profile/{{$member->id}}">
                    <div class="image-decorated position-relative">
                        <img src="{{$member->image_url}}" alt="student">
                        <div class="image-overlay"></div>
                    </div>
                    <h5>{{$member->first_name}} {{$member->last_name}}</h5>
                    <p>{{$member->grade}}</p>
                </a>
            </div>
        @endforeach
    </section>
@endsection
