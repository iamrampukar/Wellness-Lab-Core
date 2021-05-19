<?php
namespace App\Repositories;
use App\Repositories\PatientReportInterface;
use App\Models\PatientReport;

class PatientReportRepository implements PatientReportInterface {
    private $modelPatientReport;
    public function __construct(PatientReport $modelPatientReport) {
        $this->modelPatientReport = $modelPatientReport;
    }
    public function getAll() {
        return $this->modelPatientReport->all();
    }

    public function getById($id) {
        return $this->modelPatientReport->find($id);
    }

    public function create(array $attributes) {
        return $this->modelPatientReport->create($attributes);
    }

    public function update($id, array $attributes) {
        $model = $this->modelPatientReport->findOrFail($id);
        $model->update($attributes);
        return $model->save();
        // return $model;
    }

    public function delete($id) {
        return $this->getById($id)->delete();
    }
}