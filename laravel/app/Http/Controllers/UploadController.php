<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\Facades\Image;

class UploadController extends Controller
{
    public function upload(Request $request)
    {
        // Validate the request
        $request->validate([
            'document' => 'required|file|mimes:jpg,jpeg,png,pdf|max:2048',
        ]);

        // Store the file locally
        $file = $request->file('document');
        $extension = strtolower($file->getClientOriginalExtension());
        $fileName = uniqid() . '.' . $extension;

        // Save locally
        $localPath = $file->storeAs('uploads_image', $fileName, 'public');

        // Save original file to MinIO
        $fileContents = file_get_contents($file->getRealPath());
        Storage::disk('minio')->put('uploads_image/' . $fileName, $fileContents);

        $thumbnailPath = null;

        // Generate a thumbnail for images only
        if (in_array($extension, ['jpg', 'jpeg', 'png'])) {
            $image = Image::make($file)->resize(150, 150, function ($constraint) {
                $constraint->aspectRatio();
                $constraint->upsize();
            })->encode($extension);

            $thumbnailPath = 'thumbnails/' . $fileName;
            Storage::disk('minio')->put($thumbnailPath, (string) $image);
        }

        // Return response
        return response()->json([
            'local_path' => $localPath,
            'minio_path' => 'uploads_image/' . $fileName,
            'thumbnail_path' => $thumbnailPath,
        ], 200);
    }
}
