@extends('layouts.app')

@section('css-content')
@endsection

@section('content')
    <main class="carousalAncestor">
        <!-- Carousal starts here -->
        <figure class="owl-carousel firstSlider" id="mainSlider">
            <img src="assets/index page images/9-aed-offer-webiste-nw.avif" alt="">
            <img src="assets/index page images/f1-formula-grand-prix-nw.avif" alt="">
            <img src="assets/index page images/r-points-rewards-bonanza-web.avif" alt="">
            <img src="assets/index page images/strom-coaster-web-banner.avif" alt="">
            <img src="assets/index page images/world-cup-2023-banner-website.avif" alt="">
        </figure>
        <div class="buttons">
            <button class="prev-btn"><i class="fa-solid fa-chevron-left"></i></button>
            <button class="next-btn"><i class="fa-solid fa-chevron-right"></i></button>
        </div>
        <!-- Carousal ends here -->
        <!-- both locations Details of small and large device starts here(small=>offconvas and large=>js controlled)  -->
        <div class="wrapperLocation">
            <!-- Location input starts here -->
            <div class="location">
                <i class="fa-solid fa-location-dot"></i><input id="locationInput" type="text"
                    placeholder="Select Location" onclick="locationChangeHandler()">
            </div>
            <div class="location secondLocation">
                <i class="fa-solid fa-location-dot"></i><input id="locationInput" type="text"
                    placeholder="Select Location" data-bs-toggle="offcanvas" data-bs-target="#offcanvasBottom"
                    aria-controls="offcanvasBottom">
            </div>
            <!-- Location input ends here -->
            <!-- locations details starts here -->
            <div class=" locationsDetails" id="locations">
                <div class="city"><img src="assets/location/abu-dhabi.avif" alt="">Abu Dhabi</div>
                <div class="city"><img src="assets/location/dubai-city.avif" alt="">dubai</div>
                <div class="city"><img src="assets/location/ras-al-khaimah-city.avif" alt="">Ras</div>
                <div class="city"><img src="assets/location/singapore-city.avif" alt="">singapore</div>
            </div>
        </div>
        <div class="offcanvas offcanvas-bottom" tabindex="-1" id="offcanvasBottom" aria-labelledby="offcanvasBottomLabel">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title" id="offcanvasBottomLabel">Select City</h5>
                <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body small">
                <!-- <div class="threeCities"> -->
                <div class="citySecond"><img src="assets/location/abu-dhabi.avif" alt="">
                    <div>Abu Dhabi</div>
                </div>
                <div class="citySecond"><img src="assets/location/dubai-city.avif" alt="">
                    <div>dubai</div>
                </div>
                <div class="citySecond"><img src="assets/location/ras-al-khaimah-city.avif" alt="">
                    <div>Ras</div>
                </div>
                <!-- </div> -->
                <div class="citySecond"><img src="assets/location/singapore-city.avif" alt="">
                    <div>singapore</div>
                </div>
            </div>
        </div>
        <!-- locations details ends here -->
        <!-- four buttons starts here -->
        <div class="tetraButtons">
            <a href="/" class="button active"><i class="fa-solid fa-binoculars"></i>&nbsp;Activities</a>
            <a href="/hotels" class="button"><i class=" fa-solid fa-hotel"></i>&nbsp;Hotels</a>
            <a href="/holidays" class="button"><i class=" fa-solid fa-umbrella-beach"></i>&nbsp;Holidays</a>
            <a href="/visa" class="button"><i class=" fa-solid fa-receipt"></i>&nbsp;Visa</a>
        </div>
        <!-- four buttons ends here -->
    </main>
    <!-- second carousal starts here -->
    <div class="secondCarousalAncestor">
        <div class="container">
            <div class="controllers">
                <div>
                    <h2>Dubai summer delights</h2>
                    <span>Create unforgettable memories with your family in Dubai this summer
                    </span>
                </div>
                <div class="buttons-second">
                    <button class="prev-btn-second"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="next-btn-second"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="owl-carousel secondSlider" id="summerSlider">
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/summer delights/111.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">76 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/summer delights/SD-Ski-Freestyle-Adult-Product-page-1072x800-100.avif"
                            alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">87 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/summer delights/Aqua-Water-Park-front.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">93 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/summer delights/Ayya_front.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">69 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/summer delights/burj-kalifa-front.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">88 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top cities start here -->
    <div class="thirdCarousalAncestor mt-4">
        <div class="container">
            <div class="controllers">
                <div>
                    <h2>Top Cities to Visit</h2>
                    <span>Experience the thrill of discovering off-the-beaten-path gems and famous landmarks in top
                        destinations worldwide - your wanderlust awaits!
                    </span>
                </div>
                <div class="buttons-second">
                    <button class="prev-btn-third"><i class="fa-solid fa-chevron-left"></i></button>
                    <button class="next-btn-third"><i class="fa-solid fa-chevron-right"></i></button>
                </div>
            </div>
            <div class="owl-carousel thirdSlider" id="topCities">
                <!-- # card start here -->
                <div class="second-card">
                    <div class="second-card-head">
                        <img src="assets/top cities/abu-dhabi.png" alt="">
                    </div>
                    <div class="cityName">
                        <h3>Abu Dhabi</h3>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="second-card">
                    <div class="second-card-head">
                        <img src="assets/top cities/dubai-city.png" alt="">
                    </div>
                    <div class="cityName">
                        <h3>Dubai</h3>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="second-card">
                    <div class="second-card-head">
                        <img src="assets/top cities/ras-al-khaimah-city.png" alt="">
                    </div>
                    <div class="cityName">
                        <h3>Ras-al-Khamiah</h3>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="second-card ">
                    <div class="second-card-head">
                        <img src="assets/top cities/singapore-city.png" alt="">
                    </div>
                    <div class="cityName">
                        <h3>Singapore</h3>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- experiences in dubai -->
    <div class="secondCarousalAncestor mt-4">
        <div class="container">
            <div class="controllers">
                <div>
                    <h2>Most Popular Experiences in Dubai</h2>
                    <span>Culture, nature, thrills, and record-breaking experiences—Dubai is the place to seek out
                        everything you imagine and beyond. Find it all here!
                    </span>
                </div>
            </div>
            <!-- first row -->
            <div class="owl-carousel secondSlider mb-3" id="experienceSlider">
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/dubai experience/Dubai_Frame.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">76 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/summer delights/SD-Ski-Freestyle-Adult-Product-page-1072x800-100.avif"
                            alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">87 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/summer delights/Aqua-Water-Park-front.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">93 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/summer delights/Ayya_front.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">69 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/summer delights/burj-kalifa-front.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">88 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second row -->
            <div class="owl-carousel secondSlider" id="experienceSlider">
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/dubai experience/33.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">76 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/dubai experience/Aqua-Water-Park-front.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">87 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/dubai experience/Desert-safar-banner.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">93 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/dubai experience/dubai-dolphinerium-dubai.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">69 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/dubai experience/MOTIONGATE Dubai Main Gate front.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">88 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- experiences in abu dhabi -->
    <div class="secondCarousalAncestor mt-4">
        <div class="container">
            <div class="controllers">
                <div>
                    <h2>Top Experiences in Abu Dhabi</h2>
                    <span>Discover the best attractions and activities that the UAE's capital city has to offer.
                    </span>
                </div>
            </div>
            <!-- first row -->
            <div class="owl-carousel secondSlider mb-3" id="experienceSlider">
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/abu dhabi experience/ABU DHABI, UAE - OCT 1 The exterior of Ferrari World at Yas Island in Abu Dubai in the UAE on October.avif"
                            alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">76 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/abu dhabi experience/Aquarium-Abu-Dhabi-01.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">87 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/abu dhabi experience/c9043980fdce4764efdeb6354097fc81.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">93 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/abu dhabi experience/desert-safari-front.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">69 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/abu dhabi experience/dhow-cruise-dinner-in-abu-dhabi-front.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">88 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
            </div>
            <!-- second row -->
            <div class="owl-carousel secondSlider" id="experienceSlider">
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/abu dhabi experience/emirates-zoo-img.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">76 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/abu dhabi experience/liwa-safari-tour-banner.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">87 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/abu dhabi experience/Louvre-Abu-Dhabi-820x500.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">93 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/abu dhabi experience/sky-dive-front-img.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">69 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
                <!-- # card start here -->
                <div class="card">
                    <div class="card-head">
                        <img src="assets/abu dhabi experience/slither-slide.avif" alt="">
                    </div>
                    <div class="card-body">
                        <div class="heading">
                            <h6>Dubai Aquarium and Underwater Zoo</h6>
                        </div>
                        <div class="bottomMost">
                            <small class="review">88 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <h6>AED 150.00</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
