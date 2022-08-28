<?php

namespace RidhoPujiono\File;

use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Storage;

/**
 * Basic Calculator.
 *
 */
class FileManagement
{
    public static function upload($file, $destination)
    {
        if (empty($file)) {
            return [
                "status" => "empty",
                "message" => "File is empty!",
            ];
        } else {
            $nama_file = Storage::putFile(
                $destination,
                $file,
            );
            return [
                "status" => "success",
                "message" => "File is successfully uploaded!",
                "filename" => basename($nama_file),
                "folder" => "storage/app/$destination",
            ];
        }
    }
    public function uploadMultiple($files, $destination)
    {
        if (empty($files)) {
            return [
                "status" => "empty",
                "message" => "File is empty!",
            ];
        } else {
            $name_file = [];
            for ($i = 0; $i < count($files); $i++) {
                $nama_file[$i] = Storage::putFile(
                    $destination,
                    $files[$i],
                );
                array_push($name_file, basename($nama_file[$i]));
            }
            return [
                "status" => "success",
                "message" => "File is successfully uploaded!",
                "filename" => $name_file,
                "folder" => "storage/app/$destination",
            ];
        }
    }
    public function delete($file, $destination)
    {
        Storage::delete($destination . "/" . $file);
        return [
            "status" => "success",
            "message" => "File deleted",
        ];
    }
    public function deleteMultiple($files, $destination)
    {
        for ($i = 0; $i < count($files); $i++) {
            Storage::delete($destination . "/" . $files[$i]);
        }
        return [
            "status" => "success",
            "message" => "Files deleted",
        ];
    }
    public function checkExist($file, $destination)
    {
        $check = File::exists(storage_path("app/$destination/$file"));
        if ($check) {
            return [
                "status" => "success",
                "message" => "File $file is exist!",
            ];
        } else {
            return [
                "status" => "empty",
                "message" => "File $file doesnt exist!",
            ];
        }
    }
}
