<?php

namespace App\Http\Controllers;

use App\Models\Stat;
use App\Repositories\StatRepository;
use Illuminate\Http\Request;
use Inertia\Inertia;

class StatController extends Controller
{
    private $statRepository;

    public function __construct(StatRepository $statRepository) {
        $this->statRepository = $statRepository;
    }

    public function getUserGameStats()
    {
        $stats = $this->statRepository->getGamingStatsByUserId(auth()->user()->id);
    }
}
