<x-layout>
    <div class="my-10 bg-gradient-to-r from-indigo-600 via-indigo-950 to-indigo-500 bg-clip-text text-center text-4xl font-medium text-transparent">Sign in your account</div>
    <x-card class="py-8">
        <form action="{{route('auth.store')}}" method="POST">
            @csrf

            <div class="mb-8">
                <label for="email" class="mb-2 block text-sm font-medium text-slate-800">E-mail</label>
                <x-text-input name="email" placeholder="Your email" />
            </div>
            <div class="mb-8">
                <label for="password" class="mb-2 block text-slate-800">Password</label>
                <x-text-input name="password" placeholder="Your password" type="password" />
            </div>

            <div class="flex items-center justify-between text-sm font-medium">
                <div class="flex items-center space-x-2">
                    <input type="checkbox" class="rounded-lg border border-slate-400">
                    <label for="">Remember me</label>
                </div>
                <div>
                    <a href="#" class="text-indigo-700 hover:underline">Forgot password?</a>
                </div>
            </div>
            
            <x-button class="to mt-5 w-full bg-gradient-to-r from-indigo-600 via-indigo-950 to-indigo-500">Login</x-button>
        </form>
    </x-card>
</x-layout>
 