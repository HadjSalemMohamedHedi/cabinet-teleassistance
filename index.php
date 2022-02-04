
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Cabinet Téléassistance</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
  <link href="assets/css/responsive.css" rel="stylesheet">

  
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="50">
  
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

  <div class="stickyContact">
    <div class="ContenueSticky">
       <div class="imgContactForm" >
      <img src="assets/img/Téléassistance/icone-fléche-blanc--cabinet-teleassitance-formulaire.png" id="MoinContact">

      <img src="assets/img/Téléassistance/icone-fléche-inverse--blanc--cabinet-teleassitance-formulaire.png" id="PlusContact">
    </div> 


    <div class="formulaire">
      <div class="HeaderForm">
        <h3>
          <img src="assets/img/Téléassistance/icone-telephone-cabinet-teleassitance--formulaire.png">
           0186510082
        </h3>
        <div class="contactOption">

          <div id="Gotelephone">
            <img src="assets/img/Téléassistance/icone-telephone-noir--cabinet-teleassitance-formulaire.png" id="GotelphoneImg">
            <h6>
            Téléphone
          </h6>
          </div>

           <div id="GoEmail">
            <img src="assets/img/Téléassistance/icone-mail-noir--cabinet-teleassitance-formulaire.png" id="GoemailImg">
            <h6>
            Email
          </h6>
          </div>

           <div id="Goetre">
            <img src="assets/img/Téléassistance/icone-casque-cabinet-teleassitance--formulaire-noir.png" id="GoetreImg"> 
            <h6>
            Être rappelé
          </h6>
          </div>
        </div>
      </div>
      <div class="BodyForm">

        <div class="phoneBodyForm displayBlock" id="phoneBodyForm">
         <p> <h2>Besoin d’une information ?</h2></p>
         <p> <h3>Nos conseillers sont à votre disposition au :</h3></p>
          <p><h4>
          <img src="assets/img/Téléassistance/icone-telephone-bleu-formulaire.png">
           01.86.51.00.82
        </h4></p>
        <span>*Prix d’un appel local</span>
        <p><h5>Du lundi au vendredi</h5>
        <h5>de 9h à 18h</h5></p>

        </div>

        <div class="EmailBodyForm" id="EmailBodyForm">
            <form id="formContact" method="post" >
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Nom" required id="nom" name="nom">
                </div>
                <div class="col-md-6">
                  <input type="text"class="form-control" placeholder="Prénom" required   id="prenom" name="prenom">
                </div>
                <div class="col-md-12">
                  <input type="email" class="form-control" placeholder="Email" required  id="email"name="email">
                </div>
                <div class="col-md-12">
                  <textarea  required id="message"value="" placeholder="Message"  class="form-control" name="message"></textarea> 
                    <p class="pra">
                      En envoyant ce formulaire complété, j'accepte que les informations saisies soient exploitées dans le cadre de la relation commerciale qui peut en découler.
                    </p>
                </div>
              </div>
               <button type="submit" class="envoyerMessage">Envoyer</button>

            </form>
        </div>


        <div class="RappelBodyForm" id="RappelBodyForm">
            <form id="formappel" method="post" >
              <div class="row">
                <div class="col-md-6">
                  <input type="text" class="form-control" placeholder="Nom" id="Apnom" required name="Apnom" value="">


                </div>
                <div class="col-md-6">
                  <input type="text"class="form-control" placeholder="Prénom" id="Apprenom" required name="Apprenom" value="">
                </div>
                <div class="col-md-12">
                  <input type="text"class="form-control" placeholder="Numéro de téléphone" required id="Apphone" name="Apphone">
                  <input type="hidden" required id="Aptemp" name="Aptemp" value="Matin" >
                </div>
                <p class="pra">En conformité avec le dispositif gouvernemental BLOCTEL</p>
                <h5>Quel horaire d’appel préférez-vous ?</h5>
                <div class="horaire">
                  <div class="timeHoraire Matin" onclick="ChangeTemp('Matin')">Matin</div>
                <div class="timeHoraire Midi" onclick="ChangeTemp('Midi')">Midi</div>
                <div class="timeHoraire Aprés-midi" onclick="ChangeTemp('Aprés-midi')">Aprés-midi</div>
                </div>
                
              </div>
               <button type="submit" class="envoyerMessage">Envoyer</button>

            </form>
        </div>

      </div>

    </div>
    </div>

   

    
  </div>


  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <a href="index.php">
          <img src="assets/img/Téléassistance/Logo-téléassitance.png" alt="Logo-téléassitance">
        </a>
        
      </div>

      <nav id="navbar" class="navbar">
                <i class="bi bi-list mobile-nav-toggle"></i>

        <ul>
          <div class="logo2">
        <a href="index.html">
          <img src="assets/img/Téléassistance/Logo-téléassitance.png" alt="Logo-téléassitance">
        </a>
        <!-- Uncomment below if you prefer to use an image logo -->
        <!-- <a href="index.html"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->
      </div>
          <li onclick="gotoSection('Fonctionnement');"><a href="#Fonctionnement">Le fonctionnement</a></li>
          <li onclick="gotoSection('conseils');"><a class="active" href="#conseils">Nos conseils</a></li>
          <li onclick="gotoSection('NosServices');"><a href="#NosServices">Nos services</a></li>
          <li onclick="gotoSection('NosAvantage');"><a href="#NosAvantage">Avantage</a></li>

          <li onclick="gotoSection('Cout');"><a href="#Cout">coût</a></li>
          
        </ul>
      </nav><!-- .navbar -->
  <div class="ContactHeader flex">
          <img src="assets/img/Téléassistance/icone-telephone-cabinet-teleassitance-.png" alt="cabinet-teleassitance" class="iconcontact">
          <div>
          <span class="contactez">Contactez-nous</span>
          <div class="phone">0186510082</div>
        </div>
        </div>
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section class="hero-section" id="hero">

    <div class="wave">

      <svg width="100%" height="355px" viewBox="0 0 1920 355" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
          <g id="Apple-TV" transform="translate(0.000000, -402.000000)" fill="#FFFFFF">
            <path d="M0,439.134243 C175.04074,464.89273 327.944386,477.771974 458.710937,477.771974 C654.860765,477.771974 870.645295,442.632362 1205.9828,410.192501 C1429.54114,388.565926 1667.54687,411.092417 1920,477.771974 L1920,757 L1017.15166,757 L0,757 L0,439.134243 Z" id="Path"></path>
          </g>
        </g>
      </svg>

    </div>

    <div class="container">
      <div class="row align-items-center">
        <div class="col-12 hero-text-image">
          <div class="row">
            <div class="col-lg-1 text-center text-lg-start">
              
            </div>
            <div class="col-lg-9 iphone-wrap">
              <img src="assets/img/Téléassistance/détecteur-anti-chute-senior.png" alt="Téléassistance" class="phone-2 " data-aos="fade-right" data-aos-delay="200">
              
              <h1 data-aos="fade-right" class="flex-end Mobileh1Home">Matériel de <span style="font-weight: 400;">téléassistance</span></h1>
              <h1 data-aos="fade-right"class="flex-end">3 <sup>ème</sup> Génération</h1>

            </div>
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Home Section ======= -->
    <section class="section" id="Fonctionnement">
      <div class="container">

        <div class="row justify-content-center text-center mb-5">
          <div class="col-md-5" data-aos="fade-up">
            <h2 class="section-heading">Fonctionnement</h2>
          </div>
        </div>

          <div class="row NosFonctionnement">
            <div class="col-md-4 Ccard">
              <div class="cardFontionnement">
               <div class="imgCard">
                  <img src="assets/img/Téléassistance/chez-abonée--fonctionnement-téleassitance détecteur du chute.png">
               </div>
                <h4>Chez l’abonné </h4>
                <p>un simple appui sur le bouton rouge vous mets en contact avec la centrale de téléassistance.</p>
              </div>
              <div class="fleshpplus">
                <img src="assets/img/Téléassistance/Fléche-fonctionnement-.png">
              </div>
            </div>
            <div class="col-md-4 Ccard">
              <div class="cardFontionnement">
               <div class="imgCard">
                  <img src="assets/img/Téléassistance/La-centrale-de-la-téléasitance détecteur du chute  soft call.png">
                </div>
                
                <h4>La centrale de téléassistance </h4>
                <p>un téléopérateur entre en dialogue avec l’abonné. En cas de nécessité, il déclenche le plan d’intervention défini.</p>
              </div>
              <div class="niveau2flesh fleshpplus">
                 <div class="central1">
                 <img src="assets/img/Téléassistance/Fléche-fonctionnement-.png">
                </div>
                
                 <div class="central2">
                 <img src="assets/img/Téléassistance/Fléche-fonctionnement-.png">
                </div>

                 <div class="central3">
                 <img src="assets/img/Téléassistance/Fléche-fonctionnement-.png">
                </div>


              </div>
            </div>
            <div class="col-md-4 col-sm-12 ServicesMobile">
              <div class="cardFontionnementN3 Card1">
                <img src="assets/img/Téléassistance/les-services-d'urgence-téleassitance-soft-call détecteur du chute.png">
                <h4>Les services d'urgences </h4>
              </div>

               <div class="cardFontionnementN3 Card2">
                <img src="assets/img/Téléassistance/vos-proche--téleassitance-soft-call-détecteur-anti-chute.png">
                <h4>Vos proches </h4>
              </div>

              <div class="cardFontionnementN3 Card3">
                <img src="assets/img/Téléassistance/Votre-medcein-téléassitance-soft-call détecteur du chute.png">
                <h4>Votre médecin </h4>
              </div>


            </div>
          </div>

        <div class="row" id="conseils">
          <div class="col-md-4 flexSlider"  data-aos="fade-up" data-aos-delay="">
            

             <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
              <div class="swiper-wrapper">

                <div class="swiper-slide">
                  <div class="review text-center">                                  
                    <div class="review-user">
                      <img src="assets/img/Téléassistance/détecteur du chute -senoir-noir---montre-anti-chute---cabinait-téléassitance--soft-call.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    </div>                  
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="review text-center">                                  
                    <div class="review-user">
                      <img src="assets/img/Téléassistance/Bracelet-détecteur-de-chute-pour-personne-agée--cabinet-téléassitance--soft-call-bleu.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    </div>                  
                  </div>
                </div>

                <div class="swiper-slide">
                  <div class="review text-center">                                  
                    <div class="review-user">
                      <img src="assets/img/Téléassistance/Bracelet-détecteur-de-chute-pour-personne-agée--cabinet-téléassitance--soft-call-pleusieurs-couleurs.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    </div>                  
                  </div>
                </div>


                <div class="swiper-slide">
                  <div class="review text-center">                                  
                    <div class="review-user">
                      <img src="assets/img/Téléassistance/détecteur-du-chute--senoir-noir---montre-anti-chute----soft-call-cabinait-téléassitance-.jpg" alt="Image" class="img-fluid rounded-circle mb-3">
                    </div>                  
                  </div>
                </div>




                
             
              </div>
              <div class="swiper-pagination"></div>
            </div>

          </div>  

          <div class="col-md-8 materiel">
            <h2 class="section-heading">Matériel de téléassitance</h2>
            <h2 class="section-heading">3 <sup class="section-headingSup">ème</sup> Génération</h2>
            <h4>C’est peut-être le bon moment !</h4>

            <p>Nous faisons toujours preuve d’élégance et de courtoisie et personne ne peut nier que notre démarche reste constructive et permet d’attirer l’attention d’une nécessité à s’équiper !
