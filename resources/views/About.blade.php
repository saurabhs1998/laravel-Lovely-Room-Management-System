@extends('layouts.admin')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="clearfix wow bounceInLeft col-md-6 col-sm-6">
            <div class="filenew">
                <h1 style="">About Us</h1>
                <h3 style="text-transform: none;"> Explore Hear</h3>
                <hr class="file2new">
                <h5 class="file3new">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry.
                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
                    when an unknown printer took a galley of type and scrambled it to make a type specimen book. 
                </h5>
                <a href="feedback1.php" class="btn btnD3 file4new">Click hear</a>
            </div>
        </div>
        <div class="clearfix wow bounceInRight col-sm-6 Feedback-start">
            <div style="margin-top: 60px;">
                <img src="{{ asset('dist/img/logopics/login.jpg') }}" class="imgfile">
            </div>
        </div>
    </div>
</div>

<!-- new -->
<section class="section-2 container-fluid p-0">
            <div class="clearfix wow bounceInUp purchase text-center">
                <h1>Meet Our Team Member</h1>
                <p>
                    letters, as opposed to using 'Content here, content here', making it look like readable
                    <div class="cards">
                        <div class="d-flex flex-row justify-content-center flex-wrap">
                            <!-- first card -->
                            <div class="clearfix wow bounceInLeft card">
                                <div class="card-body">
                                    <div class="title">
                                        <h5 class="card-title">Saurabh Singh</h5>
                                    </div>
                                    <p class="card-text">
                                        <img style="" src="{{ asset('dist/img/logopics/DSC_0396.jpg') }}" alt="">
                                    </p>
                                    <div class="pricing">
                                        <h6>Full Stack Developer</h6>
                                        <!-- <a href="" class="btn btn-dark px-5 py-2 mb-5">Purchase Now</a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- Second card -->
                            <div class="clearfix wow bounceInUp card">
                                <div class="card-body">
                                    <div class="title">
                                        <h5 class="card-title">Dilip Kumar</h5>
                                    </div>
                                    <p class="card-text">
                                        <img style="" src="{{ asset('dist/img/logopics/_DSC0041.jpg') }}" alt="">    
                                    </p>
                                    <div class="pricing">
                                        <h6>Full Stack Developer</h6>
                                        <!-- <a href="" class="btn btn-dark px-5 py-2 mb-5">Purchase Now</a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- third card -->
                            <div class="clearfix wow bounceInRight card">
                                <div class="card-body">
                                    <div class="title">
                                        <h5 class="card-title">Ravi Mohan Singh</h5>
                                    </div>
                                    <p class="card-text">
                                        <img src="{{ asset('dist/img/logopics/raviphoto.jpg') }}" alt="">  
                                    </p>
                                    <div class="pricing">
                                    <h6>Full Stack Developer</h6>
                                        <!-- <a href="" class="btn btn-dark px-5 py-2 mb-5">Purchase Now</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>
            </div>
        </section>








<!-- end  new -->


<!-- <section class="section-5">
     <div class="container">
        <div class="row row-100">
            <div class="col-md-12 col-sm-12 text-center teammem">
                <h1 style="color: #B24020;">Team Member</h1>
            </div>
            <div class="col-md-4 col-sm-4 divform">
                <h1 class="text-center">Saurabh Singh</h1>
                <div class="clearfix wow swing newimg">
                    <img src="../assest/DSC_0396.jpg" alt="newimg">
                    <p class="paragraph"><a href="#"><i class="fab fa-linkedin"></i></a></p>
                </div>

            </div>

            <div class="col-md-4 col-sm-4 divform">
                <h1 class="text-center">Dileep Kumar</h1>
                <div class="clearfix wow swing newimg">
                    <img src="../assest/DSC_0396.jpg" alt="newimg">
                    <p class="paragraph"><a href="#"><i class="fab fa-linkedin"></i></a></p>
                </div>
            </div>


            <div class="col-md-4 col-sm-4 divform">
                <h1 class="text-center">Ravi Mohan Singh</h1>
                <div class="clearfix wow swing newimg">
                    <img src="../assest/DSC_0396.jpg" alt="newimg">
                    <p class="paragraph"><a href="#"><i class="fab fa-linkedin"></i></a></p>
                </div>
            </div>
       </div>
     </div>
</section> -->

<section class="section-8">
    <div class="container">
        <div class="row">
            <div class="clearfix wow bounceInUp col-md-12 col-sm-12 content">
                <h1 class="text-center file5new">
                LPU is ranked No. 2 in Management (Outreach and Inclusivity) by NIRF 2018 ranking released by MHRD, Government of India.
                </h1>
                <p class="text-center">Ranking shoulder to shoulder with IIMs is accredited to Lovely Professional University's
                     commitment to teaching excellence.NIRF Ranking was released by Ministry of Human Resource Department,
                      Government of India in April 2018.
                </p>
            </div>

        </div>
    </div>
</section>

<section class="section-7">
    <div class="container">
        <div class="row">
           <div class="clearfix wow bounceInLeft col-md-3 col-sm-3">
               <h1 class="newicon"><i class="fab fa-amazon"></i></h1>
           </div>
           <div class="clearfix wow bounceInLeft col-md-3 col-sm-3">
               <h1 class="newicon"><i class="fab fa-hackerrank"></i></h1>
           </div>
           <div class=" clearfix wow bounceInRight col-md-3 col-sm-3">
               <h1 class="newicon"><i class="fab fa-aws"></i></h1>
           </div>
           <div class="clearfix wow bounceInRight col-md-3 col-sm-3">
               <h1 class="newicon"><i class="fab fa-apple"></i></h1>
            </div>
        </div> 
    </div>
</section>

<footer>

<div class="container-fluid p-0">
    <div class="row text-left">
        <div class="col-md-5 col-md-5">
            <h1 class="text-light">About Us</h1>
            <p class="text-muted">India's Largest University* Lovely Professional University, Jalandhar-Delhi,
                     G.T. Road, Phagwara, Punjab (INDIA) -144411.
            </p>
            <p class="pt-4 text-muted">
                Website:
                <span> http://www.lpu.in</span>
            </p>
        </div>
        <div class="col-md-5">
            <h4 class="text-light">Newsletter</h4>
            <p class="text-muted">Stay Update</p>
            <form class="form-inline">
                <div class="col pt-">
                    <div class="input-group pr-5">
                        <input type="text" class="form-control bg-dark text-white" placeholder="Email">
                        <div class="input-group-prepend">
                            <div class="input-group-text">
                                <i class="fas fa-arrow-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-2 col-sm-12">

            <h4 class="text-light">Follow Us</h4>
            <p class="text-muted">Lets us be social</p>
            <div class="column">
                <i class="fab fa-facebook-f"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-twitter"></i>
                <i class="fab fa-youtube"></i>
            </div>
        </div>
    </div>
</div>
</footer>

@endsection