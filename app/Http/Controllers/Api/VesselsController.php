<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Vessel;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Marcelgwerder\ApiHandler\Facades\ApiHandler;
use Marcelgwerder\ApiHandler\Result;

class VesselsController extends Controller
{

    public function index(Request $request)
    {
        /** @var Result $apiHandler */
        $apiHandler = ApiHandler::parseMultiple(Vessel::query(),['id','name','email','imo'], $request->except('api_token','format'));

        /** @var JsonResponse $jsonResponse */
        $jsonResponse = $apiHandler->getResponse();


        if($request->get('format')=='csv')
        {
            return response($jsonResponse->getData())
                ->header('Content-Type','application/csv')
                ->header('Content-Disposition', 'attachment; filename="'.Carbon::now()->toDateTimeString().'-vessels.csv'.'"')
                ->header('Pragma','no-cache')
                ->header('Expires','0');
        }


        return $apiHandler->getResponse();
    }
}
