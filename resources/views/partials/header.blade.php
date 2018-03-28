<nav class="navbar navbar-default">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a href="{!! url('/'); !!}">
        <img src="{{ asset('images/Business-doctors-logo.png') }}" alt="">
      </a>
    </div>
    <div id="navbar" class="collapse navbar-collapse navbar-right">
      <ul class="nav navbar-nav">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">ABOUT</a>
          <ul class="dropdown-menu customize-dropdown-menu">
            <li><a href="{!! url('Overview'); !!}">Overview</a></li>
            <li><a href="{!! url('Philosophy'); !!}">Philosophy</a></li>
            <li><a href="{!! url('Team'); !!}">Team</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">HOW WE WORK</a>
          <ul class="dropdown-menu customize-dropdown-menu">
            <li><a href="{!! url('What-We-Do'); !!}">What We Do</a></li>
            <li><a href="{!! url('Who-We-Work-With'); !!}">Who We Work With</a></li>
            <li><a href="{!! url('BD-Approch'); !!}">BD Approch</a></li>
          </ul>
        </li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">CASE STUDIES</a>
          <ul class="dropdown-menu customize-dropdown-menu">
            <li><a href="{!!url('Transport&Logistics'); !!}">Auto Transport & Logistics</a></li>
            <li><a href="{!! url('Fashion'); !!}">Fashion</a></li>
            <li><a href="{!! url('Agri&Food'); !!}">Agri & Food Processing</a></li>
            <li><a href="{!! url('Tourisam&Leisure'); !!}">Tourisam & Laisure</a></li>
            <li><a href="{!! url('Media&Entertainment') !!}">Media & Entertainment</a></li>
            <li><a href="{!! url('Others') !!}">Others</a></li>
          </ul>
        </li>
        <li><a href="{{ route('businesses.create') }}">BUSINESS HEALTH CHECK</a></li>
        <li><a href="{!! url('Blog-Home') !!}">BLOG</a></li>
        <li><a href="{!! url('Contact') !!}">CONTACT US</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        @if(Auth::check())
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Hello {{ Auth::user()->name }}</a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li><a href="{{ route('categories.index') }}">Categories</a></li>
            <li><a href="{{ route('businesses.index') }}">Registered Query</a></li>
            <li><a href="{{ route('logout') }}">Logout</a></li>
            @else
              <li><a href="{{ route('login') }}">LOGIN</a></li>
          </ul>
        </li>
          @endif
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
</nav>
