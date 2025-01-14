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
                            Détails des matchs
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->


<!-- Leagues Content Section Start -->
<div class="basket_leagues matches-details py-5">
    <div class="container">


        <div class="basket_leagues-inner">
            <div class="back-btn">
                <a href="matches">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#fff">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                    </svg>
                </a>
            </div>
            <h2 class="text-center">Saison {{(date('Y') - 1).'-'.date('Y')}}</h2>

            <div class="plyr-hedr">
                <div class="team-logo">
                    <div class="team_inner">
                        <img src="{{$matchDetails->home_team_logo}}" alt="team-logo-4">
                    </div>
                    <h6>{{$matchDetails->home_team_name}}</h6>
                </div>
                <div class="match-details">
                    <!-- <h6>Brooklyn Nets</h6>
                    <p>Brooklyn</p> -->
                    <span>>{{ date('Y-m-d h:i a',strtotime($matchDetails->fixture_date))}}</span>
                </div>
                <div class="team-logo">
                    <div class="team_inner team_inner-right">
                        <img src="{{$matchDetails->away_team_logo}}" alt="team-logo-4">
                    </div>
                    <h6>{{$matchDetails->away_team_name}}</h6>
                </div>
            </div>

            <div class="tab-content-wrapper">
                <div class="toggle-target">
                    <a href="#" class="tab active" data-toggle-target=".tab-content-1">GK</a>
                    <a href="#" class="tab" data-toggle-target=".tab-content-2">DEF</a>
                    <a href="#" class="tab" data-toggle-target=".tab-content-3">MID</a>
                    <a href="#" class="tab" data-toggle-target=".tab-content-4">ST</a>
                </div>

                <div class="tab-content tab-content-1 active">
                    <div class="basket_leagues-inner-content basketball-header-main">
                        <div class="matches-list">
                            <ul class="match-team-header basketball-header">
                                <li class="match-item header-color">
                                    <div class="match-team match-width">
                                        <div class="match-team-inner">
                                            <h6>Sélectionné par</h6>
                                        </div>
                                    </div>
                                    <div class="match-info match-width">
                                        <h6>Équipe</h6>
                                    </div>
                                    <div class="match-team match-width">
                                        <div class="match-team-inner">
                                            <h6>Âge</h6>
                                        </div>
                                    </div>
                                    <div class="match-team match-width">
                                        <div class="match-team-inner">
                                            <h6>Blessé</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="table-color basketball-table">
                            @foreach ($organizedPlayers['Goalkeeper'] as $gk_player)

                                <li class="match-item matche-main" data-team-id="{{$gk_player->player_team_id}}" data-player-id="{{$gk_player->player_id}}" data-player-role="G" data-player-name="{{$gk_player->name}}" data-team-logo="{{$gk_player->team_logo}}" data-match-id="{{$matchDetails->fixture_id}}" data-team-name="testing" data-home-team="{{ $matchDetails->home_team_id }}" data-away-team="{{ $matchDetails->away_team_id }}" data-slug-matchid="{{ $matchDetails->id }}">
                                    <div class="match-team match-width">
                                        <h6>{{ $gk_player->name }}</h6>
                                    </div>
                                    <div class="match-info match-width">
                                        <img src="{{$gk_player->team_logo}}" alt="logo">
                                    </div>
                                    <div class="match-team match-width">
                                        <h6>{{$gk_player->age}}</h6>
                                    </div>
                                    <div class="match-team match-width">
                                        <h6>{{ ($gk_player->injured == '1') ?
                                            'Yes' : 'No'}}</h6>
                                    </div>
                                    <div class="match-team match-width">
                                        <button class="plus player-toggle" data-event="plus">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <button class="minus player-toggle d-none" data-event="minus">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                    </div>
                                </li>
                                @endforeach
                           
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="tab-content tab-content-2">
                    <div class="basket_leagues-inner-content basketball-header-main">
                        <div class="matches-list">
                            <ul class="match-team-header basketball-header">
                                <li class="match-item header-color">
                                    <div class="match-team match-width">
                                        <div class="match-team-inner">
                                            <h6>Sélectionné par</h6>
                                        </div>
                                    </div>
                                    <div class="match-info match-width">
                                        <h6>Équipe</h6>
                                    </div>
                                    <div class="match-team match-width">
                                        <div class="match-team-inner">
                                            <h6>Âge</h6>
                                        </div>
                                    </div>
                                    <div class="match-team match-width">
                                        <div class="match-team-inner">
                                            <h6>Blessé</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="table-color basketball-table">
                            @foreach ($organizedPlayers['Defender'] as $def_player)

                                <li class="match-item matche-main" data-team-id="{{$def_player->player_team_id}}" data-player-id="{{$def_player->player_id}}" data-player-role="D" data-player-name="{{$def_player->name}}" data-team-logo="{{$def_player->team_logo}}" data-match-id="{{$matchDetails->fixture_id}}" data-team-name="testing" data-home-team="{{ $matchDetails->home_team_id }}" data-away-team="{{ $matchDetails->away_team_id }}" data-slug-matchid="{{ $matchDetails->id }}">
                                    <div class="match-team match-width">
                                        <h6> {{ $def_player->name }}</h6>
                                    </div>
                                    <div class="match-info match-width">
                                        <img src="{{$def_player->team_logo}}" alt="logo">
                                    </div>
                                    <div class="match-team match-width">
                                        <h6>{{$def_player->age}}</h6>
                                    </div>
                                    <div class="match-team match-width">
                                        <h6>{{ ($def_player->injured == '1') ?
                                            'Yes' : 'No'}}</h6>
                                    </div>
                                    <div class="match-team match-width">
                                        <button class="plus player-toggle"  data-event="plus">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <button class="minus player-toggle d-none" data-event="minus">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                    </div>
                                </li>
                                @endforeach
                             
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="tab-content tab-content-3">
                    <div class="basket_leagues-inner-content basketball-header-main">
                        <div class="matches-list">
                            <ul class="match-team-header basketball-header">
                                <li class="match-item header-color">
                                    <div class="match-team match-width">
                                        <div class="match-team-inner">
                                            <h6>Sélectionné par</h6>
                                        </div>
                                    </div>
                                    <div class="match-info match-width">
                                        <h6>Équipe</h6>
                                    </div>
                                    <div class="match-team match-width">
                                        <div class="match-team-inner">
                                            <h6>Âge</h6>
                                        </div>
                                    </div>
                                    <div class="match-team match-width">
                                        <div class="match-team-inner">
                                            <h6>Blessé</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="table-color basketball-table">
                            @foreach ($organizedPlayers['Midfielder'] as $mid_player)
                                <li class="match-item matche-main" data-team-id="{{$mid_player->player_team_id}}" data-player-id="{{$mid_player->player_id}}" data-player-role="M" data-player-name="{{$mid_player->name}}" data-team-logo="{{$mid_player->team_logo}}" data-match-id="{{$matchDetails->fixture_id}}" data-team-name="testing" data-home-team="{{ $matchDetails->home_team_id }}" data-away-team="{{ $matchDetails->away_team_id }}" data-slug-matchid="{{ $matchDetails->id }}">
                                    <div class="match-team match-width">
                                        <h6>{{ $mid_player->name ?? '' }}</h6>
                                    </div>
                                    <div class="match-info match-width">
                                        <img src="{{$mid_player->team_logo ?? ''}}" alt="logo">
                                    </div>
                                    <div class="match-team match-width">
                                        <h6>{{$mid_player->age ?? ''}}</h6>
                                    </div>
                                    <div class="match-team match-width">
                                        <h6>{{ ($mid_player->injured  == '1') ?
                                            'Yes' : 'No'}}</h6>
                                    </div>
                                    <div class="match-team match-width">
                                        <button class="plus player-toggle" data-event="plus">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <button class="minus player-toggle d-none" data-event="minus">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                    </div>
                                </li>
                            @endforeach
                                
                            </ul>
                        </div>

                    </div>
                </div>

                <div class="tab-content tab-content-4">
                    <div class="basket_leagues-inner-content basketball-header-main">
                        <div class="matches-list">
                            <ul class="match-team-header basketball-header">
                                <li class="match-item header-color">
                                    <div class="match-team match-width">
                                        <div class="match-team-inner">
                                            <h6>Sélectionné par</h6>
                                        </div>
                                    </div>
                                    <div class="match-info match-width">
                                        <h6>Équipe</h6>
                                    </div>
                                    <div class="match-team match-width">
                                        <div class="match-team-inner">
                                            <h6>Âge</h6>
                                        </div>
                                    </div>
                                    <div class="match-team match-width">
                                        <div class="match-team-inner">
                                            <h6>Blessé</h6>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                            <ul class="table-color basketball-table">
                            @foreach ( $organizedPlayers['Attacker'] as $st_player)
                           
                            <li class="match-item matche-main" data-team-id="{{$st_player->player_team_id}}" data-player-id="{{$st_player->player_id}}" data-player-role="F" data-player-name="{{$st_player->name}}" data-team-logo="{{$st_player->team_logo}}" data-match-id="{{$matchDetails->fixture_id}}" data-team-name="testing" data-home-team="{{ $matchDetails->home_team_id }}" data-away-team="{{ $matchDetails->away_team_id }}" data-slug-matchid="{{ $matchDetails->id }}">
                                    <div class="match-team match-width">
                                        <h6>{{ $st_player->name }}</h6>
                                    </div>
                                    <div class="match-info match-width">
                                        <img src="{{$st_player->team_logo}}" alt="logo">
                                    </div>
                                    <div class="match-team match-width">
                                        <h6>{{$st_player->age}}</h6>
                                    </div>
                                    <div class="match-team match-width">
                                        <h6>{{ ($st_player->injured == '1') ?
                                            'Yes' : 'No'}}</h6>
                                    </div>
                                    <div class="match-team match-width">
                                        <button class="plus player-toggle" data-event="plus">
                                            <i class="fa-solid fa-plus"></i>
                                        </button>
                                        <button class="minus player-toggle d-none" data-event="minus">
                                            <i class="fa-solid fa-minus"></i>
                                        </button>
                                    </div>
                                </li>
                                @endforeach
                           
                            </ul>
                        </div>

                    </div>
                </div>

            </div>
            <div class="team-btns text-center">
                <a href="{{ route('my-team') }}" class="next-btn">Suivant</a>
            </div>

        </div>
    </div>
