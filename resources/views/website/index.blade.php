<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no"/>
        <meta name="description" content=""/>
        <meta name="author" content=""/>
        <title>MedexSepeti Task</title>
        <!-- Favicon -->
        <link rel="icon" type="image/x-icon" href="{{ asset('website_assets/assets/favicon.ico') }}"/>
        <!-- Bootstrap Icons -->
        <link href="{{ asset('website_assets/css/bootstrap-icons.css') }}" rel="stylesheet"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" integrity="sha512-5A8nwdMOWrSz20fDsjczgUidUBR8liPYU+WymTZP1lmY9G6Oc7HlZv156XqnsgNUzTyMefFTcsFH/tnJE/+xBg==" crossorigin="anonymous" referrerpolicy="no-referrer" />        <!-- Bootstrap -->
        <link rel="stylesheet" href="{{ asset('website_assets/css/bootstrap.min.css') }}">
        <!-- Owl Carousel-->
        <link rel="stylesheet" href="{{ asset('website_assets/css/owl.carousel.min.css') }}">
        <link rel="stylesheet" href="{{ asset('website_assets/css/owl.theme.default.min.css') }}">
        <!-- Main Style -->
        <link href="{{ asset('website_assets/css/styles.css') }}" rel="stylesheet"/>
    </head>
    <body>
        <!-- Top Navigation -->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark" style="height: 44px">
            <div class="container px-3 px-lg-3">
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    </ul>
                    <form class="d-flex" style="padding-right: 10px">
                        <button class="btn btn-dark text-white" type="submit">
                            Become a Seller
                        </button>
                    </form>
                    <form class="d-flex">
                        <button class="btn btn-dark text-white" type="submit">
                            Lang
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Middle Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="#!">MedexSepetiTask</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
                        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span
                        class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <form class="form-inline my-2 my-lg-0">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    </form>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                    </ul>
                    <form class="d-flex">
                        <button class="btn btn-light" type="submit">
                            <i class="fa fa-user"></i>
                            Ahmed
                        </button>
                    </form>
                    <form class="d-flex">
                        <button class="btn btn-light" type="submit">
                            <i class="fa fa-heart"></i>
                            Favourite
                        </button>
                    </form>
                    <form class="d-flex">
                        <button class="btn btn-light" type="submit">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">0</span>
                        </button>
                    </form>
                </div>
            </div>
        </nav>

        <!-- Categories Navigation -->
        <nav class="navbar navbar-expand-lg navbar-light bg-info" style="margin: auto">
            <ul class="navbar-nav mr-auto">
                @if(isset($data['categories']))
                    @forelse($data['categories'] as $category)
                        <li class="nav-item active">
                            <a class="nav-link text-dark" href="#">{{ $category->title }}</a>
                        </li>
                    @empty
                        <p>No Data Found.</p>
                    @endforelse
                @else
                    <p>No Data Found.</p>
                @endif
            </ul>
        </nav>

        <!-- Header -->
        <header class="bg-light">
            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                <ol class="carousel-indicators">
                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                </ol>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img class="d-block w-100" src="{{ asset('website_assets/images/slider/1.jpg') }}" alt="First slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>First Slider</h4>
                            <p>This is a paragraph for first slider.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('website_assets/images/slider/1.jpg') }}" alt="Second slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>Second Slider</h4>
                            <p>This is a paragraph for second slider.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img class="d-block w-100" src="{{ asset('website_assets/images/slider/1.jpg') }}" alt="Third slide">
                        <div class="carousel-caption d-none d-md-block">
                            <h4>Third Slider</h4>
                            <p>This is a paragraph for third slider.</p>
                        </div>
                    </div>
                </div>
                <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </header>

        <!-- Promoted Products Section -->
        <section class="pt-4">
            <div class="container px-4 px-lg-5 mt-3">
                <h1 class="text-left mb-3">Promoted</h1>
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel owl-theme">
                            @forelse($data['promoted'] as $promoted)
                                <div class="item card h-100">
                                    <!-- Product image-->
                                    <img class="card-img-top" src="{{ $promoted->image ?? 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' }}"/>
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder">{{ $promoted->title }}</h5>
                                            <!-- Product reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                            </div>
                                            <!-- Product price-->
                                            ${{ $promoted->price }}
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                    </div>
                                </div>
                            @empty
                                <p>No Data Found.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Best Selling Products Section -->
        <section class="pt-4">
            <div class="container px-4 px-lg-5 mt-3">
                <h1 class="text-left mb-3">Best Selling</h1>
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel owl-theme">
                            @forelse($data['bestSelling'] as $bestSale)
                                <div class="item card h-100">
                                    <!-- Product image-->
                                    <img class="card-img-top" src="{{ $bestSale->image ?? 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' }}" alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder">{{ $bestSale->title }}</h5>
                                            <!-- Product reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                            </div>
                                            <!-- Product price-->
                                            ${{ $bestSale->price }}
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                    </div>
                                </div>
                            @empty
                                <p>No Data Found.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Brands Section -->
        <section class="pt-4">
            <div class="container px-4 px-lg-5 mt-3">
                <h1 class="text-left mb-3">Brands</h1>
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel owl-theme">
                            @forelse($data['brandsSection'] as $brandSec)
                                <div class="item card h-100">
                                    <!-- Product image-->
                                    <img class="card-img-top" src="{{ $brandSec->image ?? 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' }}" alt="..."/>
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder">{{ $brandSec->title }}</h5>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p>No Data Found.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Most Viewed Products Section -->
        <section>
            <div class="container px-4 px-lg-5 mt-3">
                <h1 class="text-left mb-3">Most Viewed</h1>
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel owl-theme">
                            @forelse($data['mostViewed'] as $mostView)
                                <div class="item card h-100">
                                    <!-- Product image-->
                                    <img class="card-img-top" src="{{ $mostView->image ?? 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' }}" alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder">{{ $mostView->title }}</h5>
                                            <!-- Product reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                            </div>
                                            <!-- Product price-->
                                            ${{ $mostView->price }}
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                    </div>
                                </div>
                            @empty
                                <p>No Data Found.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Just Arrived Products Section -->
        <section class="py-4">
            <div class="container px-4 px-lg-5 mt-3">
                <h1 class="text-left mb-3">Just Arrived</h1>
                <div class="container">
                    <div class="row">
                        <div class="owl-carousel owl-theme">
                            @forelse($data['justArrived'] as $justArrive)
                                <div class="item card h-100">
                                    <!-- Product image-->
                                    <img class="card-img-top" src="{{ $justArrive->image ?? 'https://dummyimage.com/450x300/dee2e6/6c757d.jpg' }}" alt="..." />
                                    <!-- Product details-->
                                    <div class="card-body p-4">
                                        <div class="text-center">
                                            <!-- Product name-->
                                            <h5 class="fw-bolder">{{ $justArrive->title }}</h5>
                                            <!-- Product reviews-->
                                            <div class="d-flex justify-content-center small text-warning mb-2">
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                                <div class="bi-star-fill"></div>
                                            </div>
                                            <!-- Product price-->
                                            ${{ $justArrive->price }}
                                        </div>
                                    </div>
                                    <!-- Product actions-->
                                    <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                        <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="#">Add to cart</a></div>
                                    </div>
                                </div>
                            @empty
                                <p>No Data Found.</p>
                            @endforelse
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Footer -->
        <footer class="py-5 bg-dark">
            <div class="container">
                <p class="m-0 text-center text-white">Copyright &copy; Ahmed Saber 2023</p>
            </div>
        </footer>

        <!-- JS Area -->
        <script src="{{ asset('website_assets/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('website_assets/js/jquery.slim.min.js') }}"></script>
        <script src="{{ asset('website_assets/js/popper.min.js') }}"></script>
        <script src="{{ asset('website_assets/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('website_assets/js/owl.carousel.min.js') }}"></script>
        <script>
            $(document).ready(function (){
                $('.owl-carousel').owlCarousel({
                    margin:10,
                    nav:true,
                    responsive:{
                        0:{
                            items:1
                        },
                        600:{
                            items:3
                        },
                        1000:{
                            items:5
                        }
                    }
                });
            });
        </script>
        <script src="{{ asset('website_assets/js/scripts.js') }}"></script>
    </body>
</html>
