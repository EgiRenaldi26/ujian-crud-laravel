@extends('layout.header')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Transaksi</h1>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Transaksi</h6>
      </div>
      <div class="card-body">
        <a href="{{ route('transaksi.create') }}" class="btn-sm btn-primary">+ Tambah</a>
        <br /><br />
        <div class="table-responsive">
          <table
            class="table table-bordered"
            id="dataTable"
            width="100%"
            cellspacing="0"
          >
            <thead>
              <tr>
                <th>No Transaksi</th>
                <th>Tanggal</th>
                <th>Nama Barang</th>
                <th>Harga Awal</th>
                <th>Harga Jual</th>
                <th>Qty</th>
                <th>Total Jual</th>
                <th>Laba</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($transaksi as $t)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $t->tanggal }}</td>
                <td>{{ $t->nama_barang }}</td>
                <td>{{ $t->harga_awal }}</td>
                <td>{{ $t->harga_jual }}</td>
                <td>{{ $t->qty }}</td>
                <td>{{ $t->total_jual }}</td>
                <td>{{ $t->laba }}</td>
                <td>
                  <a href="{{ route('transaksi.edit', $t->id) }}" class="btn-sm btn-primary">Edit</a> -
                  <a href="{{ route('transaksi.destroy', $t->id) }}"
                    class="btn-sm btn-danger"
                    onclick="event.preventDefault();
                    if (confirm('Apakah anda yakin ingin menghapus?')) {
                      document.getElementById('delete-form-{{ $t->id }}').submit();
                    }">
                     Hapus
                    </a>
                    <form id="delete-form-{{ $t->id }}" action="{{ route('transaksi.destroy', $t->id) }}" method="POST" style="display: none;">
                      @method('DELETE')
                      @csrf
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection