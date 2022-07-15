<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ToolsController extends Controller
{
    /**
     * @param string $string
     * @return JsonResponse
     */
    public function palindrome(string $string): JsonResponse
    {
        $string = str($string)->trim()->lower();

        return response()->json([
            'data' => [
                'result' => str($string)
                    ->reverse()
                    ->contains($string)
            ]
        ]);
    }

    /**
     * @param string $string
     * @return JsonResponse
     */
    public function stringFrequency(string $string): JsonResponse
    {
        return response()->json([
            'data' => [
                'result' => str($string)->matchAll("/[\S]/u")
                    ->duplicates()
                    ->first()
            ]
        ]);
    }
}
