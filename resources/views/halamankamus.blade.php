<x-app-layout>
    <div class="w-full h-16 flex">
        <div class="bg-transparent w-[150px] h-[45px] rounded-full mx-10 my-5 border-[#091831] border-2 hover:bg-[#D6E3E8] hover:border-none active:bg-[#7B9EA8] transition duration-300">
            <a href="{{ route('welcome') }}" class="flex items-center justify-center h-full text-[#091831] font-bold">
                Kembali
            </a>
        </div>
    </div>

    <div class="py-12">
        <div class="max-full mx-auto sm:px-6 lg:px-8">
            <div class="bg-transparent overflow-hidden shadow-sm sm:rounded-lg border-2 border-[#7B9EA8]">
                <div class="pt-3 px-5 text-lg font-semibold text-gray-900">
                    {{ __("hai!") }}
                </div>
                <div class="pb-3 px-5 text-base text-gray-900">
                    {{ __("hai!") }}
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
