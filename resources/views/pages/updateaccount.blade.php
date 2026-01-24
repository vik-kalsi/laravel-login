<x-layout>


    <x-slot:title>
        Update Account
    </x-slot>


    <h1 class="font-bold text-4xl">Update Account Page</h1>


    <div class="mt-4">
        
        <form class="grid gap-4" action="/updateaccount" method="post">
            @csrf

            
        </form>

    </div>


</x-layout>