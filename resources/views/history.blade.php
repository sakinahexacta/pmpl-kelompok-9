<x-layouts.history>
    <div class="flex flex-col items-center justify-center gap-5 mt-10">
        <h1 class="text-3xl font-bold text-[#091831]">Riwayat Pencarian</h1>
        <p class="text-lg text-[#7B9EA8]">Semua aktivitas pencarian keyword di Kamus IT Pedia tersimpan di sini.</p>
    </div>

    <div class="w-full mt-5 px-20">
        <div class="w-full h-[70px] bg-[#D6E3E8] rounded-2xl transition duration-300 flex items-center justify-center text-sm font-bold my-10">
            @foreach ($categories as $category)
            <a href="{{ route('kamus', ['category' => $category->id_kategori]) }}">
                <div class="
                    w-[140px] h-[35px] rounded-full mx-3 transition duration-300
                    flex items-center justify-center text-sm font-bold
                    {{ $activeCategory == $category->id_kategori
                        ? 'bg-white text-[#7B9EA8] border-transparent'
                        : 'bg-white text-[#7B9EA8] hover:bg-[#091831] hover:text-white hover:border-transparent'
                    }}
                ">
                    {{ $category->nama_kategori }}
                </div>
            </a>
            @endforeach
        </div>
        <div class="w-full h-[700px] border-2 border-[#7B9EA8] rounded-2xl p-5">
            <div class="flex items-center justify-between mb-5 mx-2">
                <p class="text-xl font-bold text-[#091831]">
                    Timeline Aktivitas Pencarian
                </p>

                <div class="w-[150px] h-[35px] bg-[#7B9EA8] rounded-full flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24" class="text-white mr-2">
                        <path d="M0 0h24v24H0z" fill="none" />
                        <path fill="currentColor" d="M2 8a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1m0 4a1 1 0 0 1 1-1h18a1 1 0 1 1 0 2H3a1 1 0 0 1-1-1m1 3a1 1 0 1 0 0 2h12a1 1 0 1 0 0-2z" />
                    </svg>
                    <p class="text-lg text-white font-bold">
                        Terbaru
                    </p>
                </div>
            </div>
            <p class="text-base text-[#7B9EA8] font-bold mb-5 mx-2">
                Hari ini - {{ \Carbon\Carbon::now()->format('d M Y') }}
            </p>
            <div class="flex gap-6 mx-2">
                <!-- TIMELINE -->
                <div class="flex flex-col items-center mt-6">
                    
                    <!-- titik -->
                    <div class="w-5 h-5 rounded-full bg-[#7B9EA8] z-10"></div>

                    <!-- garis -->
                    <div class="w-[2px] h-16 bg-[#7B9EA8]"></div>

                    <!-- titik -->
                    <div class="w-5 h-5 rounded-full bg-[#7B9EA8] z-10"></div>

                    <div class="w-[2px] h-16 bg-[#7B9EA8]"></div>

                    <div class="w-5 h-5 rounded-full bg-[#7B9EA8] z-10"></div>
                </div>

                <!-- CONTENT -->
                <div class="flex flex-col gap-3 w-full">

                    <!-- CARD -->
                    <div class="h-[70px] bg-[#D6E3E8] rounded-xl px-5 pt-2 relative">
                        <div class="flex items-center justify-between">
                            <p class="text-base font-bold text-[#091831]">
                                Mencari kata kunci “Natural Language Processing”
                            </p>
                            <p class="text-[#091831] text-base font-bold">
                                12.23
                            </p>
                        </div>
                        <p class="text-sm text-[#4E7482] mt-1">
                            Kecerdasan Buatan
                        </p>
                    </div>
                                        <div class="h-[70px] bg-[#D6E3E8] rounded-xl px-5 pt-2 relative">
                        <div class="flex items-center justify-between">
                            <p class="text-base font-bold text-[#091831]">
                                Mencari kata kunci “Natural Language Processing”
                            </p>
                            <p class="text-[#091831] text-base font-bold">
                                12.23
                            </p>
                        </div>
                        <p class="text-sm text-[#4E7482] mt-1">
                            Kecerdasan Buatan
                        </p>
                    </div>
                                        <div class="h-[70px] bg-[#D6E3E8] rounded-xl px-5 pt-2 relative">
                        <div class="flex items-center justify-between">
                            <p class="text-base font-bold text-[#091831]">
                                Mencari kata kunci “Natural Language Processing”
                            </p>
                            <p class="text-[#091831] text-base font-bold">
                                12.23
                            </p>
                        </div>
                        <p class="text-sm text-[#4E7482] mt-1">
                            Kecerdasan Buatan
                        </p>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-layouts.history>