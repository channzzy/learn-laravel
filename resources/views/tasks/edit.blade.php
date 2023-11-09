<x-app-layout title="Crete Task">
    <form action="/task/{{ $task->id }}" method="post">
        @method('PUT')
        @csrf
        <label for="name">Tambahkan Data Task</label>
        <input type="text" class="form-control" id="name" name="name_task" value="{{ $task->list }}">
        <button type="submit">Edit Data</button>
    </form>
</x-app-layout>