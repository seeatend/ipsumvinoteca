function subscribe_email() {
    var url = $('.subscribe').attr('data-href');
    var email = $('#subscriber_email').val();
    $.ajax({
        url: url,
        type: 'POST',
        data: {email: email},
        dataType: 'JSON',
        success: function(res)
        {
         if (res.status == 'true')
            {
                $('.successmsg').show();
                $('.successmsg').html('Thanku for subscribe with us');
                setTimeout(function() {
                    window.location.href = res.redir_url;
                }, 8000);
            }
            else
            {
             $('.errormsg').show();
                $('.errormsg').html('Your email is already exits please try another email');
     setTimeout(function(){
    window.location.href=res.redir_url;
}, 8000);   
            }
        },
    })

}


