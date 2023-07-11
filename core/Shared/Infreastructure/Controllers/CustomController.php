<?php
namespace Core\Shared\Infreastructure\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
class CustomController extends BaseController
{  
     use AuthorizesRequests, ValidatesRequests;
     protected function jsonResponse(int $status,bool $error,array|string|int|bool $response):JsonResponse{
          return response()->json([
               "status"=>$status,
               "error"=>$error,
               "message"=>$response
          ]);
     }
}