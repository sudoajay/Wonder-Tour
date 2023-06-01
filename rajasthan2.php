<?php
$title = 'Rajasthan Tour';
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
                    <h2 class="breadcrumbs-custom-title">Rajasthan</h2>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>

                        <li class="active">Rajasthan Tour</li>
                    </ul>
                </div>
                <div class="box-position" style="background-image: url(images/traveldestinations/24.png);"></div>
            </div>
        </section>
        <!-- content section -->
        <section class="section section-sm bg-default text-left">
            <div class="container">
                <h3>
                    <center>Rajasthan</center>
                </h3>
                <p class="text-block">
                    The Indian state of Rajasthan tells a tale of its rich culture and history through its ancient forts and palaces. A visit to this land of royal riches opens up your eyes to the colorful traditions of India that are alive even to this day and have added
                    to the undying charm of our country. Embark upon this wonderful 8-day Glimpse of Rajasthan Tour and explore some of the most prominent attractions of Jaipur, Udaipur, Jaisalmer, Bikaner and Jodhpur such as the Amber Fort, Hawa Mahal,
                    Junagarh Fort, Nathmal ki Haveli, Lake Pichola, Jantar Mantar and much more! So book this package today and get ready for a memorable holiday in Rajasthan.</p><br><br>

            </div>

            <section class="section section-sm section-first bg-default text-left">
                <div class="container">
                    <div class="row row-40 flex-lg-row-reverse justify-content-xl-between">


                        <ul class="list-xl box-typography">
                            <li>
                                <h4> Duration : 3 Nights/4 Days</h4>
                            </li><br><br>
                            <li>
                                <h4>Day 1- Delhi – Agra</h4><br>
                                <p>Have a good breakfast, check out from your hotel and travel to the city of Agra. En-route, visit Sikandara – the mausoleum of Emperor Akbar and a prominent architectural masterpiece of the Mughal style. Thereafter, proceed
                                    to the grand Taj Mahal (a UNESCO World Heritage Centre) – a gorgeous white-marble mausoleum built by the Mughal Emperor Shah Jahan, for his beloved Queen Mumtaz. Furthermore, visit the famous Agra Fort that stands as
                                    an architectural wonder, comprising royal palaces, halls and beautiful gardens. Then return to your hotel for the night.</p>
                            </li><br><br>
                            <li>
                                <h4>Day 2- Agra – Jaipur </h4><br>
                                <p>Have a delicious breakfast, check out from the hotel and take transfer to the Pink City of Jaipur . En-route, visit Fatehpur Sikri, a UNESCO World Heritage Centre built by Emperor Akbar. On arrival in Jaipur, check in at
                                    your hotel and spend the rest of the day at leisure, when you can opt to visit Buland Darwaza, Panch Mahal and Sheesh Mahal or take up activities like elephant rides and temple tours (leisure activities are not included
                                    in the package). Then stay overnight in Jaipur.</p>
                            </li><br><br>
                            <li>
                                <h4>Day 3 – The Best of Jaipur</h4><br>
                                <p>After breakfast, you will go on a wonderful city tour of Jaipur covering the Hawa Mahal, City Palace, Jantar Mantar, Jal Mahal, Amer Fort and Birla Temple. Witness the splendid architectural styles of Hawa Mahal and City
                                    Palace that will take you down the lanes of history and leave everlasting memories in your soul. While the City Palace is a complex of forts and palaces, Hawa Mahal is a structure that was built to facilitate the household
                                    women to watch the processions from the windows. Behold the beautiful Jal Mahal built at the centre of Man Sagar Lake, before heading to the astronomical site – the Jantar Mantar. Birla Temple and Amer Fort are also
                                    must-visit attractions in the city of Jaipur. Then return to the hotel by evening and have a pleasant sleep.</p><br><br>

                            </li><br><br>

                            <li>
                                <h4>Day 4- Jaipur to Delhi Departure </h4><br>
                                <p>After breakfast, check out from the hotel and take transfer back to New Delhi. Arrive in Delhi by evening and be dropped at Delhi airport or railway station for your onward journey.

                                </p>
                            </li><br><br>


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
            <button class="button button-primary button-pipaluk" id="contact-button-2" onclick="addBookingTableToDataBase()" type="button" name="sbmt">Book Rajasthan Tour </button>
        </form>
        </div>
    </section>
    <!-- Page Footer-->
    <?php
include('include/footer.php') 
?>