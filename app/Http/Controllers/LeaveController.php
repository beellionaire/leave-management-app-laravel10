<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaveController extends Controller
{
    public function index()
    {
        $title = 'Leave Management | HRIS';
        $header = 'Leave Management';
        $active_leave = 'active';
        return view('leave.index', compact('title', 'header', 'active_leave'));
    }

    public function setLeavePage()
    {

        $title = 'Set Leave | HRIS';
        $header = 'Setting Leave';
        return view('leave.set_leave', compact('title', 'header'));
    }

    public function assignUpdatePage()
    {
        $title = 'Set Leave | HRIS';
        $header = 'Assign or Update';
        return view('leave.assign_or_update', compact('title', 'header'));
    }

    public function transactionAssignPage()
    {
        $title = 'Assign Leave | HRIS';
        $header = 'Assign Leave';
        return view('leave.transaction_assign', compact('title', 'header'));
    }

    public function transactionUpdatePage()
    {
        $title = 'Update Leave | HRIS';
        $header = 'Update Leave';
        return view('leave.transaction_update', compact('title', 'header'));
    }

    public function HistoryPage()
    {
        $title = 'History Leave | HRIS';
        $header = 'History Leave';
        return view('leave.history_leave', compact('title', 'header'));
    }
}
