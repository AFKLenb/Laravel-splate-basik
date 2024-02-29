@php
    $setting = App\Models\Setting::find(1);
@endphp
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand flex items-center" href="/">
            <img src="{{Storage::url($setting->logo)}}" class="logo img-fluid" alt="">

            <span class="ms-2">{{$setting->name}}</span>
        </a>

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class=" navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link active" href="/">Home</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="about">About Us</a>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#section_5" id="navbarLightDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">Pages</a>

                    <ul class="dropdown-menu dropdown-menu-light" aria-labelledby="navbarLightDropdownMenuLink">
                        <li><a class="dropdown-item" href="services_client">Our Services</a></li>

                        <li><a class="dropdown-item" href="soon">Coming Soon</a></li>

                        <li><a class="dropdown-item" href="page_404">Page 404</a></li>

                        <li><a class="dropdown-item" href="fitback">Fitback</a></li>
                    </ul>
                </li>

                <li class="nav-item">
                    <a class="nav-link" href="contact">Contact</a>
                </li>

                <li class="nav-item ms-3">
                    <a class="nav-link custom-btn custom-border-btn custom-btn-bg-white btn" href="#">Get started</a>
                </li>
            </ul>
        </div>
    </div>
</nav>
