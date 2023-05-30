@extends('master-view.master')
@section('main')
    <style>
        body{
            background-color: #F6931E;
        }
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <h2><b>{{ $anggota[0]->angkatan->nama_angkatan }}</b></h2>
                <div class="card text-bg-light">
                    <img src="{{ Storage::url($anggota[0]->angkatan->gambar) }}" class="card-img" alt="..." style="width: 100%; height: 300px">
                    <div class="card-img-overlay">
                    </div>
                  </div>
                  <div class="row">
                    @foreach ($anggota as $data)
                        <div class="col-ms-3 col-md-3 col-lg-3 mb-3 mt-3">
                            <div class="card">
                                <img src="{{ Storage::url($data->gambar) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <h5 style="font-size: 17px">Nama : {{ $data->nama_anggota }}</h5>
                                <p >Jabatan : {{ $data->jabatan_anggota }}</p>
                                <p >Kampus : {{ $data->nama_kampus}}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
