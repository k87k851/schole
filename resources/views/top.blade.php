@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>スコーレ早朝研修</h1>
    </div>
</div>
<div class="card">
    <h5 class="card-header">お知らせ</h5>
    <div class="card-body">
        <div class="row">
        </div>
    </div>
</div>
<br>
<div class="card">
    <h5 class="card-header">早朝研修の出欠</h5>
    <div class="card-body">
        <div class="row">
        </div>
    </div>
</div>
<br>
<div class="row">
    <div class="col-lg-3">
        <button type="button" class="btn btn-outline-dark btn-md btn-block"
                onclick="location.href='{{ route('admin.top') }}'">管理メニュー
        </button>
    </div>
</div>
@endsection
