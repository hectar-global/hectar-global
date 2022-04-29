@extends('layout.frontend.main')


@section('title', 'LensOnNews')
@section('content')


<!-- wrapper  -->
<div id="wrapper">

  <!-- content -->
  <div class="dashboard-content">
    <div class="container dasboard-container">
      <!-- dashboard-title -->
      <div class="dashboard-title fl-wrap">
        <div class="dashboard-title-item"><span>My Dashboard</span></div>

        <!--Tariff Plan menu-->
        <div class="tfp-det-container">
          <div class="tfp-btn"><span>Your Plan : </span> <strong>Basic</strong></div>
          <div class="tfp-det">
            <p>You Are on <a href="#">Basic Plan</a> . Become Premium Memmber to get exclusive deals and priority support. </p>
            <a href="#" class="tfp-det-btn color-bg">Learn how</a>
          </div>
        </div>
        <!--Tariff Plan menu end-->
      </div>
      <!-- dashboard-title end -->
      <div class="dasboard-wrapper fl-wrap no-pag">
        <div class="dashboard-stats-container fl-wrap">
          <div class="row">
            <!--dashboard-stats-->
            <div class="col-md-3">
              <div class="dashboard-stats fl-wrap">
                <i class="fal fa-map-marked"></i>
                <h4>Active Orders</h4>
                <div class="dashboard-stats-count">02</div>
              </div>
            </div>
            <!-- dashboard-stats end -->
            <!--dashboard-stats-->
            <div class="col-md-3">
              <div class="dashboard-stats fl-wrap">
                <i class="fal fa-chart-bar"></i>
                <h4>Quotes Generated</h4>
                <div class="dashboard-stats-count">156<span>(<strong>+36</strong> this week)</span></div>
              </div>
            </div>
            <!-- dashboard-stats end -->
            <!--dashboard-stats-->
            <div class="col-md-3">
              <div class="dashboard-stats fl-wrap">
                <i class="fal fa-comments-alt"></i>
                <h4>Total Orders</h4>
                <div class="dashboard-stats-count">357<span>(<strong>+12</strong> this week)</span></div>
              </div>
            </div>
            <!-- dashboard-stats end -->
            <!--dashboard-stats-->
            <div class="col-md-3">
              <div class="dashboard-stats fl-wrap">
                <i class="fal fa-heart"></i>
                <h4>Total Order Value</h4>
                <div class="dashboard-stats-count">$2329.00<span>(<strong>+$234.00</strong> this week)</span></div>
              </div>
            </div>
            <!-- dashboard-stats end -->
          </div>
        </div>
        <div class="clearfix"></div>
        <div class="row">
          <div class="col-md-8">
            <div class="dashboard-widget-title fl-wrap">Recent Orders <a href="#" style="float: right;
    color: blue;
    text-decoration: underline;
    font-size: 16px;
    text-transform: uppercase;">View all orders</a></div>
            <div class="row">
              <div class="col-md-6">
              <div id="app">
  <article class="order-tracker">
    <div class="order-info">
      <div class="order-info__number">
        <span>Order</span>
        <a href="/" class="order-number__number">#Y34XDHR</a>
      </div>
      
      <div class="order-info__details">
        <span class="order-info__details__arrival-date">Expected Arrival 01/13/18</span>
        <span class="order-info__details__tracking-number">USPS <a href="/">24339482904809482</a></span>
      </div>
