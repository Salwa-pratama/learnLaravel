<x-layout-auth>
    <div class=" shadow-xl  p-10 rounded-md border-blue-300 border ">
        <img src="{{ asset('storage/logoApp.png') }}" alt="" class="size-8 mx-auto">
        <h1 class=" text-center text-2xl font-bold ">Login</h1>
        <form class="max-w-sm mx-auto mt-5" action="/login" method="POST">
            @csrf
            {{-- Email --}}
            <div class="relative z-0 w-full mb-5 group">
                <input type="email" name="email" id="floating_email"
                    class="peer autofill:bg-transparent block py-4 px-4 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                    placeholder=" " required />
                <label for="floating_email"
                    class="absolute  text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Email
                    address : </label>
            </div>
            {{-- Password --}}
            <div class="relative z-0 w-full mb-5 group">
                <input type="password" name="password" id="floating_password"
                    class="peer autofill:bg-transparent block py-4 px-4 w-full text-sm text-heading bg-transparent border-0 border-b-2 border-default-medium appearance-none focus:outline-none focus:ring-0 focus:border-brand peer"
                    placeholder=" " required />
                <label for="floating_password"
                    class="absolute text-sm text-body duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 peer-focus:text-fg-brand peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto">Password
                    :</label>
            </div>

            <label for="remember" class="flex items-center mb-5">
                <input id="remember" type="checkbox" value=""
                    class="w-4 h-4 border border-default-medium  bg-neutral-secondary-medium focus:ring-2 focus:ring-brand-soft rounded-md"
                    required />
                <p class="ms-2 text-sm font-medium text-heading select-none">I agree with the <a href="#"
                        class="text-fg-brand hover:underline">terms and conditions</a>.</p>
            </label>
            <div class="flex justify-between items-center">
                <button type="submit"
                    class="text-white bg-blue-800 rounded-md box-border border border-transparent hover:bg-brand-strong focus:ring-4 focus:ring-brand-medium shadow-xs font-medium leading-5 rounded-base text-sm px-4 py-2.5 focus:outline-none">Submit</button>
                <a href="/register" class="text-blue-500 hover:underline">Buat akun</a>
            </div>
        </form>


    </div>

</x-layout-auth>
