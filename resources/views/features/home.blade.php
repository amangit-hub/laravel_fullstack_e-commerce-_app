@extends ('layouts.layout');
@section("header_content");
<div class="home_container">
    <div class="home">
        <div class="home_box animate">
            hello there
        </div>
        <div class="home_box animate">
            <img src="{{ asset('img/e-commerce_web_5.jpg') }}" alt="Description">

        </div>
    </div>
    <!-- one by three -->
    <div class="home_content">
        <div class="home_box animate">
            hello there
        </div>
        <div class="home_box animate">
            hello there
        </div>
        <div class="home_box animate">
            hello there
        </div>


    </div>

    <!-- one by two -->
    <div class="home">
        <div class="home_box animate">
            <div class="gallery">
                <span class="gallery_icon" id="previous">&lt;</span>
                <div class="gallery_box content" id="img_container">
                    <span><img src="{{ asset('img/e-commerce_web_5.jpg') }}" alt="Description"></span>
                    <span><img src="{{ asset('img/ecommerce_web_3.jpg') }}" alt="Description"></span>
                    <span><img src="{{ asset('img/e-commerce_web_5.jpg') }}" alt="Description"></span>
                    <span><img src="{{ asset('img/ecommerce_web_3.jpg') }}" alt="Description"></span>
                    <span><img src="{{ asset('img/e-commerce_web_5.jpg') }}" alt="Description"></span>
                    <span><img src="{{ asset('img/ecommerce_web_3.jpg') }}" alt="Description"></span>
                    <span><img src="{{ asset('img/e-commerce_web_5.jpg') }}" alt="Description"></span>
                    <span><img src="{{ asset('img/ecommerce_web_3.jpg') }}" alt="Description"></span>
                    <span><img src="{{ asset('img/e-commerce_web_5.jpg') }}" alt="Description"></span>
                    <span><img src="{{ asset('img/ecommerce_web_3.jpg') }}" alt="Description"></span>
                    <span><img src="{{ asset('img/e-commerce_web_5.jpg') }}" alt="Description"></span>
                    <span><img src="{{ asset('img/ecommerce_web_3.jpg') }}" alt="Description"></span>
                </div>
                <span class="gallery_icon" id="next">&gt;</span>
            </div>


        </div>



    </div>
    <!-- one by two -->
    <div class="home">
        <div class="home_box animate">
            hello there
        </div>
        <div class="home_box animate">
            hello there
        </div>


    </div>
    <!-- one by three -->
    <div class="home_content">
        <div class="home_box animate">
            hello there
        </div>
        <div class="home_box animate">
            hello there
        </div>
        <div class="home_box animate">
            hello there
        </div>

    </div>
    <!-- one by one -->
    <div class="home_content last_content">
        <div class="home_box animate">
            hello there
        </div>


    </div>
</div>

@endsection