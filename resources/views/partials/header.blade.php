<header class="header">
    <nav class="navbar col-6">
        <ul class="navbar-list">
            <li class="navbar-item">
                <a class="navbar-link {{ request()->is('/') ? ' active-link' : '' }}" href="">Sản phẩm</a>
            </li>
            <li class="navbar-item">
                <a class="navbar-link" href="">Nhà sản xuất</a>
            </li>
        </ul>
    </nav>

    <div class="header-with-search">
        <div class="logo">
            <a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
        </div>
        <div class="search col-5">
            <form action="{{ route('resultsearch') }}" method="GET">
                @csrf
                <input name="name" placeholder="Bạn đang tìm kiếm cái gì..." type="text">
                <button type="submit" class="search-button">Tìm kiếm</button>
            </form>
        </div>
        <div class="nav-menu">
            <ul class="nav-list">
                @if (Auth::check())
                    @if(Auth::user()->role == 'buyer')
                        <li class="nav-item-login">
                            <a href="#">{{ Auth::user()->name }}</a>
                        </li>
                    @else
                        <li class="nav-item-login">
                            <a href="{{ route('backend.dashboard.index') }}">{{ Auth::user()->name }}</a>
                        </li>
                    @endif
                    <li class="nav-item">
                        <a href="{{route('logout')}}">Đăng xuất</a>
                    </li>
                    <li class="nav-item">
                        <a href="">Tin nhắn</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('order.detail', auth()->user())}}">Đơn đặt hàng</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('cart.index', Auth()->user()) }}">Giỏ hàng</a>
                    </li>
                @else
                    <li class="nav-item-login">
                        <a href="{{route('login')}}">Đăng nhập</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('register')}}">Tham gia miễn phí</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('login')}}">Tin nhắn</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('login')}}">Đơn đặt hàng</a>
                    </li>
                    <li class="nav-item">
                        <a href="{{route('login')}}">Giỏ hàng</a>
                    </li>
                @endif
            </ul>
        </div>
    </div>

    <hr>
    <div class="hd-link">
        <ul class="link-list">
            <li class="link dropdown" style="padding: 0;">
                <i  class="fa-solid fa-list" style="padding-left: 13px;"></i>
                <a class="category1 dropbtn" href="">Danh mục</a>
                <i class="fa-solid fa-chevron-down"></i>

                <div class="dropdown-content">
                    @foreach($categories as $category)
                    <a href="{{ route('product', $category) }}">{{ $category->title }} / </a>
                    @endforeach
                </div>
            </li>
            <li class="link">
                <a class="category2" href="/">Sẵn sàng vận chuyển</a>
            </li>
            <li class="link">
                <a class="category3" href="{{ route('health') }}">Thiết bị bảo hộ cá nhân</a>
            </li>
            <li class="link">
                <a class="category4" href="{{ route('exhibit') }}">Triển lãm thương mại</a>
            </li>
            <li class="link dropdown">
                <a class="category5 dropbtn" href="">Trung tâm người mua</a>
                <i class="fa-solid fa-chevron-down"></i>

                <div class="dropdown-content2">
                    <div class="left">
                        <a style="display: flex;" href="#"><img src="{{asset('images/icons/idea.png')}}" style="width: 20px; height: 20px;" alt="">&nbsp;Blog</a>
                        <br>
                        <a style="display: flex; " href="#"><img src="{{asset('images/icons/secure-payment.png')}}" style="width: 20px; height: 20px;" alt="">&nbsp;Thương mại Đảm bảo</a>
                        <br>
                        <a style="display: flex; " href="#"><img src="{{asset('images/icons/documents.png')}}" style="width: 20px; height: 20px;" alt="">&nbsp;Giám sát sản xuất và dịch vụ kiểm tra</a>
                        <br>
                        <a style="display: flex; " href="#"><img src="{{asset('images/icons/browser.png')}}" style="width: 20px; height: 20px;" alt="">&nbsp;Dịch vụ vận chuyển</a>
                        <br>
                        <a style="display: flex; " href="#"><img src="{{asset('images/icons/letter.png')}}" style="width: 20px; height: 20px;" alt="">&nbsp;Letter of Credit</a>
                    </div>
                    <div class="right">
                        <a href="" style="font-size: 13px;">Giải pháp tìm nguồn cung ứng</a>
                        <br>
                        <br>
                        <a href="" style="font-size: 17px;">Gửi yêu cầu báo giá</a>
                        <br>
                        <br>
                        <a href="" style="font-size: 17px;">Nhà cung cấp theo khu vực</a>
                        
                    </div>
                </div>
            </li>
            <li class="link dropdown">
                <a class="category6" href="">Bán trên Oazada</a>
                <i class="fa-solid fa-chevron-down"></i>
                <div class="dropdown-content3">
                    <div>
                        <a href="">Dành cho người bán trên toàn thế giới</a>
                    </div>
                    <div>
                        <a href="">Dành cho người bán Trung Quốc</a>
                    </div>
                    <div>
                        <a href="">Partner Program</a>
                    </div>
                </div>
            </li>
            <li class="link dropdown">
                <a class="category7" href="">Trợ giúp</a>
                <i class="fa-solid fa-chevron-down"></i>
                <div class="dropdown-content3">
                    <div>
                        <a href="">Dành cho người mua</a>
                    </div>
                    <div>
                        <a href="">Dành cho nhà cung cấp</a>
                    </div>
                    <div>
                        <a href="">Gửi khiếu nại</a>
                    </div>
                    <div>
                        <a href="">Báo cáo vi phạm Quyền sỡ trí tuệ (Intellectual Property Rule, IPR)</a>
                    </div>
                    <div>
                        <a href="">Báo cáo lạm dụng</a>
                    </div>
                </div>
            </li>
            <li class="link">
                <a class="category8" style="font-size: 18px;" href="">Tiếng Việt-VND</a>
                <i class="fa-solid fa-chevron-down"></i>
            </li>
            <li class="link">
                <a class="category9" style="font-size: 18px;" href="">Vận chuyển</a>
                <i class="fa-solid fa-chevron-down"></i>
            </li>
        </ul>
    </div>
</header>