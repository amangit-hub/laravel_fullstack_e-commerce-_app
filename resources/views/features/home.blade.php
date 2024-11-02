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

    <!-- one by one -->
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
    <div class="home_content last_content">
        <div class="home_box animate">
            hello there
        </div>


    </div>
</div>

@endsection