<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Open Properties Finder</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/style.css">
   <link
    href="https://cdn.jsdelivr.net/npm/remixicon@4.3.0/fonts/remixicon.css"
    rel="stylesheet" />

   <style>
     .app-form {
      max-width: 100%;
    }

    .app-form-label {
      font-size: 14px;
      margin-bottom: 6px;
      display: block;
    }

    .app-input {
      padding: 14px 10px;
      width: 100%;
      border: 1px solid #eee;
      border-radius: 4px;
      transition: 0.3s ease;
    }

    .app-input:focus{
      border-color: #0069ff;
    }

    .app-form-group {
      margin: 16px 0;
    }
    
    .app-box-wrap{
      display: flex;
      justify-content: center;
    }

    .app-box{
      width:60%;
      /* background-color: #fff; */
      
    }

    .theme-btn {
      color: #fff;
      background-color: var(--main-color);
      border-radius: 6px;
      padding: 10px 20px;
      font-size: 15px;
      transition: 0.35s ease;
      display: inline-block;
    }

    .theme-btn-alt {
      background-color: #eee;
      color: var(--black)
    }

    .theme-btn-alt:hover {
      background-color: #dddada !important;
    }

    .theme-btn-submit {
      min-width: 200px;
    }

    .theme-btn:hover {
      background-color: #378aff;
    }

    .mg-x {
      margin: 0 8px !important;
    }

    .mg-y-16 {
      margin: 16px 0 !important;
    }

    .app-form-group {
      margin: 16px 0;
    }

    .flx {
      display: flex;
    }

    .flx-ctr {
      align-items: center;
    }

    .flx-between{
      justify-content: space-between;
    }

    .alert .inner {
      display: block;
      padding: 6px;
      margin: 6px;
      border-radius: 3px;
      border: 1px solid rgb(180, 180, 180);
      background-color: rgb(212, 212, 212);
      font-size: 18px;
    }

    .alert .close {
      float: right;
      margin: 3px 12px 0px 0px;
      cursor: pointer;
    }

    .alert .inner,
    .alert .close {
      color: rgb(88, 88, 88);
    }

    .alert input {
      display: none;
    }

    .alert input:checked~* {
      animation-name: dismiss, hide;
      animation-duration: 300ms;
      animation-iteration-count: 1;
      animation-timing-function: ease;
      animation-fill-mode: forwards;
      animation-delay: 0s, 100ms;
    }

    .alert.error .inner {
      border: 1px solid rgb(238, 211, 215);
      background-color: rgb(242, 222, 222);
    }

    .alert.error .inner,
    .alert.error .close {
      color: rgb(185, 74, 72);
    }

    .alert.success .inner {
      border: 1px solid rgb(214, 233, 198);
      background-color: rgb(223, 240, 216);
    }

    .alert.success .inner,
    .alert.success .close {
      color: rgb(70, 136, 71);
    }

    .alert.info .inner {
      border: 1px solid rgb(188, 232, 241);
      background-color: rgb(217, 237, 247);
    }

    .alert.info .inner,
    .alert.info .close {
      color: rgb(58, 135, 173);
    }

    .alert.warning .inner {
      border: 1px solid rgb(251, 238, 213);
      background-color: rgb(252, 248, 227);
    }

    .alert.warning .inner,
    .alert.warning .close {
      color: rgb(192, 152, 83);
    }

    .d-none {
      display: none;
    }

    @keyframes dismiss {
      0% {
        opacity: 1;
      }

      90%,
      100% {
        opacity: 0;
        font-size: 0.1px;
        transform: scale(0);
      }
    }

    @keyframes hide {
      100% {
        height: 0px;
        width: 0px;
        overflow: hidden;
        margin: 0px;
        padding: 0px;
        border: 0px;
      }
    }

    .error{
      color:red;
      font-size: 12px;
      margin:6px;
    }

    .is-required{
      color:red;
      font-size: 12px;
    }


   </style>

</head>