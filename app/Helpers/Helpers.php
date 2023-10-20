<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

if (!function_exists('uploadFiles')) {
    function uploadFiles(Request $request, $param, $folder)
    {
        $imageNameArr = [];
        if ($request->hasFile($param)) {
            if (is_array($request->file($param))) {
                foreach ($request->file($param) as $file) {
                    $imageName = Storage::disk('public')->putFile($folder, $file);
                    array_push($imageNameArr, $imageName);
                }
            } else {
                $imageName = Storage::disk('public')->putFile($folder, $request->file($param));
                array_push($imageNameArr, $imageName);
            }
        }
        return implode(',', $imageNameArr);
    }
}

if (!function_exists('deleteFiles')) {
    function deleteFiles($fileName)
    {
        try {
            $fileNameArr = is_array($fileName) ? $fileName : explode(',', $fileName);

            foreach ($fileNameArr as $file) {
                if (Storage::disk('public')->exists($file)) {
                    Storage::disk('public')->delete($file);
                }
            }
        } catch (\Exception $e) {
            return returnResponse(error: 'Unable to delete files.');
        }
    }
}

/**
 * ------------------------------------------------------------------------
 * Display Image
 * ------------------------------------------------------------------------
 * @return string
 */

if (!function_exists('displayImage')) {
    function displayImage($path)
    {
        if ($path && (Storage::disk('public')->exists($path) || file_exists(public_path($path)))) {
            $url = (URL::to(Storage::url($path)));
            return $url;
        } else {
            $path = 'images/default.png';
            return $path;
        }
    }
}