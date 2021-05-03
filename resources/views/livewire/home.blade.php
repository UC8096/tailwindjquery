<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.css" />
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<script src="https://unpkg.com/swiper/swiper-bundle.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<div class="w-4/5 mx-auto my-20 bg-white">
    <div id="slider" class="swiper-container w-full">
        <div class="swiper-wrapper">
            <div class="swiper-slide bg-cover bg-center shadow-lg text-white  h-auto text-white py-24 px-10 object-fill"
                style="background-image: url(https://images.unsplash.com/photo-1544144433-d50aff500b91?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=1350&q=80)">
                <div class="container mx-auto px-6 md:px-20 py-6">
                    <div class="md:w-1/2">
                        <p class="font-bold text-sm uppercase">Services</p>
                        <p class="text-3xl font-bold">Hello world</p>
                        <p class="text-2xl mb-10 leading-none">Carousel with TailwindCSS and jQuery</p>
                        <a href="#"
                            class="bg-purple-800 py-4 px-8 text-white font-bold uppercase text-xs rounded hover:bg-gray-200 hover:text-gray-800">Contact
                            us</a>
                    </div>
                </div>
            </div>
            <div class="swiper-slide bg-cover bg-center shadow-lg"
                style="background-image: url('/assets/img/slider-bg-1.png');">
                <div class="container mx-auto px-6 md:px-20 py-6">
                    <div class="w-full md:w-1/2">
                        <div class="md:border border-gray-100 md:p-10">
                            <h3 class="text-5xl leading-tight" style="font-family: Niconne, cursive;">Selamat Ke
                            </h3>
                            <h2 class="font-bold leading-tight text-6xl">Web2Tailwind</h2>
                            <p class="text-xl mt-10 font-light">Use complete html components in your projects.
                            </p>
                        </div>
                        <div class="my-10 md:mx-10 md:-mt-2"><a href="#appointment"
                                class="bg-pink-500  ease-linear hover:bg-blue-600 text-white px-6 py-4 rounded-full">USE
                                TEMPLATE</a></div>
                    </div>
                </div>
            </div>
        </div>
        
        {{-- <div class="hidden md:flex swiper-button-prev bg-white w-16 h-16 text-xs rounded-full text-pink-500"></div>
        <div class="hidden md:flex swiper-button-next bg-white w-16 h-16 text-xs rounded-full text-pink-500"></div> --}}
        <div class="swiper-pagination"></div>
    </div>

</div>
<script>
    var mySwiper = new Swiper ('.swiper-container', {
            // Optional parameters
            direction: 'horizontal',
            loop: true,

            // If we need pagination
            pagination: {
                el: '.swiper-pagination',
            },

            // Navigation arrows
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },

            // And if we need scrollbar
            scrollbar: {
                el: '.swiper-scrollbar',
            },
        })
</script>