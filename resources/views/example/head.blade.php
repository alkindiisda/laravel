<meta charset="utf-8" />
<title>Admin Dashboard Template</title>
<meta content="width=device-width, initial-scale=1.0" name="viewport" />
<meta content="" name="description" />
<meta name="csrf-token" content="{{ csrf_token() }}" />
<meta content="" name="author" />
<base href="/" target="_top">
<link href="../assets/bootstrap/css/bootstrap.min.css" rel="stylesheet" />
<link href="../assets/css/metro.css" rel="stylesheet" />
<link href="../assets/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet" />
<link href="../assets/font-awesome/css/font-awesome.css" rel="stylesheet" />
<link href="../assets/css/style.css" rel="stylesheet" />
<link href="../assets/css/style_responsive.css" rel="stylesheet" />
<link href="../assets/css/style_light.css" rel="stylesheet" id="style_color" />
<link rel="stylesheet" type="text/css" href="../assets/gritter/css/jquery.gritter.css" />
<link rel="stylesheet" type="text/css" href="../assets/uniform/css/uniform.default.css" />
@yield('css')
{{--<link rel="stylesheet" type="text/css" href="../assets/bootstrap-daterangepicker/daterangepicker.css" />
<link href="../assets/fullcalendar/fullcalendar/bootstrap-fullcalendar.css" rel="stylesheet" />
<link href="../assets/jqvmap/jqvmap/jqvmap.css" media="screen" rel="stylesheet" type="text/css" />--}}
<link rel="shortcut icon" href="favicon.ico" />
<script type="text/javascript">
    tday=new Array("Sunday","Monday","Tuesday","Wednesday","Thursday","Friday","Saturday");
    tmonth=new Array("January","February","March","April","May","June","July","August","September","October","November","December");

    function GetClock(){
        var d=new Date();
        var nday=d.getDay(),nmonth=d.getMonth(),ndate=d.getDate(),nyear=d.getYear();
        if(nyear<1000) nyear+=1900;
        var d=new Date();
        var nhour=d.getHours(),nmin=d.getMinutes(),nsec=d.getSeconds(),ap;

        if(nhour==0){ap=" AM";nhour=12;}
        else if(nhour<12){ap=" AM";}
        else if(nhour==12){ap=" PM";}
        else if(nhour>12){ap=" PM";nhour-=12;}

        if(nmin<=9) nmin="0"+nmin;
        if(nsec<=9) nsec="0"+nsec;

       // document.getElementById('clock').innerHTML=""+tday[nday]+", "+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";
        document.getElementById('clock').innerHTML=""+tmonth[nmonth]+" "+ndate+", "+nyear+" "+nhour+":"+nmin+":"+nsec+ap+"";

    }

    window.onload=function(){
        GetClock();
        setInterval(GetClock,1000);
    }


</script>