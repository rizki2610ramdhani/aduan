@extends('templates.petugas')
@section('title', 'Profile Petugas')
@section('judul', 'Profile Petugas')
@section('content')
<div class="row gutters">
    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
        <div class="card">
            <div class="card-header">
                <div class="card-title">Profile</div>
            </div>
            <div class="card-body">
                <table cellpadding="10">
                    <tr>
                        <td>NIK</td>
                        <td>:</td>
                        <td>{{Auth::user()->nik}}</td>
                        <td rowspan="5">
                            <img src="{{ asset('imagesProfile/' . Auth::user()->foto) }}" class="img-fluid" alt="Tycoon Admin" width="30%">
                        </td>
                    </tr>
                    <tr>
                        <td>Nama</td> <td>:</td>
                        <td>{{Auth::user()->nama}}</td>
                    </tr>
                    <tr>
                        <td>Username</td><td>:</td>
                        <td>{{Auth::user()->username}}</td>
                    </tr>
                    <tr>
                        <td>No Telepon</td><td>:</td>
                        <td>{{Auth::user()->telp}}</td>
                    </tr>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
