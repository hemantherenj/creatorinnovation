<a wire:navigate href={{ route('home') }} class="flex gap-2 items-center" :class="{ 'scale-100': !scrolledFromTop, 'scale-75': scrolledFromTop }">
    <img src={{ asset('images/logo.png') }}
        alt="ChitChat Logo" class="object-cover max-w-12 max-h-12 transform origin-left transition duration-200"
         />
    {{-- <img class="object-cover max-w-12 max-h-12" :class="{ 'h-10': !scrolledFromTop, 'h-8': scrolledFromTop }" src={{ asset('images/logo.png') }} alt=""> --}}
    <div>
        <div class="text-2xl font-dosis font-extrabold tracking-[.15em] text-primary">BETHESDA</div>
        <div class="text-md font-dosis font-normal tracking-[0.2em] leading-[0.6em] text-white">BIBLE COLLEGE</div>
    </div>
</a>
