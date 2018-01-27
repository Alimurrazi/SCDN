<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>SCDN</title>


        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">

        <link type="text/css" rel="stylesheet" href="{{URL::asset('css/admin.css')}}">

        <script src="https://code.jquery.com/jquery-1.12.0.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <!--    <link rel="stylesheet" href="style5.css"> -->
    </head>
    <body>

 
<div class="matha-nosto">
        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar" class="admin">
                <div class="sidebar-header">
                    <h3>SCDN admin panel</h3>
                </div>

                <ul class="list-unstyled components">
                    <li>
                        <a href="/">Home</a>
                    </li>
                    <li>
                        <a href="/admin/developer_list">Developer List</a>
                    </li>
                    <li>
                        <a href="/admin/gallery">Gallery</a>
                    </li>
                    <li>
                        <a href="/admin/announcement">Announcement</a>
                    </li>
                    <li>
                        <a href="/admin/award">Award</a>
                    </li>
                    <li>
                        <a href="/admin/blog">Blog</a>
                    </li>
                    <li>
                        <a href="/admin/tag">Tag</a>
                    </li>
                                        <li>
                        <a href="/admin/project">Project</a>
                    </li>

                                                            <li>
                        <a href="/admin/message">Message</a>
                    </li>


                </ul>

            </nav>

            <!-- Page Content Holder -->
            <div class="container" id="content">

                <nav class="navbar navbar-default" class="admin">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="navbar-btn">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <!--
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            -->
                                                    @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </li>
                        @endif

                            </ul>
<!--   -->

<!--   -->
 
                        </div>
                    </div>
                </nav>

                @yield('content')

               <div class="line"></div> 




            </div>
        </div>
        
    </div>





        <!-- jQuery CDN -->
         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                     $(this).toggleClass('active');
                 });
             });
         </script>
    </body>
</html>