@extends('layout.layout')

@section('title','Appointment | Rosellah Salon')

@section('content')
<div class="contacts-hero appointment-hero">
    <div class="container">
        <h1 class="heading" data-aos="fade-up-left"
            data-aos-duration="1000">Weka Appointment</h1>
        <p class="sub-heading" data-aos="fade-up-right"
            data-aos-duration="2000">
            Karibu uweke appointment ya huduma zetu nasi <br />tutakurudia punde tu.
        </p>
    </div>
</div>

<div class="contacts-section">
    <div class="container">

        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2  first-col g-4">
            <div class="col" data-aos="fade-up"
                data-aos-duration="1000">
                <h2>Wasiliana Nasi</h2>
                <p>
                    Wasiliana nasi kupitia namba zetu za simu, <br />baruapepe na instagram yetu
                </p>

                <div class="row row-cols-1 row-cols-md-2 g-3">
                    <div class="col">
                        <div class="contacts">
                            <div class="contact">
                                <div class="contact-icon">
                                    <i class="bi bi-telephone"></i>
                                </div>
                                <div class="contact-item">
                                    <h6>Namba ya Simu</h6>
                                    <p>
                                        <a href="tel:+255788999000">+255 788 999 000</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contacts">
                            <div class="contact">
                                <div class="contact-icon">
                                    <i class="bi bi-instagram"></i>
                                </div>
                                <div class="contact-item">
                                    <h6>Instagram</h6>
                                    <p>
                                        <a href="https://instagram.com/rosellah_salon_dom">rosellahsalondom</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="contacts">
                            <div class="contact">
                                <div class="contact-icon">
                                    <i class="bi bi-geo-alt"></i>
                                </div>
                                <div class="contact-item">
                                    <h6>Ofisi Zetu</h6>
                                    <p>
                                        Swaswa, Dodoma Tanzania,<br /> Mkabala na Bwawani.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="google-map">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.921214655841!2d35.7906068!3d-6.1412854!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x184de524f1e48ced%3A0xb1ad05cfbe355a4b!2sSwaswa%20swamps!5e0!3m2!1sen!2stz!4v1790351595659!5m2!1sen!2stz" width="600" height="450" style="border:0;" allowfullscreen="false" loading="lazy" referrerpolicy="strict-origin-when-cross-origin"></iframe>
                </div>
            </div>
            <div class="col" data-aos="fade-up"
                data-aos-duration="2000">
                <div class="contacts-form">
                    @if(session('flash'))

                    <P>{{session('flash')}}</P>

                    @endif
                    <h1 class="section-heading">
                        Weka Appointment
                    </h1>
                    <p>Ingiza taarifa zako uweke appointment ya <br />huduma zetu nasi tutakurudia punde.</p>
                    <form action="/appointment" method="post">
                        @csrf
                        <div class="row row-cols-1">
                            <div class="col">
                                <input type="text" name="name" id="name" placeholder="Jina lako" required />
                            </div>
                        </div>
                        <div class="row g-3">
                            <div class="col">
                                <input type="email" name="email" placeholder="Baruapepe" required />
                            </div>
                            <div class="col">
                                <input type="text" name="phone" placeholder="Namba ya simu" required />
                            </div>
                        </div>

                        <div class="row row-cols-1 select-wrapper">
                            <div class="col">
                                <select name="service" id="name" required>
                                    <option value="">Chagua huduma</option>
                                    <option name="service" value="Kuset na Kuosha">Kuset na Kuosha</option>
                                    <option name="service" value="Kupamba Maharusi">Kupamba Maharusi</option>
                                    <option name="service" value="Make-up">Make-up</option>
                                    <option name="service" value="Spa na Massage">Spa na Massage</option>
                                </select>
                            </div>
                        </div>
                        <div class="row row-cols-1">
                            <div class="col">
                                <textarea placeholder="Maelezo zaidi..." name="message" required></textarea>
                            </div>
                        </div>
                        <div class="row row-cols-1">
                            <div class="col">
                                <button class="send-btn"><i class="bi bi-send"></i> Tuma</button>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

</div>


@endsection