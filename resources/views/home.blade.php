@extends('layouts.user')

@section('title', 'Home')

@section('contents')
<main class="bg-white">
    <header class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
        <div class="flex items-center justify-center space-x-4">
            <img src="{{ asset('image/logo.png') }}" class="max-w-xs h-auto">
            <img src="{{ asset('image/cha.png') }}" style="width: 500px; height: auto;">
        </div>
    </header>
    
    <div class="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
        <div class="px-4 py-6 sm:px-0">
            <div class="border-4 border-dashed border-gray-200 rounded-lg h-96">
                <div class="swiper-container">
                    <div class="swiper-wrapper">
                        <!-- Adjusted swiper-slide images -->
                        <div class="swiper-slide">
                            <img src="{{ asset('image/1.png') }}" alt="Image 1" class="w-full h-full object-cover">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/2.png') }}" alt="Image 2" class="w-full h-full object-cover">
                        </div>
                        <div class="swiper-slide">
                            <img src="{{ asset('image/3.png') }}" alt="Image 3" class="w-full h-full object-cover">
                        </div>
                        <!-- Add more slides here if needed -->
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
                
            </div>
        </div>
    </div>
</main>

<!-- Swiper.js -->
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Swiper Initialization -->
<script>
    document.addEventListener("DOMContentLoaded", function() {
        var swiper = new Swiper('.swiper-container', {
            slidesPerView: 1,
            spaceBetween: 10,
            loop: true,
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
            },
        });
    });
</script>
@endsection
