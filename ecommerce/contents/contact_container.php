    
    <?php
 if(isset($_POST['send_message'])){
     $return_mgs = $obj1->submit_message($_POST);
 }


?>
    <!-- About Page Starts Here -->
    <div class="contact-page">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-heading">
                        <div class="line-dec"></div>
                        <h1>Contact Us</h1>
                        <h6 style = "color:red;"><?php if(isset($return_mgs)){ echo $return_mgs;}?></h6>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="map">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3644.489124880633!2d89.27723521435368!3d24.013810984580815!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39fe84f0ec23a72b%3A0x775d6cd53cbdad8b!2sPabna%20University%20of%20Science%20and%20Technology!5e0!3m2!1sen!2sbd!4v1646048548363!5m2!1sen!2sbd"
                            width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="right-content">
                        <div class="container">
                            <form id="contact" action="" method="post">
                                <div class="row">
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="message_name" type="text" class="form-control" id="name"
                                                placeholder="Your name..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-6">
                                        <fieldset>
                                            <input name="message_email" type="email" class="form-control" id="email"
                                                placeholder="Your email..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <input name="message_subject" type="text" class="form-control" id="subject"
                                                placeholder="Subject..." required="">
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <textarea name="message_content" rows="6" class="form-control" id="message"
                                                placeholder="Your message..." required=""></textarea>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <fieldset>
                                            <button id="form-submit" class="button" name ="send_message">Send Message</button>
                                        </fieldset>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="share">
                                            <h6>You can also keep in touch on: <span>
                                                    <a href="https://www.facebook.com/mdrahatulrabbi/" target="blank"><i
                                                            class="fa fa-facebook"></i></a>
                                                    <a href="https://www.twitter.com/rahatulrabbi" target="blank"><i
                                                            class="fa fa-twitter"></i></a>
                                                    <a href="https://www.instagram.com/rahatulrabbi" target="blank"><i
                                                            class="fa fa-instagram"></i></a>
                                                </span>
                                            </h6>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About Page Ends Here -->