@extends('front_end.layout.main')
@section('content')

<!--==== Matches section start ====-->
@php
$PointCalculationService = app(App\Services\PointCalculationService::class);
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
                            Mes matchs
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->


<!-- Leagues Content Section Start -->
<div class="basket_leagues my-matches py-5">
    <div class="container">
        <div class="basket_leagues-inner">
            <h2 class="text-center">Mes matchs</h2>
            <div class="basket_leagues my-matches-inner-content brooklyn-main">
                <div class="matches-list">
                    <ul class="match-team-header brooklyn-header">
                        <li class="my-match-item header-color">
                            <div class="my-match-team-logo match-width">
                                <h6>Équipe</h6>
                            </div>
                            <div class="my-match-info match-width">
                                <h6>Informations sur le match</h6>
                            </div>
                            <div class="my-match-team-logo match-width">
                                <h6>Équipe</h6>
                            </div>
                            <div class="my-match-score match-width">
                                <h6>Score</h6>
                            </div>
                            <div class="my-match-status match-width">
                                <h6>Statut </h6>
                            </div>
                        </li>
                    </ul>
                    <ul class="my-matches table-color">
                    @foreach ($matches as $match)
                                @php
                                    $points = $PointCalculationService->calculatePoints(Auth::user()->id,$match->fixture_id);
                                @endphp
                        <li class="my-match-item matche-main" data-fixture-id="{{ $match->fixture_id ?? ''}}" data-league-id="{{ $match->league->league_id ?? ''}}">
                            <div class="my-match-team-logo match-width">
                                <img src="{{ $match->home_team_logo ?? '' }}" alt="my-matches-logo">
                                <h6>{{ $match->home_team_name ?? '' }}</h6>
                            </div>
                            <div class="my-match-info match-width">
                            <h6>{{ $match->venue_name ?? '' }}</h6>
                            <p>{{$match->venue_city ?? ''}}</p>
                            <span>{{ date('Y-m-d h:i a', strtotime($match->fixture_date ?? '')) }}</span>
                            </div>
                            <div class="my-match-team-logo match-width">
                                <img src="{{ $match->away_team_logo ?? '' }}" alt="my-matches-logo">
                                <h6>{{ $match->away_team_name ?? '' }}</h6>
                            </div>
                            <div class="my-match-score match-width">
                                <h4>{{$points ?? 0}}</h4>
                            </div>
                            <div class="my-match-status match-width">
                                <p class="win">-- </p>
                            </div>
                        </li>
                        @endforeach     

                    </ul>

                </div>

            </div>

        </div>
    </div>
</div>
<!-- Leagues Content Section End -->
@endsection

@section('custom-script')

<script>
    $(".matche-main").on('click', function () {
        var fixtureId = $(this).data('fixture-id');
        var leagueId = $(this).data('league-id');
        var url = "{{ route('profile.match-detail', [':leagueId', ':fixtureId']) }}";
        url = url.replace(':fixtureId', fixtureId).replace(':leagueId', leagueId);
        window.location.href = url;
    });

</script>

@endsection
