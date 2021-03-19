@extends('layouts.app')

@section('title')
    {{__('Home')}}
@endsection

@section('content')
<div class="todos-header">
    <div class="row">
        <div class="col-md-8 col-sm-6 m-auto">
            <div class="todo-form">
                <form action="" method="post">
                    @csrf
                    <div class="form-group">
                        <!-- input field for add todo -->
                        <input class="form-control" type="text" name="todo_name" id="todo_name" placeholder="what to do now ?" required autocomplete="off">
                        <input class="btn btn-denger" type="submit" value="Add">
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
