<li class="mt-0.5 w-full">
    <a class="py-2.7 {{ $currentRoute == $route ? 'bg-white shadow-soft-xl' : '' }} text-sm ease-nav-brand my-0 mx-4 flex items-center whitespace-nowrap rounded-lg  px-4 font-semibold text-slate-700 transition-colors"
        href="{{ route($route) }}">
        <div
            class="{{ $currentRoute == $route ? 'bg-gradient-to-tl from-red-500 to-pink-500' : '' }} shadow-soft-2xl mr-2 flex h-8 w-8 items-center justify-center rounded-lg bg-white bg-center stroke-0 text-center xl:p-2.5">
            {{ $slot }}
        </div>
        <span class="ml-1 duration-300 opacity-100 pointer-events-none ease-soft">{{ $label }}</span>
    </a>
</li>
