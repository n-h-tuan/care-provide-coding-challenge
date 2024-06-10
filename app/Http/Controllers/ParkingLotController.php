<?php

namespace App\Http\Controllers;

use App\Models\ParkingLot;
use App\Traits\ApiResponse;

class ParkingLotController extends Controller
{
    use ApiResponse;
    /** 
     * Park a parking lot
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function park(int $id)
    {
        $parkingLot = ParkingLot::findOrFail($id);
        if ($parkingLot->is_parked) {
            return $this->error("Spot {$id} is already parked.", 400);
        }
        $parkingLot->is_parked = true;
        $parkingLot->save();
        return $this->success("Spot {$id} has been parked.");
    }

    /**
     * Unpark a parking lot
     * @param int $id
     * @return \Illuminate\Http\JsonResponse
     */
    public function unpark(int $id)
    {
        $parkingLot = ParkingLot::findOrFail($id);
        if (!$parkingLot->is_parked) {
            return $this->error("Spot {$id} is not parked.", 400);
        }
        $parkingLot->is_parked = false;
        $parkingLot->save();
        return $this->success("Spot {$id} has been unparked.");
    }

    /**
     * Get all parking lots
     * @return \Illuminate\Http\JsonResponse
     */
    public function list()
    {
        $parkingLots = ParkingLot::all();
        return response()->json($parkingLots);
    }
}
