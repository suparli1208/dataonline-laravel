<aside id="sidebar-wrapper">
  <div class="sidebar-brand">
    <a href="">{{ config('app.name') }}</a>
  </div>
  <div class="sidebar-brand sidebar-brand-sm">
    <a href="#">{{ strtoupper(substr(config('app.name'), 0, 2)) }}</a>
  </div>
  <ul class="sidebar-menu">
    <li class="menu-header">Dashboard</li>
    <li class="{{ request()->is('/dashboard') ? 'active' : '' }}"><a class="nav-link" href="{{ route('dashboard') }}"><i class="fas fa-tachometer-alt"></i><span>Dashboard</span></a></li>
    <li class="menu-header">Management</li>
    <li class="dropdown {{ request()->is('/device') ? 'active' : '' }}">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-plug"></i><span>Devices</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{ route('device.index') }}">Devices</a></li>
        <li><a class="nav-link" href="{{ route('device.create') }}">Register Device</a></li>
      </ul>
    </li>
    <li class="dropdown {{ request()->is('/user') ? 'active' : '' }}">
      <a href="#" class="nav-link has-dropdown"><i class="fas fa-users"></i><span>Users</span></a>
      <ul class="dropdown-menu">
        <li><a class="nav-link" href="{{ route('user.index') }}"><span>Users</span></a></li>
        <li><a class="nav-link" href="{{ url('/') }}"><span>Users Access</span></a></li>
        <li><a class="nav-link" href="{{ route('user.create') }}"><span>Register User</span></a></li>
      </ul>
    </li>
    <li class="menu-header">Data</li>
    <li><a class="nav-link" href=""><i class="fas fa-table"></i> <span>Tables</span></a></li>
    <li><a class="nav-link" href=""><i class="fas fa-chart-line"></i> <span>Charts</span></a></li>

    <li class="menu-header">Setting</li>
    <li><a class="nav-link" href=""><i class="fas fa-cogs"></i> <span>Setting</span></a></li>
  </ul>
</aside>
