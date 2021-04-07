<div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 p-3 flex-none w-28 md:-ml-28 md:fixed md:top-0 md:z-30 md:h-screen md:shadow-xl animated faster">
    <!-- sidebar content -->
    <div class="flex flex-col">
        <!-- sidebar toggle -->
        <div class="text-right hidden md:block mb-5">
            <button id="sideBarHideBtn">
                <i class="fad fa-times-circle"></i>
            </button>
        </div>
        <!-- end sidebar toggle -->
        <!-- link -->
        <a href="{{ route('dashboard.index')  }}" class="mb-5 text-center capitalize hover:text-teal-600 transition ease-in-out duration-500">
            <span class="block">
                <i class="fad fa-shopping-cart text-2xl "></i>
            </span>
            <span class="text-sm">dashboard</span>
        </a>
        <!-- end link -->
        <!-- link -->
        <a href="{{ route("products.index")  }}" class="mb-5 text-center capitalize hover:text-teal-600 transition ease-in-out duration-500">
            <span class="block">
                <i class="fad fa-envelope-open-text text-2xl "></i>
            </span>
            <span class="text-sm">Products</span>
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#" class="mb-5 text-center capitalize hover:text-teal-600 transition ease-in-out duration-500">
            <span class="block">
                <i class="fad fa-comments text-2xl "></i>
            </span>
            <span class="text-sm">chat</span>
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#" class="mb-5 text-center capitalize hover:text-teal-600 transition ease-in-out duration-500">
            <span class="block">
                <i class="fad fa-shield-check text-2xl "></i>
            </span>
            <span class="text-sm">todo</span>
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#" class="mb-5 text-center capitalize hover:text-teal-600 transition ease-in-out duration-500">
            <span class="block">
                <i class="fad fa-calendar-edit text-2xl "></i>
            </span>
            <span class="text-sm">calendar</span>
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#" class="mb-5 text-center capitalize hover:text-teal-600 transition ease-in-out duration-500">
            <span class="block">
                <i class="fad fa-file-invoice-dollar text-2xl "></i>
            </span>
            <span class="text-sm">invoice</span>
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#" class="mb-5 text-center capitalize hover:text-teal-600 transition ease-in-out duration-500">
            <span class="block">
                <i class="fad fa-folder-open text-2xl "></i>
            </span>
            <span class="text-sm">file manager</span>
        </a>
        <!-- end link -->


{{--        <p class="uppercase text-xs text-gray-600 mb-4 mt-4 tracking-wider">UI Elements</p>--}}

{{--        <!-- link -->--}}
{{--        <a href="./typography.html" class="mb-3 capitalize hover:text-teal-600 transition ease-in-out duration-500">--}}
{{--            <span class="block">--}}
{{--                <i class="fad fa-text text-xl mr-2"></i>--}}
{{--            </span>--}}
{{--            <span class="text-xs">typography</span>--}}
{{--        </a>--}}
{{--        <!-- end link -->--}}

{{--        <!-- link -->--}}
{{--        <a href="./alert.html" class="mb-3 capitalize hover:text-teal-600 transition ease-in-out duration-500">--}}
{{--            <span class="block">--}}
{{--                <i class="fad fa-whistle text-xl mr-2"></i>--}}
{{--            </span>--}}
{{--            <span class="text-xs">alerts</span>--}}
{{--        </a>--}}
{{--        <!-- end link -->--}}


{{--        <!-- link -->--}}
{{--        <a href="./buttons.html" class="mb-3 capitalize hover:text-teal-600 transition ease-in-out duration-500">--}}
{{--            <span class="block">--}}
{{--                <i class="fad fa-cricket text-xl mr-2"></i>--}}
{{--            </span>--}}
{{--            <span class="text-xs">buttons</span>--}}
{{--        </a>--}}
{{--        <!-- end link -->--}}

{{--        <!-- link -->--}}
{{--        <a href="#" class="mb-3 capitalize hover:text-teal-600 transition ease-in-out duration-500">--}}
{{--            <span class="block">--}}
{{--                <i class="fad fa-box-open text-xl mr-2"></i>--}}
{{--            </span>--}}
{{--            <span class="text-xs">Content</span>--}}
{{--        </a>--}}
{{--        <!-- end link -->--}}

{{--        <!-- link -->--}}
{{--        <a href="#" class="mb-3 capitalize hover:text-teal-600 transition ease-in-out duration-500">--}}
{{--            <span class="block">--}}
{{--                <i class="fad fa-swatchbook text-xl mr-2"></i>--}}
{{--            </span>--}}
{{--            <span class="text-xs">colors</span>--}}
{{--        </a>--}}
{{--        <!-- end link -->--}}

{{--        <!-- link -->--}}
{{--        <a href="#" class="mb-3 capitalize hover:text-teal-600 transition ease-in-out duration-500">--}}
{{--            <span class="block">--}}
{{--                <i class="fad fa-atom-alt text-xl mr-2"></i>--}}
{{--            </span>--}}
{{--            <span class="text-xs">icons</span>--}}
{{--        </a>--}}
{{--        <!-- end link -->--}}

{{--        <!-- link -->--}}
{{--        <a href="#" class="mb-3 capitalize hover:text-teal-600 transition ease-in-out duration-500">--}}
{{--            <span class="block">--}}
{{--                <i class="fad fa-club text-xl mr-2"></i>--}}
{{--            </span>--}}
{{--            <span class="text-xs">card</span>--}}
{{--        </a>--}}
{{--        <!-- end link -->--}}

{{--        <!-- link -->--}}
{{--        <a href="#" class="mb-3 capitalize hover:text-teal-600 transition ease-in-out duration-500">--}}
{{--            <span class="block">--}}
{{--                <i class="fad fa-cheese-swiss text-xl mr-2"></i>--}}
{{--            </span>--}}
{{--            <span class="text-xs">Widgets</span>--}}
{{--        </a>--}}
{{--        <!-- end link -->--}}

{{--        <!-- link -->--}}
{{--        <a href="#" class="mb-3 capitalize hover:text-teal-600 transition ease-in-out duration-500">--}}
{{--            <span class="block">--}}
{{--                <i class="fad fa-computer-classic text-xl mr-2"></i>--}}
{{--            </span>--}}
{{--            <span class="text-xs">Components</span>--}}
{{--        </a>--}}
{{--        <!-- end link -->--}}



    </div>
    <!-- end sidebar content -->

</div>
