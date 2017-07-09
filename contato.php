<?php include 'header.php'; ?>
    <div class="header-title white ken-burn" data-parallax="scroll" data-position="top" data-natural-height="850" data-natural-width="1920" data-image-src="images/bg-29.jpg">
        <div class="container">
            <div class="title-base">
                <h1>Contact forms</h1>
                <p>Features and components of Framework Y</p>
            </div>
        </div>
    </div>
    <div class="section-empty section-item text-center">
        <div class="container content">
            <h5 class="text-bold" class="text-center">CONTACT FORM</h5>
            <hr class="space m" />
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-6">
                    <form action="http://www.framework-y.com/scripts/php/contact-form.php" class="form-box form-ajax" method="post">
                        <div class="row">
                            <div class="col-md-6">
                                <p>Name</p>
                                <input id="name" name="name" placeholder="name" type="text" class="form-control form-value" required>
                            </div>
                            <div class="col-md-6">
                                <p>Email</p>
                                <input id="email" name="email" placeholder="email" type="email" class="form-control form-value" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">
                                <hr class="space xs" />
                                <p>Phone</p>
                                <input id="phone" name="phone" placeholder="phone" type="text" class="form-control form-value">
                                <hr class="space xs" />
                                <p>Messagge</p>
                                <textarea id="messagge" name="messagge" class="form-control form-value" required></textarea>
                                <hr class="space s" />
                                <button class="btn-sm btn" type="submit">Send messagge</button>
                            </div>
                        </div>
                        <div class="success-box">
                            <div class="alert alert-success">Congratulations. Your message has been sent successfully</div>
                        </div>
                        <div class="error-box">
                            <div class="alert alert-warning">Error, please retry. Your message has not been sent</div>
                        </div>
                    </form>
                </div>
                <div class="col-md-3">
                </div>
            </div>
            <hr class="space s" />
            <hr />
            <hr class="space s" />
    <div class="section-empty section-item text-center">
        <div class="container content">
            <h5 class="text-bold">GOOGLE MAP</h5>
            <hr class="space m" />
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d935.1923606802156!2d-40.290215391546816!3d-20.35114115861018!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xb81612e83810bd%3A0xb83ecb8d7189961f!2sAv.+Dr.+Jair+de+Andrade%2C+317+-+Itapu%C3%A3%2C+Vila+Velha+-+ES%2C+29101-702!5e0!3m2!1spt-BR!2sbr!4v1499617644454" width="100%" height="350" frameborder="0" style="border:0" allowfullscreen></iframe>
            <hr class="space s" />
            <hr />

            <div class="title-base title-small doc-title">
                <h4>ALL MAPS AND DOCUMENTATION</h4>

                <p>This template is built with Framework Y and many more buttons variants are<br />available, check documentation for more details.</p>
                <i class="fa fa-angle-up scroll-top"></i>
            </div>
            <a href="http://www.framework-y.com/components/components.html#google-maps" target="_blank"><img data-anima="pulse-fast" data-trigger="hover" src="../../../images/button-doc.png" alt="" /> </a>
        </div>
    </div>
           
        </div>
    </div>
<?php include 'footer.php'; ?>
