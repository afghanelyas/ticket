<?php

namespace App\Http\Controllers;

use App\Http\Resources\TicketResource;
use App\Models\Ticket;

class TicketController extends ApiController
{
    public function index()
    {
        if ($this->include('author')) {
            return TicketResource::collection(Ticket::with('user')->paginate());

        }

        return TicketResource::collection(Ticket::paginate());
    }

    public function show(Ticket $ticket)
    {
        if ($this->include('author')) {
            return new TicketResource($ticket->load('user'));

        }

        return new TicketResource($ticket);
    }

    public function update() {}

    public function store() {}

    public function delete() {}
}
