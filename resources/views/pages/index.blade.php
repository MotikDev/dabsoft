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
            <div><img src="/img/estate1.jpg" class="w-full h-96 sm:h-[40rem]" alt="Image 2"></div>
            <div><img src="/img/estate2.jpg" class="w-full h-96 sm:h-[40rem]" alt="Image 2"></div>
            <div><img src="/img/estate3.jpg" class="w-full h-96 sm:h-[40rem]" alt="Image 1"></div>
            <div><img src="/img/estate4.jpg" class="w-full h-96 sm:h-[40rem]" alt="Image 2"></div>
            <div><img src="/img/estate5.jpg" class="w-full h-96 sm:h-[40rem]" alt="Image 3"></div>
        </div>

        <div class="py-16 text-center bg-pry-light">
            <h1 class="text-3xl text-white font-black">Our Story</h1>
            <p class="mt-4 px-4 font-bold text-lg text-gray-200 max-w-5xl mx-auto">
                DABSOFT GLOBAL LINK LTD is a leading real estate firm that combines expertise, innovation, and passion to deliver exceptional living experiences. With a focus on affordability, luxury, and sustainability, we cater to a diverse range of clients seeking high-quality living spaces.
            </p>
        </div>

        <section class="bg-white py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="text-center">
                <h2 class="text-base text-pry font-semibold tracking-wide uppercase">Our Services</h2>
                <p class="mt-2 text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    What We Offer
                </p>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 mx-auto">
                    Discover our range of services designed to meet your property needs and enhance your lifestyle.
                </p>
                </div>

                <div class="mt-10">
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-12">

                        <!-- LAND SALES -->
                        <div class="flex flex-col bg-white p-6 rounded-lg shadow-md hover:shadow-2xl h-full">
                            <div class="flex items-center justify-center h-16 w-16 rounded-md bg-pry-light text-white mx-auto">
                                <!-- Icon: Land Icon -->
                                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 12v6m-6-6v6m12-6v6m0-12V6m-6 6V6m6 0h6m-6 0H6"></path>
                                </svg>
                            </div>
                            <h3 class="mt-6 text-lg leading-6 font-medium text-gray-900 text-center">Land Sales</h3>
                            <p class="mt-4 text-base text-gray-500 text-center">
                                Provides opportunities to own a plot of land for future development or investment, offering flexibility for custom building or holding for long-term appreciation.
                            </p>
                            <div class="mt-auto pt-6 text-center">
                                <a href="{{ route('show-category', ['land']) }}" class="inline-flex items-center px-4 py-2 border-2 border-pry text-pry font-medium rounded-lg shadow hover:bg-pry hover:text-white transition ease-in-out duration-300">
                                Browse Land Options
                                </a>
                            </div>
                        </div>

                        <!-- HOME BUILDING -->
                        <div class="flex flex-col bg-white p-6 rounded-lg shadow-md hover:shadow-2xl h-full">
                            <div class="flex items-center justify-center h-16 w-16 rounded-md bg-pry-light text-white mx-auto">
                                <!-- Icon: Home Icon -->
                                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v18m-9-9l9-9 9 9m-18 0l6-6m-6 6v9m12-9v9"></path>
                                </svg>
                            </div>
                            <h3 class="mt-6 text-lg leading-6 font-medium text-gray-900 text-center">Home Constructions</h3>
                            <p class="mt-4 text-base text-gray-500 text-center">
                                Delivers dream homes tailored to individual needs with quality construction, ensuring safety, durability, and an enhanced lifestyle.
                            </p>
                            <div class="mt-auto pt-6 text-center">
                                <a href="{{ route('show-category', ['construction']) }}" class="inline-flex items-center px-4 py-2 border-2 border-pry text-pry font-medium rounded-lg hover:bg-pry hover:text-white transition ease-in-out duration-300">
                                Browse Construction Plans
                                </a>
                            </div>
                        </div>

                        <!-- PROPERTY PURCHASE -->
                        <div class="flex flex-col bg-white p-6 rounded-lg shadow-md hover:shadow-2xl h-full">
                            <div class="flex items-center justify-center h-16 w-16 rounded-md bg-pry-light text-white mx-auto">
                                <!-- Icon: Property Purchase Icon -->
                                <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8h18v6H3zM5 12V5h14v7M3 16h18v2H3z"></path>
                                </svg>
                            </div>
                            <h3 class="mt-6 text-lg leading-6 font-medium text-gray-900 text-center">Property Sales</h3>
                            <p class="mt-4 text-base text-gray-500 text-center">
                                A convenient, streamlined process for buying property, with access to a range of options and expert support throughout the purchase journey.
                            </p>
                            <div class="mt-auto pt-6 text-center">
                                <a href="{{ route('show-category', ['property']) }}" class="inline-flex items-center px-4 py-2 border-2 border-pry text-pry font-medium rounded-lg hover:bg-pry hover:text-white transition ease-in-out duration-300">
                                Browse Properties
                                </a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>





        <section class="bg-gray-50 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center mb-12">
                <h2 class="text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">Featured Products</h2>
                <p class="mt-4 max-w-2xl text-xl text-gray-500 lg:mx-auto">Explore our exclusive collection of real estate properties, handpicked for you.</p>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- @foreach ($products as $product)
                    <div class="product">
                        @if(is_array($product->photos))
                            <div class="product-photos">
                                @foreach ($product->photos as $photo)
                                    <img src="{{ asset('storage/' . $photo) }}" alt="{{ $product->title }}" class="w-full h-full object-cover">
                                @endforeach
                            </div>
                        @endif
                    </div>
                @endforeach -->

                <!-- Product 1 -->
                 <a href="{{route('show-property', ['property' => $products[0]->id, 'title' => $products[0]->slug_url])}}">
                     <div class="bg-white rounded-lg shadow-md overflow-hidden">
                         <div class="h-64 w-full">
                            <img class="w-full h-full object-cover" src="{{asset($products[0]->photos[0])}}" alt="Product 1">
                         </div>
                         <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900">{{$products[0]->title}}</h3>
                            <p class="mt-2 text-gray-500">{{$products[0]->summary}}</p>
                         </div>
                     </div>
                 </a>

                <!-- Product 2 -->
                <a href="{{route('show-property', ['property' => $products[1]->id, 'title' => $products[1]->slug_url])}}">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="h-64 w-full">
                            <img class="w-full h-full object-cover" src="{{asset($products[1]->photos[0])}}" alt="Product 2">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900">{{$products[1]->title}}</h3>
                            <p class="mt-2 text-gray-500">{{$products[1]->summary}}</p>
                        </div>
                    </div>
                </a>

                <!-- Product 3 -->
                <a href="{{route('show-property', ['property' => $products[2]->id, 'title' => $products[2]->slug_url])}}">
                    <div class="bg-white rounded-lg shadow-md overflow-hidden">
                        <div class="h-64 w-full">
                            <img class="w-full h-full object-cover" src="{{asset($products[2]->photos[0])}}" alt="Product 3">
                        </div>
                        <div class="p-6">
                            <h3 class="text-lg font-medium text-gray-900">{{$products[2]->title}}</h3>
                            <p class="mt-2 text-gray-500">{{$products[2]->summary}}</p>
                        </div>
                    </div>
                </a>

                <!-- Product 4 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 w-full">
                        <img class="w-full h-full object-cover" src="/img/feature4.jpeg" alt="Product 4">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">Cozy Cottage</h3>
                        <p class="mt-2 text-gray-500">A quaint and cozy cottage perfect for a peaceful getaway or investment property.</p>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 w-full">
                        <img class="w-full h-full object-cover" src="/img/feature5.jpeg" alt="Product 5">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">Beachfront Estate</h3>
                        <p class="mt-2 text-gray-500">A stunning beachfront property offering direct access to the sea and spectacular views.</p>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="bg-white rounded-lg shadow-md overflow-hidden">
                    <div class="h-64 w-full">
                        <img class="w-full h-full object-cover" src="/img/feature6.jpeg" alt="Product 6">
                    </div>
                    <div class="p-6">
                        <h3 class="text-lg font-medium text-gray-900">Rustic Farmhouse</h3>
                        <p class="mt-2 text-gray-500">A charming farmhouse that blends rustic beauty with modern comforts in a tranquil setting.</p>
                    </div>
                </div>

                </div>
            </div>
        </section>







        <section class="bg-gray-100 py-12">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="lg:text-center">
                <h2 class="text-3xl leading-8 font-extrabold tracking-tight text-gray-900 sm:text-4xl">
                    What Makes Us Unique
                </h2>
                <p class="mt-2 max-w-2xl text-xl text-gray-500 lg:mx-auto">
                    Discover why DABSOFT GLOBAL LINK LTD stands out in the real estate market.
                </p>
                </div>
                <div class="mt-10">
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">

                    <!-- Affordable Luxury -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md text-pry-dark">
                                <!-- SVG Icon for Affordable Luxury -->
                                <<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2L2 12h10v10l10-10H12V2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Affordable Luxury</h3>
                            <p class="mt-2 text-base text-gray-500">
                            DABSOFT GLOBAL LINK LTD. offers luxurious living at an affordable price, making it accessible to a wider range of clients.
                            </p>
                        </div>
                    </div>

                    <!-- Flexible Payment Plans -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md text-pry-dark">
                                <!-- SVG Icon for Flexible Payment Plans -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m-4-4h8m-10 5h12a2 2 0 0 0 2-2v-10a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Flexible Payment Plans</h3>
                            <p class="mt-2 text-base text-gray-500">
                            We offer flexible payment plans, including initial deposits and installment options, to accommodate clients' financial needs.
                            </p>
                        </div>
                    </div>

                    <!-- Prime Location -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md text-pry-dark">
                                <!-- SVG Icon for Prime Location -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a8 8 0 0 1 8 8c0 4.42-6 12-8 12s-8-7.58-8-12a8 8 0 0 1 8-8zm0 4a4 4 0 1 0 0 8 4 4 0 0 0 0-8z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Prime Location</h3>
                            <p class="mt-2 text-base text-gray-500">
                            Our estate is strategically located, providing easy access to amenities, transportation, and services.
                            </p>
                        </div>
                    </div>

                    <!-- Personalized Service -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md text-pry-dark">
                                <!-- SVG Icon for Personalized Service -->
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 14l2-2m-2 2l-2-2m2 2v6m-6-6l6-6 6 6m-6 6h0" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Personalized Service</h3>
                            <p class="mt-2 text-base text-gray-500">
                            Our team provides personalized service, tailoring our approach to meet each client's unique needs and preferences.
                            </p>
                        </div>
                    </div>

                    <!-- Innovative Technology -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md text-pry-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9l-6 6m0 0l6 6m-6-6h12m0-6l-6-6m6 6H6" />
                            </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Innovative Technology</h3>
                            <p class="mt-2 text-base text-gray-500">
                                We leverage cutting-edge technology to streamline the buying process, enhance client experience, and provide virtual tours.
                            </p>
                        </div>
                    </div>

                    <!-- Community Building -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md text-pry-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5l3.5 3.5L20 8.5l-3.5 3.5L20 15.5l-4.5-0.5L12 20l-3.5-3.5L4 15.5l3.5-3.5L4 8.5l4.5-0.5L12 4.5z" />
                            </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Community Building</h3>
                            <p class="mt-2 text-base text-gray-500">
                                We foster a sense of community through regular events, creating a welcoming environment for residents.
                            </p>
                        </div>
                    </div>

                    <!-- Partnerships and Collaborations -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md text-pry-dark">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v8m0 0l4-4m-4 4l-4-4m12-4a8 8 0 1 0-16 0 8 8 0 0 0 16 0z" />
                            </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Partnerships and Collaborations</h3>
                            <p class="mt-2 text-base text-gray-500">
                                We partner with reputable organizations to offer exclusive benefits, services, and discounts to our clients.
                            </p>
                        </div>
                    </div>

                    <!-- Transparency and Trust -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md text-pry-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4.5l4 4m0 0l-4 4m4-4H6m12-2a8 8 0 1 1-16 0 8 8 0 0 1 16 0z" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Transparency and Trust</h3>
                            <p class="mt-2 text-base text-gray-500">
                                We prioritize transparency, honesty, and integrity in all our dealings, building trust with our clients.
                            </p>
                        </div>
                    </div>

                    <!-- Customer-Centric Approach -->
                    <div class="flex">
                        <div class="flex-shrink-0">
                            <div class="flex items-center justify-center h-12 w-12 rounded-md text-pry-dark">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor" aria-hidden="true">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4v0m-6-5l6-6 6 6m-6 6h0" />
                                </svg>
                            </div>
                        </div>
                        <div class="ml-4">
                            <h3 class="text-lg leading-6 font-medium text-gray-900">Customer-Centric Approach</h3>
                            <p class="mt-2 text-base text-gray-500">
                                Our focus is on delivering exceptional customer experiences, ensuring satisfaction and loyalty.
                            </p>
                        </div>
                    </div>

                </div>
                </div>
            </div>
        </section>




        
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