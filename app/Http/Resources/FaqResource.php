<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class FaqResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        // return parent::toArray($request);
        return [
            'id'=>$this->id,
            'question_ar'=>$this->question_ar,
            'question_en'=>$this->question_en,
            'answer_ar'=>$this->answer_ar,
            'answer_en'=>$this->answer_en,
        ];
    }
}
