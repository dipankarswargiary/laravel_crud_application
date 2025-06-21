<div class="w-full bg-white shadow-md sticky top-0 z-50">
    <div class="max-w-6xl mx-auto py-8 flex flex-row items-center justify-between">
        <h1 class="font-bold text-3xl text-blue-500">Manage Employees</h1>
        
        <div class="flex items-center gap-4">
            <x-nav-link href="/" :active="request()->is('/')">Add</x-nav-link>
            <x-nav-link href="/employees" :active="request()->is('employees')">All Employees</x-nav-link>
        </div>
    </div>
</div>