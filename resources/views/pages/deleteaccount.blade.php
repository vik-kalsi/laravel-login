<x-layout>


    <x-slot:title>
        Delete Account
    </x-slot>


    <h1 class="font-bold text-4xl">Delete Account Page</h1>


    <div class="mt-4">
        
        <form class="grid gap-4" action="/deleteaccount" method="post">
            @csrf

            
        </form>

    </div>


</x-layout>