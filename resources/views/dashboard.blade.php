<!DOCTYPE html>
<html>
<head>
    <title>Chat App</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/malihu-custom-scrollbar-plugin/3.1.5/jquery.mCustomScrollbar.min.js"></script>
    <!--Coded With Love By Mutiullah Samim-->

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    @vite('resources/js/app.js')

    <style>
        body,html{
            height: 100%;
            margin: 0;
            background: #7F7FD5;
        background: -webkit-linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
            background: linear-gradient(to right, #91EAE4, #86A8E7, #7F7FD5);
        }
    
        .chat{
            margin-top: auto;
            margin-bottom: auto;
        }
        .card{
            height: 500px;
            border-radius: 15px !important;
            background-color: rgba(0,0,0,0.4) !important;
        }
        .contacts_body{
            padding:  0.75rem 0 !important;
            overflow-y: auto;
            white-space: nowrap;
        }
        .msg_card_body{
            overflow-y: auto;
        }
        .card-header{
            border-radius: 15px 15px 0 0 !important;
            border-bottom: 0 !important;
        }
        .card-footer{
            border-radius: 0 0 15px 15px !important;
                border-top: 0 !important;
        }
        .container{
            align-content: center;
        }
        .search{
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color:white !important;
        }
        .search:focus{
            box-shadow:none !important;
        outline:0px !important;
        }
        .type_msg{
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color:white !important;
            height: 60px !important;
            overflow-y: auto;
        }
            .type_msg:focus{
            box-shadow:none !important;
        outline:0px !important;
        }
        .attach_btn{
            border-radius: 15px 0 0 15px !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color: white !important;
            cursor: pointer;
        }
        .send_btn{
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color: white !important;
            cursor: pointer;
        }
        .search_btn{
            border-radius: 0 15px 15px 0 !important;
            background-color: rgba(0,0,0,0.3) !important;
            border:0 !important;
            color: white !important;
            cursor: pointer;
        }
        .contacts{
            list-style: none;
            padding: 0;
        }
        .contacts li{
            width: 100% !important;
            padding: 5px 10px;
            margin-bottom: 15px !important;
        }
        .active{
            background-color: rgba(0,0,0,0.3);
        }
        .user_img{
            height: 70px;
            width: 70px;
            border:1.5px solid #f5f6fa;
        
        }
        .user_img_msg{
            height: 40px;
            width: 40px;
            border:1.5px solid #f5f6fa;
        
        }
        .img_cont{
                position: relative;
                height: 70px;
                width: 70px;
        }
        .img_cont_msg{
                height: 40px;
                width: 40px;
        }
        .online_icon{
            position: absolute;
            height: 15px;
            width:15px;
            background-color: #4cd137;
            border-radius: 50%;
            bottom: 0.2em;
            right: 0.4em;
            border:1.5px solid white;
        }
        .offline{
            background-color: #c23616 !important;
        }
        .user_info{
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 15px;
        }
        .user_info span{
            font-size: 20px;
            color: white;
        }
        .user_info p{
        font-size: 10px;
        color: rgba(255,255,255,0.6);
        }
        .video_cam{
            margin-left: 50px;
            margin-top: 5px;
        }
        .video_cam span{
            color: white;
            font-size: 20px;
            cursor: pointer;
            margin-right: 20px;
        }
        .msg_cotainer{
            margin-top: auto;
            margin-bottom: auto;
            margin-left: 10px;
            border-radius: 25px;
            background-color: #82ccdd;
            padding: 10px;
            position: relative;
            min-width: 68px
        }
        .msg_cotainer_send{
            margin-top: auto;
            margin-bottom: auto;
            margin-right: 10px;
            border-radius: 25px;
            background-color: #78e08f;
            padding: 10px;
            position: relative;
        }
        .msg_time{
            position: absolute;
            left: 0;
            bottom: -15px;
            color: rgba(255,255,255,0.5);
            font-size: 10px;
        }
        .msg_time_send{
            position: absolute;
            right:0;
            bottom: -15px;
            color: rgba(255,255,255,0.5);
            font-size: 10px;
        }
        .msg_head{
            position: relative;
        }
        #action_menu_btn{
            position: absolute;
            right: 10px;
            top: 10px;
            color: white;
            cursor: pointer;
            font-size: 20px;
        }
        .action_menu{
            z-index: 1;
            position: absolute;
            padding: 15px 0;
            background-color: rgba(0,0,0,0.5);
            color: white;
            border-radius: 15px;
            top: 30px;
            right: 15px;
            display: none;
        }
        .action_menu ul{
            list-style: none;
            padding: 0;
        margin: 0;
        }
        .action_menu ul li{
            width: 100%;
            padding: 10px 15px;
            margin-bottom: 5px;
        }
        .action_menu ul li i{
            padding-right: 10px;
    
        }
        .action_menu ul li:hover{
            cursor: pointer;
            background-color: rgba(0,0,0,0.2);
        }
        @media(max-width: 576px){
        .contacts_card{
            margin-bottom: 15px !important;
        }
        }
    
        /* spinner  */
        .loader-demo-box {
        border-radius: 0.25rem !important;
        }
    
        .loader-demo-box {
        width: 100%;
        height: 200px;
        }
    
        .jumping-dots-loader {
        width: 100px;
        height: 100px;
        border-radius: 100%;
        position: relative;
        margin: 0 auto;
        }
    
        .jumping-dots-loader span {
        display: inline-block;
        width: 20px;
        height: 20px;
        border-radius: 100%;
        background-color: rgba(241, 83, 110, 0.8);
        margin: 35px 5px;
        }
    
        .jumping-dots-loader span:nth-child(1) {
        animation: bounce 1s ease-in-out infinite;
        }
    
        .jumping-dots-loader span:nth-child(2) {
        animation: bounce 1s ease-in-out 0.33s infinite;
        }
    
        .jumping-dots-loader span:nth-child(3) {
        animation: bounce 1s ease-in-out 0.66s infinite;
        }
    
        @keyframes bounce {
        0%,
        75%,
        100% {
            -webkit-transform: translateY(0);
            -ms-transform: translateY(0);
            -o-transform: translateY(0);
            transform: translateY(0);
        }
    
        25% {
            -webkit-transform: translateY(-20px);
            -ms-transform: translateY(-20px);
            -o-transform: translateY(-20px);
            transform: translateY(-20px);
        }
        }
    </style>

