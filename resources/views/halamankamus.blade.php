<x-app-layout>
    <div class="mx-9 mt-1 sticky top-16 z-10 flex flex-wrap gap-2 bg-gray-100 pb-5">
        @php
            $activeCategory = request('category');
        @endphp
        <a href="{{ route('kamus') }}">
            <div class="
                w-[140px] h-[35px] rounded-full ml-3 mt-3 mb-1 border-2 transition duration-300
                flex items-center justify-center text-sm font-bold
                {{ !$activeCategory
                    ? 'bg-[#7B9EA8] text-white border-transparent'
                    : 'bg-transparent text-[#091831] border-[#091831] hover:bg-[#D6E3E8]'
                }}
            ">
                Semua
            </div>
        </a>
        @foreach ($categories as $category)
        <a href="{{ route('kamus', ['category' => $category->id_kategori]) }}">
            <div class="
                w-[140px] h-[35px] rounded-full ml-3 mt-3 mb-1 border-2 transition duration-300
                flex items-center justify-center text-sm font-bold
                {{ $activeCategory == $category->id_kategori
                    ? 'bg-[#7B9EA8] text-white border-transparent'
                    : 'bg-transparent text-[#091831] border-[#091831] hover:bg-[#D6E3E8] hover:border-transparent'
                }}
            ">
                {{ $category->nama_kategori }}
            </div>
        </a>
        @endforeach
    </div>

    <div class="flex gap-1 px-5 py-5">

    <!-- SIDEBAR -->
        <div class="w-[220px] h-[500px] sticky top-36 z-0 border-2 border-[#7B9EA8] rounded-2xl ml-7 p-5">

            <div class="text-center text-xl font-bold text-[#091831] mb-5">
                Abjad
            </div>

            <div class="grid grid-cols-4 gap-3">
                @foreach (range('A', 'Z') as $letter)
                    <a
                        href="#{{ $letter }}"
                        class="bg-[#D6E3E8] rounded-lg text-center py-2 font-bold text-[#091831] hover:bg-[#7B9EA8] hover:text-white transition"
                    >
                        {{ $letter }}
                    </a>
                @endforeach
            </div>
        </div>
        <div class="flex-1">
            <div class="py-0">
                <div class="w-full mx-auto sm:px-6 lg:px-8">
                    @if ($message)
                        <div class="bg-red-100 text-red-700 p-3 rounded-lg border border-red-300">
                            {{ $message }}
                        </div>
                    @endif
                    @foreach ($terms as $term)
                    <a href="{{ route('term.show', $term->id_istilah) }}">
                        <div id="{{ strtoupper(substr($term->nama_istilah, 0, 1)) }}"
                        class="scroll-mt-40 bg-gray-100 shadow-[3px_3px_1px_rgba(124,164,180,2)] sm:rounded-lg border-2 border-[#7B9EA8] mb-5 hover:scale-[1.01] transition duration-200 cursor-pointer">
                            <div class="pt-3 px-5 text-sm font-semibold text-[#7B9EA8]">
                                {{ $term->kategori->nama_kategori }}
                            </div>

                            <div class="px-5 text-lg font-semibold text-[#091831]">
                                {{ $term->nama_istilah }}
                            </div>

                            <div class="pb-3 px-5 text-base text-[#7B9EA8]">
                                {{ $term->definisi }}
                            </div>
                            <div class="w-[45px] h-[30px] bg-[#7B9EA8] rounded-full flex items-center justify-center mb-3 ml-[1095px]">
                                <span class="text-xs text-white font-bold">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24">
                                        <path d="M0 0h24v24H0z" fill="none" />
                                        <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 3H7a2 2 0 0 0-2 2v15.138a.5.5 0 0 0 .748.434l5.26-3.005a2 2 0 0 1 1.984 0l5.26 3.006a.5.5 0 0 0 .748-.435V5a2 2 0 0 0-2-2m-5 4v3m0 3v-3m0 0H9m3 0h3" />
                                    </svg>
                                </span>
                            </div>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
    <div class="sticky absolute bottom-5 w-[250px] items-center text-center py-3 bg-[#091831] shadow-[0px_4px_10px_rgba(0,0,0,0.5)] text-white text-sm flex items-center justify-center rounded-full left-1/2 transform -translate-x-1/2 gap-5 px-3">
        <a href="{{ route('history') }}" class="flex flex-col items-center justify-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0z" fill="none" />
                <path fill="currentColor" d="M12 21q-3.15 0-5.575-1.912T3.275 14.2q-.1-.375.15-.687t.675-.363q.4-.05.725.15t.45.6q.6 2.25 2.475 3.675T12 19q2.925 0 4.963-2.037T19 12t-2.037-4.962T12 5q-1.725 0-3.225.8T6.25 8H8q.425 0 .713.288T9 9t-.288.713T8 10H4q-.425 0-.712-.288T3 9V5q0-.425.288-.712T4 4t.713.288T5 5v1.35q1.275-1.6 3.113-2.475T12 3q1.875 0 3.513.713t2.85 1.924t1.925 2.85T21 12t-.712 3.513t-1.925 2.85t-2.85 1.925T12 21m1-9.4l2.5 2.5q.275.275.275.7t-.275.7t-.7.275t-.7-.275l-2.8-2.8q-.15-.15-.225-.337T11 11.975V8q0-.425.288-.712T12 7t.713.288T13 8z" />
            </svg>
            <p> History </p>
        </a>
        <a href="{{ route('bookmark') }}" class="flex flex-col items-center justify-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0z" fill="none" />
                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 8h8m0 4H8m0 4h4m8-4V6a2 2 0 0 0-2-2H6a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6m6-5v3m0 3v-3m0 0h3m-3 0h-3" />
            </svg>
            <p> Bookmark </p>
        </a>
        <a href="{{ route('welcome') }}" class="flex flex-col items-center justify-center cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" width="30px" height="30px" viewBox="0 0 24 24">
                <path d="M0 0h24v24H0z" fill="none" />
                <path fill="currentColor" d="M6 19h3v-5q0-.425.288-.712T10 13h4q.425 0 .713.288T15 14v5h3v-9l-6-4.5L6 10zm-2 0v-9q0-.475.213-.9t.587-.7l6-4.5q.525-.4 1.2-.4t1.2.4l6 4.5q.375.275.588.7T20 10v9q0 .825-.588 1.413T18 21h-4q-.425 0-.712-.288T13 20v-5h-2v5q0 .425-.288.713T10 21H6q-.825 0-1.412-.587T4 19m8-6.75" />
            </svg>
            <p> Home </p>
        </a>
    </div>
</x-app-layout>
