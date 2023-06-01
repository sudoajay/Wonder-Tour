<?php
$title = 'Himachal Pradesh Tour';
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
            <h2 class="breadcrumbs-custom-title">Shimla</h2>
            <ul class="breadcrumbs-custom-path">
                <li><a href="index.php">Home</a></li>

                <li class="active">Himachal Pradesh Tour</li>
            </ul>
        </div>
        <div class="box-position" style="background-image: url(images/270/shimlab.webp);"></div>
    </div>
</section>
<!-- content section -->
<section class="section section-sm bg-default text-left">
    <div class="container">
        <h3>
            <center>Shimla</center>
        </h3>
        <p class="text-block">
            Shimla Is the cpital of Himachal Pradesh.Shimla was once the summer capital during the British rule due to its perennial snow at ome places. Due to this Shimla Tour Package is always on demand through the year.</p><br><br>
        <p class="text-block">
            Shimla, the Himachal capital is a blessing for adventure seekers because of the tall mountains and hills that coax activites like skiing, paragliding, climbing, biking and trekking, the steep hilly regions and the valleys provide a picturesque and a popular
            destination to holiday with your family.The town also attracts the sloppy travelers to look Shimla Holiday packages and enjoy the calmness and positive vibes of the Shimla.</p><br><br>
        <p class="text-block">
            The joy train is a mut visit on Shimla Tour Packages as it is an iconic landmark in Shimla. These dense forest are a visual treat for tourist who love nature. We all know Shimla’s apples are renowned all through the nation, son when you are here, ensure
            you visit the apple garden and relish the fresh Shimla apples right from its source.</p><br><br>

    </div>

    <section class="section section-sm section-first bg-default text-left">
        <div class="container">
            <div class="row row-40 flex-lg-row-reverse justify-content-xl-between">


                <ul class="list-xl box-typography">
                    <li>
                        <h4> Duration : 2 Nights/3 Days</h4>
                    </li><br><br>
                    <li>
                        <h4>Day 1- Arrive in Shimla</h4><br>
                        <p>On arrival Shimla check in to the hotel and after refreshment in Evening visit to Mall Road and Ridge by walk. Overnight stay at Hotel.</p>
                    </li><br><br>
                    <li>
                        <h4>Day 2- Shimla – Kufri – Shimla</h4><br>
                        <p>After Breakfast, proceed for Shimla tours covering Kufri, Chail, Green valley view and back to Shimla. Overnight Stay at Hotel.</p>
                    </li><br><br>

                    <li>
                        <h4>Day 3- Shimla Departure </h4><br>
                        <p>Have a good breakfast at the hotel and check out from the hotel. Indulge in some last minute shopping and then take transfer to the airport or railway station for your return journey.

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
            <button class="button button-primary button-pipaluk" id="contact-button-2" onclick="addBookingTableToDataBase()" type="button" name="sbmt">Book Shimla Tour </button>
        </form>
    </div>

   
</section>




<!-- Page Footer-->
<?php
include('include/footer.php')
?>