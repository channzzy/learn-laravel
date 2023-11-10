<x-app-layout>
    <div class="container">
        <div class="card">
            <div class="card-header">
                <h4>Daftar Akun Anda</h4>
            </div>
            <div class="card-body">
                <form action="{{ route('create.account') }}" method="post">
                    @csrf
                    <div class="form-group mb-3">
                        <label for="name" class="form-label">Masukan Nama Anda</label>
                        <input type="text" name="name" id="name" class="form-control @error ('name') is-invalid @enderror" value="{{ old('name') }}">
                        @error('name')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="username" class="form-label">Masukan Username Anda</label>
                        <input type="text" name="username" id="name" class="form-control @error ('username') is-invalid @enderror" value="{{ old('username') }}">
                        @error('username')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="email" class="form-label">Masukan Email Anda</label>
                        <input type="email" name="email" id="email" class="form-control @error ('email') is-invalid @enderror" value="{{ old('email') }}">
                        @error('email')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group mb-3">
                        <label for="form-label">Masukan Password Anda</label>
                        <input type="password" name="password" id="password" class="form-control  @error ('password') is-invalid @enderror">
                        @error('password')
                            <div class="text-danger">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <button type="submit" class="btn btn-primary">Daftar</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>