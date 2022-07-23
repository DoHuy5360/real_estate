@extends('layouts.header-footer')
@section('title', 'Edit project')
@section('contents')
    <div class="box__message">
        @if (Session::has('edit-success'))
            <x-alert-message :message="Session::get('edit-success')" color="lightgreen">
                <ion-icon name="checkmark-outline"></ion-icon>
            </x-alert-message>
        @elseif (Session::has('edit-fail'))
            <x-alert-message :message="Session::get('edit-fail')" color="lightpink">
                <ion-icon name="alert-outline"></ion-icon>
            </x-alert-message>
        @endif
    </div>
    <div class="field__editAndBack">
        <x-redirect-btn url="projects/{{ $project->id }}" title="Stop edit">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </x-redirect-btn>
        <x-submit-btn title="Save change" form="form__update" style="normal">
            <ion-icon name="save-outline"></ion-icon>
        </x-submit-btn>
    </div>
    <form action="{{ url("projects/edit/{$project->id}") }}" method="POST" id="form__update">
        @csrf

        <div class="the__project--all">
            <div class="project__title--wrap">
                <p><input name="name" type="text" value="{{ $project->project_name }}"></p>
                <p><input name="price" type="text" value="{{ $project->price }}"></p>
            </div>
            <div class="project__body">
                <input name="source" value="{{ $project->source }}" alt="" class="project__image--background">
                <div class="project__content">
                    <input name="source" value="{{ $project->source }}" alt="" class="project__image--small">
                    <textarea name="description" style="resize: none;" class="project__description">{{ $project->project_description }}</textarea>
                </div>
                <div class="project__image--more">
                    <input name="source" value="{{ $project->source }}" alt="">
                    <input name="source" value="{{ $project->source }}" alt="">
                </div>
            </div>
        </div>
    </form>
@endsection
