require( "bootstrap" ); 
var $ = jQuery = require( "jquery" ); 

$(function(){

    $('.multistep-form').attr('novalidate',true);
    $(document).on('click tap keydown','.step-nav-container button[data-dir]', {} ,function(e)
    {
        const step_num = $(this).closest('.multistep-form').find('.stepcontent').length;
        const direction = $(this).attr("data-dir");
        let current_step = $(this).parent().attr("data-current-step");
        let target_step  = $(this).attr("data-target");

        if( direction=="submit" )
        {
          has_validation(current_step);
        }
        if(direction=="prev" && target_step == (step_num - 1))
        {
            $(this).closest('.multistep-form').attr('novalidate',true);            
        }
        if(direction=="prev" || (direction=="next" && has_validation(current_step)))
        {
          show_step(target_step , current_step);
        }
    });

    $(document).on('click tap change keydown','.multistep-form input[name="amount_custom"]', {} ,function(e)
    {
        $(this).closest('.fields').find('input[type="radio"]').prop("checked", false);        
    });

    $(document).on('focus','.multistep-form #data_assunzione', {} ,function(e)
    {
        $(this).attr('type',"date");
    });
    $(document).on('change blur','.multistep-form #data_assunzione', {} ,function(e)
    {
        if($(this).val()=="")
        {
          $(this).attr('type',"text");
        }
    });

    $(document).on('click tap keydown','.multistep-form input[name="amount"]', {} ,function(e)
    {
        $(this).closest('.fields').find('input[name="amount_custom"]').val("");        
    });

    $(document).on('submit','.multistep-form', {} ,function(e)
    {
        e.preventDefault();

        let data={
        "ajax" : 1,  
        "amount" : $(this).find('input[name=amount]:checked').val(),
        "amount_custom" : $(this).find('#amount_custom').val(),
        "activity" : $(this).find('input[name=activity]:checked').val(),
        "contratto" : $(this).find('#contratto').val(),
        "data_assunzione" : $(this).find('#data_assunzione').val(),
        "numero_mensilita" : $(this).find('#numero_mensilita').val(),
        "reddito_mensile_medio" : $(this).find('#reddito_mensile_medio').val(),
        "nome" : $(this).find('#nome').val(),
        "cognome" : $(this).find('#cognome').val(),
        "email" : $(this).find('#email').val(),
        "telefono" : $(this).find('#telefono').val(),
        "provincia" : $(this).find('#provincia').val(),
        "privacy1" : $(this).find('#privacy1').val(),
        "privacy2" : $(this).find('#privacy2').val()
      }

        //console.log(data);
        //TODO controllare validazione di ogni step

        $.ajax({
          method: "POST",
          url: "multi-step-form-res.php",
          dataType: 'JSON',
          data: data,          
          success: function( response )
          {
              alert(response['status']+" -- "+response['mex']);
              if(response['status']==400)
                console.table(response['errors']);
          }          
        })          
    });
    
    
    /* SECTION PRESTITI TABS */
    $('a[href="#tab-prestitiPersonali"]').tab('show'); // mostro la prima tab
    $('a[data-toggle="tab"]').on('shown.bs.tab', function (event) {
      $(this).closest('.nav-tabs').find("li.active").removeClass('active');
      $(this).parent().addClass('active');
    })
    
    // jQuery
    $.getScript('assets/js/owl.carousel.min.js', function()
    {
        /* CAROUSEL F.A.Q. */    
        $('.owl-carousel').owlCarousel();
    });

    
    
    
});



