@extends('layouts.dashboard.app')
@section('cards')
    <div class="w-full h-full p-6 mx-auto rounded-2xl">
        <div class="flex flex-col gap-4">
            <div class="w-full flex justify-center p-3 bg-white shadow-soft-lg rounded-lg font-poppins ">
                <h3>Edit Team Perusahaan</h3>
            </div>
            <section class="h-full flex flex-col  bg-white shadow-soft-lg rounded-lg font-poppins">
                <form action="{{ route('company_teams.update', $companyTeam->id) }}" method="post"
                    enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="id" value="{{ $companyTeam->id }}">
                    <div class="flex flex-col p-4 gap-1" id="input-teams-name">
                        <label for="teams-name" class="text-base text-slate-600 font-semibold">Anggota Team
                            Perusahaan</label>
                        <input type="text" id="teams-name" name="teams-name" placeholder="Anggota Team Perusahaan"
                            value="{{ $companyTeam->name }}"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                    </div>
                    <div class="flex flex-col p-4 gap-1" id="input-teams-img">
                        <label for="teams-img" class="text-base text-slate-600 font-semibold">Gambar Anggota
                            Team</label>
                        <div class="grid grid-cols-2 gap-4">
                            <input type="file" id="teams-img" name="teams-img"
                                class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                            <img class="self-center w-20 h-20 rounded" id="img-preview" src="{{ $companyTeam->image_url }}"
                                alt="img-default">
                        </div>
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
            $('#teams-img').change(function(e) {
                var file = e.target.files[0];
                if (file) {
                    var reader = new FileReader();
                    reader.onload = function(e) {
                        $('#img-preview').attr('src', e.target.result);
                    }
                    reader.readAsDataURL(file);
                } else {
                    $('#image-preview').attr('src', '{{ $companyTeam->image_url }}');
                }
            });
        });
    </script>
@endpush
