@extends('front_end.layout.main')
@section('content')
<!-- banner start -->
<div class="banner-area" style="background-image: url('{{ asset('assets/img/banner/leagues-pages-banner.jpg') }}');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 align-self-center">
                <div class="banner-inner text-center">
                    <h1 class="b-animate-2 title">Mon profil
                    </h1>

                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->


<!-- Leagues Content Section Start -->
<div class="my-profile py-10">
    <div class="container">
        <div class="mmy-profile-inner">
            @include('front_end.pages.profile.profile-sidebar')
            <div class="col-sec">
                <div class="user-content-update">
                    <div class="">
                        <div class="tab-content tab-content-1 active">
                            <div class="user-content-box">
                                <form action="{{ route('profile.update') }}" method="POST">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3">
                                            <input type="text" placeholder="Name" class="form-control para" id="name"
                                                required="required" autocomplete="off" name="name" value="{{Auth::user()->name}}">
                                        </div>
                                        <div class="mb-3">
                                            <input type="text" placeholder="Username" class="form-control para"
                                                id="username" required="required" autocomplete="off" name="username" autocomplete="off" value="{{Auth::user()->username}}">
                                        </div>
                                        <div class="mb-3">
                                            <input type="email" placeholder="E-mail" class="form-control para"
                                                id="email" required="required" autocomplete="off"  name="email" value="{{Auth::user()->email}}">
                                        </div>
                                        <!-- <div class="mb-3">
                                            <input type="tel" placeholder="Phone Number" class="form-control para"
                                                id="Phone" required="required" autocomplete="off">
                                        </div> -->
                                    </div>
                                    <button type="submit">Mise à jour</button>

                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Leagues Content Section End -->
@endsection
