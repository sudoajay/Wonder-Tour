<?php
$title = 'Uttar Pradesh Tour';
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
                    <h2 class="breadcrumbs-custom-title">Varanasi</h2>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>

                        <li class="active">Varanasi Tour</li>
                    </ul>
                </div>
                <div class="box-position" style="background-image: url(images/270/Varanasi-Gallery.jpg);"></div>
            </div>
        </section>
        <!-- content section -->
        <section class="section section-sm bg-default text-left">
            <div class="container">
                <h3>
                    <center>Varanasi</center>
                </h3>
                <p class="text-block">
                    Varanasi, or Benaras, (also known as Kashi) is one of the oldest living cities in the world. Varanasi`s Prominence in Hindu mythology is virtually unrevealed. Mark Twain, the English author and literature, who was enthralled by the legend and sanctity
                    of Benaras, once wrote : “Benaras is older than history, older than tradition, older even than legend and looks twice as old as all of them put together. ”</p><br><br>
                <p class="text-block">
                    The land of Varanasi (Kashi) has been the ultimate pilgrimage spot for Hindus for ages. Hindus believe that one who is graced to die on the land of Varanasi would attain salvation and freedom from the cycle of birth and re-birth. Abode of Lord Shiva and
                    Parvati, the origins of Varanasi are yet unknown. Ganges in Varanasi is believed to have the power to wash away the sins of mortals.</p><br><br>


            </div>

            <section class="section section-sm section-first bg-default text-left">
                <div class="container">
                    <div class="row row-40 flex-lg-row-reverse justify-content-xl-between">


                        <ul class="list-xl box-typography">
                            <li>
                                <h4> Duration : 5 Nights/6 Days</h4>
                            </li><br><br>
                            <li>
                                <h4>Day 1- Arrival at Varanasi </h4><br>
                                <p>Afternoon arrival at Varanasi airport, transfer to hotel. Check later in evening transfer to Ganges for Boating and evening Ganga Aarti on famous Dashashwamedh Ghat (Dashashwamedh Ghat is the main ghat in Varanasi on the
                                    Ganga River. It is located close to Vishwanath temple and is probably the most spectacular ghat. Two Hindu Ganga River. It is located close to Vishwanath temple and is probably the most spectacular ghat. Two Hindu legends
                                    are associated with it. According to one, Lord Brahma created it to welcome Lord Shiva. According to another legend, lord Brahma sacrificed ten horses during Dasa - Ashwamedha yajna performed here). overnight in Varanasi.
                                </p>
                            </li><br><br>
                            <li>
                                <h4>Day 2- Varanasi - Allahabad</h4><br>
                                <p>After early breakfast day trip to Allahabad. (The city's original name - Prayag, or "place of offerings" - comes from its position at the Sangam (confluence) of the Ganga, Yamuna and Sarasvati rivers. It is the second-oldest
                                    city in India, and plays a central role in Hindu scriptures. Allahabad was originally called Kaushambi (now a separate India, and plays a central role in Hindu scriptures. Allahabad was originally called Kaushambi (now
                                    a separate district) by the Kuru rulers of Hastinapur, who developed it as their capital. Since then, Allahabad has been a political, cultural and administrative centre of the Doab region. Mughal emperor Akbar renamed
                                    it Ilahabad, which the British changed to Allahabad. In 1833 it became the seat of the Ceded and Conquered Provinces region before its capital was moved to Agra in 1835. Allahabad became the capital of the North-Western
                                    Provinces in 1858, and was the capital of India for a day. The city was the capital of the United Provinces from 1902 to 1920 and remained at the forefront of national importance during the struggle for Indian independence.)
                                </p>
                            </li><br><br>
                            <li>
                                <h4>Day 3- Varanasi </h4><br>
                                <p>Early morning Temple darshan (Kashi Vishwanath, Annapurna Mandir, Kala Bhairov Mandir) followed with Sankat Mochan Mandir, Durga Mandir, Tulsi Manas Mandir and Benaras Hindu University (BHU). After breakfast move for Sarnath
                                    (Sarnath is the place where Gautam Buddha after attain enlightenment delivers his first sermon to 5 followers). Sightseeing of Sarnath including Sarnath Museum (Our National Emblem excavated from Sarnath is on Display
                                    built by Samrat Ashoka), Ancient ruins, Mahabodhi society Temple. Evening is free. Overnight in Varanasi.</p><br><br>

                            </li><br><br>
                            <li>
                                <h4>Day 4- Varanasi - Bodhgaya </h4><br>
                                <p>After breakfast checkout from hotel and transfer to Bodhgaya (It is famous as it is the place where Gautama Buddha is said to have obtained Enlightenment (Pali: bodhi) under what became known as the Bodhi Tree). On reaching
                                    before check in visit Mahabodhi Temple. Return hotel check in and overnight stay in Bodhgaya. Places of Interest: Mahabodhi Temple, Buddhist Temples, Vishnu Pad Temple, Sita Kund.

                                </p>
                            </li><br><br>
                            <li>
                                <h4>Day 5- Bodhgaya - Varanasi </h4><br>
                                <p>Early morning visit Vishnupad Temple for Pind DAAN, Akshayavat. Afternoon checkout from hotel and transfer to Varanasi. Overnight in Varanasi.

                                </p><br><br>
                            </li>
                            <li>
                                <h4>Day 6- Varanasi - Depart</h4><br>
                                <p>After breakfast, checkout from hotel and drop at Varanasi airport for onward/return journey. (Vehicle Is Available Only For Aiport Drop)

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
                <button class="button button-primary button-pipaluk" type="submit" name="sbmt">Book Varanasi Tour </button>
            </form>
        </div>
    </section>
    <!-- Page Footer-->
    <?php
include('include/footer.php') 
?>