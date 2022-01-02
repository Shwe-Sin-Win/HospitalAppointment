<!DOCTYPE html>
<html lang="en">
    <head>

        <title> NewLife Hospital </title>
        
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Favicon-->
        <link rel="icon" href="{{asset('logo/Nlogo4.jpeg')}}" type="image/gif" sizes="16x16">

        <!-- iconfont CSS -->
        <link rel="stylesheet" type="text/css" href="{{asset('icon/icofont/icofont.min.css')}}">

        <!-- Main CSS-->
        <link rel="stylesheet" type="text/css" href="{{asset('backend/css/main.css')}}">
    </head>
    
    <body class="app sidebar-mini">

        <!-- Navbar-->
        <header class="app-header">
            <a class="app-header__logo" href="{{route('index')}}">
                <span><i class="icofont-hospital"></i></span>
                <h6 style="float:right;" class="pt-2 px-2">NEWLIFE <br>
                    <span style="letter-spacing: 3px;">HOSPITAL</span></h6>
                
               {{--  <div class="pr-5 pt-2" style="float:right;">
                    <h5 class="text-success">Hospital</h5>
                </div>  --}}  
            </a>
            
            <!-- Sidebar toggle button-->
            <a class="app-sidebar__toggle pt-2" href="#" data-toggle="sidebar" aria-label="Hide Sidebar">
                <i class="icofont-navigation-menu"></i>
            </a>
          
            <!-- Navbar Right Menu-->
            <ul class="app-nav">
                <li class="app-search">
                    <input class="app-search__input" type="search" placeholder="Search">
                    <button class="app-search__button">
                        <i class="icofont-search-2"></i>
                    </button>
                </li>

                <!-- User Menu-->
                <li class="dropdown">
                    <a class="app-nav__item" href="#" data-toggle="dropdown" aria-label="Open Profile Menu">
                        <i class="icofont-user-alt-3"></i>
                </a>
                  <ul class="dropdown-menu settings-menu dropdown-menu-right">
                    <li>
                        <a class="dropdown-item" href="page-user.html">
                            <i class="icofont-ui-user"></i> Profile
                        </a>
                    </li>
                    <li>
                        <a class="dropdown-item" href="javascript:void(0)" 
                        onclick="event.preventDefault(); document.getElementById('logout_form').submit();">
                            <i class="icofont-logout"></i>
                            Logout

                            <form id="logout_form" action="{{route('logout')}}" method="post" style="display: none;">
                                        @csrf
                                        
                            </form>
                        </a>
                    </li>
                  </ul>
                </li>
            </ul>
        </header>


        <!-- Sidebar menu-->
        <div class="app-sidebar__overlay" data-toggle="sidebar"></div>

        <aside class="app-sidebar">
            <div class="app-sidebar__user"><img class="app-sidebar__user-avatar" src="{{asset(Auth::user()->profile)}}" alt="User Image" class="img-fluid" width="60" height="60">
                <div>
                  <p class="app-sidebar__user-name">{{Auth::user()->name}}</p>
                  <p class="app-sidebar__user-designation">{{Auth::user()->roles()->pluck('name')[0]}}</p>
                </div>
            </div>
            
            <ul class="app-menu">
                
                <li>
                    <a class="app-menu__item" href="dashboard.html">
                        <i class="app-menu__icon icofont-dashboard"></i>
                        <span class="app-menu__label">
                            Dashboard
                        </span>
                    </a>
                </li>

                <li>
                    <a class="app-menu__item" href="{{route('backside.appointinfo.index')}}">
                        <i class="app-menu__icon icofont-prestashop"></i>
                        <span class="app-menu__label">
                            Appointment
                        </span>
                    </a>
                </li>

                <li>
                    <a class="app-menu__item" href="{{route('backside.patientinfo.index')}}">
                        <i class="app-menu__icon icofont-users-social"></i>
                        <span class="app-menu__label">
                            Patients
                        </span>
                    </a>
                </li>

                <li>
                    <a class="app-menu__item" href="{{route('backside.schedule.index')}}">
                        <i class="app-menu__icon icofont-ui-tag"></i>
                        <span class="app-menu__label">
                            Schedule 
                        </span>
                    </a>
                </li>

                <li>
                    <a class="app-menu__item" href="{{route('backside.doctor.index')}}">
                        <i class="app-menu__icon icofont-package"></i>
                        <span class="app-menu__label">
                            Doctors
                        </span>
                    </a>
                </li>

                <li>
                    <a class="app-menu__item" href="{{route('backside.disease.index')}}">
                        <i class="app-menu__icon icofont-tags"></i>
                        <span class="app-menu__label">
                            Diseases
                        </span>
                    </a>
                </li>

                <li>
                    <a class="app-menu__item" href="{{route('backside.speciality.index')}}">
                        <i class="app-menu__icon icofont-tag"></i>
                        <span class="app-menu__label">
                            Speciality 
                        </span>
                    </a>
                </li>

                <li>
                    <a class="app-menu__item" href="{{route('backside.package.index')}}">
                        <i class="app-menu__icon icofont-tag"></i>
                        <span class="app-menu__label">
                            Package 
                        </span>
                    </a>
                </li>
            
                
            </ul>
        </aside>

        {{$slot}}

        <!-- Essential javascripts for application to work-->
        <script src="{{asset('backend/js/jquery-3.3.1.min.js')}}"></script>
        <script src="{{asset('backend/js/popper.min.js')}}"></script>
        <script src="{{asset('backend/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('backend/js/main.js')}}"></script>
        <!-- The javascript plugin to display page loading on top-->
        <script src="{{asset('backend/js/plugins/pace.min.js')}}"></script>
        <!-- Page specific javascripts-->
        <!-- Data table plugin-->
        <script type="text/javascript" src="{{asset('backend/js/plugins/jquery.dataTables.min.js')}}"></script>
        <script type="text/javascript" src="{{asset('backend/js/plugins/dataTables.bootstrap.min.js')}}"></script>
        <script type="text/javascript">$('#sampleTable').DataTable();</script>
        <!-- Google analytics script-->
        <script type="text/javascript">
          if(document.location.hostname == 'pratikborsadiya.in') {
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
            ga('create', 'UA-72504830-1', 'auto');
            ga('send', 'pageview');
          }
        </script>
    </body>
</html>