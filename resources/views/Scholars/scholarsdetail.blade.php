@extends('layout.layout')
@section('content')
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="{{route('Home.index')}}">Home</a></li>
                    <li><a href="{{route('scholar')}}">Scholars</a></li>
                    <li><a href="#" class="active">Scholars Detail</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=    Scholar Detail Area Start      =-->
    <!--=====================================-->
    <section class="scholar-detail sec-mar">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <img src="{{ $scholar->image }}" alt="">
                    <a href="{{route('contact')}}" class="al-buraq-btn btn-fill-primary btn-xl-2 mt-3">Contact Now</a>
                </div>
                <div class="col-lg-8">
                    <div class="content-section">
                        <div class="top-content">
                            <h3 class="scholar-name">{{ $scholar->name }}</h3>
                        </div>
                        <hr>
                        <h6 class="content-title">Overview</h6>
                        <p>
                            {{ $scholar->description }}
                        </p>
                        <h6 class="content-title">Personal Profile</h6>
                        <div class="row profile-tab">
                            <div class="col-lg-6 col-md-6 col-12">
                                <p class="tab">DEGREE: <span>{{ $scholar->qualification }}</span></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <p class="tab">SERVING EXPERIENCE: <span>{{ $scholar->experience }}</span></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <p class="tab">PHONE: <span>{{ $scholar->mobileno }}</span></p>
                            </div>
                            <div class="col-lg-6 col-md-6 col-12">
                                <p class="tab">EMAIL: <span>{{ $scholar->email }}</span></p>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=     More Scholars Area Start      =-->
    <!--=====================================-->
    <section class="scholars sec-mar mb-none-on-mobile ">
        <div class="container">
            <div class="scholars-slider justify-content-center">
                @foreach ( App\Models\Scholars::latest()->take(4)->get() as $key => $scholars)
                @if ($scholars->id != $scholar->id)
                <div class="scholar-box text-center">
                    <img src="{{$scholars->image}}" style="width:290px;height:250px" alt="">
                    <h6 class="name">{{$scholars->name}}</h6>
                    <p class="about-scholar">
                        {{$scholars->description}}
                    </p>
                </div>
                @endif
                @endforeach
                {{-- <div class="scholar-box text-center">
                    <img src="assets/media/scholars/scholar-2.png" alt="">
                    <h6 class="name">Mufti Abd Manaf</h6>
                    <p class="about-scholar">The Mosque is serving day and night, educating people about Islam and teachings
                        of Quran for children.</p>
                </div>
                <div class="scholar-box text-center">
                    <img src="assets/media/scholars/scholar-3.png" alt="">
                    <h6 class="name">Abida Anishah</h6>
                    <p class="about-scholar">The Mosque is still under development in some sectors and is in need of your
                        support and contribution.</p>
                </div>
                <div class="scholar-box text-center">
                    <img src="assets/media/scholars/scholar-1.png" alt="">
                    <h6 class="name">Molana Abdus Salam</h6>
                    <p class="about-scholar">The Mosque is still under development in some sectors and is in need of your
                        support and contribution.</p>
                </div>
                <div class="scholar-box text-center">
                    <img src="assets/media/scholars/scholar-2.png" alt="">
                    <h6 class="name">Mufti Abd Manaf</h6>
                    <p class="about-scholar">The Mosque is still under development in some sectors and is in need of your
                        support and contribution.</p>
                </div>
                <div class="scholar-box text-center">
                    <img src="assets/media/scholars/scholar-3.png" alt="">
                    <h6 class="name">Abida Anishah</h6>
                    <p class="about-scholar">The Mosque is still under development in some sectors and is in need of your
                        support and contribution.</p>
                </div> --}}
            </div>
            <div class="text-center">
                <a href="{{route('scholar')}}" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
            </div>
        </div>
    </section>
@endsection
