
    <body>
        <!--loader-->
        <div class="loader-wrap">
            <div class="loader-inner">
                <svg>
                    <defs>
                        <filter id="goo">
                            <fegaussianblur in="SourceGraphic" stdDeviation="2" result="blur" />
                            <fecolormatrix in="blur"   values="1 0 0 0 0  0 1 0 0 0  0 0 1 0 0  0 0 0 5 -2" result="gooey" />
                            <fecomposite in="SourceGraphic" in2="gooey" operator="atop"/>
                        </filter>
                    </defs>
                </svg>
            </div>
        </div>
        <!--loader end-->
        <!-- main -->
        <div id="main">
            <!-- header -->
            <header class="main-header">
                <!--  logo  -->
                <div class="logo-holder"><a href="index.html"><img src="{{asset('assetfront/images/logo.png')}}" alt=""></a></div>
                <!-- logo end  -->
                <!-- nav-button-wrap--> 
                <div class="nav-button-wrap color-bg nvminit">
                    <div class="nav-button">
                        <span></span><span></span><span></span>
                    </div>
                </div>
                <!-- nav-button-wrap end-->	
                
                <!--  add new  btn -->
                @if (Auth::check())
                <div class="add-list_wrap show-reg-form modal-open">
                   <span style="padding-right: 10px;">{{ Auth::user()->name }}</span> <a href="{{ route('logout') }}" class="add-list color-bg" onclick="event.preventDefault();
                   document.getElementById('logout-form').submit();">
     <i class="fal fa-user"></i> Signout</a>
                </div>
                @else
                <div class="add-list_wrap show-reg-form modal-open">
                    <a href="#" class="add-list color-bg"><i class="fal fa-user"></i> <span>Sign In / Register</span></a>
                </div>
                @endif
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
                <!--  add new  btn end -->
               
                <!--  cart-btn   -->
                <div class="cart-btn  tolt show-header-modal" data-microtip-position="bottom"  data-tooltip="Your Quotes / Orders">
                    <i class="fal fa-bell"></i>
                    <span class="cart-btn_counter color-bg">5</span>
                </div>
                <!--  cart-btn end -->
                 <!--  header-opt_btn -->
                 <div class="header-opt_btn tolt" data-microtip-position="bottom"  data-tooltip="Country / Currency">
                    <span><i class="fal fa-globe"></i></span>
                </div>
                <!--  header-opt_btn end -->
               
               
               			
                <!-- wishlist-wrap--> 
                <div class="header-modal novis_wishlist tabs-act">
                    <ul class="tabs-menu fl-wrap no-list-style">
                        <li class="current"><a href="#tab-wish">  Quotes <span>- 3</span></a></li>
                        <li><a href="#tab-compare">  Orders <span>- 2</span></a></li>
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
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-cube"></i> variant name, Quality</a></div>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Sri Lanka, COL</a></div>
                                                    <div class="widget-posts-descr-price"><span>Quote Price: </span> $ 1500.00</div>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-clock"></i>  <small>just now</small> </a></div>
                                                    <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget-posts-img"><a href="#"><img src="images/all/small/1.jpg" alt=""></a>  
                                                </div>
                                                <div class="widget-posts-descr">
                                                    <h4><a href="#">Red Dried Peppers</a></h4>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-cube"></i> variant name, Quality</a></div>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Sri Lanka, COL</a></div>
                                                    <div class="widget-posts-descr-price"><span>Quote Price: </span> $ 1500.00</div>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-clock"></i>  <small>1 day ago</small> </a></div>
                                                    <div class="clear-wishlist"><i class="fal fa-trash-alt"></i></div>
                                                </div>
                                            </li>
                                            <li>
                                                <div class="widget-posts-img"><a href="#"><img src="images/all/small/1.jpg" alt=""></a>  
                                                </div>
                                                <div class="widget-posts-descr">
                                                    <h4><a href="#">Red Dried Peppers</a></h4>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-cube"></i> variant name, Quality</a></div>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i> Sri Lanka, COL</a></div>
                                                    <div class="widget-posts-descr-price"><span>Quote Price: </span> $ 1500.00</div>
                                                    <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-clock"></i>  <small>3 days ago</small> </a></div>
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
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-cube"></i> variant name, Quality</a></div>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  Sri Lanka, COl </a></div>
                                                        
                                                        <div class="widget-posts-descr-price"><span>Status: </span> Good Ready</div>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-clock"></i>  <small>just now</small> </a></div>
                                                    </div>
                                                </li>
                                                <li>
                                                    <div class="widget-posts-img"><a href="#"><img src="images/all/small/1.jpg" alt=""></a>  
                                                    </div>
                                                    <div class="widget-posts-descr">
                                                        <h4><a href="#">Red Dried Peppers</a></h4>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-cube"></i> variant name, Quality</a></div>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-map-marker-alt"></i>  Sri Lanka, COl </a></div>
                                                        
                                                        <div class="widget-posts-descr-price"><span>Status: </span> Good Ready</div>
                                                        <div class="geodir-category-location fl-wrap"><a href="#"><i class="fas fa-clock"></i>  <small>just now</small> </a></div>
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
                <!--header-opt-modal-->  
                <div class="header-opt-modal novis_header-mod">
                    <div class="header-opt-modal-container hopmc_init">
                        <div class="header-opt-modal-item lang-item fl-wrap">
                            <h4>Country: <span>India</span></h4>
                            <div class="header-opt-modal-list fl-wrap">
                                <ul>
                                    <li><a href="#" class="current-lan" data-lantext="EN">India</a></li>
                                    <li><a href="#" data-lantext="FR">France</a></li>
                                    <li><a href="#" data-lantext="ES">Sri Lanka</a></li>
                                    <li><a href="#" data-lantext="DE">Singapore</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="header-opt-modal-item currency-item fl-wrap">
                            <h4>Currency: <span>USD</span></h4>
                            <div class="header-opt-modal-list fl-wrap">
                                <ul>
                                    <li><a href="#" class="current-lan" data-lantext="USD">USD</a></li>
                                    <li><a href="#" data-lantext="EUR">EUR</a></li>
                                    <li><a href="#" data-lantext="GBP">GBP</a></li>
                                    <li><a href="#" data-lantext="RUR">RUR</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <!--header-opt-modal end -->  
            </header>
            <!-- header end  -->