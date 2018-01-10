<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Report;
use App\Rules\ArrayKeys;
use App\Http\Resources\ReportResource;
use League\Csv\Writer;
use SplTempFileObject;

class ReportController extends Controller
{

    /**
     * Error Messages for Reports Request Filtering options
     * @var array
     */
    private $filterMessages = [
        'vessels' => 'Vessels should be an array of imo numbers.',
        'vessels.*' => 'Wrong imo value. Expected Integer.',
        'fuel_consumption.*.*' => 'Wrong Fuel consumption values. Expected Numeric.',
        'condition.in' => 'Wrong condition value. Accepted values (streaming, anchor).',
        'date_to.date' => 'Not valid Date.',
        'date_to.date_format' => 'Not valid Date format. Please use yyyy-mm-dd ex. 2018-01-01.',
        'date_to.after_or_equal' => 'date_to must be equal or greated than date_from.',
        'date_from.date' => 'Not valid Date.',
        'date_from.date_format' => 'Not valid Date format. Please use yyyy-mm-dd ex. 2018-01-01.'
    ];

    /**
     * Display a listing of the resource.
     * @param  \Illuminate\Http\Request  $request
     * @return App\Report Collection
     */
    private function filterReports(Request $request) {

        // Get Reports with Eloquent Relation to Vessels
        $reports = Report::with('vessel');

        // Vessels Filter implementation
        if ($request->has('vessels')) {
            $reports->whereHas('vessel', function ($query) use($request) {
                $query->whereIn('imo', $request->vessels);
            });
        }

        // Fuel consumption Filter implementation
        if ($request->has('fuel_consumption')) {
            // Main Engine Fuel consumption Filters
            if (in_array('main', array_keys($request->fuel_consumption))) {
                // Main Engine Fuel consumption Greater than Filter
                if (in_array('greater', array_keys($request->fuel_consumption['main']))) {
                    $reports->where('meCons', '>', $request->fuel_consumption['main']['greater']);
                }
                // Main Engine Fuel consumption Lower than Filter
                if (in_array('lower', array_keys($request->fuel_consumption['main']))) {
                    $reports->where('meCons', '<', $request->fuel_consumption['main']['lower']);
                }
            }
            // Auxiliary Engine Fuel consumption Filters
            if (in_array('auxiliary', array_keys($request->fuel_consumption))) {
                // Auxiliary Engine Fuel consumption Greater than Filter
                if (in_array('greater', array_keys($request->fuel_consumption['auxiliary']))) {
                    $reports->where('auxCons', '>', $request->fuel_consumption['auxiliary']['greater']);
                }
                // Auxiliary Engine Fuel consumption Lower than Filter
                if (in_array('lower', array_keys($request->fuel_consumption['auxiliary']))) {
                    $reports->where('auxCons', '<', $request->fuel_consumption['auxiliary']['lower']);
                }
            }
        }

        // Condition Filter implementation
        if ($request->has('condition')) {
            $reports->where('conditionType', '=', $request->condition);
        }

        // Date from Filter implementation
        if ($request->has('date_from')){
            $reports->where('created_on', '>=', $request->date_from);
        }

        // Date to Filter implementation
        if ($request->has('date_to')){
            $reports->where('created_on', '<=', $request->date_to . '23:59:59');
        }

        return $reports->get();
    }

    public function exportCsv($reports) {

        $csv = Writer::createFromFileObject(new SplTempFileObject());

        // Header row with Column titles
        $csv->insertOne([
            'Vessel_imo',
            'Vessel_email',
            'created_on',
            'conditionType',
            'meHours',
            'meCons',
            'auxHours',
            'auxCons',
            'observedDistance'
        ]);

        foreach ($reports as $report) {
            // Dara row
            $csv->insertOne([
                $report->vessel->imo,
                $report->vessel->email,
                $report->created_on,
                $report->conditionType,
                $report->meHours,
                $report->meCons,
                $report->auxHours,
                $report->auxCons,
                $report->observedDistance
            ]);
        }
        return $csv->getContent();
        $csv->output('reports.csv');
        die;

    }

    /**
     * Display a listing of the resource.
     * @return App\Http\Resources\ReportResource
     */
    public function index(Request $request) {

        // Filters Validation Rules and Messages
        $this->validate($request, [
            'vessels' => 'array',
            'vessels.*' => 'integer',
            'condition' => 'in:steaming,anchor',
            'fuel_consumption' => new ArrayKeys(['main', 'auxiliary']),
            'fuel_consumption.*' => new ArrayKeys(['greater', 'lower']),
            'fuel_consumption.*.*' => 'numeric',
            'date_from' => 'date|date_format:Y-m-d',
            'date_to' => 'date|date_format:Y-m-d|after_or_equal:date_from',
        ], $this->filterMessages);

        $results = $this->filterReports($request);

        if ($request->has('format')) {
            if ($request->format == 'csv') {
                return $this->exportCsv($results);
            }
        }

        // Custom Resource that adds Vessel imo and email.
        return ReportResource::collection($results);

    }

    /**
     * Display the specified resource.
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id) {
        return new ReportResource(Report::findOrFail($id));
    }

}
