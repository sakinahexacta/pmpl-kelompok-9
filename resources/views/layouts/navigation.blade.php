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
                        class="text-white font-bold text-xl hover:text-[#194A68]"
                    >
                        Home
                    </x-nav-link>
                </div>

                <!-- TENGAH -->
                <div class="flex justify-center">
                    <form action="{{ route('kamus') }}" method="GET" class="w-full max-w-[600px]">
                        <div class="h-[50px] bg-[#023859] rounded-full flex items-center px-2 w-full">
                            <input type="text" name="keyword" placeholder="Cari Istilah..." class="w-full h-[35px] rounded-full px-4 text-gray-700 border-none outline-none" >
                            <button type="submit" class="ml-2 px-2 py-2 bg-white hover:bg-[#7B9EA8] rounded-full group transition" > 
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" class="text-[#091831] group-hover:text-white transition" >
                                    <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="m21 21l-4.343-4.343m0 0A8 8 0 1 0 5.343 5.343a8 8 0 0 0 11.314 11.314"/>
                                </svg>
                        </button>
                    </div>
                </form>
            </div>

                <!-- KANAN -->
                <div class="flex justify-end">

                    @guest
                        <a
                            href="{{ route('login') }}"
                            class="px-5 py-2 bg-white text-[#091831] font-bold rounded-lg"
                        >
                            Log in
                        </a>
                    @endguest

                    @auth
                        <div x-data="{ open: false }" class="relative">

                            <button
                                @click="open = !open"
                                class="flex items-center gap-2 bg-white text-[#091831] font-bold px-4 py-2 rounded-lg"
                            >
                                {{ Auth::user()->username }}

                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                                    <path stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M19 9l-7 7-7-7"/>
                                </svg>
                            </button>

                            <div
                                x-show="open"
                                @click.outside="open = false"
                                class="absolute right-0 mt-2 w-40 bg-white rounded-lg shadow-lg overflow-hidden z-50"
                            >
                                <a href="/profile" class="block px-4 py-2 hover:bg-gray-100">
                                    Profile
                                </a>

                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button
                                        type="submit"
                                        class="w-full text-left px-4 py-2 hover:bg-gray-100"
                                    >
                                        Logout
                                    </button>
                                </form>
                            </div>

                        </div>
                    @endauth

                </div>

            </div>
    </div>
</nav>
