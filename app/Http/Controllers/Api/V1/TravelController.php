<?php

namespace App\Http\Controllers\Api\V1;

use App\Models\Travel;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Resources\TravelResource;

/**
     * @OA\Info(
     *      title="Travel Agency Api",
     *      version="1.0.0",
     *      description="Travel Agency Api",
     * ),
     * @OA\Server(
     *     description="Travel Agency Api",
     *     url="http://127.0.0.1:8000/api/v1"
     * ),
     */
class TravelController extends Controller
{
    /**
     * @OA\Get(
     *     path="/travels",
     *     summary="get all travels",
     *     tags={"travel"},
     *     description="get all travels",
     *     operationId="getAllTravels",
     *     @OA\Response(
     *         response=200,
     *         description="successful operation",
     *     ),
     * )
     */
    public function index()
    {
       $travels = Travel::where('is_public',true)->paginate();

       return TravelResource::collection($travels);
    }

}
