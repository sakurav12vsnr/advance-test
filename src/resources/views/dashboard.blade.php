@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/dashboard.css') }}">
@endsection

@section('content')
<div class="dashboard-form__content">
    <div class="dashboard-form__heading">
        <h2>管理システム</h2>
    </div>
    <form class="dashboard-form">
        <div class="dashboard-form__group">
            <div class="dashboard-form__group-title">
                <span class="dashboard-form__label--item">お名前</span>
            </div>
            <div class="dashboard-form__group-content">
                <div class="form__input--text">
                    <input type="text" name="name" value="{{ old('name') }}" />
                </div>
            </div>
        </div>
        <div class="dashboard-form__group">
            <div class="dashboard-form__group-title">
                <span class="dashboard-form__label--item">性別</span>
            </div>
            <div class="dashboard-form__group-content">
                <div class="dashboard-form__input--radio">
                    <input type="radio" name="gender" value="all" checked>全て
                    <input type="radio" name="gender" value="male">男性
                    <input type="radio" name="gender" value="female">女性
                </div>
            </div>
        </div>
        <div class="dashboard-form__group">
            <div class="dashboard-form__group-title">
                <span class="dashboard-form__label--item">登録日</span>
            </div>
            <div class="dashboard-form__group-content">
                <div class="form__input--text">
                    <input type="date" name="register_date" value="{{ old('register_date') }}" />~<input type="date" name="register_date" value="{{ old('register_date') }}" />
                </div>
            </div>
        </div>
        <div class="dashboard-form__group">
            <div class="dashboard-form__group-title">
                <span class="dashboard-form__label--item">メールアドレス</span>
            </div>
            <div class="dashboard-form__group-content">
                <div class="dashboard-form__input--text">
                    <input type="email" name="email" value="{{ old('email') }}" />
                </div>
            </div>
        </div>
        <div class="dashboard-form__button">
            <button class="dashboard-form__button-search" type="search">検索</button>
            <br />
            <button class="dashboard-form__button-reset" type="reset">リセット</button>
        </div>
    </form>
</div>
<table>
    @foreach ($dashboards as $dashboard)
    <tr>
        <td>
            {{$dashboard->getDetail()}}
        </td>
    </tr>
    @endforeach
</table>
{{$dashboards->links()}}
@endsection
