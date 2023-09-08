<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReplyToMessage;

class ReplyController extends Controller
{
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $reply = ReplyToMessage::find($id);

        $reply->update([
            'replay_message' => $request->reply ?? '',
        ]);

        return redirect(route('messageIndex'));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $reply = ReplyToMessage::find($id);
        $result = 'success';
        
        if ($reply) {
            $reply->delete();
        } else {
            $result = 'fail';
        }

        return $result;
    }
}
