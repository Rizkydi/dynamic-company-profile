<div class="container">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">Solusi Inovasi Anilo</h2>
        <!-- <h3 class="section-subheading text-muted"></h3> -->
    </div>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-indicators">
            @foreach ($companyService as $key => $item)
                <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="{{ $key }}"
                    class="{{ $key == 0 ? 'active' : '' }}" aria-current="{{ $key === 0 ? 'true' : 'false' }}"
                    aria-label="Slide {{ $key + 1 }}"></button>
            @endforeach
        </div>
        <div class="carousel-inner">
            @foreach ($companyService as $key => $item)
                <div class="carousel-item {{ $key == 0 ? 'active' : '' }}" data-bs-interval="2000">
                    <img src="{{ asset($item->image_url) }}" class="d-block w-100" style="height: 600px" alt="...">
                    <div class="carousel-caption d-none d-md-block shadow p-3 mb-5 ">
                        <h5 class="font-bold">{{ $item->title }}</h5>
                        <p style="font-weight: 500">{{ $item->description }}</p>
                    </div>
                </div>
            @endforeach
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
