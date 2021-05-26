<?php
namespace App\Repositories;
use App\Repositories\PatientInterface;
use App\Models\Patient;

class PatientRepository implements PatientInterface{
    private $modelPatient;
    public function __construct(Patient $modelPatient) {
        $this->modelPatient = $modelPatient;
    }
    public function getAll() {
        return $this->modelPatient->orderBy('id', 'DESC')->get();
    }

    public function getById($id) {
        return $this->modelPatient->find($id);
    }

    public function create(array $attributes) {
        return $this->modelPatient->create($attributes);
    }

    public function update($id, array $attributes) {
        $model = $this->modelPatient->findOrFail($id);
        $model->update($attributes);
        return $model->save();
        // return $model;
    }

    public function delete($id) {
        return $this->getById($id)->delete();
    }
}