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

        <a href="/pengumuman/create" class="btn btn-primary">Tambah Pengumuman</a>
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
            
          </tbody>
        </table>
      </div>
</div>
@endsection

