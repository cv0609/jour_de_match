@extends('front_end.layout.main')
@section('content')
<div class="banner-area" style="background-image: url('{{asset('assets/img/banner/leagues-pages-banner.jpg')}}')">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 align-self-center">
                <div class="banner-inner text-center">
                    <h1 class="b-animate-2 title">Mettre à jour le mot de passe
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
                                <form action="{{ route('profile.update.password') }}" method="POST" class="mt-60 ">
                                    @csrf
                                    <div class="row">
                                        <div class="mb-3">
                                            <input type="password" placeholder="Current Password"
                                                class="form-control para" id="cur_password" 
                                                autocomplete="off" name="current_password">
                                                @error("current_password")
                                            <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" placeholder="New Password" class="form-control para"
                                                id="new_password"  autocomplete="off" name="new_password">
                                                @error("new_password")
                                            <span class="text-danger">{{ $message }}</span>
                                          @enderror
                                        </div>
                                        <div class="mb-3">
                                            <input type="password" placeholder="Confirm Password"
                                                class="form-control para" id="conf_password" 
                                                autocomplete="off" name="new_password_confirmation">
                                        </div>
                                    </div>
                                    <button type="submit" >Mise à jour</button>

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
