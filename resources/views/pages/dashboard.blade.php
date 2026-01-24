<x-layout>


    <x-slot:title>
        Dashboard
    </x-slot>


    <h1 class="font-bold text-4xl">Dashboard Page</h1>


    <div class="mt-4">
        @if(session('username'))
            Hi {{ session('username') }}
        @endif

        <p>You are currently logged in</p>
    </div>


    <div class="grid mt-6">
        <a class="hover:font-bold text-xl" href="/updateaccount">Click to Update Account</a>
        <a class="hover:font-bold text-xl" href="/deleteaccount">Click to Delete Account</a>
    </div>

</x-layout>