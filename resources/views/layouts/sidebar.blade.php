<nav class="sidebar">
    <div class="sidebar-header">
       <a href="#" class="sidebar-brand">
       Noble<span>UI</span>
       </a>
       <div class="sidebar-toggler not-active">
          <span></span>
          <span></span>
          <span></span>
       </div>
    </div>
    <div class="sidebar-body">
       <ul class="nav">
          <li class="nav-item nav-category">Main</li>
          <li class="nav-item active">
             <a href="{{ url('home') }}" class="nav-link">
             <i class="link-icon" data-feather="box"></i>
             <span class="link-title">Dashboard</span>
             </a>
          </li>
          <li class="nav-item nav-category">web apps</li>
          {{-- <li class="nav-item ">
             <a class="nav-link" data-bs-toggle="collapse" href="#email" role="button" aria-expanded="false" aria-controls="email">
             <i class="link-icon" data-feather="mail"></i>
             <span class="link-title">Email</span>
             <i class="link-arrow" data-feather="chevron-down"></i>
             </a>
             <div class="collapse " id="email">
                <ul class="nav sub-menu">
                   <li class="nav-item">
                      <a href="https://www.nobleui.com/laravel/template/demo1/email/inbox" class="nav-link ">Inbox</a>
                   </li>
                   <li class="nav-item">
                      <a href="https://www.nobleui.com/laravel/template/demo1/email/read" class="nav-link ">Read</a>
                   </li>
                   <li class="nav-item">
                      <a href="https://www.nobleui.com/laravel/template/demo1/email/compose" class="nav-link ">Compose</a>
                   </li>
                </ul>
             </div>
          </li> --}}
          @hasrole('admin')
          <li class="nav-item ">
             <a href="{{ url('admin/materi') }}" class="nav-link">
             <i class="link-icon" data-feather="user"></i>
             <span class="link-title">User</span>
             </a>
          </li>
          <li class="nav-item ">
             <a href="{{ url('admin/payment') }}" class="nav-link">
             <i class="link-icon" data-feather="calendar"></i>
             <span class="link-title">Payment</span>
             </a>
          </li>
          <li class="nav-item ">
             <a href="{{ url('admin/template') }}" class="nav-link">
             <i class="link-icon" data-feather="message-square"></i>
             <span class="link-title">Template</span>
             </a>
          </li>
          @endrole
          @hasrole('user')
          <li class="nav-item ">
            <a href="{{ url('user/website') }}" class="nav-link">
               <i class="link-icon" data-feather="message-square"></i>
               <span class="link-title">Website</span>
            </a>
         </li>
          <li class="nav-item ">
            <a href="{{ url('user/set-template') }}" class="nav-link">
               <i class="link-icon" data-feather="message-square"></i>
               <span class="link-title">Template</span>
            </a>
         </li>
          {{-- <li class="nav-item ">
            <a href="{{ url('user/konten-sosmed') }}" class="nav-link">
               <i class="link-icon" data-feather="calendar"></i>
               <span class="link-title">Konten Sosmed</span>
            </a>
         </li>
          <li class="nav-item ">
            <a href="{{ url('user/account-sosmed') }}" class="nav-link">
               <i class="link-icon" data-feather="bell"></i>
               <span class="link-title">Account Sosmed</span>
            </a>
         </li> --}}
          @endrole
          {{-- <li class="nav-item ">
             <a href="{{ url('admin/quiz') }}" class="nav-link">
             <i class="link-icon" data-feather="calendar"></i>
             <span class="link-title">Tentang Aplikasi</span>
             </a>
          </li> --}}
          <li class="nav-item nav-category">Profile</li>
          
          <li class="nav-item nav-category">Docs</li>
          {{-- logout --}}
          <li class="nav-item">
               <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
               <i class="link-icon" data-feather="log-out"></i>
               <span class="link-title">Logout</span>
               </a>
               <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                  @csrf
               </form>
          </li>
       </ul>
    </div>
 </nav>
 <nav class="settings-sidebar">
    <div class="sidebar-body">
       <a href="#" class="settings-sidebar-toggler">
       <i data-feather="settings"></i>
       </a>
       <h6 class="text-muted mb-2">Sidebar:</h6>
       <div class="mb-3 pb-3 border-bottom">
          <div class="form-check form-check-inline">
             <label class="form-check-label">
             <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarLight" value="sidebar-light" checked>
             Light
             </label>
          </div>
          <div class="form-check form-check-inline">
             <label class="form-check-label">
             <input type="radio" class="form-check-input" name="sidebarThemeSettings" id="sidebarDark" value="sidebar-dark">
             Dark
             </label>
          </div>
       </div>
       <div class="theme-wrapper">
          <h6 class="text-muted mb-2">Light Version:</h6>
          <a class="theme-item active" href="https://www.nobleui.com/laravel/template/demo1/">
          <img src="https://www.nobleui.com/laravel/template/demo1/assets/images/screenshots/light.jpg" alt="light version">
          </a>
          <h6 class="text-muted mb-2">Dark Version:</h6>
          <a class="theme-item" href="https://www.nobleui.com/laravel/template/demo2/">
          <img src="https://www.nobleui.com/laravel/template/demo1/assets/images/screenshots/dark.jpg" alt="light version">
          </a>
       </div>
    </div>
 </nav>