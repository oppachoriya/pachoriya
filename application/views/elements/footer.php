<div id="footer" class="footer">
    <nav class="navbar navbar-inverse">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <h3>
                        <b>Get in touch</b>
                    </h3>

                    <p>

                    <div class="fa fa-home">
                        <?php echo $contacts['address'][0]; ?>
                    </div>
                    </p>
                    <p>

                    <div class="fa fa-envelope">
                        <a href="mailto:<?php echo $contacts['email'][0]; ?>"><?php echo $contacts['email'][0]; ?></a>
                    </div>
                    </p>
                    <p>

                    <div class="fa fa-phone">
                        <?php echo $contacts['phone'][0]; ?>
                    </div>
                    </p>
                </div>

                <div class="col-md-4">
                    <h3>
                        <b>Keep in touch</b>
                    </h3>

                    <p>
                    <ul class="list-inline">
                        <li>
                            <a href="<?php echo $contacts['social']['facebook']; ?>" style="color: #FFFFFF ; ">
                                <i class="fa fa-facebook fa-2x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $contacts['social']['twitter']; ?>" style="color: #FFFFFF ; ">
                                <i class="fa fa-twitter fa-2x"></i>
                            </a>
                        </li>
                        <li>
                            <a href="<?php echo $contacts['social']['googleplus']; ?>" style="color: #FFFFFF ; ">
                                <i class="fa fa-google-plus fa-2x"></i>
                            </a>
                        </li>
                    </ul>
                    </p>
                </div>

                <div class="col-md-4">
                    <h3>
                        <b>Stay Updated</b>
                    </h3>

                    <p>

                    <div>
                        <form action="/info/newsletter" method="post" id="footer-newsletter">

                            <input type="email" placeholder="Enter your email address..." name="newsletter-email"
                                   id="newsletter-email" style="color: #2f2f2f; width:70%" class="form-control"/>
                            <input type="submit" value="Send" class="btn btn-default"/>
                        </form>
                    </div>
                    </p>
                </div>
            </div>
            <div class="row" style="border-top: 1px solid #FFFFFF; font-size: 12px;">
                <div class="col-md-6" style="text-align: left">
                    Policies: <a href="#">Terms of use</a> | <a href="#">Privacy</a>
                </div>
                <div class="col-md-6" style="text-align: right">
                    Copyright &copy; <a href="www.adscottage.com">www.Adscottage.com</a> 2015
                </div>
            </div>
        </div>
    </nav>
</div>

