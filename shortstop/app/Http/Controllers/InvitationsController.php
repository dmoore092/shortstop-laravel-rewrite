<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreInvitationRequest;
use App\Invitation;
use Illuminate\Http\Request;

class InvitationsController extends Controller
{
    public function store(StoreInvitationRequest $request)
    {
        $invitation = new Invitation($request->all());
        $invitation->generateInvitationToken();
        $invitation->save();

        return redirect()->route('requestInvitation')
            ->with('success', 'Invitation to register successfully requested. Please wait for registration link.');
    }
}
