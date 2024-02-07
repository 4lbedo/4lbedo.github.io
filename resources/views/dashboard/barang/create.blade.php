@extends('dashboard.index')
@section('content')
    <div class="pt-5"></div>
    <div class="card card-info">
        <div class="card-header">
          <h3 class="card-title">Input Acara Baru</h3>
        </div>
        <form action="/dashboard/barang" method="post">
            @csrf
        <div class="card-body">
          <div class="form-group">
            <label>ID Acara</label>
            <input type="text" name="id_barang" class="form-control" value="{{ old('id_barang') }}">
            @error('id_barang')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label>Kategori</label>
            <select name="category_id" class="form-control">
                <option value=""></option>
                @foreach ($categories as $category)
                <option value="{{ $category->id }}">{{ $category->nama_kategori }}</option>
                @endforeach
            </select>
            @error('category_id')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label>Nama Pasangan</label>
            <input type="text" name="nama_barang" class="form-control" value="{{ old('nama_barang') }}">
            @error('nama_barang')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label>Lokasi</label>
            <input type="text" name="merk" class="form-control" value="{{ old('merk') }}">
            @error('merk')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label>Jumlah Tamu</label>
            <input type="text" name="stock" class="form-control" value="{{ old('stock') }}">
            @error('stock')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <label>Harga Paket</label>
            <input type="text" name="harga_beli" class="form-control" value="{{ old('harga_beli') }}">
            @error('harga_beli')
            <p class="text-danger">{{ $message }}</p>
            @enderror
          </div>
          <div class="form-group">
            <button class="btn btn-primary">Tambah Acara</button>
          </div>
        </div>
        </form>
        <!-- /.card-body -->
      </div>
@endsection
