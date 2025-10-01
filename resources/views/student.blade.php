<x-layout>
    <x-slot name="title">{{ $title }}</x-slot>
    <div class="flex justify-center mt-3">
        <div class="w-full max-w-6xl bg-white p-6 rounded-2xl shadow-lg">
            <h2 class="text-2xl font-bold mb-6 text-center">Daftar Data Siswa</h2>
            <div class="overflow-x-auto">
                <table class="min-w-full border border-gray-200 table-auto">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-4 py-2 text-left">No</th>
                            <th class="px-4 py-2 text-left">Name</th>
                            <th class="px-4 py-2 text-left">BirthDate</th>
                            <th class="px-4 py-2 text-left">Email</th>
                            <th class="px-4 py-2 text-left">Grade</th>
                            <th class="px-4 py-2 text-left">Address</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($students as $student)
                            <tr class="border-b">
                                <td class="px-4 py-2 whitespace-nowrap">{{ $student->id}}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $student->name }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $student->birthdate }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $student->email }}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $student->classroom->name}}</td>
                                <td class="px-4 py-2 whitespace-nowrap">{{ $student->address }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</x-layout>
