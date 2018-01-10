<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\Resource;

class ReportResource extends Resource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request
     * @return array
     */
    public function toArray($request)
    {

        return [
            'id' => $this->id,
            'conditionType' => $this->conditionType,
            'meHours' => $this->meHours,
            'meCons' => $this->meCons,
            'auxHours' => $this->auxHours,
            'auxCons' => $this->auxCons,
            'observedDistance' => $this->observedDistance,
            'created_on' => $this->created_on,
            'vessel' => [
                'imo' => $this->vessel->imo,
                'email' => $this->vessel->email
            ]
        ];
    }
}
