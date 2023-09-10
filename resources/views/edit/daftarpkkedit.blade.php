@extends('layout.header')
@section('content')
<section class="section">
    <div class="section-header">
        <h4><strong>BARANG - EDIT</strong></h4>
    </div>
    <div class="card"> 
        <div class="section-body">
            <div class="row">
              <div class="col-12">
                <div class="card">
                  <div class="card-body ">
                    <form method="POST" action="{{ route('daftarpkk.update', $daftarpkk->id) }}">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="nama_guru">Nama Guru</label>
                            <input type="text" id="nama_guru" class="form-control" name="nama_guru" value="{{ $daftarpkk->nama_guru }}" required>
                        </div>
                    <div class="form-group">
                        <label for="kelas">Kelas</label>
                        <input type="text" id="kelas" class="form-control" name="kelas" value="{{ $daftarpkk->kelas }}">
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