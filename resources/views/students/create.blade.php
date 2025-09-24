@extends('layout')

@section('content')

    <div class="max-w-screen-md mx-auto flex items-center mt-10">
        <div class="w-full bg-white rounded-xl px-10 py-8">

            <h2 class="text-3xl font-semibold mb-7">Laravel 10 CRUD <span class="font-normal text-slate-400">/ Add New
                    Student</span></h2>

            <form action="{{ route('students.store') }}" method="POST">
                @csrf
                <div class="mb-3">
                    <label class="block mb-1">Nama</label>
                    <input type="text" name="name" value="{{ old('name') }}" placeholder="Ketik nama Mahasiswa"
                        class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-indigo-400">
                    @error('name')
                        <div class="text-red-600 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label class="block mb-1">Alamat</label>
                    <textarea name="address"
                        class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-indigo-400">{{ old('address') }}</textarea>
                    @error('address')
                        <div class="text-red-600 text-sm">
                            {{ $message }}
                        </div>
                    @enderror
                </div>
                <div class="mb-3">
                    <label for="major_id">Program Studi</label>
                    <select name="major_id" id="major_id" class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-indigo-400 
                                   appearance-none bg-no-repeat bg-right pr-8
                                   bg-[url('data:image/svg+xml,%3csvg%20xmlns%3d%22http%3a//www.w3.org/2000/svg%22%20fill%3d%22none%22%20viewBox%3d%220%200%2020%2020%22%3e%3cpath%20stroke%3d%22%236b7280%22%20stroke-linecap%3d%22round%22%20stroke-linejoin%3d%22round%22%20stroke-width%3d%221.5%22%20d%3d%22m6%208%204%204%204-4%22/%3e%3c/svg%3e')]" required>
                        <option value="" disabled selected>Pilih Program Studi</option>
                        @foreach ($majors as $major)
                            <option value="{{ $major->id }}">{{ $major->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="faculty_id">Fakultas</label>
                    <select name="faculty_id" id="faculty_id" class="w-full border border-gray-300 px-4 py-2 rounded-md focus:outline-indigo-400 
                                   appearance-none bg-no-repeat bg-right pr-8
                                   bg-[url('data:image/svg+xml,%3csvg%20xmlns%3d%22http%3a//www.w3.org/2000/svg%22%20fill%3d%22none%22%20viewBox%3d%220%200%2020%2020%22%3e%3cpath%20stroke%3d%22%236b7280%22%20stroke-linecap%3d%22round%22%20stroke-linejoin%3d%22round%22%20stroke-width%3d%221.5%22%20d%3d%22m6%208%204%204%204-4%22/%3e%3c/svg%3e')]" required>
                        <option value="" disabled selected>Pilih Fakultas</option>
                        @foreach ($faculties as $faculty)
                            <option value="{{ $faculty->id }}">{{ $faculty->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="flex items-center justify-center gap-5">
                    <a href="{{ route('students.index') }}"
                        class="text-white bg-amber-500 px-8 py-2 rounded cursor-pointer">Cancel</a>
                    <button type="submit" class="text-white bg-green-600 px-8 py-2 rounded">Save</button>
                </div>
            </form>
        </div>
    </div>

@endsection