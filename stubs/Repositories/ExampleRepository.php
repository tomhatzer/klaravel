<?php

namespace App\Repositories%subfolder%;

use App\%models_path%%modelSingular%;
use App\Contracts\Repositories%subfolder%\%model%Repository as Contract;
use Kevupton\Ethereal\Repositories\Repository;

class %model%Repository extends Repository implements Contract
{
    public function getClass()
    {
        return %modelSingular%::class;
    }

}
