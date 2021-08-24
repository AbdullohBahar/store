@extends('toko.layouts.toko')

@section('title')
    Tambah Produk
@endsection

@section('content')
<div class="main-content">
  <section class="section">
    <div class="section-header">
      <h1>Input Produk</h1>
    </div>

    <div class="section-body">
      <form action="">
        <div class="row">
          <div class="col-md-6">
            <div class="form-group">
              <label style="font-size: 20px;">Nama Produk</label>
              <input type="text" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label style="font-size: 20px;">Harga Produk</label>
              <input type="number" class="form-control">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label style="font-size: 20px;">Jenis Produk</label>
              <select name="" class="form-control select2">
                <option value="">Makanan</option>
                <option value="">Barang Rumah Tangga</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12">
            <div class="form-group">
              <label style="font-size: 20px;">Deskripsi Produk</label>
              <textarea name="" id="editor1" cols="30" rows="10"></textarea>
            </div>
          </div>
        </div>
        <button class="mt-5 btn btn-success">Submit</button>
      </form>
    </div>
  </section>
</div>
@endsection