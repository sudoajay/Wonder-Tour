<!DOCTYPE html>
<html class="wide wow-animation" lang="en">

<head>
    <title><?php echo $title; ?> </title>
    <meta name="format-detection" content="telephone=no">
    <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta charset="utf-8">
    <link rel="icon" href="images-1/favicon.ico" type="image/x-icon">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Stylesheets-->
    <link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Montserrat:400,500,600,700%7CPoppins:400%7CTeko:300,400">
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/style.css">
    <style>
        .ie-panel {
            display: none;
            background: #212121;
            padding: 10px 0;
            box-shadow: 3px 3px 5px 0 rgba(0, 0, 0, .3);
            clear: both;
            text-align: center;
            position: relative;
            z-index: 1;
        }

        .toast {
            position: fixed;
            top: 80px;
            right: 10px;
        }

        html.ie-10 .ie-panel,
        html.lt-ie-10 .ie-panel {
            display: block;
        }
    </style>
</head>

<body>
    <div class="ie-panel">
        <a href="http://windows.microsoft.com/en-US/internet-explorer/"></a>
    </div>
    <div class="preloader">
        <div class="preloader-body">
            <div class="cssload-container">
                <div class="cssload-speeding-wheel"></div>
            </div>
            <p>Loading...</p>
        </div>
    </div>
    <div class="page">
        <div class="m-4">

            <div class="toast" id="mySuccessToast">
                <div class="toast-header">
                    <strong class="me-auto"><i class="bi-check-circle-fill"></i> Success!</strong>
                    <small></small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body text-left">
                    Thank you! Your message has been submitted.
                </div>
            </div>

            <div class="toast" id="myErrorToast">
                <div class="toast-header">
                    <strong class="me-auto"><i class="bi-exclamation-octagon-fill"></i> Error!</strong>
                    <small></small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body text-left ">
                    Oops! There was an error submitting your message. Please try again later.
                </div>
            </div>

            <div class="toast" id="myFillFeildToast">
                <div class="toast-header">
                    <strong class="me-auto"><i class="bi-info-circle-fill"></i> Info!</strong>
                    <small></small>
                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                </div>
                <div class="toast-body text-left">
                Please fill out all the required fields before submitting the form.
                </div>
            </div>
        </div>

        <script>
            function addBookingTableToDataBase() {


                var name = document.getElementById('contact-your-name-2').value
                var email = document.getElementById('contact-email-2').value
                var phone = document.getElementById('contact-phone-2').value
                var numberOfPerson = document.getElementById('contact-message-2').value
                var location = document.getElementById('contact-button-2').innerText.replace("Book", "").replace("Tour", "").replace(/\s+/, "")
                var createdTime = createdTimeStamp();

                if (!name || !email || !phone || !numberOfPerson || !location || !createdTime) {
                    $("#myFillFeildToast").toast("show");
                } else {

                    request = jQuery.ajax({
                        type: 'POST',
                        url: 'http://localhost/wonder_tour/database/set-database-data.php',
                        dataType: 'text',
                        cors: true,
                        secure: true,
                        cache: false,
                        data: {
                            "functionName": "Booking Table",
                            "Name": name,
                            "Email": email,
                            "Phone": phone,
                            "NumberOfPerson": numberOfPerson,
                            "Location": location,
                            "Created": createdTime,

                        },
                        success: function(info) {

                            if (info == ("Successfull")) {
                                document.getElementById("conactForm").reset();

                                $("#mySuccessToast").toast("show");

                            } else {
                                console.log(info)
                                $("#myErrorToast").toast("show");
                            }

                        }
                    });
                }

                // Callback handler that will be called on success
                request.done(function(response, textStatus, jqXHR) {
                    // Log a message to the console
                });

                // Callback handler that will be called on failure
                request.fail(function(jqXHR, textStatus, errorThrown) {
                    // Log the error to the console

                });

                // Callback handler that will be called regardless
                // if the request failed or succeeded
                request.always(function() {
                    // Reenable the inputs

                });

            }

            function addGetInTouchToDataBase() {


                var name = document.getElementById('contact-your-name-2').value
                var email = document.getElementById('contact-email-2').value
                var phone = document.getElementById('contact-phone-2').value
                var message = document.getElementById('contact-message-2').value
                var createdTime = createdTimeStamp();


                if (!name || !email || !phone || !message || !createdTime) {
                    $("#myFillFeildToast").toast("show");
                } else {
                    request = jQuery.ajax({
                        type: 'POST',
                        url: 'http://localhost/wonder_tour/database/set-database-data.php',
                        dataType: 'text',
                        cors: true,
                        secure: true,
                        cache: false,
                        data: {
                            "functionName": "Get In Touch Table",
                            "Name": name,
                            "Email": email,
                            "Phone": phone,
                            "Message": message,
                            "Created": createdTime,

                        },
                        success: function(info) {

                            if (info == ("Successfull")) {
                                document.getElementById("conactForm").reset();

                                $("#mySuccessToast").toast("show");

                            } else {
                                console.log(info)
                                $("#myErrorToast").toast("show");
                            }

                        }
                    });
                }

                // Callback handler that will be called on success
                request.done(function(response, textStatus, jqXHR) {
                    // Log a message to the console
                });

                // Callback handler that will be called on failure
                request.fail(function(jqXHR, textStatus, errorThrown) {
                    // Log the error to the console

                });

                // Callback handler that will be called regardless
                // if the request failed or succeeded
                request.always(function() {
                    // Reenable the inputs

                });

            }


            function createdTimeStamp() {
                var d1 = new Date()
                d1.setHours(d1.getHours() + (5))
                d1.setMinutes(d1.getMinutes() + 30)
                return d1.toISOString().slice(0, 19).replace('T', ' ');

            }
        </script>