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

                {{-- Alternative Name --}}
                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Alternative Name:</label>
                    <input type="text" name="alternative_name" value="{{ old('alternative_name') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('alternative_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                {{-- Present Address --}}
                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Present Address:</label>
                    <input type="text" name="present_address" value="{{ old('present_address') }}" class="border border-gray-400 rounded p-2 w-3xl">
                    @error('present_address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                {{-- Mobile Number --}}
                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Mobile Number:</label>
                    <input type="text" name="mobile_number" value="{{ old('mobile_number') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('mobile_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                {{-- Permanent Address --}}
                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Permanent Address:</label>
                    <input type="text" name="permanent_address" value="{{ old('permanent_address') }}" class="border border-gray-400 rounded p-2 w-3xl">
                    @error('permanent_address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                {{-- Birthday --}}
                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Birthday:</label>
                    <input type="date" name="birthday" value="{{ old('birthday') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('birthday') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                {{-- Birth Place --}}
                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Birth Place:</label>
                    <input type="text" name="birth_place" value="{{ old('birth_place') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('birth_place') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                {{-- Civil Status --}}
                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Civil Status:</label>
                    <select name="civil_status" class="border border-gray-400 rounded p-2 w-60">
                        <option value="">Select</option>
                        <option value="Single" {{ old('civil_status') == 'Single' ? 'selected' : '' }}>Single</option>
                        <option value="Married" {{ old('civil_status') == 'Married' ? 'selected' : '' }}>Married</option>
                    </select>
                    @error('civil_status') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                {{-- Nationality --}}
                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Nationality:</label>
                    <input type="text" name="nationality" value="{{ old('nationality') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('nationality') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                {{-- Email --}}
                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Email:</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
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