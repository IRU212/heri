<?php

namespace App\Http\Resources\User\Auth;

use App\Enums\Api\Status;
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
            'status' => Status::SUCCESS->value,
            'link' => [
                'origin_url' => $request->getUriForPath(''),
                'url' => $request->fullUrl(),
            ]
        ];
    }
}
