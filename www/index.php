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
    <link rel="stylesheet" href="/assets/css/owl.carousel.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css" type="text/css" media="all">
    <link rel="stylesheet" href="assets/css/style.min.css" type="text/css" media="all">    
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
            <main>
                <!-- SECTION TOP FORM -->    
                <section class="container-fluid" id="form-top-section">
                    <div class="row container"> 
                        <div class="col-md-7 col-sm-12 col-xs-12 titolo">
                            <div class="titlesdiv"> 
                                <h1 class='uppercase'>100% online.<br />
                                    Facile, veloce, da casa.</h1>
                                <h2 class='uppercase'><span class="yellow-txt">Richiedere un prestito</span> non è mai stato così facile!</h2>
                            </div> 
                        </div>
                        <div class="col-md-5 col-sm-12 col-xs-12 text-center form">
                            <?php echo multistep_forms("multistep-form-data", "1"); ?>                            
                        </div>
                    </div>   
                </section>
                <!-- SECTION TOP FORM /-->
                <!-- SECTION PRESTITI -->   
                <section class="container-fluid paddingh-100" id="prestiti-section">
                    <div class="row container"> 
                    <div>
                        <ul class="nav nav-tabs nav-justified">
                            <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#tab-prestitiPersonali">PRESTITI PERSONALI</a></li>
                            <li class="nav-item"><a data-toggle="tab" class="nav-link" href="#tab-cessioneDelQuinto">CESSIONE DEL QUINTO</a></li>
                        </ul>
                        <div class="tab-content" style="padding:40px 0px; background-color:white;">
                            <div id="tab-prestitiPersonali" class="tab-pane fade in active clearfix">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <h3 class="text-blue marginb30 fwbold">Conveniente, veloce e riservato.</h3>
                                            <p class="text-secondary">I Prestiti Fai da Te sono una tipologia di prestito che si contraddistingue per la convenienza, la facilità e la velocità di erogazione.</p>
                                            <p class="text-secondary"><span style="font-weight: 600">Puoi ottenere l’importo richiesto in sole 24 ore</span> dalla data di approvazione. Con la massima riservatezza: non hai bisogno di specificare la motivazione della tua richiesta.</p>
                                            <p class="text-secondary">E se sei un pensionato, <span style="font-weight: 600">solo noi ti finanziamo fino a 89 anni, con rate da 24 a 84 mesi.</span></p>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 tab-list" style="margin-top: 40px">
                                            <h4 class="text-blue marginb20 fwbold" >Cosa puoi fare con i Prestiti Fai da Te?</h4>
                                            <ul class="list">
                                                <li>
                                                    Acquistare o ristrutturare la casa dei tuoi sogni
                                                </li>
                                                <li>
                                                    Realizzare il tuo matrimonio da favola
                                                </li>
                                                <li>
                                                    Coprire le tue spese mediche, legali o condominiali
                                                </li>
                                                <li>
                                                    Garantire gli studi e il futuro della tua famiglia
                                                </li>
                                                <li>
                                                    Organizzare la tua vacanza ideale
                                                </li>
                                            </ul>
                                            <p class="margin-five-top"><span style="font-weight: 600;font-size: 16px;">Componi tu stesso il prestito più adatto alle tue esigenze!</span></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 margin-two-top">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                            <img src="images/prestiti-personali.jpg" alt="">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 tab-list margin-five-top">
                                            <h4 class="text-blue margin-ten-bottom"><span style="font-weight: 600">Chi può richiedere i Prestiti Personali?</span></h4>
                                            <ul class="list">
                                                <li>
                                                    <i>Tutti i residenti in Italia</i>
                                                </li>
                                                <li>
                                                    <i>Pensionati fino a 89 anni a scadenza del piano</i>
                                                </li>
                                                <li>
                                                    <i>Tutti i dipendenti pubblici, privati e statali</i>
                                                </li>
                                                <li>
                                                    <i>Lavoratori autonomi</i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div id="tab-cessioneDelQuinto" class="tab-pane fade">
                                <div class="row">
                                    <div class="col-12 col-sm-12 col-md-7 col-lg-7">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <h3 class="text-blue marginb30 fwbold"><span style="font-weight: 600">Comodo, Conveniente e Senza Pensieri.</span></h3>
                                            <p class="text-secondary">La Cessione del Quinto è un <span style="font-weight: 600">prestito a tasso agevolato</span> costante pensato per dipendenti pubblici, dipendenti statali e pensionati.&nbsp;</p>
                                            <p class="text-secondary">Sicura e trasparente: hai copertura assicurativa e sei sempre tutelato perchè la rata mensile non può superare 1/5 dello stipendio o della pensione.&nbsp;</p>
                                            <p class="text-secondary">Garantisce per te il tuo datore di lavoro e questo ti permette di ottenere <span style="font-weight: 600">fino a 75.000€ senza ulteriori garanzie.</span></p>
                                            <p class="text-secondary">E se sei un pensionato <span style="font-weight: 600">solo noi ti finanziamo fino a 89 anni.</span></p>
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 tab-list" style="margin-top: 40px">
                                        <h4 class="text-blue marginb20 fwbold"><span style="font-weight: 600">Perché scegliere la nostra Cessione del Quinto</span></h4>
                                            <ul class="list">
                                                <li>
                                                    Veloce. Hai l'esito del tuo preventivo in 1h.
                                                </li>
                                                <li>
                                                    Semplice. La pratica è snella, a firma singola e anche a domicilio.
                                                </li>
                                                <li>
                                                    Garanzie. Ti basta presentare la busta paga o il cedolino della pensione.
                                                </li>
                                                <li>
                                                    Ti offre un tasso agevolato del 3,72%*.
                                                </li>
                                                <li>
                                                    Trasparente.
                                                </li>
                                                <li>
                                                    Puoi ottenere fino a 75.000€ con rate da 24 a 120 mesi.
                                                </li>
                                            </ul>
                                            <p class="margin-five-top"><span style="font-weight: 600;font-size: 16px;">Scegli l'importo che ti serve e spendi in libertà senza pensare alle rate!</span></p>
                                        </div>
                                    </div>
                                    <div class="col-12 col-sm-12 col-md-5 col-lg-5 margin-two-top">
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12">
                                        <img src="https://www.prestitifaidate.it/images/icons/cessione-del-quinto.jpg" alt="">
                                        </div>
                                        <div class="col-12 col-sm-12 col-md-12 col-lg-12 tab-list margin-five-top">
                                        <h4 class="text-blue margin-ten-bottom"><span style="font-weight: 600">Chi può richiedere i Prestiti Personali?</span></h4>
                                            <ul class="list">
                                                <li>
                                                    <i>Tutti i residenti in Italia</i>
                                                </li>
                                                <li>
                                                    <i>Pensionati fino a 89 anni a scadenza del piano</i>
                                                </li>
                                                <li>
                                                    <i>Tutti i dipendenti pubblici e statali a tempo indeterminato.</i>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>   
                 </div>
                 <div class="row">
                        <div class="col-12 text-center margin-five-top">
                            <a href="#multistep-form-data" class="inner-link">
                                <button type="button" class="btn bg-grey custom-btn richiedi-prest">
                                RICHIEDI IL TUO PRESTITO
                                </button>
                            </a>
                        </div>
                    </div>
               </section>
               <!-- PRESTITI SECTION /--> 
               <!-- TASSO SECTION /-->
               <section class=" bg-light-grey" id="tasso-section" style="border-bottom: none;" data-gtm-vis-first-on-screen-30084985_25="8519" data-gtm-vis-total-visible-time-30084985_25="4700" data-gtm-vis-polling-id-30084985_25="98" data-gtm-vis-recent-on-screen-30084985_25="37406">
                    <div class="row bg-white">
                        <div class="col-12 text-center">
                            <h2 class="margin-one-bottom"><span class="text-blue" style="font-weight: 600">TASSO FISSO AGEVOLATO</span></h2>
                            <p class="margin-one-bottom"><span class="text-secondary" style="font-style: italic;font-weight: 300;font-size:30px;">Per tutti i dipendenti della Pubblica Amministrazione</span></p>
                        </div>
                    </div>
                    <div class="container-fluid ">
                    <div class="container ">
                        <div class="row paddingh-50">
                                <!-- feature box -->
                                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-twenty-three-bottom xs-text-center">
                                    <div class="feature-box">
                                        <div class="feature-box-image margin-eleven-bottom">
                                            <a id="scarica-pubblici-img"><img alt="" src="images/dipendente_ente_locale.jpg" data-img-size="(W)366px X (H)248px"></a>
                                        </div>
                                        <div class="feature-box-details float-left width-100">
                                            <a id="scarica-pubblici-title" class="title-small tz-text font-weight-700 blue alt-font margin-six-bottom display-block tz-text">DIPENDENTI ENTI LOCALI</a>
                                            <div class="text-secondary text-large line-height-24 float-left width-100 tz-text">
                                                <p class="p-no-mobile">Tutti i dipendenti pubblici o parapubblici hanno la possibilità di accedere a condizioni di finanziamento agevolate. Senza bisogno di fornire garanzie perché la busta paga da sola assicura l’accesso diretto ai tassi dedicati. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end feature box -->
                                <!-- feature box -->
                                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-twenty-three-bottom xs-text-center">
                                    <div class="feature-box">
                                        <div class="feature-box-image margin-eleven-bottom">
                                            <a id="scarica-privati-img"><img alt="" src="images/insegnanti.jpg" data-img-size="(W)366px X (H)248px"></a>
                                        </div>
                                        <div class="feature-box-details float-left width-100">
                                            <a id="scarica-privati-title" class="title-small tz-text font-weight-700 blue alt-font margin-six-bottom display-block tz-text">INSEGNANTI</a>
                                            <div class="text-secondary text-large line-height-24 float-left width-100 tz-text">
                                                <p class="p-no-mobile">Abbiamo concretizzato un prestito su misura per tutti i dipendenti statali. Oltre ai tassi agevolati, offriamo la possibilità di ottenere il prestito in tempi rapidi, con la massima comodità e trasparenza delle condizioni.</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end feature box -->
                                <!-- feature box -->
                                <div class="col-md-4 col-sm-4 col-xs-12 xs-text-center">
                                    <div class="feature-box">
                                        <div class="feature-box-image margin-eleven-bottom">
                                            <a id="scarica-pensionati-img"><img alt="" src="images/forze_ordine.jpg" data-img-size="(W)366px X (H)248px"></a>
                                        </div>
                                        <div class="feature-box-details float-left width-100">
                                            <a id="scarica-pensionati-title" class="title-small tz-text font-weight-700 blue alt-font margin-six-bottom display-block tz-text">FORZE DELL'ORDINE</a>
                                            <div class="text-secondary text-large line-height-24 float-left width-100 tz-text">
                                                <p class="p-no-mobile">Offriamo agevolazioni riservate ai dipendenti delle forze armate o delle forze dell’ordine. Con la cessione del quinto sarà possibile ottenere fino a 75.000€ con un tasso di interesse fisso e agevolato.  In tempi rapidi e in totale sicurezza. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- end feature box -->
                            </div>                            
                        </div>                        
                    </div>
                    <div class="row">
                        <div class="col-12 text-center margin-five-top margin-five-bottom">
                            <a href="#multistep-form-data" class="inner-link">
                                <button type="button" class="btn bg-grey custom-btn richiedi-prest">
                                    RICHIEDI IL TUO PRESTITO
                                </button> 
                            </a>
                        </div>
                    </div>
                </section>
                <!-- VANTAGGI SECTION -->
                <section class="padding-80px-tb xs-padding-60px-tb bg-light-gray builder-bg border-none bg-white" id="vantaggi-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-12  margin-ten-bottom" >
                                <div class="text-blue text-center">
                                    <h2 class="text-blue" style="font-weight: 600">I VANTAGGI DI PRESTITI FAI DA TE</h2>
                                </div>
                                <div class="text-secondary text-center margin-five-top">
                                    <p class="text-secondary fwthin italic fsize30"><i><span class="fw-extra-bold">Prestiti Fai da Te</span> annulla i costi di gestione</i></p>
                                    <p class="text-secondary fwthin italic fsize30"><i>e questo ti permette di accedere ai prestiti a un <span style="font-weight:900;"><span style="font-weight:900;">tasso agevolato del 3,72%*.</span></span></i></p>
                                </div>
                            </div>
                            <div class="desktop-vantaggi row">    
                                <div class="col-md-4 col-lg-4 col-sm-12 col-12 text-center">
                                    <img src="images/vant-euro.svg" alt="monete" style="height: 60px; margin-bottom:20px">
                                    <h4><span class="text-secondary" style="font-weight: 900;font-size:30px;">CONVENIENZA</span></h4>
                                    <p class="text-secondary">con la formula fai da te risparmi, perché ottimizzi le operazioni delle procedure operative.</p>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 col-12 text-center">
                                    <img src="images/vant-rocket.svg" alt="razzo" style="height: 60px; margin-bottom:20px">
                                    <h4><span class="text-secondary" style="font-weight: 900;font-size:30px;">TEMPESTIVITÀ</span></h4>
                                    <p class="text-secondary">garantiamo l’esito in un’ora per la tua richiesta personalizzata e hai supporto continuo per le tue necessità.</p>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 col-12 text-center">
                                    <img src="images/vant-handshake.svg" alt="stretta di mano" style="height: 60px; margin-bottom:20px">
                                    <h4><span class="text-secondary" style="font-weight: 900;font-size:30px;">COMODITÀ</span></h4>
                                    <p class="text-secondary">bastano i tuoi dati e la tua busta paga per erogarti l’importo che ti serve, qualunque sia la sua destinazione.</p>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 col-12 text-center margin-five-top">
                                    <img src="images/vant-bulb.svg" alt="lampadina" style="height: 60px; margin-bottom:20px">
                                    <h4><span class="text-secondary" style="font-weight: 900;font-size:30px;">TASSO</span></h4>
                                    <p class="text-secondary">TAEG 3,72%*, un piccolo tasso per grandi progetti.</p>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 col-12 text-center margin-five-top">
                                    <img src="images/vant-shield.svg" alt="privacy" style="height: 60px; margin-bottom:20px">
                                    <h4><span class="text-secondary" style="font-weight: 900;font-size:30px;">PRIVACY</span></h4>
                                    <p class="text-secondary">non chiediamo giustificativi di spese o motivazioni di prestito.</p>
                                </div>
                                <div class="col-md-4 col-lg-4 col-sm-12 col-12 text-center margin-five-top">
                                    <img src="images/vant-team.svg" alt="team" style="height: 60px; margin-bottom:20px">
                                    <h4><span class="text-secondary" style="font-weight: 900;font-size:30px;">AFFIDABILITÀ</span></h4>
                                    <p class="text-secondary">siamo consulenti esperti del credito da oltre 10 anni. </p>
                                </div>
                            </div>                            
                        </div>
                        <div class="row" style="margin:0;">
                            <div class="col-12 text-center margin-five-top margin-five-bottom">
                                <a href="#multistep-form-data" class="inner-link">
                                    <button type="button" class="btn bg-yellow custom-btn richiedi-prest">
                                        RICHIEDI IL TUO PRESTITO
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- VANTAGGI SECTION /-->
                <!-- CONTATTACI TEL SECTION -->
                <section class="container-fluid" id="section-contattaci-tel">
                    <div class="row">
                        <div class="bg-yellow col-12 col-md-7 col-lg-7 text-center" style="padding:40px">
                            <p class="text-secondary" style="font-weight: 900;font-size:30px;color: #5A5A5A; margin-bottom:15px;margin-top:10px"><span style="font-weight:900;">CHIAMACI SUBITO!</span></p>
                            <p class="text-secondary" style="font-weight: 300;font-size:20px;color: #5A5A5A"><i>Mettiti in contatto diretto con noi</i></p>
                            <p class="text-secondary" style="font-weight: 300;font-size:20px;color: #5A5A5A"><i>per qualsiasi domanda, dubbio a chiarimento.</i></p>
                        </div>
                        <div class="bg-grey col-12 col-md-5 col-lg-5 text-center" style="padding:40px; display:flex; flex-direction: row">

                        <a href="tel:800821289" style="align-self: center"><img src="images/phone-call2.svg" style="height: 60px; width: 60px" alt=""></a>
                                <a href="tel:800821289">
                                    <div style="text-align: left; margin-left: 20px; padding: 0;">
                                        <p class="text-secondary text-white">Numero Verde Gratuito </p>
                                        <p class="text-main text-yellow">800 82 12 89</p>
                                        <p class="text-secondary text-white">dal lunedì al venerdì 9-13/14-18</p>
                                    </div>
                                </a>
                        </div>
                    </div>
                </section>
                <!-- CONTATTACI TEL SECTION /-->
                <!-- PRESTITO VELOCE SECTION -->
                <section class="padding-80px-tb xs-padding-60px-tb bg-light-gray builder-bg border-none bg-white mx-auto" id="section-prestito_veloce">
                    <div class="container">
                        <div class="row">
                            <div class="col-12  margin-ten-bottom">
                                <div class="text-blue text-center">
                                    <h2 class="text-blue" style="font-weight: 600">IL MODO PIÙ VELOCE PER OTTENERE IL TUO PRESTITO!</h2>
                                </div>
                                <div class="text-secondary text-center margin-five-top">
                                    <p class="text-secondary" style="font-weight: 300;font-size: 30px">Dopo aver compilato il form completa la procedura seguendo questi semplici step:</p>
                                </div>
                            </div>
                            <div class="flex-prestito-veloce container-fluid row">
                                <div class="text-center col-3 col-sm-12 col-md-3">
                                    <img src="./images/identity_card.svg" alt="identity_card" style="margin-bottom:20px; height: 200px">
                                    <span class="text-blue" style="display: block;font-weight: 600;font-size:18px;">1. Fai una foto al tuo documento<br> di identità e alla tua busta<br> paga (o al tuo cedolino)</span>
                                    <p class="text-yellow-dark" style="font-size: 20px">assicurati che<br> sia tutto leggibile</p>
                                </div>
                                <div class="text-center col-3 col-sm-12 col-md-3">
                                    <img src="./images/whatsapp.svg" alt="whatsapp" style=" margin-bottom:20px; height: 200px">
                                    <span class="text-blue" style="display: block;font-weight: 600;font-size:18px;">2. Inviaci <br>le foto su<br> WhatsApp</span>
                                    <p class="text-yellow-dark" style="font-size: 20px">assicurati che<br> sia tutto leggibile</p>
                                </div>
                                <div class="text-center col-3 col-sm-12 col-md-3">
                                    <img src="./images/risposta.svg" alt="risposta" style=" margin-bottom:20px; height: 200px">
                                    <span class="text-blue" style="display: block;font-weight: 600;font-size:18px;">3. Un nostro operatore<br> ti chiamerà<br> su Hangouts</span>
                                    <p class="text-yellow-dark" style="font-size: 20px">Preparati scaricando l'app<br> gratuita di Google</p>
                                </div>
                                <div class="text-center  col-3 col-sm-12 col-md-3 ">
                                    <img src="./images/portfolio.svg" alt="portfolio" style=" margin-bottom:20px; height: 200px">
                                    <span class="text-blue" style="display: block;font-weight: 600;font-size:18px;">4. Ricevi<br> il tuo<br> Prestito Fai da Te</span>
                                    <p class="text-yellow-dark" style="font-size: 20px">semplice, veloce<br> e conveniente</p>
                                </div>
                            </div>
                        </div>
                        <div class="row" style="margin:0;">
                            <div class="col-12 text-center margin-five-top margin-five-bottom">
                                <a href="#multistep-form-data" class="inner-link">
                                    <button type="button" class="btn bg-yellow custom-btn richiedi-prest">
                                        RICHIEDI IL TUO PRESTITO
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- PRESTITO VELOCE SECTION /-->
                <!-- FAQ SECTION SECTION -->
                <section id="faq-section" class="builder-bg testimonial-style1 bg-white padding-60px-tb xs-padding-top-60px" data-gtm-vis-first-on-screen-30084985_27="77662" data-gtm-vis-total-visible-time-30084985_27="5000" data-gtm-vis-has-fired-30084985_27="1">
                    <div class="container text-center">
                        <h2 class="sm-section-title-medium xs-section-title-large text-blue font-weight-600 alt-font xs-margin-fifteen-bottom tz-text" style="font-size:40px">PRESTITI PERSONALI E CESSIONE DEL QUINTO: FAQ</h2>
                        <p class="text-secondary margin-five-top margin-five-bottom" style="font-weight: 300;font-size:30px;"><i>Leggi le risposte alle domande più frequenti</i></p>
                        <div class="row padding-five-top">
                            <div class="testimonial-style-custom owl-carousel owl-theme owl-dark-pagination owl-pagination-bottom" style="opacity: 1; display: block;">
                                <!-- testimonial item -->
                                <div class="owl-wrapper-outer"><div class="owl-wrapper" style="width: 7146px; left: 0px; display: block; transition: all 400ms ease 0s; transform: translate3d(-397px, 0px, 0px);"><div class="owl-item" style="width: 397px;"><div class="item">
                                    <div class="col-md-12 col-sm-12 col-xs-12 xs-no-padding-15 text-center">
                                        <p class="text-secondary" style="font-weight:900">Quali documenti occorre presentare per la Cessione del Quinto?</p>
                                        <p class="text-secondary margin-five-top">Dipendenti: certificato di stipendio sottoscritto dall’amministrazione, ultima busta paga, ultimo
                                        CUD. Pensionati: certificato di quota cedibile sottoscritta dall’Ente Previdenziale, ultimo cedolino,
                                        ultimo CUD. Per entrambi: documento d’identità e tessera sanitaria.</p>
                                    </div>
                                </div></div><div class="owl-item" style="width: 397px;"><div class="item">
                                    <div class="col-md-12 col-sm-12 col-xs-12 xs-no-padding-15 text-center">
                                        <p class="text-secondary" style="font-weight:900">Quanto tempo è necessario per ottenere la cessione del quinto?</p>
                                        <p class="text-secondary margin-five-top">All’atto dell’istruzione della pratica, dopo aver ricevuto il benestare da parte
                                        dell’Amministrazione di appartenenza, si eroga il finanziamento entro 10 giorni lavorativi.</p>
                                    </div>
                                </div></div><div class="owl-item" style="width: 397px;"><div class="item">
                                    <div class="col-md-12 col-sm-12 col-xs-12 xs-no-padding-15 text-center">
                                        <p class="text-secondary" style="font-weight:900">Quali sono i costi da sostenere per accedere al prestito?</p>
                                        <p class="text-secondary margin-five-top">Commissioni ed interessi bancari, costi di istruttoria e di intermediazione, rimborso spese di
                                        notifica e postali, polizza assicurativa contro il rischio della perdita del posto di lavoro e
                                        contro la perdita della vita.</p>
                                    </div>
                                </div></div><div class="owl-item" style="width: 397px;"><div class="item">
                                    <div class="col-md-12 col-sm-12 col-xs-12 xs-no-padding-15 text-center">
                                        <p class="text-secondary" style="font-weight:900">Come avviene il rimborso del finanziamento?</p>
                                        <p class="text-secondary margin-five-top">Il rimborso avviene tramite rate mensili costanti versate alla società finanziaria, trattenute
                                        dall’amministrazione di appartenenza direttamente dalla busta paga o cedolino pensione.</p>
                                    </div>
                                </div></div><div class="owl-item" style="width: 397px;"><div class="item">
                                    <div class="col-md-12 col-sm-12 col-xs-12 xs-no-padding-15 text-center">
                                        <p class="text-secondary" style="font-weight:900">È possibile saldare il debito anticipatamente?</p>
                                        <p class="text-secondary margin-five-top">Sì, è possibile saldare il debito anticipatamente e beneficiare del recupero con abbuono degli
                                        interessi non maturati.</p>
                                    </div>
                                </div></div><div class="owl-item" style="width: 397px;"><div class="item">
                                    <div class="col-md-12 col-sm-12 col-xs-12 xs-no-padding-15 text-center">
                                        <p class="text-secondary" style="font-weight:900">Perché bisogna sottoscrivere una polizza assicurativa?</p>
                                        <p class="text-secondary margin-five-top">La polizza assicurativa è prevista dalla legge che disciplina questa forma di finanziamento
                                        (Legge 180/50 e Legge 14 maggio 2005, n. 80).</p>
                                    </div>
                                </div></div><div class="owl-item" style="width: 397px;"><div class="item">
                                    <div class="col-md-12 col-sm-12 col-xs-12 xs-no-padding-15 text-center">
                                        <p class="text-secondary" style="font-weight:900">La rata e il tasso di interesse rimangono invariati per tutto il periodo del
                                        finanziamento?</p>
                                        <p class="text-secondary margin-five-top">Sì, la rata è fissa per tutta la durata del finanziamento che può essere da 24 a 120 mesi e il
                                        tasso rimane fisso per tutto il periodo di ammortamento del prestito.</p>
                                    </div>
                                </div></div><div class="owl-item" style="width: 397px;"><div class="item">
                                    <div class="col-md-12 col-sm-12 col-xs-12 xs-no-padding-15 text-center">
                                        <p class="text-secondary" style="font-weight:900">Cosa succede se si ha già una cessione del quinto in corso?</p>
                                        <p class="text-secondary margin-five-top">La cessione in corso deve essere obbligatoriamente estinta. Il residuo debito viene detratto
                                        dal netto ricavo della nuova operazione e versato a favore dell’ente titolare del precedente
                                        prestito per la sua estinzione.</p>
                                    </div>
                                </div></div><div class="owl-item" style="width: 397px;"><div class="item">
                                    <div class="col-md-12 col-sm-12 col-xs-12 xs-no-padding-15 text-center">
                                        <p class="text-secondary" style="font-weight:900">Qual è la differenza tra cessione del quinto e il classico prestito bancario?</p>
                                        <p class="text-secondary margin-five-top">Per la cessione del quinto non sono richieste garanzie. Basta avere un rapporto di lavoro a
                                        tempo indeterminato presso aziende solide e affidabili o una pensione. Eventuali disguidi
                                        finanziari a carico non impediscono il perfezionamento del finanziamento.</p>
                                    </div>
                                </div></div></div></div>
                                <!-- end testimonial item -->
                                <!-- testimonial item -->
                                
                                <!-- end testimonial item -->
                                <!-- testimonial item -->
                                
                                <!-- end testimonial item -->
                                <!-- testimonial item -->
                                
                                <!-- end testimonial item -->
                                <!-- testimonial item -->
                                
                                <!-- end testimonial item -->
                                <!-- testimonial item -->
                                
                                <!-- end testimonial item -->
                                <!-- testimonial item -->
                                
                                <!-- end testimonial item -->
                                <!-- testimonial item -->
                                
                                <!-- end testimonial item -->
                                <!-- testimonial item -->
                                
                                <!-- end testimonial item -->
                            <div class="owl-controls clickable"><div class="owl-pagination"><div class="owl-page active"><span class=""></span></div><div class="owl-page"><span class=""></span></div><div class="owl-page"><span class=""></span></div></div></div></div>
                        </div>
                        <div class="row">
                            <div class="col-12 text-center margin-fifteen-top margin-ten-bottom">
                                <a href="#form-bottom-section" class="inner-link">
                                    <button type="button" class="btn bg-grey custom-btn richiedi-prest">
                                    RICHIEDI IL TUO PRESTITO
                                    </button>
                                </a>
                            </div>
                        </div>
                    </div>
                   </section>
                <!-- FAQ SECTION SECTION /-->
                <!-- FILIALI SECTION -->
                <section class="bg-yellow border-none" id="section-filiali" data-gtm-vis-first-on-screen-30084985_28="2837184" data-gtm-vis-total-visible-time-30084985_28="5000" data-gtm-vis-has-fired-30084985_28="1">
                    <div style="display: flex; flex-direction: row;" >
                            <div class="xs-margin-twenty-three-bottom margin-five-top col-md-4" id="testofiliali" style="width: 35%">
                                <div class="text-secondary text-black fsize23">
                                    <p class="fwthin fsize23 italic">Siamo il primo Intermediario del Credito in Italia a promuovere un’importante&nbsp;“alleanza con i consumatori” sottoscrivendo la&nbsp;“Carta dei Servizi”&nbsp; promossa dal Centro Studi Codacons. </p>
                                </div>
                                <div class="text-secondary paddingh-60 text-black">
                                    <p>Il Gruppo Santamaria S.p.A. è un Intermediario del Credito iscritto regolarmente nell’Elenco Agenti in attività Finanziaria tenuto dall’Organismo di Vigilanza (OAM) con il n. A107. Vantiamo la fiducia di oltre 20.000 clienti ai quali offriamo consulenza e servizi attraverso una struttura che si compone da: filiali bancarie, consulenti esterni, network di portali specializzati online.
                                    <br>La nostra sede è a Catania, ma puoi trovarci in tutte le filiali del Gruppo Credem presenti in Sicilia oppure chiamando il nostro servizio clienti al numero verde 800821289 o via e-mail all’indirizzo  servizioclienti@prestitifaidate.it	</p>
                                </div>
                                <div class="text-center margin-ten-top margin-ten-bottom">
                                    <a href="#form-bottom-section" class="inner-link">
                                        <button type="button" class="btn bg-grey custom-btn richiedi-prest">
                                            RICHIEDI IL TUO PRESTITO
                                        </button>
                                    </a>
                                </div>
                                <div class="text-center margin-ten-bottom" style="padding:0!important;">
                                    <a target="_blank" href="https://www.organismo-am.it/b/0/09334011005/08E5A03D-0A14-4169-AEC1-C273CFD2376A/g.html"><img src="./images/Group-14.svg" alt=""></a>
                                </div>
                            </div>
                            <!-- image -->
                            <div class="img-filiali" style="background-image: url(/images/final-section.jpg);background-repeat: no-repeat; width: 65%; background-size: cover; background-position: center;"></div>
                            <!-- image -->
                    </div>
                </section>
                <!-- FILIALI SECTION /-->
                <!-- FORM BOTTOM SECTION -->
                <section class="position-relative cover-background tz-builder-bg-image border-none xs-padding-60px-tb hero-style2" id="form-bottom-section">
                    <div class="container-fluid" style="height: 100%">
                        <div class="row container" style="height: 100%">
                            <!-- section title -->
                            <div class="col-md-7 col-sm-12 col-xs-12 titolo">
                                <div class="titlesdiv">
                                    <h1 class="uppercase text-white">100% ONLINE.<br> FACILE, VELOCE, DA CASA.</h1>      
                                    <h2 class="uppercase text-white"><span class="text-yellow"> RICHIEDERE UN PRESTITO </span>NON È MAI STATO COSÌ FACILE!</h2>
                                </div>
                            </div>
                            <div class="col-md-5 col-sm-12 col-xs-12 text-center margin-five-top" style="align-self: start">
                                <div class="text-center xs-position-static">
                                    <div>
                                        <div>
                                            <!-- contact form -->
                                            <div class="col-md-12 col-sm-12 text-left xs-text-center xs-no-padding form text-center">
                                            
                                                <?php echo multistep_forms("multistep-form-data", "2"); ?>                            
                                            
                                            </div>
                                            <!-- end contact form -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- FORM BOTTOM SECTION /-->
                <!-- FELX BOTTO SECTION -->
                <div class="flex-bottom-icon row" style="background-color: #6b767c">
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="row">
                            <div class="col-4 text-right">
                                <a href="tel:800821289" style="align-self: center"><img src="images/phone-call2.svg" style="height: 60px; width: 60px" alt=""></a>
                            </div>
                            <div class="col-8 text-left">
                                <a href="tel:800821289">
                                    <div class="text-center">
                                        <p class="text-secondary text-white">Numero Verde Gratuito </p>
                                        <p class="text-main text-yellow">800 82 12 89</p>
                                        <p class="text-secondary text-white">dal lunedì al venerdì 9-13/14-18</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="row">
                            <div class="col-4 text-right">
                                <img src="images/placeholder.svg" style="height: 60px; width: 60px;align-self: center" alt="">
                            </div>
                            <div class="col-8 text-left">
                                <div style="text-align: left; margin-left: 20px; padding: 0; margin-top: 30px;;">
                                    <p class="text-secondary text-white" style="font-weight: 800">La nostra sede è in
                                    Via Renato Imbriani, 164 - 95128 Catania (CT). </p>
                                    <p class="text-secondary text-white margin-two-top">Puoi trovarci anche in tutte le filiali del gruppo Credem presenti in Sicilia.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 text-center">
                        <div class="row">
                            <div class="col-4 text-right">
                                <img src="images/envelope.svg" style="height: 60px; width: 60px;align-self: center" alt="">
                            </div>
                            <div class="col-8 text-left">
                                <div style="text-align: left; margin-left: 20px; padding: 0; margin-top: 30px">
                                    <p class="text-secondary text-white" style="font-weight: 800">Per ogni chiarimento scrivici all’indirizzo  servizioclienti@prestitifaidate.it </p>
                                    <p class="text-secondary text-white">Il nostro servizio clienti è sempre a tua disposizione e ti risponderà il prima possibile. </p>
                                </div>
                            </div>
                    </div>
                </div>
                <!-- FLEX BOTTOM SECTION /-->
                <!-- ACCORDION -->
                <div class="container">
                    <div class="row">
                        <div class="col-sm-12 col-md-12 col-12">
                            <div class="panel-group" id="accordion">
                                <div class="panel panel-default">
                                    <div class="panel-heading">
                                        <a data-toggle="collapse" id="accordion-toggle" data-parent="#accordion" href="#collapseOne" class="">
                                            <h4 class="panel-title" style="color:#6B767C;">* NOTE DI TRASPARENZA 2021 <span style="float:right;" id="arrow-accordion"><img src="https://www.prestitifaidate.it/images/icons/down-arrow.svg" id="accordion-arrow" alt=""></span></h4>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse in">
                                        <table class="table">
                                            <tbody><tr>
                                                <td>
                                                    ESEMPIO: 28.000 € IN 120 RATE DA 279 € TAN 3,54% TAEG 3,72%<br>
                                                    *NOTE DI TRASPARENZA PER L’ESEMPIO PRESTITI AGEVOLATI RISERVATI AI DIPENDENTI PUBBLICI E STATALI<br>
                                                    Messaggio pubblicitario con finalità promozionale. L’esempio non costituisce offerta al pubblico. Gruppo Santamaria S.p.A. è un Intermediario del Credito iscritto nell’Elenco Agenti in attività Finanziaria tenuto dall’OAM n. A107. L’approvazione è soggetta alla valutazione del merito del creditizio da parte della società erogante Avvera S.p.A. Al fine di gestire le tue spese in modo responsabile, Gruppo Santamaria S.p.A. ti ricorda, prima di sottoscrivere il contratto, di prendere visione di tutte le condizioni economiche e contrattuali, facendo riferimento alle “Informazioni Europee di Base sul Credito ai Consumatori” consegnato presso la sede dell’Agenzia in Attività Finanziaria Gruppo Santamaria S.p.A. Le condizioni riportate nell’esempio indicato possono variare in funzione dell’età del cliente, L’importo erogato al cliente di cui all’esempio si intende al netto di tutte le spese e i costi trattenuti dalla banca al momento della liquidazione.
                                                    L’esempio si riferisce ad dipendente pubblico con 35 anni di età ed assunto da 10 anni. Nell’esempio da 28.000,00 € il costo totale del credito è di 5.480,00 € di cui: 310,00 € di spese d’istruttoria; 16,00 € di imposta di bollo; 5.154,00 € di interessi; 0,00 € di commissioni di distribuzione.                                   
                                                    N.B. Il prestito con cessione del quinto è assistito obbligatoriamente per legge da coperture assicurative a garanzia del rischio vita ed impiego del Cliente ai sensi dell’articolo 54 del D.P.R. 180/1950. I costi sono a carico del Finanziatore. Offerta valida dal 01/01/2021 al 30/06/2021.
                                                    <br><br>
                                                    ESEMPIO: 18.000 € IN 120 RATE DA 189 € TAN 4,17% TAEG 4,90%<br>
                                                    *NOTE DI TRASPARENZA PER L’ESEMPIO PRESTITI AGEVOLATI RISERVATI AI PENSIONATI<br>
                                                    Messaggio pubblicitario con finalità promozionale. L’esempio non costituisce offerta al pubblico. Gruppo Santamaria S.p.A. è un Intermediario del Credito iscritto nell’Elenco Agenti in attività Finanziaria tenuto dall’OAM n. A107. L’approvazione è soggetta alla valutazione del merito del creditizio da parte della società erogante Avvera S.p.A. Al fine di gestire le tue spese in modo responsabile, Gruppo Santamaria S.p.A. ti ricorda, prima di sottoscrivere il contratto, di prendere visione di tutte le condizioni economiche e contrattuali, facendo riferimento alle “Informazioni Europee di Base sul Credito ai Consumatori” consegnato presso la sede dell’Agenzia in Attività Finanziaria Gruppo Santamaria S.p.A. Le condizioni riportate nell’esempio indicato possono variare in funzione dell’età del cliente, L’importo erogato al cliente di cui all’esempio si intende al netto di tutte le spese e i costi trattenuti dalla banca al momento della liquidazione.
                                                    L’esempio si riferisce ad un pensionato di 60 anni di età. Nell’esempio da 18.000,00 € il costo totale del credito è di 4.680,00 € di cui: 375,00 € di spese d’istruttoria; 16,00 € di imposta di bollo; 4.160,03 € di interessi; 128,97 € di commissioni di distribuzione. 
                                                    N.B. Il prestito con cessione del quinto è assistito obbligatoriamente per legge da coperture assicurative a garanzia del rischio vita ed impiego del Cliente ai sensi dell’articolo 54 del D.P.R. 180/1950. I costi sono a carico del Finanziatore. Offerta valida dal 01/01/2021 al 30/06/2021.
                                                </td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ACCORDION /-->
            </main>    
            <!-- MAIN / -->            
        </div>
        <!-- WRAP 1920px / -->
    </div>
    <!-- WRAP 2560px / -->
    
    <script src="assets/js/script.min.js"></script>
</body>
</html>