<div class="sidebar" data-color="purple" data-background-color="white" data-image="{{ ('backend/img/sidebar-1.jpg') }}">

    <div class="logo">
        <a href="{{ route('admin.dashboard') }}" class="simple-text logo-normal">
            DONHOLM CATHOLIC
        </a>
    </div>
    <div class="sidebar-wrapper">
    <ul class="nav"  >
        <li class="nav-item start "> 
            <li class="heading">
                <h3 class="uppercase">Dashboard</h3>
            </li>  
            <li class="{{ Request::is('admin/dashboard*') ? 'active': '' }}">
                <a href="{{ route('admin.dashboard') }}" class="nav-link nav-toggle">
                <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li class="heading">
                <h3 class="uppercase">Main Menu</h3>
            </li>  
            <li class="{{ Request::is('admin/priest*') ? 'active': '' }}">
                <a href="{{ route('priest.index') }}" class="nav-link nav-toggle">
                    <i class="material-icons">contacts</i>
                    <p>Priests</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/member*') ? 'active': '' }}">
                <a class="nav-link" href="{{ route('member.index') }}">
                    <i class="material-icons">how_to_reg</i>
                    <p>Members</p>
                </a>
            </li> 
            <li class="{{ Request::is('admin/guest*') ? 'active': '' }}">
                <a class="nav-link" href="{{ route('guest.index') }}">
                    <i class="material-icons">supervisor_account</i>
                    <p>Guests</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/service*') ? 'active': '' }}">
                <a class="nav-link" href="{{ route('service.index') }}">
                    <i class="material-icons">museum</i>
                    <p>Mass Services</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/reservation*') ? 'active': '' }}">
                <a class="nav-link" href="{{ route('reservation.index') }}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Reservations</p>
                </a>
            </li>
            <li class="{{ Request::is('admin/guestreservation*') ? 'active': '' }}">
                <a class="nav-link" href="{{ route('guestreservation.index') }}">
                    <i class="material-icons">chrome_reader_mode</i>
                    <p>Guest Reservations</p>
                </a>
            </li> 
            <li class="">
                <a class="nav-link" href="">
                    <i class="material-icons">family_restroom</i>
                    <p>Church Groups</p>
                </a>
                <ul class="sub-menu">
                    <li class="{{ Request::is('admin/church_group*') ? 'active': '' }}">
                        <a class="nav-link" href="{{ route('church_group.index') }}">
                            <i class="material-icons">article</i>
                            <p>ALL Groups</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/cma_member*') ? 'active': '' }}">
                        <a class="nav-link" href="{{ route('cma_member.index') }}">
                            <i class="material-icons">perm_identity</i>
                            <p>CMA</p>
                        </a>
                    </li>
                    <li class="{{ Request::is('admin/cwa_member*') ? 'active': '' }}">
                        <a class="nav-link" href="{{ route('cwa_member.index') }}">
                            <i class="material-icons">perm_contact_calender</i>
                            <p>CWA</p>
                        </a>
                    </li>
                </ul>
            </li>                   
        </ul>
    </div>
</div>
