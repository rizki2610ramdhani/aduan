@extends('templates.petugas')
@section('title', 'Tindak lanjut pengaduan')
@section('judul', 'Tindak lanjut pengaduan')
@section('content')
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <form action="/postlaporan/{{$id}}" method="post" enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="exampleFormControlTextarea1">Tanggapan</label>
                    <textarea name="tanggapan" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
                </div>
                <div class="row gutters">
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Tanggal Tanggapan</label>
                                <input name="tgl_tanggapan" type="text" class="form-control"  value="{{date('Y-m-d')}}" readonly>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label>Bukti Foto</label>
                                <input name="foto" type="file" >
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-6 col-md-6 col-sm-6 col-12">
                            <div class="form-group">
                                <label></label><br>
                                <a class="btn btn-danger" href="/petugas-dashboard">Batal</a>
                                <button class="btn btn-success" type="submit">Simpan</a>
                            </div>
                        </div>
                </div>
            </div>
        </form>
        </div>
    </div>
</div>
@endsection
