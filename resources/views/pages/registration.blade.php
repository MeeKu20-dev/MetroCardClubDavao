@extends('layouts.sidebar')

@section('content')

<h1 class="text-2xl font-bold mb-6 border-b pb-2">REGISTRATION FORM</h1>


<form action="{{ route('registration.store') }}" method="POST">


    @csrf

    @if ($errors->any())
    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
        <strong>There were some problems with your submission:</strong>
        <ul class="list-disc list-inside mt-2">
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif

    {{-- PERSONAL INFORMATION --}}
    <div class="bg-white shadow-md rounded-lg p-5 w-full mb-4">
        <h2 class="text-2xl font-bold mb-4">PERSONAL INFORMATION</h2>
        <div class="flex flex-wrap gap-6">
            <div class="flex flex-wrap gap-6">

                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">First Name:</label>
                    <input type="text" name="first_name" value="{{ old('first_name') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('first_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>


                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Middle Name:</label>
                    <input type="text" name="middle_name" value="{{ old('middle_name') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('middle_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>


                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Last Name:</label>
                    <input type="text" name="last_name" value="{{ old('last_name') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('last_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>


                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Alternative Name:</label>
                    <input type="text" name="alternative_name" value="{{ old('alternative_name') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('alternative_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>


                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Present Address:</label>
                    <input type="text" name="present_address" value="{{ old('present_address') }}" class="border border-gray-400 rounded p-2 w-3xl">
                    @error('present_address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>


                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Mobile Number:</label>
                    <input type="text" name="mobile_number" value="{{ old('mobile_number') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('mobile_number') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>


                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Permanent Address:</label>
                    <input type="text" name="permanent_address" value="{{ old('permanent_address') }}" class="border border-gray-400 rounded p-2 w-3xl">
                    @error('permanent_address') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>


                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Birthday:</label>
                    <input type="date" name="birthday" value="{{ old('birthday') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('birthday') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>


                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Birth Place:</label>
                    <input type="text" name="birth_place" value="{{ old('birth_place') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('birth_place') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>


                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Civil Status:</label>
                    <select name="civil_status" class="border border-gray-400 rounded p-2 w-60">
                        <option value="">Select</option>
                        <option value="Single" {{ old('civil_status') == 'Single' ? 'selected' : '' }}>Single</option>
                        <option value="Married" {{ old('civil_status') == 'Married' ? 'selected' : '' }}>Married</option>
                    </select>
                    @error('civil_status') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>


                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Nationality:</label>
                    <input type="text" name="nationality" value="{{ old('nationality') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('nationality') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>


                <div class="flex flex-col">
                    <label class="font-semibold block mb-1">Email:</label>
                    <input type="email" name="email" value="{{ old('email') }}" class="border border-gray-400 rounded p-2 w-60">
                    @error('email') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>
    </div>

    {{-- ADDITIONAL INFO --}}
    <div class="flex gap-2">
        <div class="bg-white shadow-md rounded-lg p-5 w-full max-w-xl">
            {{-- SOURCE OF FUNDS --}}
            <h2 class="text-2xl font-bold mb-4">SOURCE OF FUNDS</h2>
            <div class="flex gap-8">
                {{-- Self-employed --}}
                <div class="flex flex-col space-y-2">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="source_of_income" value="self_employed" class="accent-green-600">
                        <span>Self-Employed</span>
                    </label>
                    <label class="text-sm font-medium text-gray-600">Name of Business:</label>
                    <input type="text" name="business_name" class="border border-gray-400 rounded-md p-2 w-60">
                    @error('business_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                    <label class="text-sm font-medium text-gray-600">Nature of Business:</label>
                    <input type="text" name="business_nature" class="border border-gray-400 rounded-md p-2 w-60">
                    @error('business_nature') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>

                {{-- Employed --}}
                <div class="flex flex-col space-y-2">
                    <label class="flex items-center space-x-2">
                        <input type="radio" name="source_of_income" value="employed" class="accent-green-600">
                        <span>Employed</span>
                    </label>
                    <label class="text-sm font-medium text-gray-600">Name of Employer:</label>
                    <input type="text" name="employer_name" class="border border-gray-400 rounded-md p-2 w-60">
                    @error('employer_name') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror

                    <label class="text-sm font-medium text-gray-600">Nature of Work:</label>
                    <input type="text" name="work_nature" class="border border-gray-400 rounded-md p-2 w-60">
                    @error('work_nature') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                </div>
            </div>
        </div>

        <div class="bg-white shadow-md rounded-lg p-5 w-full max-w-xl space-y-2">
            {{-- Political exposure --}}
            <div class="flex items-center space-x-3">
                <h4 class="font-semibold text-lg">Have family member/s who are political exposed?</h4>
                <label class="flex items-center space-x-2">
                    <input type="radio" name="political_exposed" value="yes" class="accent-green-600">
                    <span class="font-semibold text-lg">Yes</span>
                </label>
                <label class="flex items-center space-x-2">
                    <input type="radio" name="political_exposed" value="no" class="accent-green-600">
                    <span class="font-semibold text-lg">No</span>
                </label>
            </div>

            {{-- Contact in case of emergency --}}
            <div class="flex flex-col space-y-4">
                <h2 class="text-lg font-bold">CONTACT IN CASE OF EMERGENCY</h2>
                <div class="flex flex-wrap gap-4">
                    <div class="flex flex-col">
                        <label class="text-sm font-medium text-gray-700 mb-1">Full Name:</label>
                        <input type="text" name="emergency_name" class="border border-gray-300 rounded-md p-2 w-64 focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                    <div class="flex flex-col">
                        <label class="text-sm font-medium text-gray-700 mb-1">Relationship:</label>
                        <input type="text" name="emergency_relationship" class="border border-gray-300 rounded-md p-2 w-64 focus:outline-none focus:ring-2 focus:ring-green-500">
                    </div>
                </div>
                <div class="flex flex-col">
                    <label class="text-sm font-medium text-gray-700 mb-1">Contact #:</label>
                    <input type="text" name="emergency_contact" class="border border-gray-300 rounded-md p-2 w-64 focus:outline-none focus:ring-2 focus:ring-green-500">
                </div>
            </div>
        </div>
    </div>

    {{-- SUBMIT BUTTON INSIDE FORM --}}
    <div class="flex justify-end pt-6">
        <button type="submit" class="bg-black text-white px-6 py-2 rounded hover:bg-gray-800 transition">
            Submit
        </button>
    </div>

</form>



@endsection