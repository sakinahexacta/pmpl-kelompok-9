<x-layouts.profile>
    <div class="min-h-screen bg-gray-100 p-8 flex justify-center items-center">
        <div class="w-full max-w-6xl bg-white rounded-[30px] shadow-xl overflow-hidden flex flex-col md:flex-row min-h-[600px]">
            
            <div class="w-full md:w-1/3 bg-[#cbe7f5] p-8 flex flex-col justify-between items-center text-center relative">
                
                <div class="w-full flex flex-col items-center mt-6">
                    <div class="w-32 h-32 rounded-full border-4 border-white bg-white shadow-md overflow-hidden mb-4 flex items-center justify-center">
                        <img src="https://api.dicebear.com/7.x/adventurer/svg?seed=Kiansi" alt="Avatar" class="w-full h-full object-cover">
                    </div>
                    <h2 class="text-[#091831] text-2xl font-bold tracking-wide">
                        {{ auth()->user()->name ?? 'Kiansi Manopo' }}
                    </h2>
                    <p class="text-blue-500/80 text-xs font-semibold mt-1">
                        Akun Anda
                    </p>
                </div>

                <div class="w-full my-8 space-y-2 text-left px-4">
                    <p class="text-xs font-bold text-gray-400 tracking-wider uppercase px-3 mb-2">Akun Saya</p>
                    
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl bg-white/50 text-[#023859] font-semibold text-sm transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                        </svg>
                        Profil
                    </a>

                    <a href="#" class="flex items-center justify-between px-4 py-3 rounded-xl text-gray-600 hover:bg-white/30 font-semibold text-sm transition">
                        <div class="flex items-center gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M5 5a2 2 0 012-2h10a2 2 0 012 2v16l-7-3.5L5 21V5z" />
                            </svg>
                            Bookmark
                        </div>
                        <span class="bg-blue-100 text-[#023859] text-xs font-bold px-2 py-0.5 rounded-full shadow-sm">6</span>
                    </a>

                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-white/30 font-semibold text-sm transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                        </svg>
                        Riwayat pencarian
                    </a>

                    <p class="text-xs font-bold text-gray-400 tracking-wider uppercase px-3 pt-4 mb-2">Pengaturan</p>
                    
                    <a href="#" class="flex items-center gap-3 px-4 py-3 rounded-xl text-gray-600 hover:bg-white/30 font-semibold text-sm transition">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        Riwayat aktivitas
                    </a>
                </div>

                <div class="w-full px-4 pt-4 border-t border-blue-900/10 text-left">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="flex items-center gap-3 px-4 py-2 w-full text-red-600 font-semibold text-sm hover:text-red-800 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                            </svg>
                            Keluar
                        </button>
                    </form>
                </div>
            </div>

            <div class="flex-1 p-12 bg-white flex flex-col justify-between">
                
                <div>
                    <div class="mb-8">
                        <h1 class="text-[#023859] text-4xl font-bold tracking-tight mb-2">Profil Akun</h1>
                        <p class="text-gray-500 font-normal text-base">Kelola informasi pribadi dan preferensi akun Anda</p>
                    </div>

                    <div class="bg-[#ebf5fa] border border-blue-100 rounded-2xl p-8 relative shadow-inner">
                        <button class="absolute top-6 right-8 text-[#023859] hover:text-blue-800 text-sm font-bold tracking-wide transition">
                            Ubah
                        </button>
                        
                        <h3 class="text-gray-700 font-bold text-base mb-6 tracking-wide">Informasi Pribadi</h3>

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-x-8 gap-y-5">
                            
                            <div class="space-y-1.5">
                                <label class="text-[#023859] text-xs font-bold tracking-wider block uppercase">Nama</label>
                                <input type="text" readonly value="{{ auth()->user()->name ?? 'Kiansi Manopo' }}" 
                                    class="w-full bg-white text-gray-700 font-semibold px-4 py-2.5 rounded-xl border-0 shadow-sm focus:ring-2 focus:ring-blue-400 text-sm">
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-[#023859] text-xs font-bold tracking-wider block uppercase">No. Telepon</label>
                                <input type="text" readonly value="{{ auth()->user()->phone ?? '085856828503' }}" 
                                    class="w-full bg-white text-gray-700 font-semibold px-4 py-2.5 rounded-xl border-0 shadow-sm focus:ring-2 focus:ring-blue-400 text-sm">
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-[#023859] text-xs font-bold tracking-wider block uppercase">Username</label>
                                <div class="relative">
                                    <input type="text" readonly value="{{ auth()->user()->username ?? '@kiansi_m' }}" 
                                        class="w-full bg-white text-gray-700 font-semibold px-4 py-2.5 rounded-xl border-0 shadow-sm text-sm">
                                    <span class="text-[10px] text-gray-400 block mt-1 pl-1 font-normal">kombinasi huruf, angka, atau simbol*</span>
                                </div>
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-[#023859] text-xs font-bold tracking-wider block uppercase">Alamat</label>
                                <input type="text" readonly value="{{ auth()->user()->address ?? 'Jl. Arjuna No.123, Malang' }}" 
                                    class="w-full bg-white text-gray-700 font-semibold px-4 py-2.5 rounded-xl border-0 shadow-sm text-sm">
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-[#023859] text-xs font-bold tracking-wider block uppercase">Email</label>
                                <input type="email" readonly value="{{ auth()->user()->email ?? 'kiansi@gmail.com' }}" 
                                    class="w-full bg-white text-gray-700 font-semibold px-4 py-2.5 rounded-xl border-0 shadow-sm text-sm">
                            </div>

                            <div class="space-y-1.5">
                                <label class="text-[#023859] text-xs font-bold tracking-wider block uppercase">Bergabung</label>
                                <input type="text" readonly value="{{ auth()->user()->created_at ? auth()->user()->created_at->translatedFormat('d F Y') : '20 April 2026' }}" 
                                    class="w-full bg-white text-gray-500 font-semibold px-4 py-2.5 rounded-xl border-0 shadow-sm text-sm">
                            </div>

                            <div class="space-y-1.5 md:col-span-1 relative">
                                <label class="text-[#023859] text-xs font-bold tracking-wider block uppercase">Password</label>
                                <div class="relative flex items-center">
                                    <input type="password" readonly value="kiansi123" 
                                        class="w-full bg-white text-gray-700 font-semibold px-4 py-2.5 rounded-xl border-0 shadow-sm text-sm pr-10">
                                    <button type="button" class="absolute right-3 text-[#023859] hover:text-blue-800">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z" />
                                        </svg>
                                    </button>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>
</x-layouts.profile>