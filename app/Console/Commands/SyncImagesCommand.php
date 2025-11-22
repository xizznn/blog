<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class SyncImagesCommand extends Command
{
    protected $signature = 'images:sync';
    protected $description = 'Sync images from storage/app/images to public/storage/images';

    public function handle()
    {
        $source = storage_path('app/images');
        $destination = public_path('storage/images');

        $this->info('🔄 Синхронизация изображений...');
        $this->line("Источник: {$source}");
        $this->line("Назначение: {$destination}");

        // Проверяем существует ли source
        if (!File::exists($source)) {
            $this->error("❌ Папка источника не существует: {$source}");
            return 1;
        }

        // Создаем папку назначения если не существует
        if (!File::exists($destination)) {
            File::makeDirectory($destination, 0755, true);
            $this->info("✅ Создана папка назначения: {$destination}");
        }

        // Получаем файлы
        $files = File::files($source);
        $copied = 0;
        $skipped = 0;
        $errors = 0;

        foreach ($files as $file) {
            $filename = $file->getFilename();
            $sourcePath = $source . '/' . $filename;
            $destPath = $destination . '/' . $filename;

            // Проверяем нужно ли копировать
            if (!File::exists($destPath) || File::lastModified($sourcePath) > File::lastModified($destPath)) {
                if (File::copy($sourcePath, $destPath)) {
                    $this->line("✅ Скопирован: {$filename}");
                    $copied++;
                } else {
                    $this->error("❌ Ошибка копирования: {$filename}");
                    $errors++;
                }
            } else {
                $this->line("⏭️  Уже актуален: {$filename}");
                $skipped++;
            }
        }

        $this->info("\n🎉 Синхронизация завершена!");
        $this->info("Скопировано: {$copied}, Пропущено: {$skipped}, Ошибок: {$errors}");

        return 0;
    }
}
