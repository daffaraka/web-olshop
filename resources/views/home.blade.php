<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CDN buat icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" 
        integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" 
        crossorigin="anonymous" 
        referrerpolicy="no-referrer" />
    <!-- tittle  website -->
    <title>Nunu Nana | {{$title}}</title>

    <!-- Styles -->
    <style>
        
        .navbar {
            background-color: #f8f9fa;
        }

        .navbar-brand {
            color: #000;
            font-weight: bold;
        }

        .home {
            margin-left : 10px;
        }

        .nav-link {
            color: #000;
            margin-right : 35px;
        }

        .nav-link.active {
            font-weight: normal;
        }

        .form-control {
            border-radius: 0;
        }

        .btn-outline-success {
            border-radius: 0;
            color: #000;
            border-color: #000;
        }

        .cart {
            list-style: none;
            margin: 0;
            padding: 0;
            margin-right: 10px;
        }

        .cart i {
            font-size: 20px;
            color: #c40847;
        }

        .login {
            list-style: none;
            margin: 0;
            padding: 0;
        }

        .login a {
            color: #000;
            margin-right: 10px;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="perusahaan" href="#">NUNA NANU</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
                <ul class="navbar-nav">
                    <li class="home">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="about">
                        <a class="nav-link" href="#">About</a>
                    </li>
                    <li class="product">
                        <a class="nav-link" href="#">Product</a>
                    </li>
                    <li class="riwayat-pemesanan">
                        <a class="nav-link" href="#">Riwayat Pemesanan</a>
                    </li>
                </ul>

                <ul class="navbar-nav">
                    <li class="search">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-success" type="submit">Search</button>
                        </form>
                    </li>
                    <li class="cart">
                        <a class="nav-link" href="#"><i class="fas fa-shopping-cart" style="color: #c40847;"></i></a>
                    </li>
                    @if (Route::has('login'))
                        @auth
                            <li class="nav-item">
                                <a href="{{ url('/home') }}" class="nav-link">Home</a>
                            </li>
                        @else
                            <li class="login">
                                <a href="{{ route('login') }}" class="nav-link">Log in</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="register">
                                    <a href="{{ route('register') }}" class="nav-link">Register</a>
                                </li>
                            @endif
                        @endauth
                    @endif
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten HTML lainnya -->  

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js" integrity="sha384-fbbOQedDUMZZ5KreZpsbe1LCZPVmfTnH7ois6mU1QK+m14rQ1l2bGBq41eYeM/fS" crossorigin="anonymous"></script>
</body>
</html>
