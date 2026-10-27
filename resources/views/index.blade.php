@extends('layout.layout')

@section('title', 'Home | Rosellah Salon')

@section('content')

<div class="hero">
    <div class="container">
        <div class="row row-cols-1 row-md-2 g-4">
            <div class="col-md-6">
                <div class="hero-content">
                    <div class="hero-text">
                        <h1 data-aos="fade-up-left" data-aos-duration="1000">Huduma Bora za <br /><span>Urembo</span> na <span>Ususi</span></h1>
                        <p data-aos="fade-up-right" data-aos-duration="2000">Karibu ujipatie huduma bora na za kisasa kutoka kwa wataalamu wetu wenye uzoefu na ubunifu wa hali ya juu pamoja na <br />vifaa vya kisasa.</p>
                    </div>
                    <div class="hero-btns">
                        <a href="{{route('appointment')}}" class="hero-btn" data-aos="fade-up"
                            data-aos-duration="3000">Weka Appointment <i class="bi bi-arrow-up-right"></i></a>
                        <a href="{{ route('contacts') }}" class="hero-btn" data-aos="fade-down"
                            data-aos-duration="3000">Wasiliana Nasi <i class="bi bi-phone-vibrate"></i></a>
                    </div>
                    <div class="row hero-time-loc">
                        <div class="col" data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back"
                            data-aos-delay="3000"
                            data-aos-offset="0">
                            <div class="hero-icon">
                                <i class="bi bi-geo-alt"></i>
                            </div>
                            <p>
                                <span>Swaswa, Dodoma Tanzania</span>,<br />Mkabala na Bwawani.
                            </p>
                        </div>
                        <div class="col" data-aos="fade-zoom-in"
                            data-aos-easing="ease-in-back"
                            data-aos-delay="3000"
                            data-aos-offset="0">
                            <div class="hero-icon">
                                <i class="bi bi-calendar-week"></i>
                            </div>
                            <p>
                                <span>Jumatatu - Jumapili</span>,<br />
                                Siku Saba za Wiki.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="hero-images">
                    <img src="{{asset('images/hero-img-2.png')}}" alt="Hero Image" loading="lazy">
                    <div class="hero-label">
                        <div class="hero-icon"><i class="bi bi-people"></i></div>Wataalamu
                    </div>
                    <div class="hero-label-2">
                        <div class="hero-icon"><i class="bi bi-patch-check"></i></div>Huduma Bora
                    </div>
                    <div class="hero-label-3">
                        <div class="hero-icon"><i class="bi bi-currency-dollar"></i></div>Bei Nafuu
                    </div>
                    <div class="hero-label-4">
                        <div class="hero-icon"><i class="bi bi-scissors"></i></div>Vifaa vya Kisasa
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

<div class="services" id="huduma">
    <div class="container">


        <h1 class="heading">Huduma Zetu</h1>
        <p class="sub-heading">Tunatoa huduma zenye ubora wa hali ya juu <br />kwa bei nafuu.</p>


        <div class="services-content">

            <div class="swiper card_slider">
                <div class="swiper-wrapper">
                    <div class="swiper-slide card" id="kuset-na-kuosha">
                        <div class="slide-content">
                            <h5>Kuset na Kuosha</h5>
                            <p>Tunatengeneza na kusafisha nywele.</p>
                        </div>
                        <img src="{{asset('images/kuset.jpg')}}" alt="" loading="lazy">
                        <a href="#"><i class="bi bi-arrow-up-right"></i></a>
                    </div>
                    <div class="swiper-slide card" id="kupamba-maharusi">
                        <div class="slide-content">
                            <h5>Kupamba Maharusi</h5>
                            <p>Tunatoa huduma ya kupamba maharusi.</p>
                        </div>
                        <img src="{{asset('images/maharusi2.jpg')}}" alt="" loading="lazy">
                        <a href="#"><i class="bi bi-arrow-up-right"></i></a>
                    </div>
                    <div class="swiper-slide card" id="make-up">
                        <div class="slide-content">
                            <h5>Make-up</h5>
                            <p>Tunafanya make-up za aina mbalimbali. </p>
                        </div>
                        <img src="{{asset('images/makeup-2.jpg')}}" alt="" loading="lazy">
                        <a href="#"><i class="bi bi-arrow-up-right"></i></a>
                    </div>
                    <div class="swiper-slide card" id="spa-na-massage">
                        <div class="slide-content">
                            <h5>Spa na Massage</h5>
                            <p>Tunafanya spa na massage aina zote.</p>
                        </div>
                        <img src="{{asset('images/massage.jpeg')}}" alt="" loading="lazy">
                        <a href="#"><i class="bi bi-arrow-up-right"></i></a>
                    </div>
                    <div class="swiper-slide card">
                        <div class="slide-content">
                            <h5>Kutengeneza Kucha</h5>
                            <p>Tunatengeneza na kupaka rangi kucha.</p>
                        </div>
                        <img src="{{asset('images/kucha.jpg')}}" alt="" loading="lazy">
                        <a href="#"><i class="bi bi-arrow-up-right"></i></a>
                    </div>


                </div>
                <div class="swiper-pagination"></div>
            </div>

        </div>
    </div>
