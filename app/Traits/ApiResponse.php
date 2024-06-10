<?php
namespace App\Traits;
trait ApiResponse{

    /**
     * Return a failed JSON response.
     * @param string $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function error(string $message, int $code = 500)
    {
        return response()->json([
            "code" => $code,
            "message" => $message
        ], $code);
    }

    /**
     * Return a successful JSON response.
     * @param string $message
     * @param int $code
     * @return \Illuminate\Http\JsonResponse
     */
    public function success(string $message, int $code = 200)
    {
        return response()->json([
            "code" => $code,
            "message" => $message
        ], $code);
    }
}