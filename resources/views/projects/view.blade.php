@extends('layouts.header-footer')
@section('title', $project->name)
@section('contents')
    <div class="field__editAndBack">
        <a href="{{ url('/projects') }}">
            <button id="project__button--back">All projects</button>
        </a>
        <a href="{{ url("projects/edit/{$project->id}") }}">
            <button id="project__button--edit">Edit</button>
        </a>
    </div>
    <div class="box__message">
        @if (Session::has('add-success'))
            <x-alert-message>
                <x-slot name="status">
                    <ion-icon name="checkmark-outline"></ion-icon>
                </x-slot>
                <x-slot name="message">
                    {{ __(Session::get('add-success')) }}
                </x-slot>
                <x-slot name="color">
                    {{ __('lightgreen') }}
                </x-slot>
            </x-alert-message>
        @elseif (Session::has('add-fail'))
            <x-alert-message>
                <x-slot name="status">
                    <ion-icon name="alert-outline"></ion-icon>
                </x-slot>
                <x-slot name="message">
                    {{ __(Session::get('add-fail')) }}
                </x-slot>
                <x-slot name="color">
                    {{ __('lightsalmon') }}
                </x-slot>
            </x-alert-message>
        @endif
    </div>
    <div class="the__project--all">
        <div class="project__title--wrap">
            <p>{{ $project->name }}</p>
            <p>{{ $project->price }}</p>
            <form action="{{ url("projects/{$project->id}") }}" id="form__add--product" method="POST">
                @csrf
                <input name="id" type="hidden" value="{{ $project->id }}">
                <input name="source" type="hidden" value="{{ $project->source }}">
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
