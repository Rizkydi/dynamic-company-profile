<?php

namespace App\Services;

use App\Models\QuestionCompany;

class QuestionCompanyService
{
    public function createQuestionCompany(array $questionCompanyData)
    {
        $questionCompany = QuestionCompany::create([
            'user_id' => $questionCompanyData['user_id'],
            'body' => $questionCompanyData['body'],
            'phone_number' => $questionCompanyData['phone_number'],
            'email' => $questionCompanyData['email'],
        ]);

        return $questionCompany;
    }

    public function changeStatusQuestion($questionCompanyId)
    {
        $questionCompany = QuestionCompany::find($questionCompanyId);
        if ($questionCompany) {
            $status = $questionCompany->status == 0 ? 1 : 0;
            $questionCompany->update([
                'status' => $status
            ]);

            return $questionCompany;
        }

        return null;
    }
}
