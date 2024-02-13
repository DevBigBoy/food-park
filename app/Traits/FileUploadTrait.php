<?php

namespace App\Traits;

use Request;

trait FileUploadTraint
{
    function uploadImage(Request $request, $inputName, $path = '/uploads')
    {
        if ($request->hasFile($inputName)) {
            $image = $request->{$inputName};
            $ext = $image->getClientOriginalExtension();
            $imageName = 'media_' . uniqid() . '.' . $ext;


            $image->move(public_path($path));

            return $path . '/' . $imageName;
        }
    }
}
