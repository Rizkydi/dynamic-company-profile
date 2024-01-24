<?php

namespace App\Http\Controllers;

use App\Models\CompanyProject;
use App\Services\CompanyProjectService;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\CompanyProject\StoredCompanyProject;
use App\Http\Requests\CompanyProject\UpdateCompanyProject;

class CompanyProjectController extends Controller
{

    public function __construct(private CompanyProjectService $companyProject)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyProject = CompanyProject::all();
        return view('company_projects.index', compact('companyProject'));
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
    public function store(StoredCompanyProject $request)
    {
        try {
            $data = $request->validated();
            $this->companyProject->createCompanyProject($data);
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
    public function show(CompanyProject $companyProject)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyProject $companyProject)
    {
        return view('company_projects.edit', compact('companyProject'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyProject $request)
    {
        try {
            $data = $request->validated();
            $this->companyProject->updateCompanyProject($data);
            return redirect()->route('Proyek Perusahaan')->with('toast_success', 'Berhasil mengubah data');
        } catch (ValidationException $th) {
            return redirect()->back()
                ->withErrors($th->validator)
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyProject $companyProject)
    {
        $imagePath = public_path($companyProject->image_url);
        $companyProject->delete();
        if ($imagePath) {
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        return redirect()->back()->with('toast_success', 'Berhasil menghapus data');
    }
}
