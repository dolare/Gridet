<?php if (nimbus_get_option('contact-toggle') == '1') { ?>
    <section id="<?php if (nimbus_get_option('fp-contact-slug')=='') {echo "contact";} else {echo nimbus_get_option('fp-contact-slug');} ?>" class="frontpage-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <?php if (nimbus_get_option('fp-contact-title') != '') { ?>
                        <div class="contact-title h1"><?php echo nimbus_get_option('fp-contact-title'); ?></div>
                    <?php } ?>
                    <?php if (nimbus_get_option('fp-contact-sub-title') != '') { ?>
                        <div class="contact-sub-title h4"><?php echo nimbus_get_option('fp-contact-sub-title'); ?></div>
                    <?php } ?>
                    <?php 
                    if(isset($_POST['submitted'])) { 
                        if(isset($_POST['myname']) && isset($_POST['email'])) {
                            if((trim($_POST['myname']) != "" ) && (trim($_POST['email']) != "" )) { ?>
                                <p class="bg-success"><?php echo _e('Thanks for contacting us!', 'nimbus' ); ?></p>
                            <?php } else { ?>
                                <p class="bg-danger"><?php echo _e('Please enter your name and email address.', 'nimbus' ); ?></p>
                            <?php 
                            }
                        }
                    }
                    if(isset($_POST['submitted'])) {
                        $nimbus_contact_recipient_email = nimbus_get_option('contact-mailto');
                        $nimbus_contact_sender_email = nimbus_get_option('contact-mailfrom');
                        if($nimbus_contact_recipient_email != '' && $nimbus_contact_sender_email != '') {
                            extract($_POST);
                            $blog_name = get_bloginfo('name');
                            $message = "Name: $myname
                                        Email: $email
                                        Website: $website
                                        Comments: $comments
                            ";
                            $headers = 'From: '.$blog_name.' <'.$nimbus_contact_sender_email.'>' . "\r\n";
                            wp_mail($nimbus_contact_recipient_email, 'Contact Form', $message, $headers);
                        }
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                             <form class="contact-form" name="contact-form" method="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group"><input data-sr="wait 0.3s, enter left and move 50px after 1s" type="text" id="myname" name="myname" placeholder="Name*" class="form-control input-lg" /></div>
                                        <div class="form-group"><input data-sr="wait 0.3s, enter left and move 50px after 1s" type="text" id="email" name="email" placeholder="Email*" class="form-control input-lg" /></div>
                                        <div class="form-group"><input data-sr="wait 0.3s, enter left and move 50px after 1s" type="text" id="website" name="website" placeholder="Website" class="form-control input-lg" /></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea data-sr="wait 0.3s, enter right and move 50px after 1s" id="comments" name="comments" class="form-control input-lg" rows="6" cols="" placeholder="Comments"></textarea>
                                    </div>
                                </div>
                                <br />
                                <div class="text-center">
                                    <input type="hidden" name="scrolltoform" value="<?php if (nimbus_get_option('fp-contact-slug')=='') {echo "contact";} else {echo nimbus_get_option('fp-contact-slug');} ?>">
                                    <input type="hidden" name="submitted" id="submitted" value="true" />
                                    <input data-sr="wait 0.3s, enter right and move 50px after 1s" type="submit" name="submit_button" id="submit_button" value="Submit" class="contact-submit btn btn-primary" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>    
        </div>    
    </section> 
<?php } else if (nimbus_get_option('contact-toggle') == '3') {
    // Don't do anything
} else { ?>  
    <section id="<?php if (nimbus_get_option('fp-contact-slug')=='') {echo "contact";} else {echo nimbus_get_option('fp-contact-slug');} ?>" class="frontpage-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contact-title h1">Contact Us</div>
                    <div class="contact-sub-title h4">Let us know what you are thinking.</div>
                    <?php 
                    if(isset($_POST['submitted'])) { 
                        if(isset($_POST['myname']) && isset($_POST['email'])) {
                            if((trim($_POST['myname']) != "" ) && (trim($_POST['email']) != "" )) { ?>
                                <p class="bg-success"><?php echo _e('Thanks for contacting us!', 'nimbus'); ?></p>
                            <?php } else { ?>
                                <p class="bg-danger"><?php echo _e('Please enter your name and email address.', 'nimbus'); ?></p>
                            <?php 
                            }
                        }
                    }
                    if(isset($_POST['submitted'])) {
                        // Don't do anything because this is a demo form
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-8 col-md-offset-2">
                             <form class="contact-form" name="contact-form" method="post">
                                <div class="row">
                                    <div class="col-sm-4">
                                        <div class="form-group"><input data-sr="wait 0.3s, enter left and move 50px after 1s" type="text" id="myname" name="myname" placeholder="Name*" class="form-control input-lg" /></div>
                                        <div class="form-group"><input data-sr="wait 0.3s, enter left and move 50px after 1s" type="text" id="email" name="email" placeholder="Email*" class="form-control input-lg" /></div>
                                        <div class="form-group"><input data-sr="wait 0.3s, enter left and move 50px after 1s" type="text" id="website" name="website" placeholder="Website" class="form-control input-lg" /></div>
                                    </div>
                                    <div class="col-sm-8">
                                        <textarea data-sr="wait 0.3s, enter right and move 50px after 1s" id="comments" name="comments" class="form-control input-lg" rows="6" cols="" placeholder="Comments"></textarea>
                                    </div>
                                </div>
                                <br />
                                <div class="text-center">
                                    <input type="hidden" name="scrolltoform" value="<?php if (nimbus_get_option('fp-contact-slug')=='') {echo "contact";} else {echo nimbus_get_option('fp-contact-slug');} ?>">
                                    <input type="hidden" name="submitted" id="submitted" value="true" />
                                    <input data-sr="wait 0.3s, enter right and move 50px after 1s" type="submit" name="submit_button" id="submit_button" value="Submit" class="contact-submit btn btn-primary" />
                                </div>
                            </form>
                        </div>
                    </div>
                </div> 
            </div>    
        </div>    
    </section> 
<?php } ?> 