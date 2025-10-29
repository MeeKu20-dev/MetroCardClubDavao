<!-- resources/views/pages/dashboard.blade.php -->
@extends('layouts.sidebar')

@section('content')
    <div>
        <div>
            <label class="block text-sm/6 font-medium text-black">Find Member</label>
        </div>
        <div class="mt-2 mb-2">
            <input type="text" class="block w-full rounded-md border-2 border-solid bg-white/5 px-3 py-1.5 text-base" />
        </div>
    </div>

    <div>
        <table class="min-w-full border border-gray-300 bg-white rounded-lg shadow-md">
            <thead class="bg-gray-100 border-b border-gray-300">
                <tr>
                    <th class="text-left px-6 py-3 font-semibold text-gray-700">Member ID</th>
                    <th class="text-left px-6 py-3 font-semibold text-gray-700">Name</th>
                </tr>
            </thead>
            <tbody>
                @forelse($members as $member)
                    <tr class="hover:bg-gray-50">
                        <td class="px-6 py-3 text-gray-800">{{ $member->id }}</td>
                        <td class="px-6 py-3 text-gray-800">{{ $member->first_name }} {{ $member->middle_name }}
                            {{ $member->last_name }}</td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="2" class="text-center text-gray-500 py-4">No members found.</td>
                    </tr>
                @endforelse
            </tbody>

        </table>
    </div>
@endsection
