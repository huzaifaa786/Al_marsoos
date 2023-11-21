@extends('layout.layout')
@section('content')
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{ route('Home.index') }}">Home</a></li>
                    <li><a href="{{ route('about') }}" class="active">About</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=   About Area Start   =-->
    <!--=====================================-->
    <section class="about style-2 sec-pad">
        <div class="container">
            <div class="heading">
                <h2 class="title clr-primary">About Al-Marsoos</h2>
                <p>It is the responsibility of every Muslim to serve for DEEN</p>
            </div>
            <img src="{{ asset('assets/media/about/about-3.png') }}" alt="">
            <div class="col-lg-6 offset-lg-3 mt-3">
                <h6 class="hadith">Prophet Muhammad (S.A.W.W): “If you wish for Allah to multiply your wealth, then purify
                    it (through zakat).”</h6>
            </div>
            <div class="content">
                <h4 class="heading">Our Madressa's Journey</h4>
                <p style=" text-align: justify">
                    In 2002, Madressa appeared as a demonstration of a dream devoted to encouraging information, excellence,
                    and local area. Established by people focused on giving a comprehensive Islamic schooling, Madressa left
                    on an excursion to profoundly influence the personalities and hearts of its understudies.
                </p>
                <p style=" text-align: justify">
                    Fundamental to Madressa's ethos is the development of solid virtues and character advancement.
                    Understudies are urged to exemplify ethics like sympathy, compassion, and trustworthiness. The
                    sustaining climate at Madressa stretches out past reading material, imparting a feeling of obligation
                    and metro obligation in every understudy, forming people who emphatically add to their networks and
                    society.
                </p>
                <p style=" text-align: justify">
                    As Madressa praises its establishing year in 2002, it imagines a future set apart by development,
                    advancement, and an extending influence on the existences of its understudies. The foundation stays
                    unflinching in obligation to giving a vigorous schooling grants information and imparts a significant
                    feeling of direction and values. Madressa plans to guarantee that each graduate arises as a signal of
                    light and direction in a steadily developing world.
                </p>
                <p style=" text-align: justify">
                    As Madressa celebrates its founding year in 2002, it envisions a future marked by growth, innovation,
                    and a deepening impact on the lives of its students. The institution remains steadfast in its commitment
                    to providing a robust education that imparts knowledge and instills a profound sense of purpose and
                    values. Madressa aims to ensure that each graduate emerges as a beacon of light and guidance in an
                    ever-evolving world.
                </p>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=        Donations Area Start       =-->
    <!--=====================================-->
    <section class="services style-3 sec-pad mb-4 mb-none-on-mobile text-center bg-color-light">
        <div class="container">
            <div class="heading">
                <h2 class="title">Services</h2>
                <p>It is the responsibility of every Muslim to serve for DEEN</p>
            </div>
            <div class="row">
                <div class="col-lg-10 offset-lg-1">
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <h6 class="services-title">Hadith Courses</h6>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <h6 class="services-title">Nikah Registration</h6>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <h6 class="services-title">Funeral Services</h6>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <h6 class="services-title">Quran reading</h6>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <h6 class="services-title">Quran Translation</h6>
                        </div>
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <h6 class="services-title">Quran Memorization</h6>
                        </div>
                    </div>
                </div>
            </div>
            <a href="{{route('contact')}}" class="al-buraq-btn btn-fill-primary btn-lg">Contact Now</a>
        </div>
    </section>
@endsection
