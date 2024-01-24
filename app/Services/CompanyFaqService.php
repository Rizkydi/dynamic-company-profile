<?php

namespace App\Services;

use App\Models\CompanyFaq;

class CompanyFaqService
{
    public function createCompanyFaq(array $companyFaqData): CompanyFaq
    {
        $companyFaq = CompanyFaq::create([
            'question' => $companyFaqData['faq-question'],
            'answer' => $companyFaqData['faq-answer']
        ]);

        return $companyFaq;
    }

    public function updateCompanyFaq(array $companyFaqData)
    {
        $companyFaq = CompanyFaq::find($companyFaqData['id']);
        $updateData = [
            'question' => $companyFaqData['faq-question'],
            'answer' => $companyFaqData['faq-answer']
        ];

        return $companyFaq->update($updateData);
    }
}
