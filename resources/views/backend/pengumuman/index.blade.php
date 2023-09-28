@extends('backend.layouts.main')

@section('isi')
<div class="card">
        <div class="card-header">
          <h3 class="card-title">Data Pengumuman</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>            
          </div>
        </div>

        <a href="/backend/pengumuman/create" class="btn btn-primary">Tambah Pengumuman</a>
        <table class="table table-striped table-sm">
          <thead>
            <tr>
              <th scope="col">No.</th>
              <th scope="col">Slug</th>
              <th scope="col">Judul</th>
              <th scope="col">Tanggal</th>
              <th scope="col">Gambar</th>
              <th scope="col">Kutipan</th>
              <th scope="col">Isi</th>                            
              <th scope="col">Action</th>
            </tr>
          </thead>
          <tbody>
          @foreach ($pengumuman as $pengumumans)
            <tr>
              <td>{{ $loop->iteration }}</td>
              <td>{{ $pengumumans->slug }}</td>
              <td>{{ $pengumumans->judul }}</td>
              <td>{{ dateID($pengumumans->tanggal) }}</td>          
              <td>{{ $pengumumans->gambar }}</td>
              <td>{{ $pengumumans->kutipan }}</td>
              <td>{{ $pengumumans->isi }}</td>                            
              <td>
                
                <a href="/backend/pengumuman/{{ $pengumumans->slug }}/edit" class="badge bg-warning"><i class="fas fa-edit"></i></i></a> 
                <form action="/backend/pengumuman/{{ $pengumumans->slug }}" method="post" class="d-inline">
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

