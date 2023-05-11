<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $toptitle }}</title>
    <!-- icons
        ================================================== -->
        {{--  <link rel="stylesheet" href="../assets/css/icons.css">  --}}

        <!-- CSS
        ================================================== -->
  @viteReactRefresh
  @vite([
    'resources/css/app.css',
    'resources/css/style.css',
    'resources/css/uikit.css',
    'resources/css/tailwind.min.css',
    'resources/js/app.js',
    'resources/js/jquery-3.6.0.min.js',
    'resources/js/uikit.min.js',
  ])
  <link rel="shortcut icon" href="https://res.cloudinary.com/the-morgans-consortium/image/upload/v1667831345/Tmc%20institute/fav_dmznt6.jpg" type="image/x-icon"/>


</head>
<body>

{{--  @yield('content')  --}}


</body>
<script type="text/javascript">
 {{--  var image = "{{ asset('images/placeholder.png') }}"  --}}
 var userpic = {{ Js::from(auth()->user()->picture??"") }};
 var usersemail = {{ Js::from(auth()->user()->email??"") }}
 var username = @json(session()->get('userdetail')->fullname??"");
 var featured  = {{ Js::from($featured??"") }};
 var popular = {{ Js::from($popular??"") }}
 var recent = {{ Js::from($recent??"")}}
 var cart = {{ Js::from(json_decode($cart->usercartdetails??'')) }};
var allcourse = {{ Js::from($allcourse??"")}}
var single =  @js($single??"");
var video = {{ Js::from($video??"") }}
var usercourse = {{ Js::from($usercourse??"") }}
var fetchdata   = {{ Js::from($fetchdata??"") }}
var coursepurshase = {{ Js::from($coursepurshase??"") }}
var unique  = {{ Js::from($unihead??"") }};
var coursesdata = {{ Js::from($coursesdata??"") }}
var purchasedcourse = {{ Js::from($purchasedcourse??"")}}
var currencyex = {{ Js::from($currencyex??"") }}
var currencysymbol = {{ Js::from($currencysymbol??"") }}
{{--  var currencycode = {{ Js::from($currencycode??"") }}  --}}
var word = {{ Js::from($word??"") }}
var todollar = {{ Js::from($poundtodollar??"") }}
var poundton  = {{ Js::from($poundton??"")}}
var othersmoneys = {{ Js::from($othermoney??"") }};
var additional    = {{ Js::from( $additional??"") }}
var admin = {{ Js::from($admin??"") }}
 var captchaimg = {{ Js::from(captcha_src()) }}
var nextpage = {{  JS::from($nextpage??"")}}
var additionalpic = {{ JS::from($additionalpic??"") }}
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/6311da2337898912e966ce56/1gburo81e';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
</html>