</head>
<body>

    <div class="container-fluid h-100">
        <div class="row justify-content-center h-100">
            <div class="col-md-4 col-xl-3 chat"><div class="card mb-sm-3 mb-md-0 contacts_card">
                <div class="card-header">
                    <div class="input-group">
                        <form action="{{route('logout')}}" method="POST">
                            @csrf
                            <button type="submit" class="btn btn-info rounded btn-sm justify-content-end text-light" style="float: right">Logout</button>
                        </form>
                        &nbsp;&nbsp;&nbsp;<h5>{{Auth::user()->name}}</h5>
                    </div>
                </div>
                <div class="card-header">
                    <div class="input-group">
                        <input type="text" placeholder="Search..." name="" class="form-control search">
                        <div class="input-group-prepend">
                            <span class="input-group-text search_btn"><i class="fas fa-search"></i></span>
                        </div>
                    </div>
                </div>
                <div class="card-body contacts_body">
                    <ul class="contacts">
                        @foreach ($users as $user)
                            <li style="cursor: pointer" class="chat-user-select" userId={{$user->id}} userImg="{{$user->image}}" userName="{{$user->name}}">
                                <div class="d-flex bd-highlight">
                                    <div class="img_cont">
                                        @if($user->image)
                                            <img src="{{$user->image}}" class="rounded-circle user_img">
                                        @else
                                            <img src="https://i.pinimg.com/564x/5d/69/42/5d6942c6dff12bd3f960eb30c5fdd0f9.jpg" class="rounded-circle user_img">
                                        @endif
                                        <span class="online_icon offline offline-status-{{$user->id}}"></span>
                                        {{-- <span class="online_icon offline"></span> --}}
                                    </div>
                                    <div class="user_info">
                                        <span>{{$user->name}}</span>
                                        <p class="offline-text-{{$user->id}}">Offline</p>
                                    </div>
                                </div>
                            </li>
                        @endforeach
                        
                    </ul>
                </div>
                <div class="card-footer"></div>
            </div></div>

            <div class="col-md-8 col-xl-6 chat" id="single-chat-view" style="display: none">
                <div class="card">
                    <div class="card-header msg_head">
                        <div class="d-flex bd-highlight">
                            <div class="img_cont">
                                <img id="chat-user-img" class="rounded-circle user_img">
                                <span class="online_icon"></span>
                            </div>
                            <div class="user_info">
                                <span id="chat-user-name"></span>
                                <p>online</p>
                            </div>
                            <div class="video_cam">
                                <span><i class="fas fa-video"></i></span>
                                <span><i class="fas fa-phone"></i></span>
                            </div>
                        </div>
                        <span id="action_menu_btn"><i class="fas fa-ellipsis-v"></i></span>
                        {{-- <div class="action_menu">
                            <ul>
                                <li><i class="fas fa-user-circle"></i> View profile</li>
                                <li><i class="fas fa-users"></i> Add to close friends</li>
                                <li><i class="fas fa-plus"></i> Add to group</li>
                                <li><i class="fas fa-ban"></i> Block</li>
                            </ul>
                        </div> --}}
                    </div>
                    <div class="card-body msg_card_body" id="user-chat-body">

                        

                    </div>

                    <div class="card-footer">
                        <form action="">
                            <div class="input-group">
                                <div class="input-group-append">
                                    <span class="input-group-text attach_btn"><i class="fas fa-paperclip"></i></span>
                                </div>
                                <textarea id="chat_input" name="chat_input" class="form-control type_msg" placeholder="Type your message..."></textarea>
                                <div class="input-group-append">
                                    <button id="send_btn" class="input-group-text send_btn"><i class="fas fa-location-arrow"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>

            <div class="col-md-8 col-xl-6 chat" id="welcome-chat-view">
                <div class="card">
                    <h1 class="text-center pt-5">Click User To Start Chat</h1>
                </div>
            </div>

        </div>
    </div>

    <script src="https://js.pusher.com/8.0.1/pusher.min.js"></script>


