<ul class="navigation-menu">
    <li>
        <a href="{{ url('home') }}"><i class="fi-air-play"></i>Dashboard</a>
    </li>
    <li>
        <a href="{{ url('employee-registration') }}"><i class="fi-briefcase"></i>Register</a>
    </li>
    @if(auth()->user()->user_type == 'admin')
    <li class="has-submenu">
        <a href="#"><i class="fi-box"></i>QR</a>
        <ul class="submenu">
            <li>
                <a href="{{ url('new-qr') }}">New QR</a>
            </li>
            <li>
                <a href="{{ url('qr-history') }}">QR</a>
            </li>
        </ul>
    </li>
    <li class="has-submenu">
        <a href="#"><i class="fi-paper"></i>User</a>
        <ul class="submenu">
            <li><a href="{{ url('add-new-employee') }}">Add User</a></li>
            <li><a href="{{ url('view-all-employee') }}">User List</a></li>
        </ul>
    </li>
    @endif
</ul>
