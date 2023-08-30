<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="{{asset('ui/backend')}}/index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <!-- End Dashboard Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{asset('ui/backend')}}/#">
          <i class="bi bi-menu-button-wide"></i><span>Products</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('product_index')}}">
              <i class="bi bi-circle"></i><span>Index_Page</span>
            </a>
          </li>
          <li>
            <a href="{{route('product_create')}}">
              <i class="bi bi-circle"></i><span>Create_Page</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->

      <li class="nav-item">
        <a class="nav-link collapsed" data-bs-target="#components-nav" data-bs-toggle="collapse" href="{{asset('ui/backend')}}/#">
          <i class="bi bi-menu-button-wide"></i><span>Users</span><i class="bi bi-chevron-down ms-auto"></i>
        </a>
        <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
          <li>
            <a href="{{route('index')}}">
              <i class="bi bi-circle"></i><span>Index_Page</span>
            </a>
          </li>
          <li>
            <a href="{{route('create')}}">
              <i class="bi bi-circle"></i><span>Create_Page</span>
            </a>
          </li>
        </ul>
      </li><!-- End Components Nav -->




    </ul>

  </aside>
