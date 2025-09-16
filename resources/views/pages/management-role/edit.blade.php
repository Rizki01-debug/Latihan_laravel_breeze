@extends('layouts.app')

@section('title', 'Edit Role')

@section('content')
<div class="container mx-auto px-4">
    <h1 class="text-2xl font-bold mb-4">Edit Role</h1>

    <form action="{{ route('management-role.update', $management_role->id) }}" method="POST" class="space-y-4">
        @csrf
        @method('PUT')

        <div>
            <label class="block font-medium">Name</label>
            <input type="text" name="name" class="border rounded w-full p-2" value="{{ old('name', $management_role->name) }}" required>
            @error('name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block font-medium">Display Name</label>
            <input type="text" name="display_name" class="border rounded w-full p-2" value="{{ old('display_name', $management_role->display_name) }}" required>
            @error('display_name') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <div>
            <label class="block font-medium">Description</label>
            <textarea name="description" class="border rounded w-full p-2">{{ old('description', $management_role->description) }}</textarea>
            @error('description') <p class="text-red-600 text-sm">{{ $message }}</p> @enderror
        </div>

        <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Update</button>
    </form>
</div>
@endsection
