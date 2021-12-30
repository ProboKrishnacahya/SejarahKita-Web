<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class LeaderboardResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return parent::toArray($request);

        return [
            'id_leaderboard' => $this->id_leaderboard,
            'id_student' => $this->id_student,
            'id_level' => $this->id_level,
            'ranked_point' => $this->ranked_point
        ];
    }
}
