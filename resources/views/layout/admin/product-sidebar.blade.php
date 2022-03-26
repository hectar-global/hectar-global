<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link">
      <img src="{{asset('assetsadmin/dist/img/AdminLTELogo.png')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
           style="opacity: .8">
      <span class="brand-text font-weight-light">Hectar</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('assetsadmin/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Administrator</a>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
               
          {{-- <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                GENERAL
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            
          </li> --}}


          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                GENERAL
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
            <ul>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Overview
                    {{-- <i class="fas fa-angle-left right"></i> --}}
                  </p>
                </a>
                {{-- <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/add-category') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add</p>
                    </a>
                  </li>
                </ul> --}}
              </li>
            </ul>
            
          </li>

          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                PARAMETERS
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>
            {{-- <ul>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Manage Variants
                    <i class="fas fa-angle-left right"></i>
                  </p>
                </a>
                <ul class="nav nav-treeview">
                  <li class="nav-item">
                    <a href="{{ url('/add-category') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add New Variant</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/add-subcategory') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>Add Sub Variant</p>
                    </a>
                  </li>
                  <li class="nav-item">
                    <a href="{{ url('/view-categories') }}" class="nav-link">
                      <i class="far fa-circle nav-icon"></i>
                      <p>View</p>
                    </a>
                  </li>
                </ul>
              </li>
            </ul> --}}

            {{-- <ul>
              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Manage Prices
                  </p>
                </a>
                
              </li>
            </ul> --}}


            <ul>
              <li class="nav-item has-treeview">
                <a href="{{ url('/variants/'). '/'.request()->route()->prod_id }}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Variant Specifications
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="{{ url('/price/'). '/'.request()->route()->prod_id }}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Price
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="{{ url('/type/'). '/'.request()->route()->prod_id }}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Type
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="{{ url('/quality/'). '/'.request()->route()->prod_id }}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Quality
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="{{ url('/freight/'). '/'.request()->route()->prod_id }}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Freight Pricing
                    {{-- <i class="fas fa-angle-left right"></i> --}}
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="{{ url('/packaging/'). '/'.request()->route()->prod_id }}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Packaging Options
                    {{-- <i class="fas fa-angle-left right"></i> --}}
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="{{ url('/certificate/'). '/'.request()->route()->prod_id }}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Certifications
                    {{-- <i class="fas fa-angle-left right"></i> --}}
                  </p>
                </a>
              </li>
            </ul>
            
          </li>



          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                ABOUT
                {{-- <i class="right fas fa-angle-left"></i> --}}
              </p>
            </a>

            <ul>
              <li class="nav-item has-treeview">
                <a href="{{ url('/product-description/'). '/'.request()->route()->prod_id }}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Product Description
                    {{-- <i class="fas fa-angle-left right"></i> --}}
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="{{ url('/farming-production/'). '/'.request()->route()->prod_id }}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Farming/Production
                    {{-- <i class="fas fa-angle-left right"></i> --}}
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="{{ url('/gallery/'). '/'.request()->route()->prod_id }}" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Gallery
                    {{-- <i class="fas fa-angle-left right"></i> --}}
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Settings
                    {{-- <i class="fas fa-angle-left right"></i> --}}
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    SEO
                    {{-- <i class="fas fa-angle-left right"></i> --}}
                  </p>
                </a>
              </li>

              <li class="nav-item has-treeview">
                <a href="#" class="nav-link">
                  <i class="nav-icon fas fa-copy"></i>
                  <p>
                    Archieve Product
                    {{-- <i class="fas fa-angle-left right"></i> --}}
                  </p>
                </a>
              </li>
            </ul>
            
          </li>

        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>