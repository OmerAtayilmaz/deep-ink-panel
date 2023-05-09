<?php

namespace App\Http\Controllers;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $userCount = User::count();
        $activeOrdersCounter = Order::where('status', 'ACTIVE')->count();
        $completedOrdersCounter = Order::where('status', 'COMPLETED')->count();

        return view("backoffice.index",[
            'user' => $userCount,
            'completed_order' => $completedOrdersCounter,
            'active_order' => $activeOrdersCounter
        ]);
    }


}
