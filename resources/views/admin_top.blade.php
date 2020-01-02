@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
<div class="row">
    <div class="col-lg-12">
        <h1>管理メニュー</h1>
    </div>
</div>
<div class="card">
    <h5 class="card-header">早朝研修の出欠</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='{{ route('admin.input.menu') }}'">早朝研修出欠入力
                </button>
            </div>
        </div>
    </div>
</div>
<br>
<div class="card">
    <h5 class="card-header">合同早朝</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='/input/joint_day'">合同早朝日設定
                </button>
            </div>
        </div>
    </div>
</div>
<br>
<div class="card">
    <h5 class="card-header">目標入力</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='/input/bschool_goal'">Bスクール目標入力
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='/input/leader_goal'">リーダー目標入力
                </button>
            </div>
        </div>
    </div>
</div>
<br>
<div class="card">
    <h5 class="card-header">EXCEL表出力</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='/output/school_spreadsheet'">スクール単位集計表出力
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='/output/participation_spreadsheet'">Bスクール単位出席簿出力
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='/output/joint_graph'">合同早朝確約グラフ出力
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='/output/achievement_result'">実績報告（掲示）出力
                </button>
            </div>
        </div>
    </div>
</div>
<br>
<div class="card">
    <h5 class="card-header">マスタ管理</h5>
    <div class="card-body">
        <div class="row">
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='/master_college'">カレッジマスタ
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='/master_school'">スクールマスタ
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='/master_bschool'">Bスクールマスタ
                </button>
            </div>
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='/master_room'">教室マスタ
                </button>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3">
                <button type="button" class="btn btn-outline-dark btn-md btn-block"
                        onclick="location.href='/master_member'">会員マスタ
                </button>
            </div>
        </div>
    </div>
</div>
@endsection
