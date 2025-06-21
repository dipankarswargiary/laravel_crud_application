<x-layout title="View Employee">
    <div class="container max-w-6xl text-2xl leading-5 mx-auto py-15 flex flex-col gap-4">

        @if (session('success'))
            <div id="flash-message" class="fixed inset-0 top-30 mx-auto w-max h-max bg-green-500 text-lg text-white px-4 py-2 rounded shadow-lg z-50">
                {{ session('success') }}
            </div>

            <script>
                setTimeout(() => {
                    const msg = document.getElementById('flash-message');
                    if (msg) msg.style.display = 'none';
                }, 3000);
            </script>
        @endif

        <p class="text-4xl font-bold">
            {{ $employee['name'] }}
        </p>
        <p class="font-semibold text-gray-600 italic mb-4">
            {{ $employee['email'] }}
        </p>

        <p>
            <strong>Department:</strong>
            {{ $employee['department'] }}
        </p>
        <p>
            <strong>Position:</strong>
            {{ $employee['position'] }}
        </p>
        <p>
            <strong>Salary:</strong>
            {{ $employee['salary'] }}
        </p>

        <hr class="mt-10 mb-2 border-1 text-gray-300">

        <div class="flex flex-row items-center justify-between">
            <a href="/employees">
                <button class="bg-white border-2 border-gray-200 text-gray-600 text-lg font-bold py-2 w-24 rounded-lg hover:bg-gray-100">
                    Back
                </button>
            </a>

            <div class="flex items-center justify-center gap-6">
                <a href="/employee/{{ $employee['id'] }}/edit">
                    <button class="bg-blue-500 text-white text-lg font-bold py-2 w-24 rounded-lg hover:bg-blue-600">
                        Edit
                    </button>
                </a>

                <form action="/employee/{{ $employee->id }}" method="post">
                    @csrf
                    @method('DELETE')

                    <button class="bg-red-500 text-white text-lg font-bold py-2 w-24 rounded-lg hover:bg-red-600">
                        Delete
                    </button>
                </form>
            </div>
        </div>
    </div>
</x-layout>