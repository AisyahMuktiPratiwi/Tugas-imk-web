@extends('layouts.app')

@section('title', 'The Marble Room 2')

@section('content')
    <div class="flex flex-col">
        <div class="h-auto flex items-center justify-center text-center bg-[rgba(21,21,21,255)]">
            <h2 id="reservation-title" class="absolute text-8xl font text-white z-10 hover:text-yellow-600 cursor-pointer"
                onclick="toggleModal('modal')">
                Reservation
            </h2>
            <img class="h-auto w-full object-contain" src="{{ asset('images/RESERVATION/Reservation (Profile).jpg') }}"
                alt="Logo">
        </div>
    </div>

    <div id="modal" class="hidden fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
        onclick="closeModal(event, 'modal')">
        <div class="bg-gray-50 bg-opacity-80 rounded-lg shadow-lg max-w-2xl w-full max-h-[90vh]"
            onclick="event.stopPropagation()">
            <div class="flex items-center justify-center p-4 sticky top-0 z-10">
                <h3 class="text-3xl font-bold text-gray-900">
                    Booking Policy
                </h3>
            </div>
            <div class="p-6 space-y-3 text-lg text-black leading-tight px-10 overflow-y-auto max-h-[60vh]">
                <p>
                    Thank you for choosing to dine with us
                </p>
                <p class="text-yellow-600 font-bold">
                    Opening Hours
                </p>
                <p class="text-black font-bold">
                    Monday - Thursday
                </p>
                <p>11:00 - 22:00</p>

                <p class="text-black font-bold">
                    Friday - Sunday
                </p>
                <p>15:00 - 23:00</p>

                <p class="text-black">
                    Please Read The Reservation Terms & Conditions:
                <ul class="list-disc pl-5 space-y-2">
                    <li>Kindly enter the number of guests expected to attend. We cannot guarantee seat availability upon
                        arrival if the actual number differs from what you have entered.</li>
                    <li>Enjoy your feast within a 90-minute time limit from the moment you're seated.</li>
                    <li>Dress in Smart Casual attire; wearing slippers is not allowed.</li>
                    <li>Children aged two and above are considered additional guests.</li>
                    <li>A down payment is necessary to secure your reservation and will be automatically deducted from your
                        total bill.</li>
                    <li>Due to cancellation, your deposit becomes a floating deposit for two weeks.</li>
                    <li>You can reschedule once, but any further rescheduling is not allowed.</li>
                    <li>Changes will result in the loss of the down payment.</li>
                    <li>Please be on time. We will contact via WhatsApp (once) and call (twice). The table will be released
                        without a response.</li>
                </ul>
                </p>
                <p class="text-black">
                    If you experience issues, such as the reservation not being available at your requested time and/or not
                    getting the requested number of people, please contact us via WhatsApp here!
                </p>
                <div class="flex items-center space-x-2">
                    <input type="checkbox" id="agreementCheckbox"
                        class="w-5 h-5 text-yellow-600 focus:ring-yellow-500 border-gray-300 rounded">
                    <label for="agreementCheckbox" class="text-black">
                        I have read and agree to the above Terms and Conditions.
                    </label>
                </div>
            </div>
            <div class="flex items-center justify-center pt-3 pb-3">
                <button id="confirmButton"
                    class="text-yellow-600 border-2 border-yellow-600 text-2xl font-bold px-40 py-2 hover:bg-yellow-600 hover:text-white transition disabled:opacity-50 disabled:cursor-not-allowed"
                    onclick="redirectToOrder()" disabled>
                    Confirm and continue
                </button>
            </div>
        </div>
    </div>

    <script>
        const checkbox = document.getElementById('agreementCheckbox');
        const confirmButton = document.getElementById('confirmButton');

        checkbox.addEventListener('change', function() {
            confirmButton.disabled = !this.checked;
        });

        function toggleModal(modalId) {
            const modal = document.getElementById(modalId);
            const body = document.body;
            const title = document.getElementById('reservation-title');

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

        function closeModal(event, modalId) {
            const modal = document.getElementById(modalId);

            if (!event.target.closest('.bg-gray-50')) {
                modal.classList.add('hidden');
                document.body.classList.remove('overflow-hidden');
                document.getElementById('reservation-title').classList.remove('hidden');
            }
        }

        function redirectToOrder() {
            window.location.href = "{{ route('order') }}";
        }
    </script>
@endsection
