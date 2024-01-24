        <div class="container">
            <div class="text-center">
                <h2 class="section-heading text-uppercase">Keunggulan</h2>
                <h3 class="section-subheading text-muted">PT. Anilo Adikarya Sentosa</h3>
            </div>
            <div class="row text-center">
                @foreach ($companyExcellence as $item)
                    <div class="col-md-4">
                        <img class="rounded-circle service-img" src="{{ asset($item->image_url) }}" alt="..." />
                        <h4 class="my-3">{{ $item->title }}</h4>
                        <p class="text-muted">{{ $item->description }}</p>
                    </div>
                @endforeach
            </div>
        </div>
