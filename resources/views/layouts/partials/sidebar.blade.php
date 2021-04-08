<div id="sideBar" class="sidebar__wrapper animated faster">
    <!-- sidebar content -->
    <div class="content">
        <!-- sidebar toggle -->
        <div class="close_button">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <!-- end sidebar toggle -->
        <!-- link -->
        <a href="{{ route('dashboard.index')  }}" class="links sidebar__links">
            <span class="links__icon">
                <i class="fad fa-shopping-cart"></i>
            </span>
            <span class="links__text">dashboard</span>
        </a>
        <!-- end link -->
        <!-- link -->
        <a href="{{ route("products.index")  }}" class="links sidebar__links">
            <span class="links__icon">
                <i class="fad fa-envelope-open-text"></i>
            </span>
            <span class="links__text">Products</span>
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#" class="links sidebar__links">
            <span class="links__icon">
                <i class="fad fa-comments"></i>
            </span>
            <span class="links__text">chat</span>
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#" class="links sidebar__links">
            <span class="links__icon">
                <i class="fad fa-shield-check"></i>
            </span>
            <span class="links__text">todo</span>
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#" class="links sidebar__links">
            <span class="links__icon">
                <i class="fad fa-calendar-edit"></i>
            </span>
            <span class="links__text">calendar</span>
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#" class="links sidebar__links">
            <span class="links__icon">
                <i class="fad fa-file-invoice-dollar"></i>
            </span>
            <span class="links__text">invoice</span>
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#" class="links sidebar__links">
            <span class="links__icon">
                <i class="fad fa-folder-open"></i>
            </span>
            <span class="links__text">file manager</span>
        </a>
        <!-- end link -->
    </div>
    <!-- end sidebar content -->

</div>
