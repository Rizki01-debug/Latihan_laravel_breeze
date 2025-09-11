@extends('layouts.app')

@section('title', 'Management User')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Management User</h1>
        <a href="{{ route('management-user.create') }}" class=" text-red-700 p-3 rounded mb-4">
            + Tambah User
        </a>
    </div>

    @if(session('success'))
        <div class="bg-green-100 text-green-800 p-3 rounded mb-4">
            {{ session('success') }}
        </div>
    @endif

    <div class="overflow-x-auto">
        <table class="w-full border border-gray-300 rounded-lg">
            <thead class="bg-gray-100">
                <tr>
                    <th class="p-2 border">#</th>
                    <th class="p-2 border">Username</th>
                    <th class="p-2 border">Name</th>
                    <th class="p-2 border">Email</th>
                    <th class="p-2 border">Role</th>
                    <th class="p-2 border text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($users as $index => $user)
                <tr class="hover:bg-gray-50">
                    <td class="p-2 border">{{ $users->firstItem() + $index }}</td>
                    <td class="p-2 border">{{ $user->username }}</td>
                    <td class="p-2 border">{{ $user->name }}</td>
                    <td class="p-2 border">{{ $user->email }}</td>
                    <td class="p-2 border">{{ $user->role->name ?? '-' }}</td>
                    <td class="p-2 border text-center">
                        <a href="{{ route('management-user.edit', $user->id) }}" class="text-blue-600 hover:underline">Edit</a> |
                            <form action="{{ route('management-user.destroy', $user->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus user ini?')">
                        @csrf
                     @method('DELETE')
                <button type="submit" class="text-red-600 hover:underline">Hapus</button>
            </form>
        </td>
                </tr>
                @empty
                <tr>
                    <td colspan="6" class="p-4 text-center text-gray-500">Belum ada data user</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $users->links() }}
    </div>
</div>
@endsection
