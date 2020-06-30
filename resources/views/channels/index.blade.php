@extends('layouts.app')

@section('content')
            <div class="panel panel-default">
                <div class="panel-heading">Channels</div>

                <div class="panel-body">
                    <table class="table table-hover">
                        <thead>
                            <th>
                                Name
                            </th>

                            <th>
                                Edit
                            </th>

                            <th>
                                Delete
                            </th>
                        </thead>
                        <tbody>
                            
                            @if ($channels->count()>0)
                                @foreach ($channels as $channel)
                                    <tr>
                                        <td> {{$channel->title}}</td>
                                        <td>
                                            <a href="{{route('channels.edit', ['channel'=>$channel->id])}}" class="btn btn-xs btn-info">Edit</a>
                                        </td>
                                        <td>
                                            <form action="{{route('channels.destroy', ['channel' => $channel->id])}}" method="POST">
                                                {{ csrf_field() }}
                                                {{method_field('DELETE')}}
                                                <button class="btn btn-xs btn-danger" type="submit"> Delete </button>
                                            
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                                
                            @else
                                <tr>
                                <th colspan="5" class="text-center">No channel created</th>
                            </tr>
                            @endif
                           
                            

                        </tbody>
                    </table>
 
    </div>
</div>
@endsection
