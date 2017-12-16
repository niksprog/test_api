<?php

namespace App\Http\Controllers\Api;

use App\Report;
use App\Vessel;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Marcelgwerder\ApiHandler\Facades\ApiHandler;
use Marcelgwerder\ApiHandler\Result;


class ReportsController extends Controller
{

    public function index(Request $request)
    {

        /** @var Result $apiHandler */
        $apiHandler = ApiHandler::parseMultiple(Report::query(),['imo', 'created_on', 'conditionType', 'meHours', 'meCons', 'auxHours', 'auxCons', 'observedDistance'], $request->except('api_token','format'));


        /** @var JsonResponse $jsonResponse */
        $jsonResponse = $apiHandler->getResponse();


        if($request->get('format')=='csv')
        {
            return response($jsonResponse->getData())
                ->header('Content-Type','application/csv')
                ->header('Content-Disposition', 'attachment; filename="'.Carbon::now()->toDateTimeString().'-reports.csv'.'"')
                ->header('Pragma','no-cache')
                ->header('Expires','0');
        }


        return $apiHandler->getResponse();
    }
}

