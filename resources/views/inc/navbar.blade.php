<nav class="navbar navbar-default">
    <div class="container">
      <div class="navbar-header">
       <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
        </div>
            <div class="collapse navbar-collapse" id="app-navbar-collapse">
                <!-- Left Side Of Navbar -->
                <ul class="nav navbar-nav">
                    &nbsp;
                </ul>
            
                    <ul class="nav navbar-nav">
                            <li><a href="/">Home</a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">About Pamantasan <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="/mav">Mission and Vision</a></li>
                                        <li><a href="/history">History</a></li>
                                        <li><a href="/plp_hymn">PLP Hymn</a></li>
                                        <li><a href="/logo_and_symbol">Logo and Symbol</a></li>
                                        <li><a href="/acads">Academic Calendar</a></li>
                                        <li><a href="/">Map</a></li>
                                        <li><a href="/rules">Rules and Regulation</a></li>
                                    </ul>
                                 </li>

                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Colleges <span class="caret"></span></a>
                                        <ul class="dropdown-menu">
                                                <li><a href="/arts_and_sciences">Arts and Sciences</a></li>
                                                <li><a href="/cba">Business and Accountancy</a></li>
                                                <li><a href="/ccs">Computer Studies</a></li>
                                                <li><a href="/coe">Education</a></li>
                                                <li><a href="/cee">Engineering</a></li>
                                                <li><a href="/cihm">International Hospitality Management</a></li>
                                                <li><a href="/cons">Nursing</a></li>
                                        </ul>
                                    </li>

                                        <li class="dropdown">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Students<span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="/student_council_(PSSC)">Student Council (PSSC)</a></li>
                                                <li><a href="/orgs">Student Organization</a></li>
                                                <li><a href="/scholars">Scholarship Programs</a></li>
                                            </ul>
                                        </li>
                                <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Administrator <span class="caret"></span></a>
                                     <ul class="dropdown-menu">
                                           <li><a href="/pread">Board of Regents</a></li>
                                           <li><a href="/executive_officials">Executive Officials</a></li>
                                           <li><a href="/faculty">Faculty</a></li>
                                           <li><a href="/staff">Staff</a></li>
                                           <li><a href="/organizational_structure">Organizational Structure</a></li>
                                    </ul>
                                </li>

                            <li><a href="preregistration">Admission</a></li>
                            <li><a href="/registrar">Registrar</a></li>
                            <li><a href="/downloads">Downloads</a></li>
                    </ul>
                    
                    



            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav navbar-right">
                <!-- Authentication Links -->
                @if (Auth::guest())
                    <li><a href="{{ route('login') }}">Login</a></li>
                        @else
                            <li class="dropdown">
                                
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                  <p>Admin{{ Auth::user()->name }} <span class="caret"></span></p>
                                    </a>

                                        <ul class="dropdown-menu" role="menu">
                                         @if (Auth::user()->id == '1')
                                            <li><a href="/historyDashboard">History</a> </li> 
                                            <li><a href="/acadsDashboard">Academic Calendar</a> </li>
                                            <li><a href="/orgsdashboard">Student Organization</a> </li>
                                            <li><a href="/scholardashboard">Scholarship Programs</a> </li>
                                            <li><a href="/rulesdashboard">Rules and Regulation</a> </li>
                                             <li><a href="/plp-cat ">PLP-CAT</a> </li>   
                                         @endif
                                             <li><a href="/mavdashboard">Mission and Vision</a> </li>
                                            <li><a href="/dashboard">Post</a> </li> 
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
            </ul>
        </div>
    </div>
</nav>


