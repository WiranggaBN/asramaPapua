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
          <h3 class="card-title">Calon Penghuni Asrama</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>            
          </div>
        </div>

        <a href="/calon/create" class="btn btn-primary">Tambah Calon Penghuni</a>
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
              <th scope="col">Nama Ayah</th>
              <th scope="col">Nama Ibu</th>              
              <th scope="col">NIK</th>              
              <th scope="col">Telepon Orang tua</th>              
              <th scope="col">Pekerjaan Ayah</th>
              <th scope="col">Pekerjaan Ibu</th>                            
              <th scope="col">Alamat Orang Tua</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($calonPenghuni as $calonPenghunis)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $calonPenghunis->name }}</td>
              <td>{{ $calonPenghunis->username }}</td>
              <td>{{ $calonPenghunis->email }}</td>
              <td>{{ $calonPenghunis->nomor_telepon }}</td>
              <td>{{ $calonPenghunis->jenis_kelamin }}</td>
              <td>{{ $calonPenghunis->alamat }}</td>              
              <td>{{ dateID($calonPenghunis->tanggal_lahir) }}</td>    
              <td>{{ $calonPenghunis->nama_ayah }}</td>
              <td>{{ $calonPenghunis->nama_ibu }}</td>      
              <td>{{ $calonPenghunis->nik }}</td>                            
              <td>{{ $calonPenghunis->telpon_ortu }}</td>                         
              <td>{{ $calonPenghunis->pekerjaan_ayah }}</td>
              <td>{{ $calonPenghunis->pekerjaan_ibu }}</td>              
              <td>{{ $calonPenghunis->alamat_ortu }}</td>         
              <td>
                
                <a href="/calonPenghuni/{{ $calonPenghunis->name }}/edit" class="badge bg-warning"><i class="fas fa-edit"></i></i></a> 
                <!-- <form action="/calonPenghuni/{{ $calonPenghunis->name }}" method="post" class="d-inline">
                  @method('deletedPenghuni')
                  @csrf
                  <button class="badge bg-success border-0" onclick="return confirm('Yakin Menghapus?')">
                    <i class="fas fa-check"></i>
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

