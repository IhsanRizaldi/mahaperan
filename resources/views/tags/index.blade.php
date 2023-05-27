@extends('master-view.master')
@section('main')
<style>
    body{
        background-color: #F6931E
    }
</style>
{{-- Jumbotron --}}
<div class="text-center m-5" style="background-color: #F6931E;" >
    <h2>Tags</h2>
    <div class="d-inline-flex gap-5" >
        <div class="container">
            <div class="row">
                @foreach ($tags as $data)
                <div class="col-md-4">
                    <div class="card text-white">
                            <img src="{{ Storage::url($data->image_tags) }}" class="card-img" alt="...">
                        <div class="card-img-overlay d-flex align-items-center">
                          <h5 class="card-title flex-fill text-center p-3" style="background-color: rgba(0, 0, 0 ,0.7);font-size: 30px"><a href="{{ route('article.index',$data->slug) }}" style="text-decoration: none; color:white">{{ $data->title_tags }}</a></h5>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</div>
@endsection
