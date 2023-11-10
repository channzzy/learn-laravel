<x-app-layout title="Crete Task">
    <div class="container-fluid p-3">
        <div class="card card-body">
            <h6>Edit Task</h6>
            <form action="{{ route('task.update', $task->id) }}" method="post">
                @method('PUT')
                @csrf
                <label for="name">Edit Data Task</label>
                <input type="text" class="form-control  @error ('list') is-invalid @enderror mb-3" id="name" name="list" value="{{ old('list', $task->list) }}">
                @error('list')
                    <div class="alert alert-danger">
                        {{ $message }}
                    </div>
                @enderror
                <button type="submit" class="btn btn-primary">Edit Data</button>
            </form>
        </div>
    </div>
</x-app-layout>