<?php

    namespace App\Http\Controllers;


    class OrderSummaryController extends Controller
    {
         public function index()
         {
              // You can pass data to the view if needed
              return view('dashboard.ordersummary');
         }
    }