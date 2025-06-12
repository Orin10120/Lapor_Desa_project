<?php

namespace App\interfaces;

interface ReportRepositoryinterface{
    public function getAllReports();
    public function getLatestReports();
    public function getReportsByResidentId(string $status);
    public function getReportById(int $id);
    public function getReportByCode(string $code);
    public function getReportsByCategory(string $category);
    public function createReport(array $data);
    public function updateReport(int $id, array $data);
    public function deleteReport(int $id);
}
