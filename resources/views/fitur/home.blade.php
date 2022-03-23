@extends('layout.main')

@section('container')

    <main>
        <div id="myCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#myCarousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>

            <div class="carousel-inner">
                <div class="carousel-item active" data-bs-interval="10000">
                    <img src="/img/hero/hero1.jpg" class="d-block w-100" alt="...">
                    <div class="container" style="font-family: poppins">
                        <div class="carousel-caption text-start">
                            <h1 class="h2">Welcome To Moza Blog</h1>
                            <p class="fs-6">Daftar dan mulai buat postingan sekarang</p>
                            <p><a class="btn btn-sm btn-primary" href="/login" style="font-family: poppins"> <i
                                        class="fas fa-sign-in-alt"></i> Sign in Now !</a></p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="10000">
                    <img src="/img/hero/hero2.jpg" class="d-block w-100" alt="...">
                    <div class="container" style="font-family: poppins;">
                        <div class="carousel-caption">
                            <h1 class="h2 mt-4">Lihat Postingan Terbaru Menarik</h1>
                            <p>
                                <a class="btn btn-md btn-primary" href="/posting">Load more
                                    <i class="fas fa-caret-down"></i></a>
                            </p>
                        </div>
                    </div>
                </div>

                <div class="carousel-item" data-bs-interval="10000">
                    <img src="/img/hero/hero3.jpg" class="d-block w-100" alt="...">
                    <div class="container" style="font-family: poppins;">
                        <div class="carousel-caption text-end">
                            <h1 class="h2">About Me</h1>
                            <p>
                                <a class="btn btn-md btn-primary" href="/about">Read More
                                    <i class="fas fa-caret-down"></i></a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>


        <!-- Marketing messaging and featurettes
                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                            ================================================== -->
        <!-- Wrap the rest of the page in another container to center all the content. -->

        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img src="/img/hero/hero1.png" class="w-50 img-fluid rounded-circle img-thumbnail bg-danger">
                    <h2 style="font-family: poppins">
                        <a href="/posting?category=web-programming" class="mt-3 text-decoration-none">Web Programming</a>
                    </h2>
                </div><!-- /.col-lg-4 -->
                <div class=" col-lg-4">
                    <img src="/img/hero/hero2.png" class="w-50 img-fluid rounded-circle img-thumbnail bg-danger">
                    <h2 style="font-family: poppins">
                        <a href="/posting?category=smart-phone" class="mt-3 text-decoration-none">SmartPhone</a>
                    </h2>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img src="/img/hero/hero3.png" class="w-50 img-fluid rounded-circle img-thumbnail bg-danger">
                    <h2 style="font-family: poppins">
                        <a href="/posting?category=cat" class="mt-3 text-decoration-none">Cat</a>
                    </h2>
                </div><!-- /.col-lg-4 -->

                <div class="d-flex justify-content-center mt-5">
                    <a class="btn btn-md btn-danger" href="/categories">Load More
                        <i class="fas fa-caret-down"></i></a>
                </div>
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">

            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Hello <span class="text-danger">Welcome To My Blog</span></h2>
                    <p class="lead">Register and start writing interesting articles on this web page, as a form of
                        my support to continue to develop this blog.</p>
                </div>
                <div class="col-md-5">
                    <img src="img/icon/blog-hero.svg" alt="blog-hero"
                        class="bd-placeholder-img bd-placeholder-img-lg featurette-image img-fluid my-auto mx-auto"
                        style="width:80%; height:100%;">
                </div>
            </div>
        </div>
        <hr class="featurette-divider">
    </main>
@endsection
