<div class="container">
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li class="virtu">
                <a href="#" role="button">
                    <img class="three" src="{{asset('img/virtual.svg')}}" alt="">
                </a>
            </li>
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('img/img1.svg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/img2.svg')}}" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="{{asset('img/img1.svg')}}" class="d-block w-100" alt="...">
            </div>
        </div>
        <div class="imgasset">
            <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                <img class="one" src="{{asset('img/left.svg')}}" aria-hidden="true" alt="">
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                <img class="two" src="{{asset('img/right.svg')}}" aria-hidden="true" alt="">
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>
</div>