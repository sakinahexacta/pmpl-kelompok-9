<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex w-full items-center justify-center px-4 py-2 bg-[#023859] border border-transparent rounded-full font-extrabold text-lg text-white uppercase tracking-widest hover:bg-[#023859]/90 focus:bg-[#023859]/90 active:bg-[#023859]/90 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>
