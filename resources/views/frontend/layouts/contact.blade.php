<div class="contact">
    <div class="container">
        <div class="section-header text-center">
            <p>Get In Touch</p>
            <h2>Contact for any query</h2>
        </div>
        <div class="contact-img">
            <img src="{{ asset('assets/img/contact-pages.png') }}" alt="Image">
        </div>
        <div class="contact-form">
            <div id="success"></div>
            <form action="{{ route('contact-us.store') }}" method="POST" id="contactForm" novalidate="novalidate">
                @csrf
                <div class="control-group">
                    <input type="text" class="form-control" name="name" id="name" placeholder="Your Name"
                        required="required" data-validation-required-message="Please enter your name" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="email" class="form-control" name="email" id="email" placeholder="Your Email"
                        required="required" data-validation-required-message="Please enter your email" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject"
                        required="required" data-validation-required-message="Please enter a subject" />
                    <p class="help-block text-danger"></p>
                </div>
                <div class="control-group">
                    <textarea class="form-control" name="message" id="message" placeholder="Message" required="required"
                        data-validation-required-message="Please enter your message"></textarea>
                    <p class="help-block text-danger"></p>
                </div>
                <div>
                    <button class="btn btn-custom" type="submit" id="sendMessageButton">Send Message</button>
                </div>
            </form>
        </div>
    </div>
</div>
