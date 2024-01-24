@extends('layouts.dashboard.app')
@section('cards')
    <div class="w-full h-full p-6 mx-auto rounded-2xl">
        <div class="flex flex-col gap-4">
            <div class="w-full flex justify-center p-3 bg-white shadow-soft-lg rounded-lg font-poppins ">
                <h3>Edit Keunggulan Perusahaan</h3>
            </div>

            {{-- Form Company Profile --}}
            <section class="h-full flex flex-col  bg-white shadow-soft-lg rounded-lg font-poppins">
                <form action="{{ route('company_excellences.update', $companyExcellence->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" value="{{ $companyExcellence->id }}">
                    <div class="flex flex-col p-4 gap-1" id="input-excellence-title">
                        <label for="excellence-title" class="text-base text-slate-600 font-semibold">Judul Keunggulan
                            Perusahaan</label>
                        <input type="text" id="excellence-title" name="excellence-title"
                            value="{{ $companyExcellence->title }}" placeholder="Judul Keunggulan Perusahaan"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        @error('excellence-title')
                            <div class="error-alert relative w-full mt-3 p-4 text-white bg-red-500 rounded-lg">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col p-4 gap-1" id="input-excellence-description">
                        <label for="excellence-description" class="text-base text-slate-600 font-semibold">Deskripsi
                            Keunggulan
                            Perusahaan</label>
                        <textarea name="excellence-description" id="excellence-description" rows="5"
                            placeholder="Deskripsi Keunggulan Perusahaan"
                            class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        {{ $companyExcellence->description }}
                        </textarea>
                        @error('excellence-description')
                            <div class="error-alert relative w-full mt-3 p-4 text-white bg-red-500 rounded-lg">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col p-4 gap-1" id="input-excellence-img">
                        <label for="excellence-img" class="text-base text-slate-600 font-semibold">Gambar Keunggulan
                            Perusahaan</label>
                        <div class="grid grid-cols-2 gap-4">
                            <input type="file" id="excellence-img" name="excellence-img"
                                placeholder="Gambar Keunggulan Perusahaan"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                            <img class="self-center w-20 h-20 rounded" id="img-preview"
                                src="{{ $companyExcellence->image_url }}" alt="img-default">
                        </div>
                        @error('excellence-img')
                            <div class="error-alert relative w-full mt-3 p-4 text-white bg-red-500 rounded-lg">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex justify-end p-4 gap-1" id="btn-group">
                        <button type="submit"
                            class="inline-block px-6 py-3 font-bold text-center text-white uppercase align-middle transition-all rounded-lg cursor-pointer bg-gradient-to-tl  from-green-500 to-green-700 leading-pro text-xs ease-soft-in tracking-tight-soft shadow-soft-md bg-150 bg-x-25 hover:scale-102 active:opacity-85 hover:shadow-soft-xs">Submit</button>
                    </div>
                </form>
            </section>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function(e) {
            $('#profilePicture').change(function(e) {
                var file = e.target.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#previewProfilePicture').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(file);
                }
            });
        });
    </script>
@endpush
