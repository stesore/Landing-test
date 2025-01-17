<?php
ini_set('error_log','logs/php-errors.log');
error_reporting(E_ERROR | E_WARNING);

$province = array(
    "AG" => "Agrigento",
    "AL" => "Alessandria",
    "AN" => "Ancona",
    "AO" => "Aosta",
    "AR" => "Arezzo",
    "AP" => "Ascoli Piceno",
    "AT" => "Asti",
    "AV" => "Avellino",
    "BA" => "Bari",
    "BT" => "Barletta-Andria-Trani",
    "BL" => "Belluno",
    "BN" => "Benevento",
    "BG" => "Bergamo",
    "BI" => "Biella",
    "BO" => "Bologna",
    "BZ" => "Bolzano",
    "BS" => "Brescia",
    "BR" => "Brindisi",
    "CA" => "Cagliari",
    "CL" => "Caltanissetta",
    "CB" => "Campobasso",
    "CI" => "Carbonia-Iglesias",
    "CE" => "Caserta",
    "CT" => "Catania",
    "CZ" => "Catanzaro",
    "CH" => "Chieti",
    "CO" => "Como",
    "CS" => "Cosenza",
    "CR" => "Cremona",
    "KR" => "Crotone",
    "CN" => "Cuneo",
    "EN" => "Enna",
    "FM" => "Fermo",
    "FE" => "Ferrara",
    "FI" => "Firenze",
    "FG" => "Foggia",
    "FC" => "Forlì-Cesena",
    "FR" => "Frosinone",
    "GE" => "Genova",
    "GO" => "Gorizia",
    "GR" => "Grosseto",
    "IM" => "Imperia",
    "IS" => "Isernia",
    "SP" => "La Spezia",
    "AQ" => "L'Aquila",
    "LT" => "Latina",
    "LE" => "Lecce",
    "LC" => "Lecco",
    "LI" => "Livorno",
    "LO" => "Lodi",
    "LU" => "Lucca",
    "MC" => "Macerata",
    "MN" => "Mantova",
    "MS" => "Massa-Carrara",
    "MT" => "Matera",
    "ME" => "Messina",
    "MI" => "Milano",
    "MO" => "Modena",
    "MB" => "Monza e della Brianza",
    "NA" => "Napoli",
    "NO" => "Novara",
    "NU" => "Nuoro",
    "OT" => "Olbia-Tempio",
    "OR" => "Oristano",
    "PD" => "Padova",
    "PA" => "Palermo",
    "PR" => "Parma",
    "PV" => "Pavia",
    "PG" => "Perugia",
    "PU" => "Pesaro e Urbino",
    "PE" => "Pescara",
    "PC" => "Piacenza",
    "PI" => "Pisa",
    "PT" => "Pistoia",
    "PN" => "Pordenone",
    "PZ" => "Potenza",
    "PO" => "Prato",
    "RG" => "Ragusa",
    "RA" => "Ravenna",
    "RC" => "Reggio Calabria",
    "RE" => "Reggio Emilia",
    "RI" => "Rieti",
    "RN" => "Rimini",
    "RM" => "Roma",
    "RO" => "Rovigo",
    "SA" => "Salerno",
    "VS" => "Medio Campidano",
    "SS" => "Sassari",
    "SV" => "Savona",
    "SI" => "Siena",
    "SR" => "Siracusa",
    "SO" => "Sondrio",
    "TA" => "Taranto",
    "TE" => "Teramo",
    "TR" => "Terni",
    "TO" => "Torino",
    "OG" => "Ogliastra",
    "TP" => "Trapani",
    "TN" => "Trento",
    "TV" => "Treviso",
    "TS" => "Trieste",
    "UD" => "Udine",
    "VA" => "Varese",
    "VE" => "Venezia",
    "VB" => "Verbano-Cusio-Ossola",
    "VC" => "Vercelli",
    "VR" => "Verona",
    "VV" => "Vibo Valentia",
    "VI" => "Vicenza",
    "VT" => "Viterbo"
);

$error = array();
$ajax_json_res = array();

