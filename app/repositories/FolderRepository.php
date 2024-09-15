<?php

namespace App\repositories;

use App\Interfaces\FolderInterface;
use App\Models\Folder;

class FolderRepository implements FolderInterface
{
    /**
     * Create a new class instance.
     */
    public function form1(array $data)
    {
        return Folder::create($data);
    }
    public function form2(array $data)
    {
        return Folder::create($data);
    }
}
