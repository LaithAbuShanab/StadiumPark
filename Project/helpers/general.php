<?php

define('DS', DIRECTORY_SEPARATOR);

if (!function_exists("avatar")) {
    function avatar($path = '')
    {
        return asset('avatar' .DS. $path);
    }
}

if (!function_exists("theme")) {
    function theme($path = '')
    {
        return asset('theme' . DS. $path);
    }
}

if (!function_exists("frontend")) {
    function frontend($path = '')
    {
        return asset('frontend' . DS. $path);
    }
}


if (!function_exists("admin")) {
    function admin()
    {
        return auth()->guard('admin');
    }
}



if (!function_exists("uploadFile")) {
    function uploadFile($status, $inputName, $path, $oldPath)
    {
        if ($status == 'create') {
            $file = \request()->file($inputName);
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($path), $imageName);
            $imagePath['image'] = $imageName;
            return $imagePath;

        } elseif ($status == "update") {
            $file = \request()->file($inputName);
            $imageName = time() . '.' . $file->getClientOriginalExtension();
            \Illuminate\Support\Facades\File::delete(public_path($oldPath));
            $file->move(public_path($path), $imageName);
            $imagePath['image'] = $imageName;
            return $imagePath;
        }
    }
}
