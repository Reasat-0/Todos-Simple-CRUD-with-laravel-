<style>

    .input_self{
    }

</style>






@extends('layout')




@section('content')

    <div class="row">

        <h1>Update To DO's</h1>

        <div class="col-lg-6 col-lg-offset-3">

            <form action="{{route('saveUpdate',['id'=>$todoId->id])}}" method="post">

                {{ csrf_field() }}
                <input type="text" class="form-control input-lg" size = "80" name="todo" value="{{$todoId->todo}}" placeholder="">

            </form>

        </div>

    </div>

    <hr>



@stop





