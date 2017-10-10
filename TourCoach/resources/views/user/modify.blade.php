@extends('master')


@push('css')
    <style>
        header{ display: none; }
        @if($errors->any())
            .input-box{
            border-bottom-color:red !important;
        }
        .input-title{
            color:red !important;
        }
        @endif
    </style>
    <link rel="stylesheet" href="/css/signIn.css">
    <link rel="stylesheet" href="/css/register.css">
@endpush

@section('content')

    {{--<h2>세션 결과</h2>--}}
    {{--<ul>--}}
    {{--@if( session()->has('success') )--}}
    {{--<li><strong>Success : {{ session()->get('success') }}</strong></li>--}}
    {{--@endif--}}
    {{--@if( session()->has('err') )--}}
    {{--<li><strong>Error: {{ session()->get('err') }}</strong></li>--}}
    {{--@endif--}}
    {{--</ul>--}}

    {{--<span>로그인 페이지</span>--}}
    {{--<form method="post">--}}
    {{--{{ csrf_field() }}--}}
    {{--<input type="text" name="userid">--}}
    {{--<input type="text" name="userpass">--}}
    {{--<button type="submit">로그인</button>--}}
    {{--</form>--}}

    <div class="container">
        <div class="signBox loginBox">
            <div class="input-table" style="padding-bottom: 7rem;">
                <div class="table-box">
                    <div class="table-title">
                        비밀번호 수정
                    </div>
                    <form class="form-box" id="login-form-box" method="post">
                        {{ csrf_field() }}
                        {{-- 실패시 에러창--}}
                        @if($errors->any())
                            <div class="input-box" style="height: 5px;padding: 0;margin: 0;border: none;margin-top: -20px;margin-bottom: 20px;">
                                <div class="input-title" style="width: 100%;">*{{ $errors->first() }}</div>
                            </div>
                        @endif

                        <div class="input-box">
                            <div class="input-title">현재 비밀번호</div>
                            <input type="text" name="userid" id="id-input" required value="{{ old('userid') }}">
                        </div>
                        <div class="input-box">
                            <div class="input-title">수정 비밀번호</div>
                            <input type="password" name="userpass" id="pass-input" required value="{{ old('userpw') }}">
                        </div>
                        <div class="input-box">
                            <div class="input-title">수정 비밀번호 확인</div>
                            <input type="password" name="userpass" id="pass-input" required value="{{ old('userpw') }}">
                        </div>
                        <button type="submit" id="login-form-button" style="display: none"></button>
                    </form>
                </div>

            </div>
            <div class="bottom-box">
                <div class="register-box-full">
                    <button type="button" name="button" onclick="document.getElementById('join-form-button').click()">수정하기</button>
                </div>
            </div>
        </div>
    </div>
@endsection