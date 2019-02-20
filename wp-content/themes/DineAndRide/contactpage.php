<?php /*Template Name: Contact Page*/
get_header()
?>

<div class="contact-wrapper">
    <div class="container-fluid">
        <div class="row justify-content-center">
            <div class="col-11 col-lg-10 col-xl-6 text-center">
                <h2 class="form-subtitle">Comments or Questions</h2>
                <div class="subtitle-line"></div>
                <p class="contact-description">Please submit the form below and a member of our Guest Engagement Team will respond within 24 hours. You may also call <strong>(786)-246-9035</strong> Monday through Friday, 10:00am to 10:00pm Eastern Time, for immediate assistance from a Guest Engagement representative.</p>
            </div>
        </div>
    </div>


    <div class="container-fluid contact-form-wrapper">
        <div class="row justify-content-center">
            <div class="col-11 col-lg-10 col-xl-6">
                <div class="row align-items-center">
                    <div class="col-12">
                        <form method="post">
                            <div class="form-row justify-content-center">
                                <div class="form-group col-12 col-sm-6">
                                        <input id="contact-first-name" type="text" class="form-control" placeholder="First name">
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                        <input id="contact-last-name" type="text" class="form-control" placeholder="Last name">
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-12 col-sm-6">
                                        <input id="contact-email" type="email" class="form-control" placeholder="Email">
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                        <input id="contact-phone" type="text" class="form-control" placeholder="Phone number">
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-12">
                                    <textarea class="form-control" id="contact-textarea" rows="6" placeholder="Type your message here"></textarea>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-11 col-lg-10">
                                    <button type="button" class="btn contact-form-button btn-lg btn-block">Send</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php
get_footer()
?>
