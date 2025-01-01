<footer class="bg-[rgba(69,5,5,255)] text-white">
    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1 lg:grid-cols-6 gap-6">
            <div class="lg:col-span-3 flex justify-center lg:justify-start">
                <img class="w-auto h-72" src="{{ asset('images/LOGO/c94cea7f-1bf1-488f-a410-7c2ca04765c72.png') }}"
                    alt="Logo">
            </div>

            <div class="lg:col-span-3 flex flex-col space-y-8">
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <div>
                        <h2 class="text-2xl font-semibold mb-4 text-yellow-600">Content</h2>
                        <ul class="space-y-2">
                            <li><a href="{{ route('home') }}" class="text-xl hover:text-yellow-600">Home</a></li>
                            <li><a href="{{ route('menu') }}" class="text-xl hover:text-yellow-600">Menu</a></li>
                            <li><a href="{{ route('photos') }}" class="text-xl hover:text-yellow-600">Photos</a></li>
                            <li><a href="{{ route('team') }}" class="text-xl hover:text-yellow-600">Team</a></li>
                        </ul>
                    </div>

                    <div class="flex flex-col space-y-8">
                        <div>
                            <h2 class="text-2xl font-semibold mb-4 text-yellow-600">Contact Us</h2>
                            <a href="#" class="text-xl">021 11141292</a>
                        </div>
                        <div>
                            <h2 class="text-2xl font-semibold mb-4 text-yellow-600">Follow Us</h2>
                            <ul class="flex space-x-4">
                                <li><a href="#" class="text-xl hover:text-yellow-600">Instagram</a></li>
                                <li><a href="#" class="text-xl hover:text-yellow-600">Tiktok</a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div>
                    <h2 class="text-2xl font-semibold mb-4 text-yellow-600">Opening Hours</h2>
                    <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                        <div>
                            <h3 class="text-xl mb-3 font-semibold">Monday - Thursday</h3>
                            <p class="text-xl">9:00 AM - 6:00 PM</p>
                        </div>
                        <div>
                            <h3 class="text-xl mb-3 font-semibold">Friday - Sunday</h3>
                            <p class="text-xl">10:00 AM - 4:00 PM</p>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="mt-8 border-t-4 border-yellow-600 pt-4 text-center">
        <p>Copyright &copy; 2024 | The Marble Room</p>
    </div>
</footer>
