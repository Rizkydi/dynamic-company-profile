    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Pertanyaan Tentang Perusahaan</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{ route('question_company.store') }}" method="post">
                        @csrf
                        @if (auth()->check())
                            <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                        @endif
                        <div class="mb-3">
                            <label for="body" class="form-label">Pertanyaan <span class="fw-light">*</span></label>
                            <input type="text" class="form-control" name="body" id="body"
                                placeholder="Tuliskan pertanyaan anda...">
                        </div>
                        <div class="mb-3">
                            <label for="phone_number" class="form-label">Nomor Telfon</label>
                            <input type="number" class="form-control" name="phone_number" id="phone_number"
                                placeholder="Tuliskan nomor telfon anda...">
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email <span class="fw-light">*</span></label>
                            <input type="email" class="form-control" name="email" id="email"
                                placeholder="Tuliskan email anda...">
                        </div>
                        <button type="submit" class="btn btn-outline-success w-100">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
