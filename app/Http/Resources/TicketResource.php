<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TicketResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'type' => 'Ticket',
            'id' => $this->id,
            'attributes' => [
                'title' => $this->title,
                'description' => $this->description,
                'status' => $this->status,
                'createAt' => $this->created_at,
                'updateAt' => $this->updated_at,
            ],
            'relationships' => [
                'author' => [
                    'type' => 'user',
                    'id' => $this->user_id,
                ],
                'links' => [
                    ['self' => 'Todo'],
                ],
            ],
            'links' => [
                'self' => route('tickets.show', ['ticket' => $this->id]),
            ],

        ];
    }
}
