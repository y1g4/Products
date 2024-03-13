<x-app-web-layout>

    <x-slot:title>
        My Laravel App
    </x-slot>

    <x-slot:scripts>
        <script>
            // alert('this is my script area');
        </script>
    </x-slot>

    <div class="py-5">
        <h4 class="text-center">Welcome to index page</h4>
        {{-- <x-alert-message /> --}}
    </div>

</x-app-web-layout>