// mostro lo step da mostrare il base al tasto cliccato, e nascondo quello corrente
function show_step(steptoshow,steptohide)
{
    let direction = ( (parseInt(steptoshow) - parseInt(steptohide)  > 0) ? "left" : "right" );
    $(`.stepcontent[data-step=${steptohide}]`).fadeOut('fast', ()=>{ 
            $(`.stepcontent[data-step=${steptoshow}]`).fadeIn('fast');  
            $(`.step-count[data-n=${steptoshow}]`).addClass('active');  
            $(`.step-count[data-n=${steptohide}]`).removeClass('active');  
        } );
}
function has_validation(stepnum)
{
  const currentstep = $(`.stepcontent[data-step=${stepnum}]`);
  const form = currentstep.closest('.multistep-form');
  const errordiv = currentstep.find('.error');
  let activity, amount, numero_mensilita_item, reddito_mensile_medio_item, data_assunzione ;
  

  
    switch(stepnum) {        

        case "1":
          amount        =  currentstep.find('input[name=amount]:checked').val();
          amount_custom =  currentstep.find('input[name=amount_custom]').val();

          if( (amount== "" || typeof(amount)== "undefined") && amount_custom=="")
          {
            currentstep.addClass("validation_error");
            errordiv.text("Seleziona un valore").fadeIn('slow');
            return false;
          }
          else
          {
            currentstep.removeClass("validation_error");
            errordiv.empty().fadeOut('fast');
            return true;
          }
          break;

        case "2":
          activity =  currentstep.find('input[name=activity]:checked').val();
          if(activity== "" || typeof(activity)=="undefined")
          {
            errordiv.text("Seleziona un valore").fadeIn('slow');
            currentstep.addClass("validation_error");
            return false;
          }
          else
          {
            currentstep.removeClass("validation_error");
            errordiv.empty().fadeOut('fast');
            return true;
          }          
          break;

        case "3":
          let valid, numero_mensilita_valid, reddito_mensile_medio_valid;
          let contratto_valid = true;
          let data_assunzione_valid = true;

          numero_mensilita_item = currentstep.find('select[name="numero_mensilita"]');
          numero_mensilita_val = numero_mensilita_item.val();
          reddito_mensile_medio_item = currentstep.find('select[name="reddito_mensile_medio"]');
          reddito_mensile_medio_val = reddito_mensile_medio_item.val();

          contratto_item = currentstep.find('select[name="contratto"]');
          contratto_val = contratto_item.val();
          data_assunzione_item = currentstep.find('input[name="data_assunzione"]');
          data_assunzione_val = data_assunzione_item.val();
          
          attivita_val = form.find("input[name='activity']:checked").val();

          console.log("Attivita vista nello step 3: ",attivita_val);

          /* Se nello step 2 non ho indicato di essere pensionato, controllo anche contratto e data_assunzione */
          if(attivita_val!="pensionato-inps" && attivita_val!="pensionato-altro-ente")
          {
              if(contratto_val=="")
              {
                  contratto_valid = false;
                  contratto_item.addClass("input_validation_error");
              }
              else
              {
                  contratto_valid = true;
                  contratto_item.removeClass("input_validation_error");
              }

              if(data_assunzione_val=="")
              {
                  data_assunzione_valid = false;
                  data_assunzione_item.addClass("input_validation_error");
              }
              else
              {
                  data_assunzione_valid = true;
                  data_assunzione_item.removeClass("input_validation_error");
              }
          } 
          else // se prima ho selezionato 'pensionato
          {
                console.log("campi non obbligatori");
                contratto_valid = true;
                contratto_item.removeClass("input_validation_error");
                data_assunzione_valid = true;
                data_assunzione_item.removeClass("input_validation_error");
          }

          if(numero_mensilita_val=="")
          {
            numero_mensilita_item.addClass("input_validation_error");
            numero_mensilita_valid = false;
          }
          else
          {
            numero_mensilita_item.removeClass("input_validation_error");
            numero_mensilita_valid = true;
          }

          if(reddito_mensile_medio_val=="")
          {
            reddito_mensile_medio_item.addClass("input_validation_error");
            reddito_mensile_medio_valid = false
          }
          else
          {
            reddito_mensile_medio_item.removeClass("input_validation_error"); 
            reddito_mensile_medio_valid = true;
          }

          valid = numero_mensilita_valid && reddito_mensile_medio_valid && contratto_valid && data_assunzione_valid;

          if(valid)
          {
               currentstep.removeClass("validation_error");
          }
          else currentstep.addClass("validation_error");
      
          console.log("step 3 valid: ",valid);
          return valid;
        
        break;

        case "4":

          $(currentstep).closest('.multistep-form').removeAttr('novalidate');
          /*
          let nome_valid, cognome_valid, email_valid, telefono_valid, provincia_valid, privacy1_valid;

          nome_item = currentstep.find('input[name="nome"]');
          cognome_item = currentstep.find('input[name="cognome"]');
          email_item = currentstep.find('input[name="email"]');
          telefono_item = currentstep.find('input[name="telefono"]');
          provincia_item = currentstep.find('select[name="provincia"]');
          privacy1_item = currentstep.find('input[name="privacy1"]');
          
          if(nome_item.val()=="")
          {
            nome_valid = false;
            nome_item.addClass("input_validation_error");
          }
          else
          {
            nome_valid = true;
            nome_item.removeClass("input_validation_error");
          }

          if(cognome_item.val()=="")
          {
            cognome_valid = false;
            cognome_item.addClass("input_validation_error");
          }
          else
          {
            cognome_valid = true;
            cognome_item.removeClass("input_validation_error");
          }

          if(email_item.val()=="")
          {
            email_valid = false;
            email_item.addClass("input_validation_error");
          }
          else
          {
            email_valid = true;
            email_item.removeClass("input_validation_error");
          }

          if(telefono_item.val()=="")
          {
            telefono_valid = false;
            telefono_item.addClass("input_validation_error");
          }
          else
          {
            telefono_valid = true;
            telefono_item.removeClass("input_validation_error");
          }

          if(provincia_item.val()=="")
          {
            provincia_valid = false;
            provincia_item.addClass("input_validation_error");
          }
          else
          {
            provincia_valid = true;
            provincia_item.removeClass("input_validation_error");
          }

          if(privacy1_item.val()=="")
          {
            privacy1_valid = false;
            privacy1_item.addClass("input_validation_error");
          }
          else
          {
            privacy1_valid = true;
            privacy1_item.removeClass("input_validation_error");
          }
          
          return (nome_valid && cognome_valid && email_valid && telefono_valid && provincia_valid && privacy1_valid)
          */
          return true;
          break;

        default:
          return true;

    }     
}
   