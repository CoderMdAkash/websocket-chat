@foreach ($messages as $mgs)
    @if($user_id == $mgs->sender_id)    
        <div class="d-flex justify-content-end mb-4">
            <div class="msg_cotainer_send">
                {{$mgs->message}}
                <span class="msg_time_send">{{ $mgs->updated_at->diffForHumans() }}</span>
            </div>
            <div class="img_cont_msg">
                <img src="{{ getUserIdByImage($user_id) }}" class="rounded-circle user_img_msg">
            </div>
        </div>
    @else
        <div class="d-flex justify-content-start mb-4">
            <div class="img_cont_msg">
                <img src="{{ getUserIdByImage($user_id) }}" class="rounded-circle user_img_msg">
            </div>
            <div class="msg_cotainer">
                {{$mgs->message}}
                <span class="msg_time">{{ $mgs->updated_at->diffForHumans() }}</span>
            </div>
        </div>
    @endif

@endforeach