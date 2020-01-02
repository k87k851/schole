@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>早朝研修出欠入力</h1>
    </div>
</div>
<div class="card">
    <h5 class="card-header">月次入力（パソコン用）</h5>
    <div class="card-body">
        <div class="row">
            Bスクール選択
        </div>
        <div class="row">
            年月選択
        </div>
        <div class="row">
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='{{ route('admin.input.monthly') }}'">入力画面表示
                </button>
            </div>
        </div>
    </div>
</div>
<br>
<div class="card">
    <h5 class="card-header">日次入力（スマホ用）</h5>
    <div class="card-body">
        <div class="row">
            Bスクール選択
        </div>
        <div class="row">
            年月日選択
        </div>
        <div class="row">
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='{{ route('admin.input.daily') }}'">入力画面表示
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
