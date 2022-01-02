<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Life Hospital</title>

    <meta name="csrf-token" content="{{csrf_token()}}">

    <!-- Favicon-->
    <link rel="icon" href="{{asset('logo/Nlogo4.jpeg')}}" type="image/gif" sizes="16x16">

    <!-- iconFont -->
    <link rel="stylesheet" type="text/css" href="{{asset('icon/icofont/icofont.min.css')}}">

    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="{{asset('custom/style.css')}}">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/css/search.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('frontend/icon/icofont/icofont.min.css')}}" type="text/css">

</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>

    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="{{route('index')}}">
                <img src="{{asset('logo/logoicon.png')}}" class="pl-5">
                                                             
                <div class="pr-5 pt-2" style="float:right;">
                    <img src="{{asset('logo/textlogo.png')}}" width="100" height="20"><h5 class="text-success">Hospital</h5>
                </div>
            </a>
        </div>
        <div class="humberger__menu__widget">

            @guest
            <div class="header__top__right__auth">
                <a href="{{route('register')}}"><i class="fa fa-user"></i> Register</a>
            </div>
            <div class="header__top__right__auth">
                <a href="{{route('login')}}"><i class="fa fa-user"></i> Login</a>
            </div>
            @else

            <div class="header__top__right__language">
                <img src="{{asset(Auth::user()->profile)}}" alt="" class="userprofile">
                <div> {{Auth::user()->name}} Account </div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#"> Profile </a></li>
                    <li><a href="#"> Order </a></li>
                    <li><a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout_form').submit();" >
                             Log Out
                         </a>

                        <form id="logout_form" action="{{route('logout')}}" method="post" style="display: none;">
                                        @csrf
                                        
                        </form>

                    </li>

                </ul>
            </div>
            @endif
            <div class="header__top__right__language">
                <img src="{{asset('frontend/img/language.png')}}" alt="">
                <div>English</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Myanmay</a></li>
                    <li><a href="#">English</a></li>
                </ul>
            </div>
        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active">
                    <a href="{{route('index')}}">Home</a>
                </li>
                <li><a href="#">Speciality</a>
                    <ul class="header__menu__dropdown">
                        @foreach($data[0] as $speciality)

                            <li><a href="{{route('speciality',$speciality->id)}}">{{$speciality->name}}</a></li>

                        @endforeach

                    </ul>
                </li>

                <li><a href="#">Doctors</a>
                        <ul class="header__menu__dropdown">

                            @foreach($data[1] as $doctor)

                                <li><a href="{{route('doctor',$doctor->id)}}">{{$doctor->name}}</a></li>

                            @endforeach
                        </ul>
                </li>
                <li><a href="{{route('package')}}">Package</a></li>
                <li><a href="{{route('contact')}}">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#"><i class="fa fa-twitter"></i></a>
            <a href="#"><i class="fa fa-linkedin"></i></a>
            <a href="#"><i class="fa fa-pinterest-p"></i></a>
        </div>
        <div class="humberger__menu__contact">
            <ul>
                <li><i class="fa fa-envelope"></i> hello@colorlib.com</li>
                <li>Free Shipping for all Order of $99</li>
            </ul>
        </div>
    </div>
    <!-- Humberger End -->

    <!-- Header Section Begin -->
    <header class="header">
        <div class="header__top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header__top__left">
                            <ul>
                                <li><i class="fa fa-envelope"></i>hello@newlife.com</li>
                                <li>
                                    <div class="has-search d-xl-block d-lg-block d-none ">
                                        <div class="input-group">
                                            <input class="form-control pl-4 border-right-0 border" type="search" placeholder="Search" id="">
                                            <span class="input-group-append searchBtn">
                                                <div class="input-group-text bg-transparent">
                                                    <i class="icofont-search"></i>
                                                </div>
                                            </span>
                                        </div>
                                    </div> 

                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="header__top__right">
                            <div class="header__top__right__social">
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            </div>

                            @guest

                            <div class="header__top__right__auth">
                                <a href="{{route('register')}}"><i class="fa fa-user"></i> Register </a>
                            </div>
                            <div class="header__top__right__auth">
                                <a href="{{route('login')}}"><i class="fa fa-user"></i> Login </a>
                            </div>

                            @else

                            <div class="header__top__right__language">
                                <img src="{{asset(Auth::user()->profile)}}" alt="" class="userprofile">
                                <div> {{Auth::user()->name}} Account </div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#"> Profile </a></li>
                                    <li><a href="#"> Order </a></li>
                                    <li><a href="javascript:void(0)" onclick="event.preventDefault(); document.getElementById('logout_form').submit();" > Sign Out </a>

                                    <form id="logout_form" action="{{route('logout')}}" method="post" style="display: none;">
                                        @csrf
                                        
                                    </form>
                                    </li>
                                </ul>
                            </div>

                            @endif

                            <div class="header__top__right__language">
                                <img src="{{asset('frontend/img/language.png')}}" alt="">
                                <div>English</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">Myanmar</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{route('index')}}">

                            <img src="{{asset('logo/logoicon.png')}}" class="pl-5">
                                                             
                            <div class="pr-5 pt-2" style="float:right;">
                                <img src="{{asset('logo/textlogo.png')}}" width="100" height="20"><h5 class="text-success">Hospital</h5>
                            </div>
                        </a>

                    </div>
                </div>
                <div class="col-lg-9">
                    <nav class="header__menu">
                        <ul>
                            <li class="active"><a href="{{route('index')}}">Home</a></li>
                            <li>
                                <a href="#">Speciality</a>
                                <ul class="header__menu__dropdown">

                                    @foreach($data[0] as $speciality)

                                    <li><a href="{{route('speciality',$speciality->id)}}">{{$speciality->name}}</a></li>

                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="#">Doctors</a>
                                <ul class="header__menu__dropdown">

                                    @foreach($data[1] as $doctor)

                                    <li><a href="{{route('doctor',$doctor->id)}}">{{$doctor->name}}</a></li>

                                    @endforeach
                                </ul>
                            </li>
                            <li><a href="{{route('package')}}">Package</a></li>
                            <li><a href="{{route('contact')}}">Contact</a></li>
                            <li><a href="{{route('patient.create')}}">Appointment</a></li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="humberger__open">
                <i class="fa fa-bars"></i>
            </div>
        </div>
    </header>
    <!-- Header Section End -->

    {{-- Search Bar --}}

    <div class="wrapper">
        <div class="search_box">
            <h3 class="pb-2 text-center display-5 text-success">Discover New Life International Hospital</h3>
            <input type="text" placeholder="what are you looking for?">
            <i class="icofont-search-2"></i>
        </div>
    </div>
    <div class="container" style="margin-top: -72px;">
        <div class="row ">
                <div class="shadow p-3 mb-3 col rounded px-0 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center" id="fontcolor" style="background-color: #25383C;">
                    <div class="searchicon">
                        <i class="icofont-doctor-alt"></i>
                    </div>
                    <a href="">
                        <h4>Find a Doctor</h4>
                        <p>Choose by name, speciality and more</p>
                    </a>
                </div>
                <div class="shadow p-3 mb-3 col rounded px-0 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center" id="fontcolor" style="background-color: #736E6D">
                    <div class="searchicon">
                        <i class="icofont-stethoscope"></i>
                    </div>
                    <a href="">
                        <h4>Send an Inquiry</h4>
                        <p>Ask about our treatments and services</p>
                    </a>
                </div>
                <div class="shadow p-3 mb-3 col rounded px-0 col-xl-4 col-lg-4 col-md-6 col-sm-12 col-12 text-center" id="fontcolor" style="background-color: #808000">
                    <div class="searchicon">
                        <i class="icofont-data"></i>
                    </div>
                    <a href="">
                        <h4>Make Appointment</h4>
                        <p>Schedule your visit online</p>
                    </a>
                </div>
        </div>
    </div>


    {{$slot}}

    {{-- Footer --}}

    <div class="whitespace d-xl-block d-lg-block d-md-none d-sm-none d-none pt-5"></div>

  <div class="container pb-5">
    <div class="row text-center pb-5">
      <div class="col-12">
        <h2 class="display-4"> News Letter </h2>
        <p>
          Subscribe to our newsletter and get 10% off your first purchase
        </p>

      </div>
      
      <div class="offset-2 col-8 offset-2 mt-5">
        <form>
          <div class="input-group mb-3">
            <input type="text" class="form-control form-control-lg px-5 py-3" placeholder="Recipient's username" aria-label="Recipient's username" aria-describedby="button-addon2" style="border-top-left-radius: 15rem; border-bottom-left-radius: 15rem">
              
              <div class="input-group-append">
                <button class="btn btn-secondary subscribeBtn" type="button" id="button-addon2"> Subscribe </button>
              </div>


          </div>
        </form>
      </div>

    </div>
  </div>


