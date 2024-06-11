<nav class="sidebar vertical-scroll  ps-container ps-theme-default ps-active-y">
    <div class="logo d-flex justify-content-between">
        <a href="index-2.html"><img src="{{ asset('assets/admin/img/logo.png')}}" alt></a>
        <div class="sidebar_close_icon d-lg-none">
            <i class="ti-close"></i>
        </div>
    </div>
    <ul id="sidebar_menu">
        <li class class="mm-active">
            <a href="{{url('admin')}}" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/dashboard.svg')}}" alt>
                </div>
                <span>Dashboard</span>
            </a>

        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/5.svg')}}" alt>
                </div>
                <span>Quản lý sản phẩm</span>
            </a>
            <ul>
                <li><a class="active" href="{{url('admin/products')}}">Danh sách sản phẩm</a></li>
                <li><a href="{{url('admin/products/create')}}">Thêm mới sản phẩm</a></li>
                
            </ul>
        </li>

        <li class>
            <a class="has-arrow" href="#" aria-expanded="false">
                <div class="icon_menu">
                    <img src="{{ asset('assets/admin/img/menu-icon/5.svg') }}" alt>
                </div>
                <span>Người dùng</span>
            </a>
            <ul>
                <li><a href="{{ url('admin/users') }}">Danh sách</a></li>
                <li><a href="{{ url('admin/users/create') }}">Thêm mới</a></li>
            </ul>
        </li>

        

    </ul>
</nav>