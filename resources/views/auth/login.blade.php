<x-app-layout title="Login Page">
    <div class="container p-2">
        <div class="card">
            <div class="card-header">Silahkan masukan akun anda</div>
            <div class="card-body">
                <form action="{{ route('login.proses') }}" method="post">
                    @csrf
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
                    <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>