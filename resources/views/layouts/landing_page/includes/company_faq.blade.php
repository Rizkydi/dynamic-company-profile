<div class="container">
    <div class="text-center">
        <h2 class="section-heading text-uppercase">FAQ (Frequently Ask Question)</h2>
        <!-- <h3 class="section-subheading text-muted"></h3> -->
    </div>
    <div class="accordion accordion-flush" id="accordionFlushExample">
        <div class="accordion accordion-flush" id="accordionFlushExample">
            @foreach ($companyFaq as $index => $item)
                <div class="accordion-item">
                    <h2 class="accordion-header" id="flush-heading{{ $index }}">
                        <button class="accordion-button collapsed fw-bold" type="button" data-bs-toggle="collapse"
                            data-bs-target="#flush-collapse{{ $index }}" aria-expanded="false"
                            aria-controls="flush-collapse{{ $index }}">
                            {{ $item->question }}
                        </button>
                    </h2>
                    <div id="flush-collapse{{ $index }}" class="accordion-collapse collapse"
                        aria-labelledby="flush-heading{{ $index }}" data-bs-parent="#accordionFlushExample">
                        <div class="accordion-body fw-normal">
                            {{ $item->answer }}
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</div>
