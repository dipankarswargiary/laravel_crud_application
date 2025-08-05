<x-layout.auth-layout title="Login" form_title="Login">
    <form action="/login" method="post" id="login_form" class="flex flex-col gap-6">
        @csrf

        <div>
            <x-form-input-label for="email">Registered Email</x-form-input-label>
            <x-form-input type='email' name='email' id='email' :value="old('email')" placeholder="Enter Email" required />
            <x-form-error field_name="email" />
        </div>

        <div>
            <x-form-input-label for="password">Enter Password</x-form-input-label>
            <x-form-input type='password' name='password' id='password' placeholder="Enter your password"
                required />
            <x-form-error field_name="password" />
        </div>

        <div class="flex justify-between">
            <a href="/">
                <x-form-button type="button" transparent>Back</x-form-button>
            </a>
            
            <x-form-button>Login</x-form-button>
        </div>

    </form>
</x-layout.auth-layout>