<div class="footer pt-5">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-12 col-sm-12 col-12 pr-4">
                    <div class="logo">
                <a href="#">NewLife<span> Hospital</span></a>    
            </div>
            <div>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. 
            </div>

            <div>
                <ul class="d-flex flex-row align-items-center justify-content-start">
                    <a href="#" class="px-2"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
                    <a href="#" class="px-2"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                    <a href="#" class="px-2"><i class="fa fa-twitter" aria-hidden="true" class="px-2"></i></a>
                    <a href="#" class="px-2"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                    <a href="#" class="px-2"><i class="fa fa-behance" aria-hidden="true"></i></a>
                    <a href="#" class="px-2"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                </ul>
            </div>
                    
                </div>

                <div class="col-xl-4 col-lg-4 col-md-12 col-sm-12 col-12">
                    <h4 class="text-light pb-4">Quick Contact</h4>
                    <form>
                       <div class="form-row">
                            <div class="form-group col-sm-12">
                                <input class="form-control" type="text" placeholder="Name">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="form-group col-sm-12">
                                <input class="form-control" type="email" placeholder="Email">
                            </div>
                        </div>
                        <textarea class="form-control"  placeholder="Message"></textarea>
                        <button type="submit" class="button btn">Send Message</button>
                </form>
            </div>

                <div class="col-xl-5 col-lg-5 col-md-12 col-sm-12 col-12 text-center">
                 <ul>
                        <h5 class="text-light">Address </h5>
                        <p class="pt-2">Junction City, Yangon</p>
                        <hr class="bg-success" width="50%">
                        <h5 class="text-light">Phone </h5>
                        <p class="pt-2">+95 987654321</p>
                        <hr class="bg-success" width="50%">
                        <h5 class="text-light">Email</h5>
                        <p class="pt-2"> newlife@gmail.com</p>
                </ul>
                </div>
                
            </div>
        </div>

        <hr class="bg-white" width="90%">
        
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                    <center><p>@ copyright | <span style="color: red;"> New Life Hospital</span> <br> Designed by Shwe Sin Win</p></center>
                </div>
            </div>
        </div>
    </div>




<!-- Js Plugins -->
    <script src="{{asset('frontend/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('frontend/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('frontend/js/mixitup.min.js')}}"></script>
    <script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('frontend/js/main.js')}}"></script>

    <script src="{{asset('appointment.js')}}"></script>

</body>

</html>