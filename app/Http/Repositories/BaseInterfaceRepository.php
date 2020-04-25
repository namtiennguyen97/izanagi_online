<?php


namespace App\Http\Repositories;


interface BaseInterfaceRepository
{
public function getAll();
public function delete($object);
}
