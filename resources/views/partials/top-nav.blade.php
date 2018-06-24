    <section class="toolbar">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 left_bar">
                    <ul class="left-none">



                        <!-- Authentication Links -->
                        @guest
                            <li><a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                            <li><a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    <li>
                        @component('components.who')
                        @endcomponent
                    </li>

               <!--          <li><i class="fa fa-search"></i>
                            <input type="search" placeholder="Search" class="search_box">
                        </li> -->
                    </ul>
                </div>
                <div class="col-lg-6 ">
                    <ul class="right-none pull-right company_info">
                        <li><a href="tel:18005670123"><i class="fa fa-phone"></i> 1-800-567-0123</a></li>
                        <li class="address"><a href="contact.html"><i class="fa fa-map-marker"></i> 107 Sunset Blvd., Beverly Hills, CA  90210</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="toolbar_shadow"></div>
    </section>