<?php

namespace App\Interfaces;
use App\Http\Requests\CreateAnnualLeaveRequest;

interface AnnualLeavesInterface
{

    public function getAllAnnualLeaves();
    public function getAnnualLeavesById($id);
    public function create(CreateAnnualLeaveRequest $request);

   
}