@extends('../layouts/maintwo')

<!-- Konten -->
@section('content')
<!-- images -->
<div class="img">
    <img width="1300px" src="{{asset('img/tour.svg')}}" alt="">
</div>
<!-- Konten -->
<div class="container">
    <div class="row">
        <div class="col">
            <h3 class="judul">Cari Tempat Wisatamu di <br> Kalimantan</h3>
            <p class="subjudul">Nikmati Indahnya Destinasi Wisata Alam</p>
        </div>
    </div>
</div>

<br>

<div class="container">
    <h2 class="tag">Kota Favorit</h2>
    <br>
    <div class="row slider">
        <div class="col-md-4">
            <div class="details">
                <a href="/infokota">
                    <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
                </a>
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kota.svg')}}" width="200px" alt="">
            </div>
        </div>
    </div>
</div>

<br>

<div class="container">
    <h2 class="mydestinasi1">
        Destinasi Wisata Favorite
    </h2>
    <div class="row favorite">
        <div class="col">
            <div class="wisata">
                <a href="/info">
                    <img src="{{asset('img/favorit.svg')}}" width="225" alt="">
                </a>
                <p>Pulau Derawan</p>
                <i class="bi bi-star-fill">4.9 (5.3k reviews)</i>
            </div>
        </div>

        <div class="col">
            <div class="wisata">
                <a href="/info">
                    <img src="{{asset('img/favorit.svg')}}" width="225" alt="">
                </a>
                <p>Pulau Derawan</p>
                <i class="bi bi-star-fill">4.9 (5.3k reviews)</i>
            </div>
        </div>

        <div class="col">
            <div class="wisata">
                <img src="{{asset('img/favorit.svg')}}" width="225" alt="">
                <p>Pulau Derawan</p>
                <i class="bi bi-star-fill">4.9 (5.3k reviews)</i>
            </div>
        </div>

        <div class="col">
            <div class="wisata">
                <img src="{{asset('img/favorit.svg')}}" width="225" alt="">
                <p>Pulau Derawan</p>
                <i class="bi bi-star-fill">4.9 (5.3k reviews)</i>
            </div>
        </div>
    </div>
</div>

<br>
<br>
<br>
<div class="container">
    <h2 class="tag2">Kota Lainnya</h2>
    <br>
    <div class="row kota">
        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
            </div>
        </div>

        <div class="col-md-4">
            <div class="details">
                <img src="{{asset('img/kotalainnya.svg')}}" width="200px" alt="">
            </div>
        </div>
    </div>
</div>

@endsection