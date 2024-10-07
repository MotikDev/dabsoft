<!-- <div class="grid grid-cols-1 sm:grid-cols-4 gap-2 text-center px-6 sm:px-12">
    <div class="bg-white p-4 rounded-lg">
        <div class="flex flex-col justify-center items-center">
            <div><img src="/img/fish5.png" class="w-80 h-80" alt="Image 5"></div>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg">
        <div class="flex flex-col justify-center items-center">
            <div><img src="/img/fish6.png" class="w-80 h-80" alt="Image 6"></div>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg">
        <div class="flex flex-col justify-center items-center">
            <div><img src="/img/fish7.png" class="w-80 h-80" alt="Image 7"></div>
        </div>
    </div>

    <div class="bg-white p-4 rounded-lg">
        <div class="flex flex-col justify-center items-center">
            <div><img src="/img/fish8.png" class="w-80 h-80" alt="Image 8"></div>
        </div>
    </div>
</div> -->


<section class="bg-pry py-8">
  <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
    <div class="text-center">
      <h2 class="text-2xl font-extrabold text-white sm:text-3xl">
        Don’t wait—invest in your future today!
      </h2>
      <p class="mt-4 text-lg text-gray-200">
        Contact us now to learn more and start your journey to land ownership.
      </p>
      <div class="mt-6">
        <a href="/contact-us" class="inline-flex items-center px-6 py-3 border border-transparent text-base font-medium rounded-md text-pry bg-white hover:bg-gray-100">
          Contact Us
        </a>
      </div>
    </div>
  </div>
</section>




<div class="grid grid-cols-1 sm:grid-cols-2 gap-4 text-gray-500 py-8 pl-8 border-t-2 shadow-sm">
    <div class="flex flex-col sm:flex-row gap-4">
        <div class="basis-1/2">
            <h2 class="text-xl font-bold text-purple-950 mb-4">About Us</h2>
            <p>
                DABSOFT GLOBAL LINK LTD is a leading real estate firm that combines expertise, innovation, and passion to deliver exceptional living experiences. With a focus on affordability, luxury, and sustainability, we cater to a diverse range of clients seeking high-quality living spaces.
            </p>
        </div>
        <div class="basis-1/2">
            <h2 class="text-xl font-bold text-purple-950 mb-4">Quick Links</h2>
            <ul>
                <li> 
                    <a href="{{ route('about-us') }}"> About us </a> 
                </li>
                <!-- <li> 
                    <a href="{{ route('catalogue') }}"> Catalogue </a> 
                </li> -->
                <!-- <li> 
                    <a href="{{ route('facilities') }}"> Facilities </a> 
                </li> -->
                <li> 
                    <a href="{{ route('terms') }}"> Terms and Conditions </a> 
                </li>
                <li> 
                    <a href="{{ route('contact-us') }}"> Contact Us </a> 
                </li>
            </ul>
        </div>
    </div>
    <div class="flex flex-col sm:flex-row gap-4">
        <div class="basis-1/2">
            <h2 class="text-xl font-bold text-purple-950 mb-4">Contact Us</h2>
            <p>
                Phone: +234-803-2080-503
            </p>
            <p>
                Email: info@dabsoft.com
            </p>
        </div>
        <div class="basis-1/2">
            <h2 class="text-xl font-bold text-purple-950 mb-4">Visit Us</h2>
            <p>
                Office Address: KM 7, Idiroko Road, Ota, Ogun State, Nigeria.
            </p>
        </div>
    </div>
</div>
<div class="flex flex-row justify-center">
    <div class=" mt-4 text-center">
        &copy; {{date("Y")}} {{ config('app.name') }}
    </div>
</div>