<?php


namespace App\Http\Repositories;


abstract class BaseRepositoryImpl implements BaseInterfaceRepository
{
    protected $model;
    public function __construct()
    {
        $this->setModel();
    }
    abstract public function getModel();
    public function setModel(){
        $this->model = app()->make($this->getModel());
    }
    public function getAll()
    {
        return $this->model->all();
    }
    public function delete($object)
    {
        // TODO: Implement delete() method.
    }
}
