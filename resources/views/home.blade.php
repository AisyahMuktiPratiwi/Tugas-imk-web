@extends('layouts.app')

@section('title', 'The Marble Room 2')

@section('content')
    <div class="flex flex-col">

        <div class="h-auto bg-[rgba(21,21,21,255)] flex items-center justify-center text-white">
            <div class="mb-10 grid grid-cols-1 lg:grid-cols-2 gap-10 items-center">
                <div
                    class="lg:col-span-1 flex justify-center lg:justify-end h-full shadow-[10px_2px_40px_rgba(255,0,0,0.5)]">
                    <img class="h-full w-auto object-contain" src="{{ asset('images/Home/Home (Profile)2.jpg') }}"
                        alt="Logo">
                </div>
                <div class="lg:col-span-1 flex flex-col justify-center items-center text-center space-y-4 px-6">
                    <h2 class="text-4xl font-bold">The Marble Room</h2>
                    <p class="text-2xl px-20">
                        Welcome to The Marble Room, where premium quality and exceptional dining come together. Our
                        steakhouse is designed to provide a luxurious yet warm ambiance, perfect for both intimate dinners
                        and special celebrations. Whether you're a steak connoisseur or simply seeking an extraordinary
                        dining experience, The Marble Room promises to deliver the finest flavors and impeccable service.
                    </p>
                </div>
            </div>
        </div>

        <div
            class="h-auto p-10 sm:p-6 md:p-16 bg-[rgba(21,21,21,255)] flex items-center justify-center text-white font-bold text-2xl sm:text-3xl md:text-4xl">
            <div>
                <div class="text-center mb-10 sm:mb-10 md:mb-12">
                    <h2 class="text-3xl sm:text-4xl md:text-5xl font-bold text-white">Our Signature</h2>
                </div>

                <div class="grid grid-cols-1 gap-y-8 px-4 sm:px-6 md:px-10 lg:px-20">
                    <div class="flex flex-col md:flex-row items-start space-y-0 md:space-y-0 md:space-x-0">
                        <div class="flex-shrink-0 shadow-[0_4px_10px_rgba(255,0,0,0.5)]">
                            <img class="w-48 h-60 sm:w-56 sm:h-64 md:w-64 md:h-72 object-cover rounded-lg"
                                src="{{ asset('images/Home/Midnight Marble Steak.jpg') }}" alt="Midnight Marble Steak">
                        </div>
                        <div class="bg-[rgba(69,5,5,255)] rounded-l-none rounded-3xl p-4 sm:p-5 md:p-6">
                            <h3 class="text-xl sm:text-2xl md:text-3xl font-bold mb-3 sm:mb-4">Midnight Marble Steak</h3>
                            <p class="text-sm sm:text-base md:text-lg leading-relaxed">
                                A luxurious cut of premium beef, perfectly marbled for a tender and juicy bite.
                                Grilled to perfection over an open flame, this steak boasts a rich, smoky flavor
                                complemented by a hint of garlic butter and fresh herbs.
                            </p>
                        </div>
                    </div>

                    <div class="flex flex-col md:flex-row items-end mt-0 lg:-mt-12 space-y-0 md:space-y-0 md:space-x-0">
                        <div class="bg-[rgba(69,5,5,255)] rounded-r-none rounded-3xl p-4 sm:p-5 md:p-6">
                            <h3 class="text-xl sm:text-2xl md:text-3xl font-bold mb-3 sm:mb-4">Golden Char Porterhouse</h3>
                            <p class="text-sm sm:text-base md:text-lg leading-relaxed text-right">
                                An exquisite fusion of tenderness and bold flavor, the Golden Char Porterhouse
                                offers the best of both worlds—succulent filet mignon and flavorful strip steak.
                                Expertly char-grilled for a golden crust, this premium cut is seasoned to perfection
                                and paired with a zesty peppercorn sauce.
                            </p>
                        </div>
                        <div class="flex-shrink-0 shadow-[0_4px_10px_rgba(255,0,0,0.5)]">
                            <img class="w-48 h-60 sm:w-56 sm:h-64 md:w-64 md:h-72 object-cover rounded-lg"
                                src="{{ asset('images/Home/Golden Char Porterhouse.jpg') }}" alt="Golden Char Porterhouse">
                        </div>
                    </div>
                </div>
            </div>
        </div>


        <div class="h-auto bg-[rgba(21,21,21,255)] flex items-center justify-center text-white py-20 ">
            <div class="grid grid-cols-1 md:grid-cols-1 gap-y-0 px-6 lg:px-60">
                <div class="text-center mb-10">
                    <h2 class="text-4xl font-bold text-white">Our Customers Say</h2>
                </div>
                <div class="bg-[rgba(69,5,5,255)] p-10">
                    <h3 class="text-left text-6xl font-bold mx-10 -mb-20">‘’</h3>
                    <p class="text-lg text-center p-10">
                        Absolutely amazing! The food was exquisite, bursting with flavor, and beautifully presented. The
                        atmosphere was warm and inviting, and the staff were incredibly attentive and friendly. Every detail
                        was
                        perfect, from the ambiance to the service. This restaurant truly exceeded my expectations. Highly
                        recommended can’t wait to come back!
                    </p>
                    <h3 class="text-[#E1A140] text-center text-3xl font-bold">Narel</h3>
                </div>
            </div>
        </div>
    </div>

    <div class="h-auto bg-[rgba(21,21,21,255)] flex flex-col items-center justify-center text-white py-20">
        <div class="text-center mb-12">
            <h2 class="text-4xl font-bold text-white">Our Places</h2>
        </div>

        <div class="flex flex-wrap md:flex-nowrap bg-black shadow-lg rounded-3xl overflow-hidden w-5/6 lg:w-2/4">
            <div class="flex-shrink-0 w-1/2 md:w-1/3">
                <img class="w-full h-full object-cover rounded-l-3xl" src="{{ asset('images/Home/Home (Our Places).jpg') }}"
                    alt="Home (Our Places)">
            </div>
            <div class="bg-[rgba(69,5,5,255)] text-white flex flex-col justify-center p-8 w-1/2 md:w-2/3">
                <h3 class="text-2xl font-bold mb-4">The Marble Room PIK</h3>
                <p class="text-sm leading-relaxed mb-4">
                    Rukan Garden House Blok B No 28, Pantai Indah Kapuk, Jakarta Utara
                </p>
                <button class="text-yellow-600 border-2 border-yellow-600">
                    DETAILS
                </button>
            </div>
        </div>
    </div>

@endsection
