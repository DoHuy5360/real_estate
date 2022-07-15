@extends('layouts.header-footer')
@section('title', 'Add project')
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
        <a href="{{ url("projects") }}">
            <button id="project__button--back">Back</button>
        </a>
        <button type="submit" form="form__update" id="project__button--edit">Add</button>
    </div>
    <form action="{{ url("projects/add/project") }}" method="POST" id="form__update">
        @csrf

        <div class="the__project--all">
            <div class="project__title--wrap">
                <p>Name: <input name="project_name" type="text" value=""></p>
                <p>Price: <input name="price" type="text" value=""></p>
            </div>
            <div class="project__body">
                <input name="source" value="" alt="" class="project__image--background" placeholder="project image's url">
                <div class="project__content">
                    <textarea style="resize: none;" name="project_description" class="project__description" placeholder="Description ..."></textarea>
                </div>
            </div>
        </div>
    </form>
@endsection
