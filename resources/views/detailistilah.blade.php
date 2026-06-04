<x-app-layout>

    @if (session('success'))
        <div id="successModal"
            class="fixed inset-0 bg-black/50 flex items-center justify-center z-50">

            <div class="bg-white w-[400px] rounded-2xl shadow-lg p-6 text-center relative animate-fadeIn">

                <!-- Icon -->
                <div class="w-16 h-16 mx-auto bg-green-500 rounded-full flex items-center justify-center mb-4 text-white">
                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 16 16" fill="none">
                        <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5">
                            <path d="m14.25 8.75c-.5 2.5-2.3849 4.85363-5.03069 5.37991-2.64578.5263-5.33066-.7044-6.65903-3.0523-1.32837-2.34784-1.00043-5.28307.81336-7.27989 1.81379-1.99683 4.87636-2.54771 7.37636-1.54771" />
                            <polyline points="5.75 7.75 8.25 10.25 14.25 3.75" />
                        </g>
                    </svg>
                </div>

                <h2 class="text-lg font-bold text-gray-800">
                    Berhasil!
                </h2>

                <p class="text-gray-500 mt-2">
                    {{ session('success') }}
                </p>

                <button onclick="document.getElementById('successModal').remove()"
                    class="mt-5 bg-[#7B9EA8] text-white px-5 py-2 rounded-full hover:bg-[#5f8a96] transition">
                    OK
                </button>

            </div>
        </div>

        <script>
            setTimeout(() => {
                const modal = document.getElementById('successModal');
                if (modal) modal.remove();
            }, 2500);
        </script>
    @endif

    <div class="w-full mt-1 sticky top-16 z-10 flex flex-wrap gap-2 bg-gray-100 fixed top-0 left-0 z-50">
        <div class="w-full h-[40px] mt-[-2px] transition duration-300 flex items-center text-sm font-bold px-8 bg-transparent text-[#091831] shadow-[2px_2px_4px_rgba(0,0,0,0.1)]">
            
            <div class="text-lg tracking-widest mx-5 flex items-center gap-2">

                <a href="{{ route('kamus') }}" class="text-gray-400 hover:text-gray-500">
                    Beranda
                </a>

                <span class="text-black">/</span>

                <span class="text-black font-semibold">
                    {{ $term->nama_istilah }}
                </span>

            </div>

        </div>
    </div>

    <div class="mx-14 mt-6 sticky top-16 z-10 flex flex-col gap-4 bg-gray-100 pb-5">

        <a href="{{ url()->previous() ?? route('kamus') }}" class="text-[#023859] hover:text-blue-900 transition w-fit">
            <svg xmlns="http://www.w3.org/2000/svg" width="35px" height="35px" viewBox="0 0 32 32">
                <path d="M0 0h32v32H0z" fill="none" />
                <path fill="currentColor" d="M16 3C8.832 3 3 8.832 3 16s5.832 13 13 13s13-5.832 13-13S23.168 3 16 3m0 2c6.087 0 11 4.913 11 11s-4.913 11-11 11S5 22.087 5 16S9.913 5 16 5m-.72 4.594L9.595 15.28l-.72.72l.72.72l5.687 5.686L16.72 21l-4-4H23v-2H12.72l4-4z" />
            </svg>
        </a>

        <div class="w-full min-h-[500px] mt-[8px] transition duration-300 rounded-[30px] bg-[#023859] text-white shadow-[2px_2px_4px_rgba(0,0,0,0.1)] p-20 relative flex flex-col md:flex-row gap-10">

            {{-- LEFT SIDE --}}
            <div class="flex-1 flex flex-col justify-between">

                <div>

                    {{-- KATEGORI --}}
                    <div class="flex flex-wrap gap-3 mb-4 ml-6 mt-6">

                        <div class="border-2 border-white/40 bg-white/10 text-white rounded-full px-5 py-1.5 text-sm font-semibold tracking-wide">
                            {{ $term->kategori->nama_kategori ?? 'Tidak ada kategori' }}
                        </div>

                        @if(!empty($term->sub_kategori))
                            <div class="border-2 border-white/40 bg-white/10 text-white rounded-full px-5 py-1.5 text-sm font-semibold tracking-wide">
                                {{ $term->sub_kategori }}
                            </div>
                        @endif

                    </div>

                    {{-- NAMA ISTILAH --}}
                    <div class="bg-white text-[#023859] rounded-full px-6 py-2 text-sm font-semibold w-fit shadow-md mb-8 ml-6 ">
                        {{ $term->nama_istilah }}
                    </div>

                    {{-- PENGERTIAN (definisi + penjelasan) --}}
                    <div class="space-y-4 pr-4 ml-6">

                        <p class="text-white text-3xl font-bold tracking-wide mb-6">
                            Pengertian
                        </p>
                        
                        <p class="text-white/90 text-base leading-relaxed text-justify mb-4">
                            {{ $term->definisi }}
                        </p>

                        <p class="text-white/90 text-base leading-relaxed text-justify mb-10">
                            {{ $term->penjelasan }}
                        </p>

                    </div>

                </div>

            </div>

            {{-- RIGHT SIDE --}}
            <div class="flex-1 flex flex-col justify-between lg:max-w-[50%] bg-transparent">
                
                <div class="space-y-6">
                    {{-- BUTTON SHARE (tetap kamu) --}}
                    <form method="POST" action="{{ route('bookmark.store') }}">
                        @csrf

                        <input type="hidden" name="term_id" value="{{ $term->id_istilah }}">

                        <button type="submit"
                            class="bg-white text-[#023859] p-3 rounded-2xl justify-end ml-auto shadow-md hover:bg-gray-100 transition duration-200">

                            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6"
                                fill="none" viewBox="0 0 24 24"
                                stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>

                        </button>
                    </form>


                    <div class="space-y-2">
                        <p class="text-white/90 text-lg font-medium">Pelafalan :</p>
                        {{ $term->pelafalan ? : 'Pelafalan belum tersedia.' }} :
                    </div>

                    <div class="space-y-2 pt-2">
                        <p class="text-white/90 text-lg font-medium">
                            Asal bahasa :
                        </p>
                        {{ $term->asal_bahasa ? : 'Asal bahasa belum tersedia.'}}
                    </div>

                    @if(!empty($term->gambar))
                        <img src="{{ asset('storage/' . $term->gambar) }}"
                            alt="{{ $term->nama_istilah }}"
                            class="rounded-xl w-full max-w-md object-cover">
                    @endif

                </div>

                {{-- SHARE BUTTON BAWAH --}}
                <div class="flex justify-end mt-6">

                    <button class="bg-white/10 hover:bg-white/20 border border-white/20 p-3 rounded-2xl transition duration-200">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-white" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M8.684 10.742l4.61 2.305m0 0l4.61 2.305m-4.61-2.305a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0zm7.5 6.5a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0zm-7.5-13a3.5 3.5 0 11-7 0 3.5 3.5 0 017 0z" />
                        </svg>
                    </button>

                </div>

            </div>

        </div>

    </div>
</x-app-layout>