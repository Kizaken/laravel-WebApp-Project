@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">User's List</div>

                <div class="panel-body">
                    You are logged in!
                </div>
                <div class="panel-body">   
               
                <table class="table table-striped"> 
                
                    <tr class="head">
                        <th>ID</th>
                        <th>Name</th>                      
                        <th>Email</th> 
                        <th>Options</th>                      
                    </tr>
                    @foreach($users as $list)
                        <tr>
                            <td class="active">{{$list->id}}</td>
                            <td class="active">{{$list->name}}</td>
                            <td class="active">{{$list->email}}</td>
                            <td class="active"><a href="/edit/{{$list->id}}" style="padding-left: 10px; text-decoration: none;">View</a> <a href="/del/{{$list->id}}" style="padding-left: 10px; color:red; margin-right: 20px; text-decoration: none;">Del</a></td>
                        </tr>
                       
                    @endforeach
                </table> 
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
