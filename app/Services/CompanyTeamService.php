<?php

namespace App\Services;

use App\Models\CompanyTeam;
use App\Traits\HasImage;

class CompanyTeamService
{
    use HasImage;
    private $imgPath = 'company_team';
    public function createCompanyTeam(array $companyTeamData): CompanyTeam
    {
        $companyTeam = CompanyTeam::create([
            'name' => $companyTeamData['teams-name'],
            'image_url' => $this->uploadImage($companyTeamData['teams-img'], $this->imgPath),
        ]);

        return $companyTeam;
    }

    public function updateCompanyTeam(array $companyTeamData)
    {
        $companyTeam = companyTeam::find($companyTeamData['id']);
        $existingImageUrl = $companyTeam->image_url;

        $updateData = [
            'name' => $companyTeamData['teams-name'],
        ];

        if (isset($companyTeamData['teams-img']) && $companyTeamData['teams-img']->isValid()) {
            $newImageUrl = $this->uploadImage($companyTeamData['teams-img'], $this->imgPath);
            $updateData['image_url'] = $newImageUrl;

            if ($existingImageUrl) {
                unlink(public_path($existingImageUrl));
            }
        }

        return $companyTeam->update($updateData);
    }
}
