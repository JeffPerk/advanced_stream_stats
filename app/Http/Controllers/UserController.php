<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Repositories\UserRepository;
use Inertia\Inertia;

class UserController extends Controller
{
    private $userRepository;

    public function __construct(UserRepository $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function index()
    {
        $subscribed = $this->userRepository->isSubscribed(auth()->user()->id);

        return Inertia::render('Dashboard', [
            'subscribed' => $subscribed
        ]);
    }
}
