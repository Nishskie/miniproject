<!-- resources/views/admin/dashboard.blade.php -->

<x-layout>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">Consumer Table</h1>
        </div>
    </header>

    <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h2 class="text-2xl font-bold mb-4">List of Consumers</h2>

        <!-- Display consumers in a table -->
        <table class="table-auto w-full border-collapse border border-gray-200">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border border-gray-200 px-4 py-2">ID</th>
                    <th class="border border-gray-200 px-4 py-2">Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach($consumers as $consumer)
                <tr>
                    <td class="border border-gray-200 px-4 py-2">{{ $consumer->id }}</td>
                    <td class="border border-gray-200 px-4 py-2">{{ $consumer->email }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>