<script>

var sender_id = @json(auth()->user()->id);
var reciever_id;

$(document).ready(function(){

    $('#send_btn').click(function(e){
        e.preventDefault();
        let mgs = $("#chat_input").val();
        if(mgs != ""){

            $.ajax({
                url: "{{url('button/clicked')}}",
                method: "POST",
                data: {
                    _token: "{{ csrf_token() }}",
                    mgs: mgs,
                    sender_id: sender_id,
                    reciever_id: reciever_id,
                },
                success:function(e){
                    console.log(e);
                    userMgsShow(sender_id);
                },
                error:function(e){
                    console.log(e);
                    alert("Validation Error!");
                }
            });

        }else{
            alert("Please Enter You Message");
        }
    });

    $('.chat-user-select').click(function(){
        reciever_id = $(this).attr('userId');
        
        $('.chat-user-select').removeClass('active');
        $(this).addClass('active');
        $('#welcome-chat-view').hide();
        let user_id = $(this).attr('userId');
        let name = $(this).attr('userName');
        let img = $(this).attr('userImg');
        $("#chat-user-name").text(name);
        if(img){
            chatImg = img;
        }else{
            chatImg = "https://i.pinimg.com/564x/5d/69/42/5d6942c6dff12bd3f960eb30c5fdd0f9.jpg";
        }
        $("#chat-user-img").attr('src', chatImg);
        $('#single-chat-view').show();

        $("#user-chat-body").html('<div class="jumping-dots-loader"> <span></span> <span></span> <span></span> </div><div class="moving-gradient"></div>');

        // setTimeout(() => {
            userMgsShow(sender_id);
        // }, 1000);

    });


});

function userMgsShow(sender_id){
    if(sender_id){
        $.ajax({
            url: "{{url('user-message-show')}}/"+sender_id,
            method: "POST",
            data: {_token: "{{ csrf_token() }}",},
            dataType: "html",
            success:function(data){
                if(data){
                    $("#user-chat-body").html(data);
                    $("#user-chat-body").scrollTop($("#user-chat-body")[0].scrollHeight);
                }else{
                    $("#user-chat-body").html('<div class="jumping-dots-loader"><h4>No Data!</h4></div>');
                }
            },
            error:function(e){
                console.log(e);
                alert("Validation Error!");
            }
        });
    }else{
        alert("Validate Error!");
    }
}

function userMgsShow1(sender_id1){

    if(sender_id1 == reciever_id){
        userMgsShow(sender_id);
    }
}

</script>

</body>
</html>

