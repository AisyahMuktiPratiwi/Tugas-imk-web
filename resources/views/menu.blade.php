@extends('layouts.app')

@section('title', 'The Marble Room 2')

@section('content')
    <div class="flex flex-col">
        <div class="h-auto flex items-center justify-center text-center bg-[rgba(21,21,21,255)]">
            <h2 class="absolute text-8xl font text-white z-10">The Menu</h2>
            <img class="h-auto w-full object-contain" src="{{ asset('images/MENUS/Menus (Profile).jpg') }}" alt="Logo">
        </div>

        {{-- section 1 --}}
        <div class="h-auto flex justify-center bg-[rgba(21,21,21,255)]">
            <div class="w-full flex flex-col mt-20">
                <div class="w-full border-t border-b border-yellow-600 py-2 text-white text-center text-4xl font-bold">
                    <h2>Appetizers</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 w-full">
                    <div class="lg:col-span-1 flex justify-start h-full">
                        <img class="w-full object-cover border-r border-yellow-600"
                            src="{{ asset('images/Logo/c94cea7f-1bf1-488f-a410-7c2ca04765c73.jpg') }}" alt="Logo">
                    </div>
                    <div class="lg:col-span-1 flex flex-col px-8 py-10 justify-center">
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Seared Scallops</h2>
                                <p class="text-xl text-yellow-600">120</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">150 kcal</p>
                            <p class="text-xl text-white px-10 pr-40">
                                Fresh scallops with lemon butter sauce
                            </p>
                        </div>

                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Burrata Salad</h2>
                                <p class="text-xl text-yellow-600">110</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">280 kcal</p>
                            <p class="text-xl text-white px-10 pr-40">
                                Creamy burrata with heirloom tomatoes and balsamic glaze
                            </p>
                        </div>

                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">French Onion Soup</h2>
                                <p class="text-xl text-yellow-600">90</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">200 kcal</p>
                            <p class="text-xl text-white px-10 pr-40">
                                A classic with caramelized onions and melted gruyere
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- section 2 --}}
        <div class="h-auto flex justify-center bg-[rgba(21,21,21,255)]">
            <div class="w-full flex flex-col">
                <div class="w-full border-t border-b border-yellow-600 py-2 text-white text-center text-4xl font-bold">
                    <h2>The Marble's Signature</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 w-full">
                    <div class="lg:col-span-1 flex justify-start h-full">
                        <img class="w-full object-cover border-r border-yellow-600"
                            src="{{ asset('images/Logo/c94cea7f-1bf1-488f-a410-7c2ca04765c73.jpg') }}" alt="Logo">
                    </div>
                    <div class="lg:col-span-1 flex flex-col px-8 py-10 justify-center">
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Midnight Marble Steak</h2>
                                <p class="text-xl text-yellow-600">350</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">1500 kcal / 900gr</p>
                            <p class="text-xl text-white px-10 pr-40"> Premium beef steak, tender and juicy with rich smoky
                                flavor, finished with garlic butter and fresh herbs </p>
                        </div>

                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Golden Char Porterhouse</h2>
                                <p class="text-xl text-yellow-600">400</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">1300 kcal / 850gr</p>
                            <p class="text-xl text-white px-10 pr-40"> A premium cut combining tender filet mignon and
                                flavorful strip steak, char-grilled to perfection with a golden crust, served with zesty
                                peppercorn sauce </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- section 3 --}}
        <div class="h-auto flex justify-center bg-[rgba(21,21,21,255)]">
            <div class="w-full flex flex-col">
                <div class="w-full border-t border-b border-yellow-600 py-2 text-white text-center text-4xl font-bold">
                    <h2>Luxury Selections</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 w-full">
                    <div class="lg:col-span-1 flex justify-start h-full">
                        <img class="w-full object-cover border-r border-yellow-600"
                            src="{{ asset('images/Logo/c94cea7f-1bf1-488f-a410-7c2ca04765c73.jpg') }}" alt="Logo">
                    </div>
                    <div class="lg:col-span-1 flex flex-col px-8 py-10 justify-center">
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Midnight Marble Steak</h2>
                                <p class="text-xl text-yellow-600">350</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">1500 kcal / 900gr</p>
                            <p class="text-xl text-white px-10 pr-40"> Premium beef steak, tender and juicy with rich smoky
                                flavor, finished with garlic butter and fresh herbs </p>
                        </div>

                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Golden Char Porterhouse</h2>
                                <p class="text-xl text-yellow-600">400</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">1300 kcal / 850gr</p>
                            <p class="text-xl text-white px-10 pr-40"> A premium cut combining tender filet mignon and
                                flavorful strip steak, char-grilled to perfection with a golden crust, served with zesty
                                peppercorn sauce </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- section 4 --}}
        <div class="h-auto flex justify-center bg-[rgba(21,21,21,255)]">
            <div class="w-full flex flex-col">
                <div class="w-full border-t border-b border-yellow-600 py-2 text-white text-center text-4xl font-bold">
                    <h2>Classic Selections</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 w-full">
                    <div class="lg:col-span-1 flex justify-start h-full">
                        <img class="w-full object-cover border-r border-yellow-600"
                            src="{{ asset('images/Logo/c94cea7f-1bf1-488f-a410-7c2ca04765c73.jpg') }}" alt="Logo">
                    </div>
                    <div class="lg:col-span-1 flex flex-col px-8 py-10 justify-center">
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">New York Striploin</h2>
                                <p class="text-xl text-yellow-600">350</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">650 kcal / 100 gr</p>
                            <p class="text-xl text-white px-10 pr-40"> A tender and flavorful cut with a perfect balance of
                                marbling and lean meat, delivering a rich, beefy taste. Ideal for steak lovers who prefer a
                                classic, bold flavor. </p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Filet Mignon</h2>
                                <p class="text-xl text-yellow-600">360</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">700 kcal / 200 gr</p>
                            <p class="text-xl text-white px-10 pr-40"> A tender, lean cut of beef grilled to your desired
                                doneness, served with truffle mashed potatoes and red wine jus for a refined classic flavor.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- section 5 --}}
        <div class="h-auto flex justify-center bg-[rgba(21,21,21,255)]">
            <div class="w-full flex flex-col">
                <div class="w-full border-t border-b border-yellow-600 py-2 text-white text-center text-4xl font-bold">
                    <h2>Side Dishes</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 w-full">
                    <div class="lg:col-span-1 flex justify-start h-full">
                        <img class="w-full object-cover border-r border-yellow-600"
                            src="{{ asset('images/Logo/c94cea7f-1bf1-488f-a410-7c2ca04765c73.jpg') }}" alt="Logo">
                    </div>
                    <div class="lg:col-span-1 flex flex-col px-8 py-10 justify-center">
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Truffle Mashed Potatoes</h2>
                                <p class="text-xl text-yellow-600">80</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">180 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> Creamy mashed potatoes infused with aromatic truffle
                                oil, topped with freshly shaved black truffle for an indulgent and flavorful side dish. </p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Grilled Asparagus with Garlic Butter</h2>
                                <p class="text-xl text-yellow-600">75</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">120 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> Tender grilled asparagus drizzled with rich garlic
                                butter, offering a perfect balance of flavor and elegance. </p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Parmesan-Crusted Brussels Sprout</h2>
                                <p class="text-xl text-yellow-600">75</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">160 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> Crispy roasted Brussels sprouts coated with golden
                                Parmesan crust, delivering a savory and satisfying side dish. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- section 6 --}}
        <div class="h-auto flex justify-center bg-[rgba(21,21,21,255)]">
            <div class="w-full flex flex-col">
                <div class="w-full border-t border-b border-yellow-600 py-2 text-white text-center text-4xl">
                    <h2 class="font-bold">Sauces</h2>
                    <p class="text-gray-400 text-lg font">(Served with every steak, choose one)</p>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 w-full">
                    <div class="lg:col-span-1 flex justify-start h-full">
                        <img class="w-full object-cover border-r border-yellow-600"
                            src="{{ asset('images/Logo/c94cea7f-1bf1-488f-a410-7c2ca04765c73.jpg') }}" alt="Logo">
                    </div>
                    <div class="lg:col-span-1 flex flex-col px-8 py-10 justify-center">
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Black Peppercorn Sauce</h2>
                                <p class="text-xl text-yellow-600">50</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">80 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> A classic sauce with a bold black pepper flavor,
                                perfect for adding a kick to your steak. </p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Truffle Mushroom Cream</h2>
                                <p class="text-xl text-yellow-600">50</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">100 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> Rich and creamy sauce infused with truffle and
                                mushrooms, providing a luxurious flavor profile. </p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Chimichurri</h2>
                                <p class="text-xl text-yellow-600">50</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">70 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> A zesty, herb-based sauce with a hint of garlic and
                                vinegar, perfect for enhancing the natural flavors of your steak. </p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Crème au Poivre</h2>
                                <p class="text-xl text-yellow-600">50</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">70 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> A creamy peppercorn sauce with a smooth texture and
                                subtle heat, ideal for complementing any steak. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- section 7 --}}
        <div class="h-auto flex justify-center bg-[rgba(21,21,21,255)]">
            <div class="w-full flex flex-col">
                <div class="w-full border-t border-b border-yellow-600 py-2 text-white text-center text-4xl font-bold">
                    <h2>Main Courses</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 w-full">
                    <div class="lg:col-span-1 flex justify-start h-full">
                        <img class="w-full object-cover border-r border-yellow-600"
                            src="{{ asset('images/Logo/c94cea7f-1bf1-488f-a410-7c2ca04765c73.jpg') }}" alt="Logo">
                    </div>
                    <div class="lg:col-span-1 flex flex-col px-8 py-10 justify-center">
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">The Marble Room Wagyu Burger</h2>
                                <p class="text-xl text-yellow-600">250</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">800 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> Wagyu patty, truffle aioli, smoked cheddar, and
                                caramelized onions </p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Truffle Alfredo Linguine</h2>
                                <p class="text-xl text-yellow-600">180</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">650 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> Creamy truffle sauce with Parmesan and mushrooms
                            </p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Seafood Marinara</h2>
                                <p class="text-xl text-yellow-600">200</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">550 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> Prawns, mussels, and calamari in rich tomato sauce
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- section 8 --}}
        <div class="h-auto flex justify-center bg-[rgba(21,21,21,255)]">
            <div class="w-full flex flex-col">
                <div class="w-full border-t border-b border-yellow-600 py-2 text-white text-center text-4xl font-bold">
                    <h2>Desserts</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 w-full">
                    <div class="lg:col-span-1 flex justify-start h-full">
                        <img class="w-full object-cover border-r border-yellow-600"
                            src="{{ asset('images/Logo/c94cea7f-1bf1-488f-a410-7c2ca04765c73.jpg') }}" alt="Logo">
                    </div>
                    <div class="lg:col-span-1 flex flex-col px-8 py-10 justify-center">
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Molten Lava Cake</h2>
                                <p class="text-xl text-yellow-600">95</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">360 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> Warm chocolate cake with a gooey center, served with
                                vanilla ice cream </p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Crème Brulèe</h2>
                                <p class="text-xl text-yellow-600">90</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">280 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> Classic French dessert with caramelized sugar crust
                            </p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Tiramisu</h2>
                                <p class="text-xl text-yellow-600">85</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">550 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> Coffee-flavored Italian dessert with mascarpone and
                                cocoa </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- section 9 --}}
        <div class="h-auto flex justify-center bg-[rgba(21,21,21,255)]">
            <div class="w-full flex flex-col">
                <div class="w-full border-t border-b border-yellow-600 py-2 text-white text-center text-4xl font-bold">
                    <h2>Beverages</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 w-full">
                    <div class="lg:col-span-1 flex justify-start h-full">
                        <img class="w-full object-cover border-r border-yellow-600"
                            src="{{ asset('images/Logo/c94cea7f-1bf1-488f-a410-7c2ca04765c73.jpg') }}" alt="Logo">
                    </div>
                    <div class="lg:col-span-1 flex flex-col px-8 py-10 justify-center">
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Sparkling water</h2>
                                <p class="text-xl text-yellow-600">90</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">0 kcal</p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Still Water</h2>
                                <p class="text-xl text-yellow-600">70</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">0 kcal</p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Orange Delight</h2>
                                <p class="text-xl text-yellow-600">50</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">110 kcal</p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Pineapple Bliss</h2>
                                <p class="text-xl text-yellow-600">50</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">130 kcal</p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Apple Ginger Twist</h2>
                                <p class="text-xl text-yellow-600">55</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">120 kcal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- section 10 --}}
        <div class="h-auto flex justify-center bg-[rgba(21,21,21,255)]">
            <div class="w-full flex flex-col">
                <div class="w-full border-t border-b border-yellow-600 py-2 text-white text-center text-4xl font-bold">
                    <h2>Premium Teas</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 w-full">
                    <div class="lg:col-span-1 flex justify-start h-full">
                        <img class="w-full object-cover border-r border-yellow-600"
                            src="{{ asset('images/Logo/c94cea7f-1bf1-488f-a410-7c2ca04765c73.jpg') }}" alt="Logo">
                    </div>
                    <div class="lg:col-span-1 flex flex-col px-8 py-10 justify-center">
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Earl Grey</h2>
                                <p class="text-xl text-yellow-600">45</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">2 kcal</p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Jasmine Green Tea</h2>
                                <p class="text-xl text-yellow-600">45</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">0 kcal</p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Chamomile Mint</h2>
                                <p class="text-xl text-yellow-600">45</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">1 kcal</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        {{-- section 11 --}}
        <div class="h-auto flex justify-center border-b border-yellow-600 bg-[rgba(21,21,21,255)]">
            <div class="w-full flex flex-col">
                <div class="w-full border-t border-b border-yellow-600 py-2 text-white text-center text-4xl font-bold">
                    <h2>Moctails</h2>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-0 w-full">
                    <div class="lg:col-span-1 flex justify-start h-full">
                        <img class="w-full object-cover border-r border-yellow-600"
                            src="{{ asset('images/Logo/c94cea7f-1bf1-488f-a410-7c2ca04765c73.jpg') }}" alt="Logo">
                    </div>
                    <div class="lg:col-span-1 flex flex-col px-8 py-10 justify-center">
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Virgin Mojito</h2>
                                <p class="text-xl text-yellow-600">70</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">90 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> Mint, lime, and soda </p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Berry Spritz</h2>
                                <p class="text-xl text-yellow-600">75</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">150 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> Mixed berries and sparkling lemonade </p>
                        </div>
                        <div class="mb-10">
                            <div class="flex justify-between items-center">
                                <h2 class="text-4xl text-white font-bold">Tropical Sunset</h2>
                                <p class="text-xl text-yellow-600">75</p>
                            </div>
                            <p class="text-xl text-yellow-600 px-10">140 kcal</p>
                            <p class="text-xl text-white px-10 pr-40"> Mango, passionfruit, and coconut water </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
