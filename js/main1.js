$.validate({
    form : '#form',
      onElementValidate : function(valid, $el, $form, $errorMess) {
        console.log('Input ' +$el.attr('name')+ ' is ' + ( valid ? 'VALID':'NOT VALID') );
      }
    });
      
$('[type="button"]').click(function() {
    errors= [];
    if(!$('#form').isValid() ){
        //displayErrors( errors );
    } else {
    $.post( 
        "submit.php",
    {
        name: $('[name="name"]'). val(),
        email: $('[name="email"]'). val(),
        subqect: $('[name="subqect"]'). val(),
        message: $('[name="message"]'). val(),
    },
    function( data ) {
    $( ".result" ).html( data );
    }
    );
    }
});