<?php

namespace App\Http\Controllers;

use App\Exports\RegistredExport;
use App\Models\RegistredUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Session;
use Maatwebsite\Excel\Facades\Excel;

class IndexController extends Controller
{

    public function index()
    {
        if (Session::getId()){
            $id = Session::getId();
            $response = Http::post("https://graph.facebook.com/v18.0/".env('FACEBOOK_PIXEL_ID')."/events", [
                'data' => [
                    [
                        'event_name' => 'ViewContent',
                        'event_time' => time(),
                        'user_data' => [
                            "external_id"=>$id
                        ],
                        'custom_data' => [
                            'content_ids' => '0',
                            'content_type' => 'open_index'
                        ],
                        'action_source' => 'website'
                    ]
                ],
                'access_token' => env('FACEBOOK_ACCESS_TOKEN')
            ]);
        }else{
            $response = Http::post("https://graph.facebook.com/v18.0/".env('FACEBOOK_PIXEL_ID')."/events", [
                'data' => [
                    [
                        'event_name' => 'ViewContent',
                        'event_time' => time(),
                        'user_data' => [
                            "external_id"=>"new_user"
                        ],
                        'custom_data' => [
                            'content_ids' => '0',
                            'content_type' => 'open_index'
                        ],
                        'action_source' => 'website'
                    ]
                ],
                'access_token' => env('FACEBOOK_ACCESS_TOKEN')
            ]);
        }
        return view('welcome');
    }

    public function send(Request $request)
    {
        $data = $request->all();
        unset($data['_token']);

        $user = RegistredUsers::create($data);

        $session = Session::put('survey_completed', true);

        $response = Http::post("https://graph.facebook.com/v18.0/".env('FACEBOOK_PIXEL_ID')."/events", [
            'data' => [
                [
                    'event_name' => 'Lead',  // Событие "Лид" (заполнение формы)
                    'event_time' => time(),  // Время события (в формате Unix timestamp)
                    'event_id' => 'lead_' . uniqid(), // Уникальный ID события
                    'action_source' => 'website',  // Источник события (сайт)
                    'user_data' => [
                        'fn' => [hash('sha256', strtolower(trim($data['name'])))],  // Email пользователя (хешируем SHA-256)
                        'ph' => [hash('sha256', preg_replace('/\D/', '', $data['phone']))], // Телефон (удаляем всё кроме цифр)
                    ],
                    'custom_data' => [
                        'form_id' => $user->id,  // ID формы (например, "Форма обратной связи")
                        'lead_type' => 'webinar_registration', // Тип лида (можно передать "запись на вебинар", "подписка" и т.д.)
                    ]
                ]
            ],
            'access_token' => env('FACEBOOK_ACCESS_TOKEN') // Ваш Facebook Access Token
        ]);
        return redirect('/survey-end');
    }

    public function download()
    {
        return Excel::download(new RegistredExport, 'users.xlsx');
    }
}
