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
                            <h2>{{ $project->project_name }}</h2>
                            <p>Some message</p>
                        </div>
                        <div class="project__description">{{ $project->project_description }}</div>
                        <img class="project__image--big" src="{{ $project->source }}" alt="">
                    </div>
                </div>
                <div id="div__embed--fixed">
                    <div class="project__content--right">
                        @if ($project->creator != Auth::user()->id && !isset($in_cart[0]->reference))
                            <?php $hidden_inputs = ['id' => $project->id, 'source' => $project->source]; ?>
                            <x-post-form url="/projects/add/cart" id="form__addToCard" :hidden_inputs="$hidden_inputs">
                                <x-submit-btn title="Add to cart" form="form__addToCard" style="normal">
                                    <ion-icon name="add-outline"></ion-icon>
                                </x-submit-btn>
                            </x-post-form>
                        @endif
                        <div class="project__information--detail project__price">
                            <p>Giá</p>
                            <p>{{ $project->price }}</p>
                        </div>
                        <div class="project__information--detail project__address">
                            <p>Địa chỉ</p>
                            <p>Ở trên trái đất</p>
                        </div>
                        <div class="project__information--detail project__area">
                            <p>Diện tích</p>
                            <p>120x310</p>
                        </div>
                        <div class="project__information--detail project__type">
                            <p>Loại hình</p>
                            <p>Địa ốc</p>
                        </div>
                        <div class="project__information--detail project__tip">
                            <p>Hoa hồng</p>
                            <p>1% <span>({{ ($project->price / 100) * 1 }})</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="project__body--right">
            <div class="user__contact user__contact--phone">
                <p>Số điện thoại</p>
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
                <p>Quốc gia</p>
                <div class="user__country--combo">
                    <img id="user__country--flag"src="" alt="" />
                    <p id="user__country--name">{{ $project->country }}</p>
                </div>
            </div>
            @if (Auth::user()->id == $project->creator)
                @php
                    $hidden_inputs = ['id' => $project->id];
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
