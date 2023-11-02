<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" />
    <title>Document</title>
</head>
<body style="background: lightgray">
    <div class="container mt-5 mb-5">
        <div class="row">
            <div class="cold-md-12">
                <div class="card border-0 shadow rounded">
                    <div class="card-body">
                        <form action="{{ route('posts.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="gambar" class="font-weight-bold">
                                Gambar
                            </label>
                            <input type="file" id="gambar" class="form-control @error('image') is-invalid @enderror" name="image">

                            <!-- message error-->
                            @error('image')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                            @enderror
                        </div>
                        
                        <div class="form-group">
                            <label for="title" class="font-weight-bold">
                                Title
                            </label>
                            <input type="text" id="title" class="form-control @error('title') is-invalid @enderror" name="title">

                            <!-- message error-->
                            @error('title')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="konten" class="font-weight-bold">
                                Konten
                            </label>
                            <input type="text" id="konten" class="form-control @error('konten') is-invalid @enderror" name="konten">

                            <!-- message error-->
                            @error('konten')
                                    <div class="alert alert-danger mt-2">
                                        {{ $message }}
                                    </div>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-md btn-primary">SIMPAN</button>
                        <a href="{{ route('posts.index') }}" class="btn btn-md btn-warning">BATAL</a>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script>
<script>
    // CKEDITOR.replace( 'konten' );
</script>
</body>
</html>