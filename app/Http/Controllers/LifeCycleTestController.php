<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LifeCycleTestController extends Controller
{
    public function showServiceContainer()
    {
        app()->bind('lifeCycleTest', function(){
            return 'テスト';
        });

        $test = app()->make('lifeCycleTest');


        app()->bind('sample', Sample::class);
        $sample = app()->make('sample'); //サービスコンテナからインスタンスを生成
        $sample->run();
        dd($test);
    }

    public function showServiceProvider()
    {
        $encrypt = app()->make('encrypter');
        $password = $encrypt->encrypt('passwordo');
        dd($password, $encrypt->decrypt($password));
    }
}

class Sample 
{
    public $message;
    public function __construct(Message $message)
    {
        $this->message = $message;
    }
    public function run()
    {
        $this->message->send();
    }
}
class Message 
{
    public function send()
    {
        echo('メッセージ表示');
    }
}