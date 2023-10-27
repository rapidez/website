@if(request()->has('success'))
    <p class="text-secondary-100 font-semibold">Thank you for subscribing!</p>
@else
    <form class="lg:max-w-xl lg:mx-0" method="POST" action="https://mailcoach.rapidez.io/subscribe/78170cf4-6969-4226-b1ab-0f79eec57542">
        <div class="lg:flex">
            <div class="min-w-0 flex-1 flex">
                <label for="email" class="sr-only">Email address</label>
                <input id="email" name="email" type="email" placeholder="Enter your email" class="block bg-white w-full px-5 py-3 rounded-r-[25px] rounded-b-[25px] rounded-l-[25px] rounded-t-[25px] lg:rounded-r-[7px] border-0 focus:border-0 text-base placeholder-primary-200 placeholder-opacity-75 outline-none focus:outline-none shadow-md text-primary-200 focus:ring-0" required>
            </div>
            <div class="mt-3 lg:mt-0 lg:ml-3">
                <button type="submit" class="block w-full py-3 px-6 rounded-r-[25px] rounded-b-[25px] rounded-l-[25px] rounded-t-[25px] lg:rounded-l-[7px] bg-secondary-100 text-white font-bold border border-transparent opacity-100 hover:opacity-80 transition duration-150 ease-in-out shadow-md">Subscribe</button>
            </div>
        </div>
    </form>
@endif
