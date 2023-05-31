<?php
$title = 'Maldives Tour';
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
                    <h2 class="breadcrumbs-custom-title">Maldives</h2>
                    <ul class="breadcrumbs-custom-path">
                        <li><a href="index.php">Home</a></li>
                        <li class="active">International Tour</li>
                        <li class="active">Maldives Tour</li>
                    </ul>
                </div>
                <div class="box-position" style="background-image: url(images/international/maldivesocean.jpg);"></div>
            </div>
        </section>
        <!-- content section -->
        <section class="section section-sm bg-default text-left">
            <div class="container">
                <h3>
                    <center>Maldives </center>
                </h3>
                <p class="text-block">
                    <mark> Maldives</mark> tourism is known popularly across the globe for its pristine white sandy beaches, blooming reef fishes, crystalline lagoons, palm-fringed islands, and lavish water villas.A natural sunken garden, the Maldives
                    is a collection of atolls tossed on the Indian Ocean that comprise its tens of hundreds of coral islands. Home to a unique and extremely delicate ecosystem, at the Maldives either you are under the water drinking in its spectacular
                    marine life or on the surface dipping your toes on its powdery white sands and taking in a tropical breeze. The Maldives’ palm-fringed beaches, the rustic resorts are known to be the byword for luxury and crystalline waters make it
                    the stuff picture-postcards are made of. With no dense tropical jungles or volcanic cliffs like a Seychelles, Hawaii, Bora Bora or Fiji, the Maldives is flatter with the highest point not shooting any more than five feet above the
                    sea level. The world here centers around the atolls within which thousand-odd islands have come up with their share of sandbars, lagoons and reefs that are home to some exotic reef fish and coral gardens. </p>
                <section class="section section-sm section-first bg-default text-left">
                    <div class="container">
                        <div class="row row-40 flex-lg-row-reverse justify-content-xl-between">


                            <ul class="list-xl box-typography">
                                <li>
                                    <h4> Duration : 4 Night -5 Days</h4>
                                </li>
                                <li>
                                    <h4>Day 01: Arrive In Maldives</h4><br>
                                    <p>Welcome to Maldives! Post-immigration and custom procedures, you will be greeted by fly vigo local representative who will assist you with your transfer to the hotel by Speed Boat. Dinner In the Hotel and Overnight
                                        stay at hotel.</p>
                                </li>
                                <li>
                                    <h4>Day 02: Day At Leisure</h4><br>
                                    <p>After breakfast in the Hotel you will Enjoy Beach Beauty of Maldives. In Afternoon you will Lunch in the Hotel. After full Day Leisure you will Enjoy Dinner in the Hotel. Overnight Stay at Hotel.
                                    </p>
                                </li>
                                <li>
                                    <h4>Day 03: Day At Leisure</h4><br>
                                    <p>After Breakfast in the hotel you will Enjoy Beaches of Maldives. In Afternoon you will Enjoy Lunch in the Hotel. In Evening you are Free for Leisure. Enjoy the Dinner in the Hotel and Overnight stay at hotel in Maldives.</p>
                                </li>
                                <li>
                                    <h4>Day 04: Day At Leisure</h4><br>
                                    <p>After Hearty Breakfast in the Hotel You are free Full Day for Leisure. Enjoy the Lunch in the Hotel and Full Day Free for Leisure.

                                    </p>
                                </li>
                                <li>
                                    <h4>Day 05: Departure For India</h4><br>
                                    <p>After Breakfast go to the Airport and go Back to Home.
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
                    <button class="button button-primary button-pipaluk" type="submit" name="sbmt">Book Maldives Tour </button>
                </form>
            </div>
        </section>
        <!-- Page Footer-->
        <?php
include('include/footer.php') 
?>