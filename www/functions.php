<?php
declare(strict_types=1); // modalità strict, controllo rigoroso dei tipi di dati

ini_set('error_log','logs/php-errors.log');
error_reporting(E_ERROR | E_WARNING);


function multistep_forms(string $formname, string $basepath=""): ?string
{
    $formname_filtered = filter_var($formname,FILTER_SANITIZE_STRING);
    $filename = "$basepath$formname_filtered.json";

    //echo dirname(__FILE__).$filename;

    if(!file_exists($filename))
        return "";

    $html_form_start="";
    $html_form_close="";
    $html_step_count="";
    $html_step_content="";

    $multi_step_form_data = json_decode(file_get_contents($filename)); 

    // echo var_dump($multi_step_form_data);

    if($multi_step_form_data)
    {
        $n_columns = count((array)$multi_step_form_data);
        $bt_class = intval(12 / $n_columns);
        $html_form_start.=
        "<div class='multi-step-forms columns_$n_columns' id='$formname_filtered'> 
            <form id='$formname' name='$formname' action='formres.php'>";
           

                // genero html dei counter
                
                foreach($multi_step_form_data as $key => $step)
                {
                    $html_step_count_inner.=
                                "<div class='step col-$bt_class' data-n='$key'>
                                    <span class='num'> $key</span>
                                    <span class='label'> $step->label </span>
                                </div>";

                    $html_step_content_inner.=
                            "<div class='stepcontent'>
                                <div class='title'>$step->title</div>
                                <div class='subtitle'>$step->subtitle</div>
                            </div>";
                }
                $html_step_count="<div class='formstep-count row'>$html_step_count_inner</div>";
                $html_step_content="<div class='formstep-content'>$html_step_content_inner</div>";



        $html_form_close.=
            "</form>
         </div>";
    }        
    return $html_form_start.$html_step_count.$html_step_content.$html_form_close="";
}