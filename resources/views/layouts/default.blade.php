<!DOCTYPE html>
<html>
<head>
    @include('includes.head')
    @yield('gallery')
    @yield('developer_list')
    @yield('developer_list_specific')
    @yield('announcement')
</head>
<body>

      <header class="clearfix">
        @include('includes.header')
      </header>
      <div>
      	 @yield('content')
      </div>
    <div>
    	@include('includes.footer')
    </div>
</body>
</html>