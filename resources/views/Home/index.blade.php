@extends('layout.layout')
@section('content')
  <!--=====================================-->
        <!--=         Banner Area Start         =-->
        <!--=====================================-->
        <section class="banner style-1">
            <div class="container">
                <div class="banner-content align-items-center" data-sal="slide-up" data-sal-duration="1000" data-sal-delay="100">
                    <img alt="ayat" src="assets/media/banner/banner-ayat.png">
                    <p>And We have sent you (O Muhammad SAWW) not but as a mercy for the ‘Almin (mankind, jinns and all that exists)</p>
                    <a href="{{route('courses.view')}}" class="al-buraq-btn btn-fill-primary btn-lg">Read More</a>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=      Islam Pillars Area Start     =-->
        <!--=====================================-->
        <section class="islam-pillars sec-pad bg-color-dark">
            <div class="container">
                <div class="heading">
                    <h2 class="title clr-primary">5 Pillars of Islam</h2>
                    <p class="clr-white">The Five Pillars are the core beliefs and practices of Islam</p>
                </div> 
                <div class="row">
                    <div class="col-xl col-lg-6 col-md-6 col-sm-6 p-0 ">
                        <div class="pillar-box">
                            <div class="content-box">
                                <h6 class="title">Shahada</h6>
                                <p class="content">“Ashadu an la ilaha illa-llah, wa ashadu anna muhammadur rasul ullah.” (Arabic)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="pillar-box">
                            <div class="content-box">
                                <h6 class="title">Salah</h6>
                                <p class="content">"Verily, Salah restrains (oneself) from shameful and unjust deeds" (Quran 29:45)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="pillar-box">
                            <div class="content-box">
                                <h6 class="title">Sawm</h6>
                                <p class="content">In Islam sawm means fasting from dawn until dusk during The Holy month of Ramadan</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl col-lg-6 col-md-6 col-sm-6 p-0">
                        <div class="pillar-box">
                            <div class="content-box">
                                <h6 class="title">Zakat</h6>
                                <p class="content">“If you wish for Allah to multiply your wealth, then purify it (through zakat).” -Prophet Muhammad (S.A.W.W)</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl col-lg-6 col-md-6 col-sm-6 offset-xl-0 offset-lg-3 offset-md-3 offset-sm-3 p-0">
                        <div class="pillar-box">
                            <div class="content-box">
                                <h6 class="title">Hajj</h6>
                                <p class="content">It is a physically demanding journey that offers a chance to wipe clean past sins and start anew before Allah.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=         About Area Start          =-->
        <!--=====================================-->
        <section class="about style-1 sec-pad">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <img src="assets/media/about/about-1.png" alt="mosque">
                    </div>
                    <div class="col-lg-6 col-12">
                        <h3 class="title">About Al-Marsoos</h3>
                        <p>It is the responsibility of every Muslim to serve for DEEN <br><br> We established our center in 1954, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <p class="hadith">Prophet Muhammad (S.A.W.W): “If you wish for Allah to multiply your wealth, then purify it (through zakat).”</p>
                        <a href="{{route('about')}}" class="al-buraq-btn btn-fill-primary btn-lg">Read More</a>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=     Daily Update Area Start       =-->
        <!--=====================================-->
      

        <section class="daily-update sec-pad bg-color-light">
            <div class="container">
                <div class="heading">
                    <h2 class="title">Quran Translation</h2>
                    <p class="clr-dark-grey">Your daily learning and process of understanding the Holy Quran</p>
                </div>
                <div class="text-center">
                    <h6 class="bismillah">oبِسۡمِ ٱللَّهِ ٱلرَّحۡمَٰنِ ٱلرَّحِيمِ</h6> 
                    <h4 dir="rtl" lang="ar" class="ayat">قُلۡ هُوَ ٱللَّهُ أَحَدٌo  ٱللَّهُ ٱلصَّمَدُo  لَمۡ يَلِدۡ وَلَمۡ يُولَدۡo وَلَمۡ يَكُن لَّهُۥ كُفُوًا أَحَدُۢo</h4>
                    <p class="ayat-translation">In the name of Allah, the Entirely Merciful, the Especially Merciful.</p><br>
                    <p class="ayat-translation">Say, “He is Allah, [who is] One. Allah, the Eternal Refuge. He neither begets nor is born. <br> Nor is there to Him any equivalent.”</p><br>
                </div>
                <div class="prayer-time text-center">
                    <h6>Daily Prayer Timings</h6>
                    <p>in  Pakistan </p>
                    <div class="row d-flex justify-content-between boxes-row">
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="timing-box">
                                <p class="name" >Al-Fajr</p>
                                <h6 class="time" id="Fajr">Loading</h6>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="timing-box">
                                <p class="name" >Az-Zuhr</p>
                                <h6 class="time" id="Dhuhr">Loading</h6>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="timing-box">
                                <p class="name">Al-Asar</p>
                                <h6 class="time" id="Asr">Loading</h6>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="timing-box">
                                <p class="name">Al-Maghrib</p>
                                <h6 class="time" id="Maghrib">Loading</h6>
                            </div>
                        </div>
                        <div class="col-lg-2 col-md-2 col-sm-4">
                            <div class="timing-box">
                                <p class="name">Al-Ishaa</p>
                                <h6 class="time" id="Isha">Loading</h6>
                            </div>
                        </div>
                      </div>
                </div>

            </div>
        </section>
        
        <!--=====================================-->
        <!--=        Services Area Start     =-->
        <!--=====================================-->
        {{-- <section class="services style-1 sec-pad">
            <div class="container">
                <div class="heading">
                    <h2 class="title">Services</h2>
                    <p>It is the responsibility of every Muslim to serve for DEEN</p>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-card">
                            <img src="assets/media/services/service-1.png" alt="">
                            <div class="content-box">
                                <h6 class="title">Hadith Courses</h6>
                                <p class="description">Lorem ipsum dolor sit amet, do  consectetur adipiscing elit, sedeiusmod tempor incididunt labore et dolore magna aliqua.</p>
                                <a href="service-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="service-card">
                            <img src="assets/media/services/service-2.png" alt="">
                            <div class="content-box">
                                <h6 class="title">Nikah Registration</h6>
                                <p class="description">Lorem ipsum dolor sit amet, do  consectetur adipiscing elit, sedeiusmod tempor incididunt labore et dolore magna aliqua.</p>
                                <a href="service-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">Read More</a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 offset-lg-0 offset-md-3">
                        <div class="service-card">
                            <img src="assets/media/services/service-3.png" alt="">
                            <div class="content-box">
                                <h6 class="title">Funeral Services</h6>
                                <p class="description">Lorem ipsum dolor sit amet, do  consectetur adipiscing elit, sedeiusmod tempor incididunt labore et dolore magna aliqua.</p>
                                <a href="service-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">Read More</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> --}}
        
        <!--=====================================-->
        <!--=       Sermons Area Start          =-->
        <!--=====================================-->
        <section class="sermons sec-pad bg-color-light">
            <div class="container">
                <div class="heading">
                    <h2 class="title">Courses</h2>
                    <p>Watch and learn from quality courses</p>
                </div>
                <div class="row">
                    @foreach (App\Models\Course::latest()->take(3)->get() as $course)
                        
                    
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="sermon-box">
                            <div class="sermon-img">
                                <img src="{{$course->image}}" style=" height:300px; width:447px;" height="100px"  alt="" class="image">
                                <div class="overlay">
                                    <a href="#" class="icon" data-bs-toggle="modal" data-bs-target="#videoModal"></i></a>
                                </div>
                            </div>
                            <h6 class="title">{{$course->name}}</h6>
                            <p class="description">
                                {!! Str::limit(strip_tags($course->description), 100) !!}
                            </p>
                            <a href="{{ route('Course.detail', $course->id) }}" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                        </div>
                    </div>
                    @endforeach
                    <div class="modal fade" id="videoModal" tabindex="-1" role="dialog" aria-hidden="true">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-body">
                                    <iframe style="width: 100%;height:400px;border:0" src="https://www.youtube.com/embed/B0-0PvAAgzg"
                                        title="360 Product Video / Fashion Feature"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=        Events Area Start     =-->
        <!--=====================================-->
        <section class="events sec-pad">
            <div class="container">
                <div class="heading">
                    <h2 class="title">Events</h2>
                    <p>The up coming events and services in our Mosque</p>
                </div>
                <div class="row">
                    @foreach (App\Models\Event::latest()->take(3)->get() as $event)
                    <div class="col-lg-4 col-md-6 col-12">
                        <div class="event-card">
                            <img src="{{$event->image}}" style=" height:300px; width:447px;" alt="">
                            <div class="content-box">
                                <h6 class="title">{{$event->name}}</h6>
                                <ul class="list-unstyled">
                                    <li class="date"><i class="fas fa-calendar-alt"></i> {{$event->date}}</li>
                                    <li><i class="fas fa-map-marker-alt"></i>{{$event->address}}</li>
                                </ul>
                                <p class="description">
                                    {!! Str::limit(strip_tags($event->description), 100) !!}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-4 col-md-6 col-12">
                        <div class="event-card">
                            <img src="assets/media/events/event-2.png" alt="">
                            <div class="content-box">
                                <h6 class="title">Ramadan Fund Raising</h6>
                                <ul class="list-unstyled">
                                    <li class="date"><i class="fas fa-calendar-alt"></i> 08-01-2023</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Park Lane, NY</li>
                                </ul>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 col-12 offset-lg-0 offset-md-3">
                        <div class="event-card">
                            <img src="assets/media/events/event-3.png" alt="">
                            <div class="content-box">
                                <h6 class="title">Islamophobia Rally</h6>
                                <ul class="list-unstyled">
                                    <li class="date"><i class="fas fa-calendar-alt"></i> 09-01-2023</li>
                                    <li><i class="fas fa-map-marker-alt"></i>Park Lane, NY</li>
                                </ul>
                                <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam.</p>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=        Scholars Area Start     =-->
        <!--=====================================-->
        <section class="scholars sec-pad bg-color-light">
            <div class="container">
                <div class="heading">
                    <h2 class="title">Islamic Scholars</h2>
                    <p>It is the responsibility of every Muslim to serve for DEEN</p>
                </div>
                <div class="scholars-slider justify-content-center">
                    @foreach (App\Models\Scholars::latest()->take(4)->get() as $scholar)
                        
                 
                    <div class="scholar-box text-center">
                        <img src="{{$scholar->image}}" style="width:290px;height:250px" alt="">
                        <h6 class="name">{{$scholar->name}}</h6>
                        <p class="about-scholar">
                            {!! Str::limit(strip_tags($scholar->description), 100) !!} 
                        </p>
                    </div>
                    @endforeach
                    {{-- <div class="scholar-box text-center">
                        <img src="assets/media/scholars/scholar-2.png" alt="">
                        <h6 class="name">Mufti Abd Manaf</h6>
                        <p class="about-scholar">The Mosque is serving day and night, educating people about Islam and teachings of Quran for children.</p>
                    </div>
                    <div class="scholar-box text-center">
                        <img src="assets/media/scholars/scholar-3.png" alt="">
                        <h6 class="name">Abida Anishah</h6>
                        <p class="about-scholar">The Mosque is still under development in some sectors and is in need of your support and contribution.</p>
                    </div>
                    <div class="scholar-box text-center">
                        <img src="assets/media/scholars/scholar-1.png" alt="">
                        <h6 class="name">Molana Abdus Salam</h6>
                        <p class="about-scholar">The Mosque is still under development in some sectors and is in need of your support and contribution.</p>
                    </div>
                    <div class="scholar-box text-center">
                        <img src="assets/media/scholars/scholar-2.png" alt="">
                        <h6 class="name">Mufti Abd Manaf</h6>
                        <p class="about-scholar">The Mosque is still under development in some sectors and is in need of your support and contribution.</p>
                    </div>
                    <div class="scholar-box text-center">
                        <img src="assets/media/scholars/scholar-3.png" alt="">
                        <h6 class="name">Abida Anishah</h6>
                        <p class="about-scholar">The Mosque is still under development in some sectors and is in need of your support and contribution.</p>
                    </div> --}}
                </div>
                <div class="text-center">
                <a href="{{route('scholar')}}" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                </div>
            </div>
        </section>
        <!--=====================================-->
        <!--=        Blogs Area Start     =-->
        <!--=====================================-->
        <section class="blogs sec-pad">
            <div class="container">
              
                <div class="heading">
                    <h2 class="title">Islamic Blogs</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
                <div class="row">
                    @foreach ($blogs->slice(0, 2) as $blog)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="row mb-4">
                            <div class="col-xl-6">
                                <img src="{{$blog->image}}" style="height:200 ; width:304px" alt="">
                            </div>
                            <div class="col-xl-6">
                                <div class="content-box">
                                    <h6 class="title">{{ $blog->title }}</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i>{{ $blog->created_at->format('M d, Y') }}</li>
                                        {{-- <li><i class="fas fa-user"></i>Mufti Maqsud</li> --}}
                                    </ul>
                                    <p class="description">{!! Str::limit(strip_tags($blog->body), 200) !!}</p>
                                    <a href="{{ route('blog.detail', $blog->id) }}" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                <div class="row">
                    @foreach ($blogs->slice(-2) as $blog)
                    <div class="col-lg-6 col-md-6 col-12">
                        <div class="row mb-4">
                            <div class="col-xl-6">
                                <img src="{{$blog->image}}" style="height:200 ; width:304px" alt="">
                            </div>
                            <div class="col-xl-6">
                                <div class="content-box">
                                    <h6 class="title">{{ $blog->title }}</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i>{{ $blog->created_at->format('M d, Y') }}</li>
                                        {{-- <li><i class="fas fa-user"></i>Mufti Maqsud</li> --}}
                                    </ul>
                                    <p class="description">{!! Str::limit(strip_tags($blog->body), 200) !!}</p>
                                    <a href="{{ route('blog.detail', $blog->id) }}" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    {{-- <div class="col-lg-6 col-md-6 col-12">
                        <div class="row mb-4">
                            <div class="col-xl-6">
                                <img src="assets/media/blogs/blog-4.jpg" alt="">
                            </div>
                            <div class="col-xl-6">
                                <div class="content-box">
                                    <h6 class="title">Islamophobia</h6>
                                    <ul class="list-unstyled">
                                        <li><i class="fas fa-calendar-alt"></i>Nov 28, 2023</li>
                                        <li><i class="fas fa-user"></i>Mufti Maqsud</li>
                                    </ul>
                                    <p class="description">Lorem ipsum dolor sit amet, conec tetur adipisicing elit sed do eiusmod tempor incididunt ut labore.</p>
                                    <a href="blog-detail.html" class="al-buraq-btn btn-fill-primary btn-lg">Learn More</a>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </section>
@endsection()

@section('jscript')
<script>
    $(document).ready(function() {
        prayertime();
    });

    function prayertime() {
        let data = {
            expectsJson: true,
        };
        $.ajax({
            type: "GET",
            url: "{{ route('prayer.time') }}",
            data: {
            },
            success: function(response) {
                console.log(response);  
                var fajar = response.data.timings.Fajr;
                var zuhur = response.data.timings.Dhuhr;
                var asr = response.data.timings.Asr;
                var magrib = response.data.timings.Maghrib;
                var isha = response.data.timings.Isha;
                $('#Fajr').text(fajar);
                $('#Dhuhr').text(zuhur); 
                $('#Asr').text(asr);
                $('#Maghrib').text(magrib); 
                $('#Isha').text(isha); 

            },
            error: function() {
                alert("Error Fetching details.");
            }
        });
    }
   
</script>
@endsection
