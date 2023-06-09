<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Calvary Baptist Center is a welcoming community of believers dedicated to spreading the love and teachings of Jesus Christ. Join us for worship, fellowship, and spiritual growth.">
    <meta name="keywords" content="Calvary Baptist Center, worship, fellowship, Jesus Christ, spiritual growth">
    <meta name="author" content="Calvary Baptist Center">
    <title>Calvary Baptist Center</title>

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!--Bootstrap  CSS CDN-->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!--Lightbox CDN-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/css/lightbox.min.css" />
    <!--Custom CSS-->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="contact.css">

</head>

<body>
    <?php include 'navbar.php'; ?>
    <section>
        <div class="contact">
            <div class="contact-text">
                <h1>Contact Us</h1>
                <p>
                    Get in touch with us today and let us assist you with any inquiries or provide the information you need.
                </p>
            </div>
        </div>
    </section>

    <section>
        <div class="contact-grid row">
            <div class="contact-box card--">
                <div class="card-">
                    <div class="icon">
                        <h1><i class="fas fa-phone fa-beat-fade"></i>
                        </h1>
                    </div>
                    <div class="icon-text ">
                        <h4>Phone Number</h4>
                        703-565-2755
                    </div>
                </div>

                <!-- <div class="card-">
                    <div class="icon">
                        <h1><i class="fas fa-phone fa-beat-fade"></i>
                        </h1>
                    </div>
                    <div class="icon-text">
                        <h4>Fax Number</h4>
                        703-565-2755
                    </div>
                </div> -->

                <!-- <div class="card-">
                    <div class="icon">
                        <h1>
                            <i class="far fa-envelope fa-beat-fade"></i>
                        </h1>
                    </div>
                    <div class="icon-text">
                        <h4>Email Address</h4>
                        000 000 000 000 00
                    </div>
                </div> -->


                <!-- <div class="card-">
                    <div class="icon">
                        <h1>
                            <i class="fas fa-map-marker-alt fa-beat-fade"></i>
                        </h1>
                    </div>
                    <div class="icon-text">
                        <h4>Street Number</h4>
                        12450 Clipper Dr,
                    </div>
                </div> -->
                <div class="card-">
                    <div class="icon">
                        <h1>
                            <i class="fas fa-map-marker-alt fa-beat-fade"></i>
                        </h1>
                    </div>
                    <div class="icon-text">
                        <h4>Location

                        </h4>
                        12450 Clipper Dr,
                        Lake Ridge, VA 22192,
                        (Lake Ridge Baptist)

                    </div>
                </div>


            </div>
            <div class="contact-box ">
                <form action="" onclick="preventReload(event)">
                    <div class="row forms">
                        <div class="col-12">
                            <h2>Send Us a Message</h2>
                            <p>
                                We would love to hear from you! Send us a message and let us know how we can assist you.
                            </p>
                        </div>
                        <div class="input-forms col-md-6">
                            <label for="">Name</label>
                            <br>
                            <input type="text" id="name" placeholder="Enter your name" required>
                        </div>
                        <div class="input-forms col-md-6">
                            <label for="">Phone Number:</label>
                            <br>
                            <input type="number" id="number" min="0" placeholder="Enter your phone number" required>
                        </div>
                        <div class="input-forms col-md-6">
                            <label for="">Email</label>
                            <br>
                            <input type="email" id="email" placeholder="Enter your email address" required>
                        </div>
                        <div class="input-forms col-md-6">
                            <label for="">Subject</label>
                            <br>
                            <input type="text" id="subject" placeholder="Enter your subject" required>
                        </div>
                        <div class="input-forms col-12">
                            <label for="">Message</label>
                            <textarea name="" id="message" cols="30" rows="10" placeholder="Enter your message"></textarea>
                        </div>
                        <div class="input-forms col-md-4">
                            <input type="submit" value="Submit" style="background-color: #800020; color:#FFF; border:none;"  onclick="sendMail()" data-bs-toggle="modal" data-bs-target="#myModal">
                        </div>
                    </div>
            </div>
            </form>
        </div>
        </div>
    </section>
    <!-- The Modal -->
    <div class="modal" id="myModal">
        <div class="modal-dialog modal-sm">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header">
                    <h4 class="modal-title"><i class="fas fa-envelope"></i>
                        Success!
                    </h4>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>

                <!-- Modal body -->
                <div class="modal-body">

                    <p style="text-align: center;"> <strong id="user"></strong>,
                        Your message has been sent successfully. Thank you for contacting us!
                    </p>
                </div>

                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                </div>

            </div>
        </div>
    </div>

    <section>
        <div class="google">
            <h1>Find Us on Google Maps</h1>
            <p>
                Locate us easily and get directions to our church using Google Maps for a hassle-free and convenient experience.
            </p>
        </div>
        <div class="map">
            <iframe src="https://www.google.com/maps/embed?pb=!1m24!1m8!1m3!1d60555778.23103937!2d-38.714618!3d22.124779!3m2!1i1024!2i768!4f13.1!4m13!3e0!4m5!1s0xfdf9afad44b8ae3%3A0x2db0fa1df2a3b2d1!2sAirport%20City%2C%20Accra!3m2!1d5.5992334999999995!2d-0.1758426!4m5!1s0x89b65593c31c6ffb%3A0x72326e8a35e46e0!2sWoodbridge%2C%20Virginia%2022191%2C%20USA!3m2!1d38.658172199999996!2d-77.2497049!5e0!3m2!1sen!2sgh!4v1684423383710!5m2!1sen!2sgh" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>



    <?php include 'footer.php'; ?>

    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
    </script>
    <script>
        preventReload = (event) => {
            event.preventDefault();
        }
    </script>
    <script type="text/javascript">
        (function() {
            emailjs.init("wzZlJ5y1AygYyD6Yv");
        })();
    </script>
    <script>
        sendMail = () => {
            var params = {
                name: document.getElementById('name').value,
                number: document.getElementById('number').value,
                email: document.getElementById('email').value,
                subject: document.getElementById('subject').value,
                message: document.getElementById('message').value,
            }

            const serviceID = 'service_uqvb615'
            const templateID = 'template_70ljhdt'


            document.getElementById('user').innerHTML = document.getElementById('name').value
            emailjs.send(serviceID, templateID, params)
                .then(() => {
                    console.log('successfully');
                    document.getElementById('name').value = '',
                        document.getElementById('number').value = '',
                        document.getElementById('email').value = '',
                        document.getElementById('subject').value = '',
                        document.getElementById('message').value = ''
                })
        }
    </script>




    <!-- lightbox Script -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.1/js/lightbox.min.js"></script>
    <!-- Bootstrap JS CDN -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>

</html>