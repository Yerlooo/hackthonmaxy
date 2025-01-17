@extends('partial.main')

@section('content')
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">User</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Data User</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-12">
            <a href="{{route('user.create')}}" class="btn btn-primary mb-3">Tambah Data</a>
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Responsive Hover Table</h3>

                <div class="card-tools">
                  <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                      <button type="submit" class="btn btn-default">
                        <i class="fas fa-search"></i>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body table-responsive p-0">
                <table class="table table-hover text-nowrap">
                  <thead>
                    <tr>
                      <th>No</th>
                      <th>No Referensi</th>
                      <th>Nama</th>
                      <th>Nama Properti</th>
                      <th>Lokasi</th>
                      <th>Nama Developer</th>
                      <th>Tanggal Pengajuan</th>
                      <th>Tanggal Putusan</th>
                      <th>Nama Uker</th>
                      <th>Plafond Pengajuan	</th>
                      <th>Plafond Disetujui</th>
                      <th>Status</th>
                      <th>Email</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>

                    @foreach ($data as $d)
                    <tr>
                      <td>{{$loop->iteration}}</td>
                      <td>{{$d->no_referensi}}</td>
                      <td>{{$d->name}}</td>
                      <td>{{$d->nama_properti}}</td>
                      <td>{{$d->lokasi}}</td>
                      <td>{{$d->nama_developer}}</td>
                      <td>{{$d->tgl_pengajuan}}</td>
                      <td>{{$d->tgl_putusan}}</td>
                      <td>{{$d->nama_uker}}</td>
                      <td>{{$d->plafond_pengajuan}}</td>
                      <td>{{$d->plafond_disetujui}}</td>
                      <td>{{$d->status}}</td>
                      <td>{{$d->email}}</td>
                      <td>
                        <a href="{{ route('user.edit',['id' => $d->id])}}" class="btn btn-primary"><i class="fas fa-pen"></i>Edit</a>
                        <a data-toggle="modal" data-target="#modal-hapus{{ $d->id }}" href="" class="btn btn-danger"><i class="fas fa-trash-alt"></i>Hapus</a>
                      </td>
                    </tr>
                    <div class="modal fade" id="modal-hapus{{ $d->id }}">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Konfirmasi Hapus Data</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              <p>Apakah kamu yakin ingin menghapus data <b>{{ $d->name }}</b> ?</p>
            </div>
            <div class="modal-footer justify-content-between">
                <form action="{{ route('user.delete',['id' => $d->id]) }}" method="POST">
                @csrf
                @method('PUT')
              <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
              <button type="submit" class="btn btn-primary">Ya, Hapus Data</button>
              </form>
            </div>
          </div>
          <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
      </div>
      <!-- /.modal -->
                    @endforeach
                  </tbody>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
@endsection
