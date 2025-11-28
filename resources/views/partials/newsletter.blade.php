@if(request()->has('success'))
    <p class="text-secondary-100 font-semibold">Thank you for subscribing!</p>
@else
    <form class="w-full" method="POST" action="https://mailcoach.rapidez.io/subscribe/78170cf4-6969-4226-b1ab-0f79eec57542">
        <div class="relative lg:h-16">
            <label for="email" class="sr-only">Email address</label>
            <input
                id="email"
                name="email"
                type="email"
                placeholder="Enter your email"
                class="block bg-white w-full border-gray-200 h-16 pl-5 rounded-full text-base placeholder-primary-200 placeholder-opacity-75 outline-none focus:border-primary-200 focus:outline-none text-primary-200 focus:ring-0 lg:pr-36"
                required
            >
            <button
                type="submit"
                class="w-full top-2 right-2 block h-12 px-6 rounded-full bg-secondary-100 text-white font-bold border border-transparent opacity-100 hover:opacity-80 transition duration-150 max-lg:mt-2 lg:absolute lg:w-fit"
            >
                Subscribe
            </button>
        </div>
    </form>
@endif
