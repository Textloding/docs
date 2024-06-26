<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class ExportDocumentsSeeder extends Command
{
    protected $signature = 'export:documents-seed';
    protected $description = 'Export documents, versions, chapters, and articles tables data to a single seed file';

    public function handle()
    {
        $tables = [
            'documents' => 'Documents',
            'versions' => 'Versions',
            'chapters' => 'Chapters',
            'articles' => 'Articles'
        ];
        $namespace = 'Database\Seeders';
        $className = 'DocumentsSeeder';
        $path = database_path("seeders/{$className}.php");

        $seedContent = "<?php\n\nnamespace $namespace;\n\nuse Illuminate\Database\Seeder;\nuse Illuminate\Support\Facades\DB;\n\nclass $className extends Seeder\n{\n    public function run()\n    {\n";

        foreach ($tables as $table => $model) {
            $data = DB::table($table)->get()->toArray();
            $dataString = $this->varExport($data);
            $seedContent .= "        DB::table('$table')->insert($dataString);\n";
        }

        $seedContent .= "    }\n}\n";

        file_put_contents($path, $seedContent);
        $this->info('Documents seed file was created successfully.');
    }

    protected function varExport($var, $indent = '        ')
    {
        if (is_array($var)) {
            $r = [];
            foreach ($var as $item) {
                if (is_object($item)) {
                    $item = (array) $item;  // 转换对象为数组
                }
                $itemParts = [];
                foreach ($item as $key => $value) {
                    if (is_string($value)) {
                        $value = '"' . addcslashes($value, "\\\$\"\r\n\t\v\f") . '"';
                    } elseif (is_bool($value)) {
                        $value = $value ? 'true' : 'false';
                    } elseif ($value === null) {
                        $value = 'null';
                    }
                    $itemParts[] = "'$key' => $value";
                }
                $r[] = "$indent    [" . implode(", ", $itemParts) . "]";
            }
            return "[\n" . implode(",\n", $r) . "\n$indent]";
        } elseif (is_string($var)) {
            return '"' . addcslashes($var, "\\\$\"\r\n\t\v\f") . '"';
        } elseif (is_bool($var)) {
            return $var ? 'true' : 'false';
        } elseif ($var === null) {
            return 'null';
        } else {
            return $var;
        }
    }
}
