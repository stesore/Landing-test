require( "bootstrap" ); 
var $ = jQuery = require( "jquery" ); 


var isMobile = {
  Android: function () {
      return navigator.userAgent.match(/Android/i);
  },
  BlackBerry: function () {
      return navigator.userAgent.match(/BlackBerry/i);
  },
  iOS: function () {
      return navigator.userAgent.match(/iPhone|iPad|iPod/i);
  },
  Opera: function () {
      return navigator.userAgent.match(/Opera Mini/i);
  },
  Windows: function () {
      return navigator.userAgent.match(/IEMobile/i);
  },
  any: function () {
      return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
  }
};

$(function(){

    if(isMobile)
    {
        // se sono in mobile, triggero il click a menu e collasso il mobile menu
        $(document).on('click','.mainmenu__navitem__innerlink', {} ,function(e)
        {
            $("#mobile-menu-btn").trigger("click");
            
        });
    }

    
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
    
        let header_height = $("#mainheader").height();

        // console.log("header height: ",header_height);
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top - header_height
        }, 500);
    });
   

    /* STICKY HEADER /****/
    stickyheader();
    window.onscroll = function() {stickyheader()};
    // Add the sticky class to the header when you reach its scroll position. Remove "sticky" when you leave the scroll position
    function stickyheader() {



      var header = document.getElementById("mainheader");
      var sticky = header.offsetTop;
      if (window.pageYOffset > sticky) { header.classList.add("sticky"); } else { header.classList.remove("sticky"); }
    } 





    $('.multistep-form').attr('novalidate',true);

    $(document).on('click tap keydown','.step-nav-container button[data-dir]', {} ,function(e)
    {
        const formid = $(this).attr("data-form");
        const step_num = $(`#${formid}`).find('.stepcontent').length;
        const direction = $(this).attr("data-dir");
        let current_step = $(this).parent().attr("data-current-step");
        let target_step  = $(this).attr("data-target");

        if( direction=="submit" )
        {
          // console.log("ho cliccato su BUTTON con direction ",direction);
          if(has_validation(current_step, formid)){

            // console.warn("step ",current_step," di ",formid," valido, faccio submit di",`#${formid}` );
            //$(`#${formid}`).trigger('sumbit');

          }
            
        }
        if(direction=="prev" && target_step == (step_num - 1))
        {
            $(`#${formid}`).attr('novalidate',true);  
            $(`#${formid} .response`).fadeOut('fast'); 
            // alert(`doveri nascondere #${formid} .response`);
        }
        if(direction=="prev" || (direction=="next" && has_validation(current_step,formid)))
        {
          show_step(target_step , current_step, formid);
        }
    });

    $(document).on('click tap change keydown','input[name="amount_custom"]', {} ,function(e)
    {
        const formid = $(this).attr("form");
        const strepnum = $(this).closest(".stepcontent").attr("data-step");
        $(`#${formid}`).find(`.stepcontent[data-step=${strepnum}] .fields`).find('input[type="radio"]').prop("checked", false);        
    });

    $(document).on('click tap keydown','input[name="amount"]', {} ,function(e)
    {
        const formid = $(this).attr("form");
        const strepnum = $(this).closest(".stepcontent").attr("data-step");
        $(`#${formid}`).find(`.stepcontent[data-step=${strepnum}] .fields`).find('input[name="amount_custom"]').val("");        
    });

    $(document).on('focus','#multistep-form-data1_data_assunzione, #multistep-form-data2_data_assunzione', {} ,function(e)
    {
        const formid = $(this).attr("form");
        $(this).attr('type',"date");
    });
    $(document).on('change blur','#multistep-form-data1_data_assunzione, multistep-form-data2_data_assunzione', {} ,function(e)
    {
        if($(this).val()=="")
        {
          $(this).attr('type',"text");
        }
    });

    

    function invia_email(e, formobj, formid)
    {
          e.preventDefault();

          console.log("preparo dati prima di inviare email");

          let privacy1="";
          if(formobj.find("input[name=privacy1]").is(":checked"))
            privacy1="privacy1_accettata"; 

          let privacy2="";
            if(formobj.find("input[name=privacy2]").is(":checked"))
              privacy2="privacy2_accettata"; 


          let current_step =   formobj.find(".stepcontent.active").attr("data-step");
              
          let data={
          "form" : formid,
          "ajax" : 1,  
          "amount" : formobj.find('input[name=amount]:checked').val(),
          "amount_custom" : formobj.find('input[name=amount_custom]').val(),
          "activity" : formobj.find('input[name=activity]:checked').val(),
          "contratto" : formobj.find('select[name=contratto]').val(),
          "data_assunzione" : formobj.find('input[name=data_assunzione]').val(),
          "numero_mensilita" : formobj.find('select[name=numero_mensilita]').val(),
          "reddito_mensile_medio" : formobj.find('select[name=reddito_mensile_medio]').val(),
          "nome" : formobj.find('input[name=nome]').val(),
          "cognome" : formobj.find('input[name=cognome]').val(),
          "email" : formobj.find('input[name=email]').val(),
          "telefono" : formobj.find('input[name=telefono]').val(),
          "provincia" : formobj.find('select[name=provincia]').val(),
          "privacy1" : privacy1,
          "privacy2" : privacy2
        }

        console.table(data);
          

          //TODO controllare validazione di ogni step
          if(has_validation(current_step,formid))
          {
            $.ajax({
              method: "POST",
              url: "multi-step-form-res.php",
              dataType: 'JSON',
              data: data,          
              success: function( response )
              {
                if($("#"+formid+" .stepcontent.active .response"))
                  $("#"+formid+" .stepcontent.active .response").remove();

                if(response['status']==200){
                  $("#"+formid+" .stepcontent.active .title").empty().text("Esito richiesta");
                  $("#"+formid+" .stepcontent.active .step-nav-container").fadeOut('fast');
                  $("#"+formid+" .stepcontent.active .fields").fadeOut('fast');
                  $("#"+formid+" .stepcontent.active").append("<div class='response success'><h1 class='fsize23'>"+response['mex']+"</h1></div>");
                }
                else if(response['status']==400)
                {


                   $("#"+formid+" .stepcontent.active").append("<div class='response errors'><h1 class='fsize23'>"+response['mex']+"</h1></div>");
                   $("#"+formid+" .stepcontent.active .subtitle").empty().text;
                   
                   $.each(response['errors'], function(key, val) {
                    $("#"+formid+" .stepcontent.active .errors ").append(`<p>${key}: ${val}<p>`);
                  });
                    console.table(response['errors']);
                }
                  

                  // alert(response['status']+" -- "+response['mex']);
                  
              }          
            })  
          }
    }

    // da mettere id del form e non LA CLASSE !
    $(document).on('submit','#multistep-form-data1', {} ,(e)=>{invia_email(e, $(this), "multistep-form-data1")});
    $(document).on('submit','#multistep-form-data2', {} ,(e)=>{invia_email(e, $(this), "multistep-form-data2")});
    
    
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
        jQuery('.owl-carousel').owlCarousel();
    });

    
    
    
});



