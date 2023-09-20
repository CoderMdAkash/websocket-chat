{{-- <!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>WebSockets Test</title>

        @vite('resources/js/app.js')
    </head>

    <body>
        <button id="submit-button" type="button">
            Press Me!
        </button>
    </body>
</html> --}}

<div class="container-fluid main">
    <div class="text-center main-text">

        <div class="c2a-btn footer-c2a-btn">
        <div class="btn-group btn-group-lg" role="group" aria-label="Call to action" style="text-align: center">
            <a type="button" class="btn btn-default btn-lg" href="/dashboard">Click Me For Chat</a>
            &nbsp;
            <a type="button" class="btn btn-default btn-lg" href="/register">Register</a>
        </div>
        </div>
    </div>
</div>

<style>
    body,
html {
  height: 100%;
}
.main {
  width: 100%;
  height: 100%;
  position: relative;
  color: #111e6c;
  /* Try using a background image
  background: url('images/frontPageBackground.jpg');*/
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  transition: all 1s ease;
  padding-top: 70px;
}
.main:before {
  bottom: 0;
  left: 0;
  right: 0;
  top: 0;
  position: absolute;
  content: "";
  width: 100%;
  height: 100%;
  /*background: #111e6c;*/
  opacity: 0.2;
  filter: alpha(opacity=90);
}
.main-text {
  top: 20%;
  left: auto;
  right: auto;
  position: relative;
  color: #111e6c;
}
.btn-circle,
#to-top {
  border-radius: 50%;
  background: #111e6c;
  padding: 6px;
  font-size: 14px;
  /* border-radius: 50%; */
  box-shadow: 0 2px 5px 0 rgba(0, 0, 0, 0.16), 0 2px 10px 0 rgba(0, 0, 0, 0.12);
  color: #fff;
  text-align: center;
  font-weight: 600;
  text-transform: uppercase;
}

.c2a-btn {
  margin: 48px auto 0;
  margin: 4.8rem auto 0;
}

.btn-default {
  color: #fff;
  background-color: #111e6c;
  border-color: #111e6c;
  transition: all 1s ease;
}

.btn-group-lg > .btn, .btn-lg {
    padding: 18px 28px;
    font-size: 18px;
    line-height: 1.3333333;
    border-radius: 50px;
    font-family: cursive;
}

.btn-group .btn-or {
  top: 50%;
  left: 50%;
  position: absolute;
  -webkit-transform: translate(-50%, -50%);
  -ms-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  z-index: 99;
  box-shadow: 0;
  border: 2px solid #fff;
}
</style>