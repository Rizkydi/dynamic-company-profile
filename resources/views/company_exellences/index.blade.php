@extends('layouts.dashboard.app')
@section('cards')
    <div class="w-full h-full p-6 mx-auto rounded-2xl">
        <div class="flex flex-col gap-4">
            <div class="w-full flex justify-center p-3 bg-white shadow-soft-lg rounded-lg font-poppins {{ asset('') }}">
                <h3>Tambah Keunggulan Perusahaan</h3>
            </div>
            {{-- Form Company Profile --}}
            <section class="h-full flex flex-col  bg-white shadow-soft-lg rounded-lg font-poppins">
                <form action="{{ route('company_excellences.store') }}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="flex flex-col p-4 gap-1" id="input-excellence-title">
                        <label for="excellence-title" class="text-base text-slate-600 font-semibold">Judul Keunggulan
                            Perusahaan</label>
                        <input type="text" id="excellence-title" name="excellence-title"
                            value="{{ old('excellence-title') }}" placeholder="Judul Keunggulan Perusahaan"
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
                        {{ old('excellence-description') }}
                        </textarea>
                        @error('excellence-description')
                            <div class="error-alert relative w-full mt-3 p-4 text-white bg-red-500 rounded-lg">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col p-4 gap-1" id="input-excellence-img">
                        <label for="excellence-img" class="text-base text-slate-600 font-semibold">Gambar Keunggulan
                            Perusahaan</label>
                        <input type="file" id="excellence-img" name="excellence-img"
                            placeholder="Gambar Keunggulan Perusahaan"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
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
            {{--  Table Company Profile --}}
            <section class="h-full bg-white shadow-soft-lg rounded-lg font-poppins">
                <div class="p-6 pb-0 mb-0 bg-white rounded-t-2xl">
                    <h6>Tabel Keunggulan Perusahaan</h6>
                </div>
                <div class="flex-auto px-0 pt-0 pb-2">
                    <div class="p-0 overflow-x-auto">
                        <table class="items-center w-full mb-0 align-top border-gray-200 text-slate-500">
                            <thead class="align-bottom">
                                <tr>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Judul Keunggulan Perusahaan</th>
                                    <th
                                        class="px-6 py-3 pl-2 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Deskripsi Keunggulan Perusahaan</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Gambar Keunggulan Perusahaan</th>
                                    <th
                                        class="px-6 py-3 font-bold text-center uppercase align-middle bg-transparent border-b border-gray-200 shadow-none text-xxs border-b-solid tracking-none whitespace-nowrap text-slate-400 opacity-70">
                                        Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($companyExcellence as $item)
                                    <tr>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 ml-4 leading-tight text-center text-xs text-slate-400">
                                                {{ $item->title }}
                                            </p>
                                        </td>
                                        <td
                                            class="p-2 align-middle bg-transparent border-b whitespace-nowrap shadow-transparent">
                                            <p class="mb-0 leading-tight text-xs text-center text-slate-400">
                                                {{ Str::limitWords($item->description, 10) }}
                                            </p>
                                        </td>
                                        <td
                                            class="p-2 leading-normal text-center align-middle bg-transparent border-b text-sm whitespace-nowrap shadow-transparent">
                                            <img class="inline-flex items-center justify-center w-20 h-20 mr-2 text-white transition-all duration-200 ease-in-out text-sm rounded-xl"
                                                src="{{ $item->image_url }}" alt="default img">
                                        </td>
                                        <td class="p-8 gap-4 flex justify-center">
                                            <x-button-edit href="{{ route('company_excellences.edit', $item->id) }}" />
                                            <form action="{{ route('company_excellences.destroy', $item->id) }}"
                                                method="post">
                                                @csrf
                                                @method('DELETE')
                                                <x-button-delete />
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </section>
        </div>
    </div>
@endsection
@push('scripts')
    <script>
        $(document).ready(function() {
            setTimeout(() => {
                $('.error-alert').hide(1000);
            }, 1000);


            $('[data-selector="button-delete"]').click(function(e) {
                var form = $(this).closest("form")
                e.preventDefault();
                Swal.fire({
                    title: 'Menghapus data Keunggulan Perusahaan',
                    text: "apakah anda yakin untuk menghapus data ?",
                    cancelButtonText: "tidak",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Iya'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                })
            });
        });
    </script>
@endpush
