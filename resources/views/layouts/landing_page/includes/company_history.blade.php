            <div class="container">
                <div class="text-center">
                    <h2 class="section-heading text-uppercase">Sejarah Perusahaan</h2>
                    <!-- <h3 class="section-subheading text-muted"></h3> -->
                </div>
                <ul class="timeline">
                    @php $counter = 0; @endphp
                    @foreach ($companyHistory as $item)
                        @if ($counter % 2 == 0)
                            <li>
                                <div class="timeline-image">
                                    <img class="rounded-circle img-fluid" src="{{ asset($item->image_url) }}"
                                        alt="..." />
                                </div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>{{ Carbon\Carbon::parse($item->year)->translatedFormat('l, d-F-Y') }}
                                        </h4>
                                        <h4 class="subheading">{{ $item->title }}</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">{{ $item->description }}</p>
                                    </div>
                                </div>
                            </li>
                        @else
                            <li class="timeline-inverted">
                                <div class="timeline-image"><img class="rounded-circle img-fluid"
                                        src="{{ asset($item->image_url) }}" alt="..." /></div>
                                <div class="timeline-panel">
                                    <div class="timeline-heading">
                                        <h4>{{ Carbon\Carbon::parse($item->year)->translatedFormat('l, d-F-Y') }}
                                        </h4>
                                        <h4 class="subheading">{{ $item->title }}</h4>
                                    </div>
                                    <div class="timeline-body">
                                        <p class="text-muted">{{ $item->description }}</p>
                                    </div>
                                </div>
                            </li>
                        @endif
                        @php $counter++; @endphp
                    @endforeach
                </ul>
            </div>
