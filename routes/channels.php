<?php

use Illuminate\Support\Facades\Broadcast;
use App\Models\Chat;
use App\Models\User;
use App\Events\MessageSent;
/*
|--------------------------------------------------------------------------
| Broadcast Channels
|--------------------------------------------------------------------------
|
| Here you may register all of the event broadcasting channels that your
| application supports. The given channel authorization callbacks are
| used to check if an authenticated user can listen to the channel.
|
*/

Broadcast::channel('App.Models.User.{id}', function ($user, $id) {
    return (int) $user->id === (int) $id;
});


// Broadcast::channel(
//     'chats.{chat}',
//     fn (User $user, Chat $chat): bool => $chat->isMember($user)
// );

// MessageSent::dispatch(chat: $chat, chatMessage: $chatMessage);

// Broadcast::channel('public-channel', function($mgs){
//     return $mgs;
// });

Broadcast::channel('status-update', function($user){
    return $user;
});

