<?php
use App\Models\User;

function getUserIdByImage($id){
    $userImage = User::find($id)->image;
    if($userImage){
        return $userImage;
    }else{
        return "https://static.turbosquid.com/Preview/001292/481/WV/_D.jpg";
    }
}