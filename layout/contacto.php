    <script>
        function sendContact(){
            var valid;
            valid = validateContact();
            if(valid) {
                jQuery.ajax({
                    url: "contact_form.php",
                    data:'nombres='+$("#nombres").val()+'&email='+$("#email").val()+'&telefono='+$("#telefono").val()+'&asunto='+$("#asunto").val()+'&mensaje='+$("#mensaje").val(),
                    type: "POST",
                    success:function(data){
                        $("#mail-status").html(data);
                    },
                    error:function (){}
                });
            }
        }

        function validateContact() {
            var valid = true;
            if(!$("#nombres").val()) {
                $("#nombres").css('background-color','#f28282');
                valid = false;
            }
            if(!$("#email").val()) {
                $("#email").css('background-color','#f28282');
                valid = false;
            }
            if(!$("#email").val().match(/^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/)) {
                $("#email").css('background-color','#f28282');
                valid = false;
            }
            if(!$("#telefono").val()) {
                $("#telefono").css('background-color','#f28282');
                valid = false;
            }
            if(!$("#asunto").val()) {
                $("#asunto").css('background-color','#f28282');
                valid = false;
            }
            if(!$("#mensaje").val()) {
                $("#mensaje").css('background-color','#f28282');
                valid = false;
            }    
            return valid;
        }
    </script>

            <!-- CONTACTANOS -->
            <div class="section-full  p-tb80" style="background-color: #88621b4a;" id="contacto">
                <div class="container">
                    <!-- TITLE START-->
                    <div class="section-head text-center">
                        <span class="wt-title-subline font-16 text-gray-dark m-b15">Contactanos</span>
                        <h2 class="text-uppercase">¿TIENES ALGUNA CONSULTA?</h2>
                        <div class="wt-separator-outer">
                            <div class="wt-separator bg-primary"></div>
                        </div>
                        <p>Absolveremos todas tus interrogantes, solo déjanos tus datos.</p>
                    </div>
                    <!-- TITLE END-->  
                </div>
                
                <div class="container">
                    <div class="section-content p-a15 ">
                        <div class="row">

                            <!-- UBICACIÓN-->
                            <div class="wt-box col-md-6">
                                <h3 class="text-uppercase">UB&Iacute;CANOS</h3>
                                <div class="wt-separator-outer m-b30">
                                   <div class="wt-separator bg-primary"></div>
                               </div>
                                <div class="gmap-outline m-b30">
                                   <!--  <div id="gmap_canvas" class="google-map"></div> -->
                                   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3901.5229228716194!2d-77.09311948454454!3d-12.076311045740377!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9105c96ff7c5404f%3A0x66a67be7631da132!2supdate.pe+Update+Global+Marketing!5e0!3m2!1ses-419!2spe!4v1522185884967" width="100%" height="508" frameborder="0" style="border:0" allowfullscreen></iframe>
                                </div>
                            </div>                        
                        
                            <!-- CONTACT FORM-->
                            <div class="wt-box col-md-6">
                                <h3 class="text-uppercase">CONTÁCTANOS</h3>
                                <div class="wt-separator-outer m-b30">
                                   <div class="wt-separator bg-primary"></div>
                                </div>
                                <div class="cons-contact-form">
                                <!-- <form class="cons-contact-form" method="post" action="form-handler.php"> -->
                                    <div class="row p-a30" style="background-color: black;">
                                        <div class="contact-caption">
                                            <div class="cons-contact-form">
                                            <!-- <form  class="cons-contact-form" method="post" action="form-handler2.php"> -->
                                                <div id="mail-status"></div>
                                                <div class="form-group">
                                                    <input id="nombres" name="nombres" type="text" class="form-control" placeholder="Nombres" required>
                                                </div>
                                                <div class="form-group">
                                                    <input id="email" name="email" type="text" class="form-control" placeholder="Email" required>
                                                </div>
                                                <div class="form-group">
                                                    <input id="telefono" name="telefono" type="text" class="form-control" placeholder="Teléfono" required>
                                                </div>
                                                <div class="form-group">
                                                    <input id="asunto" name="asunto" type="text" class="form-control" placeholder="Asunto" required>
                                                </div>
                                                <div class="form-group">
                                                    <textarea id="mensaje" name="mensaje" class="form-control" rows="5" placeholder="Mensaje"></textarea>
                                                </div>
                                                <div>
                                                    <button name="submit" onClick="sendContact();" class="site-button skew-icon-btn btn-block">
                                                        <span class="font-18 inline-block text-uppercase p-lr15">Contactarme</span>
                                                    </button>
                                                </div>
                                            <!-- </form> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- </form> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
<!-- CONTACTANOS END --> 