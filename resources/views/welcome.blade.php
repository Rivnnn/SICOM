@extends('layouts.app')
@section('content')
    <div class="container text-center my-4">
        <h1 class="text-4xl font-bold mb-8">Welcome to SICOM</h1>
        <form class="flex justify-center mb-10">
            <input class="form-control rounded-l-full px-4 py-2" type="search" placeholder="What service are you looking for?"
                aria-label="Search">
            <button class="bg-green-500 text-white px-4 py-2 rounded-r-full">Search</button>
        </form>
        <div class="flex flex-wrap justify-center">
            <div class="w-1/2 md:w-1/4 lg:w-1/6 p-2">
                <a href="#"
                    class="block bg-white rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 p-4 text-center">
                    <div class="text-5xl text-green-500">💻</div>
                    <h5 class="font-bold mt-4">Programming</h5>
                </a>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/6 p-2">
                <a href="#"
                    class="block bg-white rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 p-4 text-center">
                    <div class="text-5xl text-green-500">🎨</div>
                    <h5 class="font-bold mt-4">Graphics</h5>
                </a>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/6 p-2">
                <a href="#"
                    class="block bg-white rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 p-4 text-center">
                    <div class="text-5xl text-green-500">📱</div>
                    <h5 class="font-bold mt-4">Digital Marketing</h5>
                </a>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/6 p-2">
                <a href="#"
                    class="block bg-white rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 p-4 text-center">
                    <div class="text-5xl text-green-500">📝</div>
                    <h5 class="font-bold mt-4">Writing </h5>
                </a>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/6 p-2">
                <a href="#"
                    class="block bg-white rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 p-4 text-center">
                    <div class="text-5xl text-green-500">🎬</div>
                    <h5 class="font-bold mt-4">Video & Animation</h5>
                </a>
            </div>
            <div class="w-1/2 md:w-1/4 lg:w-1/6 p-">
                <a href="#"
                    class="block bg-white rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 p-4 text-center">
                    <div class="text-5xl text-green-500">🤖</div>
                    <h5 class="font-bold mt-4">AI Services</h5>
                </a>
            </div>
        </div>

        <div class="container mt-20">
            <h1 class="text-left text-3xl font-bold mb-8">Popular Services</h1>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div>
                    <a href="https://example.com/website-development"
                        class="block bg-green-500 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 text-white text-center p-4">
                        <img src="img/" class="w-full h-40 object-cover rounded-t-lg" alt="Website Development">
                        <div class="p-4">
                            <h5 class="font-bold">Website Development</h5>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="/"
                        class="block bg-red-500 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 text-white text-center p-4">
                        <img src="img/foto1.webp" class="w-full h-40 object-cover rounded-t-lg" alt="Logo Design">
                        <div class="p-4">
                            <h5 class="font-bold">Logo Design</h5>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="https://example.com/seo"
                        class="block bg-green-500 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 text-white text-center p-4">
                        <img src="https://via.placeholder.com/150x100.png?text=SEO"
                            class="w-full h-40 object-cover rounded-t-lg" alt="SEO">
                        <div class="p-4">
                            <h5 class="font-bold">SEO</h5>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="https://example.com/architecture-design"
                        class="block bg-purple-500 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 text-white text-center p-4">
                        <img src="https://via.placeholder.com/150x100.png?text=Architecture+%26+Interior+Design"
                            class="w-full h-40 object-cover rounded-t-lg" alt="Architecture & Interior Design">
                        <div class="p-4">
                            <h5 class="font-bold">Architecture & Interior Design</h5>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="https://example.com/social-media-marketing"
                        class="block bg-green-500 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 text-white text-center p-4">
                        <img src="https://via.placeholder.com/150x100.png?text=Social+Media+Marketing"
                            class="w-full h-40 object-cover rounded-t-lg" alt="Social Media Marketing">
                        <div class="p-4">
                            <h5 class="font-bold">Social Media Marketing</h5>
                        </div>
                    </a>
                </div>
                <div>
                    <a href="https://example.com/voice-over"
                        class="block bg-orange-500 rounded-lg shadow-lg hover:shadow-xl transition-transform transform hover:-translate-y-2 text-white text-center p-4">
                        <img src="https://via.placeholder.com/150x100.png?text=Voice+Over"
                            class="w-full h-40 object-cover rounded-t-lg" alt="Voice Over">
                        <div class="p-4">
                            <h5 class="font-bold">Voice Over</h5>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <footer class="mt-16">
            <div class="flex justify-center space-x-4 mb-4">
                <a href="https://wa.me/6285951552789" target="_blank" class="text-gray-600 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                        <path
                            d="M 12 2 C 6.5 2 2 6.5 2 12 C 2 13.8 2.5007813 15.5 3.3007812 17 L 2 22 L 7.1992188 20.800781 C 8.6992188 21.600781 10.3 22 12 22 C 17.5 22 22 17.5 22 12 C 22 9.3 20.999609 6.8003906 19.099609 4.9003906 C 17.199609 3.0003906 14.7 2 12 2 z M 12 4 C 14.1 4 16.099219 4.8007813 17.699219 6.3007812 C 19.199219 7.9007813 20 9.9 20 12 C 20 16.4 16.4 20 12 20 C 10.7 20 9.2992188 19.7 8.1992188 19 L 7.5 18.599609 L 6.8007812 18.800781 L 4.8007812 19.300781 L 5.3007812 17.5 L 5.5 16.699219 L 5.0996094 16 C 4.3996094 14.8 4 13.4 4 12 C 4 7.6 7.6 4 12 4 z M 9.5 7.0996094 C 9.3999999 7.100196 9.3000781 7.1003906 9.1992188 7.1992188 C 9.0992188 7.3002188 8.0996406 8.2005469 8 9.1992188 C 7.8999999 10.100219 8.3996094 11.000391 8.6992188 11.5 C 8.9992188 12.1 9.4998438 12.7 10.099609 13.400391 C 11.099609 14.500391 12.099531 15 12.900391 15.199219 C 13.800391 15.399219 14.399609 15.099609 14.699219 14.900391 C 15.099219 14.700391 15.599609 14.3 15.699219 14.199219 C 15.799219 14.099219 15.899609 14 15.800781 13.800781 C 15.700781 13.600781 15.300391 13.400391 15.099609 13.300781 C 14.899609 13.200781 14.499844 13.000391 14.300781 12.900391 C 14.100781 12.800391 13.899609 12.800781 13.699219 13 C 13.499219 13.099219 13.099844 13.400391 12.900391 13.400391 C 12.700391 13.500391 12.500391 13.500781 12.300781 13.400391 C 11.900781 13.300391 11.399219 12.900391 11 12.400391 C 10.599219 11.900391 10.099609 11.100391 9.9003906 10.800781 C 9.7996094 10.500781 9.5996094 10.100219 9.8007812 9.9003906 C 9.9007812 9.8003906 10.099609 9.6003906 10.199219 9.4003906 C 10.299219 9.3003906 10.300781 9.2007812 10.300781 9.0996094 C 10.299781 8.9006094 10.200391 8.7003906 10.099609 8.5003906 C 9.8996094 8.3003906 9.5996094 7.8996094 9.5 7.6992188 C 9.5 7.5002188 9.6003906 7.0996094 9.5 7.0996094 z" />
                    </svg>
                </a>
                <a href="https://www.instagram.com/your_username" class="text-gray-600 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                        <path
                            d="M12 2.163c3.204 0 3.584.012 4.849.07 1.366.062 2.633.334 3.608 1.308.974.975 1.246 2.242 1.308 3.608.058 1.265.07 1.645.07 4.849s-.012 3.584-.07 4.849c-.062 1.366-.334 2.633-1.308 3.608-.975.974-2.242 1.246-3.608 1.308-1.265.058-1.645.07-4.849.07s-3.584-.012-4.849-.07c-1.366-.062-2.633-.334-3.608-1.308-.974-.975-1.246-2.242-1.308-3.608-.058-1.265-.07-1.645-.07-4.849s.012-3.584.07-4.849c.062-1.366.334-2.633 1.308-3.608.975-.974 2.242-1.246 3.608-1.308 1.265-.058 1.645-.07 4.849-.07m0-2.163c-3.259 0-3.667.015-4.947.073-1.6.074-3.087.354-4.253 1.521-1.166 1.166-1.447 2.653-1.521 4.253-.058 1.28-.073 1.688-.073 4.947s.015 3.667.073 4.947c.074 1.6.354 3.087 1.521 4.253 1.166 1.166 2.653 1.447 4.253 1.521 1.28.058 1.688.073 4.947.073s3.667-.015 4.947-.073c1.6-.074 3.087-.354 4.253-1.521 1.166-1.166 1.447-2.653 1.521-4.253.058-1.28.073-1.688.073-4.947s-.015-3.667-.073-4.947c-.074-1.6-.354-3.087-1.521-4.253-1.166-1.166-2.653-1.447-4.253-1.521-1.28-.058-1.688-.073-4.947-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.162 6.162 6.162 6.162-2.759 6.162-6.162-2.759-6.162-6.162-6.162zm0 10.143c-2.194 0-3.981-1.787-3.981-3.981s1.787-3.981 3.981-3.981 3.981 1.787 3.981 3.981-1.787 3.981-3.981 3.981zm6.406-11.845c-.796 0-1.441.645-1.441 1.441s.645 1.441 1.441 1.441 1.441-.645 1.441-1.441-.645-1.441-1.441-1.441z" />
                    </svg>
                </a>
                <a href="mailto:your_email@example.com" class="text-gray-600 hover:text-gray-900">
                    <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                        <path
                            d="M12 12.713l11.985-6.713-23.97 0 11.985 6.713zm11.985-7.713h-23.97c-.554 0-1.015.462-1.015 1.016v13.968c0 .554.462 1.016 1.015 1.016h23.97c.554 0 1.015-.462 1.015-1.016v-13.968c0-.554-.462-1.016-1.015-1.016zm-12.468 8.404l-11.517 6.463v-12.815l11.517 6.352zm.955.553l11.528-6.423v12.792l-11.528-6.369z" />
                    </svg>
                </a>
            </div>
            <div class="text-center text-gray-600">
                <p>&copy; 2023 <a href="#" class="text-gray-900">PON-25</a>. All rights reserved.</p>
            </div>
        </footer>
    </div>
@endsection