Cette incitation réveille la curiosité à franchir le pas et équiper ceux que nous aimons, et c’est probablement le plus important, y compris pour nous.
Un contrat est probablement en cours, rassurez-vous, il n’engage en rien et vos droits restent entiers. Si vous souhaiter que je vous fasse part de nos recommandations, discutons-en.
</p>

          </div>                  
        </div>

      </div>

       
    </section>

  


    <section class="section" id="NosServices">

      <div class="container">
       <div class="row ServicesPersonnes">
         <div class="col-md-9">
           <h3>Service à la personne</h3>
           <p>
            Ce service est éligible à un *crédit d’impôt de 50 %. Ce qui signifie que pour 100 € dépensés, il vous sera déduit ou crédité 50 € sur vos impôts l’année d’après.
           </p>
         </div>
         <div class="col-md-2">
           <div class="promo">
            <h2>-50%</h2>
            <h3>de réduction ou crédit d'impôt</h3>

            </div>
          <h6><i>*Montants donnés à titre d’exemple</i></h6>
         </div>
       </div>

       
      </div>
 <div class="container">
      <div class="row allattous">

        <div class="col-md-3 attous">
          <img src="assets/img/Téléassistance/icone Mise en relation assurée -24-h-sur-7-cabinet-teleassitance-soft-call.png" alt="Image" class="img-fluid rounded-circle mb-3">     
          <h4>Mise en relation assuré</h4>
          <h6>24/24 et 7j/7</h6>   
        </div>

        <div class="col-md-3 attous">
          <img src="assets/img/Téléassistance/icone-Garantie-d'intervention--cabinet-teleassitance-soft-call.png" alt="Image" class="img-fluid rounded-circle mb-3">     
          <h4>Garantie d'intervention</h4>
          <h6>En cas de chute et de malaise</h6>   
        </div>

        <div class="col-md-3 attous">
          <img src="assets/img/Téléassistance/icone-Une-écoute-bienveillante---cabinet-teleassitance-soft-call.png" alt="Image" class="img-fluid rounded-circle mb-3">     
          <h4>Une écoute bienveillante</h4>
          <h6>Et des échanges conviviaux</h6>   
        </div>


        <div class="col-md-3 attous">
          <img src="assets/img/Téléassistance/icone-Accès-à-de-nombreux-services-cabinet-teleassitance-soft-call.png" alt="Image" class="img-fluid rounded-circle mb-3">     
          <h4>Accès à de nombreux services</h4>
          <h6>D'assistance à domicile</h6>   
        </div>
        
      </div>
      </div>
    </section>

    <section class="section avntageSection" id="NosAvantage">
      <div class="container">
        <div class="row justify-content-center text-center mb-5">
          <h1 class="section-heading">Les avantages du détecteur de chute</h1>
        </div>
        <div class="row align-items-center columnInverse">
          <div class="col-md-6">
            <h2 class="mb-4">
              Le taux de croissance des accidents domestique
             </h2>
            <p class="mb-4">

              Les accidents de la vie courante causent, chaque année, 20000 décès et entraînent l’admission dans un service d'urgences de 4.5 millions de personne – 1200 personnes sont hospitalisées chaque jour à cause d’un accident domestique.        
             </p>

              <p class="mb-4">      
              Parmi ces 20000 décès, On décompte 9000 personnes âgées décédées à la suite d’une chute dont plus de 70% à leur domicile. Pourtant, il est relativement facile d’éviter certains accidents domestiques, en adoptant des réflexes de vigilances ou des gestes simples pour limiter les risques. Les professionnels intervenant à domicile sont les acteurs les mieux placés pour effectuer un repérage des risques de premier niveau – nous sommes placé quotidiennement en première ligne car nous visitons des centaines de personnes par jour a leur domicile.
            </p>
            <p><a href="#" class="btn-primary">Lire la suite </a></p>
          </div>
          <div class="col-md-6" data-aos="fade-left">
            <img src="assets/img/Téléassistance/croissance-des-accidents-domestique---téleassitance-soft-call-détecteur-du-chute.png" alt="Image" class="img-fluid">   

          </div>
        </div>
      </div>
    
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6 order-2">
            <h2 class="mb-4">
              Votre sécurité est au coeur de nos préoccupations
            </h2>
            <p class="mb-4">Vous aurez bien compris que notre visite est importante et qu’elle reste dans une démarche saine d’aide et de conseil, avec une volonté première de prévenir les risques, et d’orienter dans un second temps le choix de s’équiper de téléassistance, qui reste le pilier central pour maintenir en toute sécurité nos ainées.</p>
            <p><a href="#" class="btn-primary">Lire la suite </a></p>
          </div>
          <div class="col-md-6" data-aos="fade-right">
        <img src="assets/img/Téléassistance/Votre-sécurité-est-au-coeur-de-nos-préoccupations----téleassitance-soft-call-détecteur-du-chute.png" alt="Image" class="img-fluid"> 

        </div>
        </div>

         <div class="row align-items-center columnInverse Cout" id="Cout">
          <div class="col-md-8">
            <h3 class="mb-4 combien">Combien coûte une téléassistance ?</h3>
            <p class="mb-4">
              Il existe des dizaines de fournisseurs de téléassistance avec des offres et des services pour un prix moyen autour de *20 € euros par mois. C’est notre cas !
              Pour les prix les plus bas, cela pourrait sûrement s’expliquer…
              Concernent nos tarifs ils s’expliquent, parce que nous maîtrisons l’ensemble de la chaine de distribution, ainsi que le technique- y compris les télécommunications mobiles jusqu’à la facturation, nous avons pris soin de choisir de grand fournisseur comme LEGRAND ÉLECTRIQUE, DORO...

            </p>
            <p><a href="#" class="btn-primary">Lire la suite </a></p>
          </div>
          <div class="col-md-4" data-aos="fade-left">
            <img src="assets/img/Téléassistance/Coùt--téleassitance-soft-call-détecteur-du-chute.png" alt="Image" class="img-fluid">   

          </div>
        </div>
      </div>
    </section>

    <section class="bottomSection">
      <div class="container">
        <div class="row">
          <div class="col-md-6"></div>
          <div class="col-md-6">
            <h1>Matériel de téléassistance</h1>
            <h1>3<sup>ème</sup> génération</h1>
          </div>
        </div>
      </div>
    </section>










  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer class="footer" role="contentinfo">
    <div class="container">
      <div class="row">
        <div class="col-md-4 mb-4 mb-md-0">
          <h3>A propos de nous</h3>
          <p>Depuis plus de 15 ans , nous nous efforçons d'aider la seniors dans les meilleurs conditions afin qu'ils puissent rester autonome tout au long de leur vie.
