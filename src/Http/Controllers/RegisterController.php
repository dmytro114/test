<?php

namespace DevinGray\CustomAuth\Http\Controllers;

use DevinGray\CustomAuth\Classes\CustomRegister;
use DevinGray\CustomAuth\Http\Requests\RegisterRequest;
use Illuminate\Routing\Controller;

class RegisterController extends Controller
{
    protected $customRegister;

    public function __construct(CustomRegister $customRegister)
    {
        $this->customRegister = $customRegister;
    }

    public function create()
    {
        return $this->customRegister->showRegisterView();
    }

}