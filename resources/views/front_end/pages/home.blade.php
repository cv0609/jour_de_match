@extends('front_end.layout.main')
@section('title', 'Maison')
@section('content')
<!-- banner start -->
<div class="banner-area" style="background-image: url('assets/img/banner/home-banner-image.jpg');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-8 align-self-center">
                <div class="banner-inner text-center">
                    <h1 class="b-animate-2 title"><span>Jour De Match</span>
                    </h1>
                    <p>
                        Vos fournisseurs de Fantasy Hockey
                    </p>
                    <div class="btn-wrap">
                        <a class="btn btn-base-2 b-animate-4" href="{{ route('leagues') }}">Jouez Maintenant <i
                                class="fas fa-arrow-circle-right ms-2"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- service start -->
<div class="service-area mg-bottom-100">
    <div class="container">
        <div class="service-bg" style="background-image: url(assets/img/bg/service-bg.png);">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-inner text-center">
                        <div class="thumb" style="background-image: url(assets/img/intro/1.png);">
                        </div>
                        <div class="details">
                            <h4>La Plus Grande Base de Joueurs</h4>
                            <p>
                                Avec la base de joueurs la plus complète en hockey fantasy, recrutez des superstars
                                comme des talents cachés. Créez votre équipe ultime et dominez la compétition !
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="thumb media-left">
                        <div class="single-intro-inner text-center single-intro-inner-middle"
                            style="background-image: url(assets/img/intro/2.png);">
                        </div>
                        <div class="details media-body">
                            <h4>Plus de 10 000 Utilisateurs Hebdomadaires</h4>
                            <p>
                                Rejoignez une communauté dynamique de plus de 10 000 passionnés de hockey fantasy
                                chaque semaine. Défiez, connectez-vous et montrez que vous êtes le meilleur !
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="single-intro-inner text-center">
                        <div class="thumb" style="background-image: url(assets/img/intro/3.png);">
                        </div>
                        <div class="details">
                            <h4><a href="contact.html">Statistiques et Mises à Jour en Temps Réel
                                </a></h4>
                            <p>
                                Gardez une longueur d'avance avec des scores en direct, des statistiques de joueurs
                                en
                                temps réel et des mises à jour instantanées. Chaque action compte sur Jour De Match
                                !
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service end -->

<!-- service start -->
<div class="service-area bg-cover pd-top-95 pd-bottom-70" style="background-image: url('assets/img/bg/2.png');">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="section-title style-white text-center">
                    <h2 class="title">Pourquoi nous choisir ?</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="single-intro-inner style-3 text-center">
                    <div class="thumb border-radious-50" style="background-image: url(assets/img/intro/21.png);">
                    </div>
                    <div class="details">
                        <h4>La Plus Grande Sélection de Joueurs</h4>
                        <p>
                            Accédez à la plus vaste sélection de joueurs, des stars de la LNH aux recrues
                            prometteuses. Construisez une équipe qui vous ressemble vraiment !
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="single-intro-inner style-3 text-center">
                    <div class="thumb border-radious-50" style="background-image: url('assets/img/intro/22.png');">
                    </div>
                    <div class="details">
                        <h4>Une Communauté Dynamique</h4>
                        <p>
                            Rejoignez une communauté passionnée et active de fans de hockey. Participez à des
                            ligues,
                            partagez vos stratégies et célébrez vos victoires ensemble !
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4">
                <div class="single-intro-inner style-3 text-center">
                    <div class="thumb border-radious-50" style="background-image: url('assets/img/intro/23.png');">
                    </div>
                    <div class="details">
                        <h4>Suivi des Performances en Temps Réel
                        </h4>
                        <p>Recevez des mises à jour instantanées sur les scores, les statistiques des joueurs et les
                            classements. Restez à la pointe du jeu, à chaque action, chaque but.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="single-intro-inner style-3 text-center">
                    <div class="thumb border-radious-50" style="background-image: url('assets/img/intro/24.png');">

                    </div>
                    <div class="details">
                        <h4>Simple et Intuitif
                        </h4>
                        <p>
                            Notre plateforme est conçue pour vous. Que vous soyez un joueur expérimenté ou débutant,
                            créer des équipes et participer est rapide et facile !.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
                <div class="single-intro-inner style-3 text-center">
                    <div class="thumb border-radious-50" style="background-image: url('assets/img/intro/25.png');">

                    </div>
                    <div class="details">
                        <h4>Récompenses et Concours Exclusifs
                        </h4>
                        <p>
                            Participez à des concours hebdomadaires et saisonniers pour gagner des prix incroyables.
                            Vos compétences peuvent vous mener à des récompenses concrètes !
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="single-intro-inner style-3 text-center">
                    <div class="thumb border-radious-50" style="background-image: url('assets/img/intro/26.png');">

                    </div>
                    <div class="details">
                        <h4>Fièrement Canadien
                        </h4>
                        <p>
                            Créé par des fans de hockey, pour des fans de hockey, ici même au Canada. Vivez une
                            expérience de hockey fantasy adaptée à notre amour commun pour le sport.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- service end -->


