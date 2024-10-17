<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Featured Products') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-2xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white px-4 sm:px-8 overflow-hidden shadow-xl sm:rounded-lg">
                <p class=" text-center my-4 text-xl text-pry font-bold ">Add New Product</p>

                @if (session('status'))
                    <div class="mb-4 font-medium text-sm text-green-600">
                        {{ session('status') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="mb-4">
                        <ul class="list-disc list-inside text-sm text-red-600">
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form method="POST" action="{{ route('store-product') }}" enctype="multipart/form-data" x-data="photoUpload">
                    @csrf

                    <div>
                        <x-label for="category" value="{{ __('Category') }}" />
                        <select name="category" id="category" class="border-2 border-gray-300 shadow-sm rounded-md mt-1 text-sm mb-2">
                            <option value="land">Land</option>
                            <option value="construction">Construction</option>
                            <option value="property">Property</option>
                        </select>
                    </div>

                    <div>
                        <x-label for="location" value="{{ __('Location') }}" />
                        <x-input id="location" class="block mt-1 w-full border-2 mb-2" type="text" name="location" :value="old('location')" required autocomplete="" />
                    </div>

                    <div>
                        <x-label for="amount" value="{{ __('Amount') }}" />
                        <x-input id="amount" class="block mt-1 w-full border-2 mb-2" type="number" name="amount" :value="old('amount')" required autocomplete="" />
                    </div>

                    <div>
                        <x-label for="sqm" value="{{ __('Square Meters') }}" />
                        <x-input id="sqm" class="block mt-1 w-full border-2 mb-2" type="number" name="sqm" :value="old('sqm')" required autocomplete="" />
                    </div>

                    <div>
                        <x-label for="title" value="{{ __('Title') }}" />
                        <x-input id="title" class="block mt-1 w-full border-2 mb-2" type="text" name="title" :value="old('title')" required autocomplete="" />
                    </div>

                    <div>
                        <x-label for="summary" value="{{ __('Summary') }}" />
                        <x-input id="summary" class="block mt-1 w-full border-2 mb-2" type="text" name="summary" :value="old('summary')" required autocomplete="" />
                    </div>

                    <div class="mt-4">
                        <x-label for="description" value="{{ __('Description') }}" />
                        <textarea name="description" id="description" cols="30" rows="10" class="block mt-1 mb-2 w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 border-2 rounded-md shadow-sm" required autocomplete="" >{{old('description')}}</textarea>
                    </div>


                    <div>
                        <x-label for="photos" value="{{ __('Photos') }}" />
                        <!-- Photos File Input -->
                        <input type="file" id="photos" class="hidden" wire:model.live="photos" x-ref="photos" multiple name="photos[]" accept="image/*"
                            x-on:change="
                                Array.from($refs.photos.files).forEach(file => {
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        photosPreview.push(e.target.result);
                                    };
                                    reader.readAsDataURL(file);
                                });
                            " />
                        <div class="mt-2 flex space-x-2">
                            <template x-for="photo in photosPreview" :key="photo">
                                <div class="w-20 h-20 bg-cover bg-no-repeat bg-center rounded-full" 
                                    x-bind:style="'background-image: url(\'' + photo + '\');'">
                                </div>
                            </template>
                        </div>
                        <x-secondary-button class="mt-1 me-2" type="button" x-on:click.prevent="$refs.photos.click()">
                            {{ __('Select Photos') }}
                        </x-secondary-button>
                    </div>

                    <!-- Video File Upload -->
                    <div class="mt-4">
                        <x-label for="videos" value="{{ __('Videos') }}" />
                        <input type="file" id="videos" class="hidden" x-ref="videos" multiple name="videos[]" accept="video/*"
                            x-on:change="
                                Array.from($refs.videos.files).forEach(file => {
                                    const reader = new FileReader();
                                    reader.onload = (e) => {
                                        videoPreview.push(e.target.result);
                                    };
                                    reader.readAsDataURL(file);
                                });
                            " />
                        <div class="mt-2 flex space-x-2">
                            <template x-for="video in videoPreview" :key="video">
                                <video controls class="w-20 h-20" x-bind:src="video"></video>
                            </template>
                        </div>
                        <x-secondary-button class="mt-1" type="button" x-on:click.prevent="$refs.videos.click()">
                            {{ __('Select Videos') }}
                        </x-secondary-button>
                    </div>

                    <div class="flex items-center justify-end my-4">
                        <x-button class="ms-4">
                            {{ __('Submit') }}
                        </x-button>
                    </div>
                </form>

            </div>
        </div>
    </div>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('photoUpload', () => ({
                photosPreview: [],
                videoPreview: [],
            }));
        });
    </script>
</x-app-layout>
