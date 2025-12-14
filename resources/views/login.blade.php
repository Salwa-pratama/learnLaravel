<div class="w-full h-screen">
    <div class="">

        <h2 class="text-red-500">Form Login</h2>
        <form action="/login" method="POST" class="flex flex-col border border-black">
            @csrf
            <label for="email">Email : </label>
            <input type="text" name="email" id="">
            <label for="password">Password : </label>
            <input type="password" name="password" id="">
            <button type="submit">Login bray</button>
        </form>
        @if ($errors->any())
            <p class="text-red-600">{{ $errors->first() }}</p>
        @endif
    </div>
</div>