$ajax = intval($_POST['ajax']);
$amount = intval($_POST['amount']);
$amount_custom = intval($_POST['amount_custom']);
$activity_raw = filter_var($_POST['activity'],FILTER_SANITIZE_STRING);
$activity = ucwords(str_replace("-"," ",$activity_raw));
$contratto = ucwords(filter_var($_POST['contratto'],FILTER_SANITIZE_STRING));
$data_assunzione_raw_filtered = filter_var($_POST['data_assunzione'],FILTER_SANITIZE_STRING);
$data_assunzione = date("d/m/Y", strtotime(($data_assunzione_raw_filtered)));
$numero_mensilita = intval($_POST['numero_mensilita']);
$reddito_mensile_medio = intval($_POST['reddito_mensile_medio']);
$nome = filter_var($_POST['nome'],FILTER_SANITIZE_STRING);
$cognome = filter_var($_POST['cognome'],FILTER_SANITIZE_STRING);
$email = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);
$telefono = filter_var($_POST['telefono'],FILTER_SANITIZE_STRING);
$provincia = filter_var($_POST['provincia'],FILTER_SANITIZE_STRING);
$privacy_1 = ucfirst(str_replace("privacy1_","", filter_var($_POST['privacy1'],FILTER_SANITIZE_STRING)));
$privacy_2 = filter_var($_POST['privacy2'],FILTER_SANITIZE_STRING);

error_log("POST grezzo arrivato: ");
    error_log(print_r($_POST,true));


if(empty($privacy_2))
    $privacy_2 = "Non accettata";

