            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Portfolio</h2>
                    <h3 class="section-subheading text-muted">PT. Anilo Adikarya Sentosa</h3>
                </div>
                <div class="row">
                    @foreach ($companyProject as $item)
                        <div class="col-lg-4 col-sm-6 mb-4">
                            <div class="portfolio-item">
                                <a class="portfolio-link" data-id="{{ $item->id }}">
                                    <div class="portfolio-hover">
                                        <div class="portfolio-hover-content"><i class="fas fa-plus fa-3x"></i></div>
                                    </div>
                                    <img class="img-fluid" src="{{ asset($item->image_url) }}" alt="..." />
                                </a>
                                <div class="portfolio-caption">
                                    <div class="portfolio-caption-heading">{{ $item->client_name }}</div>
                                    <div class="portfolio-caption-subheading text-muted">{{ $item->project_name }}</div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            {{-- Modal --}}
            <script>
                $(document).ready(function() {
                    $('.portfolio-link').click(function(e) {
                        e.preventDefault();

                        const portoId = $(this).data('id');

                        $.ajax({
                            type: "get",
                            url: `/${portoId}`,
                            cache: false,
                            success: function(response) {
                                console.log(response);
                                const modalId = `#portfolioModal-${response.data.id}`;
                                const modalContainer = $('.portfolio-dynamic-modal');

                                modalContainer.attr('id', modalId);
                                modalContainer.find('.modal-body').html(`
                                    <h2 class="text-uppercase">${response.data.client_name}</h2>
                                    <p class="item-intro text-muted">${response.data.project_name}</p>
                                    <img class="img-fluid d-block mx-auto" src="${response.data.image_url}" alt="..." />
                                    <p style="text-align: justify">${response.data.description}</p>
                                    <button class="btn btn-primary btn-xl text-uppercase" data-bs-dismiss="modal"
                                        type="button">
                                        <i class="fas fa-xmark me-1"></i>
                                        Close Project
                                    </button>
                                `);

                                // Ensure the modal is available and not undefined
                                if (modalContainer.length) {
                                    modalContainer.modal('show');
                                } else {
                                    console.error(`Modal with ID ${modalId} not found.`);
                                }

                            },
                            error: function(error) {
                                console.error('Ajax request failed:', error);
                            }
                        });
                    });

                });
            </script>
