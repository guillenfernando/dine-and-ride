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
                        <form id="contactForm">
                            <div class="form-row justify-content-center">
                                <div class="form-group col-12 col-sm-6">
                                        <input name="first_name" id="contact-first-name" type="text" class="form-control" placeholder="First name" required>
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                        <input name="last_name" id="contact-last-name" type="text" class="form-control" placeholder="Last name" required>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-12 col-sm-6">
                                        <input name="email" id="contact-email" type="email" class="form-control" placeholder="Email" required>
                                </div>
                                <div class="form-group col-12 col-sm-6">
                                        <input name="phone" id="contact-phone" type="text" class="form-control" placeholder="Phone number" required>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-12">
                                    <textarea name="contact_message" class="form-control" id="contact-message" rows="6" placeholder="Type your message here" required></textarea>
                                </div>
                            </div>
                            <div class="form-row justify-content-center">
                                <div class="form-group col-11 col-lg-10">
                                    <input type="submit" class="btn contact-form-button btn-lg btn-block" value="Send" id="contact-button"/>
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
