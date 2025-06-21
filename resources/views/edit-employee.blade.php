<x-layout title='Edit employee details'>
    <div class="container max-w-6xl mx-auto py-10">
        <form action="/employee/{{ $employee['id'] }}" method="post" class="max-w-xl mx-auto rounded-lg shadow-lg p-10 flex flex-col gap-4">
            @csrf
            @method('PATCH')

            <h1 class="text-2xl font-bold text-center">Update Employee Details</h1>
            
            <div>
                <label for="name" class="font-semibold text-lg">Full Name</label>
                <input type="text" name="name" id="name" value="{{ $employee->name }}" placeholder="Enter name" class="w-full p-2 mt-2 border-2 border-gray-200 rounded" required>
                <div class="w-full h-2 pl-1">
                    @error('name')
                        <p class="text-red-500 text-sm font-semibold">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div>
                <label for="email" class="font-semibold text-lg">Email</label>
                <input type="email" name="email" id="email" value="{{ $employee->email }}" placeholder="Enter email address" class="w-full p-2 mt-2 border-2 border-gray-200 rounded" required>
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
                        <option value="" disabled {{ $employee->department == '' ? 'selected': '' }}>Select Department</option>
                        <option value="IT" {{ $employee->department == 'IT' ? 'selected': '' }}>IT</option>
                        <option value="HR" {{ $employee->department == 'HR' ? 'selected': '' }}>HR</option>
                        <option value="Engineering" {{ $employee->department == 'Engineering' ? 'selected': '' }}>Engineering</option>
                        <option value="Marketing" {{ $employee->department == 'Marketing' ? 'selected': '' }}>Marketing</option>
                    </select>
                    <div class="w-full h-2 pl-1">
                        @error('department')
                            <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>

                <div class="w-[45%]">
                    <label for="position" class="font-semibold text-lg">Position</label>
                    <input type="text" name="position" id="position" value="{{ $employee->position }}" placeholder="Enter position" class="w-full p-2 mt-2 border-2 border-gray-200 rounded" required>
                    <div class="w-full h-2 pl-1">
                        @error('position')
                            <p class="text-red-500 text-xs font-semibold">{{ $message }}</p>
                        @enderror
                    </div>
                </div>
            </div>

            <div class="flex flex-col">
                <label for="salary" class="font-semibold text-lg">Salary</label>
                <input type="number" name="salary" id="salary" value="{{ $employee->salary }}" placeholder="Enter salary" class="w-[60%] p-2 mt-2 border-2 border-gray-200 rounded" required>
                <div class="w-full h-2 pl-1">
                    @error('salary')
                        <p class="text-red-500 text-sm font-semibold">{{ $message }}</p>
                    @enderror
                </div>
            </div>

            <div class="flex flex-row justify-end gap-4">
                <a href="/employee/{{ $employee->id }}" class="bg-white border-2 border-gray-300 text-gray-600 text-lg font-semibold px-5 mt-4 py-2 rounded-xl hover:bg-gray-100 transition duration-300">
                    Cancle
                </a>

                <div>
                    <button type="submit" class="bg-green-500 text-white text-lg font-semibold px-5 mt-4 py-2 rounded-xl hover:bg-green-600 transition duration-300">
                        Update
                    </button>
                </div>
            </div>
        </form>
    </div>
</x-layout>