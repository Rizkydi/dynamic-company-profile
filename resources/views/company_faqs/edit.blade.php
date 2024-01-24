@extends('layouts.dashboard.app')
@section('cards')
    <div class="w-full h-full p-6 mx-auto rounded-2xl">
        <div class="flex flex-col gap-4">
            <div class="w-full flex justify-center p-3 bg-white shadow-soft-lg rounded-lg font-poppins ">
                <h3>Edit Faq Perusahaan</h3>
            </div>
            {{-- Form Company Profile --}}
            <section class="h-full flex flex-col  bg-white shadow-soft-lg rounded-lg font-poppins">
                <form action="{{ route('company_faqs.update', $companyFaq->id) }}" method="post">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="id" id="id" value="{{ $companyFaq->id }}">
                    <div class="flex flex-col p-4 gap-1" id="input-faq-question">
                        <label for="faq-question" class="text-base text-slate-600 font-semibold">Pertanyaan tentang
                            Perusahaan</label>
                        <input type="text" id="faq-question" name="faq-question"
                            placeholder="Pertanyaan tentang perusahaan" value="{{ $companyFaq->question }}"
                            class="focus:shadow-soft-primary-outline text-sm leading-5.6 ease-soft block w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">
                        @error('faq-question')
                            <div class="error-alert relative w-full mt-3 p-4 text-white bg-red-500 rounded-lg">
                                {{ $message }}</div>
                        @enderror
                    </div>
                    <div class="flex flex-col p-4 gap-1" id="input-faq-answer">
                        <label for="faq-answer" class="text-base text-slate-600 font-semibold">
                            Jawaban tentang
                            Perusahaan</label>
                        <textarea name="faq-answer" id="faq-answer" rows="5" placeholder="Jawaban tentang perusahaan"
                            class="focus:shadow-soft-primary-outline min-h-unset text-sm leading-5.6 ease-soft block h-auto w-full appearance-none rounded-lg border border-solid border-gray-300 bg-white bg-clip-padding px-3 py-2 font-normal text-gray-700 outline-none transition-all placeholder:text-gray-500 focus:border-fuchsia-300 focus:outline-none">{{ $companyFaq->answer }}</textarea>
                        @error('faq-answer')
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
