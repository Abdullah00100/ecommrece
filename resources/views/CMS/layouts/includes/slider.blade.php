 <!-- Menu -->

 <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
     <div class="app-brand demo">
         <a href="{{ route('dashboard.index') }}" class="app-brand-link" style="margin:0 auto; ">
             <span class="app-brand-logo demo ">
                 {{-- <img src="{{ asset('logo.png') }}" width="100%" height="100px" alt=""> --}}
                 LOGO
             </span>
         </a>

         <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
             <i class="bx bx-chevron-left bx-sm align-middle"></i>
         </a>
     </div>

     <div class="menu-inner-shadow"></div>

     <ul class="menu-inner py-1 mt-5">
        <!-- Dashboard -->
        <li class="menu-item {{ Route::is('dashboard.index') ? 'active' : '' }}">
            <a href="{{ route('dashboard.index') }}" class="menu-link">
                <i class="menu-icon tf-icons bx bx-home-circle"></i>
                <div data-i18n="Analytics">Dashboard</div>
            </a>
        </li>
        <li
            class="menu-item {{ Route::is('products.index')  ? 'open' : '' }}">
            <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon tf-icons bx bx-layout"></i>
                <div data-i18n="Layouts">Products</div>
            </a>

            <ul class="menu-sub">
            <li class="menu-item {{ Route::is('products.index') ? 'active' : '' }}">
                <a href="{{ route('products.index') }}"
                    class="menu-link {{ Route::is('products.index') ? 'open' : '' }}">
                    <div data-i18n="Without menu">All</div>
                </a>
            </li>
            </ul>
        </li>
        </li> 
        
     </ul>
 </aside>
