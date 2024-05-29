@extends('layouts.admin')

@section('content')

<header class="py-5 bg-dark text-white">
    <div class="container  d-flex align-items-center justify-content-between">
        <h1>{{$project->title}}</h1>
    </div>
</header>


<div class="container py-5">
    <div class="d-flex gap-5">
        <img width="500" src="{{$project->cover_image}}" alt="{{$project->title}}">
        <section>
            <p>{{$project->content}}</p>

            <strong>See my Project Code from GitHub:</strong>
            <p>link here</p>

            <strong>Category:</strong>
            <p>category here</p>

            <strong>Technology:</strong>
            <p>technology used here</p>
        </section>
    </div>
</div>

@endsection