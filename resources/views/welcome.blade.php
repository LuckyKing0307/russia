<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Naimix Xususiy Bandlik Agentligi</title>
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&family=Merriweather:ital,wght@0,300;0,400;0,700;0,900;1,300;1,400;1,700;1,900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
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
    <div class="marquee-container">
        <div class="marquee">
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
            <span class="time">20:30 16-17 fevral</span>
        </div>
    </div>
    <header>
        <div class="container">
            <div class="title">
                Rossiyada <span>qonuniy</span> tarzda<br> ishlash va  <span>800$-1500$</span> oylik<br> olish imkoniyati!
            </div>
            <div class="title title_mb">
                Rossiyada <span>qonuniy</span> tarzda ishlash va  <span>800$-1500$</span> oylik olish imkoniyati!
            </div>
            <div class="chel_btn">
                <img src="{{url('/img/img_2.webp')}}" alt="">
            </div>
            <div class="list_guest">
                <div class="list_titled">
                    Quruvchilik va tikuvchilik yo'nalishida 500 ta ish o'rni ochiq va siz ortiqcha xarajatlarsiz 800-1500$ daromad qilish imkoniyatiga egasiz!
                </div>
                <div class="list_content">
                    <div class="content_list_title">Ishga joylashish uchun "ro'yxatdan o'tish" tugmasini bosib webinarga qo'shiling</div>
                    <button class="reg_btn" onclick="openFrom()">RO’YXATDAN O’TISH</button>
                </div>
            </div>
        </div>
        <img src="{{url('img/img_1.webp')}}" alt="chel" class="chel" loading="lazy">
    </header>
        <section class="dop_info">
            <div class="container">
                <div class="section_title">Hali bunaqasi bo'lmagan, bepul webinarda ishga <br> joylashish imkoniyatiga egasiz:</div>
                <div class="section_content">
                    <div class="content_item">
                        <img src="{{url('img/yes.png')}}" alt="">
                        <p>Rossiyada qonuniy hujjat yeg'ish</p>
                    </div>
                    <div class="content_item">
                        <img src="{{url('img/yes.png')}}" alt="">
                        <p>Ish joyni tanlash</p>
                    </div>
                    <div class="content_item">
                        <img src="{{url('img/yes.png')}}" alt="">
                        <p>Rossiyada ishlashni qulay tomonlari</p>
                    </div>
                </div>
            </div>
        </section>
        <div class="formed" style="display: none;">
            <div class="bg_formed"></div>
            <form action="{{route('user.reg')}}" method="post" class="form">
               <img src="{{url('/img/exit.png')}}" class="exit_btn" onclick="openFrom()">
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
