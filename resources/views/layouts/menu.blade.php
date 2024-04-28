<div class="grid lg:grid-cols-12">
    <div class="h-full w-full bg-white shadow sm:flex sm:justify-center hidden">
        <div class="relative">
            <div class="flex justify-center mt-8">
                <span class="font-bold font-batik text-red-600">MENU</span>
            </div>
            @if (Auth::user()->hasRole('admin'))
            
            @else
                @if (Auth::user()->hasRole('peserta'))
                    <div class="my-5">
                        <a href="{{ route('dashboard') }}">
                            <button
                                class="h-16 w-16 border-2  {{ request()->routeIs('dashboard') ? 'border-none text-white bg-red-600 scale-100' : 'border-red-600 text-red-600 transition ease-in scale-75 hover:bg-red-600 hover:text-white hover:scale-100' }} rounded-full   flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="my-5">
                        <a href="{{ route('profile.edit') }}">
                            <button
                                class="h-16 w-16 border-2  {{ request()->routeIs('profile.edit') ? 'border-none text-white bg-red-600 scale-100' : 'border-red-600 text-red-600 transition ease-in scale-75 hover:bg-red-600 hover:text-white hover:scale-100' }} rounded-full  flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                    <div class="my-5">
                        <a href="{{ route('project') }}">
                            <button
                                class="h-16 w-16 border-2  {{ request()->routeIs('project') | request()->routeIs('proposal.edit') | request()->routeIs('proposal.member')  ? 'border-none text-white bg-red-600 scale-100' : 'border-red-600 text-red-600 transition ease-in scale-75 hover:bg-red-600 hover:text-white hover:scale-100' }} rounded-full   flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-8 h-8">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M20.25 14.15v4.25c0 1.094-.787 2.036-1.872 2.18-2.087.277-4.216.42-6.378.42s-4.291-.143-6.378-.42c-1.085-.144-1.872-1.086-1.872-2.18v-4.25m16.5 0a2.18 2.18 0 0 0 .75-1.661V8.706c0-1.081-.768-2.015-1.837-2.175a48.114 48.114 0 0 0-3.413-.387m4.5 8.006c-.194.165-.42.295-.673.38A23.978 23.978 0 0 1 12 15.75c-2.648 0-5.195-.429-7.577-1.22a2.016 2.016 0 0 1-.673-.38m0 0A2.18 2.18 0 0 1 3 12.489V8.706c0-1.081.768-2.015 1.837-2.175a48.111 48.111 0 0 1 3.413-.387m7.5 0V5.25A2.25 2.25 0 0 0 13.5 3h-3a2.25 2.25 0 0 0-2.25 2.25v.894m7.5 0a48.667 48.667 0 0 0-7.5 0M12 12.75h.008v.008H12v-.008Z" />
                                </svg>
                            </button>
                        </a>
                    </div>
                @endif

            @endif

            <div class="my-5 lg:absolute bottom-0">
                <form action="{{ route('logout') }}" method="post">
                    @csrf
                    <button type="submit"
                        class="h-16 w-16 border-2 hover:border-red-600  bg-red-600 text-white rounded-full  transition ease-in hover:bg-white hover:text-red-600 flex justify-center items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-8 h-8">
                            <path stroke-linecap="round" stroke-linejoin="round"
                                d="M8.25 9V5.25A2.25 2.25 0 0 1 10.5 3h6a2.25 2.25 0 0 1 2.25 2.25v13.5A2.25 2.25 0 0 1 16.5 21h-6a2.25 2.25 0 0 1-2.25-2.25V15m-3 0-3-3m0 0 3-3m-3 3H15" />
                        </svg>
                    </button>
                </form>
            </div>
        </div>
    </div>


    <div class="grid grid-rows-10 col-span-11 ">
        <!-- Page Heading -->
        <div class="relative">
            @if (isset($header))
                <header class="bg-white">
                    <div class="w-full py-7 px-6 sm:px-6 flex justify-between items-center">
                        {{ $header }}
                        <div class="flex gap-4">
                            <span class="text-md font-semibold text-black">{{ Auth::user()->nama }}</span>
                            <button class="text-black hover:shadow-sm hover:text-cyan-400">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </header>
            @endif
        </div>

        <!-- Page Content -->
        <main class="row-span-9 w-full h-full">
            {{ $slot }}
        </main>
    </div>

</div>
