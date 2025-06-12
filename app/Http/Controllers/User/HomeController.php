<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\interfaces\ReportCategoryRepositoryinterface;
use App\interfaces\ReportRepositoryinterface;
use App\Models\Report;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    private ReportRepositoryinterface $reportRepository;
    private ReportCategoryRepositoryinterface $reportCategoryRepository;
    public function __construct(ReportCategoryRepositoryinterface  $reportCategoryRepository, ReportRepositoryinterface $reportRepository)
    {
        $this->reportRepository = $reportRepository;
        $this->reportCategoryRepository = $reportCategoryRepository;
    }

    public function index()
    {
        $reports = $this->reportRepository->getLatestReports();
        $categories = $this->reportCategoryRepository->getAllReportCategories();
        return view('pages.app.home', compact('categories', 'reports'));
    }
}