</p>
<p>
Respectant la déontologie de la prestation de services et de l'aide à domicile , nous sommes devenu un acteur incontournable du troisième âge afin de prospérer et de profiter le plus longtemps possible de la joie d'être à la retraite.
</p>
<p>
Partenaires officiels de 75% de société de téléassistance en France d'où on vous propose la téléassistance la plus adéquate pour vous.</p>
          <p class="social">
            <a href="#">
              <img src="assets/img/Téléassistance/icone-reseaux-sociaux-cabinet-teletassitance-soft-call-facebook.png" alt="Image" class="img-fluid"> 
            </a>

             <a href="#">
              <img src="assets/img/Téléassistance/icone-reseaux-sociaux-cabinet-teletassitance-soft-call-twitter.png" alt="Image" class="img-fluid"> 
            </a>

             <a href="#">
              <img src="assets/img/Téléassistance/icone-reseaux-sociaux-cabinet-teletassitance-soft-call-instagram.png" alt="Image" class="img-fluid"> 
            </a>
          </p>
        </div>
        <div class="col-md-8 ms-auto">
          <div class="row site-section pt-0">
            
            <div class="col-md-3 mb-4 mb-md-0">
                <ul class="list-unstyled">
                <li><a href="#">Inscription</a></li>
                <li><a href="#">Renseignement</a></li>
                <li><a href="#">Navigation</a></li>
                <li><a href="#">Contact</a></li>
              </ul>
            </div>
           

             <div class="col-md-7 mb-4 mb-md-0">
                <ul class="list-unstyled">
                <li><a href="#">Tél: 0186510082</a></li>

               <li>

                <a href="mailto:contact@cabinet-teleassistance ">Mail: contact@cabinet-teleassistance.com</a>
                  <br><br>
                <a href="mailto:renseignement@cabinet-teleassistance.com">renseignement@cabinet-teleassistance.com</a>


               </li>

             


              </ul>
          </div>
        </div>
      </div>

      <div class="row justify-content-center text-center">
        <div class="col-md-7">
          <p class="copyright">&copy; Copyright Téléassistance. All Rights Reserved</p>
          <div class="credits">
            Designed by <a href="https://mbdesign-tn.com/">MB Design</a>
          </div>
        </div>
      </div>

    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short" id="biX"></i></a>

  <!-- Vendor JS Files -->
  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>

