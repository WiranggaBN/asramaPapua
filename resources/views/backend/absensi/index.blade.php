@extends('backend.layouts.main')

@section('isi')
<div class="col-12">
      @if(session()->has('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
      @endif
</div>

<div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Absensi</h3>

          <div class="card-tools">
          <a href="backend/absensi/cetak" target="_blank" class="btn btn-primary text-light mb-3"><i class="bi bi-printer"></i> Cetak Absensi</a>         
          </div>
        </div>
        
        <a href="/absensi/create" class="btn btn-primary">Tambah Absensi</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Nama Kamar</th>
              <th scope="col">Tanggal Keluar</th>
              <th scope="col">Tanggal Masuk</th>
              <th scope="col">Jam Keluar</th>
              <th scope="col">Jam Masuk</th>              
              <th scope="col">Alasan</th>
              <th scope="col">Keterangan</th>              
              <th scope="col">Validasi</th>              
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($absensi as $absensis)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $absensis->name }}</td>
              <td>{{ $absensis->kamar->namakamar ?? ''}}</td>
              <td>{{ dateID($absensis->tanggal_keluar) }}</td>          
              <td>{{ dateID($absensis->tanggal_masuk) }}</td>          
              <td>{{ $absensis->jam_keluar }} WIB</td>
              <td>{{ $absensis->jam_masuk }} WIB</td>
              <td>{{ $absensis->alasan }}</td>                            
              <td>{{ $absensis->keterangan }}</td>   
              <td>{{ $absensis->validasi }}</td>   
              <td>
                
                <a href="/absensi/{{ $absensis->name }}/edit" class="badge bg-warning"><i class="fas fa-edit"></i></i></a> 
                <form action="/absensi/{{ $absensis->name }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin Menghapus?')">
                    <i class="fas fa-trash"></i>
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>
@endsection