</div>
    
    <div class="order-status__progress">
      <svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 562.4 38.21">
        <defs>
          <style>
            .cls-1 {
              fill: #c1d9e4;
            }

            .cls-2, .cls-3, .cls-5 {
              fill: none;
              stroke-miterlimit: 10;
            }

            .cls-2, .cls-5 {
              stroke: #fff;
            }

            .cls-2 {
              stroke-width: 3px;
            }

            .cls-3 {
              stroke: #1c7ff0;
              stroke-width: 20px;
            }

            .cls-4 {
              fill: #1c7ff0;
            }

            .cls-5 {
              stroke-width: 2.64px;
            }
          </style>
        </defs>
        <title>progress-bar</title>
        <path class="cls-1" d="M551.34,4.89A19,19,0,0,0,535,14.22H358.34a19,19,0,0,0-32.67,0H200.12a19,19,0,0,0-32.67,0H43.34a19,19,0,1,0-.4,20H167.85a19,19,0,0,0,31.86,0H326.08a19,19,0,0,0,31.86,0H535.41A19,19,0,1,0,551.34,4.89Z" transform="translate(-8.01 -4.87)"/>
        <circle class="cls-2" cx="175.8" cy="19.21" r="10.11"/>
        <circle class="cls-2" cx="334.04" cy="19.06" r="10.11"/>
        <circle class="cls-2" cx="19.06" cy="19.13" r="10.11"/>
        <circle class="cls-2" cx="543.4" cy="19" r="10.11"/>
        <line class="cls-3 progress-bar" x1="8.98" y1="19.47" x2="554.76" y2="19.47"/>
        <g>
          <circle class="cls-4 overlay-check-bubble processed" cx="19.06" cy="19.13" r="19"/>
          <g>
            <path class="cls-5 checkmark processed" d="M36.75,24a9.67,9.67,0,1,1-5.91-8.92" transform="translate(-8.01 -4.87)"/>
            <polyline class="cls-5 checkmark processed" points="15.34 17.83 19.04 21.68 27.45 12.46"/>
          </g>
        </g>
        <g>
          <circle class="cls-4 overlay-check-bubble shipped" cx="175.8" cy="19.21" r="19"/>
          <g>
            <path class="cls-5 checkmark shipped" d="M193.49,24.08a9.67,9.67,0,1,1-5.91-8.92" transform="translate(-8.01 -4.87)"/>
            <polyline class="cls-5 checkmark shipped" points="172.08 17.91 175.78 21.76 184.18 12.54"/>
          </g>
        </g>
        <g>
          <circle class="cls-4 overlay-check-bubble enroute" cx="334.04" cy="19.06" r="19"/>
          <g>
            <path class="cls-5 checkmark enroute" d="M351.73,23.93A9.67,9.67,0,1,1,345.82,15" transform="translate(-8.01 -4.87)"/>
            <polyline class="cls-5 checkmark enroute" points="330.31 17.76 334.02 21.61 342.42 12.39"/>
          </g>
        </g>
        <g>
          <circle class="cls-4 overlay-check-bubble arrived" cx="543.4" cy="19" r="19"/>
          <g>
            <path class="cls-5 checkmark arrived" d="M561.09,23.87a9.67,9.67,0,1,1-5.91-8.92" transform="translate(-8.01 -4.87)"/>
            <polyline class="cls-5 checkmark arrived" points="539.68 17.7 543.38 21.55 551.78 12.33"/>
          </g>
        </g>
      </svg>

          </div>
    
    <div class="order-status__status-info">
      
      <ol>
        <li class="order-status__status-info__step">
          <div class="icon">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%"
               viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
              <g>
                <g>
                  <path d="M400.292,32.064h-48.613v-5.276c0-12.572-18.105-17.987-31.724-20.966C302.789,2.068,280.076,0,256,0
                    s-46.789,2.068-63.954,5.823c-13.619,2.979-31.724,8.394-31.724,20.966v5.276h-48.613c-21.816,0-39.564,17.749-39.564,39.565
                    v400.806c0,21.816,17.749,39.564,39.564,39.564H400.29c21.816,0,39.564-17.749,39.564-39.564V71.629
                    C439.856,49.813,422.107,32.064,400.292,32.064z M175.324,27.751C179.771,23.209,207.419,15,256,15
                    c48.582,0,76.229,8.209,80.677,12.751v35.862c0,0.285-0.231,0.516-0.516,0.516H175.839c-0.285,0-0.516-0.232-0.516-0.516V27.751z
                     M400.292,497H111.709c-13.545,0-24.564-11.02-24.564-24.564V71.629c0-13.545,11.02-24.565,24.564-24.565h48.613v16.548
                    c0,8.556,6.96,15.516,15.516,15.516h160.322c8.556,0,15.516-6.961,15.516-15.516V47.064h48.613
                    c13.545,0,24.564,11.02,24.564,24.565v400.807h0.002C424.856,485.981,413.836,497,400.292,497z"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M392.274,64.129h-16.033c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h16.033c0.285,0,0.516,0.231,0.516,0.516
                    v352.709c0,0.285-0.231,0.516-0.516,0.516H119.727c-0.285,0-0.516-0.231-0.516-0.516V79.645c0-0.285,0.231-0.516,0.516-0.516
                    h16.033c4.142,0,7.5-3.358,7.5-7.5c0-4.142-3.358-7.5-7.5-7.5h-16.033c-8.556,0-15.516,6.96-15.516,15.516v352.709
                    c0,8.556,6.96,15.516,15.516,15.516h272.549c8.556,0,15.516-6.96,15.516-15.516V79.645
                    C407.792,71.09,400.831,64.129,392.274,64.129z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M183.855,128.259c-12.975,0-23.532,10.557-23.532,23.532c0,12.975,10.556,23.532,23.532,23.532
                    c12.976,0,23.532-10.557,23.532-23.532C207.388,138.816,196.831,128.259,183.855,128.259z M183.855,160.322
                    c-4.704,0-8.532-3.828-8.532-8.532s3.827-8.532,8.532-8.532c4.705,0,8.532,3.828,8.532,8.532S188.56,160.322,183.855,160.322z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M344.178,128.258H231.953c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h112.226c4.142,0,7.5-3.358,7.5-7.5
                    C351.678,131.616,348.32,128.258,344.178,128.258z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M239.969,160.323h-8.016c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h8.016c4.142,0,7.5-3.358,7.5-7.5
                    C247.469,163.681,244.11,160.323,239.969,160.323z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M304.096,160.323h-32.064c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h32.064c4.142,0,7.5-3.358,7.5-7.5
                    C311.596,163.681,308.239,160.323,304.096,160.323z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M183.855,200.404c-12.975,0-23.532,10.557-23.532,23.532c0,12.975,10.556,23.532,23.532,23.532
                    c12.976,0,23.532-10.557,23.532-23.532C207.388,210.961,196.831,200.404,183.855,200.404z M183.855,232.467
                    c-4.704,0-8.532-3.828-8.532-8.532s3.827-8.532,8.532-8.532c4.705,0,8.532,3.828,8.532,8.532S188.56,232.467,183.855,232.467z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M344.178,200.403H231.953c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h112.226c4.142,0,7.5-3.358,7.5-7.5
                    C351.678,203.761,348.32,200.403,344.178,200.403z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M239.969,232.468h-8.016c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h8.016c4.142,0,7.5-3.358,7.5-7.5
                    C247.469,235.826,244.11,232.468,239.969,232.468z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M304.096,232.468h-32.064c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h32.064c4.142,0,7.5-3.358,7.5-7.5
                    C311.596,235.826,308.239,232.468,304.096,232.468z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M183.855,272.549c-12.975,0-23.532,10.557-23.532,23.532c0,12.975,10.556,23.532,23.532,23.532
                    c12.976,0,23.532-10.557,23.532-23.532C207.388,283.106,196.831,272.549,183.855,272.549z M183.855,304.612
                    c-4.704,0-8.532-3.828-8.532-8.532c0-4.704,3.827-8.532,8.532-8.532c4.705,0,8.532,3.828,8.532,8.532
                    C192.388,300.784,188.56,304.612,183.855,304.612z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M344.178,272.548H231.953c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h112.226c4.142,0,7.5-3.358,7.5-7.5
                    C351.678,275.906,348.32,272.548,344.178,272.548z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M239.969,304.613h-8.016c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h8.016c4.142,0,7.5-3.358,7.5-7.5
                    C247.469,307.971,244.11,304.613,239.969,304.613z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M304.096,304.613h-32.064c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h32.064c4.142,0,7.5-3.358,7.5-7.5
                    C311.596,307.971,308.239,304.613,304.096,304.613z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M183.855,344.694c-12.975,0-23.532,10.557-23.532,23.532c0,12.975,10.556,23.532,23.532,23.532
                    c12.976,0,23.532-10.557,23.532-23.532C207.388,355.251,196.831,344.694,183.855,344.694z M183.855,376.758
                    c-4.704,0-8.532-3.828-8.532-8.532c0-4.704,3.827-8.532,8.532-8.532c4.705,0,8.532,3.828,8.532,8.532
                    C192.388,372.93,188.56,376.758,183.855,376.758z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M344.178,344.694H231.953c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h112.226c4.142,0,7.5-3.358,7.5-7.5
                    C351.678,348.052,348.32,344.694,344.178,344.694z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M239.969,376.758h-8.016c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h8.016c4.142,0,7.5-3.358,7.5-7.5
                    C247.469,380.116,244.11,376.758,239.969,376.758z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M304.096,376.758h-32.064c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h32.064c4.142,0,7.5-3.358,7.5-7.5
                    C311.596,380.116,308.239,376.758,304.096,376.758z"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M256.041,32.064h-0.08c-4.142,0-7.46,3.358-7.46,7.5c0,4.142,3.398,7.5,7.54,7.5c4.142,0,7.5-3.358,7.5-7.5
                    C263.541,35.422,260.182,32.064,256.041,32.064z"/>
                </g>
              </g>
            </svg>
          </div>
          <div class="status">
            <span>Order</span>
            <span>Processed</span>
          </div>
        </li>
        <li class="order-status__status-info__step">
          <div class="icon">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
              <g>
                <g>
                  <path d="M491.729,112.971L259.261,0.745c-2.061-0.994-4.461-0.994-6.521,0L20.271,112.971c-2.592,1.251-4.239,3.876-4.239,6.754
                    v272.549c0,2.878,1.647,5.503,4.239,6.754l232.468,112.226c1.03,0.497,2.146,0.746,3.261,0.746s2.23-0.249,3.261-0.746
                    l232.468-112.226c2.592-1.251,4.239-3.876,4.239-6.754V119.726C495.968,116.846,494.32,114.223,491.729,112.971z M256,15.828
                    l215.217,103.897l-62.387,30.118c-0.395-0.301-0.812-0.579-1.27-0.8L193.805,45.853L256,15.828z M176.867,54.333l214.904,103.746
                    l-44.015,21.249L132.941,75.624L176.867,54.333z M396.799,172.307v78.546l-41.113,19.848v-78.546L396.799,172.307z
                     M480.968,387.568L263.5,492.55V236.658l51.873-25.042c3.73-1.801,5.294-6.284,3.493-10.015
                    c-1.801-3.729-6.284-5.295-10.015-3.493L256,223.623l-20.796-10.04c-3.731-1.803-8.214-0.237-10.015,3.493
                    c-1.801,3.73-0.237,8.214,3.493,10.015l19.818,9.567V492.55L31.032,387.566V131.674l165.6,79.945
                    c1.051,0.508,2.162,0.748,3.255,0.748c2.788,0,5.466-1.562,6.759-4.241c1.801-3.73,0.237-8.214-3.493-10.015l-162.37-78.386
                    l74.505-35.968L340.582,192.52c0.033,0.046,0.07,0.087,0.104,0.132v89.999c0,2.581,1.327,4.98,3.513,6.353
                    c1.214,0.762,2.599,1.147,3.988,1.147c1.112,0,2.227-0.247,3.26-0.746l56.113-27.089c2.592-1.251,4.239-3.875,4.239-6.754v-90.495
                    l69.169-33.392V387.568z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M92.926,358.479L58.811,342.01c-3.732-1.803-8.214-0.237-10.015,3.493c-1.801,3.73-0.237,8.214,3.493,10.015
                    l34.115,16.469c1.051,0.508,2.162,0.748,3.255,0.748c2.788,0,5.466-1.562,6.759-4.241
                    C98.22,364.763,96.656,360.281,92.926,358.479z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M124.323,338.042l-65.465-31.604c-3.731-1.801-8.214-0.237-10.015,3.494c-1.8,3.73-0.236,8.214,3.494,10.015
                    l65.465,31.604c1.051,0.507,2.162,0.748,3.255,0.748c2.788,0,5.466-1.562,6.759-4.241
                    C129.617,344.326,128.053,339.842,124.323,338.042z"/>
                </g>
              </g>
            </svg>
          </div>
          <div class="status">
            <span>Order</span>
            <span>Shipped</span>
          </div>
        </li>
        <li class="order-status__status-info__step">
          <div class="icon">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%"
               viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
              <g>
                <g>
                  <path d="M111.709,344.693c-8.556,0-15.516,6.96-15.516,15.516c0,8.556,6.96,15.516,15.516,15.516
                    c8.556,0,15.516-6.96,15.516-15.516C127.225,351.653,120.265,344.693,111.709,344.693z"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M432.355,344.693c-8.556,0-15.516,6.96-15.516,15.516c0,8.556,6.96,15.516,15.516,15.516
                    c8.556,0,15.516-6.96,15.516-15.516C447.871,351.653,440.911,344.693,432.355,344.693z"/>
                </g>
              </g>
              <g>
                <g>
                  <path d="M495.909,245.23l-57.744-19.248l-26.989-74.218c-3.369-9.265-12.256-15.49-22.115-15.49h-69.448v-16.549
                    c0-8.556-6.96-15.516-15.516-15.516H15.516C6.96,104.209,0,111.17,0,119.726v216.436c0,8.556,6.96,15.516,15.516,15.516H64.91
                    c-0.504,2.77-0.781,5.619-0.781,8.532c0,26.236,21.345,47.581,47.581,47.581s47.581-21.345,47.581-47.581
                    c0-2.914-0.277-5.762-0.781-8.532h227.047c-0.504,2.77-0.781,5.619-0.781,8.532c0,26.236,21.345,47.581,47.581,47.581
                    c26.236,0,47.581-21.345,47.581-47.581c0-3.706-0.44-7.31-1.245-10.774l15.871-7.935C505.318,336.122,512,325.309,512,313.282
                    v-45.727C512,257.411,505.534,248.439,495.909,245.23z M15,119.726c0-0.285,0.231-0.517,0.516-0.517h288.581
                    c0.285,0,0.516,0.231,0.516,0.516v160.839H15V119.726z M111.709,392.791c-17.965,0-32.581-14.616-32.581-32.581
                    c0-17.965,14.616-32.581,32.581-32.581c17.965,0,32.581,14.616,32.581,32.581C144.291,378.175,129.675,392.791,111.709,392.791z
                     M304.613,336.677H153.038c-8.203-14.349-23.65-24.048-41.329-24.048c-17.679,0-33.125,9.699-41.328,24.048H15.516
                    c-0.285,0-0.516-0.231-0.516-0.516v-40.597h289.613V336.677z M406.698,183.339l14.95,41.113h-16.104l-14.95-41.113H406.698z
                     M319.613,151.274h69.448c3.575,0,6.797,2.257,8.019,5.616l4.163,11.448h-81.63V151.274z M319.613,183.339h55.02l14.95,41.113
                    h-69.97V183.339z M432.355,392.791c-17.965,0-32.581-14.616-32.581-32.581c0-17.965,14.616-32.581,32.581-32.581
                    c17.965,0,32.581,14.616,32.581,32.581C464.936,378.175,450.32,392.791,432.355,392.791z M497,280.563h-8.532
                    c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5H497v17.718c0,6.31-3.505,11.981-9.147,14.803l-14.847,7.423
                    c-8.36-13.707-23.454-22.878-40.651-22.878c-17.679,0-33.125,9.699-41.328,24.048h-71.414v-41.113h136.791
                    c4.142,0,7.5-3.358,7.5-7.5c0-4.142-3.358-7.5-7.5-7.5H319.613v-41.113h111.525l60.028,20.009c3.49,1.163,5.834,4.416,5.834,8.094
                    V280.563z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M251.705,193.375l-56.113-32.064c-3.595-2.055-8.177-0.805-10.233,2.791c-2.055,3.597-0.806,8.178,2.791,10.233
                    l31.592,18.053H71.629c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.499,7.5,7.499h148.113L188.15,225.44
                    c-3.596,2.055-4.846,6.636-2.791,10.233c1.384,2.422,3.915,3.78,6.519,3.78c1.262,0,2.541-0.319,3.714-0.99l56.113-32.064
                    c2.336-1.335,3.779-3.82,3.779-6.512C255.484,197.195,254.042,194.711,251.705,193.375z"/>
                </g>
              </g>
            </svg>
          </div>
          <div class="status">
            <span>Order</span>
            <span>En Route</span>
          </div>
        </li>
        <li class="order-status__status-info__step">
          <div class="icon">
            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="100%"
	 viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
              <g>
                <g>
                  <path d="M488.468,448.903h-8.532V226.4C499.202,214.003,512,192.386,512,167.822c0-1.305-0.341-2.588-0.988-3.721L451.499,59.953
                    c-4.18-7.313-12.009-11.857-20.432-11.857H80.933c-8.423,0-16.252,4.543-20.432,11.857L0.988,164.101
                    C0.341,165.234,0,166.518,0,167.822c0,24.564,12.798,46.181,32.064,58.578v222.503h-8.532c-4.142,0-7.5,3.358-7.5,7.5
                    c0,4.142,3.358,7.5,7.5,7.5h464.936c4.143,0,7.5-3.358,7.5-7.5C495.968,452.261,492.61,448.903,488.468,448.903z M15.517,175.322
                    h24.044c4.142,0,7.5-3.358,7.5-7.5c0-4.142-3.358-7.5-7.5-7.5H20.424l53.101-92.927c1.516-2.652,4.354-4.299,7.408-4.299h350.134
                    c3.054,0,5.893,1.647,7.408,4.299l53.1,92.927h-19.141c-4.143,0-7.5,3.358-7.5,7.5c0,4.142,3.357,7.5,7.5,7.5h24.048
                    c-3.667,26.584-26.532,47.125-54.108,47.125c-27.575,0-50.429-20.543-54.097-47.125h52.096c4.143,0,7.5-3.358,7.5-7.5
                    c0-4.142-3.357-7.5-7.5-7.5H71.631c-4.142,0-7.5,3.358-7.5,7.5c0,4.142,3.358,7.5,7.5,7.5h52.091
                    c-3.668,26.582-26.523,47.125-54.097,47.125C42.049,222.447,19.184,201.906,15.517,175.322z M372.222,175.322
                    c-3.668,26.582-26.523,47.125-54.097,47.125c-27.575,0-50.429-20.543-54.097-47.125H372.222z M247.972,175.322
                    c-3.668,26.582-26.523,47.125-54.097,47.125c-27.574,0-50.429-20.543-54.097-47.125H247.972z M424.854,448.904h-81.193v-25.081
                    h81.193V448.904z M424.854,408.823h-81.193V271.516h81.193V408.823z M464.936,448.904h-25.081V264.016c0-4.142-3.357-7.5-7.5-7.5
                    h-96.193c-4.143,0-7.5,3.358-7.5,7.5v184.887H47.064V233.674c7.081,2.433,14.665,3.773,22.561,3.773
                    c27.095,0,50.624-15.556,62.125-38.207c11.501,22.65,35.03,38.207,62.125,38.207c27.095,0,50.624-15.556,62.125-38.207
                    c11.501,22.65,35.03,38.207,62.125,38.207c27.095,0,50.624-15.556,62.125-38.207c11.501,22.65,35.03,38.207,62.125,38.207
                    c7.896,0,15.48-1.34,22.561-3.772V448.904z"/>
                </g>
              </g>
              <g>
                <g>
                  <path class="accented" d="M296.081,256.516H79.645c-4.142,0-7.5,3.358-7.5,7.5v152.307c0,4.142,3.358,7.5,7.5,7.5h216.436
                    c4.143,0,7.5-3.358,7.5-7.5V264.016C303.581,259.873,300.224,256.516,296.081,256.516z M288.581,408.823H87.145V271.516h201.436
                    V408.823z"/>
                </g>
              </g>
            </svg>
          </div>
          <div class="status">
            <span>Order</span>
            <span>Arrived</span>
          </div>
        </li>
      </ol>
    </div>
  </article>
