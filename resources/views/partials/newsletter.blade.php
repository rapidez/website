@if(request()->has('success'))
    <p class="text-secondary-100 font-semibold">Thank you for subscribing!</p>
@else
    <form class="sm:max-w-xl lg:mx-0" method="POST" action="https://mailcoach.rapidez.io/subscribe/78170cf4-6969-4226-b1ab-0f79eec57542">
        <div class="sm:flex">
            <div class="min-w-0 flex-1 flex">
                <label for="email" class="sr-only">Email address</label>
                <input id="email" name="email" type="email" placeholder="Enter your email" class="block w-full px-5 py-3 rounded-full sm:rounded-r-none border-0 focus:border-0 text-base text-gray-900 placeholder-primary-200 placeholder-opacity-75 outline-none focus:outline-none shadow-md text-primary-200 focus:ring-0" required>
            </div>
            <div class="mt-3 sm:mt-0 sm:ml-3">
                <button type="submit" class="block w-full py-3 px-6 rounded-full sm:rounded-l-none bg-secondary-100 text-white font-medium border border-transparent opacity-100 hover:opacity-80 transition duration-150 ease-in-out shadow-md">Subscribe</button>
            </div>
        </div>
    </form>
@endif