</div>
<!-- Modal Success -->
<div class="alert-msg">
    <div class="modal fade" id="exampleModalToggle1" aria-hidden="true" aria-labelledby="exampleModalToggleLabel1"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel1">Modal 1</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-image">
                        <div class="modal-success-image modal-images-inner"></div>
                    </div>
                    <p>
                        You can add only 1-3 player.
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="modal-btn btn-primary" data-bs-target="#exampleModalToggle1"
                        data-bs-toggle="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>
 
</div>
<!-- Modal Success -->
<!-- Leagues Content Section End -->

<div class="alert-msg">
      <div class="modal fade" id="loginModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered">
          <div class="modal-content">
              <div class="modal-header">
              <button type="button" class="btn-close close-btn" data-bs-dismiss="modal" aria-label="Close">
                <i class="fa-solid fa-x"></i>
              </button>
              </div>
              <div class="modal-body">
               <span>
                  <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px" fill="#d30f0f"><path d="M480-280q17 0 28.5-11.5T520-320q0-17-11.5-28.5T480-360q-17 0-28.5 11.5T440-320q0 17 11.5 28.5T480-280Zm-40-160h80v-240h-80v240Zm40 360q-83 0-156-31.5T197-197q-54-54-85.5-127T80-480q0-83 31.5-156T197-763q54-54 127-85.5T480-880q83 0 156 31.5T763-763q54 54 85.5 127T880-480q0 83-31.5 156T763-197q-54 54-127 85.5T480-80Zm0-80q134 0 227-93t93-227q0-134-93-227t-227-93q-134 0-227 93t-93 227q0 134 93 227t227 93Zm0-320Z"/></svg>
               </span>
                  <h4 id="login-message"></h4>
              </div>
              <div class="modal-footer">
              <button type="button" id="login-click" class="modal-btn  btn-secondary" data-bs-dismiss="modal">Login</button>
              </div>
          </div>
          </div>
      </div>
   </div>

   <!-- Modal failure -->
