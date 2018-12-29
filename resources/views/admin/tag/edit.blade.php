@extends('layouts.admin')

@section('title', '编辑标签')

@section('nav', '编辑标签')

@section('description', '编辑标签')

@section('content')


    <form class="form-horizontal " action="{{url('admin/tag/update',[$data->id])}}" method="post">
        {{ csrf_field() }}
        <table class="table table-striped table-bordered table-hover">
            <tbody><tr>
                <th>标签名</th>
                <td>
                    <input class="form-control" type="text" name="name" value="{{ $data->name }}">
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
