<style>

    .input_self{
    }

</style>






@extends('layout')




@section('content')

    <div class="row">

        <h1>To DO's</h1>

        <div class="col-lg-6 col-lg-offset-3">

            <form action="/create/todo" method="post">

                {{ csrf_field() }}
                <input type="text" class="form-control input-lg" size = "80" name="todo" placeholder="Write the to do here">

            </form>

        </div>

    </div>

    <hr>
    @foreach($todos as $todo)


        {{ $todo->todo }}

        <a href="{{ route('todo.delete',['id'=>$todo->id])  }}" class="btn btn-danger">Delete</a>
        <a href="{{ route('todo.update',['id'=>$todo->id])  }}" class="btn btn-info">Update</a>

        @if(!$todo->completed)

            <a href="{{route('todo.completed',['id'=>$todo->id])}}" class="btn btn-success"> Mark as Completed</a>
            @else

            <span class="text-success">Completed!!</span>

         @endif



        <hr/>

    @endforeach









@stop





