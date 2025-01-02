@extends('layouts.app')

@section('title', 'The Marble Room 2')

@section('content')
    <div class="flex flex-col">
        <div class="h-auto flex items-center justify-center text-center bg-[rgba(21,21,21,255)]">
            <h2 class="absolute text-8xl font text-white">Photos</h2>
            <img class="h-auto w-full object-contain" src="{{ asset('images/PHOTOS/Photos (Profile).jpg') }}" alt="Logo">
        </div>

        <div class="h-auto flex flex-col justify-center items-center bg-[rgba(21,21,21,255)] py-20">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-white">Restaurant</h2>
            </div>

            <div class="w-full max-w-6xl flex flex-col px-4">
                <div
                    class="mb-10 flex flex-col md:flex-row bg-[rgba(69,5,5,255)] rounded-lg overflow-hidden h-auto md:h-60">
                    <img class="w-full md:w-5/12 object-cover rounded-lg shadow-lg shadow-yellow-600"
                        src="{{ asset('images/PHOTOS/Chef_s Table.jpg') }}" alt="Chef's Table">
                    <div class="p-6 flex-1">
                        <h2 class="text-3xl text-yellow-600 font-bold mb-2">Chef's Table</h2>
                        <p class="text-white text-sm">
                            A chef's table offers an exclusive dining experience where guests sit close to the kitchen,
                            observing the chef in action. Typically set in a cozy, intimate space, the table allows diners
                            to enjoy a curated, multi-course menu crafted by the chef. The setting often includes elegant
                            decor,
                            direct interaction with the chef, and detailed explanations of each dish, making it a unique
                            blend of
                            culinary artistry and storytelling. Perfect for food enthusiasts, it transforms a meal into an
                            immersive,
                            behind-the-scenes experience.
                        </p>
                    </div>
                </div>

                <div
                    class="mb-10 flex flex-col md:flex-row bg-[rgba(69,5,5,255)] rounded-lg overflow-hidden h-auto md:h-60">
                    <img class="w-full md:w-5/12 object-cover rounded-lg shadow-lg shadow-yellow-600"
                        src="{{ asset('images/PHOTOS/Dining Room.jpg') }}" alt="Dining Room">
                    <div class="p-6 flex-1">
                        <h2 class="text-3xl text-yellow-600 font-bold mb-2">Dining Room</h2>
                        <p class="text-white text-sm">
                            A dining room is a central space designed for enjoying meals, often characterized by its
                            inviting
                            and functional atmosphere. It typically features a large dining table surrounded by comfortable
                            chairs,
                            complemented by warm lighting to create a cozy ambiance. The decor may range from classic to
                            modern,
                            with elements like artwork, centerpieces, or plants enhancing its charm. Whether used for family
                            gatherings,
                            formal dinners, or casual meals, the dining room serves as a welcoming place to connect and
                            share food.
                        </p>
                    </div>
                </div>

                <div
                    class="mb-10 flex flex-col md:flex-row bg-[rgba(69,5,5,255)] rounded-lg overflow-hidden h-auto md:h-60">
                    <img class="w-full md:w-5/12 object-cover rounded-lg shadow-lg shadow-yellow-600"
                        src="{{ asset('images/PHOTOS/VIP Room.jpg') }}" alt="VIP Room">
                    <div class="p-6 flex-1">
                        <h2 class="text-3xl text-yellow-600 font-bold mb-2">VIP Room</h2>
                        <p class="text-white text-sm">
                            A VIP room in a steak restaurant offers an exclusive and luxurious dining experience. It
                            features
                            elegant decor rich with wooden accents, plush leather seating, and a polished dining table.
                            Ambient
                            lighting, tasteful artwork, and soft music create a warm, sophisticated atmosphere. Equipped
                            with
                            personalized climate control and discreet service options, the room is perfect for intimate
                            dinners,
                            business meetings, or special celebrations.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <div class="h-auto flex flex-col justify-center items-center bg-[rgba(21,21,21,255)]">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-white">Our Menus</h2>
            </div>
            <div class="carousel-container flex justify-center items-center py-8">
                <button class="carousel-btn prev text-yellow-500 font-bold text-2xl md:px-10">&lt;</button>
                <div class="carousel flex overflow-hidden sm:w-11/12 md:w-3/4">
                    <div class="carousel-track flex transition-transform duration-300 ease-in-out">
                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Apple Ginger Twist.jpg" alt="Apple Ginger Twist"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Apple Ginger Twist</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Berry Spritz.jpg" alt="Berry Spritz"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Berry Spritz</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Black Peppercorn Sauce.jpg" alt="Black Peppercorn Sauce"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Black Peppercorn Sauce</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Bone -In Ribeye.jpg" alt="Bone-In Ribeye"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Bone-In Ribeye</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Burrata Salad.jpg" alt="Burrata Salad"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Burrata Salad</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Chamomile Mint.jpg" alt="Chamomile Mint"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Chamomile Mint</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Chimichurri.jpg" alt="Chimichurri"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Chimichurri</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Crème au Poivre.jpg" alt="Crème au Poivre"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Crème au Poivre</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/PHOTOS/OUR MENUS/Crème Brulèe.jpg" alt="Crème Brulée"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Crème Brulée</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Earl Grey.jpg" alt="Earl Grey"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Earl Grey</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Filet Mignon.jpg" alt="Filet Mignon"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Filet Mignon</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/French Onion Soup.jpg" alt="French Onion Soup"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">French Onion Soup</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Golden Char Porterhouse.jpg" alt="Golden Char Porterhouse"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Golden Char Porterhouse</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Grilled Asparagus with Garlic Butter.jpg"
                                alt="Grilled Asparagus with Garlic Butter"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Grilled Asparagus with Garlic Butter</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Jasmine Green Tea.jpg" alt="Jasmine Green Tea"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Jasmine Green Tea</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/PHOTOS/OUR MENUS/Matsusaka A5 Wagyu .jpg" alt="Matsusaka A5 Wagyu"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Matsusaka A5 Wagyu</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Midnight Marble Steak.jpg" alt="Midnight Marble Steak"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Midnight Marble Steak</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Molten Lava Cake.jpg" alt="Molten Lava Cake"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Molten Lava Cake</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/PHOTOS/OUR MENUS/New York Striploin .jpg" alt="New York Striploin"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">New York Striploin</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Orange Delight.jpg" alt="Orange Delight"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Orange Delight</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Parmesan-Crusted Brussels Sprout.jpg"
                                alt="Parmesan-Crusted Brussels Sprout"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Parmesan-Crusted Brussels Sprout</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Pineapple Bliss.jpg" alt="Pineapple Bliss"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Pineapple Bliss</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Seafood Marinara.jpg" alt="Seafood Marinara"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Seafood Marinara</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Seared Scallops.jpg" alt="Seared Scallops"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Seared Scallops</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Sparkling Water.jpg" alt="Sparkling Water"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Sparkling Water</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Still Water.jpg" alt="Still Water"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Still Water</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/The Marble Room Wagyu Burger.jpg"
                                alt="The Marble Room Wagyu Burger"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">The Marble Room Wagyu Burger</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Tiramisu.jpg" alt="Tiramisu"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Tiramisu</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Tropical Sunset.jpg" alt="Tropical Sunset"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Tropical Sunset</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Truffle Alfredo Linguine.jpg" alt="Truffle Alfredo Linguine"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Truffle Alfredo Linguine</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Truffle Mashed Potatoes.jpg" alt="Truffle Mashed Potatoes"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Truffle Mashed Potatoes</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Truffle Mushroom Cream.jpg" alt="Truffle Mushroom Cream"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Truffle Mushroom Cream</div>
                        </div>

                        <div class="card bg-red-900 text-white mx-5 rounded-lg shadow-lg overflow-hidden flex-shrink-0 hover:shadow-yellow-600"
                            style="width: 250px;">
                            <img src="images/Photos/Our Menus/Virgin Mojito.jpg" alt="Virgin Mojito"
                                class="w-full h-60 object-cover rounded-lg shadow-md shadow-yellow-600">
                            <div class="p-4 text-xl text-center font-bold">Virgin Mojito</div>
                        </div>
                    </div>
                </div>
                <button class="carousel-btn next text-yellow-500 font-bold text-2xl px-10">&gt;</button>
            </div>
        </div>

        <div class="h-auto flex flex-col justify-center items-center bg-[rgba(21,21,21,255)] py-20">
            <div class="text-center mb-12">
                <h2 class="text-4xl font-bold text-white">Location</h2>
            </div>
            <div class="px-60">
                <div
                    class="mb-10 flex flex-col md:flex-row bg-[rgba(69,5,5,255)] rounded-3xl overflow-hidden h-[500px] md:h-[400px]">
                    <div class="w-full md:w-1/2 h-1/2 md:h-full">
                        <iframe class="rounded-3xl"
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d10983.290214364673!2d106.72799371953622!3d-6.110635907036328!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6a1d5ac580a8c7%3A0x10c69e0c21904c4!2sPantai%20Indah%20Kapuk!5e0!3m2!1sid!2sid!4v1735317162023!5m2!1sid!2sid"
                            width="95%" height="100%" class="h-full w-full" style="border:0;" allowfullscreen=""
                            loading="lazy" referrerpolicy="no-referrer-when-downgrade">
                        </iframe>
                    </div>

                    <div
                        class="w-full md:w-1/2 bg-[rgba(69,5,5,255)] text-white text-right flex flex-col justify-center p-8 h-1/2 md:h-full">
                        <h3 class="text-2xl font-bold mb-4">FIND US IN PIK</h3>
                        <p class="text-md leading-relaxed mb-4">
                            Situated in the heart of Pantai Indah Kapuk (PIK), our restaurant blends luxury dining with the
                            vibrant ambiance of one of Jakarta’s most upscale neighborhoods. Surrounded by lifestyle
                            destinations and waterfront views, it’s the perfect setting for any occasion.
                        </p>
                        <button class="text-yellow-600 border-2 border-yellow-600">
                            Get Direction
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script>
        const prevBtn = document.querySelector('.prev');
        const nextBtn = document.querySelector('.next');
        const carouselTrack = document.querySelector('.carousel-track');
        const cards = document.querySelectorAll('.card');

        let currentIndex = 0;

        const cardStyle = getComputedStyle(cards[0]);
        const cardWidth = cards[0].offsetWidth + parseFloat(cardStyle.marginRight) + parseFloat(cardStyle.marginLeft);

        const cardsPerView = Math.floor(document.querySelector('.carousel-container').offsetWidth / cardWidth);
        const maxIndex = cards.length - cardsPerView;

        function updateCarousel() {
            const maxOffset = maxIndex * cardWidth;
            const currentOffset = currentIndex * cardWidth;
            carouselTrack.style.transform = `translateX(${-Math.min(currentOffset, maxOffset)}px)`;
        }

        prevBtn.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateCarousel();
            }
        });

        nextBtn.addEventListener('click', () => {
            if (currentIndex < maxIndex) {
                currentIndex++;
                updateCarousel();
            }
        });
    </script>
@endsection
