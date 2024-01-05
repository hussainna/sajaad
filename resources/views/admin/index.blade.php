@extends('admin.master')

@section('content')

<div class="main-title">
    <p class="font-weight-bold">DASHBOARD</p>
  </div>

  <div class="main-cards">

    <?php

        $users=DB::table('users')->count();
        $like=DB::table('products')->sum('like_numbers');
        $heart=DB::table('products')->sum('heart_numbers');
        $products=DB::table('products')->count();


    ?>

    <div class="card">
      <div class="card-inner">
        <p class="text-primary">PRODUCTS</p>
        <span class="material-icons-outlined text-blue">inventory_2</span>
      </div>
      <span class="text-primary font-weight-bold">{{$products}}</span>
    </div>

    <div class="card">
      <div class="card-inner">
        <p class="text-primary">Users</p>
        <span class="material-icons-outlined text-orange">add_shopping_cart</span>
      </div>
      <span class="text-primary font-weight-bold">{{$users}}</span>
    </div>

    <div class="card">
      <div class="card-inner">
        <p class="text-primary">Like Numbers</p>
        <span class="material-icons-outlined text-green">shopping_cart</span>
      </div>
      <span class="text-primary font-weight-bold">{{$like}}</span>
    </div>

    <div class="card">
      <div class="card-inner">
        <p class="text-primary">Heart Numbers</p>
        <span class="material-icons-outlined text-red">notification_important</span>
      </div>
      <span class="text-primary font-weight-bold">{{$heart}}</span>
    </div>

  </div>

  <div class="charts">

    <div class="charts-card">
      <p class="chart-title">Top 5 Products</p>
      <div id="bar-chart"></div>
    </div>

    <div class="charts-card">
      <p class="chart-title">Purchase and Sales Orders</p>
      <div id="area-chart"></div>
    </div>

  </div>

@endsection