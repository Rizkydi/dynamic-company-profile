<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyTeam\StoredCompanyTeam;
use App\Http\Requests\CompanyTeam\UpdateCompanyTeam;
use Illuminate\View\View;
use App\Models\CompanyTeam;
use Illuminate\Http\Request;
use App\Services\CompanyTeamService;
use Illuminate\Validation\ValidationException;

class CompanyTeamController extends Controller
{
    public function __construct(private CompanyTeamService $companyTeam)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $companyTeam = CompanyTeam::all();
        return view('company_teams.index', compact('companyTeam'));
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
    public function store(StoredCompanyTeam $request)
    {
        try {
            $data = $request->validated();
            $this->companyTeam->createCompanyTeam($data);
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
    public function show(CompanyTeam $companyTeam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyTeam $companyTeam): View
    {
        return view('company_teams.edit', compact('companyTeam'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyTeam $request)
    {
        try {
            $data = $request->validated();
            $this->companyTeam->updateCompanyTeam($data);
            return redirect()->route('Team Perusahaan')->with('toast_success', 'Berhasil mengubah data');
        } catch (ValidationException $th) {
            return redirect()->back()
                ->withErrors($th->validator)
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyTeam $companyTeam)
    {
        $imagePath = public_path($companyTeam->image_url);
        $companyTeam->delete();
        if ($imagePath) {
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        return redirect()->back()->with('toast_success', 'Berhasil menghapus data');
    }
}
