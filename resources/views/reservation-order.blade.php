@extends('layouts.app2')

@section('title', 'The Marble Room 2 | Reservation Order')

@section('content')
    <div class="flex flex-col h-screen p-5">
        <div class="flex justify-between items-center">
            <h2 class="text-xl font-bold">Order Summary</h2>
            <a href="{{ route('home') }}" class="flex items-center border-b border-yellow-600">
                Cancel Reservation
                <span class="ml-2 text-xl font-bold">X</span>
            </a>
        </div>
        <div class="flex h-screen">
            <div class="w-1/4 bg-black border border-yellow-600 flex flex-col">
                <img src="images/LOGO/c94cea7f-1bf1-488f-a410-7c2ca04765c72.png" alt="Logo"
                    class="w-max h-auto mb-4 border-b border-yellow-600">
                <div class="flex-1 p-5">
                    <h3 class="text-lg font-bold mb-2 text-center">Reservation Information</h3>
                    <ul class="space-y-2 text-gray-500">
                        <li><strong>Date:</strong> <span id="order-date" class="text-white">-</span></li>
                        <li><strong>Area:</strong> <span id="order-area" class="text-white">-</span></li>
                        <li><strong>Total Guest:</strong> <span id="order-guest-count" class="text-white">-</span></li>
                    </ul>
                    <hr class="my-4 border-gray-700">
                    <h3 class="text-lg font-bold mb-2 text-center">Customer Information</h3>
                    <ul class="space-y-2 text-gray-500">
                        <li><strong>Name:</strong> <span id="order-name" class="text-white">-</span></li>
                        <li><strong>Phone Number:</strong> <span id="order-phone" class="text-white">-</span></li>
                        <li><strong>Email:</strong> <span id="order-email" class="text-white">-</span></li>
                        <li><strong>Occasion:</strong> <span id="order-occasion" class="text-white">-</span></li>
                        <li><strong>Special Request:</strong> <span id="order-request" class="text-white">-</span></li>
                    </ul>
                </div>
            </div>

            <div class="w-4/5 px-10">
                {{-- Reservation Information --}}
                <div id="reservation-section" class="section">
                    <div class="mb-8">
                        <h1 class="text-2xl font-bold mb-4">Complete Reservation Information</h1>
                    </div>
                    <div class="mb-4">
                        <label for="date" class="block text-lg font-bold mb-2">Date</label>
                        <input type="date" id="date"
                            class="bg-gray-900 text-white border border-gray-700 rounded w-full p-2">
                    </div>
                    <div class="mb-6">
                        <h2 class="text-lg font-bold mb-2">Time</h2>
                        <div class="flex space-x-4">
                            <button id="lunch-time"
                                class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-yellow-600 focus:bg-yellow-600">
                                Lunch <br> 11:00 - 14:00
                            </button>
                            <button id="dinner-time"
                                class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-yellow-600 focus:bg-yellow-600">
                                1st Dinner <br> 17:00 - 20:00
                            </button>
                            <button id="second-dinner-time"
                                class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-yellow-600 focus:bg-yellow-600">
                                2nd Dinner <br> 20:00 - 22:00
                            </button>
                        </div>
                    </div>
                    <div>
                        <h2 class="text-lg font-bold mb-2">Area</h2>
                        <div class="grid grid-cols-4 gap-4">
                            <!-- Card 1 -->
                            <label for="area-chefs-table" class="cursor-pointer">
                                <input type="radio" id="area-chefs-table" name="area" value="chefs-table"
                                    class="hidden peer" />
                                <div class="relative bg-cover bg-center rounded overflow-hidden border border-gray-700 peer-checked:border-yellow-600 h-40"
                                    style="background-image: url('images/PHOTOS/Chef_s Table.jpg');">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-80 flex flex-col justify-between p-4 text-yellow-600 peer-checked:text-yellow-400">
                                        <div>
                                            <h3 class="text-xl font-bold text-white">Chef's Table</h3>
                                            <p class="text-sm">Exclusive table with a personalized experience from the chef.
                                            </p>
                                        </div>
                                        <p class="font-bold mt-2">IDR 500,000.00</p>
                                    </div>
                                </div>
                            </label>

                            <!-- Card 2 -->
                            <label for="area-dining-room" class="cursor-pointer">
                                <input type="radio" id="area-dining-room" name="area" value="dining-room"
                                    class="hidden peer" />
                                <div class="relative bg-cover bg-center rounded overflow-hidden border border-gray-700 peer-checked:border-yellow-600 h-40"
                                    style="background-image: url('images/PHOTOS/Dining Room.jpg');">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-80 flex flex-col justify-between p-4 text-yellow-600 peer-checked:text-yellow-400">
                                        <div>
                                            <h3 class="text-xl font-bold text-white">Dining Room</h3>
                                            <p class="text-sm">Non-smoking main dining area.</p>
                                        </div>
                                        <p class="font-bold mt-2">IDR 1,000,000.00</p>
                                    </div>
                                </div>
                            </label>

                            <!-- Card 3 -->
                            <label for="area-alfresco" class="cursor-pointer">
                                <input type="radio" id="area-alfresco" name="area" value="alfresco"
                                    class="hidden peer" />
                                <div class="relative bg-cover bg-center rounded overflow-hidden border border-gray-700 peer-checked:border-yellow-600 h-40"
                                    style="background-image: url('images/PHOTOS/Alfresco Area.jpg');">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-80 flex flex-col justify-between p-4 text-yellow-600 peer-checked:text-yellow-400">
                                        <div>
                                            <h3 class="text-xl font-bold text-white">Alfresco Area</h3>
                                            <p class="text-sm">City-view smoking area with air conditioning.</p>
                                        </div>
                                        <p class="font-bold mt-2">IDR 800,000.00</p>
                                    </div>
                                </div>
                            </label>

                            <!-- Card 4 -->
                            <label for="area-vip-room" class="cursor-pointer">
                                <input type="radio" id="area-vip-room" name="area" value="vip-room"
                                    class="hidden peer" />
                                <div class="relative bg-cover bg-center rounded overflow-hidden border border-gray-700 peer-checked:border-yellow-600 h-40"
                                    style="background-image: url('images/PHOTOS/VIP Room.jpg');">
                                    <div
                                        class="absolute inset-0 bg-black bg-opacity-80 flex flex-col justify-between p-4 text-yellow-600 peer-checked:text-yellow-400">
                                        <div>
                                            <h3 class="text-xl font-bold text-white">VIP</h3>
                                            <p class="text-sm">Private dining room.</p>
                                        </div>
                                        <p class="font-bold mt-2">IDR 2,000,000.00</p>
                                    </div>
                                </div>
                            </label>
                        </div>
                    </div>
                    <div class="mt-5">
                        <h2 class="text-lg font-bold mb-2">Total Guest</h2>
                        <div class="flex items-center space-x-4">
                            <button id="decreaseButton"
                                class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-yellow-600">-</button>
                            <input type="number" id="guestCount" value="1" min="1" max="15"
                                class="w-16 text-center bg-gray-900 text-white border border-gray-700 rounded">
                            <button id="increaseButton"
                                class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-yellow-600">+</button>
                        </div>
                        <p class="text-sm text-gray-500 mt-2">Maximum capacity for 15 persons</p>
                    </div>
                </div>

                {{-- Customer Information Section --}}
                <div id="customer-section" class="section hidden">
                    <div class="mb-8">
                        <h1 class="text-2xl font-bold mb-4">Complete Reservation Information</h1>
                    </div>
                    <div class="bg-black text-white rounded-md">
                        <div class="grid grid-cols-2 gap-4">
                            <div>
                                <label for="name" class="block text-gray-400 mb-1">Name</label>
                                <input type="text" id="name" placeholder="Input your name"
                                    class="w-full bg-gray-700 text-white border border-gray-600 rounded px-3 py-2 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-600">
                            </div>
                            <div>
                                <label for="phone" class="block text-gray-400 mb-1">Phone Number</label>
                                <input type="text" id="phone" placeholder="+62"
                                    class="w-full bg-gray-700 text-white border border-gray-600 rounded px-3 py-2 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-600">
                            </div>

                            <div>
                                <label for="email" class="block text-gray-400 mb-1">Email</label>
                                <input type="email" id="email" placeholder="Input your email"
                                    class="w-full bg-gray-700 text-white border border-gray-600 rounded px-3 py-2 placeholder-gray-400 focus:outline-none focus:ring-2 focus:ring-yellow-600">
                            </div>

                            <div>
                                <label for="occasion" class="block text-gray-400 mb-1">Occasion</label>
                                <select id="occasion"
                                    class="w-full bg-gray-700 text-white border border-gray-600 rounded px-3 py-2 focus:outline-none focus:ring-2 focus:ring-yellow-600">
                                    <option value="" disabled selected>Select</option>
                                    <option value="Lunch">Lunch</option>
                                    <option value="Dinner">Dinner</option>
                                    <option value="Birthday">Birthday</option>
                                    <option value="Anniversary">Anniversary</option>
                                    <option value="Other">Other</option>
                                </select>
                            </div>
                        </div>

                        <div class="mt-4">
                            <label for="request" class="block text-yellow-600 mb-1">Special Request</label>
                            <textarea id="request" placeholder="Write down your request"
                                class="w-full bg-black text-yellow-600 border border-gray-600 rounded px-3 py-2 h-24 placeholder-yellow-500 focus:outline-none focus:ring-2 focus:ring-yellow-600"></textarea>
                        </div>
                    </div>
                </div>

                {{-- Payment Method Section --}}
                <div id="payment-section" class="section hidden">
                    <div class="mb-8">
                        <h1 class="text-2xl font-bold mb-4">Complete Payment</h1>
                    </div>

                    <div class="flex gap-4 mb-6">
                        <button id="eWalletButton"
                            class="flex-1 text-yellow-600 border-2 border-yellow-600 font-bold px-6 py-2 h-12 hover:bg-yellow-600 hover:text-white transition">
                            E-Wallet
                        </button>
                        <button id="atmButton"
                            class="flex-1 text-yellow-600 border-2 border-yellow-600 font-bold px-6 py-2 h-12 hover:bg-yellow-600 hover:text-white transition">
                            ATM/Bank Transfer
                        </button>
                    </div>

                    <div id="payment-options">
                        <div id="e-wallet-options"
                            class="hidden grid grid-cols-2 gap-4 justify-items-center items-center">
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-option" value="ShopeePay"
                                    data-image="images/LOGO/spay-logo.jpg" class="hidden peer">
                                <div
                                    class="w-80 h-44 rounded-3xl border-2 border-transparent peer-checked:border-yellow-600 peer-checked:shadow-yellow-600 peer-checked:shadow-lg">
                                    <img class="w-full h-full rounded-3xl" src="images/LOGO/spay-logo.jpg"
                                        alt="ShopeePay">
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-option" value="GoPay"
                                    data-image="images/LOGO/gopay-logo.jpg" class="hidden peer">
                                <div
                                    class="w-80 h-44 rounded-3xl border-2 border-transparent peer-checked:border-yellow-600 peer-checked:shadow-yellow-600 peer-checked:shadow-lg">
                                    <img class="w-full h-full rounded-3xl" src="images/LOGO/gopay-logo.jpg"
                                        alt="GoPay">
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-option" value="Dana"
                                    data-image="images/LOGO/dana-logo.jpg" class="hidden peer">
                                <div
                                    class="w-80 h-44 rounded-3xl border-2 border-transparent peer-checked:border-yellow-600 peer-checked:shadow-yellow-600 peer-checked:shadow-lg">
                                    <img class="w-full h-full rounded-3xl" src="images/LOGO/dana-logo.jpg"
                                        alt="Dana">
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-option" value="Ovo"
                                    data-image="images/LOGO/ovo-logo.jpg" class="hidden peer">
                                <div
                                    class="w-80 h-44 rounded-3xl border-2 border-transparent peer-checked:border-yellow-600 peer-checked:shadow-yellow-600 peer-checked:shadow-lg">
                                    <img class="w-full h-full rounded-3xl" src="images/LOGO/ovo-logo.jpg" alt="Ovo">
                                </div>
                            </label>
                        </div>

                        <div id="bank-options" class="hidden grid grid-cols-2 gap-4 justify-items-center items-center">
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-option" value="BCA"
                                    data-image="images/LOGO/bca-logo.jpg" class="hidden peer">
                                <div
                                    class="w-80 h-44 rounded-3xl border-2 border-transparent peer-checked:border-yellow-600 peer-checked:shadow-yellow-600 peer-checked:shadow-lg">
                                    <img class="w-full h-full rounded-3xl" src="images/LOGO/bca-logo.jpg" alt="BCA">
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-option" value="BNI"
                                    data-image="images/LOGO/bni-logo.jpg" class="hidden peer">
                                <div
                                    class="w-80 h-44 rounded-3xl border-2 border-transparent peer-checked:border-yellow-600 peer-checked:shadow-yellow-600 peer-checked:shadow-lg">
                                    <img class="w-full h-full rounded-3xl" src="images/LOGO/bni-logo.jpg" alt="BNI">
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-option" value="BRI"
                                    data-image="images/LOGO/bri-logo.jpg" class="hidden peer">
                                <div
                                    class="w-80 h-44 rounded-3xl border-2 border-transparent peer-checked:border-yellow-600 peer-checked:shadow-yellow-600 peer-checked:shadow-lg">
                                    <img class="w-full h-full rounded-3xl" src="images/LOGO/bri-logo.jpg" alt="BRI">
                                </div>
                            </label>
                            <label class="cursor-pointer">
                                <input type="radio" name="payment-option" value="Mandiri"
                                    data-image="images/LOGO/mandiri-logo.jpg" class="hidden peer">
                                <div
                                    class="w-80 h-44 rounded-3xl border-2 border-transparent peer-checked:border-yellow-600 peer-checked:shadow-yellow-600 peer-checked:shadow-lg">
                                    <img class="w-full h-full rounded-3xl" src="images/LOGO/mandiri-logo.jpg"
                                        alt="Mandiri">
                                </div>
                            </label>
                        </div>
                    </div>
                </div>

                {{-- Payment Detail Section --}}
                <div id="payment-detail-section" class="section hidden">
                    <div class="mb-8">
                        <h1 class="text-2xl font-bold mb-1">Your Reservation Has Been Successfully Placed</h1>
                        <p>Please proceed with the payment by following the instruction below</p>
                    </div>
                    <!-- Payment Details -->
                    <img id="selected-image" class="w-40 h-20 rounded-3xl mb-4" src="" alt="">
                    <div class="mt-6 p-4 border-2 border-yellow-600 rounded-lg">
                        <h2 class="text-xl font-bold mb-2" id="selected-option"></h2>
                        <p class="text-yellow-600">Invoice Number: <strong>INV123456789</strong></p>
                        <p class="text-yellow-600">Virtual Account Number: <strong>12345678901234</strong></p>
                        <p class="text-yellow-600">Complete Payment Before: <strong>23-12-2024</strong></p>
                        <p class="text-yellow-600">Total Down Payment: <strong>Rp 2.000.000,-</strong></p>
                    </div>
                </div>
                <div class="py-5">
                    <button id="continueButton"
                        class="absolute bottom-4 right-4 text-yellow-600 cursor-pointer border-2 border-yellow-600 text-2xl font-bold px-40 py-2 hover:bg-yellow-600 hover:text-white transition">
                        Continue reservation
                    </button>
                </div>
            </div>
        </div>

        <div id="modal" class="fixed hidden inset-0 bg-black bg-opacity-50 flex justify-center items-center z-50">
            <div
                class="bg-black text-white rounded-lg p-6 max-w-md w-full relative shadow-[0_4px_8px_0_rgba(217,119,6,0.8),0_-4px_8px_0_rgba(217,119,6,0.8)]">
                <button class="absolute top-2 right-2 text-yellow-600 font-bold text-xl hover:text-yellow-500"
                    onclick="closeModalSuccess()">✕</button>

                <div class="flex justify-center items-center mb-4">
                    <div class="bg-yellow-600 rounded-full p-3">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none"
                            viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                    </div>
                </div>

                <h2 class="text-center text-2xl font-bold text-yellow-600 mb-4">Payment Successful!</h2>

                <p class="text-center text-sm">
                    Please check your email or WhatsApp for the confirmation and details of your reservation. Thank you for
                    choosing our restaurant, and we look forward to serving you soon!
                </p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const decreaseButton = document.getElementById('decreaseButton');
            const increaseButton = document.getElementById('increaseButton');
            const guestCount = document.getElementById('guestCount');
            const orderGuestCount = document.getElementById('order-guest-count');

            decreaseButton.addEventListener('click', function() {
                let currentValue = parseInt(guestCount.value);
                if (currentValue > parseInt(guestCount.min)) {
                    guestCount.value = currentValue - 1;
                    orderGuestCount.textContent = guestCount.value;
                }
            });

            increaseButton.addEventListener('click', function() {
                let currentValue = parseInt(guestCount.value);
                if (currentValue < parseInt(guestCount.max)) {
                    guestCount.value = currentValue + 1;
                    orderGuestCount.textContent = guestCount.value;
                }
            });

            const timeButtons = document.querySelectorAll('#lunch-time, #dinner-time, #second-dinner-time');
            timeButtons.forEach(button => {
                button.addEventListener('click', function() {
                    timeButtons.forEach(b => b.classList.remove('bg-yellow-600'));
                    button.classList.add('bg-yellow-600');
                });
            });

            const reservationSection = document.getElementById('reservation-section');
            const customerSection = document.getElementById('customer-section');
            const paymentSection = document.getElementById('payment-section');
            const paymentDetailSection = document.getElementById('payment-detail-section');
            const continueButton = document.getElementById('continueButton');
            const nextButton = document.getElementById('nextButton');

            const eWalletButton = document.getElementById('eWalletButton');
            const atmButton = document.getElementById('atmButton');
            const eWalletOptions = document.getElementById('e-wallet-options');
            const bankOptions = document.getElementById('bank-options');
            eWalletButton.addEventListener('click', function() {
                eWalletOptions.classList.remove('hidden');
                bankOptions.classList.add('hidden');
                eWalletButton.classList.add('bg-yellow-600 text-white');
                atmButton.classList.remove('bg-yellow-600 text-white');
            });

            atmButton.addEventListener('click', function() {
                bankOptions.classList.remove('hidden');
                eWalletOptions.classList.add('hidden');
                atmButton.classList.add('bg-yellow-600 text-white');
                eWalletButton.classList.remove('bg-yellow-600 text-white');
            });

            const paymentOptions = document.querySelectorAll('input[name="payment-option"]');
            paymentOptions.forEach(option => {
                option.addEventListener('change', function() {
                    if (this.checked) {
                        continueButton.disabled = false;
                    }
                });
            });

            continueButton.addEventListener('click', function() {
                if (reservationSection.classList.contains('hidden') === false) {
                    const dateValue = document.getElementById('date').value;
                    const areaValue = document.querySelector('input[name="area"]:checked')?.parentNode
                        .querySelector('h3').textContent;
                    const guestCountValue = guestCount.value;

                    document.getElementById('order-date').textContent = dateValue;
                    document.getElementById('order-area').textContent = areaValue || "-";
                    document.getElementById('order-guest-count').textContent = guestCountValue;

                    reservationSection.classList.add('hidden');
                    customerSection.classList.remove('hidden');
                } else if (customerSection.classList.contains('hidden') === false) {
                    const nameValue = document.getElementById('name').value;
                    const phoneValue = document.getElementById('phone').value;
                    const emailValue = document.getElementById('email').value;
                    const occasionValue = document.getElementById('occasion').value;
                    const requestValue = document.getElementById('request').value;

                    document.getElementById('order-name').textContent = nameValue || "-";
                    document.getElementById('order-phone').textContent = phoneValue || "-";
                    document.getElementById('order-email').textContent = emailValue || "-";
                    document.getElementById('order-occasion').textContent = occasionValue || "-";
                    document.getElementById('order-request').textContent = requestValue || "-";

                    customerSection.classList.add('hidden');
                    paymentSection.classList.remove('hidden');
                } else if (paymentSection.classList.contains('hidden') === false) {
                    continueButton.addEventListener('click', function() {
                        const selectedPayment = document.querySelector(
                            'input[name="payment-option"]:checked');
                        const selectedImage = selectedPayment ? selectedPayment.getAttribute(
                            'data-image') : null;
                        if (selectedPayment) {
                            continueButton.textContent = "Finish payment";
                            paymentSection.classList.add('hidden');
                            paymentDetailSection.classList.remove('hidden');
                            paymentSection.classList.add('hidden');
                            paymentDetailSection.classList.remove('hidden');
                            if (selectedImage) {
                                document.getElementById('selected-image').src =
                                    selectedImage;
                            }
                            continueButton.onclick = function() {
                                toggleModal('modal');

                            };
                        }
                    });
                }
            });

            const dateInput = document.getElementById('date');
            const areaInputs = document.querySelectorAll('input[name="area"]');
            dateInput.addEventListener('input', function() {
                orderDate.textContent = dateInput.value;
            });
        });

        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            const body = document.body;
            if (modal.classList.contains('hidden')) {
                modal.classList.remove('hidden');
                body.classList.add('overflow-hidden');
                title.classList.add('hidden');
            } else {
                modal.classList.add('hidden');
                body.classList.remove('overflow-hidden');
                title.classList.remove('hidden');
            }
        }


        function closeModalSuccess() {
            const modal = document.querySelector('.fixed');
            modal.style.display = 'none';
        }
    </script>

    <style>
        .hidden {
            display: none;
        }
    </style>
@endsection
