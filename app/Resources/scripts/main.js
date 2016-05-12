function postForm( $form, callback ){

    var values = {};
    $.each( $form.serializeArray(), function(i, field) {
        values[field.name] = field.value;
    });

    $.ajax({
        type        : $form.attr( 'method' ),
        url         : $form.attr( 'action' ),
        data        : values,
        success     : function(data) {
            callback( data );
        }
    });

}

$(document).ready(function(){

    var forms = [
        '[ name="notificationFrom"]'
    ];

    $( forms.join(',') ).submit( function( e ){
        e.preventDefault();

        postForm( $(this), function( response ){

        });

        return false;
    });

});