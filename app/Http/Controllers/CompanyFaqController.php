<?php

namespace App\Http\Controllers;

use App\Models\CompanyFaq;
use Illuminate\Http\Request;
use App\Services\CompanyFaqService;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\CompanyFaq\StoredCompanyFaq;
use App\Http\Requests\CompanyFaq\UpdateCompanyFaq;
use Illuminate\Http\RedirectResponse;

class CompanyFaqController extends Controller
{

    public function __construct(private CompanyFaqService $companyFaq)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyFaq = CompanyFaq::all();
        return view('company_faqs.index', compact('companyFaq'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoredCompanyFaq $request): RedirectResponse
    {
        try {
            $data = $request->validated();
            $this->companyFaq->createCompanyFaq($data);
            return redirect()->back()->with('success', 'Berhasil menambahkan data');
        } catch (ValidationException $th) {
            return redirect()->back()
                ->withErrors($th->validator)
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyFaq $companyFaq)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyFaq $companyFaq)
    {
        return view('company_faqs.edit', compact('companyFaq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyFaq $request)
    {
        try {
            $data = $request->validated();
            $this->companyFaq->updateCompanyFaq($data);
            return redirect()->route('Pertanyaan Perusahaan')->with('toast_success', 'Berhasil mengubah data');
        } catch (ValidationException $th) {
            return redirect()->back()
                ->withErrors($th->validator)
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyFaq $companyFaq): RedirectResponse
    {
        $companyFaq->delete();
        return redirect()->back()->with('toast_success', 'berhasil menghapus data');
    }
}
