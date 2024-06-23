<?php

namespace App\Admin\Repositories;

use App\Models\Chapter as Model;
use Dcat\Admin\Repositories\EloquentRepository;

class Chapter extends EloquentRepository
{
    /**
     * Model.
     *
     * @var string
     */
    protected $eloquentClass = Model::class;
}
