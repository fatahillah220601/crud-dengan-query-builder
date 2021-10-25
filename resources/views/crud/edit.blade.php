@extends('main')

@section('judul')
<div class="judul top_nav">
    <div class="nav_menu">
      <nav>
        <div class="nav toggle d-inline" style="width:60rem; margin-left:5px; margin-bottom:5px;">
          <strong style="font-size: 28px;">Data Mahasiswaa | <span style="font-size: 20px">Edit Data</span> </strong>
        </div>
      </nav>
    </div>
  </div>
@endsection

@section('content')
<div class="right_col" role="main">
    <div class="">
      <div class="page-title">
        <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="x_panel">
              <div class="x_title">
                <h2>Edit Data Mahasiswa</h2>
                <ul class="nav navbar-right panel_toolbox">
                  <li><a class="collapse-link"></i></a>
                  </li>
                </ul>
                <div class="clearfix"></div>
              </div>

              <div class="x_content">
                <form action="{{ url('/dashboard',$setdata->id) }}"  class="form-horizontal form-label-left" method="POST">
                    @method('put')
                    @csrf
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"> Nama Mahasiswa*
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nama" value="{{ $setdata->nama_mahasiswa }}" required="required" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"> NIM Mahasiswa*
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input type="text" name="nim"  value="{{ $setdata->nim_mahasiswa }}" class="form-control col-md-7 col-xs-12">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"> Kelas Mahasiswa</label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input class="form-control col-md-7 col-xs-12"  value="{{ $setdata->kelas_mahasiswa }}" required="required" name="kelas" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                      <label class="control-label col-md-3 col-sm-3 col-xs-12"> Prodi Mahasiswa <span>*</span>
                      </label>
                      <div class="col-md-6 col-sm-6 col-xs-12">
                        <input class="date-picker form-control col-md-7 col-xs-12"  value="{{ $setdata->prodi_mahasiswa }}" name="prodi" required="required" type="text">
                      </div>
                    </div>
                    <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12"> Fakultas Mahasiswa <span>*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="date-picker form-control col-md-7 col-xs-12"  value="{{ $setdata->fakultas_mahasiswa }}" name="fakultas" required="required" type="text">
                        </div>
                      </div>
                    <div class="ln_solid"></div>
                    <div class="form-group">
                      <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                        <button class="btn btn-danger" type="button">
                            <a style="color: white; text-decoration:none" href="/dashboard">Cancel</a>
                        </button>
                        <button class="btn btn-warning" type="reset">Reset</button>
                        <button type="submit" class="btn btn-success">Save Change</button>
                      </div>
                    </div>
                </form>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
@endsection