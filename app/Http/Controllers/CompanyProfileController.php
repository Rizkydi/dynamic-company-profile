<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\CompanyProfile;
use Illuminate\Http\RedirectResponse;
use App\Services\CompanyProfileService;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\CompanyProfile\StoredCompanyProfile;
use App\Http\Requests\CompanyProfile\UpdateCompanyProfile;

class CompanyProfileController extends Controller
{
    public function __construct(private CompanyProfileService $companyProfileService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $companyProfile = CompanyProfile::all();
        return view('company_profiles.index', compact('companyProfile'));
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
    public function store(StoredCompanyProfile $request): RedirectResponse
    {
        try {
            // dd($request->all());
            $data = $request->validated();
            $this->companyProfileService->createCompanyProfile($data);
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
    public function show(CompanyProfile $companyProfile)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyProfile $companyProfile)
    {
        return view('company_profiles.edit', compact('companyProfile'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyProfile $request)
    {
        try {
            $data = $request->validated();
            $this->companyProfileService->updateCompanyProfile($data);
            return redirect()->route('Profil Perusahaan')->with('toast_success', 'Berhasil mengubah data');
        } catch (ValidationException $th) {
            return redirect()->back()
                ->withErrors($th->validator)
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyProfile $companyProfile)
    {
        $imagePath = public_path($companyProfile->website_logo_url);
        $companyProfile->delete();
        if ($imagePath) {
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        return redirect()->back()->with('toast_success', 'Berhasil menghapus data');
    }
}
