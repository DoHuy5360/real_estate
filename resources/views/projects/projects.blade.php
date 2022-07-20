@extends('layouts.header-footer')
@section('title', 'Projects')
@section('contents')
    @if (Session::has('delete-success'))
        <x-alert-message>
            <x-slot name="status">
                <ion-icon name="checkmark-outline"></ion-icon>
            </x-slot>
            <x-slot name="message">
                {{ __(Session::get('delete-success')) }}
            </x-slot>
            <x-slot name="color">
                {{ __('lightgreen') }}
            </x-slot>
        </x-alert-message>
    @endif
    <div class="wrap__ourprojects">
        <div class="ourprojects__title"><span>Our</span><br /><span>Projects</span><br>
            <x-redirect-btn url="/projects/add/project" title="Add new project">
                <ion-icon name="add-circle-outline"></ion-icon>
            </x-redirect-btn>
        </div>
        <div class="ourprojects__cards--wrap">
            @foreach ($all_projects as $project)
                <div class="project__card">
                    <div class="projectcard__img--wrap">
                        <img src="{{ $project->source }}" alt="{{ $project->name }}" />
                    </div>
                    <div class="projectcard__text--wrap">
                        <div class="project__creator--info">
                            <div class="creator__avatar--cover">
                                <h2>Name: {{ $project->name }}</h2>
                                <p>Email: {{ $project->email }}</p>
                                <p>Phone: {{ $project->phone }}</p>
                                <p>Country: {{ $project->country }}</p>
                                <p>About {{ $project->name }}: {{ $project->description }}</p>
                            </div>
                            <img src="{{ $project->avatar }}" alt="" class="project__creator--avatar" title="{{ $project->name }}">
                        </div>
                        <div class="projectcard__title">{{ $project->project_name }}</div>
                        <div class="projectcard__description">{{ $project->project_description }}</div>
                        <x-redirect-btn url="/projects/{{$project->id}}" title="VIEW MORE">
                            <ion-icon name="arrow-forward-outline"></ion-icon>
                        </x-redirect-btn>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="wrap__changeslide--projects">
            <div class="project__index--location"><span> 01 </span>/<span>05</span></div>
            <button class="ourproject__btn--previous">←</button>
            <button class="ourproject__btn--next">→</button>
        </div>
    </div>
@endsection