$table_init="<html>
                <head>
                <title>La tua richiesta a PrestitiFaiDaTe</title>
                </head>
                <style>* {font-family: sans-serif; color:#333; text-align: center;}</style>
                <body><table width='600' align='center' style='border:1px solid #e6e6e6;'>";
$table_init.="<tr align='center'>
                <td colspan='2' align='center'>
                    <a href='https://www.prestitifaidate.it/'>
                        <img src='https://www.prestitifaidate.it/images/icons/logo.svg' alt='Prestiti fai da te - Logo' style='margin:30px auto;' width='217' height='86' /> 
                    </a> 
                </td>
            <tr>";

$table_body="";


if(empty($amount) && empty($amount_custom))
    $errori['importo'] = "Importo non valido";
else {
    if($amount_custom)
        $amount=$amount_custom;
    $table_body.="<tr><td>Importo:</td><td><strong>$amount &euro;</strong></td>";
}

if(empty($activity))
    $errori['attività'] = "Campo obbligatorio";
else $table_body.="<tr><td>Attività:</td><td><strong>$activity</strong></td>";

if(empty($contratto) && ($activity_raw!="pensionato-inps" && $activity_raw!="pensionato-altro-ente" ))
    $errori['contratto'] = "Campo obbligatorio se non sei un pensionato";
else $table_body.="<tr><td>Contratto:</td><td><strong>$contratto</strong></td>";


if( !$data_assunzione_raw_filtered && ($activity_raw!="pensionato-inps" && $activity_raw!="pensionato-altro-ente" ))
{
    $errori['assunzione'] = "Data obbligatoria se non sei un pensionato";
}


else $table_body.="<tr><td>Data assunzione:</td><td><strong>$data_assunzione</strong></td>";

if(!$numero_mensilita || ($numero_mensilita < 12 && $numero_mensilita > 15))
    $errori['mensilita'] = "Numero mensilità non valido";
else $table_body.="<tr><td>Numero mensilità:</td><td><strong>$numero_mensilita</strong></td>";

if(!$reddito_mensile_medio)
    $errori['assunzione'] = "Data non valida";
else $table_body.="<tr><td>Reddito medio mensile:</td><td><strong>$reddito_mensile_medio &euro;</strong></td>";

if(empty($nome))
    $errori['nome'] = "Campo obbligatorio";
else $table_body.="<tr><td>Nome:</td><td><strong>$nome</strong></td>";

if(empty($cognome))
    $errori['cognome'] = "Campo obbligatorio";
else $table_body.="<tr><td>Cognome:</td><td><strong>$cognome</strong></td>";

if(!$email)
    $errori['email'] = "E-mail non valida";
else $table_body.="<tr><td>Email:</td><td><strong>$email</strong></td>";

if(empty($telefono))
    $errori['telefono'] = "Telefono non valido";
else $table_body.="<tr><td>Telefono:</td><td><strong>$telefono</strong></td>";

if(empty($provincia))
    $errori['provincia'] = "Provincia non valida";
else $table_body.="<tr><td>Provincia:</td><td><strong>$province[$provincia] ($provincia)</strong></td>";

if(empty($privacy_1) || $privacy_1!="Accettata")
    $errori['privacy'] = "Devi accettare l'informativa sulla privacy per poter procedere.";
else $table_body.="<tr><td>Privacy:</td><td><strong>$privacy_1</strong></td>";

$table_body.="<tr><td>Privacy opzionale:</td><td><strong>$privacy_2</strong></td>";

$table_close="
            <tr align='center'><td colspan='2' align='center'><ul class='text-secondary' style='color: #000000;'>
            <ul style='list-style-type:none;margin:30px;padding:30px'>
            <li style='font-weight: 400'>Gruppo Santamaria S.p.A</li>
            <li>P.IVA 09334011005  Sede Legale Via Matteo Renato Imbriani, 164 – 95128 Catania</li>
            <li>Agente in Attività Finanziaria Avvera S.p.A. - Gruppo Bancario Credito Emiliano – OAM n. A 107</li>
            <li>Email:  servizioclienti@prestitifaidate.it <span style='font-weight: 600; font-size: 15px'><a target='_blank' style='text-decoration: underline; color: #000000;' href='https://servizi2.inps.it/servizi/cessionequinto/Pages/GestEntiConvenzionati.aspx'>Convenzione Inps</a>  |   <a target='_blank' style='text-decoration: underline; color: #000000;' href='https://noipa.mef.gov.it/cl/'>Convenzione Noipa</a></span></li>
            </ul><td></tr> 
</table></body></html>";

if($ajax) // la richeista arriva via ajax
{
    if(empty($errori)) // non ci sono errori php
    {
        if(invia_email($email,"Richiesta prestito prestitifaidate", $table_init.$table_body.$table_close))
        {
            //error_log("Inviato email con testo: ". $table_init.$table_body.$table_close);
            $ajax_res_status = 200;
            $ajax_res_mex = "E-mail inviata correttamente";
            $ajax_res_errors = [];
        }
        else
        {
            $ajax_res_status = 400;
            $ajax_res_mex = "Errore durante l'invio dell'email";
            $ajax_res_errors = [];
        }
    }
    else // sono presenti errori nella validazione del modulo
    {
        $ajax_res_status = 400;
        $ajax_res_mex = "Sono presenti alcuni errori:";
        $ajax_res_errors = $errori;       
    }

    // preparo l'array da convertire in JSON per la risposta
    $ajax_json_res = array(
        "status" => $ajax_res_status,
        "mex"    => $ajax_res_mex,
        "errors"  => $ajax_res_errors
    );
    
    error_log("JSON RITORNATO:");
    error_log(print_r($ajax_json_res, true));

    // ritorno il JSON
    exit(json_encode($ajax_json_res));
}

// gestisco il form via PHP
else {
    if(empty($errori)){


        if(invia_email($email,"Richiesta prestito prestitifaidate", $table_init.$table_body.$table_close))
              echo "<h1 id='invio_email corretto'>Email inviata correttamente</h1>";
         else echo "<h1 id='invio_email errore'>Errore invio email, riprova tra qualche minuto.</h1>";
     
         
     }
     else
     {
         echo "<div id='esito_form'>";
             echo "<h1>Errore nella compilazione dei dati.</h1>";
             echo "<p>Di seguito i dettagli.</p>";
             echo "<dl>";
                 foreach($errori as $campo => $mex)
                     echo "<dt>$campo</dt><dd>$mex</dd>";
             echo "</dl>";
         echo "</div>";
     }
}


function invia_email($email, $oggetto, $corpo)
{
    error_log("invio_email");
    $headers = array('MIME-Version: 1.0', 'Content-type: text/html; charset=utf-8');
    return mail($email,$oggetto,$corpo, implode("\r\n", $headers));
}