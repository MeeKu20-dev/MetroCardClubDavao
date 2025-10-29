@extends('layouts.sidebar')

@section('content')
<div class="bg-white shadow-md rounded-lg p-8 w-full">
    <h1 class="text-2xl font-bold mb-6 border-b pb-2">REGISTRATION FORM</h1>

    {{-- Success message --}}
    @if(session('success'))
    <div class="bg-green-100 text-green-700 p-3 rounded mb-4">
        {{ session('success') }}
    </div>
    @endif

    {{-- Validation error summary --}}
    @if ($errors->any())
    <div class="bg-red-100 text-red-700 p-3 rounded mb-4">
        <ul class="list-disc pl-5">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    <form action="{{ route('registration.store') }}" method="POST">
        @csrf

        {{-- ===================== PERSONAL INFORMATION ===================== --}}
        <div class="mb-8">
            <h2 class="font-bold mb-3">PERSONAL INFORMATION:</h2>

            <div class="flex flex-wrap gap-6">
                {{-- First Name --}}
                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">First Name:</label>
                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('first_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                {{-- Middle Name --}}
                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Middle Name:</label>
                    <input type="text" name="middle_name" value="{{ old('middle_name') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('middle_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                {{-- Last Name --}}
                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Last Name:</label>
                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('last_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>


            </div>
        </div>

        {{-- ===================== SUBMIT BUTTON ===================== --}}
        <div class="flex justify-end">
            <button type="submit" class="bg-black text-white px-6 py-2 rounded hover:bg-gray-800 transition">
                Submit
            </button>
        </div>
    </form>
</div>
@endsection