// mostro lo step da mostrare il base al tasto cliccato, e nascondo quello corrente
function show_step(steptoshow,steptohide, formid)
{
    let direction = ( (parseInt(steptoshow) - parseInt(steptohide)  > 0) ? "left" : "right" );
    $(`#${formid} .stepcontent[data-step=${steptohide}]`).fadeOut('fast', ()=>{ 
            $(`#${formid}  .stepcontent[data-step=${steptoshow}]`).fadeIn('fast').addClass('active');  
            $(`#${formid}  .step-count[data-n=${steptoshow}]`).addClass('active');  
            $(`#${formid}  .step-count[data-n=${steptohide}]`).removeClass('active');  
        } ).removeClass('active');
}
function has_validation(stepnum, formid)
{

  console.log("valido step ",stepnum," di ",formid);

  const currentstep = $(`#${formid} .stepcontent[data-step=${stepnum}]`);

  const form = $(`#${formid}`);
  const errordiv = currentstep.find('.error');
  let activity, amount, numero_mensilita_item, reddito_mensile_medio_item, data_assunzione ;
  
  console.log("currentstep",currentstep);
  
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
          let nome_valid, cognome_valid, email_valid, telefono_valid, provincia_valid, privacy1_valid;
          let formid = $(currentstep).attr("data-form");

          $("#"+formid).removeAttr('novalidate');
          /*
          nome_item = currentstep.find('input[name="nome"]');
          cognome_item = currentstep.find('input[name="cognome"]');
          email_item = currentstep.find('input[name="email"]');
          telefono_item = currentstep.find('input[name="telefono"]');
          provincia_item = currentstep.find('select[name="provincia"]');
          privacy1_item = currentstep.find('input[name="privacy1"]');
          privacy1_lbl = currentstep.find(`label[for="${formid}_privacy1"]`);
          
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

          if(!privacy1_item.is(":checked"))
          {
            privacy1_valid = false;
            privacy1_lbl.addClass("input_validation_error");
          }
          else
          {
            privacy1_valid = true;
            privacy1_lbl.removeClass("input_validation_error");
          }
          
          console.log("Ritorno ",nome_valid && cognome_valid && email_valid && telefono_valid && provincia_valid && privacy1_valid);

          return (nome_valid && cognome_valid && email_valid && telefono_valid && provincia_valid && privacy1_valid)
          */
          return true; 
          break;

        default:
          return true;

    }     
}
   