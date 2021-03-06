@extends('layouts.header-footer')
@section('title', $project->project_name)
@section('contents')
    @php
    $project_id = $project->id;
    @endphp
    <div class="box__message">
        @if (Session::has('success'))
            <x-alert-message :message="Session::get('success')" color="lightgreen">
                <ion-icon name="checkmark-outline"></ion-icon>
            </x-alert-message>
        @elseif (Session::has('fail'))
            <x-alert-message :message="Session::get('fail')" color="lightpink">
                <ion-icon name="alert-outline"></ion-icon>
            </x-alert-message>
        @endif
    </div>
    <div class="field__editAndBack">
        <x-redirect-btn url="/projects" title="All projects">
            <ion-icon name="chevron-back-outline"></ion-icon>
        </x-redirect-btn>
        @if (Auth::user()->id == $project->creator)
            <x-submit-btn title="Save" id="button__project--save" form="form__project--update" style="normal">
                <ion-icon name="save-outline"></ion-icon>
            </x-submit-btn>
            <x-submit-btn title="Edit" id="button__project--edit" style="simple">
                <ion-icon name="create-outline"></ion-icon>
            </x-submit-btn>
        @endif
    </div>
    <div class="project__viewport">
        <div class="project__body--left">
            <div class="project__header--left">
                <img class="user__avatar" src="{{ $project->avatar }}" alt="" />
                <div class="user__infor--combo">
                    <h2>{{ $project->name }}</h2>
                    <p>{{ $project->description }}</p>
                </div>
            </div>
            <div class="project__navigate--combo">
                <button id="project__showAll--relative">All {{ $project->name }}'s projects</button>
                <button id="project__showProject--information">Overview</button>
            </div>
            @php
                $hidden_inputs = ['id' => $project_id];
            @endphp
            <x-post-form url="/projects/update" id="form__project--update" :hidden_inputs="$hidden_inputs">
                <div id="project__content--information">
                    <div class="project__content--left">
                        <div id="author__projects--all">
                            @foreach ($all_creator_project as $project_author)
                                <div class="card__allProjects--combo">
                                    <img class="image__allProjects--thumbnail" src="{{ $project_author->source }}" alt="" />
                                    <div class="information__allProjects">
                                        <div class="title__allProject--combo">
                                            <h2 class="name__allProjects">{{ $project_author->project_name }}</h2>
                                            <div class="price__allProjects">{{ $project_author->price }}</div>
                                        </div>
                                        <div class="description__allProjects">
                                            <div class="description__allProjects--texts">
                                                {{ $project_author->project_description }}
                                            </div>
                                        </div>
                                    </div>
                                    <x-redirect-btn url="/projects/{{ $project_author->id }}" title="View more" add_class="button__allProject--config">
                                        <ion-icon name="arrow-forward-outline"></ion-icon>
                                    </x-redirect-btn>
                                    @if (isset($array_project_id_in_cart) && in_array($project_author->id, $array_project_id_in_cart))
                                        <div class="check__element--isIncart">
                                            <ion-icon name="bag-check-outline"></ion-icon>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        </div>
                        <div id="project__information--content">
                            <div class="project__title--combo">
                                <textarea name="project_name" id="leftContent__project--title" disabled spellcheck="false">{{ $project->project_name }}</textarea>
                                <select name="project_type" id="leftContent__project--type" disabled>
                                    <option value="{{ $project->project_type }}">{{ $project->project_type }}</option>
                                    <option value="Kh??ng x??c ?????nh">Kh??ng x??c ?????nh</option>
                                    <option value="?????t ??ai">?????t ??ai</option>
                                    <option value="C??ng tr??nh">C??ng tr??nh</option>
                                </select>
                            </div>
                            <textarea name="project_description" id="leftContent__project--description" disabled spellcheck="false">{{ $project->project_description }}</textarea>
                            <input name="source" id="project__image--big" src="{{ $project->source }}" type="image" placeholder="H??y ch??n link ???nh t???i ????y." alt="">
                        </div>
                    </div>
                    <div id="div__embed--fixed">
                        <div class="project__content--right">
                            <x-post-form url="/" id="aaf"></x-post-form>
                            @if ($project->creator != Auth::user()->id && !isset($in_cart[0]->reference))
                                @php
                                    $hidden_inputs = ['id' => $project_id, 'source' => $project->source];
                                @endphp
                                <x-post-form url="/projects/add/cart" id="form__addToCard" :hidden_inputs="$hidden_inputs">
                                    <x-submit-btn title="Add to cart" form="form__addToCard" style="normal">
                                        <ion-icon name="add-outline"></ion-icon>
                                    </x-submit-btn>
                                </x-post-form>
                            @endif
                            <div class="project__information--detail">
                                <p>Gi??</p>
                                <input name="price" type="text" id="project__price--view" value="{{ $project->price }}" spellcheck="false" disabled>
                            </div>
                            <div class="project__information--detail">
                                <p>?????a ch???</p>
                                <textarea name="project_address" id="project__address--view" spellcheck="false" disabled>{{ $project->project_address }}</textarea>
                            </div>
                            <div class="project__information--detail">
                                <p>Di???n t??ch</p>
                                <input name="project_acreage" id="project__area--view" type="text" value="{{ $project->project_acreage }}" spellcheck="false" disabled>
                            </div>
                            <div class="project__information--detail">
                                <p>Hoa h???ng</p>
                                <input name="project_tip" id="project__tip--view" type="text" value="{{ $project->project_tip }}" spellcheck="false" disabled>
                            </div>
                        </div>
                    </div>
                </div>
            </x-post-form>
        </div>
        <div class="project__body--right">
            <div class="user__contact user__contact--phone">
                <p>S??? ??i???n tho???i</p>
                <p>{{ $project->phone }}</p>
            </div>
            <div class="user__contact user__contact--email">
                <p>Email</p>
                <p>{{ $project->email }}</p>
            </div>
            <div class="user__contact user__contact--facebook">
                <p>Facebook</p>
                <a href="#">Link Facebook</a>
            </div>
            <div class="user__contact user__contact--zalo">
                <p>Zalo</p>
                <a href="#">Link Zalo</a>
            </div>
            <div class="user__contact user__information--country">
                <p>Qu???c gia</p>
                <div class="user__country--combo">
                    <img id="user__country--flag"src="" alt="" />
                    <p id="user__country--name">{{ $project->country }}</p>
                </div>
            </div>
            @if (Auth::user()->id == $project->creator)
                @php
                    $hidden_inputs = ['id' => $project_id];
                @endphp
                <x-post-form url="/projects/delete" id="form__delete--project" :hidden_inputs="$hidden_inputs">
                    <x-submit-btn title="Delete project" form="form__delete--project" style="delete">
                        <ion-icon name="trash-outline"></ion-icon>
                    </x-submit-btn>
                </x-post-form>
            @endif
        </div>
    </div>
@endsection
