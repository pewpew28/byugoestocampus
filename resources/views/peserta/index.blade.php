<x-app-layout>
    <x-slot name="header">
        @yield('judul')
        
    </x-slot>

    <div class="w-full h-full">
        @yield('content')
    </div>
</x-app-layout>