<!-- feature start -->
<div class="feature-area bg-cover pd-top-95 pd-bottom-60" style="background-image: url(assets/img/bg/8.png);">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7 col-lg-9">
                <div class="section-title text-center">
                    <h2 class="title">Nos ligues</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6">
                <div class="single-intro-inner style-feature text-center">
                    <div class="thumb" style="background-image: url('assets/img/feature/1.png');">
                    </div>
                    <div class="details">
                        <h4>Fantasy Ligue Classique</h4>
                        <p>Créez votre équipe, recrutez
                            vos joueurs et affrontez vos
                            amis ou d’autres
                            participants pour obtenir la
                            gloire. Le hockey fantasy
                            traditionnel dans sa
                            meilleure forme !</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-intro-inner style-feature text-center">
                    <div class="thumb media-left" style="background-image: url('assets/img/feature/2.png');">
                    </div>
                    <div class="details media-body">
                        <h4>Fantasy Quotidien</h4>
                        <p>Vous préférez l’action rapide
                            ? Créez une nouvelle
                            équipe chaque jour, en
                            fonction des matchs, et
                            participez pour remporter
                            des prix quotidiens. Pas
                            d'engagement à long terme,
                            juste du plaisir pur !</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-intro-inner style-feature text-center">
                    <div class="thumb" style="background-image: url('assets/img/feature/3.png');">
                    </div>
                    <div class="details">
                        <h4>Face-à-Face</h4>
                        <p>Défiez un ami ou un autre
                            joueur dans un affrontement
                            direct. Constituez votre
                            équipe, choisissez votre
                            capitaine et combattez pour
                            la victoire !</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-intro-inner style-feature text-center">
                    <div class="thumb" style="background-image: url('assets/img/feature/4.png');">
                    </div>
                    <div class="details">
                        <h4>Ligues Professionnelles
                            </h4>
                        <p>Rejoignez une ligue
                            professionnelle avec des
                            enjeux plus élevés. Ces
                            ligues offrent des prix plus
                            importants et une
                            compétition plus sérieuse.
                            Prêt pour le défi ?</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-intro-inner style-feature text-center">
                    <div class="thumb" style="background-image: url('assets/img/feature/5.png');">
                    </div>
                    <div class="details">
                        <h4>Tournois
                            </h4>
                        <p>Participez à des tournois
                            saisonniers ou ponctuels.
                            Testez vos compétences
                            contre les meilleurs et luttez
                            pour des récompenses
                            exclusives !</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-intro-inner style-feature text-center">
                    <div class="thumb" style="background-image: url('assets/img/feature/6.png');">
                    </div>
                    <div class="details">
                        <h4>Défis Pick’em</h4>
                        <p>Choisissez vos joueurs et
                            prédisez les meilleures
                            performances. La manière
                            la plus simple de jouer en se
                            concentrant sur la prédiction
                            des meilleurs joueurs
                            chaque semaine.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- feature end -->

