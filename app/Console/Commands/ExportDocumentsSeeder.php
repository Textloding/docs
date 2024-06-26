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
        switch (gettype($var)) {
            case 'string':
                return '"' . addcslashes($var, "\\\$\"\r\n\t\v\f") . '"';
            case 'array':
                $indexed = array_keys($var) === range(0, count($var) - 1);
                $r = [];
                foreach ($var as $key => $value) {
                    $r[] = "$indent    "
                        . ($indexed ? '' : $this->varExport($key) . ' => ')
                        . $this->varExport($value, "$indent    ");
                }
                return "[\n" . implode(",\n", $r) . "\n$indent]";
            case 'boolean':
                return $var ? 'true' : 'false';
            case 'integer':
            case 'double':
                return $var;
            default:
                return var_export($var, true);
        }
    }
}
