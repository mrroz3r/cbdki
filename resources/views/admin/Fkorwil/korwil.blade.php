@extends('layouts.layouts-admin')
@section('title')
Admin - Korwil
@endsection
@section('content')

  <div class="data-table-area mg-b-15">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12">
                            <form id="adminpro-order-form" class="adminpro-form" method="POST" action="{{url('korwil/save')}}" enctype="multipart/form-data">
                                @csrf
                            <div class="sparkline13-list shadow-reset">
                                <div class="sparkline13-hd">
                                    <div class="main-sparkline13-hd">
                                        <h1>Korwil<span class="table-project-n"></span></h1>
                                        <div class="sparkline13-outline-icon">
                                            <span class="sparkline13-collapse-link"><i class="fa fa-chevron-up"></i></span>
                                            <span class="sparkline13-collapse-close"><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="sparkline13-graph">
                                    <div class="datatable-dashv1-list custom-datatable-overright">
                                        <table id="table" data-toggle="table" data-pagination="true" data-search="true" data-show-columns="true" data-show-pagination-switch="true" data-show-refresh="false" data-key-events="true" data-show-toggle="true" data-resizable="true" data-cookie="true" data-cookie-id-table="saveId" data-click-to-select="true" data-toolbar="#toolbar">
                                            <thead>
                                                <tr>
                                                    <th data-field="No">No</th>
                                                    <th data-field="nama">Nama</th>
                                                    <th data-field="keterangan">Keterangan</th>
                                                    <th data-field="logo">Logo</th>
                                                    <th colspan="2">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php
                                                $i = 1;
                                                $korwil = \App\Korwil::all();  
                                                ?>
                                                @foreach ($korwil as $n)
                                                <tr>
                                                    <td>{{$i++}}</td>
                                                    <td>{{$n->nama}}</td>
                                                    <td>{{$n->keterangan}}</td>
                                                    <td><img src="{{ url('images/'.$n->logo) }}" style="width: 70px; height: 70px"></td>
                                                    <td><a href="{{url('korwil/edit/'.$n->id)}}"><i class="fa fa-pen"></i></a></td>
                                                    <td class="datatable-ct"><a href="{{url('korwil/delete/'.$n->id)}}"><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div class="col-lg-12">
                                <div class="login-bg">
                                    <center>
                                        <label>Tambah Data</label>
                                        </center>
                                    <div class="row">
                                        <br>
                                        <div class="col-lg-12">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-12">
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Nama</p>
                                            </div>
                                        </div>
                                         
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <textarea class="contact-message" cols="30" rows="10" name="nama"></textarea>
                                                <i class="fa fa-comment login-user"></i>
                                            </div>
                                    </div>
                    </div>
                                <div class="row">
                                        <div class="col-lg-4">
                                            <div class="login-input-head">
                                                <p>Keterangan</p>
                                            </div>
                                        </div>
                                         
                                        <div class="col-lg-8">
                                            <div class="login-textarea-area">
                                                <textarea class="contact-message" cols="30" rows="10" name="keterangan"></textarea>
                                                <i class="fa fa-comment login-user"></i>
                                            </div>
                                    </div>
                                      <center>
                        <div class="form-row">
                                        <div class="form-group col-md-12">
                                            <br>
                                          <img src="{{asset('images/no-image.png')}}" alt="Nature" class="responsive" id="blah1" style="width: 200px;height: 200px;">
                                          <center>
                                            <div class="login-input-head">
                                                <p>Logo</p>
                                            </div>
                                        </center>
                                    </div>
                                </center>
                            </div>
                            <center>
                            <div class="form-row">
                              <div class="form-group col-md-12">
                                <input type="file" id="inputCity" name="logo" onchange="readURL1(this);">
                            </div>
                        </div>
                        </center>
                        <center>
                        <div class="form-row">
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary btn-lg"><i class="fa fa-plus"></i></button>
                        </div>
                    </div>
                    </center>
                </form>
            </div>
<script type="text/javascript">
 function readURL1(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $('#blah1')
      .attr('src', e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}
</script>
@endsection