<?php



mail("sore87@gmail.com","Richiesta prestito prestitifaidate","Messaggio inviato correttamente");

$error = array();

$amount = intval($_GET['amount']);
$amount_custom = intval($_GET['amount_custom']);
$activity = ucwords(str_replace("-"," ",filter_var($_GET['activity'],FILTER_SANITIZE_STRING)));
$contratto = ucwords(filter_var($_GET['contratto'],FILTER_SANITIZE_STRING));
$data_assunzione = date("d/m/Y", strtotime((filter_var($_GET['data_assunzione'],FILTER_SANITIZE_STRING))));
$numero_mensilita = intval($_GET['numero_mensilita']);
$reddito_mensile_medio = intval($_GET['reddito_mensile_medio']);
$nome = filter_var($_GET['nome'],FILTER_SANITIZE_STRING);
$cognome = filter_var($_GET['cognome'],FILTER_SANITIZE_STRING);
$email = filter_var($_GET['email'],FILTER_VALIDATE_EMAIL);
$telefono = filter_var($_GET['telefono'],FILTER_SANITIZE_STRING);
$provincia = filter_var($_GET['provincia'],FILTER_SANITIZE_STRING);
$privacy_1 = filter_var($_GET['privacy1'],FILTER_SANITIZE_STRING);
$privacy_2 = filter_var($_GET['privacy2'],FILTER_SANITIZE_STRING);


$table_init="<table width='600' align='center' style='border:1px solid #e6e6e6;'>";
$table_init.="<tr align='center'>
                <td colspan='2' align='center'>
                    <a href='https://www.prestitifaidate.it/'>
                        <img src='images/logo.svg' alt='Prestiti fai da te - Logo' style='margin:30px auto;' width='217' height='86' /> 
                    </a> 
                </td>
            <tr>";

$table_body="";


if(empty($amount) && empty($amount_custom))
    $errori['importo'] = "Importo non valido";
else {
    if($amount_custom)
        $amount=$amount_custom;
    $table_body.="<tr><td>Importo:</td><td><strong>$amount</strong></td>";
}

if(empty($activity))
    $errori['attività'] = "Campo obbligatorio";
else $table_body.="<tr><td>Attività:</td><td><strong>$activity</strong></td>";

if(empty($contratto))
    $errori['contratto'] = "Campo obbligatorio";
else $table_body.="<tr><td>Contratto:</td><td><strong>$contratto</strong></td>";

if(!$data_assunzione)
    $errori['assunzione'] = "Data non valida";
else $table_body.="<tr><td>Data assunzione:</td><td><strong>$data_assunzione</strong></td>";

if(!$numero_mensilita || ($numero_mensilita < 12 && $numero_mensilita > 15))
    $errori['mensilita'] = "Numero mensilità non valido";
else $table_body.="<tr><td>Numero mensilità:</td><td><strong>$numero_mensilita</strong></td>";

if(!$reddito_mensile_medio)
    $errori['assunzione'] = "Data non valida";
else $table_body.="<tr><td>Numero mensilità:</td><td><strong>$reddito_mensile_medio</strong></td>";

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
else $table_body.="<tr><td>Provincia:</td><td><strong>$provincia</strong></td>";

if($privacy_1!="on")
    $errori['privacy'] = "Devi accettare l'informativa sulla privacy per poter procedere.";
else $table_body.="<tr><td>Privacy:</td><td><strong>$privacy_1</strong></td>";

$table_body.="<tr><td>Privacy opzionale:</td><td><strong>$privacy_1</strong></td>";

$table_close="
            <tr align='center'><td colspan='2' align='center'><ul class='text-secondary' style='color: #000000;'>
            <ul style='list-style-type:none;margin:30px;padding:30px'>
            <li style='font-weight: 400'>Gruppo Santamaria S.p.A</li>
            <li>P.IVA 09334011005  Sede Legale Via Matteo Renato Imbriani, 164 – 95128 Catania</li>
            <li>Agente in Attività Finanziaria Avvera S.p.A. - Gruppo Bancario Credito Emiliano – OAM n. A 107</li>
            <li>Email:  servizioclienti@prestitifaidate.it <span style='font-weight: 600; font-size: 15px'><a target='_blank' style='text-decoration: underline; color: #000000;' href='https://servizi2.inps.it/servizi/cessionequinto/Pages/GestEntiConvenzionati.aspx'>Convenzione Inps</a>  |   <a target='_blank' style='text-decoration: underline; color: #000000;' href='https://noipa.mef.gov.it/cl/'>Convenzione Noipa</a></span></li>
            </ul><td></tr> 
</table>";


if(empty($errori)){

   if(mail($email,"Richiesta prestito prestitifaidate", $table_init.$table_body.$table_close ))
         echo "<h1 id='invio_email corretto'>Email inviata correttamente</h1>";
    else echo "<h1 id='invio_email errore'>Errore invio email</h1>";
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