</div>
</div>
<div class="why-us">
    <div class="container">
        <h1 class="heading">Kwanini Sisi</h1>
        <p class="sub-heading">Sababu zinazofanya uendelee kutuamini na <br />kutuchagua sisi siku zote.</p>

        <div class="why-us-content">
            <div class="row row-cols-1 row-cols-md-2 g-4">
                <div class="col">
                    <div class="why-card" data-aos="fade-up"
                        data-aos-duration="1000">
                        <div class="why-icon">
                            <i class="bi bi-people"></i>
                        </div>
                        <h4 class="why-title">Wataalamu Wabobevu</h4>
                        <p class="why-desc">Tuna wataalamu wa urembo na ususi wenye weledi, ubunifu na uzoefu wa hali ya juu walio tayari kukuhudumia kwa ukarimu wa hali ya juu.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="why-card" data-aos="fade-up"
                        data-aos-duration="2000">
                        <div class="why-icon">
                            <i class="bi bi-patch-check"></i>
                        </div>
                        <h4 class="why-title">Huduma Bora za Kisasa</h4>
                        <p class="why-desc">Tunatoa huduma bora na za kisasa za urembo na ususi kwa bei nafuu pamoja na mitindo ya kisasa, pia tunatoa ushauri kwa wateja wetu.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="why-card" data-aos="fade-up"
                        data-aos-duration="1000">
                        <div class="why-icon">
                            <i class="bi bi-currency-dollar"></i>
                        </div>
                        <h4 class="why-title">Bei Nafuu</h4>
                        <p class="why-desc">Tunatoa huduma bora kwa bei nafuu sana, karibu upendeze na sisi kwa bei nafuu sana.</p>
                    </div>
                </div>
                <div class="col">
                    <div class="why-card" data-aos="fade-up"
                        data-aos-duration="2000">
                        <div class="why-icon">
                            <i class="bi bi-scissors"></i>
                        </div>
                        <h4 class="why-title">Vifaa vya Kisasa</h4>
                        <p class="why-desc">Tuna vifaa bora na vya kisasa kabisa, vinavyotuwezesha kukupatia wewe mteja wetu huduma bora na za kisasa.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="gallery">
    <div class="container">
        <h1 class="heading">Gallery Yetu</h1>
        <p class="sub-heading">Tazama sample za huduma tunazotoa <br />kwa wateja wetu</p>
        <div class="gallery-content">
            <div class="row row-cols-2 row-cols-md-4 g-4">
                <div class="col" data-aos="fade-up"
                    data-aos-duration="500">
                    <div class="gallery-card card">
                        <img src="{{asset('images/1396.jpg')}}" alt="" loading="lazy" />
                    </div>
                </div>
                <div class="col" data-aos="fade-up"
                    data-aos-duration="1000">
                    <div class="gallery-card card">
                        <img src="{{asset('images/kuosha.jpg')}}" alt="" loading="lazy" />
                    </div>
                </div>
                <div class="col" data-aos="fade-up"
                    data-aos-duration="1500">
                    <div class="gallery-card card">
                        <img src="{{asset('images/makeup.jpg')}}" alt="" loading="lazy" />
                    </div>
                </div>
                <div class="col" data-aos="fade-up"
                    data-aos-duration="2000">
                    <div class="gallery-card card">
                        <img src="{{asset('images/2149259372.jpg')}}" alt="" loading="lazy" />
                    </div>
                </div>
                <div class="col" data-aos="fade-up"
                    data-aos-duration="2500">
                    <div class="gallery-card card">
                        <img src="{{asset('images/32843.jpg')}}" alt="" loading="lazy" />
                    </div>
                </div>
                <div class="col" data-aos="fade-up"
                    data-aos-duration="3000">
                    <div class="gallery-card card">
                        <img src="{{asset('images/2148976106.jpg')}}" alt="" loading="lazy" />
                    </div>
                </div>
                <div class="col" data-aos="fade-up"
                    data-aos-duration="3500">
                    <div class="gallery-card card">
                        <img src="{{asset('images/13587.jpg')}}" alt="" loading="lazy" />
                    </div>
                </div>
                <div class="col" data-aos="fade-up"
                    data-aos-duration="4000">
                    <div class="gallery-card card">
                        <img src="{{asset('images/2149206641.jpg')}}" alt="" loading="lazy" />
                    </div>
                </div>
            </div>
        </div>
        <div class="gallery-btns">
            <a href="#" class="gallery-btn">Ona Zaidi <i class="bi bi-arrow-right"></i></a>
        </div>
    </div>
