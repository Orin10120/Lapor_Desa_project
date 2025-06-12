<?php

namespace App\Repositories;

use App\interfaces\ReportStatusRepositoryinterface;
use App\Models\ReportStatus;

class ReportStatusRepository implements ReportStatusRepositoryinterface{
    public function getAllReportsStatuses() {
        return ReportStatus::all();
    }

    public function getReportStatusById(int $id) {
        return ReportStatus::where('id', $id)->first();
    }

    public function createReportStatus(array $data) {
        return ReportStatus::create($data);
    }

    public function updateReportStatus(int $id, array $data) {
        $reportStatus = $this->getReportStatusById($id);

        return $reportStatus->update($data);

    }

    public function deleteReportStatus(int $id) {
        $reportStatus = $this->getReportStatusById($id);

        return $reportStatus->delete();
    }
}
