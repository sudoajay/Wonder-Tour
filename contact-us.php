<?php
$title = 'Contact Us';
include('include/header.php') 
?> 
            <!-- RD Navbar-->
            <header>
            <?php
include('include/navbar.php') 
?>
        </header>
        <!-- RD Google Map-->
        <section class="section section-fluid">
            <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Haridwar, India&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://www.kokagames.com/fnf-friday-night-funkin-mods/">FNF</a></div><style>.mapouter{position:relative;text-align:right;width:100%s;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {width:100%!important;height:400px!important;}</style></div>
        </section>

        <!-- Contact information-->
        <section class="section section-sm section-first bg-default">
            <div class="container">
                <div class="row row-30 justify-content-center">
                    <div class="col-sm-8 col-md-6 col-lg-4">
                        <article class="box-contacts">
                            <div class="box-contacts-body">
                                <div class="box-contacts-icon fl-bigmug-line-cellphone55"></div>
                                <div class="box-contacts-decor"></div>
                                <p class="box-contacts-link">+91 8954385910</p>
                                <p class="box-contacts-link">+91 7409722666</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4">
                        <article class="box-contacts">
                            <div class="box-contacts-body">
                                <div class="box-contacts-icon fl-bigmug-line-up104"></div>
                                <div class="box-contacts-decor"></div>
                                <p class="box-contacts-link">Railway Rd, near chitra cinema, Sharvan Nath Nagar, Haridwar, Uttarakhand 249401</p>
                            </div>
                        </article>
                    </div>
                    <div class="col-sm-8 col-md-6 col-lg-4">
                        <article class="box-contacts">
                            <div class="box-contacts-body">
                                <div class="box-contacts-icon fl-bigmug-line-chat55"></div>
                                <div class="box-contacts-decor"></div>
                                <p class="box-contacts-link">mail@wondertour.com</p>
                                <p class="box-contacts-link">info@wondertour.com</p>
                            </div>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <!-- Contact Form-->
        <section class="section section-sm section-last bg-default text-left">
            <div class="container">
                <article class="title-classic">
                    <div class="title-classic-title">
                        <h3>Get in touch</h3>
                    </div>
                    <div class="title-classic-text">
                        <p>If you have any questions, just fill in the contact form, and we will answer you shortly.</p>
                    </div>
                </article>
                <?php
if(isset($_POST["sbmt"]))
{?>
	$cn=makeconnection();
	$s="insert into contactus(Name,Email,Phone,Message) values('" . $_POST["name"] ."','" . $_POST["email"] ."','" . $_POST["phone"] ."','" . $_POST["message"] ."')";
	mysqli_query($cn,$s);
	mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
<?php } ?>
                <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                    <div class="row row-14 gutters-14">
                        <div class="col-md-4">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                                <label class="form-label" for="contact-your-name-2">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                                <label class="form-label" for="contact-email-2">E-mail</label>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="form-wrap">
                                <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                                <label class="form-label" for="contact-phone-2">Phone</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-wrap">
                                <label class="form-label" for="contact-message-2">Message</label>
                                <textarea class="form-input textarea-lg" id="contact-message-2" name="message" data-constraints="@Required"></textarea>
                            </div>
                        </div>
                    </div>
                    <button class="button button-primary button-pipaluk" type="submit" name="sbmt">Send Message</button>
                </form>
            </div>
        </section>

        <!-- Page Footer-->
        
        <?php
include('include/footer.php') 
?>