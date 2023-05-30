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
                <div class="card text-bg-light">
                    <img src="{{ Storage::url($article[0]->tags->image_tags) }}" class="card-img" alt="..." style="width: 100%; height: 300px">
                    <div class="card-img-overlay">
                      <h5 class="card-title"><h2><b>All Post By Tags : {{ $article[0]->tags->title_tags }}</b></h2></h5>
                    </div>
                  </div>
                  <div class="row">
                    @foreach ($article as $data)
                        <div class="col-ms-3 col-md-3 col-lg-3 mb-3 mt-3">
                            <div class="card">
                                <img src="{{ Storage::url($data->image_article) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <p style="color: grey;text-align: start">Author {{ $data->user->name }}</p>
                                <p style="color: grey;text-align: start">Created At {{ $data->created_at->format('d-m-y') }}</p>
                                <a href="{{ route('article.detail',$data->slug) }}" class="card-title" style="text-decoration: none;color: black">{{ $data->title_article }}</a>
                                <p>{{ Str::limit($data->description_article, 30) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
@endsection
