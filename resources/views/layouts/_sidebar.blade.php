<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
  <div class="app-brand demo">
    <a href="#" class="app-brand-link">
      <span class="app-brand-logo demo">
        <img src="{{ asset('/') }}assets/img/logo.png" alt="">
      </span>
      {{-- <span class="app-brand-text demo menu-text fw-bolder ms-2">Sneat</span> --}}
    </a>

    <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
      <i class="bx bx-chevron-left bx-sm align-middle"></i>
    </a>
  </div>

  <div class="menu-inner-shadow"></div>

  <ul class="menu-inner py-1">
    <!-- Dashboard -->
    <li class="menu-item {{ ($page == 'dashboard') ? 'active' : '' }}">
      <a href="{{ route('admin.view') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-home-circle"></i>
        <div data-i18n="Analytics">Dashboard</div>
      </a>
    </li>
    <li class="menu-item {{ ($page == 'work') ? 'active' : '' }}">
      <a href="{{ route('work.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bx-briefcase"></i>
        <div data-i18n="Analytics">Work</div>
      </a>
    </li>
    <li class="menu-item {{ ($page == 'customer') ? 'active' : '' }}">
      <a href="{{ route('customer.index') }}" class="menu-link">
        <i class="menu-icon tf-icons bx bxs-group"></i>
        <div data-i18n="Analytics">Customer</div>
      </a>
    </li>
  </ul>
</aside>