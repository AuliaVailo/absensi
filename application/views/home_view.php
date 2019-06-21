<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>S.A.O - Kantor Pos Tuban</title>
        
        <style type="text/css">

	::selection { background-color: #E13300; color: white; }
	::-moz-selection { background-color: #E13300; color: white; }

	body {
		background-color: #fff;
		margin: 40px;
		font: 13px/20px normal Helvetica, Arial, sans-serif;
		color: #4F5155;
	}

	a {
		color: #003399;
		background-color: transparent;
		font-weight: normal;
	}

	h1 {
		color: #444;
		background-color: transparent;
		border-bottom: 1px solid #D0D0D0;
		font-size: 19px;
		font-weight: normal;
		margin: 0 0 14px 0;
		padding: 14px 15px 10px 15px;
	}

	code {
		font-family: Consolas, Monaco, Courier New, Courier, monospace;
		font-size: 12px;
		background-color: #f9f9f9;
		border: 1px solid #D0D0D0;
		color: #002166;
		display: block;
		margin: 14px 0 14px 0;
		padding: 12px 10px 12px 10px;
	}

	#body {
		margin: 0 15px 0 15px;
	}

	p.footer {
		text-align: center;
		font-size: 11px;
		border-top: 1px solid #D0D0D0;
		line-height: 32px;
		padding: 0 10px 10px 10px;
		margin: 20px 0 0 0;
	}

	#container {
		margin: 10px;
		border: 1px solid #D0D0D0;
		box-shadow: 0 0 8px #D0D0D0;
	}
        
        #info{
            float: left;
        }
        
        #absensi{
            float: right;
        }
        
        /*-------------------------
	The clocks
        --------------------------*/


        #clock{
                width:450px;
                padding:10px;
                margin:20px auto 10px;
                position:relative;
        }

        #clock:after{
                content:'';
                position:absolute;
                width:400px;
                height:20px;
                border-radius:100%;
                left:50%;
                margin-left:-200px;
                bottom:2px;
                z-index:-1;
        }


        #clock .display{
                text-align:center;
                padding: 40px 20px 20px;
                border-radius:6px;
                position:relative;
                height: 54px;
        }
        
        /*-------------------------
	Light color theme
        --------------------------*/


        #clock.light{
                background-color:#f3f3f3;
                color:#272e38;
        }

        #clock.light:after{
                box-shadow:0 4px 10px rgba(0,0,0,0.15);
        }

        #clock.light .digits div span{
                background-color:#272e38;
                border-color:#272e38;	
        }

        #clock.light .digits div.dots:before,
        #clock.light .digits div.dots:after{
                background-color:#272e38;
        }

        #clock.light .alarm{
                background:<?=base_url('assets/digital-clock/img/alarm_light.jpg');?>;
        }

        #clock.light .display{
                background-color:#dddddd;
                box-shadow:0 1px 1px rgba(0,0,0,0.08) inset, 0 1px 1px #fafafa;
        }

        
        /*-------------------------
	The Digits
        --------------------------*/


        #clock .digits div{
                text-align:left;
                position:relative;
                width: 28px;
                height:50px;
                display:inline-block;
                margin:0 4px;
        }

        #clock .digits div span{
                opacity:0;
                position:absolute;

                -webkit-transition:0.25s;
                -moz-transition:0.25s;
                transition:0.25s;
        }

        #clock .digits div span:before,
        #clock .digits div span:after{
                content:'';
                position:absolute;
                width:0;
                height:0;
                border:5px solid transparent;
        }

        #clock .digits .d1{			height:5px;width:16px;top:0;left:6px;}
        #clock .digits .d1:before{	border-width:0 5px 5px 0;border-right-color:inherit;left:-5px;}
        #clock .digits .d1:after{	border-width:0 0 5px 5px;border-left-color:inherit;right:-5px;}

        #clock .digits .d2{			height:5px;width:16px;top:24px;left:6px;}
        #clock .digits .d2:before{	border-width:3px 4px 2px;border-right-color:inherit;left:-8px;}
        #clock .digits .d2:after{	border-width:3px 4px 2px;border-left-color:inherit;right:-8px;}

        #clock .digits .d3{			height:5px;width:16px;top:48px;left:6px;}
        #clock .digits .d3:before{	border-width:5px 5px 0 0;border-right-color:inherit;left:-5px;}
        #clock .digits .d3:after{	border-width:5px 0 0 5px;border-left-color:inherit;right:-5px;}

        #clock .digits .d4{			width:5px;height:14px;top:7px;left:0;}
        #clock .digits .d4:before{	border-width:0 5px 5px 0;border-bottom-color:inherit;top:-5px;}
        #clock .digits .d4:after{	border-width:0 0 5px 5px;border-left-color:inherit;bottom:-5px;}

        #clock .digits .d5{			width:5px;height:14px;top:7px;right:0;}
        #clock .digits .d5:before{	border-width:0 0 5px 5px;border-bottom-color:inherit;top:-5px;}
        #clock .digits .d5:after{	border-width:5px 0 0 5px;border-top-color:inherit;bottom:-5px;}

        #clock .digits .d6{			width:5px;height:14px;top:32px;left:0;}
        #clock .digits .d6:before{	border-width:0 5px 5px 0;border-bottom-color:inherit;top:-5px;}
        #clock .digits .d6:after{	border-width:0 0 5px 5px;border-left-color:inherit;bottom:-5px;}

        #clock .digits .d7{			width:5px;height:14px;top:32px;right:0;}
        #clock .digits .d7:before{	border-width:0 0 5px 5px;border-bottom-color:inherit;top:-5px;}
        #clock .digits .d7:after{	border-width:5px 0 0 5px;border-top-color:inherit;bottom:-5px;}


        /* 1 */

        #clock .digits div.one .d5,
        #clock .digits div.one .d7{
                opacity:1;
        }

        /* 2 */

        #clock .digits div.two .d1,
        #clock .digits div.two .d5,
        #clock .digits div.two .d2,
        #clock .digits div.two .d6,
        #clock .digits div.two .d3{
                opacity:1;
        }

        /* 3 */

        #clock .digits div.three .d1,
        #clock .digits div.three .d5,
        #clock .digits div.three .d2,
        #clock .digits div.three .d7,
        #clock .digits div.three .d3{
                opacity:1;
        }

        /* 4 */

        #clock .digits div.four .d5,
        #clock .digits div.four .d2,
        #clock .digits div.four .d4,
        #clock .digits div.four .d7{
                opacity:1;
        }

        /* 5 */

        #clock .digits div.five .d1,
        #clock .digits div.five .d2,
        #clock .digits div.five .d4,
        #clock .digits div.five .d3,
        #clock .digits div.five .d7{
                opacity:1;
        }

        /* 6 */

        #clock .digits div.six .d1,
        #clock .digits div.six .d2,
        #clock .digits div.six .d4,
        #clock .digits div.six .d3,
        #clock .digits div.six .d6,
        #clock .digits div.six .d7{
                opacity:1;
        }


        /* 7 */

        #clock .digits div.seven .d1,
        #clock .digits div.seven .d5,
        #clock .digits div.seven .d7{
                opacity:1;
        }

        /* 8 */

        #clock .digits div.eight .d1,
        #clock .digits div.eight .d2,
        #clock .digits div.eight .d3,
        #clock .digits div.eight .d4,
        #clock .digits div.eight .d5,
        #clock .digits div.eight .d6,
        #clock .digits div.eight .d7{
                opacity:1;
        }

        /* 9 */

        #clock .digits div.nine .d1,
        #clock .digits div.nine .d2,
        #clock .digits div.nine .d3,
        #clock .digits div.nine .d4,
        #clock .digits div.nine .d5,
        #clock .digits div.nine .d7{
                opacity:1;
        }

        /* 0 */

        #clock .digits div.zero .d1,
        #clock .digits div.zero .d3,
        #clock .digits div.zero .d4,
        #clock .digits div.zero .d5,
        #clock .digits div.zero .d6,
        #clock .digits div.zero .d7{
                opacity:1;
        }


        /* The dots */

        #clock .digits div.dots{
                width:5px;
        }

        #clock .digits div.dots:before,
        #clock .digits div.dots:after{
                width:5px;
                height:5px;
                content:'';
                position:absolute;
                left:0;
                top:14px;
        }

        #clock .digits div.dots:after{
                top:34px;
        }


        /*-------------------------
                The Alarm
        --------------------------*/


        #clock .alarm{
                width:16px;
                height:16px;
                bottom:20px;
                background:<?=base_url('assets/digital-clock/img/alarm_light.jpg');?>;
                position:absolute;
                opacity:0.2;
        }

        #clock .alarm.active{
                opacity:1;
        }


        /*-------------------------
                Weekdays
        --------------------------*/


        #clock .weekdays{
                font-size:12px;
                position:absolute;
                width:100%;
                top:10px;
                left:0;
                text-align:center;
        }


        #clock .weekdays span{
                opacity:0.2;
                padding:0 10px;
        }

        #clock .weekdays span.active{
                opacity:1;
        }


        /*-------------------------
                        AM/PM
        --------------------------*/


        #clock .ampm{
                position:absolute;
                bottom:20px;
                right:20px;
                font-size:12px;
        }

        
        </style>
       
    </head>
    <body>
    <center>
        <h1>S.A.O<small> beta</small><br/>
        <small>Sistem Absensi Online</small></h1>
    </center>
    
    <br/>
    <div id="body">
        <div id="info" style="border: solid; border-width: 1px; padding: 5px 10px 25px 10px; width: 600px">
            <h1>Informasi Hari Ini</h1>
            <p>Di sini berisi informasi terkini</p>
        </div>
        
        <div id="absensi" style="border: solid; border-width: 1px; padding: 5px 5px 25px 5px; width: 480px">
            <div class="jam">
                <div id="clock" class="light">
			<div class="display">
				<div class="weekdays"></div>
				<div class="ampm"></div>
				<div class="alarm"></div>
				<div class="digits"></div>
			</div>
		</div>
            </div>
            <div>
                <center>
                    <h1>Absensi</h1>
                    <p style="font-color: red;"><?=$this->session->flashdata('pesan');?></p>
                    <form action="<?=site_url('home/check_absensi');?>" method="POST">
                        Silahkan Scan Barcode Name Tag Anda <br/> <input type="text" name="nippos" placeholder="Nippos / NIK" maxlength="9" minlength="9" required style="width: 200px; padding: 5px"/>
                    </form>
                </center>
            </div>
            
        </div>
        
    </div>
    <div id="footer">
        
    </div>
            <br/>
            
            <!-- JavaScript Includes -->
		<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
		<script src="http://cdnjs.cloudflare.com/ajax/libs/moment.js/2.0.0/moment.min.js"></script>
		<script src="<?=base_url('assets/digital-clock/js/script.js');?>"></script>
    </body>
    
</html>
