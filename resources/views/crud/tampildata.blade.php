@extends('main')

@section('judul')
<div class="judul top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle d-inline" style="width:60rem; margin-left:5px; margin-bottom:5px;">
          <strong style="font-size: 28px;">Data Mahasiswa | <span style="font-size: 20px">Daftar Mahasiswa</span> </strong>
        </div>
      </nav>
    </div>
  </div>
@endsection

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>  
        @endif
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Daftar Tabel Mahasiswa</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">
                <div class="table-responsive">
                  <table class="table table-striped jambo_table bulk_action">
                    <thead>
                      <tr class="headings">
                        <th class="column-title">No </th>
                        <th class="column-title">Nama</th>
                        <th class="column-title">NIM </th>
                        <th class="column-title">Kelas </th>
                        <th class="column-title">Prodi </th>
                        <th class="column-title">Fakultas </th>
                        <th class="column-title text-center">Action</th>
                      </tr>
                    </thead>

                    <tbody>
                        @foreach ($mahasiswa as $insert)
                        <tr class="even pointer">
                            <td class=" ">{{ $loop->iteration }}</td>
                            <td class=" ">{{ $insert->nama_mahasiswa }}</td>
                            <td class=" ">{{ $insert->nim_mahasiswa }}</td>
                            <td class=" ">{{ $insert->kelas_mahasiswa }}</td>
                            <td class=" ">{{ $insert->prodi_mahasiswa }}</td>
                            <td class=" ">{{ $insert->fakultas_mahasiswa }}</td>
                            <td class="text-center">
                                <a href="{{ url('/edit-data',$insert->id) }}" class="btn btn-primary btn-sm">
                                    <i class="fa fa-pencil"></i>
                                </a>
                                &ensp;
                                <form action="{{ url('dashboard',$insert->id) }}" method="POST" onsubmit="return confirm('HAPUS DATA INI?')" style="display: inline;">
                                    @method('delete')
                                    @csrf
                                    <button class="btn btn-danger btn-sm">
                                        <i class="fa fa-trash-o"></i>
                                    </button>
                                </form>
                            </td>
                          </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection