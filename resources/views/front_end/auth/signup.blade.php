@extends('front_end.layout.main')
@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-area bg-overlay" style="background-image:url('assets/img/banner/leagues-pages-banner.jpg')">
    <div class="container">
        <div class="breadcrumb-inner text-center">
            <div class="section-title mb-0">
                <h2 class="page-title">S'inscrire</h2>
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
                        <h3 class="small-title mt-0">S'inscrire</h3>
                        @if(Session::has('success'))
                          <span class="alert alert-danger text-center" style="width: 746px;">{{ Session::get('success') }}</span>
                        @endif
                    </div>
                    <form action="{{ route('signup.post') }}" method="post" class="mt-5 mt-md-4">
                         @csrf
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="single-input-inner style-border">
                                    <input type="text" name="name" placeholder="Entrez votre nom">
                                    @error('name')
                                     <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="single-input-inner style-border">
                                    <input type="text" name="email" placeholder="Entrez votre e-mail">
                                    @error('email')
                                     <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-border">
                                    <input type="text" name="username" placeholder="Entrez le nom d'utilisateur">
                                    @error('username')
                                     <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-border">
                                    <input type="password" name="password" placeholder="Entrez votre mot de passe">
                                    @error('password')
                                     <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="single-input-inner style-border">
                                    <input type="password" name="password_confirmation" placeholder="Confirmez le mot de passe">
                                </div>
                            </div>
                            <div class="col-12">
                                <button type="submit" class="btn btn-base">S'inscrire</button>
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
