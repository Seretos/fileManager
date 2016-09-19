<?php
/**
 * Created by PhpStorm.
 * User: aappen
 * Date: 19.09.16
 * Time: 14:28
 */

namespace fileManager;


class FileManager {
    public function fileExists ($file) {
        return file_exists($file);
    }

    public function clearDirectory ($directory) {
        array_map('unlink', glob($directory."*.*"));
    }

    public function createDirectory ($directory, $mode = 0777, $recursive = false, $context = null) {
        return mkdir($directory, $mode, $recursive, $context);
    }
}