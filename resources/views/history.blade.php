<x-layouts.history>

    @guest
    <div id="loginModal" class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">

        <div class="bg-white w-[400px] rounded-2xl shadow-lg p-6 text-center relative animate-fadeIn">

            <!-- Tombol X -->
            <button onclick="window.location.href='/kamus'"
                class="absolute top-3 right-3 text-gray-500 hover:text-black text-xl font-bold">
                ×
            </button>

            <!-- Icon -->
            <div class="w-16 h-16 mx-auto bg-[#7B9EA8] rounded-full flex items-center justify-center mb-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 24 24" fill="white">
                    <path d="M12 2a10 10 0 100 20 10 10 0 000-20zm1 15h-2v-2h2v2zm0-4h-2V7h2v6z"/>
                </svg>
            </div>

            <!-- Text -->
            <h2 class="text-lg font-bold text-gray-800">
                Akses Ditolak
            </h2>

            <p class="text-gray-500 mt-2">
                Anda harus login untuk dapat membuka halaman history.
            </p>

            <!-- Button login -->
            <a href="/login"
            class="mt-5 inline-block bg-[#7B9EA8] text-white px-5 py-2 rounded-full hover:bg-[#5f8a96] transition">
                Login Sekarang
            </a>
        </div>
    </div>
    @endguest

    @if(session('error'))
    <script>
        alert("{{ session('error') }}");
    </script>
    @endif

    <div class="flex flex-col items-center justify-center gap-5 mt-10 pt-16">
        <h1 class="text-3xl font-bold text-[#091831]">Riwayat Pencarian</h1>
        <p class="text-lg text-[#7B9EA8]">Semua aktivitas pencarian keyword di Kamus IT Pedia tersimpan di sini.</p>
    </div>

    <div class="w-full mt-5 px-20">
        <div class="w-full h-[70px] bg-[#D6E3E8] rounded-2xl transition duration-300 flex items-center justify-center text-sm font-bold my-10">
            <a href="{{ route('history') }}">
                <div class="
                    w-[140px] h-[35px] rounded-full mx-3 transition duration-300
                    flex items-center justify-center text-sm font-bold
                    {{ is_null($activeCategory)
                        ? 'bg-[#091831] text-white border-transparent'
                        : 'bg-white text-[#7B9EA8] hover:bg-[#091831] hover:text-white hover:border-transparent'
                    }}
                ">
                    Semua
                </div>
            </a>
            @foreach ($categories as $category)
            <a href="{{ route('history', ['category' => $category->id_kategori]) }}">
                <div class="
                    w-[140px] h-[35px] rounded-full mx-3 transition duration-300
                    flex items-center justify-center text-sm font-bold
                    {{ $activeCategory == $category->id_kategori
                        ? 'bg-[#091831] text-white border-transparent'
                        : 'bg-white text-[#7B9EA8] hover:bg-[#091831] hover:text-white hover:border-transparent'
                    }}
                ">
                    {{ $category->nama_kategori }}
                </div>
            </a>
            @endforeach
        </div>
    <div class="w-full border-2 border-[#7B9EA8] rounded-2xl p-5 mb-32">

    @if($histories->isEmpty())

            <!-- EMPTY STATE FULL -->
            <div class="flex flex-col items-center justify-center h-[600px] text-center">
                
                <svg xmlns="http://www.w3.org/2000/svg"
                    width="80"
                    height="80"
                    viewBox="0 0 24 24"
                    class="text-[#7B9EA8] mb-4">
                    <path fill="currentColor"
                        d="M13 3a9 9 0 1 0 9 9a9 9 0 0 0-9-9m0 16a7 7 0 1 1 7-7a7 7 0 0 1-7 7m-.5-11h-1v6l5 3l.5-.9l-4.5-2.6z"/>
                </svg>

                <h2 class="text-xl font-bold text-[#091831]">
                    Belum ada riwayat pencarian
                </h2>

                <p class="text-sm text-[#7B9EA8] mt-2">
                    Kamu belum melakukan pencarian apapun di Kamus IT Pedia
                </p>

            </div>

        @else

            <!-- HEADER -->
            <div class="flex items-center justify-between mb-5 mx-2">
                <p class="text-xl font-bold text-[#091831]">
                    Timeline Aktivitas Pencarian
                </p>

                <div class="flex gap-2">

                    {{-- TERBARU --}}
                    <a href="{{ route('history', array_merge(request()->all(), ['sort' => 'desc'])) }}">
                        <div class="
                            w-[120px] h-[35px] rounded-full flex items-center justify-center font-bold transition duration-300
                            {{ ($sort ?? 'desc') == 'desc'
                                ? 'bg-[#7B9EA8] text-white border-transparent'
                                : 'bg-[#7B9EA8] text-white border border-[#7B9EA8] hover:bg-[#7B9EA8] hover:text-white'
                            }}
                        ">
                            Terbaru
                        </div>
                    </a>

                    {{-- TERLAMA --}}
                    <a href="{{ route('history', array_merge(request()->all(), ['sort' => 'asc'])) }}">
                        <div class="
                            w-[120px] h-[35px] rounded-full flex items-center justify-center font-bold transition duration-300
                            {{ ($sort ?? 'desc') == 'asc'
                                ? 'bg-[#7B9EA8] text-white border-transparent'
                                : 'bg-white text-[#7B9EA8] border border-[#7B9EA8] hover:bg-[#7B9EA8] hover:text-white'
                            }}
                        ">
                            Terlama
                        </div>
                    </a>

                </div>
            </div>

               @foreach($histories as $date => $items)
               <p class="text-base text-[#7B9EA8] font-bold mb-5 mx-2">
                    {{ $date }}
                </p>

                @foreach($items as $history)
                <div class="flex gap-6 mx-2">

                    <!-- DOT -->
                    <div class="flex flex-col items-center">
                        <div class="w-5 h-5 rounded-full bg-[#7B9EA8] z-10 mt-6 relative"></div>

                        @if(!$loop->last)
                            <div class="w-[2px] h-24 bg-[#7B9EA8] absolute mt-6"></div>
                        @endif
                    </div>

                    <!-- CONTENT -->
                    <div class="flex flex-col w-full mb-5">
                        <div class="h-[70px] bg-[#D6E3E8] rounded-xl px-5 pt-3">
                            <div class="flex items-center justify-between">
                                <p class="text-base font-bold text-[#091831]">
                                    Mencari kata “{{ $history->term->nama_istilah ?? '-' }}”
                                </p>
                                <p class="text-base font-bold text-[#091831]">
                                    {{ \Carbon\Carbon::parse($history->created_at)->format('H:i') }}
                                </p>
                            </div>

                            <p class="text-sm text-[#4E7482]">
                                {{ $history->term->kategori->nama_kategori ?? '-' }}
                            </p>
                        </div>
                    </div>

                </div>
                @endforeach
                @endforeach

            </div>
        </div>

        @endif
    </div>
</x-layouts.history>