@extends('layouts.header-footer')
@section('contents')
    <div class="field__editAndBack">
        <a href="{{ route('projects') }}">
            <button id="project__button--back">Back</button>
        </a>
        <a href="{{ url("projects/edit/{$project->id}") }}">
            <button id="project__button--edit">Edit</button>
        </a>
    </div>
    @if (Session::has('message'))
        <h2>{{ Session::get('message') }}</h2>
    @endif
    <div class="the__project--all">
        <div class="project__title--wrap">
            <p>{{ $project->name }}</p>
            <p>{{ $project->price }}</p>
            <form action="{{ url("projects/{$project->id}") }}" id="form__add--product" method="POST">
                @csrf
                <input name="id" type="hidden" value="{{ $project->id }}">
                <button type="submit">Add to cart</button>
            </form>
        </div>
        <div class="project__body">
            <img src="{{ $project->source }}" alt="" class="project__image--background">
            <div class="project__content">
                <img src="{{ $project->source }}" alt="" class="project__image--small">
                <div class="project__description">{{ $project->description }}</div>
            </div>
            <div class="project__image--more">
                <img src="{{ $project->source }}" alt="">
                <img src="{{ $project->source }}" alt="">
            </div>
        </div>
    </div>
@endsection
