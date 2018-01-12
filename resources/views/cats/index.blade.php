@extends('layouts.app')

@section('content')

@foreach ($cats as $cat)
<div class="card">
    <div class="card-image">
        <figure class="image is-4by3">
            <img src="{{ asset('img/cats/' . $cat->image) }}" alt="{{ $cat->name }}">
        </figure>
    </div>
    <div class="card-content">
        <div class="media">
            <div class="media-left">
                <figure class="image is-48x48">
                    <img src="{{ asset('img/cats/' . $cat->image) }}" alt="{{ $cat->name }}">
                </figure>
            </div>
            <div class="media-content">
                <p class="title is-4">{{ $cat->name }}</p>
                <p class="subtitle is-6">{{ $cat->age }} yrs old</p>
            </div>
        </div>

        <div class="content">
            <p><strong>Breed:</strong> {{ $cat->breed }}</p>
            <p><strong>Bio:</strong></p>

            {{ $cat->bio }}
        </div>
    </div>
</div>
@endforeach

@endsection
