<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>History</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100">
    <div class="w-full h-16 bg-[#7B9EA8] text-white text-2xl font-bold flex items-center px-10">
        <p
            class="text-4xl font-bold text-white tracking-widest leading-normal"
        > 
            itpedia
        </p>

    <div x-data="{ open: false }" class="relative flex justify-end items-center ml-auto">

        <button
            @click="open = !open"
            class="flex items-center gap-2 bg-white w-[100px] h-[30px] text-sm text-[#091831] font-bold px-4 py-2 rounded-lg"
        >
            {{ Auth::user()->username }}

            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/>
            </svg>
        </button>

        <div x-show="open" @click.outside="open = false"
            class="absolute right-0 mt-20 bg-white w-[140px] rounded-lg shadow-lg overflow-hidden z-50"
        >

            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <button
                    type="submit"
                    class="w-full text-left px-4 py-2 text-sm text-red-500 hover:bg-gray-100 transition"
                >
                    Logout
                </button>

            </form>

        </div>
    </div>
    </div>
    

    {{ $slot }}

</body>
</html>