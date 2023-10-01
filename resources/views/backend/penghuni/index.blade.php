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

<div>
      <h3 class="card-title">Penghuni Asrama</h3>
          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>            
          </div>
        </div>

        <a href="/penghuni/create" class="btn btn-primary mt-2 mb-2">Tambah Penghuni</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col" style="text-align: center;width: 0%">No.</th>
              <th scope="col" style="text-align: center;width: 0%">Nama</th>
              <th scope="col" style="text-align: center;width: 0%">Nama Pengguna</th>
              <th scope="col" style="text-align: center;width: 20px">Nama Kamar</th>
              <th scope="col" style="text-align: center;width: 20px">Email</th>
              <th scope="col" style="text-align: center;width: 0%">Nomor Telepon</th>
              <th scope="col" style="text-align: center;width: 0%">Jenis Kelamin</th>
              <th scope="col" style="text-align: center;width: 10px">Alamat</th>
              <th scope="col" style="text-align: center;width: 0%">Tanggal Lahir</th>
              <th scope="col" style="text-align: center;width: 0%">Nama Ayah</th>
              <th scope="col" style="text-align: center;width: 0%">Nama Ibu</th>              
              <th scope="col" style="text-align: center;width: 0%">NIK</th>              
              <th scope="col" style="text-align: center;width: 0%">Telepon Orang tua</th>              
              <th scope="col" style="text-align: center;width: 0%">Pekerjaan Ayah</th>
              <th scope="col" style="text-align: center;width: 0%">Pekerjaan Ibu</th>                            
              <th scope="col" style="text-align: center;width: 0%">Alamat Orang Tua</th>
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($penghuni as $penghunis)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $penghunis->name }}</td>
              <td>{{ $penghunis->username }}</td>
              <td>{{ $penghunis->kamar->namakamar ?? '' }}</td>
              <td>{{ $penghunis->email }}</td>
              <td>{{ $penghunis->nomor_telepon }}</td>
              <td>{{ $penghunis->jenis_kelamin }}</td>
              <td>{{ $penghunis->alamat }}</td>              
              <td>{{ dateID($penghunis->tanggal_lahir) }}</td>    
              <td>{{ $penghunis->nama_ayah }}</td>
              <td>{{ $penghunis->nama_ibu }}</td>                            
              <td>{{ $penghunis->nik }}</td>                            
              <td>{{ $penghunis->telpon_ortu }}</td>                            
              <td>{{ $penghunis->pekerjaan_ayah }}</td>
              <td>{{ $penghunis->pekerjaan_ibu }}</td>              
              <td>{{ $penghunis->alamat_ortu }}</td>              
              <td>
                
                <a href="/penghuni/{{ $penghunis->name }}/edit" class="badge bg-warning"><i class="fas fa-edit"></i></i></a>
                <!-- <form action="/penghuni/{{ $penghunis->name }}" method="post" class="d-inline">
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

