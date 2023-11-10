<x-app-layout title="Task Page">
    <div class="container-fluid p-2">
        <div class="card mb-3">
            <div class="card-header">
                <h6>Tambahakan Data Task</h6>
            </div>
            <div class="card-body">
                <form action="{{ route('task.store') }}" method="post">
                    @csrf
                    <label for="name">Tambahkan Data Task</label>
                    <input type="text" class="form-control @error ('list') is-invalid @enderror mb-3" id="name" name="list" value="{{ old('list') }}">
                    @error('list')
                        <div class="alert alert-danger">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="btn btn-primary mb-3">Kirim Data</button>
                </form>
            </div>
        </div>
        <table class="table table-bordered">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama Task</td>
                    <td>Progress</td>
                    <td>Aksi</td>
                </tr>
            </thead>
            <tbody>
                    @foreach ($tasks as $task)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $task->list }}</td>
                        <td>{{ $task->mark == 1 ? 'Sudah Selesai' : 'Belum Selesai'}}</td>
                        <td>
                            <div class="d-flex align-items-center gap-2">
                                <a href="{{ route('task.edit', $task->id) }}" class="btn btn-primary">Edit Data</a>
                            <form action="{{ route('task.destroy', $task->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('delete')
                                <button type="submit" class="btn btn-danger">Hapus Data</button>
                            </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
            </tbody>
        </table>
    </div>
</x-app-layout>