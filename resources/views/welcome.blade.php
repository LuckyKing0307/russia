<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
        <!-- Meta Pixel Code -->
        <script>
            !function(f,b,e,v,n,t,s)
            {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
                n.callMethod.apply(n,arguments):n.queue.push(arguments)};
                if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
                n.queue=[];t=b.createElement(e);t.async=!0;
                t.src=v;s=b.getElementsByTagName(e)[0];
                s.parentNode.insertBefore(t,s)}(window, document,'script',
                'https://connect.facebook.net/en_US/fbevents.js');
            fbq('init', '1416343942675898');
            fbq('track', 'PageView');
        </script>
        <noscript><img height="1" width="1" style="display:none"
                       src="https://www.facebook.com/tr?id=1416343942675898&ev=PageView&noscript=1"
            /></noscript>
        <!-- End Meta Pixel Code -->
    </head>
    <body>
        <div class="container">
            <div class="main_btns">
                <div class="btn">
                    <img src="{{url('/img/btn.svg')}}" alt="Image" class="btn_bg"/>
                    <div class="time">20:30</div>
                    <div class="date">16-17 fevral</div>
                </div>
            </div>
            <div class="main_mob">
                <div class="btn">
                    <img src="{{url('/img/btn_mb.svg')}}" alt="Image" class="btn_bg"/>
                    <div class="time">20:30</div>
                    <div class="date">16-17 fevral</div>
                </div>
                <div class="btn">
                    <img src="{{url('/img/btn_mb.svg')}}" alt="Image" class="btn_bg"/>
                    <div class="time">Bepul</div>
                    <div class="date">Vebinar narxi</div>
                </div>
            </div>
            <div class="title">
                Rossiyada <span>800$-1500$</span> qonuniy <br>
                ishlab topish
            </div>
            <div class="title title_mb">
                Rossiyada <span>800$-1500$</span> qonuniy
                ishlab topish
            </div>
            <div class="chel_btn">
                <img src="{{url('/img/img_2.png')}}" alt="">
                <button class="reg_btn" id="mob" onclick="openFrom()">RO’YXATDAN O’TISH</button>
            </div>
            <div class="list_guest">
                <div class="list_title">
                    Vebinarda nimalarni o’rganasiz?
                </div>
                <ul class="list_items">
                    <li class="list_item"><img src="{{url('/img/list.svg')}}" alt="">Rossiyada qonuniy hujjat yeg’ish</li>
                    <li class="list_item"><img src="{{url('/img/head.svg')}}" alt="">Ish joyini tanlash</li>
                    <li class="list_item"><img src="{{url('/img/like.svg')}}" alt="">Rossiyada ishlashni qulay tomonlari</li>
                </ul>
            </div>
            <div class="reg_btns">
                <button class="reg_btn" onclick="openFrom()">RO’YXATDAN O’TISH</button>
                <div class="vebinar">
                    <div class="veb_title">Bepul</div>
                    <div class="veb_text">Vebinar narxi</div>
                </div>
            </div>
        </div>
        <div class="formed" style="display: none;">
            <div class="bg_formed"></div>
            <form action="{{route('user.reg')}}" method="post" class="form">
               <img src="{{url('/img/exit.svg')}}" class="exit_btn" onclick="openFrom()">
                @csrf
                <div class="form_title">Ro’yxatdan o’tish</div>
                <div class="form_text">Pastdagi formani to'ldirishingiz bilan yopiq kanalga qo'shilasiz!</div>
                <label for="">Ism</label>
                <input type="text" class="input" placeholder="Ismingizni kiriting" name="name" required>
                <label for="">Telefon raqami</label>
                <input type="text" class="input" value="+998" placeholder="Telefon raqamiz" name="phone" required>
                <button class="reg_btn form_btn">RO’YXATDAN O’TISH</button>
            </form>
        </div>
        <img src="{{url('img/img_1.png')}}" alt="chel" class="chel">

    <script>

        function openFrom(){
            let form = document.querySelector('.formed');
            if (form) {
                var display = form.style.display;

                if (display === "none") {
                    form.style.display = "flex";
                } else {
                    form.style.display = "none";
                }
            }
        }
    </script>
    </body>
</html>
