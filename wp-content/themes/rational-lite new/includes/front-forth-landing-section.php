
<!-- about us -->
        <div id="contact" class="bg-image overflow-hidden" style="padding:0; background: linear-gradient(0deg, rgba(61,177,255, 0.8) 0%, rgba(255, 255, 255, 0.92) 0%), url('<?php echo get_template_directory_uri(); ?>/images/bg-map.png') no-repeat center center;-webkit-background-size: cover;-moz-background-size: cover;-o-background-size: cover;background-size: cover;">
                    
                    <div style=" margin:0; height:100%">
                        
                         <section class="content content-boxed">
                        <div class="content content-narrow">
                            <div class="block block-transparent">
                                <div class="block-content block-content-full">
                                    
                                    <h1 class="h1 page-heading text-center push-15 text-uppercase flat-text-dark" style="font-weight: 600; letter-spacing: 0.5px; font-family: 'Helvetica Neue','Open Sans',Helvetica,Arial,sans-serif;">
                                Contact 
                            </h1>

<!--                             <p class="text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/divider.png" height="35"></p>
 -->
                            
                            <!-- line break -->
                            <div style=" margin-bottom:45px;" class="hr text-center">

                                <span style="border-color: #d1d1d1;width:50px;display: inline-block;position: relative;vertical-align: middle;margin-left: 10px;margin-right: 10px;height: 1px; margin-top: -1px;border-top-width: 2px;border-top-style: solid;">
                                <span ></span>
                                </span>

                                <span class="flat-text-red" style="font-size:25px;display: inline-block;vertical-align: middle;" aria-hidden="true" data-av_icon="" data-av_iconfont="entypo-fontello">&#10070;
                                </span>

                                <span style=" border-color: #d1d1d1;width:50px;display: inline-block;position: relative;vertical-align: middle;margin-left: 10px;margin-right: 10px;height: 1px; margin-top: -1px;border-top-width: 2px;border-top-style: solid;">
                                <span></span>
                                </span>

                            </div>

                            <div class="row">
                         
                                    <div class="col-sm-4">
                                       
                                    <?php gmwd_map( 1, 1); ?>


                                <div class="block block-bordered push-15-t">
                                
                                    <div class="block-content" style="font-size:16px; padding-top:20px; padding-bottom: 18px;">

                                       <p><i class="fa fa fa-location-arrow flat-text-dark" aria-hidden="true" style="color: navy"></i>&nbsp;&nbsp;&nbsp;Oak Tree Center, 2024 Center Ave, &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Fort Lee, NJ 07024</p>
                                       <p><i class="fa fa-envelope-o flat-text-dark" aria-hidden="true"  style="color: navy"></i>&nbsp;&nbsp;&nbsp;<a href="mailto:info@gridet.com">info@gridet.com</a></p>
                                    </div>
                                </div>


                                </div>
                                <!--  -->
                                <div class="col-sm-8 push-30" style="padding: 0 15px;">
                                    

                              <div class="block block-themed block-bordered push-50">
                                <div class="block-header">
                                    
                                </div>
                                <div class="block-content" style="padding: 15px 40px;">


                                    <!-- contact form -->
                                         <div role="form" class="wpcf7" id="wpcf7-f17-p92-o1" lang="en-US" dir="ltr">
                                    <div class="screen-reader-response" role="alert"></div>

                                    <form action="/contact#wpcf7-f17-p92-o1" method="post" class="wpcf7-form sent form-horizontal" novalidate="novalidate">

                                    <div style="display: none;">
                                    <input type="hidden" name="_wpcf7" value="17">
                                    <input type="hidden" name="_wpcf7_version" value="4.4.2">
                                    <input type="hidden" name="_wpcf7_locale" value="en_US">
                                    <input type="hidden" name="_wpcf7_unit_tag" value="wpcf7-f17-p92-o1">
                                    <input type="hidden" name="_wpnonce" value="8d23574392">
                                    </div>

                                    <div class="form-group">
                                            <div class="col-xs-6">
                                                <span class="wpcf7-form-control-wrap name">
                                                <div class="form-material form-material-primary">
                                                    <input class="form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required" type="text" name="name" placeholder="Enter your name.." aria-required="true" aria-invalid="false">
                                                    <label class="requiredlabel" for="name">Name</label>
                                                </div>
                                                </span>
                                            </div>
                                            <div class="col-xs-6">
                                                <span class="wpcf7-form-control-wrap title">
                                                <div class="form-material form-material-primary" style="margin-top: 26px;">
                                                    <select class="form-control wpcf7-form-control wpcf7-select" name="title" size="1" aria-invalid="false">
                                                        <option value="">---</option>
                                                        <option value="Master">Master</option>
                                                        <option value="Mr">Mr</option>
                                                        <option value="Mister">Mister</option>
                                                        <option value="Miss">Miss</option>
                                                        <option value="Ms">Ms</option>
                                                        <option value="Mrs">Mrs</option>
                                                        <option value="Mx">Mx</option>
                                                    </select>
                                                    <label for="title" style="top:-9px">Title</label>
                                                </div>

                                            </span>
                                            </div>
                                        </div>



                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <span class="wpcf7-form-control-wrap institution">
                                                <div class="form-material form-material-primary">
                                                    <input class="form-control wpcf7-form-control wpcf7-text wpcf7-validates-as-required" type="text" name="institution" placeholder="Enter your insitution.." aria-required="true" aria-invalid="false">
                                                    <label class="requiredlabel" for="institution">Institution</label>
                                                </div>
                                            </span>
                                            </div>


                                            <div class="col-xs-6">
                                                <span class="wpcf7-form-control-wrap MessageFrom">
                                                <div class="form-material form-material-primary" style="margin-top: 26px;">
                                                    <select class="form-control wpcf7-form-control wpcf7-select" name="MessageFrom" size="1" aria-invalid="false" id="imselect" onchange="showOther(this);">
                                                        <option value="">---</option>
                                                        <option value="A Degree seeker">A Degree seeker</option>
                                                        <option value="A Graduate Institution">A Graduate Institution</option>
                                                        <option value="An investor">An investor</option>
                                                        <option value="Other">Other</option>
                                                    </select>
                                                    <label for="MessageFrom" style="top:-9px">I am ...</label>
                                                </div>
                                            </span>
                                            </div>
                                        </div>


                                        <div class="form-group" id="other-text" style="display:none;">
                                            <div class="col-xs-12">
                                                <span class="wpcf7-form-control-wrap other">
                                                <div class="form-material form-material-primary">
                                                    <input class="form-control wpcf7-form-control wpcf7-text" type="text" name="other" placeholder="Tell us who you are.." aria-invalid="false">
                                                    <label for="other">I am ...</label>
                                                    
                                                </div>
                                            </span>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-xs-12">

                                                <span class="wpcf7-form-control-wrap email">
                                                <div class="form-material form-material-primary">
                                                    <input class="form-control wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" type="email" name="email" placeholder="Enter your email.." aria-required="true" aria-invalid="false">
                                                    <label class="requiredlabel" for="email">Email</label>
                                                    
                                                </div>
                                            </span>

                                            </div>
                                        </div>


                                        <div class="form-group">

                                            <div class="col-xs-12">
                                                <span class="wpcf7-form-control-wrap message">
                                                <div class="form-material form-material-primary">
                                                    <textarea class="form-control wpcf7-form-control wpcf7-textarea wpcf7-validates-as-required" name="message" rows="4" placeholder="Enter your message.." aria-required="true" aria-invalid="false" style=""></textarea>
                                                    <label class="requiredlabel" for="message">Message</label>
                                                </div>
                                            </span>
                                                
                                            </div>
                                        </div>

                                        <div class="wpcf7-response-output wpcf7-display-none" role="alert"></div>

                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-sm wpcf7-form-control btn-info wpcf7-submit" type="submit" value="Send" style="background-color:rgba(52,152,219,1);"><i class="fa fa-send push-5-r"></i> Send Message</button>

                                                <!-- <img class="ajax-loader" src="http://www.gridet.com/wp-content/plugins/contact-form-7/images/ajax-loader.gif" alt="Sending ..." style="visibility: hidden;" data-pin-nopin="true"> -->
                                            </div>
                                        </div>
                                        
                                        <!-- <div class="wpcf7-response-output wpcf7-display-none wpcf7-mail-sent-ok" style="display: none;" role="alert">Thank you for your message. It has been sent.</div> -->


