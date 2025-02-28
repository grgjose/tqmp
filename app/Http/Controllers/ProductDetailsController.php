<?php

    namespace App\Http\Controllers;

    class ProductDetailsController extends Controller
    {
         public function index()
         {
              // You can pass data to the view if needed
              return view('dashboard.product_details');
         }
    }