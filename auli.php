<?php
$title = 'Uttarakhand Tour';
include('include/header.php') 
?> 
            <!-- RD Navbar-->
            <header>
            <?php
include('include/navbar.php') 
?>
        </header>
        <!-- Breadcrumbs -->
        <section class="breadcrumbs-custom-inset">
            <div class="breadcrumbs-custom context-dark bg-overlay-60">
                <div class="container">
                    <h2 class="breadcrumbs-custom-title">Auli</h2>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>

                        <li class="active">Auli Tour</li>
                    </ul>
                </div>
                <div class="box-position" style="background-image: url(images/traveldestinations/Skiing\,\ Auli_1.jpg);"></div>
            </div>
        </section>
        <!-- content section -->
        <section class="section section-sm bg-default text-left">
            <div class="container">
                <h3>
                    <center>Auli</center>
                </h3>
                <p class="text-block">
                    Auli is located in the Garhwal region of Uttarakhand state in India. It has rightly derived its name Auli – meaning meadows, from the characteristics of its topography. The hill station is located on slopes and has far stretching meadows that look stunning
                    to the eyes. Auli is fondly referred to as a place where nature comes alive in all its glory and splendour. It is rich in natural resources and offers a stunning landscape of the surrounding hills.</p><br><br>
                <p class="text block">The hill station has a plethora of wildflowers and trees like deodars, oaks, coniferous and pine forests. The slopes here that are as high as 9000 feet above sea level offer stunning views of the surrounding Himalayan peaks; like that
                    of Nanda Devi, Kamet, Dunagiri and Mana Parvat. There are a number of attractions here at the hill station. The most famous one amongst tourists is the ropeway.</p><br><br>
                <p class="text block">It is the highest and the longest one not just in India but the whole of Asia and it offers magnificent views of the Himalayan peaks. Auli’s artificial lake is another attraction which is one of the world’s highest man-made lakes. Similarly,
                    Chattrakund and Chenab lake are also two other lakes worth visiting in Auli. Auli is also known as the skiing capital of India which explains how well the activity can truly be enjoyed here.</p><br><br>
                <p class="text block">The winter months offer this thrilling experience and invite enthusiasts from across the globe. Other activities in Auli include trekking to nearby hills like Guarso and Kwani Bugyal. There is also a great scope for camping in and around
                    Auli. The cherry on top is the weather in Auli. The hill station being located on a slope is high in altitude but is also surrounded by dense vegetation of deodars and oaks. This controls the pace of the wind blowing here and thus,
                    giving Auli a pleasant environment.</p>
            </div>

            <section class="section section-sm section-first bg-default text-left">
                <div class="container">
                    <div class="row row-40 flex-lg-row-reverse justify-content-xl-between">


                        <ul class="list-xl box-typography">
                            <li>
                                <h4> Duration : 3 Nights/4 Days</h4>
                            </li><br><br>
                            <li>
                                <h4>Day 1- Haridwar – Joshimath</h4><br>
                                <p>On arrival haridwar get on the road and start driving to Joshimath. On the way, halt at Devprayag (one of the Panch Prayag of River Alaknanda where it meets with River Bhagirathi), Rudraprayag (the meeting point of River
                                    Alaknanda and River Mandakini) and Karnprayag (the confluence of Rivers Alaknanda and Pindar). As you reach Joshimath, check in at the hotel Hotel. If time and energy permits, you can explore the surroundings. The gateway
                                    to Badrinath and , Joshimath receives a huge number of Sikh and Hindu between May and October. It is also the base for a number of popular treks such as Kuari Pass Trek and Valley of Flower trek. Overnight stay.</p>
                            </li><br><br>
                            <li>
                                <h4>Day 2- Joshimath- Auli local sightseen – Joshimath</h4><br>
                                <p>After breakfast, start your drive to Auli. Lying between the altitude range of 2500 m to 2050 m, Auli is one of premier Skiing point in India. You can take the cable car ride to reach Auli from Joshimath. The longest cable
                                    car ride in Asia. On the way, treat your eyes to the mesmerizing views of the surroundings.
                                </p><br><br>
                                <p>You can visit Gurso Bugyal, a picturesque location from where you get to enjoy magnificent views of Trishul Peak, Dron Parvat and Nanda Devi adding on to its beauty is the green surrounding that makes it look more enthralling.
                                    Within close vicinity, lies Chattrakund, a pristine lake that is known for its crystal clear blue waters. It is also an ideal picnic spot for those who love nature and its silence. Another important attraction you may
                                    visit in Auli is Auli Artificial Lake which is one of the highest man-made lakes in the World. Surrounded by mighty peaks of Himalayas, the lake was developed by government to produce artificial snow. Overnight stay
                                    in joshimath.</p>
                            </li><br><br>
                            <li>
                                <h4>Day 3- Joshimath local sightseen</h4><br>
                                <p>After breakfast full day sightseen of joshimath. Places to visit- Aadi shankaracharya math & cave , Narsingh temple , Tapovan hot water spring, etc Later return back to the resort and overnight stay.</p><br><br>

                            </li><br><br>
                            <li>
                                <h4>Day 4- Joshimath – Haridwar </h4><br>
                                <p>After breakfast check out from the hotel and drive to Haridwar and drop.

                                </p>
                            </li>

                        </ul>
                    </div>
                </div>

            </section>

    </div>
    </section>
    <section class="section section-sm section-last bg-default text-left">
        <div class="container">
            <article class="title-classic">

                <div class="title-classic-text">
                    <p>
                        <h3> Book your Tour now</h3>
                    </p>
                </div>
            </article>
            <?php
if(isset($_POST["sbmt"]))
{ ?>
	$cn=makeconnection();
	$s="insert into booking(Name,Email,Phone,Noofperson) values('" . $_POST["name"] ."','" . $_POST["email"] ."','" . $_POST["phone"] ."','" . $_POST["numberofperson"] ."')";	
	
	
		mysqli_query($cn,$s);
        mysqli_close($cn);
	echo "<script>alert('Record Save');</script>";
<?php }
?>
            <form class="rd-form rd-form-variant-2 rd-mailform" data-form-output="form-output-global" data-form-type="contact" method="post" action="bat/rd-mailform.php">
                <div class="row row-14 gutters-14">
                    <div class="col-12">
                        <div class="form-wrap">
                            <input class="form-input" id="contact-your-name-2" type="text" name="name" data-constraints="@Required">
                            <label class="form-label" for="contact-your-name-2">Your Name</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap">
                            <input class="form-input" id="contact-email-2" type="email" name="email" data-constraints="@Email @Required">
                            <label class="form-label" for="contact-email-2">E-mail</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap">
                            <input class="form-input" id="contact-phone-2" type="text" name="phone" data-constraints="@Numeric">
                            <label class="form-label" for="contact-phone-2">Phone</label>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="form-wrap">
                            <label class="form-label" for="contact-message-2">Number of persons</label>
                            <input class="form-input" id="contact-message-2" type="Number" name="numberofperson" data-constraints="@Required">
                        </div>
                    </div>
                </div>
                <button class="button button-primary button-pipaluk" type="submit" name="sbmt">Book Auli Tour </button>
            </form>
        </div>
    </section>
    <!-- Page Footer-->
    <?php
include('include/footer.php') 
?>