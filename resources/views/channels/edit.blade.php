@extends('layouts.app')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Edit channel: {{$channel->title}}</div>

                <div class="panel-body">
                    
                    <div class="panel-body">
                        <form action="{{route('channels.update', ['channel'=>$channel->id])}}" method="post">
                            {{ csrf_field() }}
                            {{method_field('PUT')}}
                            <div class="form-group">
                                <input type="text" name="channel" value="{{$channel->title}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success text-center">
                                    Update channel
                                </button>
                            </div>
                        </form>
                    </div>
    </div>
</div>
@endsection
