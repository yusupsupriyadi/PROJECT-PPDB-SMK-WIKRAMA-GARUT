@extends('layouts.master')
@section('content')

<section class="content">
<!-- Breadcomb area Start-->
<div class="breadcomb-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="breadcomb-list">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                            <div class="breadcomb-wp">
                                <div class="breadcomb-icon">
                                    <i class="notika-icon notika-windows"></i>
                                </div>
                                <div class="breadcomb-ctn">
                                    <h2>Data Siswa</h2>
                                    <p>Informasi <span class="bread-ntd">Siswa Tendaftar</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6 col-xs-3">
                            <div class="breadcomb-report">
                                <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="notika-icon notika-sent"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Breadcomb area End-->
<!-- Data Table area Start-->
<div class="data-table-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="data-table-list">
                    
                    <div class="table-responsive">
                        <table id="data-table-basic" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Lengkap</th>
                                    <th>Nama Panggilan</th>
                                    <th>JK</th>
                                    <th>Agama</th>
                                    <th>Tempat Tanggal Lahir</th>
                                    <th>Cita-Cita</th>
                                    <th>Hobby</th>
                                    <th>Anak Ke</th>
                                    <th>Jumlah Saudara</th>
                                    <th>Berat Badan</th>
                                    <th>Tinggi Badan</th>
                                    <th>Golongan Darah</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data_siswa as $siswa)
                                <tr>
                                    <td>{{$siswa->id}}</td>
                                    <td>{{$siswa->nama_lengkap}}</td>
                                    
                                    <td>{{$siswa->nama_panggilan}}</td>
                                    <td>{{$siswa->jk}}</td>
                                    <td>{{$siswa->agama}}</td>
                                <td>{{$siswa->tempat_lahir}}, {{$siswa->tanggal_lahir}}</td>
                                <td>{{$siswa->cita_cita}}</td>
                                <td>{{$siswa->hobby}}</td>
                                <td>{{$siswa->anak_ke}}</td>
                                <td>{{$siswa->jumlah_saudara}}</td>
                                <td>{{$siswa->berat_badan}}</td>
                                <td>{{$siswa->tinggi_badan}}</td>
                                    <td>{{$siswa->golongan_darah}}</td>
                                    
  
                                  
  
                                    <td>
                                      <a href="/siswa/{{$siswa->id}}/edit" class = "btn btn-warning btn-sm">Edit</a>
                                      <a href="/siswa/{{$siswa->id}}/delete" class="btn btn-danger btn-sm" onclick="return confirm('Yakin Mau diHapus?')">Hapus</a>
                                    </td>
  
                                  </tr>
                                  @endforeach
                            </tfoot>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Data Table area End-->
</section>
@stop