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
        <!-- HEADER -->
        <div class="mb-8">
            <h2 class="text-2xl font-bold text-[#091831]">
                Dashboard Overview
            </h2>
            <p class="text-sm text-gray-500 mt-1">
                Selamat datang kembali di panel admin ITpedia
            </p>
        </div>

        <!-- STATS CARDS -->
       <div class="grid grid-cols-3 gap-5 mb-8">

            <div class="bg-white rounded-2xl p-6 shadow-sm border hover:shadow-md transition">
                <p class="text-sm text-gray-500">Total Istilah</p>
                <h3 class="text-3xl font-bold text-[#091831]">{{ $totalTerms }}</h3>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border hover:shadow-md transition">
                <p class="text-sm text-gray-500">Total Kategori</p>
                <h3 class="text-3xl font-bold text-[#091831]">{{ $totalCategories }}</h3>
            </div>

            <div class="bg-white rounded-2xl p-6 shadow-sm border hover:shadow-md transition">
                <p class="text-sm text-gray-500">History Search</p>
                <h3 class="text-3xl font-bold text-[#091831]">{{ $totalHistory }}</h3>
            </div>

        </div>

        <!-- ACTIVITY / HISTORY PREVIEW -->
        <div class="bg-white rounded-2xl border p-6">

            <h3 class="text-lg font-bold mb-4 text-[#091831]">
                Aktivitas Terbaru
            </h3>

            <div class="space-y-3">

                @foreach($histories as $history)
                <div class="flex justify-between items-center bg-gray-50 p-3 rounded-xl hover:bg-gray-100 transition">

                    <p class="text-sm text-gray-700">
                        User mencari <span class="font-semibold">"{{ $history->term->nama_istilah ?? '-' }}"</span>
                    </p>

                    <span class="text-xs text-gray-400">
                        {{ $history->created_at->diffForHumans() }}
                    </span>

                </div>
                @endforeach

            </div>

        </div>
    </main>

</div>
</x-layouts.admin>