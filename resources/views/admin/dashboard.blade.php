@extends('layout.admin.adminmain')


@section('title', 'Amar Asom')




@section('content')
 <!-- Content Wrapper. Contains page content -->
 
  
  
    
    <div class="projects-section">
      <div class="projects-section-header">
        <p>Dashboard</p>
        <p class="time">December, 12</p>
      </div>
      <div class="projects-section-line">
        <div class="projects-status">
          <div class="item-status">
            <span class="status-number">45</span>
            <span class="status-type">Customers</span>
          </div>
          <div class="item-status">
            <span class="status-number">24</span>
            <span class="status-type">Orders</span>
          </div>
          <div class="item-status">
            <span class="status-number">$ 62000.00</span>
            <span class="status-type">Revenue</span>
          </div>
        </div>
        <div class="view-actions">
          <button class="view-btn list-view" title="List View">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-list">
              <line x1="8" y1="6" x2="21" y2="6" />
              <line x1="8" y1="12" x2="21" y2="12" />
              <line x1="8" y1="18" x2="21" y2="18" />
              <line x1="3" y1="6" x2="3.01" y2="6" />
              <line x1="3" y1="12" x2="3.01" y2="12" />
              <line x1="3" y1="18" x2="3.01" y2="18" /></svg>
          </button>
          <button class="view-btn grid-view active" title="Grid View">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-grid">
              <rect x="3" y="3" width="7" height="7" />
              <rect x="14" y="3" width="7" height="7" />
              <rect x="14" y="14" width="7" height="7" />
              <rect x="3" y="14" width="7" height="7" /></svg>
          </button>
        </div>
      </div>
      <div class="project-boxes jsGridView">
        <div class="project-box-wrapper">
          <div class="project-box" style="background-color: #fee4cb;">
            <div class="project-box-header">
              <span>December 10, 2020</span>
              <div class="more-wrapper">
                <button class="project-btn-more">
                  <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                    <circle cx="12" cy="12" r="1" />
                    <circle cx="12" cy="5" r="1" />
                    <circle cx="12" cy="19" r="1" /></svg>
                </button>
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Red Peppers</p>
          <p class="box-content-subheader">Sri Lanka</p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Srinath Srinivasan</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 20%; background-color: #ff942e"></span>
          </div>
          <p class="box-progress-percentage">$1010.00</p>
        </div>
        <div class="project-box-footer">
          <div class="participants">
            
            <button class="add-participant" style="color: #ff942e;">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                <path d="M12 5v14M5 12h14" />
              </svg>
            </button>
          </div>
          <div class="days-left" style="color: #ff942e;">
            Confirmed
          </div>
        </div>
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #e9e7fd;">
        <div class="project-box-header">
          <span>December 10, 2020</span>
          <div class="more-wrapper">
            <button class="project-btn-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Red Peppers</p>
          <p class="box-content-subheader">Singapore</p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Harshit Saxena</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 40%; background-color: #4f3ff0"></span>
          </div>
          <p class="box-progress-percentage">$400.00</p>
        </div>
        <div class="project-box-footer">
          <div class="participants">
           
            <button class="add-participant" style="color: #4f3ff0;">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <path d="M12 5v14M5 12h14" />
              </svg>
            </button>
          </div>
          <div class="days-left" style="color: #4f3ff0;">
            Goods Ready
          </div>
        </div>
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box">
        <div class="project-box-header">
          <span>December 10, 2020</span>
          <div class="more-wrapper">
            <button class="project-btn-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Red Peppers</p>
          <p class="box-content-subheader">Dubai</p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Srinath Srinivasan</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 90%; background-color: #096c86"></span>
          </div>
          <p class="box-progress-percentage">$1000.50</p>
        </div>
        <div class="project-box-footer">
          <div class="participants">
            
            <button class="add-participant" style="color: #096c86;">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <path d="M12 5v14M5 12h14" />
              </svg>
            </button>
          </div>
          <div class="days-left" style="color: #096c86;">
          Shipped
          </div>
        </div>
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #ffd3e2;">
        <div class="project-box-header">
          <span>December 10, 2020</span>
          <div class="more-wrapper">
            <button class="project-btn-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Red Peppers</p>
          <p class="box-content-subheader">Sri Lanka</p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Sibhi Kumaran</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 60%; background-color: #df3670"></span>
          </div>
          <p class="box-progress-percentage">$1000.00</p>
        </div>
        <div class="project-box-footer">
          <div class="participants">
            <button class="add-participant" style="color: #df3670;">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <path d="M12 5v14M5 12h14" />
              </svg>
            </button>
          </div>
          <div class="days-left" style="color: #df3670;">
          Quaity Check
          </div>
        </div>
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #c8f7dc;">
        <div class="project-box-header">
          <span>December 10, 2020</span>
          <div class="more-wrapper">
            <button class="project-btn-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Red Peppers</p>
          <p class="box-content-subheader">Singapore</p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Srinath Srinivasan</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 100%; background-color: #34c471"></span>
          </div>
          <p class="box-progress-percentage">$1000.00</p>
        </div>
        <div class="project-box-footer">
          <div class="participants">
            
            <button class="add-participant" style="color: #34c471;">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <path d="M12 5v14M5 12h14" />
              </svg>
            </button>
          </div>
          <div class="days-left" style="color: #34c471;">
            Delivered
          </div>
        </div>
      </div>
    </div>
    <div class="project-box-wrapper">
      <div class="project-box" style="background-color: #d5deff;">
        <div class="project-box-header">
          <span>December 10, 2020</span>
          <div class="more-wrapper">
            <button class="project-btn-more">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-more-vertical">
                <circle cx="12" cy="12" r="1" />
                <circle cx="12" cy="5" r="1" />
                <circle cx="12" cy="19" r="1" /></svg>
            </button>
          </div>
        </div>
        <div class="project-box-content-header">
          <p class="box-content-header">Red Peppers</p>
          <p class="box-content-subheader">Dubai</p>
        </div>
        <div class="box-progress-wrapper">
          <p class="box-progress-header">Harshit Saxena</p>
          <div class="box-progress-bar">
            <span class="box-progress" style="width: 80%; background-color: #4067f9"></span>
          </div>
          <p class="box-progress-percentage">$4040.50</p>
        </div>
        <div class="project-box-footer">
          <div class="participants">
            
            <button class="add-participant" style="color: #4067f9;">
              <svg xmlns="http://www.w3.org/2000/svg" width="12" height="12" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus">
                <path d="M12 5v14M5 12h14" />
              </svg>
            </button>
          </div>
          <div class="days-left" style="color: #4067f9;">
          Loading
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<div class="messages-section">
  <button class="messages-close">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle">
      <circle cx="12" cy="12" r="10" />
      <line x1="15" y1="9" x2="9" y2="15" />
      <line x1="9" y1="9" x2="15" y2="15" /></svg>
  </button>
  <div class="projects-section-header">
    <p>Recent Enquiries</p>
  </div>
  <div class="messages">
    <div class="message-box">
      <img src="https://images.unsplash.com/photo-1438761681033-6461ffad8d80?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="profile image">
      <div class="message-content">
        <div class="message-header">
          <div class="name">Stephanie</div>
          <div class="star-checkbox">
            <input type="checkbox" id="star-1">
            <label for="star-1">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
            </label>
          </div>
        </div>
        <p class="message-line">
          I got your first assignment. It was quite good. 🥳 We can continue with the next assignment.
        </p>
        <p class="message-line time">
          Dec, 12
        </p>
      </div>
    </div>
    <div class="message-box">
      <img src="https://images.unsplash.com/photo-1600486913747-55e5470d6f40?ixid=MXwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=2550&q=80" alt="profile image">
      <div class="message-content">
        <div class="message-header">
          <div class="name">Mark</div>
          <div class="star-checkbox">
            <input type="checkbox" id="star-2">
            <label for="star-2">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
            </label>
          </div>
        </div>
        <p class="message-line">
          Hey, can tell me about progress of project? I'm waiting for your response.
        </p>
        <p class="message-line time">
          Dec, 12
        </p>
      </div>
    </div>
    <div class="message-box">
      <img src="https://images.unsplash.com/photo-1543965170-4c01a586684e?ixid=MXwxMjA3fDB8MHxzZWFyY2h8NDZ8fG1hbnxlbnwwfDB8MHw%3D&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="profile image">
      <div class="message-content">
        <div class="message-header">
          <div class="name">David</div>
          <div class="star-checkbox">
            <input type="checkbox" id="star-3">
            <label for="star-3">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
            </label>
          </div>
        </div>
        <p class="message-line">
          Awesome! 🤩 I like it. We can schedule a meeting for the next one.
        </p>
        <p class="message-line time">
          Dec, 12
        </p>
      </div>
    </div>
    <div class="message-box">
      <img src="https://images.unsplash.com/photo-1533993192821-2cce3a8267d1?ixid=MXwxMjA3fDB8MHxzZWFyY2h8MTl8fHdvbWFuJTIwbW9kZXJufGVufDB8fDB8&ixlib=rb-1.2.1&auto=format&fit=crop&w=900&q=60" alt="profile image">
      <div class="message-content">
        <div class="message-header">
          <div class="name">Jessica</div>
          <div class="star-checkbox">
            <input type="checkbox" id="star-4">
            <label for="star-4">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-star">
                <polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2" /></svg>
            </label>
          </div>
        </div>
        <p class="message-line">
          I am really impressed! Can't wait to see the final result.
        </p>
        <p class="message-line time">
          Dec, 11
        </p>
      </div>
    </div>
  </div>
</div>

@endsection