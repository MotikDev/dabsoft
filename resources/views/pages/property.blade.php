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

        <style>
            .slick-prev:before, .slick-next:before {
                color: black; /* Custom arrow color */
            }
            .slick-slide {
                margin: 0 10px;
            }
            .slick-slide img {
                width: 100%;
                height: auto;
            }
            .slick-thumbnail {
                cursor: pointer;
                opacity: 0.6;
            }
            .slick-thumbnail.slick-active {
                opacity: 1;
            }
        </style>
    @endsection

    <!-- Container -->
    <div class="container mx-auto p-4 mt-8 mb-16 max-w-3xl">
        <!-- Property Title -->
        <h1 class="text-3xl text-pry font-bold">{{ $property->title }}</h1>
        <div class="flex flex-col sm:flex-row justify-between gap-2 mb-6 mt-2">
            <span class="text-md text-pry-light font-semibold ">{{ $property->location }}</span> 
            <span class="text-md text-pry-light font-semibold ">SQM:{{ $property->square_meter }}</span> 
            <span class="text-md text-pry-light font-bold">₦{{ number_format($property->amount, 0, '.', ',') }}</span>
        </div>

        <!-- Slick Carousel -->
        <div class="carousel mb-4">
            @foreach ($property->photos as $image)
                <div>
                    @if (Str::startsWith($image, 'photos'))
                        <img src="{{ asset($image) }}" alt="{{ $property->title }}" class="rounded-lg shadow-md w-full max-h-96 sm:max-h-[32rem]">
                    @elseif (Str::startsWith($image, 'videos'))
                        <video controls class="rounded-lg shadow-md w-full max-h-96 sm:max-h-[32rem]">
                            <source src="{{ asset($image) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                </div>
            @endforeach
        </div>

        <!-- Thumbnail Slider -->
        <div class="thumbnail-slider">
            @foreach ($property->photos as $image)
                <div class="slick-thumbnail">
                    @if (Str::startsWith($image, 'photos'))
                        <img src="{{ asset($image) }}" alt="Thumbnail" class="rounded-md shadow-sm">
                    @elseif (Str::startsWith($image, 'videos'))
                        <video controls class="rounded-md shadow-sm" style="width: 100%; height: auto;">
                            <source src="{{ asset($image) }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    @endif
                </div>
            @endforeach
        </div>


        <!-- Property Description -->
        <pre class="text-wrap text-lg text-gray-700 my-8">{{ $property->description }}</pre>

        <!-- User Details Form -->
        <form action="{{ route('contact.submit') }}" method="POST" class="bg-white p-6 rounded-lg shadow-md mt-8">
            @csrf
            <h2 class="text-2xl font-semibold mb-4">Interested? Get in touch with us!</h2>
            
            @if (session('status'))
                <div class="mb-4 font-medium text-sm text-green-600">
                    {{ session('status') }}
                </div>
            @endif

            <!-- Name -->
            <div class="mb-4">
                <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                <input type="text" id="name" name="name" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Your name">
            </div>

            <!-- Phone -->
            <div class="mb-4">
                <label for="phone" class="block text-sm font-medium text-gray-700">Phone</label>
                <input type="text" id="phone" name="subject" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Your phone number">
            </div>

            <!-- Email -->
            <div class="mb-4">
                <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                <input type="email" id="email" name="email" required class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2" placeholder="Your email">
            </div>

            <!-- Message -->
            <div class="mb-4">
                <label for="message" class="block text-sm font-medium text-gray-700">Message</label>
                <textarea id="message" name="message" rows="4" class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm p-2">Hello, I'm interested in {{ $property->title }}. Please get in touch with me.</textarea>
            </div>

            <!-- Add reCAPTCHA widget here -->
            {!!  GoogleReCaptchaV3::render(['contact_us_id' => 'contact_us']) !!}
            <div id="contact_us_id"></div>
            <x-input-error for="contact_us_id" :messages="$errors->get('g-recaptcha-response')" class="mt-2" />

            <!-- Submit Button -->
            <button type="submit" class="w-full bg-pry text-white p-2 rounded-md shadow-md hover:bg-pry-light transition">Submit</button>
        </form>

        <!-- Contact Buttons -->
        <div class="mt-8 flex space-x-4">
            <a href="tel:+2348026110457" class="flex-1 border border-gray-300 text-gray-700 hover:text-gray-100 p-3 rounded-md text-center hover:bg-pry-light transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <path d="M22 16.92V21a2 2 0 0 1-2.18 2A19.78 19.78 0 0 1 3 5.18 2 2 0 0 1 5 3h4.09a2 2 0 0 1 2 1.72l.5 4.55a2 2 0 0 1-1.15 2.11l-2.6 1.3a16 16 0 0 0 7.16 7.16l1.3-2.6a2 2 0 0 1 2.11-1.15l4.55.5a2 2 0 0 1 1.72 2z"/>
                </svg>


                Call Us
            </a>

            <a href="https://wa.me/+2348032080503?text=Hello, I'm interested in {{ urlencode($property->title) }}" class="flex-1 border border-gray-300 text-gray-700 hover:text-gray-100 p-3 rounded-md text-center hover:bg-pry-light transition">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 inline-block mr-2" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" ><path d="m15.271 13.21c.578.185 1.078.416 1.543.7l-.031-.018c.529.235.986.51 1.403.833l-.015-.011c.02.061.032.13.032.203 0 .011 0 .021-.001.032v-.001c-.015.429-.11.832-.271 1.199l.008-.021c-.231.463-.616.82-1.087 1.01l-.014.005c-.459.243-1.001.393-1.576.411h-.006c-1.1-.146-2.094-.484-2.988-.982l.043.022c-1.022-.468-1.895-1.083-2.636-1.829l-.001-.001c-.824-.857-1.579-1.795-2.248-2.794l-.047-.074c-.636-.829-1.041-1.866-1.1-2.995l-.001-.013v-.124c.032-.975.468-1.843 1.144-2.447l.003-.003c.207-.206.491-.335.805-.341h.001c.101.003.198.011.292.025l-.013-.002c.087.013.188.021.292.023h.003c.019-.002.04-.003.062-.003.13 0 .251.039.352.105l-.002-.001c.107.118.189.261.238.418l.002.008q.124.31.512 1.364c.135.314.267.701.373 1.099l.014.063c-.076.361-.268.668-.533.889l-.003.002q-.535.566-.535.72c.004.088.034.168.081.234l-.001-.001c.405.829.936 1.533 1.576 2.119l.005.005c.675.609 1.446 1.132 2.282 1.54l.059.026c.097.063.213.103.339.109h.002q.233 0 .838-.752t.804-.752zm-3.147 8.216h.022c1.357 0 2.647-.285 3.814-.799l-.061.024c2.356-.994 4.193-2.831 5.163-5.124l.024-.063c.49-1.113.775-2.411.775-3.775s-.285-2.662-.799-3.837l.024.062c-.994-2.356-2.831-4.193-5.124-5.163l-.063-.024c-1.113-.49-2.411-.775-3.775-.775s-2.662.285-3.837.799l.062-.024c-2.356.994-4.193 2.831-5.163 5.124l-.024.063c-.49 1.117-.775 2.419-.775 3.787 0 2.141.698 4.12 1.879 5.72l-.019-.026-1.225 3.613 3.752-1.194c1.49 1.01 3.327 1.612 5.305 1.612h.047zm0-21.426h.033c1.628 0 3.176.342 4.575.959l-.073-.029c2.825 1.197 5.028 3.4 6.196 6.149l.029.076c.588 1.337.93 2.896.93 4.535s-.342 3.198-.959 4.609l.029-.074c-1.197 2.825-3.4 5.028-6.149 6.196l-.076.029c-1.327.588-2.875.93-4.503.93-.011 0-.023 0-.034 0h.002c-.016 0-.034 0-.053 0-2.059 0-3.992-.541-5.664-1.488l.057.03-6.465 2.078 2.109-6.279c-1.051-1.714-1.674-3.789-1.674-6.01 0-1.646.342-3.212.959-4.631l-.029.075c1.197-2.825 3.4-5.028 6.149-6.196l.076-.029c1.327-.588 2.875-.93 4.503-.93h.033-.002z"/></svg>
                WhatsApp Us
            </a>
        </div>


    </div>

    <script>
        $(document).ready(function(){
            // Initialize main carousel
            $('.carousel').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: true,
                fade: true,
                asNavFor: '.thumbnail-slider' // Link to thumbnails
            });

            // Initialize thumbnail slider
            $('.thumbnail-slider').slick({
                slidesToShow: 5,
                slidesToScroll: 1,
                asNavFor: '.carousel', // Link to main carousel
                dots: false,
                centerMode: true,
                focusOnSelect: true
            });
        });
    </script>

</x-guest-layout>
