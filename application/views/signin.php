<head>
<style>
        html {
        background-color: #56baed;
        }

        body {
        height: 100vh;
        font-size:12px
        }

        a {
        color: #92badd;
        display:inline-block;
        text-decoration: none;
        font-weight: 400;
        }

        h2 {
        text-align: center;
        font-size: 16px;
        font-weight: 600;
        text-transform: uppercase;
        display:inline-block;
        margin: 40px 8px 10px 8px; 
        color: #cccccc;
        }



        /* STRUCTURE */

        .wrapper {
        display: flex;
        align-items: center;
        flex-direction: column; 
        justify-content: center;
        width: 100%;
        min-height: 100%;
        padding: 20px;
        }

        #formContent {
        -webkit-border-radius: 0;
        border-radius: 0;
        background: #fff;
        padding: 30px;
        width: 90%;
        max-width: 800px;
        position: relative;
        padding: 0px;
        border-top: 1px solid lightgrey;
        border-bottom: 1px solid lightgrey;
        text-align: center;
        }

        #formFooter {
            background-color: #fff;
            border-top: 1px solid #dce8f1;
            padding: 25px;
            text-align: center;
            
        }



        /* TABS */

        h2.inactive {
        color: #cccccc;
        }

        h2.active {
        color: #0d0d0d;
        border-bottom: 2px solid #5fbae9;
        }



        /* FORM TYPOGRAPHY*/

        input[type=button], input[type=submit], input[type=reset] {
            background-color: white;
            border: none;
            color: lightgrey;
            padding: 15px 80px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            text-transform: uppercase;
            font-size: 13px;
            margin: 5px 20px 40px 20px;
            -webkit-transition: all 0.3s ease-in-out;
            -moz-transition: all 0.3s ease-in-out;
            -ms-transition: all 0.3s ease-in-out;
            -o-transition: all 0.3s ease-in-out;
            transition: all 0.3s ease-in-out;
            border: 1px solid darkgrey;
        }

        input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
            color: darkgrey;
        }

        input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
            -moz-transform: scale(0.95);
            -webkit-transform: scale(0.95);
            -o-transform: scale(0.95);
            -ms-transform: scale(0.95);
            transform: scale(0.95);
        }

        input[type=text], input[type=date]{
            background-color: #f6f6f6;
            border: none;
            color: #0d0d0d;
            padding: 15px 25px;
            text-align: left;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            margin: 5px;
            width: 85%;
            border: 2px solid #f6f6f6;
            -webkit-transition: all 0.5s ease-in-out;
            -moz-transition: all 0.5s ease-in-out;
            -ms-transition: all 0.5s ease-in-out;
            -o-transition: all 0.5s ease-in-out;
            transition: all 0.5s ease-in-out;
            
        }

        input[type=text]:focus {
            background-color: #fff;
            border-bottom: 2px solid #5fbae9;
        }

        input[type=text]:placeholder {
            color: #cccccc;
        }



        /* ANIMATIONS */

        /* Simple CSS3 Fade-in-down Animation */
        .fadeInDown {
        -webkit-animation-name: fadeInDown;
        animation-name: fadeInDown;
        -webkit-animation-duration: 1s;
        animation-duration: 1s;
        -webkit-animation-fill-mode: both;
        animation-fill-mode: both;
        }

        @-webkit-keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
        }

        @keyframes fadeInDown {
        0% {
            opacity: 0;
            -webkit-transform: translate3d(0, -100%, 0);
            transform: translate3d(0, -100%, 0);
        }
        100% {
            opacity: 1;
            -webkit-transform: none;
            transform: none;
        }
        }

        /* Simple CSS3 Fade-in Animation */
        @-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
        @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }

        .fadeIn {
        opacity:0;
        -webkit-animation:fadeIn ease-in 1;
        -moz-animation:fadeIn ease-in 1;
        animation:fadeIn ease-in 1;

        -webkit-animation-fill-mode:forwards;
        -moz-animation-fill-mode:forwards;
        animation-fill-mode:forwards;

        -webkit-animation-duration:1s;
        -moz-animation-duration:1s;
        animation-duration:1s;
        }

        .fadeIn.first {
        -webkit-animation-delay: 0.4s;
        -moz-animation-delay: 0.4s;
        animation-delay: 0.4s;
        }

        .fadeIn.second {
        -webkit-animation-delay: 0.6s;
        -moz-animation-delay: 0.6s;
        animation-delay: 0.6s;
        }

        .fadeIn.third {
        -webkit-animation-delay: 0.8s;
        -moz-animation-delay: 0.8s;
        animation-delay: 0.8s;
        }

        .fadeIn.fourth {
        -webkit-animation-delay: 1s;
        -moz-animation-delay: 1s;
        animation-delay: 1s;
        }

        /* Simple CSS3 Fade-in Animation */
        .underlineHover:after {
        display: block;
        left: 0;
        bottom: -10px;
        width: 0;
        height: 2px;
        background-color: #56baed;
        content: "";
        transition: width 0.2s;
        }

        .underlineHover:hover {
        color: #0d0d0d;
        }

        .underlineHover:hover:after{
            width: 100%;
        }



        /* OTHERS */

        *:focus {
            outline: none;
        } 

        #icon {
        width:60%;
        }
        .sign-up-text{

            color:#cccccc;
        }
        h3{
            color:darkgrey;
            padding:12px;
        }
        .text-small{
            font-size:12px;
        }
    </style>
</head>
<body>
    
    <div class="wrapper fadeInDown">
    <center>
        <img style="height:100px;width:250px;"src="<?=base_url('assets/icon/fatlani.png');?>"></img>
    </center>
    <div id="formContent">
        <!-- Tabs Titles -->

        <!-- Icon -->
        <div class="fadeIn first">
            <h3>Sign in</h3>
        </div>

        <!-- Login Form -->
        <form>
        <input type="text" id="login" class="fadeIn second text-small" name="login" placeholder="Email">
        <input type="text" id="password" class="fadeIn third text-small" name="login" placeholder="password">
        <input type="submit" class="fadeIn fourth" value="Log In"></br>
        <p class='sign-up-text'>Haven't account ? <a class="underlineHover" href="<?php echo site_url().'/pages/signup'; ?>"> Sign up</a></p>
        </form>

        <!-- Remind Passowrd -->
        <div id="formFooter">
        <a class="underlineHover" href="#">Forgot Password?</a>
        </div>

    </div>
    </div>
</body>