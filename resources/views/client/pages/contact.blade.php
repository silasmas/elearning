@extends("client.layouts.template",['titre'=>"Contact"])



@section("content")
<section class="contact-area">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="contact-desc">
                    <h2>Leave Us A Message</h2>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Donec odio. Quisque volutpat mattis eros. Nullam malesuada erat ut turpis.</p>
                </div>

                <div class="contact-info-single">
                    <div class="contact-icon">
                        <img src="assets/images/icons/email.svg" alt="image">
                    </div>
                    <div class="contact-cont">
                        <h3>Email Address :</h3>
                        <p>support@example.com</p>
                    </div>
                </div>
                <div class="contact-info-single">
                    <div class="contact-icon">
                        <img src="assets/images/icons/telephone.svg" alt="image">
                    </div>
                    <div class="contact-cont">
                        <h3>Phone Number :</h3>
                        <p>+98 12345 67890</p>
                    </div>
                </div>
                <div class="contact-info-single">
                    <div class="contact-icon">
                        <img src="assets/images/icons/map.svg" alt="image">
                    </div>
                    <div class="contact-cont">
                        <h3>Our Location :</h3>
                        <p>119/A, Mount View, London</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-form">
                    <form action="#" method="post">
                        <input type="text" placeholder="Your Name" class="form-control">
                        <input type="text" placeholder="Email Address" class="form-control">
                        <input type="text" placeholder="Subject" class="form-control">
                        <textarea rows="4" placeholder="Write Your Message *" class="form-control"></textarea>
                        <div class="submit-btn">
                            <a href="#">Submit Now</a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection