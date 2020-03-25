<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.12.0/css/all.css">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="../css/mobile-style.css">
    <!-- <script src="main.js"></script> -->
    
       <!-- animate.css -->
    
    <link rel="stylesheet" href="{{ asset('plugins/wow/animate.css') }}" media="all" type="text/css">
    <script src="{{ asset('plugins/wow/wow.min.js') }}"></script>
    <script>
         new WOW().init();
    </script>

    <!-- end animate.css -->

</head>

<body>

    <header>

        <div class="container-fluid p-0">
            <nav class="navbar navbar-expand-lg ">
            <img src="{{ asset('dist/img/logopics/lpulogo.jpg') }}" alt="" style="width: 65px; height: 55px;border-radius: 50%;">
                <a class="navbar-brand" href="#">LRMS</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                    aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="fas fa-align-right text-light"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarNav">
                    <div class="mr-auto"></div>
                    <ul class="navbar-nav">
                        <li class="nav-item active">
                            <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/dashboard') }}">Dashboard</a>
                        </li>
                        <!-- <li class="nav-item">
                            <a class="nav-link" href="#">Price</a>
                        </li> -->
                        <li class="nav-item">
                            <a class="nav-link" href="{{ url('/About') }}">About</a>
                        </li>
                      <!--   <li class="nav-item">
                        @if (Route::has('login'))
                           <div class="top-right links">
                        @if (Auth::check())
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/home') }}">Home</a>
                    </li>
                        @else
                        <li class="nav-item">
                        <a class="nav-link" href="{{ url('/login') }}">Login</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/register') }}">Register</a>
                    </li>
                        @endif
                        </div>
                        @endif
                        </li> -->
                        <li class="nav-item">

                        @if (Auth::guest())
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">Login</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">Register</a>
                            </li>
                        @else
                            <li class="dropdown nav-item">
                                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif
                    </li>
                    </ul>
                </div>
            </nav>
        </div>
        <div class="container text-center">
            <div class="row">
                <div class="col-md-7 col-sm-12">
                    <h6>Lovely Room</h6>
                    <h1>MANAGEMENT SYSTEM</h1>
                    <p>
                    Lpu consisted of large number of building so it become important to manage the allocation od room easily.
                    </p>
                    <button class="btn btn-light px-5 py-2">Book Know</button>
                </div>
                <div class="col-md-5 col-sm-12 h-25">
                    <img src="{{ asset('dist/img/logopics/newheader-img.png') }}" alt="Books">
                </div>
            </div>
        </div>
    </header>
    <!-- main part -->
    <main>
        <section class="section-1">
            <div class="container text-center">
                <div class="row">
                    <div class="col-md-6">
                        <div class="pray">
                            <img src="{{ asset('dist/img/logopics/narendra modi.webp') }}" alt="pray">
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="clearfix wow wobble panel text-left">
                            <h1>Prime Minister, Shri Narendra Modi</h1>
                            <p class="pt-4">
                            ``Jai Jawan, Jai Kisan, Jai Vigyan, Jai Anusandhan: PM Modi at 106th Science Congress``
                            </p>
                            <p>
                            The Prime Minister, Shri Narendra Modi, today delivered the inaugural address at the 106th session of
                             the Indian Science Congress.Reflecting on the theme of the event this year - ‘Future India: Science and Technology’ 
                             - the Prime Minister said that India's true strength will be in connecting its science, technology and innovation, 
                             with its people.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-2 container-fluid p-0">
            <div class="cover">
                <div class="content text-center">
                    <h1>UNBEATABLE PLACEMENT RECORD</h1>
                    <p>
                        From Google to Microsoft, LPU Students are working with top brands at packages of over Rs. 1 Crore 
                    </p>
                </div>
            </div>
            <div class="container-fluid text-center">
                <div class="numbers d-flex flex-md-row flex-wrap justify-content-center">
                    <div class="rect">
                        <h1 class="counter">1000</h1>
                        <p>housands of LPU sudents have got placed in top MNCs in USA, UK, Canada, Australia etc.</p>
                    </div>
                    <div class="rect">
                        <h1 class="counter">600</h1>
                        <p>Offers alone made by Ten Fortune 500 companies including Amazon, Xerox, HP to 2017 batch students.</p>
                    </div>
                    <div class="rect">
                        <h1 class="counter">610</h1>
                        <p>Students hired by cognizant in a single day. Highest in North India till date.</p>
                    </div>
                    <div class="rect">
                        <h1 class="counter">500</h1>
                        <p>Multinational & National companies have recruited LPU students.</p>
                    </div>
                </div>
            </div>

            <div class="purchase text-center">
                <h1>Meet LPU Alumni</h1>
                <p>
                    letters, as opposed to using 'Content here, content here', making it look like readable
                    <div class="cards">
                        <div class="d-flex flex-row justify-content-center flex-wrap">
                            <!-- first card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="title">
                                        <h5 class="card-title">Tanya Arora</h5>
                                    </div>
                                    <p class="card-text">
                                        <img style="" src="{{ asset('dist/img/logopics/tanya-arora.jpg') }}" alt="">
                                    </p>
                                    <div class="pricing">
                                        <h6>LPU Student Tanya Arora hired by Microsoft at a package of INR 42 Lac</h6>
                                        <!-- <a href="" class="btn btn-dark px-5 py-2 mb-5">Purchase Now</a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- Second card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="title">
                                        <h5 class="card-title">LPU alumni</h5>
                                    </div>
                                    <p class="card-text">
                                        <img style="" src="{{ asset('dist/img/logopics/all.jpg') }}" alt="">    
                                    </p>
                                    <div class="pricing">
                                        <h6>Offers of Rs. 1 Crore from Apple, Google etc are now becoming the norm!</h6>
                                        <!-- <a href="" class="btn btn-dark px-5 py-2 mb-5">Purchase Now</a> -->
                                    </div>
                                </div>
                            </div>
                            <!-- third card -->
                            <div class="card">
                                <div class="card-body">
                                    <div class="title">
                                        <h5 class="card-title">LPU alumni</h5>
                                    </div>
                                    <p class="card-text">
                                        <img src="{{ asset('dist/img/logopics/cognizant.jpg') }}" alt="">  
                                    </p>
                                    <div class="pricing">
                                    <h6>Record placements with over 610 hired on a single day by Cognizant.</h6>
                                        <!-- <a href="" class="btn btn-dark px-5 py-2 mb-5">Purchase Now</a> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </p>
            </div>
        </section>
        <!-- <section class="section-3 container-fluid p-0 text-center">
            <div class="row">
                <div class="col-md-12 col-sm-12">
                    <h1>Download Our App For all platforms</h1>
                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been
                        the industry's standard dummy text ever since the 1500s, when an
                        unknown printer took a galley of type and scrambled it to make a type specimen book.
                    </p>
                </div>
            </div>
            <div class="platform row">
                <div class="col-md-6 col-sm-12 text-right">
                    <div class="desktop shadow-lg">
                        <div class="d-flex flex-row justify-content-center">
                            <i class="fas fa-desktop fa-3x py-2 pr-3">
                                <div class="text text-left">
                                    <h3 class="pt-1 m-0">Desktop</h3>
                                    <p class="p-0 m-0">On Website</p>
                                </div>
                            </i>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 text-left">
                    <div class="desktop shadow-lg">
                        <div class="d-flex flex-row justify-content-center">
                            <i class="fas fa-mobile-alt fa-3x py-2 pr-3">
                                <div class="text text-left">
                                    <h3 class="pt-1 m-0">Mobil</h3>
                                    <p class="p-0 m-0">On Play store</p>
                                </div>
                            </i>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->


        <section class="section-4">
            <div class="container text-center">
                <h1 class="text-dark">LPU strikes deals with Google, SAP, Oracle etc to offer free industry training to students!</h1>
                <!-- <p class="text-secondary">Lorem lpsam dolor sit amet.</p> -->

            </div>
            <div class="team row">
                <div class="col-md-4 sm-12 text-center">
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-img-top">
                            <img src="{{ asset('dist/img/logopics/sap.jpg') }}" alt="Member" class="img-fluid border-radius p-4">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">LPU Students to be trained on SAP Business Suite</h3>
                            <p class="card-text">A training that costs over Rs. 3 Lac is provided to LPU students of B.Tech.,
                                         BCA, MCA, MBA, M.Com., BBA (Hons.), B.Com (Hons.),etc. completely free. Students can get training
                                          in SAP Business Process Modules, leading to SAP Consultant Certification.
                            </p>
                            <!-- <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                            <p class="text-black-50">CEO at WISSEN</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12">
                    <!-- Carosel started -->
                    <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active text-center">
                                <!-- card 2-->
                                <div class="card mr-2 d-inline-block shadow-lg">
                                    <div class="card-img-top">
                                        <img src="{{ asset('dist/img/logopics/google.jpg') }}" alt="Member"
                                            class="img-fluid border-radius p-4">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">LPU Collaboration with Google</h3>
                                        <p class="card-text">Lovely Professional University has collaborated with Google for providing Android
                                         specialization training to its engineering students within the campus.
                                         LPU sets the record of Highest Engineering Placements in North India for Three consecutive years.
                                         LPU alumni can be found in most top global brands like Apple.
                                        </p>
                                        <!-- <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                                        <p class="text-black-50">CEO at WISSEN</p> -->
                                    </div>
                                </div>
                            </div>
                            <div class="carousel-item text-center">
                                <!-- card-3 -->
                                <div class="card mr-2 d-inline-block shadow-lg">
                                    <div class="card-img-top">
                                        <img src="{{ asset('dist/img/logopics/ranking.jpg') }}" alt="Member"
                                            class="img-fluid border-radius p-4">
                                    </div>
                                    <div class="card-body">
                                        <h3 class="card-title">LPU Ranks among the Top Universities of India in more than 20 Prestigious Researches And Rankings</h3>
                                        <p class="card-text">LPU has been consistently ranked as top university in various areas like placements, quality education, industry interface,
                                             infrastructure, international relations etc.
                                        </p>
                                        <!-- <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a> -->
                                        <!-- <p class="text-black-50">CEO at WISSEN</p> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-12 text-center">
                    <!-- card-4 -->
                    <div class="card mr-2 d-inline-block shadow-lg">
                        <div class="card-img-top">
                            <img src="{{ asset('dist/img/logopics/oracle.jpg') }}" alt="Member" class="img-fluid border-radius p-4">
                        </div>
                        <div class="card-body">
                            <h3 class="card-title">Now get Oracle Certification Training at LPU</h3>
                            <p class="card-text">LPU students can avail training in Oracle's popular tracks (BI, Big Data and & IoT)
                             leading to OCA (Oracle Certified Administrator) certification.
                             This training, which usually costs over Rs. 1.5 Lac, is provided for free to LPU students Certification.
                            </p>
                            <!-- <a href="#" class="text-secondary text-decoration-none">Go Somewhere</a>
                            <p class="text-black-50">CEO at WISSEN</p> -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

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
    <!-- <div>
        <script type="text/javascript">
            // let navbar = $(".navbar");

            // $(window).scroll(function () {
            //     // console.log(window.innerHeight);
            //     // console.log($(".section-2").offset().top);
            //     let oTop = $('.section-2').offset().top - window.innerHeight;
            //     ($(window).scrollTop() > oTop) {
            //         navbar.addClass("sticky")
            //     } else {
            //         navbar.removeClass("sticky");
            //     }
            // });


            $(window).on("scroll", function () {
                if ($(window).scrollTop()) {
                    $('nav').addClass('black');
                } else {
                    $('nav').removeClass('black');
                }
            })
        </script>
    </div> -->



    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
      <script src="{{ asset('plugins/counter/jquery.counterup.min.js') }}"></script>
    <script src="{{ asset('plugins/counter/jquery.waypoints.min.js') }}"></script>
    <script>
     jQuery(document).ready(function($) {
            $('.counter').counterUp({
                delay: 10,
                time: 1000
            });
        });
    </script>
</body>

</html>