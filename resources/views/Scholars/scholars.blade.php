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
                    <li><a href="{{route('scholar')}}" class="active">Scholars</a></li>
                </ul>
            </div>
        </div>
    </section>
    <!--=====================================-->
    <!--=       Scholars Area Start         =-->
    <!--=====================================-->
    <section class="scholars sec-pad sec-mar mb-none-on-mobile  scholars-bg">
        <div class="container">
            <div class="heading">
                <h2 class="title clr-primary">Islamic Scholars</h2>
                <p>It is the responsibility of every Muslim to serve for DEEN</p>
            </div>
            <div class="row offset-lg-2 text-center justify-content-center">
                @foreach ($scholars as $scholar)
                    
                
                <div class="col-xl-4 col-lg-4 col-md-4 mb-5 ">
                    <div class="scholar-box text-center">
                        <img src="{{$scholar->image}}" style="width:290px;height:250px" alt="">
                        <div class="content-box">
                            <h6 class="name">{{$scholar->name}}</h6>
                            <p class="about-scholar">
                                {!! Str::limit(strip_tags($scholar->description), 100) !!} 
                            </p>
                            <a href="{{ route('scholar.detail', $scholar->id) }}" class="al-buraq-btn btn-fill-primary btn-lg">View Detail</a>
                        </div>
                    </div>
                </div>
                @endforeach
                {{-- <div class="col-xl-4 col-lg-4 col-md-4 mb-5 ">
                    <div class="scholar-box text-center">
                        <img src="assets/media/scholars/scholar-2.png" alt="">
                        <div class="content-box">
                            <h6 class="name">Molana Abdus Salam</h6>
                            <p class="about-scholar">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididun.</p>
                            <a href="scholars-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 mb-5 ">
                    <div class="scholar-box text-center">
                        <img src="assets/media/scholars/scholar-3.png" alt="">
                        <div class="content-box">
                            <h6 class="name">Abida Anishah</h6>
                            <p class="about-scholar">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididun.</p>
                            <a href="scholars-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 mb-5 ">
                    <div class="scholar-box text-center">
                        <img src="assets/media/scholars/scholar-4.png" alt="">
                        <div class="content-box">
                            <h6 class="name">Ayesha Manaf</h6>
                            <p class="about-scholar">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididun.</p>
                            <a href="scholars-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 mb-5 ">
                    <div class="scholar-box text-center">
                        <img src="assets/media/scholars/scholar-5.png" alt="">
                        <div class="content-box">
                            <h6 class="name">Molana Abdul Quds</h6>
                            <p class="about-scholar">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididun.</p>
                            <a href="scholars-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">View Detail</a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-4 col-md-4 mb-5 ">
                    <div class="scholar-box text-center">
                        <img src="assets/media/scholars/scholar-6.png" alt="">
                        <div class="content-box">
                            <h6 class="name">Saliha Kareem</h6>
                            <p class="about-scholar">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod
                                tempor incididun.</p>
                            <a href="scholars-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">View Detail</a>
                        </div>
                    </div>
                </div> --}}
            <div class="paginate">
                {{ $scholars->links() }}
            </div>
            </div>
        </div>
    </section>
@endsection
