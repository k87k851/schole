@extends('layouts.master')

@section('title', 'Dashboard')

@section('content')
    <form action="{{ route('admin.input.daily.save') }}" method="post">
        @csrf
    <h1>2019年12月1日</h1>
    <div class="table-responsive">
    <table class="table table-bordered participation-list">
        <tr>
            <th style="width: 120px;">氏名</th>
            <th class="center">1</th>
        </tr>
        <tr>
            <td>雨森さつき</td>
            <td class="center">
                <div class="btn-group-toggle" data-toggle="buttons">
                    <input type="radio" name="high_1_1" value="0" checked hidden>
                    <input type="radio" name="high_1_1" value="1" hidden>
                    <input type="radio" name="high_1_1" value="2" hidden>
                    <input type="radio" name="high_1_1" value="3" hidden>
                    <button type="button" id="toggler" class="toggler btn btn-default btn-sm" data-userid="1" data-day="1">　</button>
                </div>
            </td>
        </tr>
        <tr>
            <td>雨森美知典</td>
            <td class="center">
                <div class="btn-group-toggle" data-toggle="buttons">
                    <input type="radio" name="high_2_1" value="0" checked hidden>
                    <input type="radio" name="high_2_1" value="1" hidden>
                    <input type="radio" name="high_2_1" value="2" hidden>
                    <input type="radio" name="high_2_1" value="3" hidden>
                    <button type="button" id="toggler" class="toggler btn btn-default btn-sm" data-userid="2" data-day="1">　</button>
                </div>
            </td>
        </tr>
        <tr>
            <td>雨森美和</td>
            <td class="center">
                <div class="btn-group-toggle" data-toggle="buttons">
                    <input type="radio" name="high_3_1" value="0" checked hidden>
                    <input type="radio" name="high_3_1" value="1" hidden>
                    <input type="radio" name="high_3_1" value="2" hidden>
                    <input type="radio" name="high_3_1" value="3" hidden>
                    <button type="button" id="toggler" class="toggler btn btn-default btn-sm" data-userid="3" data-day="1">　</button>
                </div>
            </td>
        </tr>
        <tr>
            <td>雨森奈緒</td>
            <td class="center">
                <div class="btn-group-toggle" data-toggle="buttons">
                    <input type="radio" name="high_4_1" value="0" checked hidden>
                    <input type="radio" name="high_4_1" value="1" hidden>
                    <input type="radio" name="high_4_1" value="2" hidden>
                    <input type="radio" name="high_4_1" value="3" hidden>
                    <button type="button" id="toggler" class="toggler btn btn-default btn-sm" data-userid="4" data-day="1">　</button>
                </div>
            </td>
        </tr>
    </table>
    </div>
    <div class="row">
        <div class="col-lg-2">
            <input type="submit" class="btn btn-outline-dark btn-md btn-block" value="入力完了"></input>
        </div>
    </div>
    </form>


    <script>
      $('.toggler').click(function () {
        var $userid = $(this).data('userid');
        var $dayNum = $(this).data('day');
        var $radios = $('input[type="radio"][name="high_'+$userid+'_'+$dayNum+'"]');
        var colorClasses = ["btn-default", "btn-success", "btn-danger", "btn-primary"];
        var buttonText = ["　", "出", "遅", "早"];
        var $checked = $radios.filter(':checked');
        var $next = $radios.eq($radios.index($checked) + 1);
        if (!$next.length) {
          $next = $radios.first();
        }
        $next.prop("checked", true);
        var newValue = $radios.filter(':checked').val();
        $(this)
          .removeClass(colorClasses.join(" "))
          .addClass(colorClasses[newValue]);
        $(this).html(buttonText[newValue]);
      });
    </script>
@endsection
