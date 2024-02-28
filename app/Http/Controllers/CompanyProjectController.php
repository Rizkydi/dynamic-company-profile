<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyProject;
use Illuminate\Support\Facades\Log;
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
            $data = $request -> validated();
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
    public function update(UpdateCompanyProject $request, $id)
    {
        try {
            $data = $request->validated();
            Log::info('Update data received:', ['data' => $data]);
    
            $this->companyProject->updateCompanyProject($id, $data);
            Log::info('Company project updated successfully.');
    
            return redirect()->route('Proyek Perusahaan')->with('toast_success', 'Berhasil mengubah data');
        } catch (ValidationException $th) {
            Log::error('Validation error: ' . $th->getMessage());
            Log::error('File: ' . $th->getFile());
            Log::error('Line: ' . $th->getLine());
    
            return redirect()->back()
                ->withErrors($th->validator)
                ->withInput();
        } catch (\Exception $e) {
            Log::error('An error occurred: ' . $e->getMessage());
            Log::error('File: ' . $e->getFile());
            Log::error('Line: ' . $e->getLine());
    
            return redirect()->back()->with('toast_error', 'Terjadi kesalahan saat memperbarui data');
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
