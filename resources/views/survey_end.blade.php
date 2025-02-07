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
    <style>
        body{
            background-image: none;
        }
        @media (max-width: 900px) {
            body{
                overflow: auto;
                background: rgb(195,213,246);
                background: linear-gradient(rgba(195,213,246,1) 29%, rgba(244,239,244,1) 71%);
            }
        }
    </style>
</head>
<body>
<div class="container end_con">
    <img src="{{url('/img/img_3.png')}}" class="end_img_chel">
    <div class="end_chel">
    </div>
    <div class="end_info">
        <div class="main_btns end_btns_info">
            <div class="btn">
                <img src="{{url('/img/img_end.svg')}}" alt="Image" class="btn_bg end_bg"/>
                <div class="time">20:30</div>
                <div class="date">13-14 fevral</div>
            </div>
        </div>
        <div class="main_mob">
            <div class="btn end_information">
                <img src="{{url('/img/img_end.svg')}}" alt="Image" class="btn_bg"/>
                <div class="time end_text">20:30</div>
                <div class="date end_data">13-14 fevral</div>
            </div>
            <div class="btn end_information">
                <img src="{{url('/img/img_end.svg')}}" alt="Image" class="btn_bg"/>
                <div class="time end_text">Bepul</div>
                <div class="date end_data">Vebinar narxi</div>
            </div>
        </div>
        <div class="title end_title_info">
            Bepul darsda qatnashish  <br>uchun, yopiq telegram  <br>kanalimizga obuna bo'ling!
        </div>
        <div class="title end_title_info     title_mb">
            Bepul darsda qatnashish  <br>uchun, yopiq telegram  <br>kanalimizga obuna bo'ling!
        </div>
        <img src="{{url('/img/link.svg')}}" class="link">
        <a class="reg_btn end_btn_reg" href="" target="_blank">Kanalga qo’shilish</a>
        <img src="{{url('/img/img_4.png')}}" alt="" class="chel_btn">
    </div>
</div>
</body>
</html>
