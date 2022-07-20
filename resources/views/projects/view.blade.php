@extends('layouts.header-footer')
@section('title', $project->project_name)
@section('contents')
    <div class="box__message">
        @if (Session::has('add-success'))
            <x-alert-message :message="Session::get('add-success')" color="lightgreen">
                <ion-icon name="checkmark-outline"></ion-icon>
            </x-alert-message>
        @elseif (Session::has('add-fail'))
            <x-alert-message :message="Session::get('add-fail')" color="lightpink">
                <ion-icon name="alert-outline"></ion-icon>
            </x-alert-message>
        @endif
    </div>
    <div class="field__editAndBack">
        <x-redirect-btn url="/projects" title="All projects">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </x-redirect-btn>
        @if (Auth::user()->id == $project->creator)
            <x-redirect-btn url="/projects/edit/{{ $project->id }}" title="Edit">
                <ion-icon name="build-outline"></ion-icon>
            </x-redirect-btn>
        @endif
    </div>
    <div class="the__project--all">
        <div class="project__title--wrap">
            <p>{{ $project->project_name }}</p>
            <p>{{ $project->price }}</p>
            @if ($project->creator != Auth::user()->id && !isset($in_cart[0]->reference))
                <?php $hidden_inputs = ['id' => $project->id, 'source' => $project->source]; ?>
                <x-post-form url="/projects/add/cart" id="form__addToCard" :hidden_inputs="$hidden_inputs">
                    <x-submit-btn title="Add to cart" form="form__addToCard" style="normal">
                        <ion-icon name="add-outline"></ion-icon>
                    </x-submit-btn>
                </x-post-form>
            @endif
        </div>
        <div class="project__body">
            <img src="{{ $project->source }}" alt="" class="project__image--background">
            <div class="project__content">
                <img src="{{ $project->source }}" alt="" class="project__image--small">
                <div class="project__description">{{ $project->project_description }}</div>
            </div>
            <div class="project__image--more">
                <img src="{{ $project->source }}" alt="">
                <img src="{{ $project->source }}" alt="">
            </div>
        </div>
        @php
            $hidden_inputs = ['id' => $project->id];
        @endphp
        <x-post-form url="/projects/delete" id="form__delete--project" :hidden_inputs="$hidden_inputs">
            <x-submit-btn title="Delete project" form="form__delete--project" style="delete">
                <ion-icon name="trash-outline"></ion-icon>
            </x-submit-btn>
        </x-post-form>
    </div>
@endsection
