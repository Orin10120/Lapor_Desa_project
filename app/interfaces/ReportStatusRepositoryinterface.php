<?php

namespace App\interfaces;

interface ReportStatusRepositoryinterface{
    public function getAllReportsStatuses();
    public function getReportStatusById(int $id);
    public function createReportStatus(array $data);
    public function updateReportStatus(int $id, array $data);
    public function deleteReportStatus(int $id);
}
