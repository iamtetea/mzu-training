<?php

namespace App\Services;

use App\Models\Branch;

class BranchService
{
    public function list()
    {
        return Branch::with('department')->orderBy('id', 'asc')->get();
    }

    public function paginate()
    {

    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}
