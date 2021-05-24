<?php

namespace App\Http\Controllers;

use App\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Symfony\Component\Finder\SplFileInfo;

class SitewideSearchController extends Controller
{
    public function search(Request $request)
    {
        $keyword = $request->search;

        $toExclude = [
            Event::class,
        ];

        // Загрузка всех модулей в папке Http(Models в новых версиях 8+)
        $files = File::allFiles(app()->basePath() . '/app');

        $results = collect($files)->map(function (SplFileInfo $file){
            $filename = $file->getRelativePathname();
            // ищем и загружаем только php файлы
            if(substr($filename, -4) !== '.php'){
                return null;
            }
            return substr($filename, 0, -4);
        })->filter(function (?string $classname) use($toExclude){
            if($classname === null){
                return false;
            }

            $reflection = new \ReflectionClass(app()->getNamespace() . '\\' . $classname);

            $isModel = $reflection->isSubclassOf(Model::class);

            $searchable = $reflection->hasMethod('search');

            return $isModel && $searchable && !in_array($reflection->getName(), $toExclude, true);
        });

        dd($results);
    }
}
