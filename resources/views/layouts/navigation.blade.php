<nav x-data="{ open: false }" class="bg-white dark:bg-gray-800 border-b border-gray-100 dark:border-gray-700 w-100 max-w-screen fixed w-full">
    <!-- Primary Navigation Menu -->
    <div class="flex h-25 w-full">
    <div class="flex-shrink-0 w-32 flex items-center">
        <a href="{{ route('dashboard') }}">
            <x-application-logo class="block h-9 w-auto fill-current text-gray-800 dark:text-gray-200" />
        </a>
    </div>
    <div class="flex flex-col flex-grow justify-between">
        <div class="px-10 flex items-center justify-between">
            <div class="text-gray-400 text-xl font-semibold pt-2.5">
                Software Nieuws
            </div>
            <!-- Start logout en profile -->
            <div class="flex items-center space-x-4">
                @if(Auth::user())
                    <div class="items-center dark:text-gray-400">
                        <x-dropdown-link :href="route('profile.edit')">
                            Welkom: {{ __(Auth::user()->name) }}
                        </x-dropdown-link>
                    </div>
                    <div class="font-semibold dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <x-dropdown-link :href="route('logout')"
                                onclick="event.preventDefault(); this.closest('form').submit();">
                                {{ __('Log uit') }}
                            </x-dropdown-link>
                        </form>
                    </div>
                @else
                    <div class="items-center font-semibold text-gray-400">
                        Welkom: <a class="text-bold">Gast</a>
                    </div>
                    <div>
                        @auth
                            <a href="{{ url('/dashboard') }}" class="font-semibold dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
                        @else
                            <a href="{{ route('login') }}" class="font-semibold dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>

                            @if (Route::has('register'))
                                <a href="{{ route('register') }}" class="ml-4 font-semibold dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                            @endif
                        @endauth
                    </div>
                @endif
            </div>
            <!-- End logout en profile -->
        </div>
        <div class="flex flex-row my-10">
            <div class="px-10 flex items-center">
                <a class="text-gray-500 dark:text-gray-400"
                    href="/Newsbrief">
                    Aanmelden Nieuwsbrief
                </a>
            </div>
            <div class="px-10 flex items-center">
                <a class="text-gray-500 dark:text-gray-400"
                    href="{{ route('Rollercoaster.index') }}">
                    Nieuws
                </a>
            </div>
            <div class="px-10 flex items-center">
                <a class="text-gray-500 dark:text-gray-400"
                    href="{{ route('Rollercoaster.create') }}">
                    Nieuwsbrief maken
                </a>
            </div>
        </div>
    </div>
</div>

</nav>
