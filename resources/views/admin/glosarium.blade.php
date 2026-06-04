<x-layouts.admin>

<style>
[x-cloak] { display: none !important; }
</style>

<div class="flex w-screen min-h-screen bg-gray-50">

    @php
        $active = request()->routeIs('admin.*');
    @endphp

    <aside class="w-[300px] bg-white border-r border-[#7B9EA8] shadow-[8px_0px_20px_-6px_rgba(0,0,0,0.15)] flex flex-col py-8">
        <div class="px-8 mb-10">
            <h1 class="text-[#7B9EA8] font-bold text-xl tracking-wide">ITpedia Admin</h1>
            <p class="text-xs text-gray-400">Control Panel</p>
        </div>

        <nav class="flex flex-col gap-2 px-4">
            <a href="{{ route('admin.dashboard') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold {{ request()->routeIs('admin.dashboard') ? 'bg-[#D6E3E8]' : 'hover:bg-[#D6E3E8]' }}">
                <div class="w-9 h-9 flex items-center justify-center rounded-lg bg-[#D6E3E8]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><path fill="currentColor" d="M4 4h7v7H4zm9 0h7v7h-7zM4 13h7v7H4zm9 0h7v7h-7z"/></svg>
                </div>
                Dashboard
            </a>

            <a href="{{ route('admin.glosarium') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold {{ request()->routeIs('admin.glosarium') ? 'bg-[#D6E3E8]' : 'hover:bg-[#D6E3E8]' }}">
                <div class="w-9 h-9 flex items-center justify-center rounded-lg bg-[#D6E3E8]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><path fill="none" stroke="currentColor" stroke-width="2" d="M4 19h16M6 17V5h12v12"/></svg>
                </div>
                Glosarium
            </a>

            <a href="{{ route('admin.publish') }}" class="flex items-center gap-3 px-4 py-3 rounded-xl font-semibold {{ request()->routeIs('admin.publish') ? 'bg-[#D6E3E8]' : 'hover:bg-[#D6E3E8]' }}">
                <div class="w-9 h-9 flex items-center justify-center rounded-lg bg-[#D6E3E8]">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" viewBox="0 0 24 24"><path fill="currentColor" d="M12 2l4 4h-3v6h-2V6H8zM5 14h14v6H5z"/></svg>
                </div>
                Publish
            </a>
        </nav>
    </aside>

    <main class="flex-1 bg-[#F7F8FA] min-h-screen">
        <div x-data="formWizard" x-cloak class="relative">

            <div x-show="toast.show" 
                x-transition:enter="transition ease-out duration-300"
                x-transition:enter-start="opacity-0 transform translate-y-2"
                x-transition:enter-end="opacity-100 transform translate-y-0"
                x-transition:leave="transition ease-in duration-200"
                x-transition:leave-start="opacity-100 transform translate-y-0"
                x-transition:leave-end="opacity-0 transform translate-y-2"
                class="fixed bottom-5 right-5 bg-[#091831] text-white px-6 py-3 rounded-xl shadow-lg z-50 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 text-green-400" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                </svg>
                <span x-text="toast.message" class="text-sm font-semibold"></span>
            </div>

            <form id="glosariumForm" method="POST" action="{{ route('term.store') }}" enctype="multipart/form-data" @keydown.enter.prevent>
                @csrf

                <div class="max-w-6xl mx-auto px-6">
                    <div class="flex justify-end gap-4 pt-6">
                        <a href="{{ route('admin.dashboard') }}" 
                        class="w-[120px] h-[40px] rounded-full border-2 flex items-center justify-center gap-2 text-[#7B9EA8] border-[#7B9EA8] hover:bg-red-500 hover:text-white hover:border-red-500 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a10 10 0 0 1 7.38 16.75M16 12l-4-4l-4 4m4 4V8m-9.5.875a10 10 0 0 0-.5 3M2.83 16a10 10 0 0 0 2.43 3.4M4.636 5.235a10 10 0 0 1 .891-.857M8.644 21.42a10 10 0 0 0 7.631-.38" />
                            </svg>
                            <span class="text-sm font-bold">Batal</span>
                        </a>

                        <button type="submit" 
                                x-show="step === 4"
                                class="w-[120px] h-[40px] rounded-full bg-[#7B9EA8] flex items-center justify-center gap-2 text-white hover:bg-[#5f8a96] transition shadow-md">
                            <svg xmlns="http://www.w3.org/2000/svg" width="1em" height="1em" viewBox="0 0 24 24">
                                <g fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2">
                                    <path d="M21.801 10A10 10 0 1 1 17 3.335" />
                                    <path d="m9 11l3 3L22 4" />
                                </g>
                            </svg>
                            <span class="text-sm font-bold">Publish</span>
                        </button>
                    </div>

                    <div class="mt-6">
                        <h1 class="text-3xl font-bold text-[#091831]">Tambah Glosarium</h1>
                        <p class="text-[#7B9EA8] mt-2">Isi semua informasi istilah dengan lengkap dan akurat sebelum dipublishkan.</p>
                    </div>

                    <div class="mt-8 w-full bg-white rounded-xl p-4 shadow-sm border border-gray-100">
                        <div class="flex flex-col md:flex-row items-start md:items-center justify-between gap-4">
                            <div class="flex items-center gap-2">
                                <div class="w-6 h-6 rounded-full flex items-center justify-center text-xs text-white font-bold" :class="step >= 1 ? 'bg-green-500' : 'bg-gray-300'">1</div>
                                <span class="text-sm font-medium" :class="step === 1 ? 'text-[#091831] font-bold' : 'text-gray-500'">Identitas Istilah</span>
                            </div>
                            <div class="hidden md:block flex-1 h-[2px] bg-gray-200 mx-2"></div>
                            <div class="flex items-center gap-2">
                                <div class="w-6 h-6 rounded-full flex items-center justify-center text-xs text-white font-bold" :class="step >= 2 ? 'bg-green-500' : 'bg-gray-300'">2</div>
                                <span class="text-sm font-medium" :class="step === 2 ? 'text-[#091831] font-bold' : 'text-gray-500'">Definisi & Penjelasan</span>
                            </div>
                            <div class="hidden md:block flex-1 h-[2px] bg-gray-200 mx-2"></div>
                            <div class="flex items-center gap-2">
                                <div class="w-6 h-6 rounded-full flex items-center justify-center text-xs text-white font-bold" :class="step >= 3 ? 'bg-green-500' : 'bg-gray-300'">3</div>
                                <span class="text-sm font-medium" :class="step === 3 ? 'text-[#091831] font-bold' : 'text-gray-500'">Klasifikasi</span>
                            </div>
                            <div class="hidden md:block flex-1 h-[2px] bg-gray-200 mx-2"></div>
                            <div class="flex items-center gap-2">
                                <div class="w-6 h-6 rounded-full flex items-center justify-center text-xs text-white font-bold" :class="step >= 4 ? 'bg-green-500' : 'bg-gray-300'">4</div>
                                <span class="text-sm font-medium" :class="step === 4 ? 'text-[#091831] font-bold' : 'text-gray-500'">Review & Publish</span>
                            </div>
                        </div>
                    </div>

                    <div x-show="step === 1" x-transition>
                        <div class="mt-6 w-full bg-[#D6E3E8] rounded-xl p-6 shadow-inner">
                            <p class="text-xl text-[#091831] font-bold">Identitas Istilah</p>
                            <div class="mt-4 w-full h-1 bg-[#7B9EA8] rounded-full"></div>
                            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-lg font-bold text-[#023859]">Nama Istilah <span class="text-red-500">*</span></label>
                                    <p class="text-xs text-gray-500 mb-2">*Tulis nama istilah dengan benar dan lengkap.</p>
                                    <input type="text" x-model="form.nama_istilah" name="nama_istilah" value="{{ $term->nama_istilah ?? '' }}" class="w-full rounded-lg border border-gray-300 p-3 focus:outline-none">
                                </div>
                                <div>
                                    <label class="block text-lg font-bold text-[#023859]">Pelafalan</label>
                                    <p class="text-xs text-gray-500 mb-2">*Tulis pelafalan istilah.</p>
                                    <input type="text" x-model="form.pelafalan" name="pelafalan" value="{{ $term->pelafalan ?? '' }}" class="w-full rounded-lg border border-gray-300 p-3 focus:outline-none">
                                </div>
                                <div>
                                    <label class="block text-lg font-bold text-[#023859]">Singkatan / Akronim</label>
                                    <p class="text-xs text-gray-500 mb-2">*Jika tidak ada, boleh dikosongkan.</p>
                                    <input type="text" x-model="form.singkatan" name="singkatan" value="{{ $term->singkatan ?? '' }}" class="w-full rounded-lg border border-gray-300 p-3 focus:outline-none">
                                </div>
                                <div>
                                    <label class="block text-lg font-bold text-[#023859]">Asal Bahasa</label>
                                    <p class="text-xs text-gray-500 mb-2">*Misal: Inggris, Latin.</p>
                                    <input type="text" x-model="form.asal_bahasa" name="asal_bahasa" value="{{ $term->asal_bahasa ?? '' }}" class="w-full rounded-lg border border-gray-300 p-3 focus:outline-none">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end mt-6 mb-20">
                            <button type="button" @click="if(validateStep1()) step = 2" class="px-6 py-3 bg-[#7B9EA8] text-white rounded-full font-bold shadow-md">NEXT</button>
                        </div>
                    </div>

                    <div x-show="step === 2" x-transition>
                        <div class="mt-6 w-full bg-[#D6E3E8] rounded-xl p-6 shadow-inner">
                            <p class="text-xl text-[#091831] font-bold">Definisi & Penjelasan</p>
                            <div class="mt-4 w-full h-1 bg-[#7B9EA8] rounded-full"></div>
                            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div class="flex flex-col gap-6">
                                    <div>
                                        <label class="block text-lg font-bold text-[#023859]">Definisi Singkat <span class="text-red-500">*</span></label>
                                        <p class="text-xs text-gray-500 mb-2">*Tulis definisi singkat dari istilah.</p>
                                        <input type="text" x-model="form.definisi" name="definisi" value="{{ $term->definisi ?? '' }}" class="w-full rounded-lg border border-gray-300 p-3 focus:outline-none">
                                    </div>
                                    <div>
                                        <label class="block text-lg font-bold text-[#023859]">Penjelasan Lengkap <span class="text-red-500">*</span></label>
                                        <p class="text-xs text-gray-500 mb-2">*Tulis penjelasan lengkap, langkah-langkah, fungsi, dll.</p>
                                        <textarea x-model="form.penjelasan" name="penjelasan" rows="4" value="{{ $term->penjelasan ?? '' }}" class="w-full rounded-lg border border-gray-300 p-3 focus:outline-none"></textarea>
                                    </div>
                                </div>
                                <div>
                                    <label class="block text-lg font-bold text-[#023859]">Gambar / Ilustrasi</label>
                                    <p class="text-xs text-gray-500 mb-2">*Unggah gambar yang relevan untuk memperjelas istilah.</p>
                                    <input type="file" name="gambar" @change="form.gambar = $event.target.files[0] ? $event.target.files[0].name : null" value="{{ $term->gambar ?? '' }}" class="w-full bg-white rounded-lg border border-gray-300 p-3">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between mt-6 mb-20">
                            <button type="button" @click="step = 1" class="px-6 py-3 border-2 border-[#7B9EA8] text-[#7B9EA8] font-bold rounded-full">BACK</button>
                            <button type="button" @click="if(validateStep2()) step = 3" class="px-6 py-3 bg-[#7B9EA8] text-white font-bold rounded-full">NEXT</button>
                        </div>
                    </div>

                    <div x-show="step === 3" x-transition>
                        <div class="mt-6 w-full bg-[#D6E3E8] rounded-xl p-6 shadow-inner">
                            <p class="text-xl text-[#091831] font-bold">Klasifikasi Istilah</p>
                            <div class="mt-4 w-full h-1 bg-[#7B9EA8] rounded-full"></div>
                            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-6">
                                <div>
                                    <label class="block text-lg font-bold text-[#023859]">Kategori Istilah <span class="text-red-500">*</span></label>
                                    <p class="text-xs text-gray-500 mb-2">*Pilih kategori yang paling sesuai dengan istilah.</p>
                                    <select name="id_kategori" x-model="form.id_kategori" value="{{ $term->id_kategori ?? '' }}" class="w-full rounded-lg border border-gray-300 p-3 focus:outline-none">
                                        <option value="">-- Pilih Kategori --</option>
                                        @foreach($categories as $cat)
                                            <option value="{{ $cat->id_kategori }}">{{ $cat->nama_kategori }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div>
                                    <label class="block text-lg font-bold text-[#023859]">Subkategori Istilah</label>
                                    <p class="text-xs text-gray-500 mb-2">*Tulis subkategori spesifik jika ada.</p>
                                    <input type="text" x-model="form.sub_kategori" name="sub_kategori" value="{{ $term->sub_kategori ?? '' }}" class="w-full rounded-lg border border-gray-300 p-3 focus:outline-none">
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-between mt-6 mb-20">
                            <button type="button" @click="step = 2" class="px-6 py-3 border-2 border-[#7B9EA8] text-[#7B9EA8] font-bold rounded-full">BACK</button>
                            <button type="button" @click="if(validateStep3()) step = 4" class="px-6 py-3 bg-[#7B9EA8] text-white font-bold rounded-full">NEXT</button>
                        </div>
                    </div>

                    <div x-show="step === 4" x-transition>
                        <div class="mt-6 w-full bg-[#D6E3E8] rounded-xl p-6 shadow-inner">
                            <p class="text-xl font-bold text-[#091831]">Review Data</p>
                            <div class="mt-4 w-full h-1 bg-[#7B9EA8] rounded-full"></div>
                            <div class="mt-6 bg-white rounded-xl p-6 grid grid-cols-1 md:grid-cols-2 gap-4 text-sm text-[#091831]">
                                <div><strong>Nama Istilah:</strong> <span x-text="form.nama_istilah || '-'"></span></div>
                                <div><strong>Pelafalan:</strong> <span x-text="form.pelafalan || '-'"></span></div>
                                <div><strong>Singkatan:</strong> <span x-text="form.singkatan || '-'"></span></div>
                                <div><strong>Asal Bahasa:</strong> <span x-text="form.asal_bahasa || '-'"></span></div>
                                <div class="md:col-span-2"><strong>Definisi Singkat:</strong> <span x-text="form.definisi || '-'"></span></div>
                                <div class="md:col-span-2"><strong>Penjelasan Lengkap:</strong> <span x-text="form.penjelasan || '-'"></span></div>
                                <div><strong>ID Kategori Utama:</strong> <span x-text="form.id_kategori || '-'"></span></div>
                                <div><strong>Subkategori:</strong> <span x-text="form.sub_kategori || '-'"></span></div>
                                <div class="md:col-span-2"><strong>File Gambar:</strong> <span class="text-xs italic text-gray-500" x-text="form.gambar || 'Tidak ada gambar dipilih'"></span></div>
                            </div>
                        </div>
                        <div class="flex justify-between mt-6 mb-20">
                            <button type="button" @click="step = 3" class="px-6 py-3 border-2 border-[#7B9EA8] text-[#7B9EA8] font-bold rounded-full">BACK</button>
                            <button type="submit" class="px-8 py-3 bg-green-600 text-white font-bold rounded-full hover:bg-green-700 transition shadow-md flex items-center gap-2">
                                SIMPAN & PUBLISH
                            </button>
                        </div>
                    </div>

                </div>
            </form>
        </div>
    </main>
</div>

<script>
    const termData = @json($term ?? null);
    document.addEventListener('alpine:init', () => {
        Alpine.data('formWizard', () => ({
            step: 1,
            form: {
                nama_istilah: termData?.nama_istilah || '',
                definisi: termData?.definisi || '',
                penjelasan: termData?.penjelasan || '',
                id_kategori: termData?.id_kategori || '',
                pelafalan: termData?.pelafalan || '',
                singkatan: termData?.singkatan || '',
                asal_bahasa: termData?.asal_bahasa || '',
                sub_kategori: termData?.sub_kategori || '',
                gambar: termData?.gambar || null,
            },
            errors: {},
            toast: {
                show: false,
                message: ''
            },
            showToast(msg) {
                this.toast.message = msg;
                this.toast.show = true;
                setTimeout(() => {
                    this.toast.show = false;
                }, 3000);
            },
            init() {
                // Berjalan otomatis jika Laravel mengirim flash message sukses
                const successMessage = "{{ session('success') }}";
                if (successMessage) {
                    this.showToast(successMessage);
                }
            },
            validateStep1() {
                this.errors = {};
                if (!this.form.nama_istilah) {
                    this.showToast('Nama Istilah wajib diisi');
                    return false;
                }
                return true;
            },
            validateStep3() {
                if (!this.form.id_kategori) {
                    this.showToast('Kategori wajib dipilih')
                    return false
                }
                return true
            },
            validateStep2() {
                this.errors = {};
                if (!this.form.definisi || !this.form.penjelasan) {
                    this.showToast('Definisi & Penjelasan wajib diisi');
                    return false;
                }
                return true;
            },
        }));
    });
</script>
</x-layouts.admin>