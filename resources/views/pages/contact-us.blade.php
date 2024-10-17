<x-guest-layout>

    <div class="mb-16 px-4 sm:px-16">
        <div class=" flex flex-col justify-center items-center mb-8">
            <h2 class="text-center font-extrabold text-3xl mt-16 mb-8">Contact Us</h2>
            <p class="w-full sm:w-1/2 text-center">
                Contact us today to inquire about our current inventory, request expert advice, or purchase the perfect real estate for you and your family.
            </p>
        </div>
        <div class="flex flex-col sm:flex-row gap-12 mb-8">
            <div class="basis-2/5 bg-pry px-8 max-h-80 rounded-xl text-white pt-8">
                <p class="mb-4">
                    <strong>Address:</strong> KM 7, Idiroko Road, Ota, Ogun State, Nigeria. 
                </p>
                <p class="mb-16">
                    <strong>TEL: </strong>
                    <a href="tel:+2348032080503">+234-803-2080-503</a><br>
                    <a href="tel:+2348026110457">+234-802-6110-457</a><br>
                    <a href="tel:+2348056611780">+234-805-6611-780</a>
                </p>
            </div>
            <div class="basis-3/5 bg-white px-8 py-12  rounded-xl">
                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('contact.submit') }}">
                    @csrf
                    <div class="flex flex-col sm:flex-row gap-4">
                        <div class="flex-1 flex-col">
                            <x-input-label for="name" :value="__('Name')" />
                            <input type="text" class="w-full mt-2 border-0 bg-gray-100 rounded-md" name="name" :value="old('name')" id="name">
                            <x-input-error for="name" :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div class="flex-1 flex-col">
                            <x-input-label for="email" :value="__('Email Address')" />
                            <input type="text" class="w-full mt-2 border-0 bg-gray-100 rounded-md" type="email" name="email" :value="old('email')" id="email">
                            <x-input-error for="email" :messages="$errors->get('email')" class="mt-2" />
                        </div>
                    </div>
                    
                    <div class="flex flex-col mt-6">
                        <x-input-label for="subject" :value="__('Subject')" />
                        <input type="text" class="w-full mt-2 border-0 bg-gray-100 rounded-md" name="subject" :value="old('subject')" id="subject">
                        <x-input-error for="subject" :messages="$errors->get('subject')" class="mt-2" />
                    </div>
        
                    <div class="flex flex-col mt-6 mb-4">
                        <x-input-label for="message" :value="__('Message')" />
                        <textarea class="w-full mt-2 border-0 bg-gray-100 rounded-md" name="message" :value="old('message')" id="message" cols="30" rows="4"></textarea>
                        <x-input-error for="message" :messages="$errors->get('message')" class="mt-2" />
                    </div>
        
                    <!-- Add reCAPTCHA widget here -->
                    {!!  GoogleReCaptchaV3::render(['contact_us_id' => 'contact_us']) !!}
                    <div id="contact_us_id"></div>
                    <x-input-error for="contact_us_id" :messages="$errors->get('g-recaptcha-response')" class="mt-2" />
        
                    <button type="submit" class="bg-pry mt-8 px-16 py-3 text-gray-100 rounded-md w-full sm:w-auto">Submit</button>
                </form>
            </div>
        </div>
        <iframe class="w-full" src="https://www.google.com/maps/embed?pb=!1m17!1m12!1m3!1d3962.7200861642887!2d3.1873299999999998!3d6.681557!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m2!1m1!2zNsKwNDAnNTMuNiJOIDPCsDExJzE0LjQiRQ!5e0!3m2!1sen!2sng!4v1726923088452!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>

</x-guest-layout>