@extends('layouts.master')
@section('content')
<div class="page-heading text-center">
    <div class="container zoomIn animated">
        <h1 class="page-title">Profile<span class="title-under"></span></h1>
        <p class="page-description">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit Necessitatibus.
        </p>
    </div>
</div>

<h1 class="page-title text-center">Welcome back, {{$user->name}}</h1>
<div class="container">
<h3 class="">
        Name:   {{ $user->name }}
        <span><button class="btn btn"type="submit">Change</button></span>
    </h3>
    <h3 class="">
        Email:    {{ $user->email }}
        <span><button class="btn btn"type="submit">Change</button></span>
    </h3>
    <h3 class="">
        Mobile:    {{ $user->mobile }}
        <span><button class="btn btn"type="submit">Change</button></span>
    </h3>
</div>
@endsection
