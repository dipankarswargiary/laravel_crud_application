<x-layout.auth-layout title="Registration" form_title="Registration">
    <form action="/register" method="post" class="flex flex-col gap-6">
        @csrf

        <div>
            <x-form-input-label for="name">Full Name</x-form-input-label>
            <x-form-input name='name' id='id' placeholder="Enter Full Name" required />
            <x-form-error field_name="name" />
        </div>

        <div>
            <x-form-input-label for="email">Email</x-form-input-label>
            <x-form-input type='email' name='email' id='email' placeholder="Enter Email" required />
            <x-form-error field_name="email" />
        </div>

        <div>
            <x-form-input-label for="phone_no">Phone No.</x-form-input-label>
            <x-form-input type='number' name='phone_no' id='phone_no' placeholder="Enter Phone Number" required />
            <x-form-error field_name="phone_no" />
        </div>

        <div>
            <x-form-input-label for="password">Create Password</x-form-input-label>
            <x-form-input type='password' name='password' id='password' placeholder="Create a strong password"
                required />
            <x-form-error field_name="password" />
        </div>

        <div>
            <x-form-input-label for="password_confirmation">Confirm Password</x-form-input-label>
            <x-form-input type='password' name='password_confirmation' id='password_confirmation'
                placeholder="Re-enter Password" required />
            <x-form-error field_name="password_confirmation" />
        </div>

        <div class="flex justify-between">
            <a href="/">
                <x-form-button type="button" transparent>Back</x-form-button>
            </a>

            <x-form-button>Register</x-form-button>
        </div>

    </form>
</x-layout.auth-layout>
