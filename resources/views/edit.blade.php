<x-app-layout>
    <div class="container-fluid p-3">
        <h3>Silahkan Ubah Data</h3>
        <div class="card mt-3">
            <div class="card-body">
                <form action="{{ route('update.proses', $barangs->kode_brg) }}" method="post">
                    @method('PUT')
                    @csrf
                    <div class="form-group">
                        <label for="kode_barang">Kode Barang</label>
                        <input type="text" name="kode_brg" id="kode_barang" class="form-control @error ('kode_brg') is-invalid @enderror" value="{{ old('kode_brg', $barangs->kode_brg)  }}">
                        @error('kode_brg')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" name="nm_brg" id="nama_barang" class="form-control @error ('nm_brg') is-invalid @enderror" value="{{ old('kode_brg', $barangs->nm_brg)  }}">
                        @error('nm_brg')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="harga_barang">Harga Barang</label>
                        <input type="text" name="harga" id="harga_barang" class="form-control @error ('harga') is-invalid @enderror" value="{{ old('kode_brg', $barangs->harga)  }}">
                        @error('harga')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="stok_barang">Stok Barang</label>
                        <input type="text" name="stok" id="stok_barang" class="form-control @error ('stok') is-invalid @enderror" value="{{ old('kode_brg', $barangs->stok)  }}">
                        @error('stok')
                            <div class="alert alert-danger mt-2">
                                {{ $message }}
                            </div>
                        @enderror
                    </div>
                    <x-button class="mt-3">
                        {{ ('Edit Data') }}
                    </x-button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>