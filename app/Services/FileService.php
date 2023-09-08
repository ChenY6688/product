<?php

namespace App\Services;

use Illuminate\Support\Facades\File;

class FileService
{
    /**
     * 上傳檔案
     * @param mixed $file 要轉換的File檔案
     * @param string $dir 要放置的資料夾名稱
     * @return object 回傳資料庫儲存的檔名及路徑
     */
    public static function fileUpload($file, $dir, $uid = '')
    {
        // 防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/')) {
            mkdir('upload/');
        }

        // 防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/' . $dir)) {
            mkdir('upload/' . $dir);
        }

        // 取得檔案的副檔名
        $data = (object)[
            'name' => null,
            'path' => null,
        ];
        $data->name = $file->getClientOriginalName();

        $middleName = $uid ? "-{$uid}-" : '-';

        // 檔案名稱會被重新命名
        $data->path = '/upload/' . $dir . '/' . time() . $middleName . $data->name;
        // 移動到指定路徑
        move_uploaded_file($file, public_path() . $data->path);
        // 回傳 資料庫儲存用的路徑格式

        return $data;
    }

    /**
     * 將base64轉換成本地檔案並上傳
     * @param string $base64 要轉換的base64字串
     * @param string $dir 要放置的資料夾名稱
     * @return string 回傳資料庫儲存用的路徑格式
     */
    public static function base64Upload($base64, $dir, $uid = '')
    {
        if (!$base64 || !stripos($base64, ';base64,')) return '';
        // 防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/')) {
            mkdir('upload/');
        }

        // 防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/' . $dir)) {
            mkdir('upload/' . $dir);
        }

        $middleName = $uid ? "-{$uid}" : '-';

        list($type, $base64) = explode(';', $base64);
        list(, $extension) = explode('/', $type);
        list(, $base64) = explode(',', $base64);
        $transExtension = $extension !== 'png' ? 'webp' : 'png';
        $fileName = strval(time() . md5(rand(100, 200))) . $middleName . '.' . $transExtension;
        $base64 = base64_decode($base64);
        file_put_contents($fileName, $base64);

        // 移動到指定路徑
        $path = '/upload/' . $dir . '/' . $fileName;
        rename($fileName, public_path() . $path);

        // 回傳 資料庫儲存用的路徑格式
        return $path;
    }

    /**
     * 上傳圖片
     * @param mixed $file 要轉換的File檔案
     * @param string $dir 要放置的資料夾名稱
     * @return string 回傳資料庫儲存用的路徑格式
     */
    public static function imgUpload($file, $dir)
    {
        // 防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/')) {
            mkdir('upload/');
        }

        // 防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/' . $dir)) {
            mkdir('upload/' . $dir);
        }

        // 取得檔案的副檔名
        $extension = $file->getClientOriginalExtension();
        // 檔案名稱會被重新命名
        $filename = strval(time() . md5(rand(100, 200))) . '.' . $extension;
        // 移動到指定路徑
        $path = '/upload/' . $dir . '/' . $filename;
        move_uploaded_file($file, public_path() . $path);
        // 回傳 資料庫儲存用的路徑格式
        return $path;
    }

    /**
     * 相簿
     * @param mixed $file 要轉換的File檔案
     * @param string $dir 要放置的資料夾名稱
     * @return object 回傳資料庫儲存用的路徑格式
     */
    public static function mutiPhotoUpload($file, $dir)
    {
        // 防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/')) {
            mkdir('upload/');
        }
        // 防呆：資料夾不存在時將會自動建立資料夾，避免錯誤
        if (!is_dir('upload/' . $dir)) {
            mkdir('upload/' . $dir);
        }
        // 取得檔案的副檔名
        $data = (object)[
            'name' => null,
            'path' => null,
        ];

        $extension = $file->getClientOriginalExtension();
        $data->name = explode('.' . $extension, $file->getClientOriginalName())[0];
        // 檔案名稱會被重新命名
        $filename = strval(time() . md5(rand(100, 200))) . '.' . $extension;
        // 檔案名稱會被重新命名
        $data->path = '/upload/' . $dir . '/' .  $filename;
        // 移動到指定路徑
        move_uploaded_file($file, public_path() . $data->path);
        // 回傳 資料庫儲存用的路徑格式

        return $data;
    }

    /**
     * 刪除上傳檔案
     * @param string $url 要刪的本地檔案路徑(/upload/...)
     * @return boolean 回傳是否成功刪除
     */
    public static function deleteUpload($url)
    {
        if (file_exists(public_path() . $url)) {
            File::delete(public_path() . $url);
        }
        return true;
    }
}