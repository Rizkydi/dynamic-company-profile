<?php

namespace App\Http\Controllers;

use App\Models\QuestionCompany;
use App\Services\QuestionCompanyService;
use Illuminate\Validation\ValidationException;
use App\Http\Requests\StoreQuestionCompanyRequest;
use App\Http\Requests\UpdateQuestionCompanyRequest;

class QuestionCompanyController extends Controller
{

    public function __construct(private QuestionCompanyService $questionCompany)
    {
    }


    public function index()
    {
        $questionCompany = QuestionCompany::with('user')->get();
        return view('company_questions.index', compact('questionCompany'));
    }

    public function changeStatusQuestion(QuestionCompany $questionCompany)
    {
        $this->questionCompany->changeStatusQuestion($questionCompany->id);
        return redirect()->back()->with('success', 'Berhasil mengubah status pertanyaan user');
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreQuestionCompanyRequest $request)
    {
        try {
            $data = $request->validated();
            $this->questionCompany->createQuestionCompany($data);
            return redirect()->back()->with('success', 'Berhasil menambahkan pertanyaan ke perusahaan');

            dd(session()->all());
        } catch (ValidationException $th) {
            return redirect()->back()
                ->withErrors($th->validator)
                ->withInput();
        }
    }
}
