@extends('layouts.header-footer')
@section('title', 'Projects')
@section('contents')
    <div class="wrap__ourprojects">
        <div class="ourprojects__title"><span>Our</span><br /><span>Projects</span>
            <a href="{{ url('projects/add/project') }}">
                <button id="btn__project--add">Add project</button>
            </a>
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
                                <p>About {{ $project->name }}: {{ $project->description }}</p>
                            </div>
                            <img src="{{ $project->avatar }}" alt="" class="project__creator--avatar" title="{{ $project->name }}">
                        </div>
                        <div class="projectcard__title">{{ $project->project_name }}</div>
                        <div class="projectcard__description">{{ $project->project_description }}</div>
                        <a href="{{ url("projects/{$project->id}") }}">
                            <button type="button" class="projectcard__btn--viewmore">VIEW MORE →</button>
                        </a>
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
