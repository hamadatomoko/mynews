@extends('layouts.profile')


{{-- admin.blade.phpの@yield('title')に'ニュースの新規作成'を埋め込む --}}
@section('title', 'profile')

{{-- admin.blade.phpの@yield('content')に以下のタグを埋め込む --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 mx-auto">
                <h2>profile</h2>
             <form action="{{ action('Admin\ProfileController@update') }}" method="post" enctype="multipart/form-data">

                    @if (count($errors) > 0)
                        <ul>
                            @foreach($errors->all() as $e)
                                <li>{{ $e }}</li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="form-group row">
                        <label class="col-md-2">name</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="name" value="{{ $profile_form->name}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">gender</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="gender" value="{{ $profile_form->gender }}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">hobby</label>
                        <div class="col-md-10">
                            <input type="text" class="form-control" name="hobby" value="{{  $profile_form->hobby}}">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-md-2">introduction</label>
                        <div class="col-md-10">
                          <textarea class="form-control" name="introduction" rows="10">{{  $profile_form->introduction}}</textarea>   
                            
                        </div>
                    </div>
                    <input type="hidden" name="id" value="{{ $profile_form->id }}">
                 
                    {{ csrf_field() }}
                    <input type="submit" class="btn btn-primary" value="更新">
                </form>
                <div class="row mt-5">
                    <div class="col-md-4 mx-auto">
                        <h2>編集履歴</h2>
                        <ul class="list-group">
                            @if ($profile_form->histories != NULL)
                                @foreach ($profile_form->histories as $history)
                                    <li class="list-group-item">{{ $history->edited_at }}</li>
                                @endforeach
                            @endif
                        </ul>
                    </div>
                </div>
            
            
            </div>
        </div>
    </div>
@endsection