<nav x-data="{ open: false }" class="sticky top-0 z-50 bg-[#7CA4B4] border-b border-gray-100">
    <!-- Primary Navigation Menu -->
    <div class="w-full px-12">
        <div class="flex items-center justify-between h-16 w-full">
            <div class="grid grid-cols-3 items-center h-16 w-full">
                <!-- KIRI -->
                <div class="flex justify-start">
                    <x-nav-link 
                        :href="route('welcome')" 
                        :active="request()->routeIs('welcome')" 
                        class="text-white font-bold text-xl hover:decoration-none hover:underline-none hover:text-[#194A68]"
                    >
                        Home
                    </x-nav-link>
                </div>

                <!-- TENGAH -->
                <div class="flex-1 flex justify-center">
                    <form action="{{ route('kamus') }}" method="GET" class="w-full max-w-[600px]">
                        <div class="h-[50px] bg-[#023859] rounded-full flex items-center px-2 w-full">
                            
                            <input 
                                type="text" 
                                name="keyword"
                                placeholder="Cari Istilah..."
                                class="w-full h-[35px] rounded-full px-4 text-gray-700 border-none outline-none"
                            >

                            <button
                                type="submit"
                                class="ml-2 px-2 py-2 bg-white hover:bg-[#7B9EA8] rounded-full group transition"
                            >
                                <svg xmlns="http://www.w3.org/2000/svg"
                                    width="20"
                                    height="20"
                                    viewBox="0 0 24 24"
                                    class="text-[#091831] group-hover:text-white transition"
                                >
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5"
                                        d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314"/>
                                </svg>
                            </button>

                        </div>
                    </form>
                </div>

                <!-- KANAN -->
                <div class="flex justify-end">
                    <a
                        href="{{ route('login') }}"
                        class="inline-block px-5 py-1.5 text-[#091831] font-bold border border-transparent border-white bg-white rounded-lg text-sm leading-normal"
                    >
                        Log in
                    </a>
                </div>

            </div>

                @auth
                <div class="hidden sm:flex sm:items-center sm:ms-6">
                    <x-dropdown align="right" width="48">
                        <x-slot name="trigger">
                            <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                <div>{{ Auth::user()->username }}</div>

                                <div class="ms-1">
                                    <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                    </svg>
                                </div>
                            </button>
                        </x-slot>

                        <x-slot name="content">
                            <x-dropdown-link :href="route('profile.edit')">
                                {{ __('Profile') }}
                            </x-dropdown-link>

                            <form method="POST" action="{{ route('logout') }}">
                                @csrf

                                <x-dropdown-link :href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">
                                    {{ __('Log Out') }}
                                </x-dropdown-link>
                            </form>
                        </x-slot>
                    </x-dropdown>
                </div>
                @endauth
        </div>
    </div>
</nav>
