<?php

namespace App\Services;

use App\Models\CompanyProfile;
use App\Traits\HasImage;

class CompanyProfileService
{
    use HasImage;
    private $imgPath = 'company_profiles';

    public function createCompanyProfile(array $companyProfileData): CompanyProfile
    {
        $companyProfile = CompanyProfile::create([
            'name' => $companyProfileData['name'],
            'description' => $companyProfileData['description'],
            'address' => $companyProfileData['address'],
            'phone' => $companyProfileData['phone'],
            'email' => $companyProfileData['email'],
            'website_logo' => $this->uploadImage($companyProfileData['logo_url'], $this->imgPath)
        ]);



        return $companyProfile;
    }
    public function updateCompanyProfile(array $companyProfileData)
    {
        $companyProfile = CompanyProfile::find($companyProfileData['id']);
        $existingImageUrl = $companyProfile->website_logo_url;

        $updateData = [
            'name' => $companyProfileData['name'],
            'description' => $companyProfileData['description'],
            'address' => $companyProfileData['address'],
            'phone' => $companyProfileData['phone'],
            'email' => $companyProfileData['email'],
        ];

        if (isset($companyProfileData['logo_url']) && $companyProfileData['logo_url']->isValid()) {
            $newImageUrl = $this->uploadImage($companyProfileData['logo_url'], $this->imgPath);
            $updateData['website_logo_url'] = $newImageUrl;

            if ($existingImageUrl) {
                unlink(public_path($existingImageUrl));
            }
        }

        return $companyProfile->update($updateData);
    }
}
