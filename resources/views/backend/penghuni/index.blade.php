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
          <h3 class="card-title">Penghuni Asrama</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>            
          </div>
        </div>

        <a href="/penghuni/create" class="btn btn-primary">Tambah Penghuni</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama</th>
              <th scope="col">Email</th>
              <th scope="col">Nomor Telepon</th>
              <th scope="col">Jenis Kelamin</th>
              <th scope="col">Alamat</th>
              <th scope="col">Tanggal Lahir</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($penghuni as $penghunis)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $penghunis->name }}</td>
              <td>{{ $penghunis->email }}</td>
              <td>{{ $penghunis->nomor_telepon }}</td>
              <td>{{ $penghunis->jenis_kelamin }}</td>
              <td>{{ $penghunis->alamat }}</td>              
              <td>{{ dateID($penghunis->tanggal_lahir) }}</td>          
              <td>
                <a href="/penghuni/{{ $penghunis->name }}" class="badge bg-info"><i class="fas fa-eye"></i></a>
                <a href="" class="badge bg-warning"><i class="fas fa-edit"></i></i></a> 
                <form action="/penghuni/{{ $penghunis->name }}" method="post" class="d-inline">
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

