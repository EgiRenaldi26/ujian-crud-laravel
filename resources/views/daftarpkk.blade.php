@extends('layout.header')
@section('content')
    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Daftar PKK</h1>
    <div class="card shadow mb-4">
      <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Daftar PKK</h6>
      </div>
      <div class="card-body">
        <a href="{{ route('daftarpkk.create') }}" class="btn-sm btn-primary">+ Tambah</a>
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
                <th>No</th>
                <th>Nama Guru</th>
                <th>Kelas</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                @foreach ($daftarpkk as $d)
                <td>{{ $loop->iteration }}</td>
                <td>{{ $d->nama_guru }}</td>
                <td>{{ $d->kelas }}</td>
                <td>
                  <a href="{{ route('daftarpkk.edit', $d->id) }}" class="btn-sm btn-primary">Edit</a> -
                  <a href="{{ route('daftarpkk.destroy', $d->id) }}"
                    class="btn-sm btn-danger"
                    onclick="event.preventDefault();
                    if (confirm('Apakah anda yakin ingin menghapus?')) {
                      document.getElementById('delete-form-{{ $d->id }}').submit();
                    }">
                     Hapus
                    </a>
                    <form id="delete-form-{{ $d->id }}" action="{{ route('daftarpkk.destroy', $d->id) }}" method="POST" style="display: none;">
                      @method('DELETE')
                      @csrf
                    </form>
                </td>
                @endforeach
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
@endsection