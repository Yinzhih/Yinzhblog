@extends('layouts.admin')

@section('title', '添加分类')

@section('nav', '添加分类')

@section('description', '添加新的分类')

@section('content')

    <!-- 导航栏结束 -->
    <ul id="myTab" class="nav nav-tabs bar_tabs">
        <li class="active">
            <a href="{{ url('admin/category/index') }}">分类列表</a>
        </li>
        <li>
            <a href="{{ url('admin/category/create') }}">添加分类</a>
        </li>
    </ul>

    <form class="form-horizontal " action="{{url('admin/category/store')}}" method="post">
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tbody><tr>
                <th>分类名</th>
                <td>
                    <input class="form-control" type="text" name="name" value="">
                </td>
            </tr>
            <tr>
                <th>关键字</th>
                <td>
                    <input class="form-control" type="text" name="keywords" value="">
                </td>
            </tr>
            <tr>
                <th>描述</th>
                <td>
                    <input class="form-control" type="text" name="description" value="">
                </td>
            </tr>
            <tr>
                <th>排序</th>
                <td>
                    <input class="form-control" type="text" name="sort" value="">
                </td>
            </tr>
            <tr>
                <th></th>
                <td>
                    <input class="btn btn-success" type="submit" value="提交">
                </td>
            </tr>
            </tbody></table>
    </form>

@endsection
