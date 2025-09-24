@extends('layout')

@section('content')

<div class="max-w-screen-md mx-auto flex items-center mt-10">
    <div class="w-full bg-white rounded-xl px-10 py-8">

        <h2 class="text-3xl font-semibold mb-7">Laravel 10 CRUD <span class="font-normal text-slate-400">/ Show Student</span></h2>

        <form action="{{ route('students.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label class="block mb-1">Nama</label>
            <input type="text" name="name" value="{{ $student->name }}" readonly class="w-full bg-gray-50 border border-gray-300 px-4 py-2 rounded-md focus:outline-indigo-400">
            @error('name')
            <div class="text-red-600 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="block mb-1">Alamat</label>
            <textarea name="address" readonly class="w-full bg-gray-50 border border-gray-300 px-4 py-2 rounded-md focus:outline-indigo-400">{{ $student->address }}</textarea>
            @error('address')
            <div class="text-red-600 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="block mb-1">Program Studi</label>
            <textarea name="address" readonly class="w-full bg-gray-50 border border-gray-300 px-4 py-2 rounded-md focus:outline-indigo-400">{{ $student->major->name }}</textarea>
            @error('major')
            <div class="text-red-600 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="mb-3">
            <label class="block mb-1">Fakultas</label>
            <textarea name="address" readonly class="w-full bg-gray-50 border border-gray-300 px-4 py-2 rounded-md focus:outline-indigo-400">{{ $student->faculty->name }}</textarea>
            @error('faculty')
            <div class="text-red-600 text-sm">
                {{ $message }}
            </div>
            @enderror
        </div>
        <div class="flex items-center justify-center gap-5">
            <a href="{{ route('students.index') }}" class="text-white bg-amber-500 px-8 py-2 rounded cursor-pointer">Back</a>
        </div>
        </form>
    </div>
</div>

@endsection