<button {{ $attributes->merge(['type' => 'submit', 'class' => 'w-full relative inline-flex items-center justify-center px-6 py-2.5 rounded-md text-base bg-primary text-white capitalize transition-all duration-200 hover:bg-primary-600 font-medium']) }}>
    {{ $slot }}                                                
</button>
