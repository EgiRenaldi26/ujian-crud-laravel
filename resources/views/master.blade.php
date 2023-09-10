@extends('layout.header')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Master Barang</h1>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Master Barang</h6>
      </div>
      <div class="card-body">
        <a href="{{ route('barang.create') }}" class="btn-sm btn-primary">+ Tambah</a>
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
                <th>Barcode</th>
                <th>Nama Barang</th>
                <th>Jumlah Barang</th>
                <th>Harga</th>
                <th>Tanggal Masuk</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($barang as $b)
              <tr>
                <td>{{ $b->barcode}}</td>
                <td>{{ $b->nama_barang }}</td>
                <td>{{ $b->jumlah_barang }}</td>
                <td>{{ $b->harga }}</td>
                <td>{{ $b->tanggal_masuk }}</td>
                <td>
                  <a href="{{ route('barang.edit', $b->id) }}" class="btn-sm btn-primary">Edit</a> -
                  <a href="{{ route('barang.destroy', $b->id) }}"
                    class="btn-sm btn-danger"
                    onclick="event.preventDefault();
                    if (confirm('Apakah anda yakin ingin menghapus?')) {
                      document.getElementById('delete-form-{{ $b->id }}').submit();
                    }">
                     Hapus
                    </a>
                    <form id="delete-form-{{ $b->id }}" action="{{ route('barang.destroy', $b->id) }}" method="POST" style="display: none;">
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