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
                            <a href="./">Maison</a>
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
                        <li class="my-match-item">
                            <div class="my-match-team-logo match-width">
                                <img src="assets/img/leagues/ligue-magnus.png" alt="my-matches-logo">
                                <h6>Ligue Magnus</h6>
                            </div>
                            <div class="my-match-info match-width">
                                <h6>Brooklyn Nets</h6>
                                <p>Brooklyn</p>
                                <span>2024-12-29 07:30 PM</span>
                            </div>
                            <div class="my-match-team-logo match-width">
                                <img src="assets/img/leagues/ligue-magnus.png" alt="my-matches-logo">
                                <h6>Ligue Magnus</h6>
                            </div>
                            <div class="my-match-score match-width">
                                <h4>0</h4>
                            </div>
                            <div class="my-match-status match-width">
                                <p class="win">-- </p>
                            </div>
                        </li>

                        <li class="my-match-item">
                            <div class="my-match-team-logo match-width">
                                <img src="assets/img/leagues/ligue-magnus.png" alt="my-matches-logo">
                                <h6>Ligue Magnus</h6>
                            </div>
                            <div class="my-match-info match-width">
                                <h6>Brooklyn Nets</h6>
                                <p>Brooklyn</p>
                                <span>2024-12-29 07:30 PM</span>
                            </div>
                            <div class="my-match-team-logo match-width">
                                <img src="assets/img/leagues/ligue-magnus.png" alt="my-matches-logo">
                                <h6>Ligue Magnus</h6>
                            </div>
                            <div class="my-match-score match-width">
                                <h4>0</h4>
                            </div>
                            <div class="my-match-status match-width">
                                <p class="win">-- </p>
                            </div>
                        </li>
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
