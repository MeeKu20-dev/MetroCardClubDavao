<!-- resources/views/pages/dashboard.blade.php -->
@extends('layouts.sidebar')

@section('content')
<div>

    <div class="mt-2 mb-2">
        <input
            type="text"
            placeholder="Find Member"
            class="w-60 px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:border-blue-500" />
    </div>
</div>

<div>
    <table class="min-w-[70%] border border-gray-300 bg-white rounded-lg shadow-md">
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
                    {{ $member->last_name }}
                </td>
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