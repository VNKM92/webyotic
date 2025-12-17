@extends('layouts.admin')

@section('content')
<h1 class="text-2xl font-bold mb-4">Manage Users</h1>

<table class="w-full bg-white shadow rounded">
    <tr class="bg-gray-200 text-left">
        <th class="p-2">Name</th>
        <th class="p-2">Email</th>
        <th class="p-2">Role</th>
        <th class="p-2">Action</th>
    </tr>

    @foreach ($users as $user)
    <tr>
        <td class="p-2">{{ $user->name }}</td>
        <td class="p-2">{{ $user->email }}</td>
        <td class="p-2">{{ $user->role }}</td>
        <td class="p-2">
            <a href="{{ route('admin.users.edit', $user->id) }}" class="text-blue-500">Edit</a>
            <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST"
                  onsubmit="return confirm('Delete user?')" class="inline-block">
                @csrf @method('DELETE')
                <button class="text-red-500">Delete</button>
            </form>
        </td>
    </tr>
    @endforeach
</table>

{{ $users->links() }}
@endsection
