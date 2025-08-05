<div class="w-full bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto h-20 flex flex-row items-center justify-between">
        <h1 class="font-bold text-3xl text-blue-500">Manage Employees</h1>
        
        <div class="flex items-center gap-4">
            @guest
                <a href="/login">
                    <x-form-button transparent>Login</x-form-button>
                </a>

                <a href="/register">
                    <x-form-button transparent>Register</x-form-button>
                </a>
            @endguest

            @auth
                <x-nav-link href="/employees" :active="request()->is('employees')">All Employees</x-nav-link>
                <x-nav-link href="/create-employee" :active="request()->is('create-employee')">Add</x-nav-link>
                <form action="/logout" method="post">
                    @csrf

                    <x-form-button type='submit'>Logout</x-form-button>
                </form>
            @endauth
        </div>
    </div>
</div>