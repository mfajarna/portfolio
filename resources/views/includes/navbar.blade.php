    <!-- STRAT NAVBAR -->
    <div id="navbar">
        <nav class="navbar navbar-expand-lg navbar-white fixed-top navbar-custom sticky sticky-dark" id="main-menu">
            <div class="container">
                <!-- LOGO -->
                <a class="navbar-brand logo text-uppercase" href="#">
                    <img src="{{ asset('/assets/images/logo-kojay.png') }}" alt="" height="22" />
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
                    aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                    <i class="mdi mdi-menu"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <ul class="navbar-nav navbar-center mx-auto" id="navbar-navlist">
                        <li class="nav-item">
                            <a data-scroll href="#home" class="nav-link">Wellcome</a>
                        </li>
                        <li class="nav-item">
                            <a data-scroll href="#aboutMe" class="nav-link">About me</a>
                        </li>

                        <li class="nav-item">
                            <a data-scroll href="#projects" class="nav-link">Projects</a>
                        </li>

                    </ul>
                    <div class="nav-button">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <button id="getResume" class="btn btn-primary navbar-btn btn-rounded">Get Resume</button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>
