<?php
namespace App\Http\Controllers;

use App\Events\ButtonClicked;
use App\Events\UserStatusEvent;
use Illuminate\Http\Request;
use Auth;
use App\Models\Chat;

final class ButtonClickedController extends Controller
{
    public function index(Request $request)
    {
        if(Auth::check()){
            $user = Auth::user();
            Chat::create([
                'sender_id' => $request->sender_id,
                'reciever_id' => $request->reciever_id,
                'message' => $request->mgs,
            ]);

            $data = [
                    'message' => $request->mgs,
                    'user_id' => $user->id,
                    'sender_id' => $request->sender_id,
                    'name' => $user->name,
                ];
            // event(new ButtonClicked($data));
            event(new UserStatusEvent($data));
    
            return response()->json(['success' => true, 'data' => $data]);
        }else{
            return response()->json(['success' => false]);
        }
    }

    public function userMgsShow($sender_id, $reciever_id){

        $data['user_id'] = Auth::id(); 
        $senderId = intval($sender_id);
        $recieverId = intval($reciever_id);
        

        $data['messages'] = Chat::where(function($query) use ($recieverId, $senderId){
                $query->where('sender_id', '=', $senderId)
                        ->orWhere('sender_id', '=', $recieverId);
            })
            ->where(function($query) use ($recieverId, $senderId){
                $query->where('reciever_id', '=', $senderId)
                        ->orWhere('reciever_id', '=', $recieverId);
            })
            ->limit(30)
            ->get();

        return view('user_mgs_show', $data);
    }

}