<?php

namespace App\interfaces;

interface ResidentRepositoryInterface {
    public function getAllResidents();
    public function getResidentById(int $id);
    public function createResident(array $data);
    public function updateResident(int $id, array $data);
    public function deleteResident(int $id);
}
