@extends('front.halamanutama.halamanutama')

@section('content')
<div class="row">
    <div class="col-md-12">
        <B>
            <p class="mydestinasi">Destinasi</p>
        </B>
        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-box">
                                <a href="/destinasi">
                                    <div class="img-areaone"><img src="{{asset('img/destinasi1.svg')}}" alt=""></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-box">
                                <a href="">
                                    <div class="img-area"><img src="{{asset('img/destinasi2.svg')}}" alt=""></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-box">
                                <a href="">
                                    <div class="img-area"><img src="{{asset('img/destinasi3.svg')}}" alt=""></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="single-box">
                                <a href="">
                                    <div class="img-areaone"><img src="{{asset('img/destinasi4.svg')}}" alt=""></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-box">
                                <a href="">
                                    <div class="img-area"><img src="{{asset('img/destinasi5.svg')}}" alt=""></div>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="single-box">
                                <a href="">
                                    <div class="img-area"><img src="{{asset('img/destinasi6.svg')}}" alt=""></div>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="row">
    <div class="col-md-12">
        <b>
            <p class="myartikel">Artikel</p>
        </b>
        <div class="card" style="max-width: 1110px;">
            @foreach ($article as $a)
            <div class="row no-gutters">
                <div class="col-md-4">
                    <a class="artimg" href="">
                        <img src="{{asset('img/artikel1.svg')}}" class="card-img" alt="...">
                    </a>
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title">Majukan Pariwisata NTT Lewat Ideathon 2021 #RinduLabuanBajo</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id necessitatibus iusto hic sapiente architecto facere debitis, tenetur provident vel sed voluptatum aperiam quasi ratione nemo placeat consequuntur maiores molestiae corporis.</p>
                        <p class="card-text"><small class="text-muted">Diposting 19 menit lalu</small></p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
</div>
@endsection