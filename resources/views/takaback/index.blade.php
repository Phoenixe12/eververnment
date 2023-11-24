<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>TAKABACK</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="{{ asset('assets/dist/img/logo_01.png') }}" rel="icon">
  <link href="{{ asset('assets/dist/img/logo_01.png') }}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{('asset/vendor/aos/aos.css') }}" rel="stylesheet">
  <link href="{{('asset/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="{{('asset/vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
  <link href="{{('asset/vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
  <link href="{{('asset/vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
  <link href="{{('asset/vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{('asset/css/style.css') }}" rel="stylesheet">

</head>
<style>
  .taka-taille{
    font-size: 28px;
    font-weight: bold;
    color: #ffffff;
    font-family: "Raleway", sans-serif;
  }
  .taka{
    font-size: 16px;
    font-weight: bold;
    color: rgba(255, 255, 255, 0.7);
    font-family: "Raleway", sans-serif;
  }
</style>
<body>
    @include('sweetalert::alert')

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between">

      <div class="logo">
        <h1><a href="{{route('index')}}"><img src="{{('asset/img/logo_01.png') }}" height="60px" alt=""></a></h1>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="{{-- ('asset/img/logo.png') --}}" alt="" class="img-fluid"></a>

		<li class="dropdown"><a href="#"><span>Drop Down</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="dropdown"><a href="#"><span>Deep Drop Down</span> <i class="bi bi-chevron-right"></i></a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 2</a></li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
            </ul>
          </li>
		-->
      </div>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto active" href="#hero">Accueil</a></li>
          <li><a class="nav-link scrollto" href="#about">A propos</a></li>
		  <li class="dropdown"><a href="#services"><span>Services</span> <i class="bi bi-chevron-down"></i></a>
            <ul>
              <li><a href="#services">Recrutement</a></li>
              <li><a href="#services">Conseil RH</a></li>
              <li><a href="#services">Formation</a></li>
              <li><a href="#services">Externalisation RH et Paie</a></li>
              <li><a href="#services">Accompagnement Afropreneurs</a></li>
			  <li><a href="#services">Coaching</a></li>
		    </ul>
		  </li>
          <li><a class="nav-link scrollto " href="#portfolio">Offres d'emploi</a></li>
          <li><a class="nav-link scrollto" href="#team">Blog</a></li>

          <li><a class="nav-link scrollto" href="#contact">Contacts</a></li>
		  <li>

            <li><button class="sqbtn" data-bs-toggle="modal" data-bs-target="#staticBackdrop" >Envoyer un CV</button></li>
        </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>
  </header><!-- End Header -->
  <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg ">
      <div class="modal-content ">

            <form  action="{{route('store')}}"  method="POST"  enctype="multipart/form-data">
                @csrf
                 <div class="modal-header py-1" style="background-color:#0b440e;">

                     <h4 class="modal-title text-white fw-bold">
                        <img src="{{('asset/img/logo_01.png') }}" alt="" width="75px" height="auto">
                        Candidature</h4>
                 </div>
                 <div class="modal-body">

                     <div class="container">
                        <div class="row ">

                            <div class="col-sm-6 mt-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="" id="nomCand" placeholder="Nom"
                                        name="nomCand" style=" height:43px;" required />
                                    <!--input type="hidden" class="form-control" id="reference" name="codeProg"
                                        required /-->
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="" id="prenomsCand"
                                        name="prenomsCand" style=" height:43px;" placeholder="Prénom" required />
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-6 mt-4">
                                <div class="form-group">
                                    <input type="email" class="form-control" value="" id="email" placeholder="Email"
                                        name="email" style=" height:43px;" required />
                                    <!--input type="hidden" class="form-control" id="reference" name="codeProg"
                                        required /-->
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <div class="form-group">
                                    <input type="text" class="form-control" value="" id="telephone"
                                        name="telephone" style=" height:43px;" placeholder="Téléphone" required />
                                </div>
                            </div>
                        </div>
                        <div class="row  ">
                            <div class="col-sm-6 mt-4">
                                <div class="form-group">
                                    <select class="form-control" id="nomPays_id" value="" name="nomPays_id" style=" height:43px;" required>
                                        <option selected>Pays de résidence</option>
                                        @foreach ($pays as $item)
                                        <option value="{{ $item->id }}">{{ $item->nomPays }}</option>
                                    @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <div class="form-group">
                                    <select class="form-control" id="nomDiplome_id" value="" name="nomDiplome_id" style=" height:43px;" required>
                                        <option selected>Dipôme</option>
                                        @foreach ($diplome as $item)
                                            <option value="{{ $item->id }}">{{ $item->nomDiplome }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row ">
                            <div class="col-sm-6 mt-4">
                                <div class="form-group">
                                    <select class="form-control" id="nomEtude_id" value="" name="nomEtude_id" style=" height:43px;" required>
                                        <option selected>Domaine d'étude</option>
                                        @foreach ($etude as $item)
                                            <option value="{{ $item->id }}">{{ $item->nomEtude }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6 mt-4">
                                <div class="form-group">
                                    <select class="form-control" id="nomActivite_id" value="" name="nomActivite_id" style=" height:43px;" placeholder="" required>
                                        <option selected>Domaine d'activité</option>
                                        @foreach ($activite as $item)
                                            <option value="{{ $item->id }}">{{ $item->nomActivite }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row  mb-5">
                        <div class="col-sm-6 mt-4">
                            <div class="form-group">
                             <label for="">Année d'expérience</label>
                                    <input type="number" class="form-control"  style=" height:43px;" name="exp_years" min="0" step="1" placeholder="Nombre d'année d'expérience" required>
                                </div>
                            </div>
                            <div class="col-sm mt-4">
                                <div class="form-group">
                                    <label for="">Curriculum Vitae</label>
                                    <input type="file" class="form-control"
                                        name="curriculum" style=" height:43px;"  required />
                                </div>
                            </div>
                            
                        </div>
                     </div>

                     <div class="modal-footer justify-content-between">
                         <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Annuler</button>
                         <button type="submit" class="btn  btn-primary" id="btnFormEnreg">Valider</button>
                     </div>

                 </div>
             </form>


      </div>
    </div>
  </div>
<!--Modal-->
  <!-- ======= Hero Section ======= -->
  <section id="hero" class="d-flex flex-column justify-content-center align-items-center">
    <div class="container text-center text-md-left" data-aos="fade-up">
      <p class="taka-taille">Takaback, votre plateforme de mise en relation professionnelle</p>
      <p class="taka">Reconnectons les talents de la diaspora aux meilleurs employeurs du continent.</p>
      <a href="#about" class="btn-get-started scrollto">NOS OFFRES</a>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row">
          <div class="col-xl-6 col-lg-7" data-aos="fade-right">
            <img src="{{('asset/img/about-img.jpg') }}" class="img-fluid" alt="">
          </div>
          <div class="col-xl-6 col-lg-5 pt-5 pt-lg-0">
            <h3 data-aos="fade-up">Qui sommes-nous?</h3>
            <p data-aos="fade-up">
			     TAKABACK provient du mot "Taka" en langue fon (Bénin) qui signifie "cerveau" ou "intelligence".
            </p>
			<p data-aos="fade-up" align="justify">
        Takaback est initialement un groupe d'échanges entre africains (et amoureux de l'Afrique) qui souhaitent s'établir sur le continent afin de s'y épanouir professionnellement.
        
			</p>
      <p data-aos="fade-up" align="justify">
        Depuis 2014, Takaback œuvre donc pour le retour des cerveaux en Afrique.
      </p>
			<p data-aos="fade-up" align="justify">
			Aujourdhui, nous sommes un cabinet panafricain de recrutement et de conseil en RH, avec 3 missions clés qui font notre identité.
			</p>






			<h3 data-aos="fade-up " align="left">Nos objectifs</h3>

            <div class="icon-box" data-aos="fade-up">
              <i class="bx bx-receipt"></i>
              <h4>Repatriation</h4>
              <p>Accompagner les talents de la diaspora africaine dans leur démarche de retour sur le continent. </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
              <i class="bx bx-receipt"></i>
              <h4>Optimisation RH</h4>
              <p>Améliorer et rendre efficace le conseil et la gestion des RH en Afrique. </p>
            </div>

            <div class="icon-box" data-aos="fade-up" data-aos-delay="200">
              <i class="bx bx-receipt"></i>
              <h4>Développement de carrière</h4>
              <p>Concevoir des programmes d´accompagnement, d´orientation et de formation à destination des jeunes au chômage.</p>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End About Section -->

    <!-- ======= Steps Section ======= -->
    <section id="steps" class="steps section-bg">
      <div class="container">

        <div class="row no-gutters">
		<CENTER><h3 data-aos="fade-up">Nos valeurs</h3></CENTER>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in">

            <CENTER><h4>Performance</h4></CENTER>
            <p style="margin-left: 15px;margin-right: 15px;">Notre leitmotiv est de faire progresser vos activités et votre stratégie en nous positionnant comme un véritable business partner. <br/>L'atteinte de vos objectifs et la création de valeur est donc notre priorité.</p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="100">

            <CENTER><h4>Transparence</h4></CENTER>
            <p style="margin-left: 15px;margin-right: 15px;">Une communication et des process clairs sont le gage d'une meilleure prise de décision.Nous faisons de la transparence un devoir car c´est le socle pour bâtir une relation de confiance avec nos clients.
            </p>
          </div>

          <div class="col-lg-4 col-md-6 content-item" data-aos="fade-in" data-aos-delay="200">

            <CENTER><h4>Créativité</h4></CENTER>
            <p style="margin-left: 15px;margin-right: 15px;">Proposer une approche agile et innovante s´adaptant aux particularités et à la diversité de nos clients.</p>
          </div>

        </div>

      </div>
    </section><!-- End Steps Section -->



    <!-- ======= Features Section ======= -->
    <section id="features" class="features">
      <div class="container">

        
		<h3 data-aos="fade-up">Notre engagement</h3><br/>
        <div class="row">
          <div class="col-lg-4 mb-5 mb-lg-0" data-aos="fade-right">
            <ul class="nav nav-tabs flex-column">
              <li class="nav-item">
                <a class="nav-link active show" data-bs-toggle="tab" href="#tab-1">

                  <p>Garantir un accompagnement personnalisé et un suivi adapté quelque soit votre profil.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-2">

                  <p>Mettre toutes nos compétences et notre réseau à profit pour vous offrir les meilleurs conseils et services à nos clients.</p>
                </a>
              </li>
              <li class="nav-item mt-2">
                <a class="nav-link" data-bs-toggle="tab" href="#tab-3">

                  <p>Conduire avec efficacité et rigueur nos missions de conseil pour une optimisation réussie de vos ressources.</p>
                </a>
              </li>

            </ul>
          </div>
          <!--<div class="col-lg-7 ml-auto" data-aos="fade-left">
            <div class="tab-content">
              <div class="tab-pane active show" id="tab-1">
                <figure>
                  <img src="{{('asset/img/features-1.png') }}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-2">
                <figure>
                  <img src="{{('asset/img/features-2.png') }}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-3">
                <figure>
                  <img src="{{('asset/img/features-3.png') }}" alt="" class="img-fluid">
                </figure>
              </div>
              <div class="tab-pane" id="tab-4">
                <figure>
                  <img src="{{('asset/img/features-4.png') }}" alt="" class="img-fluid">
                </figure>
              </div>
            </div>
          </div>-->
        </div>

      </div>
    </section><!-- End Features Section -->

    <!-- ======= Services Section ======= -->
    <section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Nos Services</h2>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Recrutement</a></h4>
              <p class="description">Nous vous accompagnons sur tous vos processus de recrutement, de la définition du besoin à l'intégration du nouveau collaborateur.<BR/>
Ainsi nous assurons la mise en place de la stratégie de sourcing , la chasse de tête, les entretiens , la mise à disposition et le suivi de l'intégration du nouveau collaborateur.
</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="100">
            <div class="icon-box icon-box-cyan">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Conseil RH</a></h4>
              <p class="description">Nous effectuons selon vos besoins:  études de marché, diagnostic RH, et mise à disposition d'outils RH.<BR/>
									Nos consultations sur mesure sont conçues et réalisées pour vous offrir des solutions adaptées à vos problématiques RH.
			  </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Formation</a></h4>
              <p class="description">Nous vous accompagnons dans la conception de votre politique et de votre plan de formation.
				Nous mettons à votre disposition nos meilleurs formateurs pour répondre au mieux à vos problématiques de formation.
			  </p>
            </div>
          </div>



        </div>

		<br/><br/>

		<div class="row">


		  <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="300">
            <div class="icon-box icon-box-blue">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Externalisation RH et Paie</a></h4>
              <p class="description">Nous assurons la sous-traitance de toutes vos tâches administratives RH récurrentes, notamment la gestion de la paie.<BR/>Nous garantissons votre mise en conformité avec la législation sociale en vigueur.
			  </p>
            </div>
          </div>

          <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up">
            <div class="icon-box icon-box-pink">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Accompagnement Afropreneurs</a></h4>
              <p class="description">Vous souhaitez installer un projet en Afrique? Nous mettons notre réseau de professionnels à votre service et vous accompagnons pour une installation facilitée, avec des solutions pratiques clé en main.
			  </p>
            </div>
          </div>

		  <div class="col-md-6 col-lg-4 d-flex align-items-stretch mb-5 mb-lg-0" data-aos="fade-up" data-aos-delay="200">
            <div class="icon-box icon-box-green">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Coaching</a></h4>
              <p class="description">Nous assurons un accompagnement personnalisé à la recherche d´emploi et nous organisons des ateliers et sessions de formation individuelles ou collectives.
			  </p>
            </div>
          </div>

      </div>
    </section><!-- End Services Section -->



    <!-- ======= Contact Section ======= -->
    <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="fade-up">
          <h2>Contacts</h2>
        </div>

        <div class="row no-gutters justify-content-center" data-aos="fade-up">

          <div class="col-lg-5 d-flex align-items-stretch">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4>Adresse:</h4>
                <p>571 Avenue de Dunkerque<br/>59000 Lille, France</p>
              </div>

              <div class="email mt-4">
                <i class="bi bi-envelope"></i>
                <h4>Email:</h4>
                <p><a href="mailto:info@takaback.com">info@takaback.com</a></p>
              </div>

              <div class="phone mt-4">
                <i class="bi bi-phone"></i>
                <h4>Tel:</h4>
                <p><a href="tel:+33765170844">+33 7 65 17 08 44</a>  <br/><a href="tel:+22962192952">+229 62 19 29 52</a><br></p>
              </div>

            </div>

          </div>

          <div class="col-lg-5 d-flex align-items-stretch">
            <iframe style="border:0; width: 100%; height: 270px;" src="https://maps.google.com/maps?hl=en&amp;q=euralille+()&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed" frameborder="0" allowfullscreen></iframe>
          </div>

        </div>

        <div class="row mt-5 justify-content-center" data-aos="fade-up">
          <div class="col-lg-10">
            <form action="" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Noms & Prénoms" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="E-mail" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Objet" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Message" required></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Votre message est bien envoyé. Merci!</div>
              </div>
              <div class="text-center"><button type="submit">Envoyer le Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">

          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
			  <p>
                 <h3><img height="90px" src="{{('asset/img/logo_01.png') }}" alt=""></h3>
			  </p>
              <p>
                571 Avenue de Dunkerque<br>
                 59000 Lille, France<br><br>
                <strong>Tel:</strong> <a href="tel:+33765170844">+33 7 65 17 08 44</a><br>
				<strong>Tel:</strong> <a href="tel:+22962192952">+229 62 19 29 52</a><br>
                <strong>Email:</strong> <a href="mailto:info@takaback.com">info@takaback.com</a><br>
              </p>
              <div class="social-links mt-3">
                <a href="#" class="twitter"><i class="bx bxl-twitter"></i></a>
                <a href="#" class="facebook"><i class="bx bxl-facebook"></i></a>
                <a href="#" class="instagram"><i class="bx bxl-instagram"></i></a>
                <a href="#" class="google-plus"><i class="bx bxl-skype"></i></a>
                <a href="#" class="linkedin"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Plan du site</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#home">Accueil</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#about">A Propos</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Services</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#">Offres d'emploi</a></li>
			  <li><i class="bx bx-chevron-right"></i> <a href="#">Contacts</a></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Nos Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Recrutement</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Conseil RH</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Formation</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Externalisation RH et Paie</a></li>
              <li><i class="bx bx-chevron-right"></i> <a href="#services">Accompagnement Afropreneurs</a></li>
			  <li><i class="bx bx-chevron-right"></i> <a href="#services">Coaching</a></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">

			<ul>
              <li> <a href="#">Politique de confidentialité </a></li>
              <li> <a href="#">Politique des cookies</a></li>
            </ul>

            <h4>Newsletter</h4>
            <p>Restez informés !!!</p>
            <form action="{{route('Abonnement.store')}}" method="post" enctype="multipart/form-data" >
            @csrf
              <input type="email" name="email"><input type="submit" value="S'abonner">
            </form>

          </div>

        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>Takaback</span></strong>. All Rights Reserved
      </div>

    </div>
  </footer><!-- End Footer -->

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{('asset/vendor/aos/aos.js') }}"></script>
  <script src="{{('asset/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{('asset/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{('asset/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{('asset/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{('asset/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{('asset/js/main.js') }}"></script>

</body>

</html>
