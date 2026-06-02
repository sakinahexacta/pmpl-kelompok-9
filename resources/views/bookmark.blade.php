<x-layouts.bookmark>
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
                Anda harus login untuk dapat membuka halaman bookmark.
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

    <div class="w-full mt-1 sticky top-16 z-10 flex flex-wrap gap-2 bg-gray-100 pb-5">
        <div class="w-full h-[70px] mt-[-2px] transition duration-300 flex items-center text-sm font-bold px-8">
                <div class="text-base tracking-widest mx-5">
                    <p class="text-[#265B71] ml-8 mt-3">
                        Semua Istilah yang telah anda simpan akan muncul disini!
                    </p>
                </div>
                <div class="w-[200px] h-[45px] rounded-full ml-auto mr-12 border-[4px] transition duration-300
                    flex items-center justify-center text-xl font-bold bg-transparent text-[#7B9EA8] border-[#7B9EA8] hover:bg-[#7B9EA8] hover:text-white">
                    <p class="mt-[-2px] ml-2">
                        Buat Folder
                    </p>
                    <svg xmlns="http://www.w3.org/2000/svg" width="25px" height="25px" viewBox="0 0 24 24" class="ml-2">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path fill="currentColor" d="M18 12.998h-5v5a1 1 0 0 1-2 0v-5H6a1 1 0 0 1 0-2h5v-5a1 1 0 0 1 2 0v5h5a1 1 0 0 1 0 2" />
                    </svg>

                </div>
        </div>
    </div>
    <div class="flex flex-wrap gap-7 px-5 py-5">
        @forelse ($bookmarks as $bookmark)

            <div class="w-[650px] h-[80px] rounded-[10px] ml-14 transition duration-300
                bg-[#D6E3E8] shadow-[2px_2px_4px_rgba(0,0,0,0.1)]
                relative hover:scale-[1.01] flex items-center">

                <div class="w-[10px] h-full bg-[#7B9EA8] rounded-l-[10px] absolute top-0 left-0"></div>

                <div class="ml-6">
                    <div class="text-2xl font-semibold text-black">
                        {{ optional($bookmark->term)->nama_istilah }}
                    </div>

                    <div class="text-sm font-medium text-gray-700">
                        {{ optional($bookmark->term)->kategori->nama_kategori }}
                    </div>
                </div>

                <div class="ml-auto mr-5">
                    <!-- icon kamu -->
                    <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 20 20" color="black">
                        <path d="M0 0h20v20H0z" fill="none" />
                        <path fill="currentColor" d="M4.5 2A2.5 2.5 0 0 0 2 4.5v9A2.5 2.5 0 0 0 4.5 16h9a2.5 2.5 0 0 0 2.5-2.5v-9A2.5 2.5 0 0 0 13.5 2zm5 4.5v2h2a.5.5 0 0 1 0 1h-2v2a.5.5 0 0 1-1 0v-2h-2a.5.5 0 0 1 0-1h2v-2a.5.5 0 0 1 1 0M7.5 18a3.5 3.5 0 0 1-2.45-1h9.45a2.5 2.5 0 0 0 2.5-2.5V5.05c.619.632 1 1.496 1 2.45v7a3.5 3.5 0 0 1-3.5 3.5z" />
                    </svg>
                </div>

            </div>

        @empty

            <div class="w-full flex flex-col items-center justify-center mt-20 text-center">
                
                <!-- Icon kosong -->
                <div class="w-20 h-20 bg-[#7B9EA8] rounded-full flex items-center justify-center mb-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 24 24" fill="white">
                        <path d="M19 3H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 14H7v-2h5v2zm5-4H7v-2h10v2zm0-4H7V7h10v2z"/>
                    </svg>
                </div>

                <!-- Text kosong -->
                <h2 class="text-lg font-bold text-gray-700">
                    Belum ada istilah yang disimpan
                </h2>

                <p class="text-gray-500 mt-2">
                    Silahkan simpan istilah yang kamu suka untuk ditampilkan di sini.
                </p>

            </div>

        @endforelse
    </div>

</x-layouts.bookmark>