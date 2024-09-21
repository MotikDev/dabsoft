<x-guest-layout>
    @section('custom_headers')
        <!-- Include Slick Carousel CSS -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css"/>

        <!-- Include Slick Theme CSS (optional) -->
        <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css"/>

        <!-- Include jQuery (required by Slick Carousel) -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- Include Slick Carousel JavaScript -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js"></script>
    @endsection

    <div>
        <div class="carousel">
            <div><img src="/images/IMG-20220127-WA0003.jpg" class="w-full h-96 sm:h-[32rem]" alt="Image 2"></div>
            <div><img src="/images/Aphyosemion bivittatum.jpg" class="w-full h-96 sm:h-[32rem]" alt="Image 2"></div>
            <div><img src="/images/Marcusenius angolensis.jpg" class="w-full h-96 sm:h-[32rem]" alt="Image 1"></div>
            <div><img src="/images/Papyrocranus afer.jpg" class="w-full h-96 sm:h-[32rem]" alt="Image 2"></div>
            <div><img src="/images/Tetraodon schoutedtnii.jpg" class="w-full h-96 sm:h-[32rem]" alt="Image 3"></div>
            <div><img src="/images/IMG-20211111-WA0029.jpg" class="w-full h-96 sm:h-[32rem]" alt="Image 2"></div>
        </div>

        <div class="mt-16 text-center">
            <h1 class="text-2xl font-bold">Our Story</h1>
            <p class="mt-4 text-lg max-w-5xl mx-auto">
                DABSOFT GLOBAL LINK LTD is a leading real estate firm that combines expertise, innovation, and passion to deliver exceptional living experiences. With a focus on affordability, luxury, and sustainability, we cater to a diverse range of clients seeking high-quality living spaces.
            </p>
        </div>

        <h2 class="text-center font-extrabold text-3xl my-12">Our Services</h2>

        <div class="grid grid-cols-1 sm:grid-cols-3 gap-4 text-center px-6 sm:px-12">
            <div class="bg-white p-4 shadow-md rounded-lg">
                <div class="flex flex-col justify-center items-center gap-4 py-4">
                    <div class="w-20 h-20 rounded-full bg-purple-900 flex justify-center items-center">
                        <x-fish />
                    </div>

                    <h3 class="text-xl font-bold">Aquatic Fish Sales</h3>

                    <p>
                        Discover an unparalleled selection of aquatic fish to adorn your aquarium. Whether you're an experienced collector or a novice hobbyist, we offer a vast array of freshwater fishes.
                    </p>
                </div>
            </div>

            <div class="bg-white p-4 shadow-md rounded-lg">
                <div class="flex flex-col justify-center items-center gap-4 py-4">
                    <div class="w-24 h-24 rounded-full bg-purple-900 flex justify-center items-center">
                        <x-aquarium />
                    </div>
                    
                    <h3 class="text-xl font-bold">Aquarium Supplies</h3>

                    <p>
                        We offer a comprehensive range of top-quality, freshwater, tropical fishes and aquatic animals. We are your one-stop shop for everything you need as regards freshwater fishes and aquatic animals and mammals.
                    </p>
                </div>
            </div>

            <div class="bg-white p-4 shadow-md rounded-lg">
                <div class="flex flex-col justify-center items-center gap-4 py-4">
                    <div class="w-24 h-24 rounded-full bg-purple-900 flex justify-center items-center">
                        <x-fish-health />
                    </div>
                    
                    <h3 class="text-xl font-bold">Fish Health and Wellness</h3>

                    <p>
                        At P&P Aquatics, we prioritise the well-being of our aquatic products. We provide resources and advice on maintaining the health of your fish, including tips on nutrition, disease prevention, and treatment.
                    </p>
                </div>
            </div>
        </div>




        
    </div>
    
    

    @section('custom_script')
        <script>
            $(document).ready(function(){
                $('.carousel').slick({
                    autoplay: true,
                    autoplaySpeed: 5000,
                    arrows: true,
                    dots: true,
                    lazyLoad: true,
                    infinite: true,
                });
            });
        </script>
    @endsection


</x-guest-layout>