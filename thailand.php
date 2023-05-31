<?php
$title = 'Thailand Tour';
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
                    <h2 class="breadcrumbs-custom-title">Thailand</h2>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">International Tour</li>
                        <li class="active">Thailand Tour</li>
                    </ul>
                </div>
                <div class="box-position" style="background-image: url(images/international/thailandguide.jpg);"></div>
            </div>
        </section>
        <!-- content section -->
        <section class="section section-sm bg-default text-left">
            <div class="container">
                <h3>
                    <center>Thailand </center>
                </h3>
                <p class="text-block">
                    <mark> Thailand</mark> is one of the most visited nations on the planet. Thailand is a fabulous, diverse country that is famous for many things. From white sandy beaches and terrific hotels to historic temples.There’s a reason why
                    Thailand is such a popular vacation destination. It’s exotic and affordable and it’s no wonder why so many people prefer to go on a Thailand Trip whenever they get a vacation. The good news is that with Wonder’s Thailand Holiday Pacakages,
                    you’ll get a lot more than you bargained for. Don’t believe us? Just check the packages and you’ll be pleasantly surprised at the variety that’s on offer, both in terms of budget and duration of stay among the many Thailand Tour Packages.
                    From 5 nights 6 days to as long as 10 nights 11 days, there’s the perfect Thailand Tour just for you on the Wonder Tour's website. Even budget-wise there’s a lot of flexibility with rates starting as low as INR 30 000.00 to the more
                    expensive holidays that go up to INR 150 020.00 which is still quite reasonable. </p>
                <section class="section section-sm section-first bg-default text-left">
                    <div class="container">
                        <div class="row row-40 flex-lg-row-reverse justify-content-xl-between">


                            <ul class="list-xl box-typography">
                                <li>
                                    <h4> Duration : 5Nights/6 Days</h4>
                                </li>
                                <li>
                                    <h4>Day 1- Arrival in Bangkok (Pattaya)</h4><br>
                                    <p>Upon your arrival in Bangkok, you will be given a warm reception and will be transferred to Pattaya, which is a short 2 hour drive from Bangkok. After check in at hotel, spend the afternoon at leisure. Evening you can
                                        proceed to mesmerizing Alcazar Show a world-famous cabaret, which can give the Lido and Moulin Rouge of Paris a run for their money. Featuring a grand theatre with 1200 seats and thousands of watts of pulsating
                                        sound, the Alcazar Show is a unique blend of acting, stage design, costumes and glamorous actors performing together in an unforgettable melange of light, sound and color. Truly, a visit to the Alcazar Show could
                                        well become the highlight of your far-eastern journey. You’ll spend the night at your hotel.</p>
                                </li>
                                <li>
                                    <h4>Day 2 -Pattaya</h4><br>
                                    <p>Enjoy breakfast and then speedboat your way into the sparkling blue waters of the Gulf of Thailand to reach the serene Coral Island, known as Koh Lan. Enjoy sunning by the sea; go for a swim; snorkel in its crystal
                                        waters; There are plenty of activities ( Parasailing, Water scooter,Banana boat ride, Snorkeling etc) waiting for you. . Stay overnight at the hotel.
                                    </p>
                                </li>
                                <li>
                                    <h4>Day 3- Pattaya Day Sight Seeing</h4><br>
                                    <p>After breakfast, enjoy your journey to the famous Nong nooch garden in Pattaya. Nong Nooch is world renowned for its impressive Elephant and Thai Cultural Shows, along with what is largely considered the biggest and
                                        most beautiful botanical garden in Southeast Asia.Fascinating Thai Culture and traditional dances are presented daily in the theater within the garden compound. Along with the traditional shows, visitors will have
                                        an opportunity to see other performances such as religious ceremonies, martial arts and The Amazing Elephant Show – one of the most popular attractions here. The shows are presented up to 4 times daily. Witness
                                        a demonstration of an elephants intellect playing football, basketball, bowling dancing and even playing with tourists!!! We promise you will be so amazed with the show – you will not want it to end.</p>
                                </li>
                                <li>
                                    <h4>Day 4- Bangkok (Day free for Leisure)</h4><br>
                                    <p>Have a fill at morning breakfast and set out to explore the wonderful city at your own. Visit to Bangkok remains incomplete if you don’t shop! Explore the markets and grab great deals at the local markets or world-class
                                        malls for absolutely everything you buy right from trendy clothes and accessories to designer goods and electronic gadgets. If shopping is not that you are looking for, opt for any sightseeing tour that suits your
                                        interest. Relish local cuisines and this being your last night of the trip, you may as well explore the famous city nightlife. Return to the hotel afterwards. Stay overnight at hotel in Bangkok.

                                    </p>
                                </li>
                                <li>
                                    <h4>Day 5- Bangkok</h4><br>
                                    <p>After the breakfast, you’ll go on a cultural excursion visiting ancient temples and attractions of the city. Over 26,000 Wats (temples) encapsulate Bangkok’s spiritual heritage. Wat Trimitr (Temple of the Golden Buddha),
                                        home to a 5.5 ton statue of Buddha made from solid gold is a fine example of Sukhothai art. Wat Po (Temple of the Reclining Buddha) is the largest and oldest shrine of its kind in Bangkok. Stay overnight at the
                                        hotel.
                                    </p>
                                </li>
                                <li>
                                    <h4>Day 6- Departure Back to Home</h4><br>
                                    <p>After enjoying breakfast at the hotel, spend the day at leisure. Check-out of the hotel in the afternoon. In the evening, proceed to the airport in time to board your flight back home.</p>
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
                    <button class="button button-primary button-pipaluk" type="submit" name="sbmt">Book Thailand Tour </button>
                </form>
            </div>
        </section>
        <!-- Page Footer-->
        <?php
include('include/footer.php') 
?>