</div>

<!-- 
Future buttons
<div class="controls">
  <button id="js-processed">Processed</button>
  <button id="js-shipped">Ship it!</button>
  <button id="js-en-route">En Route</button>
  <button id="js-arrived">Arrived</button>
</div> -->



              </div>
           
            </div>

          </div>
          <div class="col-md-4">
            <!--box-widget-->
            <div class="dashboard-widget-title fl-wrap">Recent Quotes</div>
            <div class="dashboard-list-box  fl-wrap">
              <!-- dashboard-list end-->
              <div class="dashboard-list fl-wrap">
                <div class="dashboard-message">
                  <span class="close-dashboard-item color-bg"><i class="fal fa-times"></i></span>
                  <div class="main-dashboard-message-icon color-bg"><i class="far fa-check"></i></div>
                  <div class="main-dashboard-message-text">
                    <p>Your order <a href="#">Red Dried Peppers</a> has been approved! </p>
                  </div>
                  <div class="main-dashboard-message-time"><i class="fal fa-calendar-week"></i> 28 may 2020</div>
                </div>
              </div>
              <!-- dashboard-list end-->
              <!-- dashboard-list end-->
              <div class="dashboard-list fl-wrap">
                <div class="dashboard-message">
                  <span class="close-dashboard-item color-bg"><i class="fal fa-times"></i></span>
                  <div class="main-dashboard-message-icon color-bg"><i class="fal fa-comment-alt"></i></div>
                  <div class="main-dashboard-message-text">
                    <p> Status Update : <a href="#">Order Shipped | Red Peppers</a>!</p>
                  </div>
                  <div class="main-dashboard-message-time"><i class="fal fa-calendar-week"></i> 28 may 2020</div>
                </div>
              </div>
              <!-- dashboard-list end-->
              <!-- dashboard-list end-->
              <div class="dashboard-list fl-wrap">
                <div class="dashboard-message">
                  <span class="close-dashboard-item color-bg"><i class="fal fa-times"></i></span>
                  <div class="main-dashboard-message-icon color-bg"><i class="far fa-heart"></i></div>
                  <div class="main-dashboard-message-text">
                    <p><a href="#">Hectar</a> shipped your order <a href="#">(Red Peppers)</a>!</p>
                  </div>
                  <div class="main-dashboard-message-time"><i class="fal fa-calendar-week"></i> 28 may 2020</div>
                </div>
              </div>
              <!-- dashboard-list end-->
            </div>
            <!--box-widget end -->
            <!--box-widget-->
            <div class="box-widget fl-wrap">
              <div class="banner-widget fl-wrap">
                <div class="bg-wrap bg-parallax-wrap-gradien">
                  <div class="bg  " data-bg="images/all/blog/1.jpg"
                    style="background-image: url(&quot;images/all/blog/1.jpg&quot;);"></div>
                </div>
                <div class="banner-widget_content">
                  <h5>Participate in our loyalty program. Refer and get discounts.</h5>
                  <a href="#" class="btn float-btn color-bg small-btn">Learn More</a>
                </div>
              </div>
            </div>
            <!--box-widget end -->
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- content end -->
  <div class="dashbard-bg gray-bg"></div>
</div>
<!-- wrapper end -->
< @stop