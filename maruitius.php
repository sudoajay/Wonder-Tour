<?php
$title = 'Maruitius Island Tour';
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
                    <h2 class="breadcrumbs-custom-title">Maruitius Island</h2>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>

                        <li class="active">Maruitius Island Tour</li>
                    </ul>
                </div>
                <div class="box-position" style="background-image: url(images/270/maruitius.1.jpg);"></div>
            </div>
        </section>
        <!-- content section -->
        <section class="section section-sm bg-default text-left">
            <div class="container">
                <h3>
                    <center>Maruitius Island,Africa</center>
                </h3>
                <p class="text-block">
                    The beautiful and inviting island nation of Mauritius is an ideal ‘flop and drop’ at the conclusion of your safari. Indulge in the delightful scents of the fragrant.</p><br><br>
                <p class="text-block">
                   
                </p><br><br>


            </div>

            <section class="section section-sm section-first bg-default text-left">
                <div class="container">
                    <div class="row row-40 flex-lg-row-reverse justify-content-xl-between">


                        <ul class="list-xl box-typography">
                            <li>
                                <h4> Duration : 5 Nights/6 Days</h4>
                            </li><br><br>
                            <li>
                                <h4>Day 1- Arrival in Mauritius: </h4><br>
                                <p>Begin your Mauritius itinerary with a relaxed day in the peaceful Mauritian environment. On landing at the Mauritius International Airport, you will be received by our local representative who will assist you with the transfer
                                    to the resort. The rest of the day would be free for you to explore the serene surroundings of the property and to get to know the idyllic beaches of Mauritius
                                </p>
                            </li><br><br>
                            <li>
                                <h4>Day 2- Mauritius (Scenic South):</h4><br>
                                <p>After Breakfast, leave hotel and drive to Floreal, Visit the Model Ship Factory and Trou Aux Cerfs the Volcanic Crater (Viewpoint) and Curepipe - the scenic residential town. Proceed for Grand Bassin- Sacred Lake and Shiva
                                    Temple. Drive through Plaine Champagne and visit The 23-coloured Nature Park which dates back to millions of years following the eruption of the Bassin Blanc volcano - its ashes, which bear witness to that event, are
                                    unique in the world. Back to hotel by 17h00.
                                </p>
                            </li><br><br>
                            <li>
                                <h4>Day 3- Mauritius (Ile Aux Cerf Island):</h4><br>
                                <p>After breakfast, Drive to the east coast to enjoy optional (water sport activities as parasailing, undersea walk, and waterfall visit with trip around Ile Aux Cerf Island at additional cost). Enjoy complimentary Tube Ride
                                    thrill. Afterwards as from 12.00 pm transfer by speed boat to Ile aux Cerfs. The island with the most beautiful beach and the clearest turquoise water. Return back to mainland by speedboat. Overnight at hotel in Mauritius
                                    *Carry beach towel which you can collect from the hotel (On returnable Basis) Also carry changing clothes, Swimwear, Sunscreen, Cap / Please do not carry Your passport and any other valuable Items
                                </p><br><br>

                            </li><br><br>
                            <li>
                                <h4>Day 4- Mauritius (North Tour):</h4><br>
                                <p>After breakfast, Drive to Port Louis for a visit of the capital via the Citadel (View Point) and its surrounding area and stop for a visit at Marie Reine De Paix (View Point). View the Champ de Mars race course, inaugurated
                                    in 1812; it is the oldest horse-racing club in the Southern Hemisphere, and one of the oldest in the world. Afterwards proceed to Le Caudan Waterfront, with some 170 shops. Stop at Jumbo shopping mall on the way back
                                    to hotel. (1 hour stop only). Back to hotel by 16h00.
                                </p>
                            </li><br><br>
                            <li>
                                <h4>Day 5- Departure From Mauritius:</h4><br>
                                <p>Wake up to a gourmet breakfast and without letting your departure dampen your spirits, prepare for your flight back home. Post check-out enjoy the last moments of your Mauritius package at the ocean side or the Resort's
                                    restaurant before getting picked up for the transfer to the airport for your homebound flight.</p>


                                </p><br><br>
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
                        <h3>
                            Book your Tour now
                        </h3>
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
            <button class="button button-primary button-pipaluk" id="contact-button-2" onclick="addBookingTableToDataBase()" type="button" name="sbmt">Book Maruitius Tour </button>
        </form>
        </div>
    </section>
    <!-- Page Footer-->
    <?php
include('include/footer.php') 
?>