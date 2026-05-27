<x-app-layout>
    <div class="w-full mt-1 sticky top-16 z-10 flex flex-wrap gap-2 bg-gray-100 pb-5">
        <div class="
            w-full h-[40px] mt-[-2px] transition duration-300 flex items-center text-sm font-bold px-8
            bg-transparent text-[#091831] shadow-[2px_2px_4px_rgba(0,0,0,0.1)]">
                <div class="text-lg tracking-widest mx-5">

                    <a href="{{ route('kamus') }}" class="text-gray-400 hover:text-gray-500">
                        Beranda
                    </a>

                    <span class="text-black px-2">/</span>

                    <span class="text-black font-semibold">
                        {{ $term->nama_istilah }}
                    </span>

                </div>
        </div>
    </div>
    <div class="mx-14 mt-1 sticky top-16 z-10 flex flex-wrap gap-2 bg-gray-100 pb-5">
        <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 32 32">
            <path d="M0 0h32v32H0z" fill="none" />
            <path fill="currentColor" d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13S23.168 3 16 3m0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16S9.913 5 16 5m-.72 4.594L9.595 15.28l-.72.72l.72.72l5.687 5.686L16.72 21l-4-4H23v-2H12.72l4-4z" />
        </svg>
        <div class="w-full h-[500px] mt-[8px] transition duration-300 justify-start text-sm font-bold rounded-[30px]
            bg-[#023859] text-white shadow-[2px_2px_4px_rgba(0,0,0,0.1)] flex flex-wrap gap-20">
            <div>
                <p class="text-white text-4xl m-10">
                    Pengertian
                </p>
            </div>
        </div>
    </div>
</x-app-layout>