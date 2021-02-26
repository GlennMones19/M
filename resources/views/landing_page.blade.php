@extends('layouts.app')

@section('content')
    <section><div class="l-div__top text-center text-white">REGISTER NOW TO GET 3 FREE MESSAGES</div></section>
    <section class="l-landing__hero">
        <div class="l-content__wrapper">
            <div class="l-hero">
                <div class="l-header__content">
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
            </div>
        </div>
    </section>
    <section class="l-welcome">
        <div class="l-welcome__text text-white">
            <h3>WELCOME TO TEXT OUR PSYCHICS.</h3>
            <p>Psychic messaging is easy, quick and convenient. Our site offers Psychic Readings
            by instant messaging. Chat with your favorite readers and only pay per question.
            Instantly receive answers to ALL your questions about love, relationships, money,
            career and so much more. Professional, ethical and tested psychic readers are
            AVAILABLE NOW.</p>
        </div>
        <div class="l-welcome__top__rated mt-5">
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
                <p>Lorem Ipsum is simply dummy text of the printing<br>
                nd typesetting industry. Lorem Ipsum has been the<br>
                industry's standard dummy text ever since the 1500s</p>
            </div>
            <img src="{{ asset("./img/what_can.png") }}" alt="">
        </div>
    </section>
    <section class="l-types__reading">
       <div class="l-wrapper__bg">
           <div class="l-types__wrapper d-flex justify-content-center align-items-center">
                <img src="{{ asset("./img/types.png") }}" alt="">
                <div class="l-reading__text">
                    <p>TYPES OF<br>
                        READINGS</p>
                    <p>Lorem Ipsum is simply dummy text of <br> the printing
                        nd typesetting industry.<br> Lorem Ipsum has been the
                        industry's<br> standard dummy text ever since the <br>1500s</p>
                </div>
            </div>
       </div>
    </section>
    <section class="l-why__psychics">
        <div class="l-why__wrapper d-flex justify-content-center align-items-center">
            <div class="l-psychics__text">
                <p>WHY OUR<br>
                PSYCHICS ?</p>
                <p>Lorem Ipsum is simply dummy text of the printing<br>
                    nd typesetting industry. Lorem Ipsum has been the<br> 
                    industry's standard dummy text ever since the 1500s</p>
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