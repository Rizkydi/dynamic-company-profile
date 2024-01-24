<?php

namespace App\Http\Controllers;

use App\Http\Requests\CompanyFaq\UpdateCompanyFaq;
use Illuminate\View\View;
use Illuminate\Http\Request;
use App\Models\CompanyHistory;
use Illuminate\Http\RedirectResponse;
use App\Services\CompanyHistoryService;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\CompanyHistory\StoredCompanyHistory;
use App\Http\Requests\CompanyHistory\UpdateCompanyHistory;
use Carbon\Carbon;

class CompanyHistoryController extends Controller
{

    public function __construct(private CompanyHistoryService $companyHistory)
    {
    }
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $companyHistory = CompanyHistory::all();
        $dateFormat = $companyHistory->map(function ($history) {
            return Carbon::parse($history->year)->translatedFormat('l, d-F-Y');
        });
        return view('company_histories.index', compact('companyHistory', 'dateFormat'));
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
    public function store(StoredCompanyHistory $request): RedirectResponse
    {
        try {
            $data = $request->validated();
            $this->companyHistory->createCompanyHistory($data);
            return redirect()->back()->with('toast_success', 'berhasil menambah data');
        } catch (ValidationException $th) {
            return redirect()->back()
                ->withErrors($th->validator)
                ->withInput();
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(CompanyHistory $companyHistory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CompanyHistory $companyHistory): View
    {
        return view('company_histories.edit', compact('companyHistory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyHistory $request): RedirectResponse
    {
        try {
            $data = $request->validated();
            $this->companyHistory->updatecompanyHistory($data);
            return redirect()->route('Sejarah Perusahaan')->with('toast_success', 'berhasil mengubah data');
        } catch (ValidationException $th) {
            return redirect()->back()
                ->withErrors($th->validator)
                ->withInput();
        }
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CompanyHistory $companyHistory): RedirectResponse
    {
        $imagePath = public_path($companyHistory->image_url);
        $companyHistory->delete();
        if ($imagePath) {
            if (file_exists($imagePath)) {
                unlink($imagePath);
            }
        }
        return redirect()->back()->with('toast_success', 'Berhasil menghapus data');
    }
}
