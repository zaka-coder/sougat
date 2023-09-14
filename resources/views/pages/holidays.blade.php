@extends('layouts.app')

@section('css-content')
    <link rel="stylesheet" href="{{ asset('css/holidays.css') }}">
@endsection
@section('content')
    <div class="bgController">
        <main class="carousalAncestor">
            <!-- Carousal starts here -->
            <figure class="owl-carousel firstSlider" id="mainSlider">
                <img src="assets/holidays images/georgia-bnr-1.png" alt="">
                <img src="assets/holidays images/getway-to-georgia-web.png" alt="">
                <img src="assets/holidays images/sparkling-diwali-in-dubai.png" alt="">
                <img src="assets/holidays images/summer-in-azerbaijan.png" alt="">
                <img src="assets/holidays images/summer-in-dubai-bnr.png" alt="">
            </figure>
            <div class="buttons">
                <button class="prev-btn"><i class="fa-solid fa-chevron-left"></i></button>
                <button class="next-btn"><i class="fa-solid fa-chevron-right"></i></button>
            </div>
            <!-- Carousal ends here -->
            {{-- inputs starts here --}}
            <div class="diInputs">
                <div class="countryAncestor">
                    <span class="country"><i class="bi bi-geo-alt"></i></span><input type="text"
                        class="countryInput shadow-lg" placeholder="Select Country">
                </div>
                <div class="cityAncestor">
                    <i class="bi bi-globe city"></i><input type="text" class="cityInput shadow-lg"
                        placeholder="Select City">
                </div>
            </div>
            <!-- four buttons starts here -->
            <div class="tetraButtons">
                <a href="/" class="button"><i class="fa-solid fa-binoculars"></i>&nbsp;Activities</a>
                <a href="/hotels" class="button"><i class=" fa-solid fa-hotel"></i>&nbsp;Hotels</a>
                <a href="/holidays" class="button active"><i class=" fa-solid fa-umbrella-beach"></i>&nbsp;Holidays</a>
                <a href="/visa" class="button"><i class=" fa-solid fa-receipt"></i>&nbsp;Visa</a>
            </div>
            <!-- four buttons ends here -->
        </main>
        {{-- Holidays destination --}}
        <div class="container">
            <div class="textOfHolidays mb-3">
                <div>
                    <h2>Holiday Destinations</h2>
                    <span>Explore the most popular and trending places to travel around the world
                    </span>
                </div>
            </div>
            <div class="imagesCollection">
                <!-- # card start here -->
                <div class="holidays-card">
                    <div class="holidays-head">
                        <img src="assets/holidays destination pictures/tbilisi-city.png" alt="">
                    </div>
                    <div class="cityName">
                        <h3>Abu Dhabi</h3>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="holidays-card">
                    <div class="holidays-head">
                        <img src="assets/holidays destination pictures/Yerevan-min.png" alt="">
                    </div>
                    <div class="cityName">
                        <h3>Dubai</h3>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="holidays-card">
                    <div class="holidays-head">
                        <img src="assets/top cities/ras-al-khaimah-city.png" alt="">
                    </div>
                    <div class="cityName">
                        <h3>Ras-al-Khamiah</h3>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="holidays-card ">
                    <div class="holidays-head">
                        <img src="assets/top cities/singapore-city.png" alt="">
                    </div>
                    <div class="cityName">
                        <h3>Singapore</h3>
                    </div>
                </div>
            </div>
            <div class="imagesCollection mt-3">
                <!-- # card start here -->
                <div class="holidays-card">
                    <div class="holidays-head">
                        <img src="assets/holidays destination pictures/baku-city.png" alt="">
                    </div>
                    <div class="cityName">
                        <h3>Abu Dhabi</h3>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="holidays-card">
                    <div class="holidays-head">
                        <img src="assets/holidays destination pictures/istanbul-city.png" alt="">
                    </div>
                    <div class="cityName">
                        <h3>Dubai</h3>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="holidays-card">
                    <div class="holidays-head">
                        <img src="assets/holidays destination pictures/maldives-city.png" alt="">
                    </div>
                    <div class="cityName">
                        <h3>Ras-al-Khamiah</h3>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="holidays-card ">
                    <div class="holidays-head">
                        <img src="assets/holidays destination pictures/mauritius-city.png" alt="">
                    </div>
                    <div class="cityName">
                        <h3>Singapore</h3>
                    </div>
                </div>
            </div>
        </div>
        {{-- dewali container --}}
        <div class="container mt-3 pb-3">
            <div class="textOfHolidays mb-3">
                <div>
                    <h2>Unforgettable Diwali Delights</h2>
                    <span>💥 This Diwali, step into a world of extraordinary experiences with our incredible Dubai Diwali
                        Packages!
                    </span>
                </div>
            </div>
            <div class="imagesCollection">
                <!-- # card start here -->
                <div class="holidays-card-dewali">
                    <div class="holidays-head-dewali">
                        <img src="assets/holidays destination pictures/tbilisi-city.png" alt="">
                    </div>
                    <div class="holidays-body-dewali">
                        <h6 class="pt-2">Celebrate Diwali In Dubai</h6>
                        <div class="bottomMost-dewali">
                            <small class="review">76 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <button>Quick Inquiry</button>
                        </div>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="holidays-card-dewali">
                    <div class="holidays-head-dewali">
                        <img src="assets/holidays destination pictures/Yerevan-min.png" alt="">
                    </div>
                    <div class="holidays-body-dewali">
                        <h6 class="pt-2">Celebrate Diwali In Dubai</h6>
                        <div class="bottomMost-dewali">
                            <small class="review">76 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <button>Quick Inquiry</button>
                        </div>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="holidays-card-dewali">
                    <div class="holidays-head-dewali">
                        <img src="assets/top cities/ras-al-khaimah-city.png" alt="">
                    </div>
                    <div class="holidays-body-dewali">
                        <h6 class="pt-2">Celebrate Diwali In Dubai</h6>
                        <div class="bottomMost-dewali">
                            <small class="review">76 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <button>Quick Inquiry</button>
                        </div>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="holidays-card-dewali">
                    <div class="holidays-head-dewali">
                        <img src="assets/top cities/singapore-city.png" alt="">
                    </div>
                    <div class="holidays-body-dewali">
                        <h6 class="pt-2">Celebrate Diwali In Dubai</h6>
                        <div class="bottomMost-dewali">
                            <small class="review">76 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <button>Quick Inquiry</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- new year container --}}
        <div class="container mt-3 pb-3">
            <div class="textOfHolidays mb-3">
                <div>
                    <h2>Celebrate New Year 2024 in Dubai</h2>
                    <span>🎆 Welcome 2024 in Style! Don't miss out on the unforgettable Dubai New Year Packages for an
                        extraordinary experience!
                    </span>
                </div>
            </div>
            <div class="imagesCollection">
                <!-- # card start here -->
                <div class="holidays-card-dewali">
                    <div class="holidays-head-dewali">
                        <img src="assets/holidays destination pictures/tbilisi-city.png" alt="">
                    </div>
                    <div class="holidays-body-dewali">
                        <h6 class="pt-2">Celebrate Diwali In Dubai</h6>
                        <div class="bottomMost-dewali">
                            <small class="review">76 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <button>Quick Inquiry</button>
                        </div>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="holidays-card-dewali">
                    <div class="holidays-head-dewali">
                        <img src="assets/holidays destination pictures/Yerevan-min.png" alt="">
                    </div>
                    <div class="holidays-body-dewali">
                        <h6 class="pt-2">Celebrate Diwali In Dubai</h6>
                        <div class="bottomMost-dewali">
                            <small class="review">76 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <button>Quick Inquiry</button>
                        </div>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="holidays-card-dewali">
                    <div class="holidays-head-dewali">
                        <img src="assets/top cities/ras-al-khaimah-city.png" alt="">
                    </div>
                    <div class="holidays-body-dewali">
                        <h6 class="pt-2">Celebrate Diwali In Dubai</h6>
                        <div class="bottomMost-dewali">
                            <small class="review">76 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <button>Quick Inquiry</button>
                        </div>
                    </div>
                </div>
                <!-- #card starts here -->
                <div class="holidays-card-dewali">
                    <div class="holidays-head-dewali">
                        <img src="assets/top cities/singapore-city.png" alt="">
                    </div>
                    <div class="holidays-body-dewali">
                        <h6 class="pt-2">Celebrate Diwali In Dubai</h6>
                        <div class="bottomMost-dewali">
                            <small class="review">76 Reviews
                                <div class="stars">
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                    <small><i class="bi bi-star-fill"></i></small>
                                </div>
                            </small>
                            <button>Quick Inquiry</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