</form>

</div>

                                    <!-- <form class="form-horizontal push-10-t push-10" action="base_forms_premade.html" method="post" onsubmit="return false;">
                                        <div class="form-group">
                                            <div class="col-xs-6">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" id="contact2-firstname" name="contact2-firstname" placeholder="Enter your firstname..">
                                                    <label for="contact2-firstname">Firstname</label>
                                                </div>
                                            </div>
                                            <div class="col-xs-6">
                                                <div class="form-material">
                                                    <input class="form-control" type="text" id="contact2-lastname" name="contact2-lastname" placeholder="Enter your lastname..">
                                                    <label for="contact2-lastname">Lastname</label>
                                                </div>
                                            </div>
                                        </div>


                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-material input-group">
                                                    <input class="form-control" type="email" id="contact2-email" name="contact2-email" placeholder="Enter your email..">
                                                    <label for="contact2-email">Email</label>
                                                    <span class="input-group-addon"><i class="fa fa-envelope-o"></i></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-material">
                                                    <select class="form-control" id="contact2-subject" name="contact2-subject" size="1">
                                                        <option value="1">Support</option>
                                                        <option value="2">Billing</option>
                                                        <option value="3">Management</option>
                                                        <option value="4">Feature Request</option>
                                                    </select>
                                                    <label for="contact2-subject">Where?</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <div class="form-material">
                                                    <textarea class="form-control" id="contact2-msg" name="contact2-msg" rows="7" placeholder="Enter your message.."></textarea>
                                                    <label for="contact2-msg">Message</label>
                                                </div>
                                                <div class="help-block text-right">Feel free to use common tags: &lt;blockquote&gt;, &lt;strong&gt;, &lt;em&gt;</div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="col-xs-12">
                                                <button class="btn btn-sm btn-info" type="submit"><i class="fa fa-send push-5-r"></i> Send Message</button>
                                            </div>
                                        </div>
                                    </form>

 -->




                                </div>
                            </div>
                                  
                                </div>

                            </div>
                            <!-- row -->


                                </div>
                            </div>
                        </div>
                    </section>
                    </div>
                </div>
        
        <script>
            function showOther(sel) {
                //alert(sel.value);
                if(sel.value == "Other"){
                    //alert("YES equal");
                    jQuery("#other-text").slideDown("slow");
                } else {
                    jQuery("#other-text").slideUp("slow");
                }
                
              // alert(sel.value);
            }

            @import url('https://fonts.googleapis.com/css?family=Courgette');

        </script>