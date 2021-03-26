require( "bootstrap" ); 
var $ = require( "jquery" ); 

$(function(){
    $(document).on('click tap keydown','.step-nav-container button[data-dir]', {} ,function(e)
    {
        const direction = $(this).attr("data-dir");
        let current_step = $(this).parent().attr("data-current-step");
        let target_step  = $(this).attr("data-target");

        let valid=has_validation(current_step);
        show_step(target_step , current_step);
    });
    $(document).on('submit','.multistep-form', {} ,function(e)
    {
        e.preventDefault();
        console.log('intercetto submit');
    });
    
    $('.multistep-form').attr('novalidate',true);
    
});



// mostro lo step da mostrare il base al tasto cliccato, e nascondo quello corrente
function show_step(steptoshow,steptohide)
{
    let direction = ( (parseInt(steptoshow) - parseInt(steptohide)  > 0) ? "left" : "right" );
    $(`.stepcontent[data-step=${steptohide}]`).fadeOut('fast', ()=>{ 
            $(`.stepcontent[data-step=${steptoshow}]`).fadeIn('fast');  
            $(`.step-count[data-n=${steptoshow}]`).toggleClass('active');  
            $(`.step-count[data-n=${steptohide}]`).toggleClass('active');  
        } );
}
function has_validation(stepnum)
{
    switch(stepnum) {
        case 1:

          break;
        case 2:
        
          break;

        case 3:
        
        break;

        case 4:
          
          break;

        default:
          return true;
    } 
}
   