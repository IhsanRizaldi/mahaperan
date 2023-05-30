@extends('master-view.master')
@section('main')
{{-- Jumbotron --}}
<div id="home"></div>
<div class="text-center" style="background-color: #F6931E">
    <div class="d-inline-flex gap-2 mb-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <img src="/gambar/logo.png" alt="Logo Mahasiswa Peradaban" style="width: 300px; height: 300px;">
                    <h3><b>Bersama Bergerak Bersama Berdampak</b></h3>
                </div>
            </div>
        </div>
    </div>
</div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="about">
    <path fill="#F6931E" fill-opacity="1" d="M0,96L48,90.7C96,85,192,75,288,64C384,53,480,43,576,69.3C672,96,768,160,864,176C960,192,1056,160,1152,122.7C1248,85,1344,43,1392,21.3L1440,0L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
</svg>
{{-- Sejarah --}}
    <div class="text-center bg-body-light">
        <div class="d-inline-flex gap-2 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-8">
                        <h2><b>History Of Mahaperan</b></h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quia eum molestias, odio voluptatem, aliquam, possimus expedita repellat vel ipsam atque praesentium dignissimos quis saepe. Maxime facilis doloremque voluptatem provident?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
    <path fill="#F6931E" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,149.3C384,139,480,85,576,90.7C672,96,768,160,864,154.7C960,149,1056,75,1152,58.7C1248,43,1344,85,1392,106.7L1440,128L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z"></path>
</svg>
{{-- Visi Dan Misi --}}
    <div class="text-center" style="background-color: #F6931E">
        <div class="d-inline-flex gap-2 mb-5">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-5">
                        <h2><b>Vision</b></h2>
                        <p class="text-justify">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste, pariatur repudiandae laudantium consequatur ullam minima explicabo molestiae quam sunt quidem. Culpa, quaerat aliquam. Veniam dolor accusantium recusandae sit praesentium hic?</p>
                    </div>
                    <div class="col-5">
                        <h2><b>Mision</b></h2>
                        <p class="text-justify">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Autem quia eum molestias, odio voluptatem, aliquam, possimus expedita repellat vel ipsam atque praesentium dignissimos quis saepe. Maxime facilis doloremque voluptatem provident?</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320" id="article">
    <path fill="#F6931E" fill-opacity="1" d="M0,96L48,112C96,128,192,160,288,149.3C384,139,480,85,576,90.7C672,96,768,160,864,154.7C960,149,1056,75,1152,58.7C1248,43,1344,85,1392,106.7L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
</svg>
{{-- Visi Dan Misi --}}
<div class="text-center">
    <div class="d-inline-flex gap-2 mb-5">
        <div class="container">
            <div class="card rounded-5" style="background-color: #F6931E">
                <h2 class="mb-3 mt-5"><b>Article</b></h2>
                <div class="row justify-content-center">
                    @foreach ($article->slice(0,6) as $data)
                        <div class="col-ms-3 col-md-3 col-lg-3 m-3 p-3">
                            <div class="card">
                                <img src="{{ Storage::url($data->image_article) }}" class="card-img-top" alt="...">
                                <div class="card-body">
                                <p style="color: grey;text-align: start">Author {{ $data->user->name }}</p>
                                <p style="color: grey;text-align: start">Created At {{ $data->created_at->format('d-m-y') }}</p>
                                <a href="{{ route('article.detail',$data->slug) }}" class="card-title" style="text-decoration: none;color: black">{{ $data->title_article }}</a>
                                <p>{{ Str::limit($data->description_article, 50) }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            <a href="{{ route('tags.index') }}" class="btn text-light m-5" style="background-color: #1A2F5E">More Article <i class="fa-solid fa-arrow-right"></i></a>
        </div>
    </div>
</div>
@endsection
