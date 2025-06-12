<?php

namespace App\Repositories;

use App\interfaces\ReportCategoryRepositoryinterface;
use App\Models\ReportCategory;
use App\Models\User;

class ReportCategoryRepository implements ReportCategoryRepositoryinterface{
    public function getAllReportCategories() {
        return ReportCategory::all();
    }

    public function getReportCategoryById(int $id) {
        return ReportCategory::where('id', $id)->first();
    }

    public function createReportCategory(array $data) {
        return ReportCategory::create($data);
    }

    public function updateReportCategory(int $id, array $data) {
        $reportCategory = $this->getReportCategoryById($id);

        return $reportCategory->update($data);

    }

    public function deleteReportCategory(int $id) {
        $reportCategory = $this->getReportCategoryById($id);

        return $reportCategory->delete();
    }
}
