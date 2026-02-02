<x-layout>


    <x-slot:title>
        Delete Account
    </x-slot>


    <h1 class="font-bold text-4xl">Delete Account Page</h1>


    <div class="mt-4">
        
        <p>Delete Account for {{ session('username') }}</p>

        <a class="hover:font-bold mt-6" href="/dashboard">Back to Dashboard</a>

        <form class="grid gap-4 mt-8" action="/deleteaccount" method="post">
            @csrf

            <button class="border-2 p-1" type="submit">Click here to delete account</button>
            
        </form>

    </div>


</x-layout>