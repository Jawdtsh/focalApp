<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class FreelancerResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            "id" => $this->id,
            "user_id" => [
                "id" => $this->user_id,
                "full_name" => $this->full_name,
                "email" => $this->email,
                "status" => $this->status,
                "role_name" => $this->role_name,
            ],
        ];
    }
}