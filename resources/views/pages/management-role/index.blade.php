@extends('layouts.app')

@section('title', 'Management Role')

@section('content')
<div class="container mx-auto px-4">
    <div class="flex justify-between items-center mb-4">
        <h1 class="text-2xl font-bold">Management Role</h1>
        <a href="{{ route('management-role.create') }}" class="bg-blue-600 hover:bg-blue-700 text-white px-4 py-2 rounded">
            + Tambah Role
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
                    <th class="p-2 border">Name</th>
                    <th class="p-2 border">Display Name</th>
                    <th class="p-2 border">Description</th>
                    <th class="p-2 border text-center">Aksi</th>
                </tr>
            </thead>
            <tbody>
                @forelse($roles as $index => $role)
                <tr class="hover:bg-gray-50">
                    <td class="p-2 border">{{ $roles->firstItem() + $index }}</td>
                    <td class="p-2 border">{{ $role->name }}</td>
                    <td class="p-2 border">{{ $role->display_name }}</td>
                    <td class="p-2 border">{{ $role->description }}</td>
                    <td class="p-2 border text-center">
                        <a href="{{ route('management-role.edit', $role->id) }}" class="text-blue-600 hover:underline">Edit</a> |
                        <form action="{{ route('management-role.destroy', $role->id) }}" method="POST" class="inline-block" onsubmit="return confirm('Yakin ingin menghapus role ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="text-red-600 hover:underline">Hapus</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="5" class="p-4 text-center text-gray-500">Belum ada data role</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

    <div class="mt-4">
        {{ $roles->links() }}
    </div>
</div>
@endsection
