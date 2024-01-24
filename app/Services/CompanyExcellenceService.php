<?php

namespace App\Services;

use App\Models\CompanyExcellence;
use App\Traits\HasImage;

class CompanyExcellenceService
{
    use HasImage;
    private $imgPath = 'company_excellences';

    public function createCompanyExcellence(array $companyExcellenceData): CompanyExcellence
    {
        $companyExcellence = CompanyExcellence::create([
            'title' => $companyExcellenceData['excellence-title'],
            'description' => $companyExcellenceData['excellence-description'],
            'image_url' => $this->uploadImage($companyExcellenceData['excellence-img'], $this->imgPath)
        ]);

        return $companyExcellence;
    }
    public function updateCompanyExcellence(array $companyExcellenceData)
    {
        $companyExcellence = CompanyExcellence::find($companyExcellenceData['id']);
        $existingImageUrl = $companyExcellence->image_url;

        $updateData = [
            'title' => $companyExcellenceData['excellence-title'],
            'description' => $companyExcellenceData['excellence-description']
        ];

        if (isset($companyExcellenceData['excellence-img']) && $companyExcellenceData['excellence-img']->isValid()) {
            $newImageUrl = $this->uploadImage($companyExcellenceData['excellence-img'], $this->imgPath);
            $updateData['image_url'] = $newImageUrl;

            if ($existingImageUrl) {
                unlink(public_path($existingImageUrl));
            }
        }
        return $companyExcellence->update($updateData);
    }
}
