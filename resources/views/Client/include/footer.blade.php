@php
    $setting = App\Models\Setting::find(1);
    $socials =  App\Models\Social::where('isActive', 1)->get();
@endphp
<footer class="site-footer">
    <div class="container">
        <div class="row">

            <div class="col-lg-12 col-12 d-flex align-items-center mb-4">
                <div>
                    <img src="{{Storage::url($setting->logo)}}" class="logo img-fluid" alt="">
                </div>

                <ul class="footer-menu d-flex flex-wrap ms-5">
                    <li class="footer-menu-item"><a href="about" class="footer-menu-link">About Us</a></li>

                    <li class="footer-menu-item"><a href="#" class="footer-menu-link">Blog</a></li>

                    <li class="footer-menu-item"><a href="fitback" class="footer-menu-link">Reviews</a></li>

                    <li class="footer-menu-item"><a href="contact" class="footer-menu-link">Contact</a></li>
                </ul>
            </div>

            <div class="col-lg-5 col-12 mb-4 mb-lg-0">
                <h5 class="site-footer-title mb-3">Our Services</h5>

                <ul class="footer-menu">
                    <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">
                            <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                            House Cleaning
                        </a>
                    </li>

                    <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">
                            <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                            Car Washing
                        </a>
                    </li>

                    <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">
                            <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                            Laundry
                        </a>
                    </li>

                    <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">
                            <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                            Office Cleaning
                        </a>
                    </li>

                    <li class="footer-menu-item">
                        <a href="#" class="footer-menu-link">
                            <i class="bi-chevron-double-right footer-menu-link-icon me-2"></i>
                            Toilet Cleaning
                        </a>
                    </li>
                </ul>
            </div>

            <div class="col-lg-4 col-md-6 col-12 mb-4 mb-lg-0 mb-md-0">
                <h5 class="site-footer-title mb-3">Office</h5>

                <p class="text-white d-flex mt-3 mb-2">
                    <i class="bi-geo-alt-fill me-2"></i>
                    {{ $setting->address }}
                </p>

                <p class="text-white d-flex mb-2">
                    <i class="bi-telephone-fill me-2"></i>

                    <a href="tel: 110-220-9800" class="site-footer-link">
                        {{ $setting->phone_number }}
                    </a>
                </p>

                <p class="text-white d-flex">
                    <i class="bi-envelope-fill me-2"></i>

                    <a href="mailto:info@company.com" class="site-footer-link">
                        {{ $setting->email }}
                    </a>
                </p>

                <ul class="social-icon mt-4">
                    @forelse($socials as $social)
                        <li class="social-icon-item">
                            <a href="{{$social->link}}" class="inline-flex items-center justify-center social-icon-link button ">
                                <img src="{{Storage::url($social->image)}}" class=" w-full h-[auto] " alt="">
                            </a>
                        </li>

                    @empty
                        {{__ ('Данные не найдены')}}
                    @endforelse
                </ul>
            </div>

            <div class="col-lg-3 col-md-6 col-6 mt-3 mt-lg-0 mt-md-0">
                <div class="featured-block">
                    <h5 class="text-white mb-3">График работы</h5>
                    <p class="text-white mb-3">{{ $setting->schedule }}</p>

                </div>
            </div>
        </div>
    </div>

    <div class="site-footer-bottom">
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-12">
                    <p class="copyright-text mb-0">Copyright © 2036 Clean Work Co., Ltd.</p>
                </div>

                <div class="col-lg-6 col-12 text-end">
                    <p class="copyright-text mb-0">
                        // Designed by <a href="https://www.tooplate.com" target="_parent">Tooplate</a> //</p>
                </div>

            </div>
        </div>
    </div>
</footer>
