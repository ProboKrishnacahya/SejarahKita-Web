<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class QuestionResource extends JsonResource
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
            'id_question' => $this->id_question,
            'id_level' => $this->id_level,
            'pertanyaan_kalimat' => $this->pertanyaan_kalimat,
            'pertanyaan_path_gambar' => $this->pertanyaan_path_gambar,
            'kunci_jawaban' => $this->kunci_jawaban
        ];
    }
}
