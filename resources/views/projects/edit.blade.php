@extends('layouts.header-footer')
@section('title', 'Edit project')
@section('contents')
<div class="box__message">
    @if (Session::has('edit-success'))
            <x-alert-message>
                <x-slot name="status">
                    <ion-icon name="checkmark-outline"></ion-icon>
                </x-slot>
                <x-slot name="message">
                    {{ __(Session::get('edit-success')) }}
                </x-slot>
                <x-slot name="color">
                    {{ __('lightgreen') }}
                </x-slot>
            </x-alert-message>
        @elseif (Session::has('edit-fail'))
            <x-alert-message>
                <x-slot name="status">
                    <ion-icon name="alert-outline"></ion-icon>
                </x-slot>
                <x-slot name="message">
                    {{ __(Session::get('edit-fail')) }}
                </x-slot>
                <x-slot name="color">
                    {{ __('lightsalmon') }}
                </x-slot>
            </x-alert-message>
        @endif
</div>
    <div class="field__editAndBack">
        <a href="{{ url("projects/{$project->id}") }}">
            <button id="project__button--back">Back</button>
        </a>
        <button type="submit" form="form__update" id="project__button--edit">Update</button>
    </div>
    <form action="{{ url("projects/edit/{$project->id}") }}" method="POST" id="form__update">
        @csrf

        <div class="the__project--all">
            <div class="project__title--wrap">
                <p><input name="name" type="text" value="{{ $project->name }}"></p>
                <p><input name="price" type="text" value="{{ $project->price }}"></p>
            </div>
            <div class="project__body">
                <input name="source" value="{{ $project->source }}" alt="" class="project__image--background">
                <div class="project__content">
                    <input name="source" value="{{ $project->source }}" alt="" class="project__image--small">
                    <textarea style="resize: none;" name="description" class="project__description">{{ $project->description }}</textarea>
                </div>
                <div class="project__image--more">
                    <input name="source" value="{{ $project->source }}" alt="">
                    <input name="source" value="{{ $project->source }}" alt="">
                </div>
            </div>
        </div>
    </form>
@endsection
