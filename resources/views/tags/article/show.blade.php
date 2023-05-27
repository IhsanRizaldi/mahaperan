@extends('master-view.master')
@section('main')
    <style>
        body{
            background-color: #F6931E;
        }
    </style>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h2 style="text-align: left">{{ $article->title_article }}</h2>
            <div class="card text-bg-light">
                <img src="{{ Storage::url($article->image_article) }}" class="card-img" alt="..." style="width: 100%; height: 300px">
                <div class="card-img-overlay">
                </div>
            </div>
            <h6 style="margin-top: 5px">Author : {{ $article->user->name }}</h6>
            <h6>Created At : {{ $article->created_at->format('d-m-y') }}</h6>
            <p style="text-align: justify">{{ $article->description_article }}</p>
            </div>
        </div>
    </div>
@endsection
