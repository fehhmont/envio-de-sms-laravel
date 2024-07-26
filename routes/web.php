<?php

use App\http\controllers\Enviarsmscontroller;
use Illuminate\Support\Facades\Route;

route::get('/',[Enviarsmscontroller::class, 'enviarSms'])->name('envar-sms.index');