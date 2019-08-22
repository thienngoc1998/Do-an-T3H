@extends('Home.index')
@section('bodycontent')
    <!-- BREADCRUMB AREA START -->
    <div class="breadcrumb-area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcurmb-inner">
                        <!-- breadcrumb-menu -->
                        <div class="breadcrumb-menu">
                            <nav>
                                <ul>
                                    <li><a href="index.html" title="Home Page"><i class="fa fa-home"></i></a></li>
                                    <li>My Account</li>
                                </ul>
                            </nav>
                        </div>
                        <!-- breadcrumb-title -->
                        <div class="breadcrumb-title line-bottom">
                            <h2>My Account</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- BREADCRUMB AREA END -->
    <div class="login-register-area mt-0 mb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="xl-pr-15">
                        <div class="login-area">
                            <h2> Đăng nhập </h2>
                            <form action="#">
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="password" placeholder="Password">
                                <input type="submit" value="Đăng nhập ">
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="xl-pl-15">
                        <div class="register-area">
                            <h2> Đăng ký </h2>
                            <form action="{{route('registerform')}}" method="post">
                                @csrf
                                <input type="text" name="name" placeholder="Tên người dùng ">
                                <input type="text" name="address" placeholder="Địa chỉ ">
                                <input type="text" name="phone" placeholder="Số điện thoại ">
                                <input type="email" name="email" placeholder="Email">
                                <input type="password" name="password" placeholder="Password">
                                <input type="submit" value="Đăng ký ">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