<div class="alert-msg">
    <div class="modal fade" id="errorModal2" aria-hidden="true" aria-labelledby="exampleModalToggleLabel"
        tabindex="-1">
        <div class="modal-dialog modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="exampleModalToggleLabel">modal1</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="modal-image">
                        <div class="modal-failure-image modal-images-inner"></div>
                    </div>
                    <p id="error-message">
                        
                    </p>
                </div>
                <div class="modal-footer">
                    <button class="modal-btn btn-primary" data-bs-target="#errorModal2"
                        data-bs-toggle="modal">Ok</button>
                </div>
            </div>
        </div>
    </div>

</div>
<!-- Modal Failure -->
@endsection

@section('custom-script')

<script>
    $(document).ready(function () {

        var myTeam = @json(Session::get('myTeam', []));

        $('.div-tbl ul li').each(function () {
            var row = $(this);
            var leagueId = "{{$matchDetails->league->league_id}}";

            // console.log(leagueId,'league_id');
            // console.log(myTeam,'myjson');

            var teamId = row.data('team-id');
            var playerId = row.data('player-id');
            var playerRole = row.data('player-role');
            var playerName = row.data('player-name');

            var playerExists = myTeam.some(function (player) {
                return player.team_id == teamId && player.player_id == playerId && player
                    .player_role == playerRole && player.player_name == playerName && player
                    .league_id == leagueId;
            });

            if (playerExists) {
                row.find('.plus').addClass('d-none');
                row.find('.minus').removeClass('d-none');
            } else {
                row.find('.plus').removeClass('d-none');
                row.find('.minus').addClass('d-none');
            }
        });

        $('.next-btn').click(function (e) {
            e.preventDefault();

            var nextBtn = $(this);

            $.get("{{ route('current-team-count') }}", function (data, status) {
                if (data.success == true && data.count != 11) {
                    $("#error-message").html('Your team must have exactly 11 players.');
                    $("#errorModal2").modal('show');
                } else {
                    window.location.href = nextBtn.attr('href');
                }
            });
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.player-toggle', function () {

            var team_id = $(this).closest('li').data('team-id');
            var player_id = $(this).closest('li').data('player-id');
            var player_role = $(this).closest('li').data('player-role');
            var leagueId = "{{$matchDetails->league->league_id}}";
            var player_name = $(this).closest('li').data('player-name');
            var team_logo = $(this).closest('li').data('team-logo');
            var match_id = $(this).closest('li').data('match-id');
            var team_name = $(this).closest('li').data('team-name');
            var homeTeamId = $(this).closest('li').data('home-team');
            var awayTeamId = $(this).closest('li').data('away-team');
            var dbMatchId = $(this).closest('li').data('slug-matchid');

            var button = $(this); // Store reference to the clicked button
            var isPlus = button.hasClass('plus'); // Check if the clicked button is a "plus" button
            var event = $(this).data('event');
            var formData = {
                team_id: team_id,
                player_id: player_id,
                player_role: player_role,
                leagueId: leagueId,
                player_name: player_name,
                event: event,
                team_logo: team_logo,
                match_id: match_id,
                team_name: team_name,
                homeTeamId: homeTeamId,
                awayTeamId: awayTeamId,
                dbMatchId: dbMatchId,
            };

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                }
            });

            $.ajax({
                url: "{{ route('create-team') }}",
                type: 'POST',
                data: formData,
                success: function (response) {
                    if (response.success == true) {
                        if (isPlus) {
                            button.addClass('d-none');
                            button.closest('div').find('.minus').removeClass('d-none');
                            button.parent('div').parent('li').addClass('select-player');
                        } else {
                            button.addClass('d-none');
                            button.closest('div').find('.plus').removeClass('d-none');
                            button.parent('div').parent('li').removeClass('select-player');

                        }
                    } else {
                        $("#error-message").html(response.message);
                        $("#errorModal2").modal('show');

                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });



    });

</script>


@endsection
