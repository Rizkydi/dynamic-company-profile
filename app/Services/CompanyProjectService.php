<?php

namespace App\Services;

use App\Models\CompanyProject;
use App\Traits\HasImage;

class CompanyProjectService
{
    use HasImage;
    private $imgPath = 'company_project';
    public function createCompanyProject(array $companyProjectData): CompanyProject
    {
        $companyProject = CompanyProject::create([
            'client_name' => $companyProjectData['project-client'],
            'project_name' => $companyProjectData['project-name'],
            'image_url' => $this->uploadImage($companyProjectData['project-img'], $this->imgPath),
            'description' => $companyProjectData['project-description'],
        ]);

        return $companyProject;
    }

    public function updateCompanyProject($id, array $companyProjectData)
    {
        $companyProject = companyProject::find($id);
        $existingImageUrl = $companyProject->image_url;

        $updateData = [
            'client_name' => $companyProjectData['project-client'],
            'project_name' => $companyProjectData['project-name'],
            'description' => $companyProjectData['project-description'],
        ];

        if (isset($companyProjectData['project-img']) && $companyProjectData['project-img']->isValid()) {
            $newImageUrl = $this->uploadImage($companyProjectData['project-img'], $this->imgPath);
            $updateData['image_url'] = $newImageUrl;

            if ($existingImageUrl) {
                unlink(public_path($existingImageUrl));
            }
        }

        return $companyProject->update($updateData);
    }
}