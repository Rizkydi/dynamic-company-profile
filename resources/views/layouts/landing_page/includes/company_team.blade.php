            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Team</h2>
                    <h3 class="section-subheading text-muted">PT. Anilo Adikarya Sentosa</h3>
                </div>
                <div class="row">
                    @foreach ($companyTeam as $index => $item)
                        <div class="col-lg-4">
                            <div class="team-member">
                                <img class="mx-auto rounded-circle" src="{{ asset($item->image_url) }}" alt="..." />
                                <h4>{{ $item->name }}</h4>
                                <p class="text-muted">Team {{ $index + 1 }}</p>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Parveen Anand Twitter Profile"><i class="fab fa-twitter"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Parveen Anand Facebook Profile"><i class="fab fa-facebook-f"></i></a>
                                <a class="btn btn-dark btn-social mx-2" href="#!"
                                    aria-label="Parveen Anand LinkedIn Profile"><i class="fab fa-linkedin-in"></i></a>
                            </div>
                        </div>
                    @endforeach
                    <div class="row">
                        <div class="col-lg-8 mx-auto mt-4 text-center">
                            <p class="large text-muted">Mewujudkan Impian, Menciptakan Keunggulan: Bersama, Kita Bentuk
                                Masa
                                Depan yang Lebih Baik – <span class="fw-bold">Tim PT. Anilo Adikarya Sentosa</span></p>
                        </div>
                    </div>
                </div>
