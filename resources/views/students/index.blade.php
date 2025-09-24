@extends('layout')

@section('content')

<div class="max-w-screen-xl mx-auto flex items-center mt-10">
    <div class="w-full bg-white rounded-xl px-10 py-8">
        <h2 class="text-3xl font-semibold mb-7">
            CRUD Exercise 
            <span class="font-normal text-slate-400">
                / Student Lists
            </span>
        </h2>
        @if(session()->has('success'))
        <div class="border border-green-200 bg-green-50 px-4 py-2 rounded mb-5">
            {{ session('success') }}
        </div>
        @endif

        <div class="flex items-center justify-end mb-5">
            <a href="{{ route('students.create') }}" class="text-white bg-indigo-500 px-4 py-2 rounded">Add Student</a>
        </div>

        <div class="w-full border border-gray-200 dark:border-gray-500 rounded-xl overflow-x-auto">
            <table class="w-full divide-y divide-gray-200 dark:divide-gray-500">
            <thead class="bg-gray-50 dark:bg-slate-700 text-slate-800 dark:text-slate-300">
            <tr class="divide-x divide-gray-200 dark:divide-gray-500">
                <th class="px-4 py-2">No</th>
                <th class="px-4 py-2">Nama</th>
                <th class="px-4 py-2">Alamat</th>
                <th class="px-4 py-2">Program Studi</th>
                <th class="px-4 py-2">Fakultas</th>
                <th class="px-4 py-2">Aksi</th>
            </tr>
            </thead>
            <tbody class="divide-y divide-gray-200 dark:divide-gray-500 bg-white dark:bg-slate-600 text-slate-800 dark:text-slate-300">
                @foreach ($students as $student)
                <tr class="divide-x divide-gray-200 dark:divide-gray-500">
                    <td class="px-4 py-2">{{ ++$i }}</td>
                    <td class="px-4 py-2">{{ $student->name }}</td>
                    <td class="px-4 py-2">{{ $student->address }}</td>
                    <td class="px-4 py-2">{{ $student->major->name }}</td>
                    <td class="px-4 py-2">{{ $student->faculty->name }}</td>
                    <td class="px-4 py-2" style="width:150px;">
                        <div class="flex items-center justify-center gap-2">
                            <a href="{{ route('students.show',$student->id) }}" class="bg-blue-800 text-white text-sm px-3 py-1 rounded">
                                show
                            </a>
                            <a href="{{ route('students.edit',$student->id) }}" class="bg-blue-500 text-white text-sm px-3 py-1 rounded">
                                edit
                            </a>
                            <div>
                                <form action="{{ route('students.destroy',$student->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="bg-red-500 text-white text-sm px-3 py-1 rounded">delete</button>
                                </form>
                            </div>
                        </div>
                    </td>
                </tr>
                @endforeach
            </tbody>
            </table>
        </div>

        <div class="mt-5">
            {!! $students->links() !!}
        </div>

    </div>
</div>

@endsection