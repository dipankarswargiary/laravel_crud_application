<x-layout.app-layout title="All Employees">
    <div class="max-w-6xl mx-auto">

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

        <h1 class="font-bold text-4xl mt-20 mb-10 text-center">
            All Employees
        </h1>

        @foreach($employees as $emp)
            <div class="w-full shadow-md bg-cyan-50 rounded-md py-6 px-16 my-6 hover:shadow-sm flex flex-row items-center justify-between">
                <div>
                    <p class="text-xl font-bold">{{ $emp['name'] }}</p>
                    <p class="text-lg italic">{{ $emp['department'] }}, {{ $emp['position'] }}</p>
                </div>
                
                <div class="flex flex-row items-center justify-center gap-2">
                    <a href="/employee/{{ $emp['id'] }}">
                        <button class="bg-transparent border-2 border-gray-200 text-gray-600 text-lg font-bold py-2 w-24 rounded-lg hover:bg-gray-100">
                            View
                        </button>
                    </a>

                    <form action="/employee/{{ $emp->id }}" method="post">
                        @csrf
                        @method('DELETE')

                        <button type="submit" class="bg-red-500 text-white text-lg font-bold py-2 w-24 rounded-lg hover:bg-red-600">
                            Delete
                        </button>
                    </form>
                </div>
            </div>
        @endforeach

        <div class="pb-40 bg-white">
            {{ $employees->links() }}
        </div>
    </div>
</x-layout.app-layout>