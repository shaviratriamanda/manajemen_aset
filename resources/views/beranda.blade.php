@extends('layout.admin')

@section('title', 'Data Halaman')

@section('content')

<section class="content">
  
  <h3>Ringkasan Total Kondisi Aset</h3>
  <div class="row">
    <div class="col-xs-12 col-sm-3">
      <div class="small-box bg-green">
        <div class="inner">
          <p>Good</p>
        </div>
        <div class="icon">
          <i class="fa fa-book" style="font-size: 40px;"></i>
        </div>
        <a href="#" class="small-box-footer">
          {{ $kondisi_good }} Aset <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
  </div>
    <div class="col-sm-3 col-xs-12">
      <div class="small-box bg-purple">
        <div class="inner">
          <p>Bad</p>
        </div>
        <div class="icon">
          <i class="fa fa-book" style="font-size: 40px;"></i>
        </div>
        <a href="#" class="small-box-footer">
          {{ $kondisi_bad }} Aset <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <div class="col-sm-3 col-xs-12">
      <div class="small-box bg-yellow">
        <div class="inner">
          <p>Lost</p>
        </div>
        <div class="icon">
          <i class="fa fa-book" style="font-size: 40px;"></i>
        </div>
        <a href="?h=unit" class="small-box-footer">
        {{ $kondisi_lost }} Aset <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
    <div class="col-sm-3 col-xs-12">
      <div class="small-box bg-red">
        <div class="inner">
          <p>Damaged</p>
        </div>
        <div class="icon">
          <i class="fa fa-book" style="font-size: 40px;"></i>
        </div>
        <a href="?h=unit" class="small-box-footer">
        {{ $kondisi_damaged }} Aset <i class="fa fa-arrow-circle-right"></i>
        </a>
      </div>
    </div>
  </div>
      
  </section>
@endsection


