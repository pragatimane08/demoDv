<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;

class OptimizeImages extends Command
{
    protected $signature = 'images:optimize';
    protected $description = 'Optimize images in the public/img directory';

    public function handle()
    {
        $optimizerChain = OptimizerChainFactory::create();
        $directory = public_path('img'); // Path to the public/img directory

        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($directory));

        foreach ($iterator as $file) {
            if ($file->isFile() && in_array(strtolower($file->getExtension()), ['jpg', 'jpeg', 'png', 'gif', 'webp'])) {
                $this->info("Optimizing {$file->getPathname()}");
                $optimizerChain->optimize($file->getPathname());
            }
        }

        $this->info('All images in public/img have been optimized.');
    }
}