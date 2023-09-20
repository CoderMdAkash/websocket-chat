// Echo.channel('public-channel')
// .listen('.button.clicked', (e) => {
//     alert(e);
//     console.log(e);
// });

Echo.join('status-update')
  .here((users) => {
      $.each(users, function( index, user ) {
        $(".offline-status-"+user.id).removeClass('offline');
        $(".offline-text-"+user.id).text('online');
      });
  })
  .joining((user) => {
    $(".offline-status-"+user.id).removeClass('offline');
    $(".offline-text-"+user.id).text('online');
  })
  .leaving((user) => {
      $(".offline-status-"+user.id).addClass('offline');
      $(".offline-text-"+user.id).text('offline');
  })
  .listen('UserStatusEvent', (data) => {
    userMgsShow1(data.data.user_id);
  })
  .error((error) => {
      console.error(error);
  });




// const mgs = "This is my Message";
// if (mgs !== null) {
//     const btn = document.querySelector('#submit-button');
//     btn.addEventListener("click", () => {
//       axios.post("/button/clicked", {mgs:mgs})
//         .then((response) => {
//           console.log(response);
//         }).catch(error => {
//           console.log(error);
//           alert("Something Invalidate!");
//        });
//     });
// }
 
