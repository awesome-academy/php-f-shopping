<section class="awe-section-1">
    <section class="section-slide">
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="d-block w-100" src="{{ asset('frontend/images/slide/slider_1.png') }}" alt="First slide">
                    <div class="slide-info d-none d-md-block d-lg-block">
                        <h4 class="title-slide" data-in-effect="rollIn" data-out-effect="fadeOut">Luz Bakery</h4>
                        <p data-animation-in="rollIn" data-animation-out="animate-out rollOut">Hương vị đặc trưng đến từ Pháp</p>
                        <p>
                            <a href="#" class="btn" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">Xem thêm</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('frontend/images/slide/slider_1.png') }}" alt="Second slide">
                    <div class="slide-info d-none d-md-block d-lg-block">
                        <h4 class="title-slide" data-in-effect="rollIn" data-out-effect="fadeOut">Luz Bakery</h4>
                        <p data-animation-in="rollIn" data-animation-out="animate-out rollOut">Hương vị đặc trưng đến từ Pháp</p>
                        <p>
                            <a href="#" class="btn" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">Xem thêm</a>
                        </p>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100" src="{{ asset('frontend/images/slide/slider_1.png') }}" alt="Third slide">
                    <div class="slide-info d-none d-md-block d-lg-block">
                        <h4 class="title-slide" data-in-effect="rollIn" data-out-effect="fadeOut">Luz Bakery</h4>
                        <p data-animation-in="rollIn" data-animation-out="animate-out rollOut">Hương vị đặc trưng đến từ Pháp</p>
                        <p>
                            <a href="#" class="btn" data-animation-in="fadeInLeft" data-animation-out="animate-out fadeOutRight">Xem thêm</a>
                        </p>
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
    </section>
</section>

@include('frontend.slide.components.contact')