<script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>

<script>
function ChangeTemp(temp){
$("#Aptemp").val(temp);
$(".timeHoraire").css('outline', 'none'); 
$(".timeHoraire").css('color', '#707070');    
$(".timeHoraire").css('font-weight', 'normal');

$("."+temp).css('outline', 'auto');    
$("."+temp).css('color', '#2d2f7d');    
$("."+temp).css('font-weight', '700');    
}


$(document).ready(function () {

  $("#formContact").submit(function (event) {
    var formData = {
      nom: $("#nom").val(),
      prenom: $("#prenom").val(),
      email: $("#email").val(),
      message: $("#message").val(),
    };

    $.ajax({
      type: "POST",
      url: "mail.php",
      data: formData,
      dataType: "json",
      encode: true,
        success: function (data) { 

        if(data.responseText){
          toastr.success("Votre message a été bien enregistré.");
          setTimeout(function() {
            location.reload();
        }, 1000);
        }else{
          toastr.warning("Une erreur survenue");
          setTimeout(function() {
        }, 1000);
        }

      },
         error: function (data) { 

        if(data.responseText){
          toastr.success("Votre message a été bien enregistré.");
          setTimeout(function() {
            location.reload();
        }, 3000);
        }else{
          toastr.warning("Une erreur survenue");
          setTimeout(function() {
        }, 1000);
        }

        }

    }).done(function (data) {
      console.log(data);
    });

    event.preventDefault();
  });





  $("#formappel").submit(function (event) {
    var formDataa = {
      apnom: $("#Apnom").val(),
      apprenom: $("#Apprenom").val(),
      apphone: $("#Apphone").val(),
      aptemp: $("#Aptemp").val(),
    };

    $.ajax({
      type: "POST",
      url: "informerappel.php",
      data: formDataa,
      dataType: "json",
      encode: true,
        success: function (data) { 

        if(data.responseText){
         toastr.success("Votre demande a été bien enregistré.");
          setTimeout(function() {
            location.reload();
        }, 1000);
        }else{
          toastr.warning("Une erreur survenue");
          setTimeout(function() {
        }, 1000);
        }

      },
         error: function (data) { 

        if(data.responseText){
          toastr.success("Votre demande a été bien enregistré.");
          setTimeout(function() {
            location.reload();
        }, 3000);
        }else{
         toastr.warning("Une erreur survenue");
          setTimeout(function() {
        }, 1000);
        }

        }

    }).done(function (data) {
      console.log(data);
    });

    event.preventDefault();
  });






});
</script>
</body>

</html>