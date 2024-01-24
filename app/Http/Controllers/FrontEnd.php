<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\CompanyFaq;
use App\Models\CompanyTeam;
use Illuminate\Http\Request;
use App\Models\CompanyHistory;
use App\Models\CompanyProfile;
use App\Models\CompanyProject;
use App\Models\CompanyService;
use App\Models\CompanyExcellence;
use Illuminate\Http\JsonResponse;

class FrontEnd extends Controller
{
    public function index(): View
    {
        $companyProfile = CompanyProfile::all();
        $companyHistory = CompanyHistory::all();
        $companyExcellence = CompanyExcellence::all();
        $companyService = CompanyService::all();
        $companyProject = CompanyProject::all();
        $companyFaq = CompanyFaq::all();
        $companyTeam = CompanyTeam::all();

        return view('landing-page', compact(
            'companyProfile',
            'companyHistory',
            'companyExcellence',
            'companyService',
            'companyProject',
            'companyFaq',
            'companyTeam',
        ));
    }

    public function showDetailProject(CompanyProject $companyProject): JsonResponse
    {
        return response()->json([
            'success' => true,
            'message' => 'Detail Data Post',
            'data'    => $companyProject
        ]);
    }
}
