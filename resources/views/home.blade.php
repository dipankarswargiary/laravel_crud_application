<x-layout title="Add Employee">
    <div class="container max-w-6xl mx-auto py-10">

        @if (session('success'))
            <div id="flash-message" class="fixed inset-0 top-30 mx-auto w-max h-max bg-green-500 text-white px-4 py-2 rounded shadow-lg z-50">
                {{ session('success') }}
            </div>

            <script>
                setTimeout(() => {
                    const msg = document.getElementById('flash-message');
                    if (msg) msg.style.display = 'none';
                }, 3000);
            </script>
        @endif

        <form action="/" method="post" class="max-w-xl mx-auto rounded-lg shadow-lg mt-10 p-10 flex flex-col gap-4">
            @csrf
            <h1 class="text-2xl font-bold text-center">Add Employee</h1>
            
            <div>
                <label for="name" class="font-semibold text-lg">Full Name</label>
                <input type="text" name="name" id="name" placeholder="Enter name" class="w-full p-2 mt-2 border-2 border-gray-200 rounded" required>
                <div class="w-full h-2 pl-1">
                    @error('name')
                        <p class="text-red-500 text-sm font-semibold">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="email" class="font-semibold text-lg">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter email address" class="w-full p-2 mt-2 border-2 border-gray-200 rounded" required>
                <div class="w-full h-2 pl-1">
                    @error('email')
                        <p class="text-red-500 text-sm font-semibold">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="w-full flex flex-row items-start justify-between gap-6">
                <div class="w-[45%]">
                    <label for="department" class="font-semibold text-lg">Department</label>
                    <select name="department" id="department" class="p-2 mt-2 border-2 border-gray-200 rounded w-full"  required>
                        <option value="" disabled selected>Select Department</option>
                        <option value="IT">IT</option>
                        <option value="HR">HR</option>
                        <option value="Engineering">Engineering</option>
                        <option value="Marketing">Marketing</option>
                    </select>
                    <div class="w-full h-2 pl-1">
                        @error('department')
                            <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="w-[45%]">
                    <label for="position" class="font-semibold text-lg">Position</label>
                    <input type="text" name="position" id="position" placeholder="Enter position" class="w-full p-2 mt-2 border-2 border-gray-200 rounded" required>
                    <div class="w-full h-2 pl-1">
                        @error('position')
                            <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="flex flex-col">
                <label for="salary" class="font-semibold text-lg">Salary</label>
                <input type="number" name="salary" id="salary" placeholder="Enter salary" class="w-[60%] p-2 mt-2 border-2 border-gray-200 rounded" required>
                <div class="w-full h-2 pl-1">
                    @error('salary')
                        <p class="text-red-500 text-sm font-semibold">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex flex-row justify-center">
                <button type="submit" class="bg-blue-500 text-white text-lg font-semibold px-5 mt-4 py-3 rounded-xl hover:bg-blue-600 transition duration-300">
                    Add Employee
                </button>
            </div>
        </form>
    </div>
</x-layout>