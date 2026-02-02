<x-layout>


    <x-slot:title>
        Login
    </x-slot>


    <h1 class="font-bold text-4xl">Login Page</h1>


    <div class="mt-4">
        
        <form class="grid gap-4" action="/login" method="post">
            @csrf

            @error('username')
                <p>{{ $message }}</p>
            @enderror

            @if (session('registerSuccess'))
                <p>{{ session('registerSuccess') }}</p>
            @endif

            @if (session('LogoutComplete'))
                <p>{{ session('LogoutComplete') }}</p>
            @endif

            @if (session('AccountDeleted'))
                <p>{{ session('AccountDeleted') }}</p>
            @endif
            <input class="border-2 p-1" type="text" name="username" placeholder="Username" value="{{ old('username') }}" required>

            @error('password')
                <p>{{ $message }}</p>
            @enderror
            <input class="border-2 p-1" type="password" name="password" placeholder="Password" required>

            <button class="border-2 p-1" type="submit">Login</button>

            @error('loginIncorrect')
                <p>{{ $message }}</p>
            @enderror
        </form>


    </div>


</x-layout>