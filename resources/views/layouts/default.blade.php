<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    @yield('gallery')
    @yield('developer_list')
    @yield('developer_list_specific')
    @yield('announcement')
    @yield('announcement_specific')
    @yield('blog_specific')
    <!--
    <style type="text/css">
      .main-container
      {
        min-height: 100vh;
        overflow: hidden;
        display: block;
        position: relative;
        padding-bottom: 60px;
      }
      .main-footer {
 position: absolute;
 bottom: 0;
 width: 100%;
}
    </style>
  -->
</head>
<body>

      <header class="clearfix">
        @include('includes.header')
      </header>
      <div class="main-container">
      	 @yield('content')
      </div>
    <div class="main-footer">
    	@include('includes.footer')
    </div>
</body>
</html>