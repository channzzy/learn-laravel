<x-app-layout title="Detail User">
    <div class="container p-4">
        <div class="card">
            <div class="card-body">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcR6v-Quj0rUbKfkYkO5xry7QsyV_3dNemjlbw&usqp=CAU" alt="" class="img-fluid rounded-pill">
                <h4>Nama</h4>
                <p>{{ $user->name }}</p>
                <h4>Email</h4>
                <p>{{ $user->email }}</p>
            </div>
        </div>
    </div>
</x-app-layout>