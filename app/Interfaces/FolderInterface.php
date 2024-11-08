<?php

namespace App\Interfaces;

interface FolderInterface
{
    public function form1(array $data);
    public function form2(array $data);

    public function create(array $data);

    public function list(array $data);
    public function createOffers(array $data);
    
    public function valid($id);
    public function reset(array $data);
}
