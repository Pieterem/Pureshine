<?php

namespace App\Http\Controllers;

use Mail;
use App\Models\Appointment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AppointmentController extends Controller
{
    public function index()
    {
        return view('appointment.index');
    }
  
    public function show()
    {

        $appointments = DB::table('appointments')->paginate(10);
        foreach ($appointments as $appointment) {
            $appointment->customer_id = DB::table('users')->where('id', $appointment->customer_id)->value('name');
        }
        return view('appointment.show')
            ->with('appointments', $appointments);
    }
}
