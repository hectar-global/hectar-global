<body>
  <!--loader-->
  <div class="loader-wrap">
    <div class="loader-inner">
      <svg>
        <defs>
          <filter id="goo">
            <fegaussianblur in="SourceGraphic" stdDeviation="2" result="blur" />
            <fecolormatrix in="blur" values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2" result="gooey" />
            <fecomposite in="SourceGraphic" in2="gooey" operator="atop" />
          </filter>
        </defs>
      </svg>
    </div>
  </div>
  <!--loader end-->
  <!-- main -->
  <div id="main">
    <!-- header -->
    <div style="background-color: #ffcb8f;
    color: #3e0a01;
    font-size: 11px;
    font-weight: 500;
    line-height: 24px;
    text-transform: uppercase;">

      Bringing trust, speed & transparency in the agriculture value chain
    </div>

    <header class="main-header">
      <!--  logo  -->
      <div class="logo-holder"><a href="/"><img src="{{asset('assetfront/home-images/logo-white.png')}}" alt=""
            id="logh"></a></div>
      <!-- logo end  -->
      
      <!--  add new  btn -->
      @if (Auth::check())

      <div class="nav-holder main-menu">
        <nav>
          <ul class="no-list-style">
            <li>
              <a href="#" class="act-link" id="sign-in">{{ Auth::user()->name }} <i class="fa fa-caret-down"
                  id="sign-in-icon"></i></a>
              <!--second level -->
              <ul>
                <li><a href="/mydashboard">My Dashboard</a></li>
                <li><a href="/editprofile">Edit Profile</a></li>

                <li><a href="{{ route('logout') }}"
                    onclick="event.preventDefault();document.getElementById('logout-form').submit();">logout</a></li>
              </ul>
              <!--second level end-->
            </li>

          </ul>
        </nav>
      </div>
      <!--  cart-btn   -->
      <div class="cart-btn  tolt show-header-modal" data-microtip-position="bottom" data-tooltip="Your Quotes / Orders">
        <i class="fal fa-bell" id="bell"></i>
        <span class="cart-btn_counter color-bg">5</span>
      </div>
      <!--  cart-btn end -->
      @else
      <div class="show-reg-form modal-open" id="sign-in"><i class="fas fa-user" id="sign-in-icon"></i><span>Sign
          In</span></div>
      @endif
      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        @csrf
      </form>
      <!--  add new  btn end -->





      <!-- wishlist-wrap-->
      <div class="header-modal novis_wishlist tabs-act">
        <ul class="tabs-menu fl-wrap no-list-style">
          <li class="current"><a href="#tab-wish"> Quotes <span>- 3</span></a></li>
          <li><a href="#tab-compare"> Orders <span>- 2</span></a></li>
        </ul>
        <!--tabs -->
        <div class="tabs-container">
          <div class="tab">
            <!--tab -->
            <div id="tab-wish" class="tab-content first-tab">
              <!-- header-modal-container-->
              <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
                <!--widget-posts-->
                <div class="widget-posts  fl-wrap">
                  <ul class="no-list-style">
                    <li>
                      <div class="widget-posts-img"><a href="#"><img src="images/all/small/1.jpg" alt=""></a>
                      </div>
                      <div class="widget-posts-descr">
                        <h4><a href="#">Red Dried Peppers</a></h4>
                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-cube"></i> variant
                            name, Quality</a></div>
                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>
                            Sri Lanka, COL</a></div>
                        <div class="widget-posts-descr-price"><span>Quote Price: </span> $ 1500.00</div>
                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-clock"></i>
                            <small>just now</small> </a></div>
                        <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                      </div>
                    </li>

                  </ul>
                </div>
                <!-- widget-posts end-->
              </div>
              <!-- header-modal-container end-->
              <div class="header-modal-top fl-wrap">
                <div class="clear_wishlist color-bg"><i class="fal fa-trash-alt"></i> Clear all</div>
              </div>
            </div>
            <!--tab end -->
            <!--tab -->
            <div class="tab">
              <div id="tab-compare" class="tab-content">
                <!-- header-modal-container-->
                <div class="header-modal-container scrollbar-inner fl-wrap" data-simplebar>
                  <!--widget-posts-->
                  <div class="widget-posts  fl-wrap">
                    <ul class="no-list-style">
                      <li>
                        <div class="widget-posts-img"><a href="#"><img src="images/all/small/1.jpg" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                          <h4><a href="#">Red Dried Peppers</a></h4>
                          <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-cube"></i> variant
                              name, Quality</a></div>
                          <div class="geodir-category-location fl-wrap"><a href="#"><i
                                class="fas fa-map-marker-alt"></i> Sri Lanka, COl </a></div>

                          <div class="widget-posts-descr-price"><span>Status: </span> Good Ready</div>
                          <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-clock"></i>
                              <small>just now</small> </a></div>
                        </div>
                      </li>
                      <li>
                        <div class="widget-posts-img"><a href="#"><img src="images/all/small/1.jpg" alt=""></a>
                        </div>
                        <div class="widget-posts-descr">
                          <h4><a href="#">Red Dried Peppers</a></h4>
                          <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-cube"></i> variant
                              name, Quality</a></div>
                          <div class="geodir-category-location fl-wrap"><a href="#"><i
                                class="fas fa-map-marker-alt"></i> Sri Lanka, COl </a></div>

                          <div class="widget-posts-descr-price"><span>Status: </span> Good Ready</div>
                          <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-clock"></i>
                              <small>just now</small> </a></div>
                        </div>
                      </li>
                    </ul>
                  </div>
                  <!-- widget-posts end-->
                </div>
                <!-- header-modal-container end-->
                <div class="header-modal-top fl-wrap">
                  <a class="clear_wishlist color-bg" href="#"><i class="fal fa-random"></i> View Orders</a>
                </div>
              </div>
            </div>
            <!--tab end -->
          </div>
          <!--tabs end -->
        </div>
      </div>
      <!--wishlist-wrap end -->

    </header>
    <!-- header end  -->