
<nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class={{request()->is('admin') ? "nav-item" : 'nav-itemnotactive'}}>
<a class={{request()->is('admin') ? "nav-link active" : 'nav-link'}} href="{{ route('admin') }}">
    <i class="icon-grid menu-icon"></i>
    <span class="menu-title">خانه</span>
</a>
</li>
<li class={{request()->is('AddProduct') ? "nav-item" : 'nav-item' }}>
    <a class="nav-link" data-toggle="collapse" href="#product" aria-expanded="false" aria-controls="product">
        <i class="icon-layout menu-icon"></i>
        <span class="menu-title">محصولات</span>
    </a>
    <div class="collapse" id="product">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href={{ route('AddProduct') }}>اضافه کردن محصول</a></li>
            <li class="nav-item"><a class="nav-link" href={{ route('EditProduct') }}>ویرایش محصول</a></li>
            <li class="nav-item"><a class="nav-link" href={{ route('DeleteProduct') }}>حذف محصول</a></li>
        </ul>
    </div>
</li>
<li class={{request()->is('CategoryAdmin') ? "nav-item" : 'nav-item' }}>
    <a class="nav-link" data-toggle="collapse" href="#form-elements" aria-expanded="undefined" aria-controls="form-elements">
        <i class="icon-columns menu-icon"></i>
        <span class="menu-title">دسته بندی</span>
    </a>
    <div class="collapse" id="form-elements">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"><a class="nav-link" href={{ route('CategoryAdmin') }}>دسته بندی محصولات</a></li>
        </ul>
    </div>
</li>
<li class={{request()->is('UsersAdmin') ? "nav-item" : 'nav-item' }}>
    <a class="nav-link" data-toggle="collapse" href="#charts" aria-expanded="false" aria-controls="charts">
        <i class="icon-bar-graph menu-icon"></i>
        <span class="menu-title">کاربران</span>
    </a>
    <div class="collapse" id="charts">
        <ul class="nav flex-column sub-menu">
            <li class="nav-item"> <a class="nav-link" href={{ route('UsersAdmin') }}>لیست کاربران</a></li>
        </ul>
    </div>
</li>
<!-- partial -->
</ul>
</nav><!