</div>

<div class="cta">
    <div class="container">
        <div class="cta-content" data-aos="fade-up"
            data-aos-duration="3000">
            <div class="row">
                <div class="col">
                    <h2>
                        Karibu sana tukuhudumie Kwa <br />Huduma bora za Urembo na Ususi
                    </h2>

                    <div class="cta-btns">
                        <a href="#" class="cta-btn">Weka Appointment <i class="bi bi-arrow-up-right"></i></a>
                    </div>
                    <div class="circle"></div>

                </div>
                <div class="col">
                    <img src="{{asset('images/cta-img.png')}}" alt="" loading="lazy" />
                    <div class="circle2"></div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="feedback">
    <div class="container">
        <h1 class="heading">Shuhuda za Wateja Wetu</h1>
        <p class="sub-heading">Maoni, mirejesho na shuhuda za wateja wetu kuhusu ubora <br />wa huduma zetu.</p>

        <div class="feedback-content">
            <div class="row row-cols-1 row-cols-md-3 g-4">
                <div class="col" data-aos="fade-up"
                    data-aos-duration="1000">
                    <div class="feedback-card">
                        <div class="feedback-icon">
                            <img src="{{asset('images/quote-sharp-fill.svg')}}" alt="quotation-mark">
                        </div>
                        <div class="feedback-msg">Kwa kweli ninafurahia sana kufanya kazi na nyinyi huwa hamniangushi kabisa for real!</div>
                        <div class="feedback-sender">

                            <div class="sender-icon">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <div class="sender-name">
                                <h6>Jane Doe</h6>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up"
                    data-aos-duration="2000">
                    <div class="feedback-card">
                        <div class="feedback-icon">
                            <img src="{{asset('images/quote-sharp-fill.svg')}}" alt="quotation-mark">
                        </div>
                        <div class="feedback-msg">Huduma zenu ni ten over ten pia napenda mnavyojali muda wa mteja yani you guys are fire.</div>
                        <div class="feedback-sender">

                            <div class="sender-icon">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <div class="sender-name">
                                <h6>Doreen Davis</h6>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col" data-aos="fade-up"
                    data-aos-duration="3000">
                    <div class="feedback-card">
                        <div class="feedback-icon">
                            <img src="{{asset('images/quote-sharp-fill.svg')}}" alt="quotation-mark">
                        </div>
                        <div class="feedback-msg">Asanteni sana you did well on my wedding day especially the make up ilikuwa on point sana!</div>
                        <div class="feedback-sender">

                            <div class="sender-icon">
                                <i class="bi bi-person-fill"></i>
                            </div>
                            <div class="sender-name">
                                <h6>Latifa Iddy</h6>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@endsection