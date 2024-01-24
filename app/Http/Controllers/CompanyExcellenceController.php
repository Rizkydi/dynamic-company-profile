<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyExcellence\StoredCompanyExcellence;
use App\Http\Requests\CompanyExcellence\UpdateCompanyExcellence;
use App\Models\CompanyExcellence;
use App\Services\CompanyExcellenceService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Validation\ValidationException;
use RealRashid\SweetAlert\Facades\Alert;


class CompanyExcellenceController extends Controller
{
    public function __construct(private CompanyExcellenceService $companyExcellenceService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyExcellence = CompanyExcellence::all();
        return view('company_exellences.index', ['companyExcellence' => $companyExcellence]);
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
    public function store(StoredCompanyExcellence $request): RedirectResponse
    {
        try {
            $data = $request->validated();
            $this->companyExcellenceService->createCompanyExcellence($data);
            return redirect()->back()->with('toast_success', 'Berhasil menambahkan data');
        } catch (ValidationException $th) {
            return redirect()->back()
                ->withErrors($th->validator)
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyExcellence $companyExcellence)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyExcellence $companyExcellence)
    {
        return view('company_exellences.edit', compact('companyExcellence'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyExcellence $request)
    {
        try {
            $data = $request->validated();
            $this->companyExcellenceService->updateCompanyExcellence($data);
            return redirect()->route('Keunggulan Perusahaan')->with('toast_success', 'Berhasil mengubah data');
        } catch (ValidationException $th) {
            return redirect()->back()
                ->withErrors($th->validator)
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyExcellence $companyExcellence): RedirectResponse
    {
        $imagePath = public_path($companyExcellence->image_url);
        $companyExcellence->delete();
        if ($imagePath) {
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        return redirect()->back()->with('toast_success', 'Berhasil menghapus data');
    }
}