<!-- testimonial area start -->
<div class="testimonial-area bg-cover pd-top-100 pd-bottom-100">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-5 col-lg-6 col-md-11">
                <div class="section-title text-center mb-4">
                    <h2 class="title">Commentaires</h2>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-8">
                <div class="testimonial-slider slider-control-dots owl-carousel">
                    <div class="item">
                        <div class="single-testimonial-inner style-two text-center">
                            <div class="thumb" style="background-image: url('assets/img/testimonial/1.jpg');">
                            </div>
                            <p>Jour De Match est une excellente plateforme pour les fans de hockey fantasy. La base
                                de
                                joueurs est vaste, et j'apprécie la variété de modes proposés, du fantasy quotidien
                                aux
                                ligues classiques. Cependant, je pense que l'interface pourrait être plus intuitive,
                                surtout
                                pour les nouveaux utilisateurs. Ce n'est pas toujours facile à naviguer au début.
                            </p>
                            <div class="name">
                                <h6>
                                    Alexandre B., Montréal, QC
                                </h6>
                            </div>
                            <div class="icon-inner">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="single-testimonial-inner style-two text-center">
                            <div class="thumb" style="background-image: url('assets/img/testimonial/2.jpg');">

                            </div>

                            <p>J'adore l'aspect communautaire de la plateforme – c'est amusant d'interagir avec
                                d'autres
                                joueurs et de participer aux ligues. Les statistiques en temps réel sont un gros
                                avantage.
                                Mais parfois, les mises à jour des scores en direct peuvent être un peu lentes,
                                surtout lors
                                des journées de matchs très chargées. Dans l'ensemble, c'est une expérience solide.
                            </p>
                            <div class="name">
                                <h6>
                                    Julien D., Ville de Québec, QC
                                </h6>
                            </div>
                            <div class="icon-inner">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-testimonial-inner style-two text-center">
                            <div class="thumb" style="background-image: url('assets/img/testimonial/2.png');">

                            </div>

                            <p>
                                Le système de récompenses et les tournois sont un bon ajout. J'ai gagné quelques
                                petits
                                prix, ce qui rend l'expérience encore plus excitante. Cependant, j'aimerais qu'il y
                                ait plus
                                d'opportunités pour les nouveaux utilisateurs d'apprendre les bases, car les règles
                                et le
                                gameplay peuvent être accablants pour les débutants.
                            </p>
                            <div class="name">
                                <h6>
                                    Marie L., Gatineau, QC
                                </h6>
                            </div>
                            <div class="icon-inner">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                    <div class="item">
                        <div class="single-testimonial-inner style-two text-center">
                            <div class="thumb" style="background-image: url('assets/img/testimonial/2.png');">

                            </div>
                            <p>
                                Jour De Match a une base solide et le design est dans l'ensemble agréable.
                                Cependant, je
                                pense qu'ils pourraient améliorer l'expérience mobile. L'application a tendance à se
                                figer ou
                                à avoir des ralentissements à certains moments, ce qui peut être frustrant lorsque
                                vous
                                devez prendre des décisions rapides pendant un match.
                            </p>
                            <div class="name">
                                <h6>
                                    Étienne P., Sherbrooke, QC
                                </h6>
                            </div>
                            <div class="icon-inner">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>



                    <div class="item">
                        <div class="single-testimonial-inner style-two text-center">
                            <div class="thumb" style="background-image: url('assets/img/testimonial/2.png');">

                            </div>
                            <p>
                                Cette plateforme est idéale pour les joueurs de hockey fantasy sérieux. La
                                compétition est
                                intense et les ligues sont bien structurées. Mon principal problème est que le
                                service client
                                pourrait être amélioré. J'ai eu quelques questions sur les paramètres de ligue, mais
                                le temps
                                de réponse était plus lent que prévu.
                            </p>
                            <div class="name">
                                <h6>
                                    Sophie T., Trois-Rivières, QC
                                </h6>
                            </div>
                            <div class="icon-inner">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="single-testimonial-inner style-two text-center">
                            <div class="thumb" style="background-image: url('assets/img/testimonial/2.png');">

                            </div>
                            <p>
                                "J'aime les défis Pick’em et la possibilité de créer des ligues avec des amis. Le
                                gameplay
                                est agréable et je m'amuse à participer. Cependant, certains paiements de prix
                                pourraient
                                être plus transparents, car j'ai trouvé que la répartition était un peu floue pour
                                certains
                                concours.
                            </p>
                            <div class="name">
                                <h6>
                                    David G., Laval, QC
                                </h6>
                            </div>
                            <div class="icon-inner">
                                <div class="quote-icon">
                                    <i class="fas fa-quote-right"></i>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>
<!-- testimonial area end -->
@endsection()
