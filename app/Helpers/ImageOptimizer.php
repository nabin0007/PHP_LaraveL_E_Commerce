
<?php

namespace App\Helpers;

use Intervention\Image\Facades\Image;
use Spatie\ImageOptimizer\OptimizerChainFactory;
use Illuminate\Support\Facades\File;

class ImageOptimizer
{
    /**
     * Optimize and save a single image
     *
     * @param \Illuminate\Http\UploadedFile|string $file
     * @param string $folder
     * @param int $width
     * @param int|null $height
     * @param bool $webp
     * @return string $path
     */
    public static function optimize($file, $folder = 'images', $width = 1200, $height = null, $webp = true)
    {
        $path = public_path($folder);
        if (!File::exists($path)) {
            File::makeDirectory($path, 0755, true);
        }

        if (is_string($file)) {
            // Existing image path
            $filename = basename($file);
            $fullPath = $file;
        } else {
            // Uploaded image
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '_' . uniqid() . '.' . $extension;
            $fullPath = $path . '/' . $filename;
            $file->move($path, $filename);
        }

        // Resize & encode
        $image = Image::make($fullPath);
        $image->resize($width, $height, function ($constraint) {
            $constraint->aspectRatio();
            $constraint->upsize();
        })->save($fullPath);

        // Compress
        $optimizerChain = OptimizerChainFactory::create();
        $optimizerChain->optimize($fullPath);

        // Convert to WebP
        if ($webp) {
            $webpName = pathinfo($filename, PATHINFO_FILENAME) . '.webp';
            $image->encode('webp', 80)->save($path . '/' . $webpName);
            return $folder . '/' . $webpName;
        }

        return $folder . '/' . $filename;
    }

    /**
     * Bulk optimize all images in a folder
     */
    public static function bulkOptimize($folder = 'images', $width = 1200, $height = null, $webp = true)
    {
        $path = public_path($folder);
        if (!File::exists($path)) return;

        $files = File::allFiles($path);
        foreach ($files as $file) {
            self::optimize($file->getPathname(), $folder, $width, $height, $webp);
        }
    }
}
