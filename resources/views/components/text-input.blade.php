@props(['disabled' => false])

<input @disabled($disabled) {{ $attributes->merge(['class' => 'border-[3px] border-[#7CA4B4] focus:border-[#023859] focus:ring-blue-400 focus:bg-gray-100 rounded-full shadow-sm']) }}>
