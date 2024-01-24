<?php

namespace App\Services;

use App\Models\CompanyService;
use App\Traits\HasImage;

class CompanyBusinessService
{
    use HasImage;
    private $imgPath = 'company_services';

    public function createCompanyService(array $companyServiceData): CompanyService
    {
        $companyService = CompanyService::create([
            'title' => $companyServiceData['service-title'],
            'description' => $companyServiceData['service-description'],
            'image_url' => $this->uploadImage($companyServiceData['service-img'], $this->imgPath)
        ]);

        return $companyService;
    }
    public function updateCompanyService(array $companyServiceData)
    {
        $companyService = CompanyService::find($companyServiceData['id']);
        $existingImageUrl = $companyService->image_url;

        $updateData = [
            'title' => $companyServiceData['service-title'],
            'description' => $companyServiceData['service-description']
        ];

        if (isset($companyServiceData['service-img']) && $companyServiceData['service-img']->isValid()) {
            $newImageUrl = $this->uploadImage($companyServiceData['service-img'], $this->imgPath);
            $updateData['image_url'] = $newImageUrl;

            if ($existingImageUrl) {
                unlink(public_path($existingImageUrl));
            }
        }
        return $companyService->update($updateData);
    }
}
