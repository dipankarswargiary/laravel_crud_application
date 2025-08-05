<x-layout.app-layout>
    <div class="container max-w-6xl mx-auto py-10 flex items-center justify-between">
        <div class="space-y-6">
            <h1 class="text-5xl font-bold leading-snug text-blue-600">
                Welcome to <br>
                Employee Management Application
            </h1>

            <a href="/register">
                <x-form-button>Get Started</x-form-button>
            </a>
        </div>

        <div>
            <img src={{ asset('employee.svg') }} alt="Employee" class="h-94 w-auto">
        </div>
    </div>
</x-layout.app-layout>