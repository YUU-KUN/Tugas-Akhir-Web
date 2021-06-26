<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-white" id="sidenav-main">
    <div class="scrollbar-inner">
        <!-- Brand -->
        <div class="sidenav-header  align-items-center">
            <a class="navbar-brand" href="javascript:void(0)">
            <img src="../assets/img/brand/blue.png" class="navbar-brand-img" alt="...">
            </a>
        </div>
        <div class="navbar-inner">
            <!-- Collapse -->
            <div class="collapse navbar-collapse" id="sidenav-collapse-main">
                <!-- Nav items -->
                <ul class="navbar-nav">
                    @guest
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">
                                <i class="ni ni-key-25 text-info"></i>
                                <span class="nav-link-text">{{ __('Login') }}</span>
                            </a>
                        </li> 
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">
                                <i class="ni ni-circle-08 text-pink"></i>
                                <span class="nav-link-text">Register</span>
                            </a>
                        </li>
                    @else
                        <li class="nav-item">
                            <a class="nav-link" href="{{route('home')}}">
                                <i class="ni ni-tv-2 text-primary"></i>
                                <span class="nav-link-text">Dashboard</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('users.index') }}">
                                <i class="ni ni-planet text-orange"></i>
                                <span class="nav-link-text">Manage Users</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('roles.index') }}">
                                <i class="ni ni-pin-3 text-primary"></i>
                                <span class="nav-link-text">Manage Role</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('products.index') }}">
                                <i class="ni ni-single-02 text-yellow"></i>
                                <span class="nav-link-text">Manage Product</span>
                            </a>
                        </li>
                    @endguest
                </ul>

                <!-- Divider -->
                {{-- <hr class="my-3">

                <li class="navbar-nav">
                    <a class="nav-link dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        
                        <i class="ni ni-bullet-list-67 text-default"></i>
                        <span class="nav-link-text">{{ __('Logout') }}</span>
                    </a>


                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li> --}}
            
            </div>
        </div>
    </div>
</nav>