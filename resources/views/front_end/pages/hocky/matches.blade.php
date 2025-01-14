@extends('front_end.layout.main')
@section('title', 'Matchs')
@section('content')
<!-- breadcrumb start -->
<div class="breadcrumb-area bg-overlay" style="background-image:url('assets/img/banner/leagues-pages-banner.jpg')">
    <div class="container">
        <div class="breadcrumb-inner text-center">
            <div class="section-title mb-0">
                <ul class="leagues-ul">
                    <li class="inline-list home-list">
                        <h3>
                            <a href="{{ route('home') }}">Maison</a>
                        </h3>
                    </li>
                    <li class="inline-list next-page-list">
                        <h3>
                            Matchs
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->


<!-- Leagues Content Section Start -->
<section class="basket_leagues matches py-5">
    <div class="container">
        <div class="basket_leagues-inner">
            <div class="back-btn">
                <a href="{{ route('leagues') }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#fff">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                    </svg>
                </a>
            </div>
            <h2 class="text-center">Saison {{ (date('Y') - 1) . '-' . date('Y') }}</h2>

            <div class="basket_leagues-inner-content">
                <div class="matches-list">
                    <ul class="match-team-header national-header">
                        <li class="match-item header-color">
                            <div class="match-team match-width">
                                <div class="match-team-inner">
                                    <h6>Équipe</h6>
                                </div>
                            </div>
                            <div class="match-info match-width">
                                <h6>Informations sur les matchs</h6>
                            </div>
                            <div class="match-team match-width">
                                <div class="match-team-inner">
                                    <h6>Équipe</h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul class="table-color national-table">
                          @foreach ($matches as $key => $matche)
                            @php
                            $startSoonMatch = getMatchStatus($matche->fixture_date);
                            @endphp
                           <li class="match-item matche-main" data-fixture-id="{{ $matche->id}}"  data-home-team="{{ $matche->home_team_id }}" data-away-team="{{ $matche->away_team_id }}">
                            <a href="{{ route('matche-detail',['matcheId'=>$matche->id]) }}">
                                <div class="match-team match-width">
                                    <div class="match-team-inner">
                                        <img src="{{$matche->home_team_logo}}" class="lazy-load"
                                            alt="team-logo">
                                        <h6>{{ $matche->home_team_name }}</h6>
                                    </div>

                                </div>
                                <div class="match-info match-width">
                                <h6>{{$matche->venue_name}}</h6>
                                <p>{{$matche->venue_city}}</p>
                                <span>{{ date('Y-m-d h:i a',strtotime($matche->fixture_date))}}</span>
                                </div>
                                <div class="match-team match-width">
                                    <div class="match-team-inner">
                                        <img src="{{$matche->away_team_logo}}" class="lazy-load"
                                            alt="team-logo">
                                        <h6>{{ $matche->away_team_name }}</h6>
                                    </div>

                                </div>
                            </a>
                        </li>
                        @endforeach
               
                    </ul>
                </div>

            </div>
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->
@endsection
@section('custom-script')
<script>
    let table = new DataTable('#myTable');

</script>
@endsection
