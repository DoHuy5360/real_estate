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
                <div class="project__card" style="--bg-img: url({{ $project->source }})">
                    <div class="card__layer">
                        <div class="card__information">
                            <h2 class="card__project--name">{{ $project->project_name }}</h2>
                            <p>{{ $project->price }}</p>
                            <img id="creator__avatar--inprojects" src="{{ $project->avatar }}" alt="">
                            <x-redirect-btn url="/projects/{{ $project->id }}" title="VIEW MORE" add_class="card__information--button">
                                <ion-icon name="arrow-forward-outline"></ion-icon>
                            </x-redirect-btn>
                        </div>
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
