@extends('front_end.layout.main')
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
                            Ligues
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- Leagues Content Section Start -->
<section class="basket_leagues leagues">
    <div class="container">
        <div class="basket_leagues-inner py-5">

            <h2 class="text-center">2024-25 Season</h2>
            <div class="basket_leagues-inner-content">
                <div class="leagues-list">
                    <ul class="table-header">
                        <li class="league-header">
                            <div class="league-logo">
                                <h6>
                                    Logo
                                </h6>
                            </div>
                            <div class="league-details-main">
                                <div class="league-details">
                                    <h6>Ligue</h6>
                                </div>
                                <div class="league-details">
                                    <h6>Taper</h6>
                                </div>
                                <div class="league-details">
                                    <h6>Date de début</h6>
                                </div>
                                <div class="league-details">
                                    <h6>Date de fin</h6>
                                </div>
                            </div>
                        </li>
                    </ul>
                    <ul>
                    @foreach ($leagues as $key => $league)
                   
                        <li class="league-item">
                            <a href="{{ route('leagueMatches',['leagueId'=>$league->id]) }}">
                                <div class="league-logo">
                                    <img src="" alt="league-logo">
                                   </div>
                                <div class="league-details-main">
                                    <div class="league-details">
                                        <h6>{{ $league->name }}</h6>
                                    </div>
                                    <div class="league-details">
                                        <p class="type">{{ $league->type }}</p>
                                    </div>
                                    <div class="league-details">
                                        <p class="start-date"> {{ $league->start_date }}</p>
                                    </div>
                                    <div class="league-details">
                                        <p class="end-date">{{ $league->end_date }}</p>
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
