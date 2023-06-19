<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <title>Products</title>
</head>
<body>
<header>
        <h1 class="site-heading text-center text-faded d-none d-lg-block">
                <span class="site-heading-lower">Tambah Product</span>
            </h1>
        </header>
    <div class="container">
        <form action="{{ route('products.update', $product) }}" method="POST">
            @csrf
            @method('PUT')    
            <div class="form-group">
                <label for="name">Kode Product :</label>
                <input type="text" class="form-control" name="kode_barang" id="kode_barang" placeholder="Masukkan Nama Barang" value="{{ old('kode_barang', $product->kode_barang) }}" required autofocus>            
            </div>
            <div class="form-group">
                <label for="name">Nama Product :</label>
                <input type="text" class="form-control" name="nama_barang" id="nama_barang" placeholder="Masukkan Nama Barang" value="{{ old('nama_barang', $product->nama_barang) }}" required autofocus>            
            </div>
            <div class="form-group">
                <label for="price">Harga Product :</label>
                <input type="number" class="form-control" name="harga_barang" id="harga_barang" placeholder="Masukkan Harga Barang" value="{{ old('harga_barang', $product->harga_barang) }}" required>            
            </div>
            <div class="form-group">
                <label for="description">Deskripsi :</label>
                <input type="text" class="form-control" name="deskripsi" id="deskripsi" placeholder="Masukkan Deskripsi " value="{{ old('deskripsi', $product->deskripsi) }}" required>            
            </div>
            <div class="form-group">
                <label for="name">Satuan Barang :</label>
                <input type="text" class="form-control" name="satuan_barang" id="satuan_barang" placeholder="Masukkan Satuan Barang" value="{{ old('satuan_barang', $product->satuan_barang) }}" required autofocus>            
            </div>
            
            <button type="submit" class="btn btn-primary">
                                        {{ __('Update') }}
                                    </button>
        </form>
    </div>    
   
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.7/dist/umd/popper.min.js" integrity="sha384-zYPOMqeu1DAVkHiLqWBUTcbYfZ8osu1Nd6Z89ify25QV9guujx43ITvfi12/QExE" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.min.js" integrity="sha384-Y4oOpwW3duJdCWv5ly8SCFYWqFDsfob/3GkgExXKV4idmbt98QcxXYs9UoXAB7BZ" crossorigin="anonymous"></script>
</body>
</html>