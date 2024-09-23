<x-layout>
    <p>
    <form method="POST" action="{{ route("user-submit") }}">
        @csrf
        <div class="flex flex-col items-center">
            <!-- First Image -->
            <img src="{{ asset('images/propertylablogo.png') }}" alt="Property Lab" class="h-24 mb-4">

            <!-- Second Image -->
            <img src="{{ asset('images/offerticket.png') }}" alt="Offer Ticket" class="w-full md:w-2/3 lg:w-1/2 mb-6">

            <div>
                <p class="text-2xl font-semibold mb-4">Claim Your RM 12,888 Bonus Before It Expires.</p>
            </div>
            <script src="https://cdn.logwork.com/widget/countdown.js"></script>
            <a href="https://logwork.com/countdown-timer" class="countdown-timer w-1/2 mx-auto mb-6" data-timezone="Asia/Singapore" data-date="2024-09-27 00:00">Countdown Timer</a>
            <div>
                <label for="email" class="block text-xl font-medium leading-6 text-gray-900">Enter Your Email To Secure The Bonus Before The Deadline!</label>
                <div class="mt-2">
                    <div class="flex rounded-md shadow-sm ring-1 ring-inset ring-gray-300 focus-within:ring-2 focus-within:ring-inset focus-within:ring-indigo-600 max-w-md mx-auto">
                        <input type="text" name="email" id="email" class="block flex-1 border-0 bg-transparent py-1.5 px-3 text-gray-900 placeholder:text-gray-400 focus:ring-0 sm:text-sm sm:leading-6">
                    </div>
                </div>
            </div>

            <div class="mt-6 flex items-center justify-center gap-x-6">
                <button type="submit" class="rounded-md bg-blue-800 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-blue-700 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-blue-600">Yes! I want the RM 12,888 bonus for free!</button>
            </div>

        </div>
    </form>

    </p>

</x-layout>