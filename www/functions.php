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

                foreach($multi_step_form_data as $key => $step)
                {
                    /*
                    echo "<pre>";
                    echo var_dump($step);
                    echo "</pre>";
                    */
                    $prev_step = $key-1;
                    $next_step = $key+1;
                    $col="12";

                    $html_step_count_inner.=
                            "<div class='step col-$bt_class' data-n='$key'>
                                <span class='num'> $key</span>
                                <span class='label'> $step->label </span>
                             </div>";

                    $html_step_content_inner.=
                            "<div class='stepcontent row'>
                                <div class='title'>$step->title</div>
                                <div class='subtitle'>$step->subtitle</div>";




                    foreach($step->fields as $field){ 
                        $html_step_content_inner.=html_field_r($field);                        
                    }
                    
                    $html_step_content_inner.="</div>";

                    if(!empty($step->$notes))
                        $html_step_content_inner.="<span class='note'>$step->$notes</span>";  

                    if( $prev_step == 0) // primo step
                    {
                        $html_step_content_inner.="<button class='col-$col' data-target='$next_step'>avanti</button>";
                    }
                    elseif( $next_step <= $n_columns )
                    {
                        $col="6"; 
                        $html_step_content_inner.="<button class='col-$col' data-target='$prev_step'>indietro</button>";  
                        $html_step_content_inner.="<button class='col-$col' data-target='$next_step'>avanti</button>";                          
                    }
                    else // ultimo step
                    {
                        $col="6"; 
                        $html_step_content_inner.="<button class='col-$col' data-target='$prev_step'>indietro</button>";  
                        $html_step_content_inner.="<input type='submit' class='col-$col' value='conferma' />";
                    } 
                }
                $html_step_count  ="<div class='formstep-count row'>$html_step_count_inner</div>";
                $html_step_content="<div class='formstep-content'>$html_step_content_inner</div>";



        $html_form_close.=
            "</form>
         </div>";
    }        
    return $html_form_start.$html_step_count.$html_step_content.$html_form_close="";
}


function html_field_r($field) : string
{
    $html="";
    

    if($field->type == "select") 
    {        
        $html.="<div class='field-container col-$field->col'>";
        $html.="<select id='$field->id' name='$field->id'>";       

        $i=0;
        foreach($field->values as $valobj)
        {
            $selected = "";
            
            if( !$i++)
                $selected="selected";

            $html.="<option $selected value='$valobj->key'>$valobj->value</option>";  
        } 
        $html.="</select>";   
        $html.="</div>";      
    }
    elseif( in_array($field->type, array("hidden", "text", "email", "url", "number", "date")))
    {
        $html.="<div class='field-container col-$field->col'>";
        $attrstr = "";
        
        
            foreach($field->htmlattrs as $attr )
            {
                $attrstr.="$attr->key='$attr->value' ";
            }
        
        $html.="<input type='$field->type'  id='$field->id' name='$field->id' $attrstr />";
        $html.="</div>"; 
    }
    elseif($field->type == "radio")
    {
        $attr = "";  
        
        $i=0;
        foreach($field->values as $valobj )
        {
            $html.="<div class='field-container col-$field->col'>";
            $id="$field->id-$i";
            $html.="<label for='$id'>$valobj->value</label><input type='$field->type' id='$id' name='$field->id' value='$valobj->value' />";
            $i++;
            $html.="</div>"; 
        }        
    }
    elseif($field->type == "checkbox")
    {
        $html.="<div class='field-container col-$field->col'>";
        $attrstr = "";
        
        
            foreach($field->htmlattrs as $attr )
            {
                $attrstr.="$attr->key='$attr->value' ";
            }
        
        $html.="<label for='$field->id'><input type='$field->type'  id='$field->id' name='$field->id' $attrstr />$field->label</label>";
        $html.="</div>"; 
    }
    return $html;
}