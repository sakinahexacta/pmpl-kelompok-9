<x-layouts.admin>
<div class="flex w-screen min-h-screen bg-gray-50">

    @php
        $active = request()->routeIs('admin.*');
    @endphp

    <!-- SIDEBAR -->
    <aside class="w-[300px] bg-white border-r border-[#7B9EA8]
        shadow-[8px_0px_20px_-6px_rgba(0,0,0,0.15)]
        flex flex-col py-8">

        <!-- BRAND -->
        <div class="px-8 mb-10">
            <h1 class="text-[#7B9EA8] font-bold text-xl tracking-wide">
                ITpedia Admin
            </h1>
            <p class="text-xs text-gray-400">
                Control Panel
            </p>
        </div>

        <!-- MENU -->
        <nav class="flex flex-col gap-2 px-4">

            <!-- DASHBOARD -->
            <a href="{{ route('admin.dashboard') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold
                {{ request()->routeIs('admin.dashboard') ? 'bg-[#D6E3E8]' : 'hover:bg-[#D6E3E8]' }}">

                    <div class="w-9 h-9 flex items-center justify-center rounded-lg bg-[#D6E3E8]">
                        <!-- icon -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M4 4h7v7H4zm9 0h7v7h-7zM4 13h7v7H4zm9 0h7v7h-7z"/>
                        </svg>
                    </div>

                    Dashboard
            </a>

            <!-- GLOSARIUM -->
            <a href="{{ route('admin.glosarium') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold
                {{ request()->routeIs('admin.glosarium') ? 'bg-[#D6E3E8]' : 'hover:bg-[#D6E3E8]' }}">
                <div class="w-9 h-9 flex items-center justify-center rounded-lg bg-[#D6E3E8]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                        <path fill="none" stroke="currentColor" stroke-width="2"
                              d="M4 19h16M6 17V5h12v12"/>
                    </svg>
                </div>

                Glosarium
            </a>

            <!-- PUBLISH -->
            <a href="{{ route('admin.publish') }}"
                class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold
                {{ request()->routeIs('admin.publish') ? 'bg-[#D6E3E8]' : 'hover:bg-[#D6E3E8]' }}">

                <div class="w-9 h-9 flex items-center justify-center rounded-lg bg-[#D6E3E8]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24">
                        <path fill="currentColor"
                              d="M12 2l4 4h-3v6h-2V6H8zM5 14h14v6H5z"/>
                    </svg>
                </div>

                Publish
            </a>
        </nav>

    </aside>


    <!-- CONTENT -->
    <main class="flex-1 p-6">
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-[#091831]">
                Publish
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                Semua glosarium yang ditambahkan di IT Pedia tersimpan di sini 
            </p>
        </div>
        <!-- HEADER -->
        <div class="mt-6 mr-6">
            <div class="grid gap-4">
                @forelse($terms as $term)
                <div class="bg-[#023859] rounded-xl shadow p-4 border">

                    <span class="inline-flex items-center px-3 py-1 rounded-full text-gray-400 border-2 border-gray-400 text-xs font-semibold">
                        {{ $term->kategori_utama }}
                    </span>

                    <h3 class="font-semibold text-lg text-white mt-3">
                        {{ $term->nama_istilah }}
                    </h3>

                    <p class="text-gray-200 mt-2">
                        {{ Str::limit($term->definisi, 120) }}
                    </p>

                    <!-- Tombol -->
                    <div class="flex justify-end gap-2 mt-4">

                        <a href="{{ route('term.edit', $term->id_istilah) }}"
                        class="px-3 py-2 bg-[#7B9EA8] text-white hover:bg-[#D6E3E8] hover:text-[#7B9EA8] rounded-lg text-sm font-semibold transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24">
                                <path d="M0 0h24v24H0z" fill="none" />
                                <path fill="currentColor" d="m12.9 6.855l4.242 4.242l-9.9 9.9H3v-4.243zm1.414-1.415l2.121-2.121a1 1 0 0 1 1.414 0l2.829 2.828a1 1 0 0 1 0 1.415l-2.122 2.121z" />
                            </svg>
                        </a>

                        <form action="{{ route('term.destroy', $term->id_istilah) }}"
                            method="POST"
                            onsubmit="return confirm('Yakin ingin menghapus istilah ini?')">

                            @csrf
                            @method('DELETE')

                            <button type="submit"
                                    class="px-3 py-2 bg-[#7B9EA8] text-white hover:bg-[#D6E3E8] hover:text-[#7B9EA8] rounded-lg text-sm font-semibold transition">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20px" height="20px" viewBox="0 0 24 24">
                                    <path d="M0 0h24v24H0z" fill="none"/>
                                    <path fill="currentColor" d="M19 4h-3.5l-1-1h-5l-1 1H5v2h14M6 19a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V7H6z" />
                                </svg>
                            </button>

                        </form>

                    </div>

                </div>
                @empty
                    <div class="bg-white rounded-xl p-6 text-center text-gray-500">
                        Belum ada istilah yang dipublish.
                    </div>
                @endforelse

            </div>
        </div>
     </main>

</div>
</x-layouts.admin>