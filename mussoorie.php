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
                    <h2 class="breadcrumbs-custom-title">Mussoorie</h2>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>

                        <li class="active">Mussoorie Tour</li>
                    </ul>
                </div>
                <div class="box-position" style="background-image: url(images/6.Mussoorie.jpg);"></div>
            </div>
        </section>
        <!-- content section -->
        <section class="section section-sm bg-default text-left">
            <div class="container">
                <h3>
                    <center>Mussoorie</center>
                </h3>

                <section class="section section-sm section-first bg-default text-left">
                    <div class="container">
                        <div class="row row-40 flex-lg-row-reverse justify-content-xl-between">


                            <ul class="list-xl box-typography">
                                <li>
                                    <h4> Duration : 3 Nights/4 Days</h4>
                                </li><br><br>
                                <li>
                                    <h4>Day 1- Delhi- Dehradun</h4><br>
                                    <p>Today drive to Dehradun, On arrival.check in to your pre – booked hotel.Later go out for sightseeing tour of Dehradun. Dehradun is the capital of State Uttarakhand, situated on the north – west corner of the state and
                                        nestled in the mountain ranges of Himalayas.Dehradun has always been an important place for the Indians as well as for the Britishers when it was ruled by them.This is a significant place in terms of having the
                                        premier educational and Training Institutes like Indian Miltary Academy, RIMC(Rashtriya Indian Military College), Indira Gandhi National Forest Academy(IGNFA), Lal Bahadur Shahstri National Academy of Administration
                                        (LBSNAA )etc It has also The headquarters of many National Institutes and Organizations like ONGC, Survey Of India, Forest Research Institute, Indian Institute of Petroleum etc are located in the city.After sightseeing
                                        go back to the Hotel.Overnight at Hotel.</p>
                                </li><br><br>
                                <li>
                                    <h4>Day 2- Dehradun—Mussoorie</h4><br>
                                    <p>After breakfast drive towards mussoorie.On arrival check in to your pre – booked hotel.Later go out for sightseeing of Mussoorie.Popularlly known as the “Queen of Hills” a beatifull hill station is just 35 kms upwards
                                        from Dehradun and at an altitude of 2500 mts above see level. Must see places here are Lal Tibba, Gun Hill, Municipal Garden, Kempty fall.
                                    </p>
                                </li><br><br>
                                <li>
                                    <h4>Day 3- Mussoorie – Dhanaulti</h4><br>
                                    <p>After breakfast drive towards Dhanaulti.which is 25 kms away from Mussoorie on Mussoorie – Chamba Road.On arrival check in to your pre – booked hotel.Later sightseeing tour of Dhanaulti.</p><br><br>
                                    <p>Dhanaulti is situated at an altitude of 2286 mts above sea level. Dhanaulti is the launching point for numerous treks into the snow – capped Himalayas.</p>
                                </li><br><br>
                                <li>
                                    <h4>Day 4- Dhanulti – Dehradun – Delhi </h4><br>
                                    <p>Later back to hotel in Dehradun. Overnight at Hotel. In morning, after breakfast check out from hotel and drive to Delhi for onward destination.

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
                <form class="rd-form rd-form-variant-2 rd-mailform" id="conactForm" data-form-output="form-output-global" data-form-type="contact" method="post">
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
                        <input class="form-input" id="contact-message-2" type="Number" name="numberofperson" data-constraints="@Numeric">
                    </div>
                </div>
            </div>
            <button class="button button-primary button-pipaluk" id="contact-button-2" onclick="addBookingTableToDataBase()" type="button" name="sbmt">Book Mussoorie Tour </button>
        </form>
            </div>
        </section>
        <!-- Page Footer-->
        <?php
include('include/footer.php') 
?>