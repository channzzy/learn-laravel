<x-app-layout title="User Page">
    <table class="table table-bordered">
        <thead>
            <tr>
                <td>No</td>
                <td>Name</td>
                <td>Username</td>
                <td>Email</td>
                <td>Aksi</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->username }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a href="{{ route('users.show', $user->username) }}" class="btn btn-primary">Lihat Detail</a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</x-app-layout>