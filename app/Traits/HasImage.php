<?php

namespace App\Traits;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait HasImage
{
    public function uploadImage(UploadedFile $image, $pathImage): string
    {
        $StoragePath = 'images/' . $pathImage;
        $imageName = time() . '.' . $image->extension();
        $storeImage = $image->storeAs($StoragePath, $imageName, 'public');
        $imagePath = Storage::url($storeImage);

        return $imagePath;
    }
}
