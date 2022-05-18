@extends('layouts.adminwindow')
@section('title' ,'Show Message: '.$data->title)

@section('content')
    <section role="main" class="Message-body">

        <!-- start: page -->

        <section class="panel">

            <div class="col-md-12">
                <section class="panel">
                    <header class="panel-heading">
                        <h2 class="panel-title">Detail Message Data</h2>
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
                                    <th>Phone Number</th>
                                    <th>{{$data->phone}}</th>
                                </tr>
                                <tr>
                                    <th>Email</th>
                                    <th>{{$data->email}}</th>
                                </tr>
                                <tr>
                                    <th>Subject</th>
                                    <th>{{$data->subject}}</th>
                                </tr>
                                <tr>
                                    <th>Message</th>
                                    <th>{{$data->message}}</th>
                                </tr>
                                <tr>
                                    <th>Ip Number</th>
                                    <th>{{$data->ip}}</th>
                                </tr>
                                <tr>
                                    <th>Status</th>
                                    <th>{{$data->status}}</th>
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
                                    <th>Admin Note :</th>
                                    <th>
                                    <form role="form" method="post" action="{{route('admin.message.update',['id'=>$data->id])}}">
                                    @csrf
                                <textarea cols="100" id="note" name="note">{{$data->note}}</textarea>
                                        <br><br>
                                            <div class="col-md-6">
                                                <input type="submit"  value="Update Data">
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
