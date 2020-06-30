@extends('layouts.app')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Create a new channel</div>

                <div class="panel-body">
                    
                    <div class="panel-body">
                        <form action="{{route('channels.store')}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <input type="text" name="channel" value="{{old('channel')}}" class="form-control">
                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-success text-center">
                                    Save channel
                                </button>
                            </div>
                        </form>
        </div>
    </div>
</div>
@endsection
