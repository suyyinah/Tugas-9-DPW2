<!DOCTYPE html>
<html lang="zxx">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Yoga Studio Template">
    <meta name="keywords" content="Yoga, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Violet | Suyyinah</title>

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css?family=Amatic+SC:400,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900&display=swap"
        rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{ url('public') }}/css/bootstrap.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public') }}/css/font-awesome.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public') }}/css/nice-select.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public') }}/css/owl.carousel.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public') }}/css/magnific-popup.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public') }}/css/slicknav.min.css" type="text/css">
    <link rel="stylesheet" href="{{ url('public') }}/css/style.css" type="text/css">
</head>

<body>
    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    
   <!-- Search model -->
	<div class="search-model">
		<div class="h-100 d-flex align-items-center justify-content-center">
			<div class="search-close-switch">+</div>
			<form class="search-model-form">
				<input type="text" id="search-input" placeholder="Search here.....">
			</form>
		</div>
	</div>
	<!-- Search model end -->

    <!-- Header Section Begin -->
    <header class="header-section">
        <div class="container-fluid">
            <div class="inner-header">
                <div class="logo">
                    <a href="./index.html"><img src="{{ url('public') }}/img/logo.png" alt=""></a>
                </div>
                <div class="header-right">
                    <img src="{{ url('public') }}/img/icons/search.png" alt="" class="search-trigger">
                    <img src="{{ url('public') }}/img/icons/man.png" alt="">
                    <a href="{{ url('cart') }}">
                        <img src="{{ url('public') }}/img/icons/bag.png" alt="">
                        <span>2</span>
                    </a>
                </div>
                <div class="user-access">
                    <a href="#">Register</a>
                    <a href="{{ url('login') }}" class="in">Login</a>
                </div>
                <nav class="main-menu mobile-menu">
                    <ul>
                        <li><a href="{{ url('home') }}">Home</a></li>
                        <li><a class="active" href="{{ url('shop') }}">Shop</a>
                            
                        </li>
                        <li><a href="{{ url('about') }}">About</a></li>
                        <li><a href="{{ url('blog') }}">Blog</a></li>
                        <li><a href="{{ url('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <!-- Header Info Begin -->
    <div class="header-info">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4">
                    <div class="header-item">
                        <img src="{{ url('public') }}/img/icons/delivery.png" alt="">
                        <p>Free shipping on orders over $30 in USA</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-lg-center">
                    <div class="header-item">
                        <img src="{{ url('public') }}/img/icons/voucher.png" alt="">
                        <p>20% Student Discount</p>
                    </div>
                </div>
                <div class="col-md-4 text-left text-xl-right">
                    <div class="header-item">
                    <img src="{{ url('public') }}/img/icons/sales.png" alt="">
                    <p>30% off on dresses. Use code: 30OFF</p>
                </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Header Info End -->
    <!-- Header End -->

    <!-- Page Add Section Begin -->
    <section class="page-add">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="page-breadcrumb">
                        <h2>Dresses<span>.</span></h2>
                        <a href="#">Home</a>
                        <a href="#">Dresses</a>
                        <a class="active" href="#">Satin Dresses</a>
                    </div>
                </div>
                <div class="col-lg-8">
                    <img src="{{ url('public') }}/img/add.jpg" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Page Add Section End -->

    <!-- Categories Page Section Begin -->
    <section class="categories-page spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="card">
                        <div class="card-header">
                            Filter
                        </div>
                        <div class="card-body">
                            <form action="{{ url('shop/filter')}}" method="post">
                                @csrf
                                <div class="form-group">
                                    <label for="" class="control-label">Nama Produk</label>
                                    <input type="text" class="form-control" name="nama" value="{{ $nama ?? '' }}">
                                </div>
                                <br>
                                <button class="btn btn-dark float-rigt"><i class="fa fa-search"></i>Cari</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="container">
                        <div class="row">
                            @foreach($list_produk as $produk)
                            <div class="col-6 col-md-6 col-lg-4 col-xl-3">
                                    <div class="single-product-item">
                                        <figure>
                                            <img src="{{ url('public') }}/img/gmbr 7.jpg" alt="">
                                            <div class="p-status sale">sale</div>
                                        </figure>
                                        <div class="product-text">
                                            <a href="{{ url('about', $produk->id) }}">
                                                <h6><strong>{{$produk->nama}}</strong></h6>
                                            </a>
                                            <p> Stok : {{$produk->stok}}</p>
                                            <p>Rp. {{number_format($produk->harga)}}</p>
                                        </div>
                                    </div>
                            </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <div class="more-product">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <a href="#" class="primary-btn">Load More</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Page Section End -->

    <!-- Footer Section Begin -->
    <footer class="footer-section spad">
        <div class="container">
            <div class="newslatter-form">
                <div class="row">
                    <div class="col-lg-12">
                        <form action="#">
                            <input type="text" placeholder="Your email address">
                            <button type="submit">Subscribe to our newsletter</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="footer-widget">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>About us</h4>
                            <ul>
                                <li>About Us</li>
                                <li>Community</li>
                                <li>Jobs</li>
                                <li>Shipping</li>
                                <li>Contact Us</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Customer Care</h4>
                            <ul>
                                <li>Search</li>
                                <li>Privacy Policy</li>
                                <li>2019 Lookbook</li>
                                <li>Shipping & Delivery</li>
                                <li>Gallery</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Our Services</h4>
                            <ul>
                                <li>Free Shipping</li>
                                <li>Free Returnes</li>
                                <li>Our Franchising</li>
                                <li>Terms and conditions</li>
                                <li>Privacy Policy</li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="single-footer-widget">
                            <h4>Information</h4>
                            <ul>
                                <li>Payment methods</li>
                                <li>Times and shipping costs</li>
                                <li>Product Returns</li>
                                <li>Shipping methods</li>
                                <li>Conformity of the products</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="social-links-warp">
			<div class="container">
				<div class="social-links">
					<a href="" class="instagram"><i class="fa fa-instagram"></i><span>instagram</span></a>
					<a href="" class="pinterest"><i class="fa fa-pinterest"></i><span>pinterest</span></a>
					<a href="" class="facebook"><i class="fa fa-facebook"></i><span>facebook</span></a>
					<a href="" class="twitter"><i class="fa fa-twitter"></i><span>twitter</span></a>
					<a href="" class="youtube"><i class="fa fa-youtube"></i><span>youtube</span></a>
					<a href="" class="tumblr"><i class="fa fa-tumblr-square"></i><span>tumblr</span></a>
				</div>
			</div>

<div class="container text-center pt-5">
                <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
            </div>


		</div>
    </footer>
    <!-- Footer Section End -->

    <!-- Js Plugins -->
    <script src="{{ url('public') }}/js/jquery-3.3.1.min.js"></script>
    <script src="{{ url('public') }}/js/bootstrap.min.js"></script>
    <script src="{{ url('public') }}/js/jquery.magnific-popup.min.js"></script>
    <script src="{{ url('public') }}/js/jquery.slicknav.js"></script>
    <script src="{{ url('public') }}/js/owl.carousel.min.js"></script>
    <script src="{{ url('public') }}/js/jquery.nice-select.min.js"></script>
    <script src="{{ url('public') }}/js/mixitup.min.js"></script>
    <script src="{{ url('public') }}/js/main.js"></script>
</body>

</html>