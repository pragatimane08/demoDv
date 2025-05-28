<?php

require __DIR__.'/vendor/autoload.php';

$app = require_once __DIR__.'/bootstrap/app.php';

$kernel = $app->make(Illuminate\Contracts\Console\Kernel::class);

// Clear Laravel cache
$kernel->call('route:clear');
$kernel->call('config:clear');
$kernel->call('cache:clear');
$kernel->call('storage:link');
// Manually create 'storage' folder and copy contents
// $source = __DIR__.'/storage/app/public';
// $target = __DIR__.'/storage';

// function recursiveCopy($src, $dst) {
//     $dir = opendir($src);
//     @mkdir($dst);
//     while(false !== ($file = readdir($dir))) {
//         if (($file != '.') && ($file != '..')) {
//             $srcPath = "$src/$file";
//             $dstPath = "$dst/$file";
//             if (is_dir($srcPath)) {
//                 recursiveCopy($srcPath, $dstPath);
//             } else {
//                 copy($srcPath, $dstPath);
//             }
//         }
//     }
//     closedir($dir);
// }

// recursiveCopy($source, $target);

echo "✅ Cache cleared and storage folder copied manually (symlink fallback).";
