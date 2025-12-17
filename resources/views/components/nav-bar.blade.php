@php
    $menus = [
        ['name' => 'Home', 'href' => 'home'],
        ['name' => 'About', 'href' => 'about'],
        ['name' => 'Blogs', 'href' => 'blogs'],
        ['name' => 'Contacts', 'href' => 'contacts'],
    ];
@endphp

<header class="min-h-full">
    <nav class="bg-gray-800">
        <div class="px-4 mx-auto max-w-7xl sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-16">
                <div class="flex items-center">
                    <div class="shrink-0">
                        <img src="https://tailwindcss.com/plus-assets/img/logos/mark.svg?color=indigo&shade=500"
                            alt="Your Company" class="size-8" />
                    </div>
                    <div class="hidden md:block">
                        <div class="flex items-baseline ml-10 space-x-4">
                            <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                            @foreach ($menus as $menu)
                                <x-nav-link href="{{ $menu['href'] }}" :active="request()->is(ltrim($menu['href'], '/home'))">
                                    {{ $menu['name'] }}
                                </x-nav-link>
                            @endforeach

                        </div>
                    </div>
                </div>
                <div class="hidden md:block">
                    <div class="flex items-center ml-4 md:ml-6">
                        <button type="button"
                            class="relative p-1 text-gray-400 rounded-full hover:text-white focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                            <span class="absolute -inset-1.5"></span>
                            <span class="sr-only">View notifications</span>
                            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                                data-slot="icon" aria-hidden="true" class="size-6">
                                <path
                                    d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                                    stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </button>

                        <!-- Profile dropdown -->
                        <el-dropdown class="relative ml-3">
                            <button
                                class="relative flex items-center max-w-xs rounded-full focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                                <span class="absolute -inset-1.5"></span>
                                <span class="sr-only">Open user menu</span>
                                <img src="{{ asset('storage/profile.jpeg') }}" alt=""
                                    class="rounded-full size-8 outline outline-1 -outline-offset-1 outline-white/10" />
                            </button>

                            <el-menu anchor="bottom end" popover
                                class="m-0 w-48 origin-top-right rounded-md bg-gray-800 p-0 py-1 outline outline-1 -outline-offset-1 outline-white/10 transition [--anchor-gap:theme(spacing.2)] [transition-behavior:allow-discrete] data-[closed]:scale-95 data-[closed]:transform data-[closed]:opacity-0 data-[enter]:duration-100 data-[leave]:duration-75 data-[enter]:ease-out data-[leave]:ease-in">
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-none">Your
                                    profile</a>
                                <a href="#"
                                    class="block px-4 py-2 text-sm text-gray-300 focus:bg-white/5 focus:outline-none">Settings</a>

                                <button type="submit" onclick="document.getElementById('logoutDesk').showModal()"
                                    class="block px-3 py-2 text-sm text-red-600 focus:bg-white/5 focus:outline-none">Sign
                                    Out</button>


                            </el-menu>
                        </el-dropdown>
                        {{-- Pop Up Confirm LogOut --}}
                        <x-article.pop-up-modal id="logoutDesk" title="Yakin mau logout"
                            subtitle="Kamu akan keluar dari akun ini." action="{{ route('logout') }}" method="POST"
                            confirm-text="Gua mau keluar" cancel-text="Ngg jadi ah" />
                    </div>
                </div>
                <div class="flex -mr-2 md:hidden">
                    <!-- Mobile menu button -->
                    <button type="button" command="--toggle" commandfor="mobile-menu"
                        class="relative inline-flex items-center p-2 text-gray-400 rounded-md justify-normaltify-center cur hover:bg-white/5 hover:text-white focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                        <span class="absolute -inset-0.5"></span>
                        <span class="sr-only">Open main menu</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6 [[aria-expanded='true']_&]:hidden">
                            <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round"
                                stroke-linejoin="round" />
                        </svg>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6 [&:not([aria-expanded='true']_*)]:hidden">
                            <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
            </div>
        </div>

        <el-disclosure id="mobile-menu" hidden class="md:hidden [&:not([hidden])]:block">
            <div class="px-2 pt-2 pb-3 space-y-1 sm:px-3">
                <!-- Current: "bg-gray-950/50 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                @foreach ($menus as $menu)
                    <x-nav-link-mobile href="{{ $menu['href'] }}" :active="request()->is(ltrim($menu['href'], 'home'))">
                        {{ $menu['name'] }}
                    </x-nav-link-mobile>
                @endforeach
            </div>
            <div class="pt-4 pb-3 border-t border-white/10">
                <div class="flex items-center px-5">
                    <div class="shrink-0">
                        <img src="{{ asset('storage/profile.jpeg') }}" alt=""
                            class="rounded-full size-10 outline outline-1 -outline-offset-1 outline-white/10" />
                    </div>
                    <div class="ml-3">
                        <div class="font-medium text-white text-base/5">Tom Cook</div>
                        <div class="text-sm font-medium text-gray-400">tom@example.com</div>
                    </div>
                    <button type="button"
                        class="relative p-1 ml-auto text-gray-400 rounded-full shrink-0 hover:text-white focus:outline focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">View notifications</span>
                        <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5"
                            data-slot="icon" aria-hidden="true" class="size-6">
                            <path
                                d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0"
                                stroke-linecap="round" stroke-linejoin="round" />
                        </svg>
                    </button>
                </div>
                <div class="px-2 mt-3 space-y-1">
                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-white/5 hover:text-white">Your
                        profile</a>
                    <a href="#"
                        class="block px-3 py-2 text-base font-medium text-gray-400 rounded-md hover:bg-white/5 hover:text-white">Settings</a>

                    <button type="submit" onclick="document.getElementById('logoutModal').showModal()"
                        class="block px-3 py-2 text-sm text-red-600 focus:bg-white/5 focus:outline-none">Sign
                        Out</button>

                </div>
            </div>
        </el-disclosure>
    </nav>
    <x-article.pop-up-modal id="logoutModal" title="Yakin mau logout"
        subtitle="Kamu akan keluar dari
                        akun ini." action="{{ route('logout') }}"
        method="POST" confirm-text="Gua mau keluar" cancel-text="Ngg jadi ah" />
</header>
