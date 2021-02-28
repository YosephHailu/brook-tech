@extends('dashboard')

@section('dashboard-content')
<div class="card-header">
    <h2>Manage client</h2>
</div>

<div class="card mb-xl-0">
    <div class="card-header p-3">
        @isset($client)
        <form action="{{url('client/'. $client->id)}}" method="POST" enctype="multipart/form-data">
            @else
            <form action="/client" method="POST" enctype="multipart/form-data">
                @endisset
                @csrf
                <div class="row">
                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="label">name</label>
                            <input required type="text" value="{{$client->name ?? ''}}" class="form-control" id="name" name="name" placeholder="Enter name">
                        </div>
                    </div>

                    <div class="col-sm-6">
                        <div class="form-group">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>
                    </div>

                    <div class="form-group col-sm-6">
                        @isset($client)
                        <input type="hidden" name="_method" value="put">
                        <input type="submit" value="Update" class="btn btn-primary col-3 mt-4 m-auto">
                        <a href="{{url('client')}}" class="btn  col-3 mt-4 m-auto"> Reset</a>
                        @else
                        <input type="submit" value="Save" class="btn btn-primary col-3 mt-4 m-auto">
                        @endisset
                    </div>

                </div>
            </form>
    </div>
</div>

<div class="row">
    @foreach ($clients as $client)
    <div class="col-md-4">
        <div class="card widgets-cards">
            {{-- <div class="card-header">
            </div> --}}
            <div class="card-body">
                <h4 class="m-0 ">{{$client->name}}</h4>
                <small>{{$client->job}}</small>
                <hr class="py-2 my-3">
                <img src="{{url('storage/client/'.$client->image)}}" alt="{{url($client->name)}}" height="200px">
            </div>

            <div class="card-footer p-0">
                <div class="d-flex">

                    <div class="border-right text-center w-150 px-2 bg-success text-white">
                        <a href="{{url('client/'.$client->id.'/edit')}}" class="p-3 px-5 btn btn-success text-center">
                            <i class="fa fa-trash"></i> edit
                        </a>
                    </div>
                    <div class="float-right w-150">
                        <div class="p-3 text-center">
                        </div>
                    </div>

                    <div class="border-right text-center w-150 px-2 bg-danger text-white">
                        <form action="{{url('client/'. $client->id)}}" method="post">
                            @csrf()
                            @method('delete')

                            <button class="p-3 btn btn-danger text-center">
                                <i class="fa fa-trash"></i> Delete
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection
