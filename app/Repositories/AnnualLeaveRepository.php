<?php

namespace App\Repositories;
use App\AnnualLeave as AnnualLeave_model;
use App\Http\Requests\CreateAnnualLeaveRequest;
use App\Interfaces\AnnualLeavesInterface;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AnnualLeaveRepository implements AnnualLeavesInterface
{

    public function getAllAnnualLeaves()
    {
        $annualLeaves = AnnualLeave_model::all();
            return response()->json([
                'message' => 'All Annual Leaves',
                'code' => 200,
                'error' => false,
                'data' => $annualLeaves
            ], 200);
 
    }

    public function getAnnualLeavesById($id)
    {
        try {
            $annualLeaves = AnnualLeave_model::find($id);
            // Check the annualLeaves
            if(!$annualLeaves) return  response()->json(['message' => 'No Annual Leaves with found'], 404);
            return response()->json([
                'message' => 'Annual Leaves Detail',
                'code' => 200,
                'error' => false,
                'data' => $annualLeaves
            ], 200);
        } catch(\Exception $e) {
            return response()->json([
                'message' => $e->getMessage(),
                'error' => true,
                'code' => 500
            ]);
        }
    }

    public function create(CreateAnnualLeaveRequest $request)
    {
        DB::beginTransaction();
        try {
            $annualLeaves = new AnnualLeave_model();
            DB::commit();
            return response()->json([
                'message' => 'Annual leave created successfully',
                'code' => 201,
                'error' => false,
                'data' => $annualLeaves
            ], 201);
        } catch(\Exception $e) {
            DB::rollBack();
            return response()->json([
                'message' => $e->getMessage(),
                'error' => true,
                'code' => 500
            ]);
        }
    }

    
}
