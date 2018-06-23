<!-- Banner -->
<div id="banner" class="overlay">
    <img class="img-fluid" src="<?php echo base_url(); ?>assets/front/assets/images/banner/banner3.jpg" alt="Banner">
    <div class="description">
        <div class="container">
            <h1>
                Contact Us
            </h1>              
        </div>
    </div>       
</div>
<!-- /Banner -->

<!-- Content -->
<div id="content">	      
    <!-- Section Get in Touch -->
    <section class="section contact-section">           
        <div class="container">              
            <div class="row mb-5">
                <div class="col-lg-6">                
                    <article class="post"> 
                        <h2 class="h2 divider mb-5 mt-0 text-center">The Ipsum club</h2>    
                        <p>At Ipsum we know a thing or two about Italian wine and food and we run courses or events to suit all tastes and levels, from novice to professionals, check our event page for the coming events.</p> 
                        <p> We have also created the <b>Ipsum Wine Club</b>, a club dedicated to the cause of great Italian wine, members of the Club will also be invited to exclusive tastings and receive offers before anyone else and it does not require any commitment, it can be cancelled any time. For more information give us a call</p>           
                    </article>
                </div>

                <div class="col-lg-6"> 
                    <h2 class="h2 divider mb-5 text-center">get in touch</h2>   
                    <p class="mb-5 text-center">Or to join the Ipsum Club</p>
                    <form class="form" method="POST" action="">
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input required="" name="contact_name" type="text" class="form-control" placeholder="Name *">
                            </div>
                            <div class="form-group col-md-6">
                                <input required="" name="contact_email" type="email" class="form-control" placeholder="E-mail *">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input required="" name="contact_phone" type="tel" class="form-control" placeholder="Phone">
                            </div>
                            <div class="form-group col-md-6">
                                <input required="" name="address" type="text" class="form-control" placeholder="Home Address *">
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group col-md-6">
                                <input required="" name="city" type="text" class="form-control" placeholder="City *">
                            </div>
                            <div class="form-group col-md-6">
                                <input required="" name="post_code" type="text" class="form-control" placeholder="Post Code *">
                            </div>
                        </div>


                        <div class="form-group">
                            <textarea required="" name="message" class="form-control" id="exampleFormControlTextarea1" placeholder="Please enter your message"></textarea>      
                        </div>     
                        <div class="form-group">
                            <script src='https://www.google.com/recaptcha/api.js'></script>
                            <div  class="g-recaptcha" data-sitekey="6LcfXEYUAAAAAFw6K_BJrcdPfn8eWWx9YPsW09HT"></div>
                        </div>
                        <div class="alert alert-danger alert-dismissible fade show captchaMessage" style="display:none;" role="alert">
                     Please tick the checkbox that you see above.
                    </div>
                        <button type="submit" class="btn btn-primary button bg-grey" onClick="return formSubmit()">send</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <div id="TA_selfserveprop311" class="TA_selfserveprop"><ul id="cTeW4BBm" class="TA_links FXl9KUj"><li id="gOowc3" class="JlGLbGo"><a target="_blank" href="https://www.tripadvisor.com/"><img src="https://www.tripadvisor.com/img/cdsi/img2/branding/150_logo-11900-2.png" alt="TripAdvisor"/></a></li></ul></div><script async src="https://www.jscache.com/wejs?wtype=selfserveprop&amp;uniq=311&amp;locationId=7692324&amp;lang=en_US&amp;rating=true&amp;nreviews=5&amp;writereviewlink=true&amp;popIdx=true&amp;iswide=false&amp;border=true&amp;display_version=2"></script>
                </div>
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                    
                </div>
                <div class="col-md-3">
                    
                </div>
            </div>
        </div>
    </section>           
    <!-- Section -->
</div>
<!-- /Content -->
<script src="<?php echo base_url()?>assets/front/assets/javascripts/vendor/bootstrap.min.js"></script>
<script>   
function formSubmit(){
if($("#g-recaptcha-response").val()!=""){
return true;
} else {
$(".captchaMessage").show();

return false;
}

}
</script>
