@extends('front_end.layout.main')
@section('content')   
   <!-- breadcrumb start -->
    <div class="breadcrumb-area bg-overlay" style="background-image:url('assets/img/banner/leagues-pages-banner.jpg')">
        <div class="container">
            <div class="breadcrumb-inner text-center">
                <div class="section-title mb-0">
                    <h2 class="page-title">Se connecter</h2>
                </div>
            </div>
        </div>
    </div>
    <!-- breadcrumb end -->

    <!-- contact form area start -->
    <div class="contact-form-area pd-top-100 pd-bottom-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-7 mt-4 mt-lg-0 ps-lg-5">
                    <div class="contact-form-inner-wrap">
                        <div class="section-title mb-0">
                            <h3 class="small-title mt-0">Se connecter</h3>
                        </div>
                        <form action="{{ route('login.post') }}" method="post" class="mt-5 mt-md-4">
                            @csrf
                            <div class="row">
                                <div class="col-12">
                                    <div class="single-input-inner style-border">
                                        <input type="Email" name="email" placeholder="Email">
                                        @error('email')
                                         <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="single-input-inner style-border">
                                        <input type="password" name="password" placeholder="Mot de passe">
                                        @error('password')
                                         <span class="text-danger">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="col-12">
                                    <button type="submit" class="btn btn-base">Se connecter</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- contact form area end -->
    @endsection
