<?php

namespace App\Interfaces;

interface IModel
{
    public function getOne(int $id);

    public function getAll(): array;

    public function getTableName(): string;
}