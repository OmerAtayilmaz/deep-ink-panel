<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $userCount = DB::select("SELECT COUNT(*) AS user_count from users")[0]?->user_count;
        $activeOrdersCounter = DB::select("SELECT COUNT(*) AS order_count from orders where status = 'ACTIVE'")[0]?->order_count;
        $completedOrdersCounter = DB::select("SELECT COUNT(*) AS order_count from orders where status = 'COMPLETED' ")[0]?->order_count;

        return view("backoffice.index",[
            'user' => $userCount,
            'completed_order' => $completedOrdersCounter,
            'active_order' => $activeOrdersCounter
        ]);
    }


}
