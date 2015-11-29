<div class="container">
    <div class="row">
        <!-- Map Column -->
        <div class="col-md-9">
            <!-- Embedded Google Map -->
            <iframe width="100%" height="500px" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"
                    src="http://maps.google.com/maps?hl=en&amp;ie=UTF8&amp;ll=37.0625,-95.677068&amp;spn=56.506174,79.013672&amp;t=m&amp;z=4&amp;output=embed">

            </iframe>
        </div>
        <!-- Contact Details Column -->
        <div class="col-md-3">
            <h3>
                Contact Details
            </h3>

            <p>
                <i class="fa fa-home"></i>
                <?php echo $contacts['address'][0]; ?>
            </p>

            <p>
                <i class="fa fa-phone"></i>
                <?php echo $contacts['phone'][0]; ?>
            </p>

            <p>
                <i class="fa fa-envelope-o"></i>
                <a href="mailto:<?php echo $contacts['email'][0]; ?>"><?php echo $contacts['email'][0]; ?></a>
            </p>

            <ul class="list-unstyled list-inline list-social-icons">
                <li>
                    <a href="#"><i class="fa fa-facebook fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-twitter fa-2x"></i></a>
                </li>
                <li>
                    <a href="#"><i class="fa fa-google-plus fa-2x"></i></a>
                </li>
            </ul>
        </div>
    </div>
    <!-- /.row -->

    <!-- Contact Form -->
    <div class="row">
        <div class="col-md-8">
            <h3>Send us a Message</h3>

            <form name="sentMessage" id="contactForm" novalidate method="post" action="/info/contactmessage">
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Full Name:</label>
                        <input type="text" class="form-control" id="name" required
                               data-validation-required-message="Please enter your name.">

                        <p class="help-block"></p>
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Phone Number:</label>
                        <input type="tel" class="form-control" id="phone" required
                               data-validation-required-message="Please enter your phone number.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Email Address:</label>
                        <input type="email" class="form-control" id="email" required
                               data-validation-required-message="Please enter your email address.">
                    </div>
                </div>
                <div class="control-group form-group">
                    <div class="controls">
                        <label>Message:</label>
                            <textarea rows="10" cols="100" class="form-control" id="message" required
                                      data-validation-required-message="Please enter your message" maxlength="999"
                                      style="resize:none">
                            </textarea>
                    </div>
                </div>
                <div id="success"></div>
                <!-- For success/fail messages -->
                <button type="submit" class="btn btn-primary">Send Message</button>
            </form>
        </div>
    </div>
</div>
