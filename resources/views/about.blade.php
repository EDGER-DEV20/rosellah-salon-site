@extends('layout.layout')

@section('title','About us | Rosellah Salon')

@section('content')
<div class="about-hero">
    <div class="container">
        <h1 class="heading" data-aos="fade-up-left"
            data-aos-duration="1000">Kuhusu Rosellah Salon</h1>
        <p class="sub-heading" data-aos="fade-up-right"
            data-aos-duration="2000">
            Salon ya kike inayotoa huduma bora za urembo <br />na ususi kwa gharama nafuu
        </p>
    </div>
</div>

<div class="about-section">
    <div class="container">
        <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 g-4">
            <div class="col" data-aos="fade-up"
                data-aos-duration="1000">
                <img src="{{asset('images/4439.jpg')}}" alt="About image" loading="lazy">
                <img src="{{asset('images/maharusi.jpeg')}}" alt="About image" loading="lazy">
            </div>
            <div class="col" data-aos="fade-up"
                data-aos-duration="2000">
                <h1 class="section-heading">Kuhusu Sisi</h1>

                <p>Karibu Rosellah Salon, sehemu yako ya kuaminika kwa huduma bora za urembo na utunzaji wa mwili iliyopo Swaswa, Dodoma. Tunajitahidi kuhakikisha kila mteja anayefika kwetu anapata huduma ya kiwango cha juu katika mazingira safi, tulivu na yenye faraja.</p>

                <p>Tunatoa huduma mbalimbali za urembo kwa wanawake, ikiwemo utengenezaji na uoshaji wa nywele, makeup, mapambo ya maharusi, spa na massage, pamoja na huduma za kucha. Kila huduma inatolewa kwa umakini, ubunifu na kuzingatia mahitaji na mtindo unaopendelewa na mteja.</p>

                <p>Kwa Rosellah Salon, tunaamini kuwa urembo huanza na kujiamini. Ndiyo maana tunatumia muda kuelewa mahitaji ya kila mteja na kuhakikisha unatoka kwetu ukiwa na mwonekano unaokuvutia na kujiamini zaidi.</p>

                <p>Rosellah Salon - Urembo Wako, Furaha Yetu. Tunakukaribisha uje ujionee huduma bora na uzoefu wa kipekee wa urembo hapa Swaswa, Dodoma.</p>

            </div>
        </div>
    </div>

</div>


@endsection