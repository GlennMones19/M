@extends('layouts.app')

@section('content')
    <section class="l-landing__hero">
        <img src="./img/hero-img.jpg" alt="" class="img-fluid">
        <div class="l-div__top text-center text-white">REGISTER NOW TO GET 3 FREE MESSAGES</div>
        <div class="l-content__container">
            <div class="l-header__nav d-flex">
                <img src="{{ asset("./img/logo.png") }}" alt="logo">
                <ul class="d-flex">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#AboutUs">About Us</a></li>
                    <li><a href="#OurPsychics">Our Psychics</a></li>
                    <li><a href="#ourprices">Our Prices</a></li>
                    <li><a href="#contact-us">Contact Us</a></li>
                    <li><a href="#login">Login</a></li>
                    <li><a href="#register">Register</a></li>
                </ul>
            </div>
            <div class="l-available__box">
                <div class="l-available">
                    <div class="l-available__text h-100 d-flex">
                        <span class="my-auto ml-3"></span>
                        <p class="my-auto ml-3 text-white">AVAILABLE</p>
                        <p class="my-auto text-white">24/7</p>
                    </div>
                    <p class="d-flex">TEXT YOUR WAY TO HAPPINESS</p>
                </div>
            </div>
            <div class="l-free__text">
                <p>3 Free Messages to the<br>
                Psychics of your choice</p>
            </div>
            <div class="l-loginregister mt-5">
                <div class="l-btn__group d-flex">
                    <button class="btn btn-warning text-white ml-3">Register</button>
                    <button class="btn btn-outline-warning text-white ml-3">Login</button>
                </div>
            </div>
        </div>
    </section>
    <section class="l-welcome">
        <div class="l-welcome__text text-white">
            <h3>WELCOME TO TEXT OUR PSYCHICS.</h3>
            <p>Do you have questions that need the help of a psychic to answer? Do you need that answer right away without dawdle? Text our Psychics is an instant messaging psychic reading site that has all you need. With professional psychics available round the clock, you can get readings and answers to your questions right where you are. We do not only offer comfortability, our services are topnotch and affordable as you only get to pay per question. Our advisors are ready to give insights to your questions about relationship, finance, love, career, and the sphere of your life. Your questions and readings are safe with us as we have 100% advisor-client confidentiality.<br>
            What are you waiting for? Our psychics are ready to offer the clarity and guidance you need. 
            </p>
        </div>
        <div class="l-welcome__top__rated">
            <h1 class="text-center">OUR TOP RATED<br>
            PSYCHICS</h1>
            <ul class="l-toprated__img d-flex flex-wrap justify-content-between">
                <li>
                    <dl>
                        <dt><img src="{{ asset("./img/1.png") }}" alt=""></dt>
                        <dd class="d-flex flex-column w-100 justify-content-center">
                            <p class="name text-white text-center">JANE PETERSON</p>
                            <p class="status text-white text-center"><span class="dot-green"></span> ONLINE</p>
                            <button class="btn btn-warning btn-override mx-auto text-white">READ BIO</button>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt><img src="{{ asset("./img/2.png") }}" alt=""></dt>
                        <dd class="d-flex flex-column w-100 justify-content-center">
                            <p class="name text-white text-center">JANE PETERSON</p>
                            <p class="status text-white text-center">ACTIVE 2 DAYS AGO</p>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt><img src="{{ asset("./img/3.png") }}" alt=""></dt>
                        <dd class="d-flex flex-column w-100 justify-content-center">
                            <p class="name text-white text-center">JANE PETERSON</p>
                            <p class="status text-white text-center"><span class="dot-green"></span> ONLINE</p>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt><img src="{{ asset("./img/4.png") }}" alt=""></dt>
                        <dd class="d-flex flex-column w-100 justify-content-center">
                            <p class="name text-white text-center">JANE PETERSON</p>
                            <p class="status text-white text-center"><span class="dot-green"></span> ONLINE</p>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt><img src="{{ asset("./img/5.png") }}" alt=""></dt>
                        <dd class="d-flex flex-column w-100 justify-content-center">
                            <p class="name text-white text-center">JANE PETERSON</p>
                            <p class="status text-white text-center"><span class="dot-green"></span> ONLINE</p>
                        </dd>
                    </dl>
                </li>
                <li>
                    <dl>
                        <dt><img src="{{ asset("./img/6.png") }}" alt=""></dt>
                        <dd class="d-flex flex-column w-100 justify-content-center">
                            <p class="name text-white text-center">JANE PETERSON</p>
                            <p class="status text-white text-center"><span class="dot-green"></span> ONLINE</p>
                        </dd>
                    </dl>
                </li>
            </ul>
            <div class="l-view__more d-flex justify-content-center">
                <button class="btn btn-warning btn-override text-white">VIEW MORE</button>
            </div>
        </div>
    </section>
    <section class="l-why__text px-0">
        <div class="l-why__wrapper">
            <h1 class="text-center">WHY TEXT OUR<br>
            PSYCHICS</h1>
            <ul class="l-why__ratings d-flex flex-wrap justify-content-between mt-5 pl-0">
                <li>
                    <dl>
                        <dt><img src="{{ asset('./img/rates.jpg') }}" alt=""></dt>
                        <dd class="d-flex flex-column w-100 justify-content-center">
                            <p>5 Star<br>
                            Psychics</p>
                            <div class="btn-wrapper mx-auto">
                                <button class="btn btn-warning btn-override">CLICK HERE</button>
                            </div>
                        </dd>
                    </dl>
                </li>
                <li class="ml-3">
                    <dl>
                        <dt><img src="{{ asset('./img/credits.jpg') }}" alt=""></dt>
                        <dd class="d-flex flex-column w-100 justify-content-center">
                            <p>3 Free<br>
                            Credits</p>
                            <div class="btn-wrapper mx-auto">
                                <button class="btn btn-warning btn-override">CLICK HERE</button>
                            </div>
                        </dd>
                    </dl>
                </li>
                <li class="ml-3">
                    <dl>
                        <dt><img src="{{ asset('./img/satisfactory.jpg') }}" alt=""></dt>
                        <dd class="d-flex flex-column w-100 justify-content-center">
                            <p>Satisfaction<br>
                            Gauaranteed</p>
                            <div class="btn-wrapper mx-auto">
                                <button class="btn btn-warning btn-override">CLICK HERE</button>
                            </div>
                        </dd>
                    </dl>
                </li>
            </ul>
        </div>
    </section>
    <section class="l-what__can">
        <div class="l-what__wrapper d-flex justify-content-center align-items-center">
            <div class="l-what__text">
                <p>WHAT CAN A<br>
                PSYCHICS DO ?</p>
                <p>The world is full of mysteries with only a few given the power 
                to see beyond what our eyes can perceive. Our gifted and professional advisors 
                can act as your third eye to guide you through life's uncertainties. Either you are on the 
                verge of making an important decision or you need an insight into a career path, our psychics can 
                tap into the supernatural and get the answer you seek. How about that seemingly meaningless dream 
                you had but couldn't shrug off? Our psychics are prepared to listen and fish out what the universe 
                is trying to tell you. </p>
            </div>
            <img src="{{ asset("./img/what_can.png") }}" alt="">
        </div>
    </section>
    <section class="l-types__reading">
       <div class="l-wrapper__bg">
           <div class="l-types__wrapper">
                <div class="l-types__content d-flex justify-content-center align-items-center">
                <img src="{{ asset("./img/types.png") }}" alt="">
                    <div class="l-reading__text">
                        <p>TYPES OF<br>
                            READINGS</p>
                        <p>
                        We at Text Our Psychics  ourselves on having one of the most diverse and gifted professional psychics. Answers to your innermost questions can be answered in various ways and our psychics got it all.<br>
                        If you'd prefer the tarot cards, we have experts that can get the answer you need just by drawing cards for you. <br>
                        Talented professionals can also see the mapping of your life in the stars and through their psychic power can help find a link from your past to the present to give you a favorable future. <br>
                        How about trying to connect with your loved ones? We have mediums that can serve as the gap between you and your deceased loved ones. All the insight you want can be gotten through those you have on the other side. <br>
                        There is power in numbers, if you believe so, our numerologist can discern all the obscurities in your life. With your birthdate, our numerologist can bring to life what your destiny is. <br>
                        </p>
                    </div>
                </div>
            </div>
       </div>
    </section>
    <section class="l-why__psychics">
        <div class="l-why__wrapper d-flex justify-content-center align-items-center">
            <div class="l-psychics__text">
                <p>WHY OUR<br>
                PSYCHICS ?</p>
                <p>
                Two words, seasoned psychics. Our psychics do not only have years of experience but are also available 24/7 to attend to your needs. Regardless of your preference or choice, you will always find the perfect psychic here at Text Our Psychics. Our watchword is authenticity and confidentiality so readings are not only accurate but stays between you and your psychics. If on the other hand, you don't want to give your name, that won't change a thing as our psychics only need to connect to your energy. Before you know it, you will have clarity like never before. <br>
                Our psychics possess the power of clairvoyance, and a look into your question might be just what you need for a better life. 
                </p>
            </div>
            <img src="{{ asset("./img/why_are.png") }}" alt="">
        </div>
    </section>
    <footer class="footer w-100">
        <div class="footer__wrapper">
            <img src="{{ asset("./img/logo.png") }}" alt="logo">
            <p class="offers">Our site offers Psychic Readings by texting where you ONLY<br>
            pay what you asked for, you can chat with your favorite<br>
            readers and only pay per question.</p>
            <div class="d-flex justify-content-center nav-footer">
                <div class="d-flex flex-column">
                    <a href="#" class="text-white"><span class="dot-oranger"></span> Home</a>
                    <a href="#" class="text-white"><span class="dot-oranger"></span> Our Psychics</a>
                    <a href="#" class="text-white"><span class="dot-oranger"></span> Contact Us</a>
                </div>
                <div class="d-flex flex-column">
                    <a href="#" class="text-white"><span class="dot-oranger"></span> About Us</a>
                    <a href="#" class="text-white"><span class="dot-oranger"></span> Our Prices</a>
                    <a href="#" class="text-white"><span class="dot-oranger"></span> Privacy Policy and Disclaimer</a>
                </div>
            </div>
            <hr>
            <p class="reserved">© 2021 All rights reserved.</p>
        </div>
    </footer>
@endsection