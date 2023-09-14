<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sougat Travel</title>
    <!-- fonts and icons cdn links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"
        integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- bootstrap css links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.10.5/font/bootstrap-icons.min.css"
        integrity="sha512-ZnR2wlLbSbr8/c9AgLg3jQPAattCUImNsae6NHYnS9KrIwRdcY9DxFotXhNAKIKbAXlRnujIqUWoXXwqyFOeIQ=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- owl-carousal css links -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css"
        integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CSS links -->
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
    @yield('css-content')
</head>

<body>
    <header>
        <!-- Navbar starts here -->
        <nav class="navbar navbar-expand-lg">
            <div class="container" style="--bs-gutter-x:0rem">
                <div class="logo">
                    <img src="{{ asset('assets/index page images/Sougat-Tourism-Logo.png') }}" alt="logo">
                </div>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="menu collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto">
                        <!-- Dropdown menus for Helpline, Language, and Currency -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Helpline
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Dubai +9712132101</a></li>
                                <li><a class="dropdown-item" href="#">Pak +9212101231</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Language
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">English</a></li>
                                <li><a class="dropdown-item" href="#">Arabic</a></li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Currency
                            </a>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">USD</a></li>
                                <li><a class="dropdown-item" href="#">AED</a></li>
                            </ul>
                        </li>
                        <!-- Login and Cart icons -->
                        <li class="nav-item userLogo">
                            <a class="nav-link" aria-current="page" href="#">
                                <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19"
                                    fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                                    <path
                                        d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6Zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0Zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4Zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10Z" />
                                </svg>&nbsp;Login
                            </a>
                        </li>
                        <li class="nav-item beFinished">
                            <a class="nav-link d-flex align-items-center justify-content-center" aria-current="page"
                                href="#">
                                <div class="vr"></div>
                                <div class="cart">
                                    <span class="count">0</span>
                                    <i class="fa-solid fa-cart-shopping fa-2xl"></i>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Navbar ends here -->
    </header>


    @yield('content')



    <div class="bottomBar">
       <table class="table">
        <thead>
            <tr class="">
                <td><a href="/"><i class="fa-solid fa-binoculars"></i>&nbsp;Activities</a></td>
                <td><a href="/hotels"><i class=" fa-solid fa-hotel"></i>&nbsp;Hotels</a></td>
                <td><a href="/holidays"><i class=" fa-solid fa-umbrella-beach"></i>&nbsp;Holidays</a></td>
                <td><a href="/visa"><i class=" fa-solid fa-receipt"></i>&nbsp;Visa</a></td>
            </tr>
        </thead>
       </table>
    </div>

    <!-- footer starts here -->
    <footer>
        <div class="logo mt-4">
            <img src="{{ asset('assets/index page images/Sougat-Tourism-Logo.png') }}" alt="">
        </div>
        <div class="footernav mb-2">
            <a href="#"><span>About Us |</span></a>
            <a href="#"><span>Contact Us |</span></a>
            <a href="#">Privacy Policy |</a>
            <a href="#">Terms & Conditions</a>
        </div>
        <div class="icons mt-3">
            <div><i class="fa-brands fa-square-facebook"></i></div>
            <div><i class="fa-brands fa-square-instagram"></i></div>
            <div><i class="fa-brands fa-square-twitter"></i></div>
            <div><i class="fa-brands fa-square-youtube"></i></div>
            <div><i class="fa-brands fa-linkedin"></i></div>
        </div>
        <div class="hr mb-5">
            <hr>
        </div>

        <div>
            <span class="me-5">© 2023 Sougat Travels</span>
            <span>Designed and Developed with ❤ By</span>
            <a href="#">Lwt</a>
        </div>
    </footer>
    <!-- custom javascripts -->
    <script src="{{ asset('js/index.js') }}"></script>
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
        integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.min.js"
        integrity="sha384-Rx+T1VzGupg4BHQYs2gCW9It+akI2MM/mndMCy36UVfodzcJcF0GGLxZIzObiEfa" crossorigin="anonymous">
    </script>
    <!-- jQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Owl Carousel -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"
        integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- owl-carousal scripts -->
    <script src="{{ asset('js/owl-carousal/owl-carousal.js') }}"></script>
    @yield('javascript')
</body>

</html>
