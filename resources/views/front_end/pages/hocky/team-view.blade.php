@extends('front_end.layout.main')
@section('title', 'Visionneuse d'équipe')
@section('content')

<!-- breadcrumb start -->
<div class="breadcrumb-area bg-overlay" style="background-image:url('assets/img/banner/leagues-pages-banner.jpg')">
    <div class="container">
        <div class="breadcrumb-inner text-center">
            <div class="section-title mb-0">
                <ul class="leagues-ul">
                    <li class="inline-list home-list">
                        <h3>
                            <a href="{{route('home')}}">Maison</a>
                        </h3>
                    </li>
                    <li class="inline-list next-page-list">
                        <h3>
                            Visionneuse d'équipe
                        </h3>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>
<!-- breadcrumb end -->

<!-- Leagues Content Section Start -->
<div class="basket_leagues my-team-page py-5">
    <div class="container">
        <div class="basket_leagues-inner">
            <div class="back-btn">
                <a href="{{ route('matche-detail',['matcheId'=>$myTeam[0]['dbMatchId']]) }}">
                    <svg xmlns="http://www.w3.org/2000/svg" height="24px" viewBox="0 -960 960 960" width="24px"
                        fill="#fff">
                        <path d="M360-240 120-480l240-240 56 56-144 144h568v80H272l144 144-56 56Z"></path>
                    </svg>
                </a>
            </div>
            <h2 class="text-center">Saison 2024-25</h2>

            <div class="team-view-sec">
                <div class="team-view-header">
                    <h4>
                        Choisissez votre capitaine et votre vice-capitaine
                    </h4>
                    <ul>
                        <li>
                            <span class="c-logo"> C </span>
                            <div class="c-details">
                                <h6>Le capitaine obtient</h6>
                                <p>2X (Double Points)</p>
                            </div>
                        </li>
                        <li>
                            <span class="c-logo"> VC </span>
                            <div class="c-details">
                                <h6>Le vice-capitaine obtient</h6>
                                <p>1.5X (Double Points)</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="basket_leagues-inner-content">
                <div class="team-view-list  captain-main">
                    <ul class="my-team captain-header header-color">
                        <li>
                            <div class="player-dp header-width">
                                <h6>
                                    Équipe
                                </h6>
                            </div>
                            <div class="player-info header-width">
                                <h6>Joueur</h6>
                            </div>
                            <div class="my-team-captain header-width">
                                <h6>
                                    % C Par
                                </h6>
                            </div>
                            <div class="my-team-vice-captain header-width">
                                <h6>
                                    % VC Par
                                </h6>
                            </div>
                        </li>
                    </ul>
                    <ul class="my-team table-color">
                        @foreach($myTeam as $team)
                          <li>
                            <div class="player-dp captain-width">
                                <img src="{{ $team['team_logo'] }}" alt="dp">
                            </div>
                            <div class="player-info captain-width">
                                <h6>{{ $team['player_name'] }}</h6>
                            </div>
                            <div class="my-team-captain captain-width">
                                <span class="c-logo">C</span>
                                <p class="team_captain" data-league_id = "{{ $team['league_id'] }}" data-match_id = "{{ $team['match_id'] }}" data-team_id = "{{ $team['team_id'] }}" data-player_id = "{{ $team['player_id'] }}" data-already_captain = "{{ $team['already_captain'] ?? '' }}">
                                    <button class="plus player-toggle captain-plus cap-vice-plus" data-event="cap_plus">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                    <button class="minus player-toggle d-none captain-minus cap-vice-minus" data-event="cap_minus">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                </p>
                            </div>
                            <div class="my-team-vice-captain captain-width">
                                <span class="c-logo">VC</span>
                                <p class="team_captain team_vice_captain" data-league_id = "{{ $team['league_id'] }}" data-match_id = "{{ $team['match_id'] }}" data-team_id = "{{ $team['team_id'] }}" data-player_id = "{{ $team['player_id'] }}">
                                    <button class="plus player-toggle vice-cap-plus cap-vice-plus" data-event="vice_plus">
                                        <i class="fa-solid fa-plus"></i>
                                    </button>
                                    <button class="minus player-toggle d-none vice-cap-minus cap-vice-minus" data-event="vice_minus">
                                        <i class="fa-solid fa-minus"></i>
                                    </button>
                                </p>
                            </div>
                          </li>
                        @endforeach

                    </ul>
                </div>
                <div class="team-btns text-center">
                    <a href="#" id="save-team-btn" class="next-btn">Sauvegarder</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Leagues Content Section End -->
@endsection
@section('custom-script')

<script>
    $(document).ready(function () {
        @if(Session::has('success'))
        var flashMessage = "<?= Session::get('success') ?>";
        $("#success-message").html(flashMessage)
        $("#successModal").modal('show');
        @endif

        var myTeam = @json($myTeam);

        $('.div-tbl ul li').each(function () {
            var row = $(this);

            // Retrieve data attributes from the row
            var leagueId = row.find('.team_captain').data('league_id');
            var matchId = row.find('.team_captain').data('match_id');
            var teamId = row.find('.team_captain').data('team_id');
            var playerId = row.find('.team_captain').data('player_id');

            // Check for captain status
            var isCaptain = myTeam.some(function (player) {
                return player.league_id == leagueId &&
                    player.match_id == matchId &&
                    player.team_id == teamId &&
                    player.player_id == playerId &&
                    player.is_captain == '1';
            });

            // Check for vice-captain status
            var isViceCaptain = myTeam.some(function (player) {
                return player.league_id == leagueId &&
                    player.match_id == matchId &&
                    player.team_id == teamId &&
                    player.player_id == playerId &&
                    player.is_vice_captain == '1';
            });

            // Show or hide buttons based on the player status
            if (isCaptain) {
                row.find('.team_captain .plus').addClass('d-none');
                row.find('.team_captain .minus').removeClass('d-none');
            } else {
                row.find('.team_captain .plus').removeClass('d-none');
                row.find('.team_captain .minus').addClass('d-none');
            }

            if (isViceCaptain) {
                row.find('.team_vice_captain .plus').addClass('d-none');
                row.find('.team_vice_captain .minus').removeClass('d-none');
            } else {
                row.find('.team_vice_captain .plus').removeClass('d-none');
                row.find('.team_vice_captain .minus').addClass('d-none');
            }
        });

        $('#login-click').on('click', function () {
            $("#exampleModalToggle2").modal('show');
            //window.location.href = "{{ route('login') }}";
        })

        $('#save-team-btn').on('click', function (e) {
            e.preventDefault();

            $.ajax({
                url: "{{ route('auth.check') }}",
                method: 'GET',
                headers: {
                    'X-Requested-With': 'XMLHttpRequest'
                },
                success: function (data) {

                    if (data.captain != true) {
                        var flashMessage = "Please select a captain.";
                        $("#cap-message").html(flashMessage);
                        $("#capModal").modal('show');
                        return false;
                    } else if (data.vice_captain != true) {
                        var flashMessage = "Please select a vice captain.";
                        $("#cap-message").html(flashMessage);
                        $("#capModal").modal('show');
                        return false;
                    } else if (data.error == false) {
                        var flashMessage = "You need to log in before making a team.";
                        $("#login-message").html(flashMessage)
                        $("#loginModal").modal('show');
                    } else {
                        window.location.href = "{{ route('save-team') }}";
                    }
                }
            });
        });

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        $(document).on('click', '.player-toggle', function () {
            var button = $(this);

            var league_id = button.closest('p').data('league_id');
            var match_id = button.closest('p').data('match_id');
            var team_id = button.closest('p').data('team_id');
            var player_id = button.closest('p').data('player_id');

            if (button.hasClass('captain-plus')) {
                var visibleMinusCount = $('.captain-minus').not('.d-none').length;

                if (visibleMinusCount >= 1) {
                    var flashMessage = "Captain already selected.";
                    $("#cap-message").html(flashMessage);
                    $("#capModal").modal('show');
                    return false;
                }
            }

            if (button.hasClass('vice-cap-plus')) {
                var visibleMinusCount = $('.vice-cap-minus').not('.d-none').length;

                if (visibleMinusCount >= 1) {
                    var flashMessage = "Vice Captain already selected.";
                    $("#cap-message").html(flashMessage);
                    $("#capModal").modal('show');
                    return false;
                }
            }

            var event = $(this).data('event');

            var formData = {
                event: event,
                league_id: league_id,
                match_id: match_id,
                team_id: team_id,
                player_id: player_id,
            };

            $.ajax({
                url: "{{ route('make.captain') }}",
                type: 'POST',
                data: formData,
                success: function (response) {

                    if (event == 'cap_plus') {

                        button.addClass('d-none');
                        button.closest('td').find('.minus').removeClass('d-none');

                    } else if (event == 'cap_minus') {

                        button.addClass('d-none');
                        button.closest('td').find('.plus').removeClass('d-none');

                    }

                    if (event == 'vice_plus') {

                        button.addClass('d-none');
                        button.closest('td').find('.minus').removeClass('d-none');

                    } else if (event == 'vice_minus') {

                        button.addClass('d-none');
                        button.closest('td').find('.plus').removeClass('d-none');

                    }
                },
                error: function (xhr, status, error) {
                    console.error('Error:', error);
                }
            });
        });

    });

</script>

<script>
    $(document).ready(function () {
        $('#loginForm').on('submit', function (e) {
            e.preventDefault(); // Prevent form submission

            let email = $('#login-email').val();
            let password = $('#login-password-field').val();

            $.ajax({
                url: "{{ route('login.post') }}", // Laravel route name
                type: "POST",
                data: {
                    email: email,
                    password: password,
                    _token: "{{ csrf_token() }}" // CSRF token for Laravel
                },
                success: function (response) {

                    if (response.success) {
                        window.location.href = response.url;
                        // $('#responseMessage_login').html('<p style="color: green;">' + response.message + '</p>');
                        // // Optionally redirect
                        // setTimeout(function () {
                        //     window.location.reload();
                        // }, 2000); // 2-second delay
                    } else {
                        $('#responseMessage_login').html('<p style="color: red;">' +
                            response.message + '</p>');
                    }
                },
                error: function (xhr) {
                    let errorMessage = xhr.responseJSON.message || 'An error occurred.';
                    $('#responseMessage_login').html('<p style="color: red;">' +
                        errorMessage + '</p>');
                }
            });
        });
    });

</script>
<script>
    $(document).ready(function () {
        $('#registerForm').on('submit', function (e) {
            e.preventDefault(); // Prevent default form submission

            // Gather form data
            let formData = {
                name: $('#name').val(),
                username: $('#username').val(),
                email: $('#email').val(),
                password: $('#password').val(),
                password_confirmation: $('#password_confirmation').val(),
                _token: "{{ csrf_token() }}" // Laravel CSRF token
            };

            $.ajax({
                url: "{{ route('signup.post') }}", // Replace with your register route URL if necessary
                type: "POST",
                data: formData,
                success: function (response) {
                    if (response.success) {
                        $('#responseMessage').html('<p style="color: green;">' + response
                            .message + '</p>');
                        // Optionally redirect to another page
                        window.location.href = "{{ route('home') }}";
                    } else {
                        $('#responseMessage').html('<p style="color: red;">' + response
                            .message + '</p>');
                    }
                    setTimeout(function () {
                        window.location.reload();
                    }, 2000); // 2-second delay
                },
                error: function (xhr) {
                    let errors = xhr.responseJSON.errors;
                    let errorMessages = '';
                    for (const field in errors) {
                        errorMessages += `<p style="color: red;">${errors[field][0]}</p>`;
                    }
                    $('#responseMessage').html(errorMessages);
                }
            });
        });
    });

</script>
@endsection
