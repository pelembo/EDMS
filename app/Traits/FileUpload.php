<?php

namespace App\Traits;

trait FileUpload
{
    public function Upload($file,  $file_name, $acronym, $name)
    {
        $file_extension = $file->getClientOriginalExtension();
        $file_url = $file->storeAs(
            'public/uploads/' . $acronym . '/' . $name,  $file_name . '.' . $file_extension
        );
        $file_path = str_replace('public/', 'storage/', $file_url);
        return $file_path;
    }

}
