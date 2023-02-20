<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\CreateAnnualLeaveRequest;
use App\Interfaces\AnnualLeavesInterface;

class AnnualLeaves extends Controller
{
    protected $AnnualLeavesInterface;

    /**
     * Create a new constructor for this controller
     */
    public function __construct(AnnualLeavesInterface $AnnualLeavesInterface)
    {
        return $this->AnnualLeavesInterface = $AnnualLeavesInterface;
    }

    public function index()
    {
       return $this->AnnualLeavesInterface->getAllAnnualLeaves();
    }

    public function store(CreateAnnualLeaveRequest $request)
    {
        return $this->AnnualLeavesInterface->create($request);
    }


    public function show($id)
    {
        return $this->AnnualLeavesInterface->getAnnualLeavesById($id);
    }



}
