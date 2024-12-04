<header
    class="
            fixed
            w-full
            bg-[rgba(0,0,0,0.6)]
            flex
            justify-between
            items-center
            px-6
            md:px-28
            transition-all
            duration-200
            h-20
         "
    :class="{ 'h-20': !scrolledFromTop, 'h-14': scrolledFromTop, 'bg-gray-600': scrolledFromTop, 'z-50': scrolledFromTop, }">
    {{-- <a href="#"> --}}
    <x-common.logo />
    {{-- <img
               src="https://res.cloudinary.com/thirus/image/upload/v1631988912/logos/chitchat-logo_pkpwwu.png"
               alt="ChitChat Logo"
               class="h-12 transform origin-left transition duration-200"
               :class="{'scale-100': !scrolledFromTop, 'scale-75': scrolledFromTop}"
            /> --}}
    {{-- </a> --}}
    <nav>
        <button class="md:hidden" @click="navOpen = !navOpen">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 text-white" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
        <ul class="
                  fixed
                  left-0
                  right-0
                  min-h-screen
                  px-4
                  pt-8
                  space-y-2
                  bg-primary
                  md:bg-transparent
                  text-white
                  transform
                  transition
                  duration-300
                  translate-x-full
                  md:relative md:flex md:space-x-10 md:min-h-0 md:px-0 md:py-0 md:space-y-0 md:translate-x-0
               "
            :class="{ 'translate-x-full': !navOpen }" :class="{ 'translate-x-0': navOpen }">
            <li class="">
                <a wire:navigate href="{{ route('home') }}" @click="navOpen = false">Home</a>
            </li>
            <li class="">
                <a wire:navigate href="{{ route('about') }}" @click="navOpen = false">About</a>
            </li>
            <li>
                <a wire:navigate href="{{ route('we-believe') }}" @click="navOpen = false">We Believe</a>
            </li>
            <li>
                <a wire:navigate href={{ route('contact') }} @click="navOpen = false">Contact</a>
            </li>
            <x-common.mainBtn title="Application" link="{{ route('application') }}" />
        </ul>
    </nav>


</header>
