<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>OAZADA</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Arial" rel="stylesheet">

        <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        
        
    </head>
    <body>
        <div class="wrapper">
 
            <header class="header">
                <nav class="navbar">
                    <ul class="navbar-list">
                        <li class="navbar-item">
                            <a style="font-size: 20px; font-weight: 600; border-bottom-width: 2px" class="navbar-link" href="">Sản phẩm</a>
                        </li>
                        <li class="navbar-item">
                            <a class="navbar-link" href="">Nhà sản xuất</a>
                        </li>
                    </ul>
                </nav>

                <div class="header-with-search">
                    <div class="logo">
                        <img src="{{asset('images/logo.png')}}" alt="">
                    </div>
                    <div class="search">
                        <input placeholder="Bạn đang tìm kiếm cái gì..." type="text">
                        <button>Tìm kiếm</button>
                    </div>
                    <div class="link-right">
                        <a href="">avc</a>
                    </div>
                    
                </div>
            </header>
            
            <div class="container">

            </div>

            <footer class="footer">

            </footer>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>
