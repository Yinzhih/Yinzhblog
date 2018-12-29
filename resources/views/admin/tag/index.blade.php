@extends('layouts.admin')

@section('title', '标签列表')

@section('nav', '标签列表')

@section('description', '博客标签')

@section('content')

    <!-- 导航栏结束 -->
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li class="active">
            <a href="{{ url('admin/tag/index') }}">标签列表</a>
        </li>
        <li>
            <a href="{{ url('admin/tag/create') }}">添加标签</a>
        </li>
    </ul>
    <table class="table table-striped table-bordered table-hover">
        <tr>
            <th>id</th>
            <th>标签名</th>
            <th>状态</th>
            <th>操作</th>
        </tr>
        @foreach($data as $v)
        <tr>
            <td>{{ $v->id }}</td>
            <td>{{ $v->name }}</td>
            <td>
                @if(is_null($v->deleted_at))
                    正常
                @else
                    已删除
                @endif
            </td>
            <td>
                <a href="{{ url('admin/tag/edit',[$v->id]) }}">编辑</a>
                |
                @if(is_null($v->deleted_at))
                    <a href="javascript:if(confirm('确认删除?'))location.href='{{ url('admin/tag/destroy',[$v->id]) }}'">删除</a>
                @else
                <a href="javascript:if(confirm('确认恢复?'))location.href='{{ url('admin/tag/restore',[$v->id]) }}'">恢复</a>
                |
                <a href="javascript:if(confirm('彻底删除?'))location.href='{{ url('admin/tag/forceDelete',[$v->id]) }}'">彻底删除</a>
                @endif

            </td>
        </tr>
        @endforeach
        
    </table>
    <div class="text-center">

    </div>

@endsection
