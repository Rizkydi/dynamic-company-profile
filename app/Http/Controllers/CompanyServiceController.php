<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CompanyService;
use App\Services\CompanyBusinessService;
use App\Http\Requests\CompanyServiceRequest;
use Illuminate\Validation\ValidationException;

class CompanyServiceController extends Controller
{
    public function __construct(private CompanyBusinessService $companyBusinessService)
    {
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $companyService = CompanyService::all();
        return view('company_services.index', compact('companyService'));
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
    public function store(CompanyServiceRequest $request)
    {
        try {
            $data = $request->validated();
            $this->companyBusinessService->createCompanyService($data);
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
    public function show(CompanyService $companyService)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyService $companyService)
    {
        return view('company_services.edit', compact('companyService'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(CompanyServiceRequest $request)
    {
        try {
            $data = $request->validated();
            $this->companyBusinessService->updateCompanyService($data);
            return redirect()->route('Service Perusahaan')->with('toast_success', 'Berhasil mengubah data');
        } catch (ValidationException $th) {
            return redirect()->back()
                ->withErrors($th->validator)
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyService $companyService)
    {
        $imagePath = public_path($companyService->image_url);
        $companyService->delete();
        if ($imagePath) {
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        return redirect()->back()->with('toast_success', 'Berhasil menghapus data');
    }
}
