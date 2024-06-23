<?php

namespace App\Admin\Repositories;

use App\Models\Document as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Document extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
