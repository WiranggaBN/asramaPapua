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
          <h3 class="card-title">Data Orangtua</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>            
          </div>
        </div>

        <a href="/orangtua/create" class="btn btn-primary">Tambah Data Orangtua</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nama Ayah</th>
              <th scope="col">Nama Ibu</th>
              <th scope="col">Email</th>
              <th scope="col">Nomor Telepon</th>
              <th scope="col">Pekerjaan Ayah</th>
              <th scope="col">Pekerjaan Ibu</th>              
              <th scope="col">Alamat</th>
              <th scope="col">Tanggal Lahir Ayah</th>
              <th scope="col">Tanggal Lahir Ibu</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($orangtua as $orangtuas)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $orangtuas->nama_ayah }}</td>
              <td>{{ $orangtuas->nama_ibu }}</td>
              <td>{{ $orangtuas->email }}</td>
              <td>{{ $orangtuas->nomor_telepon }}</td>
              <td>{{ $orangtuas->pekerjaan_ayah }}</td>
              <td>{{ $orangtuas->pekerjaan_ibu }}</td>
              <td>{{ $orangtuas->alamat }}</td>              
              <td>{{ dateID($orangtuas->tanggal_lahir_ayah) }}</td>          
              <td>{{ dateID($orangtuas->tanggal_lahir_ibu) }}</td>          
              <td>
                <a href="/orangtua/{{ $orangtuas->nama_ayah }}" class="badge bg-info"><i class="fas fa-eye"></i></a>
                <a href="" class="badge bg-warning"><i class="fas fa-edit"></i></i></a> 
                <form action="/orangtua/{{ $orangtuas->nama_ayah }}" method="post" class="d-inline">
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

