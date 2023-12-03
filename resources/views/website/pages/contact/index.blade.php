@extends('website.layouts.master')
@section('content') 

    <!-- Contact Start -->
    
    <div class="container-fluid pt-5">
        <div class="d-flex flex-column text-center mb-5 pt-5">
            <h4 class="text-secondary mb-3">Contact Us</h4>
            <h1 class="display-4 m-0">Contact Us <span class="text-warning">Any Time</span></h1> <br> <br>
            <h5> Thank you for your interest in our products. <br> We welcome your feedback, comments and questions. 
                Please call us  <br> or send us an e-mail and we will reply shortly.</h5>
        </div> <br> 

<div class="container">
    <div class="row mb-3 contactusinfo">
        <div class="col-md-4">
            <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fas fa-map-marker"></span>
                </div>
                <div class="text">
                    <p><span>Address:</span> Irbid, Jordan</p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fas fa-phone"></span>
                </div>
                <div class="text">
                    <p><span>Phone:</span> <a href="tel://1234567920">+ 1235 2355 98</a></p>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="dbox w-100 text-center">
                <div class="icon d-flex align-items-center justify-content-center">
                    <span class="fas fa-paper-plane"></span>
                </div>
                <div class="text">
                    <p><span>Email:</span> <a href="mailto:info@yoursite.com">info@uniformy.com</a></p>
                </div>
            </div>
        </div>
    </div>
</div>


        <br>

        <div class="row justify-content-center">
            <div class="col-12 col-sm-8 mb-5">
                <div class="contact-form">
                    <div id="success"></div>
                    <form action="{{ route('contact.store') }}" method="POST">
                        @csrf
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="name" name="name" placeholder="Your Name" required="required" data-validation-required-message="Please enter your name" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="email" class="form-control p-4" id="email" name="email" placeholder="Your Email" required="required" data-validation-required-message="Please enter your email" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <input type="text" class="form-control p-4" id="subject" name="subject" placeholder="Subject" required="required" data-validation-required-message="Please enter a subject" />
                            <p class="help-block text-danger"></p>
                        </div>
                        <div class="control-group">
                            <textarea class="form-control p-4" rows="6" id="message" name="message" placeholder="Message" required="required" data-validation-required-message="Please enter your message"></textarea>
                            <p class="help-block text-danger"></p>
                        </div>
                        <div>
                            <button class="btn btn-warning py-3 px-5" type="submit" id="sendMessageButton">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <!-- <div class="col-12 mb-n2 p-0">
                <iframe style="width: 100%; height: 500px;" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div> -->
        </div>
    </div>
    <!-- Contact End -->





@endsection