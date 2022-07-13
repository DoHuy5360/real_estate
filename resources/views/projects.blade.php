@extends('layouts.header-footer')
@section('contents')
    <div class="wrap__ourprojects">
        <div class="ourprojects__title"><span>Our</span><br /><span>Projects</span></div>
        <div class="ourprojects__cards--wrap">
            @foreach ($all_projects as $project)
                <div class="project__card">
                    <div class="projectcard__img--wrap">
                        <img src="{{ $project->source }}"
                            alt="{{ $project->name }}" />
                    </div>
                    <div class="projectcard__text--wrap">
                        <div class="projectcard__title">{{ $project->name }}</div>
                        <div class="projectcard__description">{{ $project->description }}</div>
                        <a href="{{ '/projects/'.$project->id }}">
                            <button class="projectcard__btn--viewmore">VIEW MORE →</button>
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
