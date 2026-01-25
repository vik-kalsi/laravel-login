<x-layout>


    <x-slot:title>
        Update Account
    </x-slot>


    <h1 class="font-bold text-4xl">Update Account Page</h1>


    <div class="grid mt-4">
        
        @if(session('username'))
            Update details for {{ session('username') }}
        @endif

        <a class="hover:font-bold mt-6" href="/dashboard">Back to Dashboard</a>

        <form class="grid gap-4 border-2 p-2 mt-8" action="/updateaccount" method="post">
            @csrf

            <p>Update Username</p>
            @error('newUsername')
                <p>{{ $message }}</p>
            @enderror

            @if (session('UsernameUpdated'))
                <p>{{ session('UsernameUpdated') }}</p>
            @endif

            @error('usernameAlreadyExists')
                <p>{{ $message }}</p>
            @enderror
            <input class="border-2 p-1" type="text" name="newUsername" placeholder="New Username" value="{{ old('newUsername') }}">
            <button class="border-2 p-1" type="submit">Update Username</button>
        </form>




        <form class="grid gap-4 border-2 p-2 mt-8" action="/updatepassword" method="post">
            @csrf

            <p>Update Password</p>
            @error('newPassword')
                <p>{{ $message }}</p>
            @enderror

            @if (session('passwordUpdated'))
                <p>{{ session('passwordUpdated') }}</p>
            @endif

            <input class="border-2 p-1" type="password" name="newPassword" placeholder="New Password">
            <input class="border-2 p-1" type="password" name="newPassword_confirmation" placeholder="Confirm New Password">
            <button class="border-2 p-1" type="submit">Update Password</button>
        </form>

    </div>


</x-layout>