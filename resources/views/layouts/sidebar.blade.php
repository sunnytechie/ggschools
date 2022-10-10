<!-- Menu -->
<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="/" class="app-brand-link">
        <span class="app-brand-logo demo">
          {{-- Logo Image --}}
          <img width="40" height="40" src="{{ asset('assets/img/gglogo400.png') }}" alt="GGSchools">
        </span>
        <span>GG Schools</span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item active">
        <a href="{{ route('dashboard.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

   
      <li class="menu-item">
        <a href="#"
        data-bs-toggle="modal"
                      data-bs-target="#purchaseModal" class="menu-link">
          <i class="menu-icon tf-icons bx bx-cart-alt"></i>
          <div data-i18n="Tables">Purchase Token</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="#"
        data-bs-toggle="modal"
                      data-bs-target="#changeTokenModal"
        class="menu-link">
          <i class="menu-icon tf-icons bx bx-dialpad"></i>
          <div data-i18n="Tables">My Token</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="#"
        data-bs-toggle="modal"
        data-bs-target="#checkResultModal"
        class="menu-link">
          <i class="menu-icon tf-icons bx bx-list-ul"></i>
          <div data-i18n="Tables">Check Result</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="{{ route('upload.result') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bxs-user-account"></i>
          <div data-i18n="Tables">Admin</div>
        </a>
      </li>

      <li class="menu-item">
        <a href="/" class="menu-link">
          <i class="menu-icon tf-icons bx bx-globe"></i>
          <div data-i18n="Tables">Our Website</div>
        </a>
      </li>

      
      <li class="menu-item">
        <form method="POST" action="{{ route('logout') }}">
          @csrf
        <a href="{{ route('logout') }}" class="menu-link"
        onclick="event.preventDefault();
                                this.closest('form').submit();">
          <i class="menu-icon tf-icons bx bx-power-off"></i>
          <div data-i18n="Tables">Logout</div>
        </a>
        </form>
      </li>
    </ul>
  </aside>
  <!-- / Menu -->