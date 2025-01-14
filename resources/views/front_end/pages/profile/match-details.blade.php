@extends('front_end.layout.main')
@section('title', 'My players')
@section('content')

@php
$PointCalculationService = app(App\Services\PointCalculationService::class);
use Carbon\Carbon;
@endphp
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
                            Détails du match
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- Leagues Content Section Start -->
<section class="basket_leagues match-details-page py-5">
    <div class="container">
        <div class="basket_leagues-inner">
            <div class="back-btn">
                <a href="{{ route('profile.matches') }}" class="back-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#fff">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z" />
                    </svg>
                </a>
            </div>
            <!-- Component Start -->
            <h2 class="text-center">Mes joueurs</h2>
            <div class="flex flex-col mt-6">
                <div class="my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                        <div class="palyer-header">
                            <div class="team-logo">
                                <img src="{{ $matchDetails->home_team_logo ?? '' }}" alt="my-matches-header-logo">
                                <h6>{{ $matchDetails->home_team_name ?? '' }}</h6>
                            </div>
                            <div class="match-details">
                                <span>{{ date('Y-m-d h:i a', strtotime($matchDetails->fixture_date ?? '')) }}</span>
                            </div>

                            <div class="team-logo">
                                <img src="{{ $matchDetails->away_team_logo ?? '' }}" alt="my-matches-header-logo">
                                <h6>{{ $matchDetails->away_team_name ?? '' }}</h6>
                            </div>
                        </div>

                        <div class="matches-table association-main">
                            <div class="div-tbl">
                                <ul class="match-team-header association-header">
                                    <li class="my-match-item header-color">
                                        <div class="my-match-team-logo match-width">
                                            <h6>Team</h6>
                                        </div>
                                        <div class="my-match-info match-width">
                                            <h6>Name</h6>
                                        </div>
                                        <div class="my-match-team-logo match-width">
                                            <h6>Position</h6>
                                        </div>
                                        <div class="my-match-score match-width">
                                            <h6>Score</h6>
                                        </div>
                                    </li>
                                </ul>
                                <ul class="team-list table-color">
                                @foreach ($teams[0]->teamDetails ?? [] as $data)
                                       @php
                                          $points = $PointCalculationService->getPlayerStatistics(Auth::user()->id,$matchId,$data->player_id);
                                       @endphp
                                    <li class="team-member">
                                        <div class="match-team-logo match-width">
                                            <img src="{{$data->player_team_logo}}" alt="my-matches-header-logo">
                                        </div>
                                        <p class="player-name match-width">{{$data->player_name}}</p>
                                        <p class="match-position match-width">{{$data->player_pos}}</p>
                                        <p class="match-score match-width">{{ $points }}</p>
                                    </li>
                                    @endforeach
                         
                                </ul>

                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Component End  -->
        </div>
    </div>
</section>
<!-- Leagues Content Section End -->

@endsection

@section('custom-script')



@endsection
