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
            <div class="text-gray-500 text-xl font-semibold dark:text-gray-400 pt-2.5">
                Software Nieuws
            </div>
            <!-- Start logout en profile -->
            <div class="flex items-center space-x-4">
                <div class="items-center">
                    <x-dropdown-link :href="route('profile.edit')">
                        Welkom: {{ __(Auth::user()->name) }}
                    </x-dropdown-link>
                </div>
                <div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf

                        <x-dropdown-link :href="route('logout')"
                            onclick="event.preventDefault(); this.closest('form').submit();">
                            {{ __('Log uit') }}
                        </x-dropdown-link>
                    </form>
                </div>
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
