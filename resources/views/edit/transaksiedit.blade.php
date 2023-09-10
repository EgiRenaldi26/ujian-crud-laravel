@extends('layout.header')
@section('content')
<section class="section">
    <div class="section-header">
        <h4><strong>EDIT TRANSAKSI</strong></h4>
    </div>
    <div class="card">
        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body ">
                    <form method="POST" action="{{ route('transaksi.update', $transaksi->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="tanggal">Tanggal</label>
                            <input type="date" id="tanggal" class="form-control" name="tanggal" value="{{ $transaksi->tanggal }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_barang">Nama Barang</label>
                            <input type="text" id="nama_barang" class="form-control" name="nama_barang" value="{{ $transaksi->nama_barang }}" >
                        </div>
                        <div class="form-group">
                            <label for="harga_awal">Harga Awal</label>
                            <input type="number" id="harga_awal" class="form-control" name="harga_awal" value="{{ $transaksi->harga_awal }}" >
                        </div>
                        <div class="form-group">
                            <label for="harga_jual">Harga Jual</label>
                            <input type="number" id="harga_jual" class="form-control" name="harga_jual" value="{{ $transaksi->harga_jual }}" >
                        </div>
                        <div class="form-group">
                            <label for="qty">Qty</label>
                            <input type="number" id="qty" class="form-control" name="qty" value="{{ $transaksi->qty }}" >
                        </div>
                        <div class="form-group">
                            <label for="total_jual">Total Jual</label>
                            <input type="number" id="total_jual" class="form-control" name="total_jual" value="{{ $transaksi->total_jual }}" >
                        </div>
                        <div class="form-group">
                            <label for="laba">Laba</label>
                            <input type="number" id="laba" class="form-control" name="laba" value="{{ $transaksi->laba }}" >
                        </div>
                        <div class="form-group">
                            <label for="keterangan">keterangan</label>
                            <input type="text" id="keterangan" class="form-control" name="keterangan" value="{{ $transaksi->keterangan }}" >
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