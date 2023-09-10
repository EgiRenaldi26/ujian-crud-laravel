@extends('layout.header')
@section('content')
<section class="section">
    <div class="section-header">
        <h4><strong>TAMBAH BARANG</strong></h4>
    </div>
    <div class="card">
        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body ">
                    <form method="POST" action="{{ route('barang.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="barcode">Barcode</label>
                            <input type="text" id="barcode" class="form-control" name="barcode">
                        </div>
                    <div class="form-group">
                        <label for="nama_barang">Nama Barang</label>
                        <input type="text" id="nama_barang" class="form-control" name="nama_barang">
                    </div>
                    <div class="form-group">
                        <label for="jumlah_barang">Jumlah Barang</label>
                        <input type="number" id="jumlah_barang" class="form-control" name="jumlah_barang">
                    </div>
                    <div class="form-group">
                        <label for="harga">Harga</label>
                        <input type="number" id="harga" class="form-control" name="harga">
                    </div>
                    <div class="form-group">
                        <label for="tanggal_masuk">Tanggal Masuk</label>
                        <input type="date" id="tanggal_masuk" class="form-control" name="tanggal_masuk">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>
</section>
@endsection