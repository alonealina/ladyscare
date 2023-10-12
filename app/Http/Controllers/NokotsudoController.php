<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class NokotsudoController extends Controller
{
    public function index()
    {
        return view('index');
    }

    public function category()
    {
        return view('category');
    }

    public function trouble()
    {
        return view('trouble');
    }

    public function trouble_detail()
    {
        return view('trouble_detail');
    }

    public function pickup()
    {
        return view('pickup');
    }

    public function ranking()
    {
        return view('ranking');
    }

    public function fav()
    {
        return view('fav');
    }

    public function news()
    {
        return view('news');
    }

    public function news_detail()
    {
        return view('news_detail');
    }

    public function subscription()
    {
        return view('subscription');
    }

    public function subsc_item()
    {
        return view('subsc_item');
    }

    public function subsc_item_skip()
    {
        return view('subsc_item_skip');
    }

    public function contact()
    {
        return view('contact');
    }
    
    public function mail_send(Request $request)
    {
        // $captcha = 0;
        // if (isset($request['g-recaptcha-response'])) {
        // $captcha = $request['g-recaptcha-response'];
        // }
        // if ($captcha) {
        //     $data = ['name' => $request->name,
        //     'kana' => $request->kana,
        //     'mail' => $request->mail,
        //     'zip' => $request->zip,
        //     'address' => $request->address,
        //     'building' => $request->building,
        //     'mail' => $request->mail,
        //     'tel' => $request->tel,
        //     'content' => $request->content,];

        //     $mail = $request->mail;

        //     Mail::send('mail', $data, function($message) use ($mail){
        //         $message->to($mail, 'info@henson583.com')->subject('【高野山遍照尊院】お問い合わせ完了のご案内');
        //     });

        //     Mail::send('mail_admin', $data, function($message) {
        //         $message->to('info@henson583.com', 'info@henson583.com')->subject('【高野山遍照尊院】お問い合わせ受け付けのお知らせ');
        //     });

        //     Mail::send('mail_admin', $data, function($message) {
        //         $message->to('william_billl2008@yahoo.co.jp', 'info@henson583.com')->subject('【高野山遍照尊院】お問い合わせ受け付けのお知らせ');
        //     });
        // }

        return redirect()->to('mail_comp');
    }

    public function mail_comp()
    {
        return view('mail_comp');
    }

    public function member_regist()
    {
        return view('member_regist');
    }
    
    public function member_comp()
    {
        return view('member_comp');
    }
    
    public function login()
    {
        return view('login');
    }
    
    public function login_method()
    {
        return view('login_method');
    }
    
    public function reminder()
    {
        return view('reminder');
    }
    
    public function reminder_send()
    {
        return redirect()->to('reminder_comp');
    }
    
    public function reminder_comp()
    {
        return view('reminder_comp');
    }
    
    public function pass_rev()
    {
        return view('pass_rev');
    }
    
    public function pass_rev_method()
    {
        return redirect()->to('pass_rev_comp');
    }
    
    public function pass_rev_comp()
    {
        return view('pass_rev_comp');
    }
    
    public function item_buy_login()
    {
        return view('item_buy_login');
    }
    
    public function paymethod_select()
    {
        return view('paymethod_select');
    }
    
    public function item_buy_confirm()
    {
        return view('item_buy_confirm');
    }

    public function item_buy_comp()
    {
        return view('item_buy_comp');
    }

    public function member_edit()
    {
        return view('member_edit');
    }
    
    public function item_buy_normal()
    {
        return view('item_buy_normal');
    }
    
    public function not_member_form()
    {
        return view('not_member_form');
    }
    
    public function item_detail()
    {
        return view('item_detail');
    }
    
    public function mypage()
    {
        return view('mypage');
    }
    

    
    
    
}
