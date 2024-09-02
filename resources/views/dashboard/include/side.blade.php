<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
        <a href="{{route('dashboard')}}" class="app-brand-link">
              <span class="app-brand-logo demo me-1">
                <span style="color: var(--bs-primary)">
                  
                </span>
              </span>
            <span class="app-brand-text demo menu-text fw-semibold ms-2">CARHUB</span>
        </a>


    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
        <!-- Dashboards -->

        <li class="menu-item">
            <a href="{{route('dashboard')}}" class="menu-link">
                <i class="menu-icon tf-icons ri-bank-card-2-line"></i>
                <div data-i18n="Basic">Dashboard</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{route('car.index')}}" class="menu-link">
                <i data-v-38237799="" class="ri-car-fill"  style="padding-right: 8px;"  ></i>
                <div data-i18n="Basic">Cars</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{route('rental.index')}}" class="menu-link">
                <i class="ri-money-dollar-box-fill" style="padding-right: 8px;" ></i>
                <div data-i18n="Basic">Rentals</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{route('user.index')}}" class="menu-link">
                <i class="ri-user-line" style="padding-right: 8px;" ></i>
                <div data-i18n="Basic">Users</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{route('testimonials.index')}}" class="menu-link">
                <i class="ri-group-line" style="padding-right: 8px;" ></i>
                <div data-i18n="Basic">Testimonials</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route("reviews.index")}}" class="menu-link">
                <i class="ri-eye-fill"style="padding-right: 8px;"></i>
                <div data-i18n="Basic">Car Review</div>
            </a>
        </li>
        <li class="menu-item">
            <a href="{{route("brands.index")}}" class="menu-link">
                <i class="ri-taxi-fill" style="padding-right: 8px;"></i>
                <div data-i18n="Basic">Brand</div>
            </a>
        </li>

        <li class="menu-item">
            <a href="{{route("contact.index")}}" class="menu-link">
                <i class="ri-contacts-book-fill" style="padding-right: 8px;"></i>
                <div data-i18n="Basic">Contact</div>
            </a>
        </li>


    </ul>
</aside>
