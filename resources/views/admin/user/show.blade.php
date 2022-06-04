@extends('layouts.adminwindow')
@section('title' ,'User Detail: '.$data->title)

@section('content')
    <section role="main" class="Message-body">

        <!-- start: page -->

        <section class="panel">

            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Detail User Data</h2>
                    </header>
                    <div class="panel-body">
                        <div class="table-responsive">
                            <table class="table table-striped mb-none">
                                <tr>
                                    <th>Id</th>
                                    <th>{{$data->id}}</th>
                                </tr>

                                <tr>
                                    <th>Name & Surname</th>
                                    <th>{{$data->name}}</th>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <th>{{$data->email}}</th>
                                </tr>
                                <tr>
                                    <th>Roles</th>
                                    <th>@foreach($data->roles as $role)
                                            {{$role->name}}
                                            <a href="{{route('admin.user.destroyrole',['uid'=>$data->id,'rid'=>$role->id])}}" onclick="return confirm('Deleting !! Are you sure?')">[x]</a>

                                        @endforeach</th>
                                </tr>
                                <tr>
                                    <th>Created_at</th>
                                    <th>{{$data->created_at}}</th>
                                </tr>
                                <tr>
                                    <th>Updated_at</th>
                                    <th>{{$data->updated_at}}</th>
                                </tr>
                                <tr>
                                    <th>Add Role to User :</th>
                                    <th>
                                    <form role="form" method="post" action="{{route('admin.user.addrole',['id'=>$data->id])}}">
                                    @csrf
                                        <select name="role_id">
                                            @foreach($roles as $role)
                                                <option value="{{$role->id}}">
                                                    {{$role->name}}
                                                </option>
                                            @endforeach


                                        </select>
                                        <br><br>
                                            <div class="col-md-6">
                                                <input type="submit"  value="Add Data">
                                            </div>

                                    </form>
                                    </th>
                                </tr>
                            </table>
                        </div>
                    </div>
                </section>
            </div>
        </section>


        <!-- end: page -->


    </section>
@endsection
