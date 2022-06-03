@extends('coming_soon.layouts.index')
@section('content')
    <!-- Begin of home page -->
    <div class="section page-home page page-cent" id="s-home">

        <!-- Logo -->
        <!--<div class="logo-container">
            <img class="h-logo" src="img/logo_only.png" alt="Logo">
        </div>-->
        <!-- Content -->
        <section class="content">

            <header class="header">
                <div class="h-left">
                    <h2>Bright & <strong>Marv</strong></h2>
                </div>
                <div class="h-right">
                    <h3>  ❤️<br></h3>
                    <h4 class="subhead"><a href="#register">Wedding RSVP  Website Coming Soon</a></h4>
                </div>
            </header>
        </section>

        <!-- Scroll down button -->
        <footer class="p-footer p-scrolldown">
            <a href="#register">
                <div class="arrow-d">
                    <div class="before">Scroll</div>
                    <div class="after">Down</div>
                    <div class="circle"><i class="ion ion-mouse"></i></div>
                </div>
            </a>
        </footer>
    </div>
    <!-- End of home page -->



    <!-- Begin of register page -->
    <div class="section page-register page page-cent"  id="s-register">
        <section class="content">
            <header class="p-title">
                <h3>Register <i class="ion ion-compose"></i></h3>
                <h4 class="subhead">Register to get our latest news</h4>
            </header>
            <div>
                <form id="mail-subscription" class="form magic send_email_form" method="post" action="{{route('rsvp')}}">
                    @csrf
                    <p class="invite">Please, write your email below for early reservations :</p>
                    <div class="fields clearfix">
                        <div class="input">
                            <label for="reg-email">Email </label>
                            <input id="reg-email" class="email_f"  name="email" type="email" required placeholder="your@email.address" data-validation-type="email"></div>
                        <div class="buttons">
                            <button  class="button email_b" type="submit" name="submit_email">Ok</button>
                        </div>
                    </div>

                    <br/>
                    @if(Session::has('status_code'))
                        @if(Session::get('status_code') === 200)
                        <p class="email-ok visible" style="color:#3ba93b"><strong style="color:white">Thank you</strong> for your subscription. We will inform you.</p>
                        @else
                            <p class="email-ok visible" style="color:red"><strong style="color:white">An Error Orccured</strong> try again later!</p>
                        @endif
                    @endif
                </form>
            </div>
        </section>
        <footer class="p-footer p-scrolldown">
            <a href="#about-us">
                <div class="arrow-d">
                    <div class="before">About</div>
                    <div class="after">Lorem</div>
                    <div class="circle"><i class="ion ion-mouse"></i></div>
                </div>
            </a>
        </footer>
    </div>
    <!-- End of register page -->


    <!-- Begin of Contact page   -->
    <div class="section page-contact page page-cent  bg-color" data-bgcolor="rgba(95, 25, 208, 0.88)s" id="s-contact">
        <!-- Begin of contact information -->
        <div class="slide" id="s-information" data-anchor="information">
            <section class="content">
                <header class="p-title">
                    <h3>Contact<i class="ion ion-location">
                        </i>
                    </h3>
                    <ul class="buttons">
                        <li class="show-for-medium-up">
                            <a title="About" href="#about-us" ><i class="ion ion-android-information"></i></a>
                        </li>
                        <!--<li>
                            <a title="Contact" href="#contact/information"><i class="ion ion-location"></i></a>
                        </li>-->
                        <li>
                            <a title="Message" href="#contact/message"><i class="ion ion-email"></i></a>
                        </li>
                    </ul>
                </header>
                <!-- Begin Of Page SubSction -->
                <div class="contact">
                    <div class="row">
                        <div class="medium-6 columns left">
                            <ul>
                                <li>
                                    <h4>Email</h4>
                                    <p><a href="mailto:rsvps@brightandmarv.co.za">rsvps@brightandmarv.co.za</a></p>
                                </li>
{{--                                <li>--}}
{{--                                    <h4>Address</h4>--}}
{{--                                    <p>99 Location Street--}}
{{--                                        <br>Antartica SP</p>--}}
{{--                                </li>--}}
                                <li>
                                    <h4>Phone - Martha Shoniwa</h4>
                                    <p>+263 77 214 3087</p>
                                </li>
                            </ul>
                        </div>
                        <div class="medium-6 columns social-links right">
                            <ul>

                                <!-- legal notice -->
                                <li class="show-for-medium-up">
                                    <h4>Website</h4>
                                    <p><a href="https://brightandmarv.co.za">www.brightandmarv.co.za</a></p>
                                </li>
                                <li  class="show-for-medium-up">
                                    <h4>Find us on</h4>
                                    <!-- Begin of Social links -->
                                    <div class="socialnet">
                                        <a href="#"><i class="ion ion-social-facebook"></i></a>
                                        <a href="#"><i class="ion ion-social-instagram"></i></a>
                                        <a href="#"><i class="ion ion-social-twitter"></i></a>
                                        <a href="#"><i class="ion ion-social-pinterest"></i></a>
                                        <a href="#"><i class="ion ion-social-tumblr"></i></a>
                                    </div>
                                    <!-- End of Social links -->
                                </li>
                                <li>
                                    <p class="small">Designed by <strong><a href="mailto:allan.thecodemaster@gmail.com">ALLAN T MUZEYA</a></strong>. All right reserved 2022</p>
                                </li>
                            </ul>

                        </div>
                    </div>
                </div>
                <!-- End of page SubSection -->
            </section>
        </div>
        <!-- end of contact information -->

        <!-- begin of contact message -->
        <div class="slide" id="s-message" data-anchor="message">
            <section class="content">
                <header class="p-title">
                    <h3>Write to us<i class="ion ion-email">
                        </i>
                    </h3>
                    <ul class="buttons">
                        <li class="show-for-medium-up">
                            <a title="About" href="#about-us"><i class="ion ion-android-information"></i></a>
                        </li>
                        <li>
                            <a title="Contact" href="#contact/information"><i class="ion ion-location"></i></a>
                        </li>
                        <!--<li>
                            <a title="Message" href="#contact/message"><i class="ion ion-email"></i></a>
                        </li>-->
                    </ul>
                </header>
                <!-- Begin Of Page SubSction -->

                <div class="page-block c-right v-zoomIn">
                    <div class="wrapper">
                        <div>
                            <form class="message form send_message_form" method="get" action="http://demo.highhay.com/timex/ajaxserver/serverfile.php">
                                <div class="fields clearfix">
                                    <div class="input">
                                        <label for="mes-name">Name </label>
                                        <input id="mes-name" name="name" type="text" placeholder="Your Name" required></div>
                                    <div class="buttons">
                                        <button id="submit-message" class="button email_b" name="submit_message">Ok</button>
                                    </div>
                                </div>
                                <div class="fields clearfix">
                                    <div class="input">
                                        <label for="mes-email">Email </label>
                                        <input id="mes-email" type="email" placeholder="Email Address" name="email" required>
                                    </div>
                                </div>
                                <div class="fields clearfix no-border">
                                    <label for="mes-text">Message </label>
                                    <textarea id="mes-text" placeholder="Message ..." name="message" required></textarea>

                                    <div>
                                        <p class="message-ok invisible">Your message has been sent, thank you.</p>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- End Of Page SubSction -->
            </section>

        </div>
        <!-- End of contact message -->
    </div>
    <!-- End of Contact page  -->
@endsection
