@php
$permission = session('permission');
@endphp

<div class="sidebar-wrapper" data-simplebar="true">
    <div class="sidebar-header">
        <div>
            <img src="assets/images/logo-icon.png" class="logo-icon d-none" alt="logo icon" style="width: 160px;">
            <h5 class="text-center text-light">Dhar Brothers</h5>
        </div>
        <div class="toggle-icon ms-auto"><i class='bx bx-first-page'></i>
        </div>
    </div>
    <!--navigation-->
    <ul class="metismenu" id="menu">
        <li>
            <a href="{{ url('/') }}">
                <div class="parent-icon"><i class='bx bx-home'></i>
                </div>
                <div class="menu-title">Dashboard</div>
            </a>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-user-circle'></i>
                </div>
                <div class="menu-title">Testimonial</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('testimonials.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
                </li>
                <li>
                    <a href="{{ route('testimonials.index') }}"><i class="bx bx-right-arrow-alt"></i>View All</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-user-circle'></i>
                </div>
                <div class="menu-title">Post</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('posts.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
                </li>
                <li>
                    <a href="{{ route('posts.index') }}"><i class="bx bx-right-arrow-alt"></i>View All</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-user-circle'></i>
                </div>
                <div class="menu-title">FAQ</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('faqcategories.index') }}"><i class="bx bx-right-arrow-alt"></i>Categories</a>
                </li>
                <li>
                    <a href="{{ route('faqs.create') }}"><i class="bx bx-right-arrow-alt"></i>Add FAQ</a>
                </li>
                <li>
                    <a href="{{ route('faqs.index') }}"><i class="bx bx-right-arrow-alt"></i>FAQs</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-user-circle'></i>
                </div>
                <div class="menu-title">Service</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('services.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
                </li>
                <li>
                    <a href="{{ route('services.index') }}"><i class="bx bx-right-arrow-alt"></i>View All</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="javascript:;" class="has-arrow">
                <div class="parent-icon"><i class='bx bx-user-circle'></i>
                </div>
                <div class="menu-title">Banner</div>
            </a>
            <ul>
                <li>
                    <a href="{{ route('banners.create') }}"><i class="bx bx-right-arrow-alt"></i>Add New</a>
                </li>
                <li>
                    <a href="{{ route('banners.index') }}"><i class="bx bx-right-arrow-alt"></i>View All</a>
                </li>
            </ul>
        </li>
    </ul>
    <!--end navigation-->
</div>