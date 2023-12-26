<?php

namespace App\Http\Resources\User\Auth;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RegisterStoreResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'status' => 1,
            'link' => [
                'origin_url' => $request->getUriForPath(''),
                'url' => $request->fullUrl(),
            ]
        ];
    }
}
