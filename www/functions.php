<?php
declare(strict_types=1); // modalità strict, controllo rigoroso dei tipi di dati

ini_set('error_log','logs/php-errors.log');
error_reporting(E_ERROR | E_WARNING);


function multistep_forms(string $formclass, string $id, string $basepath=""): ?string
{
    $formname_filtered = filter_var($formclass,FILTER_SANITIZE_STRING);
    $formname = $formname_filtered.$id;

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
    
    // se il file non è vuoto
    if($multi_step_form_data) 
    {
        $n_columns = count((array)$multi_step_form_data);
        $bt_class = intval(12 / $n_columns);
        $html_form_start.=
        "<div class='multi-step-forms columns_$n_columns' id='$formname'> 
            <form id='$formname' name='$formname' class='multistep-form' action='multi-step-form-res.php' method='post'>"; 

                foreach($multi_step_form_data as $key => $step)
                {
                    $state="";
                    /*
                    echo "<pre>";
                    echo var_dump($step);
                    echo "</pre>";
                    */
                    $prev_step = $key-1;
                    $next_step = $key+1;
                    $col="12";

                     
                    if($key==1)
                        $state='active';

                    $html_step_count_inner.=
                            "<div class='step-count col-$bt_class $state' data-n='$key'  data-form='$formname'>
                                <span class='num'> $key</span>
                                <span class='label'> $step->label </span>
                             </div>";

                    $html_step_content_inner.=
                            "<div class='stepcontent row $state' data-step='$key' data-form='$formname'>
                                <div class='title'>$step->title</div>
                                <div class='subtitle'>$step->subtitle</div>";



                    $html_step_content_inner.="<div class='fields row'>";
                    foreach($step->fields as $field){ 
                        $html_step_content_inner.=html_field_r($field, $formname);                        
                    }
                    $html_step_content_inner.="</div>";
                    
                    if(!empty($step->notes))
                        $html_step_content_inner.="<div class='note col-12'>$step->notes</div>";   

                        $html_step_content_inner.="<div class='error'></div>";

                        $html_step_content_inner.="<div class='step-nav-container'  data-form='$formname' data-current-step='$key' >";
                    if( $prev_step == 0) // primo step
                    {
                        $html_step_content_inner.="<button type='button' class='col-$col'  data-current-step='$key' data-form='$formname' data-dir='next' data-target='$next_step'>avanti</button>";
                    }
                    elseif( $next_step <= $n_columns )
                    {
                        $col="6"; 
                        $html_step_content_inner.="<button type='button' class='col-$col'  data-current-step='$key' data-form='$formname' data-dir='prev' data-target='$prev_step'>indietro</button>";  
                        $html_step_content_inner.="<button type='button' class='col-$col' data-current-step='$key' data-form='$formname' data-dir='next' data-target='$next_step'>avanti</button>";                          
                    }
                    else // ultimo step
                    {
                        $col="6"; 
                        $html_step_content_inner.="<button type='button' class='col-$col' data-current-step='$key' data-form='$formname' data-dir='prev'  data-target='$prev_step'>indietro</button>";  
                        $html_step_content_inner.="<button type='submit'  data-form='$formname' data-current-step='$key' data-dir='submit' class='col-$col'>CONFERMA</button>";
                    } 
                        $html_step_content_inner.="</div>";
                    $html_step_content_inner.="</div>";

                }
                $html_step_count  ="<div class='formstep-count row'>$html_step_count_inner</div>";
                $html_step_content="<div class='formstep-content'>$html_step_content_inner</div>";



        $html_form_close.=
            "</form>
         </div>";
    }        
    return $html_form_start.$html_step_count.$html_step_content.$html_form_close="";
}


function html_field_r($field, $formname) : string
{
    $html="";
    
    $field_id = $formname."_".$field->id;

    if($field->type == "select") 
    {   
        $attrstr = "";
        foreach($field->htmlattrs as $attr )
        {
            $attrstr.="$attr->key='$attr->value' ";
        }
        
        $html.="<div class='field-container $field->type-container col-$field->col'>";
        $html.="<select id='$field_id' $attrstr name='$field->id' form='$formname' >";       

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
    elseif( in_array($field->type, array("hidden", "text", "email", "url", "number", "date", "tel")))
    {
        $html.="<div class='field-container $field->type-container col-$field->col'>";
        $attrstr = "";
        
        
            foreach($field->htmlattrs as $attr )
            {
                $attrstr.="$attr->key='$attr->value' ";
            }
        
        $html.="<input type='$field->type'  id='$field_id' name='$field->id' $attrstr form='$formname' />";
        $html.="</div>"; 
    }
    elseif($field->type == "radio")
    {
        $attr = "";  
        
        $i=0;

        $custom_field_id = "";
        foreach($field->values as $valobj )
        {
            $custom_field_id = $field_id."_".$i;
            $html.="<div class='field-container $field->type-container col-$field->col'>";
            $id="$field->id-$i";
            $html.="<input type='$field->type' id='$custom_field_id' name='$field->id' value='$valobj->value'  form='$formname' />";
            $html.="<label for='$custom_field_id'>$valobj->key</label>";
            $i++;
            $html.="</div>"; 
        }        
    }
    elseif($field->type == "checkbox")
    {
        $html.="<div class='field-container $field->type-container col-$field->col'>";
        $attrstr = "";
        
        
            foreach($field->htmlattrs as $attr ) 
            {
                $attrstr.="$attr->key='$attr->value' ";
            } 
         
        $html.="<input type='$field->type'  id='$field_id' name='$field->id' $attrstr  form='$formname' />
                <label for='$field_id'>$field->label</label>";
        $html.="</div>"; 
    }
    return $html; 
}