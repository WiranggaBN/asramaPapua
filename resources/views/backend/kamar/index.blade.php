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
          <h3 class="card-title">Data Kamar</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>            
          </div>
        </div>

        <a href="/kamar/create" class="btn btn-primary">Tambah Data Kamar</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Nomor Kamar</th>
              <th scope="col">Nama Kamar</th>
              <th scope="col">Kapasitas Kamar</th>
              <th scope="col">Aset Kamar</th>
              <th scope="col">Penghuni</th>              
              <th scope="col">Status Kamar</th>                            
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($kamar as $kamars)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $kamars->nomor_kamar }}</td>
              <td>{{ $kamars->namakamar }}</td>
              <td>{{ $kamars->kapasitas_kamar }}</td>
              <td>{{ $kamars->aset_kamar }}</td>
              <td>{{ $kamars->penghuni }}</td>              
              <td>{{ $kamars->status_kamar }}</td>                                   
              <td>
                
                <a href="/kamar/{{ $kamars->namakamar }}/edit" class="badge bg-warning"><i class="fas fa-edit"></i></i></a> 
                <!-- <form action="/kamar/{{ $kamars->namakamar }}" method="post" class="d-inline">
                  @method('delete')
                  @csrf
                  <button class="badge bg-danger border-0" onclick="return confirm('Yakin Menghapus?')">
                    <i class="fas fa-trash"></i>
                  </button>
                </form> -->
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
</div>
@endsection

