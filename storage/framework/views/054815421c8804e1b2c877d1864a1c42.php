
<?php $__env->startSection('content'); ?>
    <!--=====================================-->
    <!--=      Breadcrumb Area Start        =-->
    <!--=====================================-->
    <section class="breadcrumb">
        <div class="container">
            <div class="breadcrumb-content">
                <ul>
                    <li><a href="<?php echo e(route('Home.index')); ?>">Home</a></li>
                    <li><a href="<?php echo e(route('about')); ?>" class="active">About</a></li>
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
            <img src="<?php echo e(asset('assets/media/about/about-3.png')); ?>" alt="">
            <div class="col-lg-6 offset-lg-3 mt-3">
                <h6 class="hadith">Prophet Muhammad (S.A.W.W): “If you wish for Allah to multiply your wealth, then purify
                    it (through zakat).”</h6>
            </div>
            <div class="content">
                <h4 class="heading">Our Madressa's </h4>
                <p style=" text-align: justify">
                Al-Marsoos Islamic Institute stands as a dynamic and multifaceted center dedicated to providing a
                comprehensive platform for Islamic education and services. With a diverse array of courses covering
                fundamental Quranic studies, advanced Islamic jurisprudence, and specialized Nikah courses, the institute is
                committed to fostering holistic development among individuals of all ages and backgrounds. This commitment
                extends beyond the confines of traditional education, creating a modern learning environment that embraces
                technology and interactive teaching methods.
                </p>
                <p style=" text-align: justify">
                At the core of Al-Marsoos's mission is its recognition of the pivotal role that marriage plays in
                individuals' lives and the broader community. The institute takes a unique approach by offering specialized
                Nikah courses, providing comprehensive pre-marital counseling, guidance on Islamic principles of marriage,
                and practical tips for sustaining a healthy and harmonious marital life. These courses not only prepare
                couples for their life journey together but also contribute to the strength and unity of the community
                through resilient and well-founded families.
                </p>
                <p style=" text-align: justify">
                In addition to its educational offerings, Al-Marsoos actively engages with the community through various
                outreach programs. These initiatives encompass charity drives, community events, and collaborations with
                local organizations to address social issues. The institute understands the importance of fostering a sense
                of unity and shared responsibility among its members, contributing to the overall well-being of the broader
                community.
                </p>
                <p style=" text-align: justify">
                The institute places a strong emphasis on nurturing the spiritual growth of its students. Regular Islamic
                lectures, spiritual retreats, and Quranic recitation circles create an atmosphere of reflection and
                connection with the divine. Al-Marsoos believes that a holistic education is incomplete without addressing
                the spiritual needs of individuals, striving to instill a profound sense of piety and mindfulness in its
                students.
                </p>
                <p style=" text-align: justify" >
                Al-Marsoos Islamic Institute is not merely a place of learning; it is a hub for spiritual growth and
                community support. Its commitment to providing a modern and technologically advanced learning environment
                ensures that the educational experience is both engaging and accessible. Leveraging online platforms,
                multimedia resources, and interactive teaching methods, the institute enables students to benefit from the
                wealth of Islamic knowledge regardless of their physical location.
                </p>
                <p style=" text-align: justify" >

                The institute takes pride in being an inclusive and welcoming space for individuals from diverse
                backgrounds. It actively promotes mutual respect, understanding, and cooperation among its students,
                fostering an environment where everyone feels valued and accepted. Al-Marsoos stands as a beacon for those
                seeking comprehensive Islamic education and services, playing a pivotal role in shaping a brighter and more
                enlightened future for individuals who aspire to deepen their understanding of Islam and its teachings.
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
            <a href="<?php echo e(route('contact')); ?>" class="al-buraq-btn btn-fill-primary btn-lg">Contact Now</a>
        </div>
    </section>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH F:\laraval\Al_marsoos\resources\views/MorePages/about.blade.php ENDPATH**/ ?>