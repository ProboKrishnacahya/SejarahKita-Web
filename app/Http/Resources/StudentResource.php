<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class StudentResource extends JsonResource
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
            'id' => $this->id,
            'email' => $this->email,
            'password' => $this->password,
            'username' => $this->username,
            'name' => $this->name,
            'school' => $this->school,
            'city' => $this->city,
            'birthyear' => $this->birthyear,
            'role' => $this->role,
            'is_login' => $this->is_login,
            'is_active' => $this->is_active
        ];
    }
}
