<?php require_once('functions.php'); ?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="icon" href="favicon.ico" />
	<link rel="stylesheet" href="//fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&amp;display=swap" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/style.min.css">
    <title>Test Landing - Stefano Soresina</title>
</head>
<body>
    <!-- WRAP 2560px -->
    <div class="site-wrap">
        <!-- WRAP 1920px -->
        <div class="site-wrap__contents">
            <!-- HEADER STICKY -->
            <header class="navbar navbar-expand navbar-dark sticky-top  flex-column flex-md-row bd-navbar">
                <div class="container">
                    <div class="col-md-2 col-sm-4 col-xs-4">
                        <a class="logo-link" href="/">
                            <img src="images/logo.svg" alt="Prestiti Fai da te" id="mainlogo" />
                        </a>
                    </div>
                    <div class="mainmenu col-md-8 col-sm-8 col-xs-8">
                        <div class="navbar-collapse pull-right collapse" style="height: 0px;">
                            <ul class="mainmenu nav navbar-nav font-weight-500">
                                <li class="mainmenu__navitem"><a class="mainmenu__navitem__innerlink" href="#prestiti-section">Prestiti fai da te</a></li>
                                <li class="mainmenu__navitem"><a class="mainmenu__navitem__innerlink" href="#tasso-section">Tasso fisso agevolato</a></li>
                                <li class="mainmenu__navitem"><a class="mainmenu__navitem__innerlink" href="#vantaggi-section">Vantaggi</a></li>
                                <li class="mainmenu__navitem"><a class="mainmenu__navitem__innerlink" href="#section-prestito_veloce">Fai da te!</a></li>
                                <li class="mainmenu__navitem"><a class="mainmenu__navitem__innerlink" href="#faq-section">FAQ</a></li>
                                <li class="mainmenu__navitem--solomobile" style="color: #000000;">Numero Verde Gratuito <span style="font-size: 20px; font-weight: 600;">800821289</span><br>Aperto dal lunedì al venerdì<br> <span style="font-size: 15px; font-weight: 600;">9-13/14-18</span></li>
                            </ul>
                        </div> 
                    </div>
                    <div class="col-md-2 header-contact bg-yellow hidden-sm hidden-xs" id="numeroverde">
                        <div class="row"> 
                            <div class="numeroverde-img-cont col-md-4">
                                <img src="images/phone-call.svg" alt="Icona numero verde" id="img-num-verde" /> 
                            </div>
                            <div class="numeroverde-details-cont col-md-8">
                                <span class='testo'>Numero Verde Gratutito</span>
                                <span class='numero'>800 82 12 89</span>
                                <span class='testo'>lun-ven 9-13 / 14-18</span>
                            </div>    
                        <div> 
                    </div>   
                </div>
            </header>
            <!-- HEADER STICKY / -->    
            <!-- MAIN -->    
            <main>
                <div class="container-fluid" id="form-top-section">
                    <div class="row container"> 
                        <div class="col-md-7 col-sm-12 col-xs-12 titolo">
                            <div class="titlesdiv"> 
                                <h1 class='uppercase'>100% online.<br />
                                    Facile, veloce, da casa.</h1>
                                <h2 class='uppercase'><span class="yellow-txt">Richiedere un prestito</span> non è mai stato così facile!</h2>
                            </div> 
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12 text-center form">

                            <?php echo multistep_forms("multistep-form-data"); ?>

                            
                        </div>
                    </div>   
                </div>
            </main>    
            <!-- MAIN / -->            
        </div>
        <!-- WRAP 1920px / -->
    </div>
    <!-- WRAP 2560px / -->
    <script src="assets/js/script.min.js"></script>
</body>
</html>