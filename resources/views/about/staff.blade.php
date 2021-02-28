@extends('dashboard')

@section('dashboard-content')
<div class="card-header">
    <h2>Manage staff</h2>
</div>

<div class="card mb-xl-0">
    <div class="card-header p-3">
        @isset($staff)
        <form action="{{url('staff/'. $staff->id)}}" method="POST" enctype="multipart/form-data">
            @else
            <form action="/staff" method="POST" enctype="multipart/form-data">
                @endisset
                @csrf
                <div class="row">
                    <div class="col-md-12 row">
                        <div class="form-group col-sm-6">
                            <label for="label">name</label>
                            <input required type="text" value="{{$staff->name ?? ''}}" class="form-control" id="name" name="name" placeholder="Enter name">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="job">Job</label>
                            <input required type="text" value="{{$staff->job ?? ''}}" class="form-control" id="job" name="job" placeholder="Enter job title">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>

                        <div class="form-group col-sm-6 mt-5 pt-1">
                            @isset($staff)
                            <input type="hidden" name="_method" value="put">
                            <input type="submit" value="Update" class="btn btn-primary col-3 mt-4 m-auto">
                            <a href="{{url('staff')}}" class="btn  col-3 mt-4 m-auto"> Reset</a>
                            @else
                            <input type="submit" value="Save" class="btn btn-primary col-3 mt-4 m-auto">
                            @endisset
                        </div>
                    </div>

                </div>
            </form>
    </div>
</div>

<div class="row">
    @foreach ($staffs as $staff)
    <div class="col-md-4">
        <div class="card widgets-cards">
            {{-- <div class="card-header">
            </div> --}}
            <div class="card-body">
                <h4 class="m-0 ">{{$staff->name}}</h4>
                <small>{{$staff->job}}</small>
                <hr class="py-2 my-3">
                <img src="{{url('storage/staff/'.$staff->image)}}" alt="{{url($staff->name)}}" height="200px">
            </div>

            <div class="card-footer p-0">
                <div class="d-flex">

                    <div class="border-right text-center w-150 px-2 bg-success text-white">
                        <a href="{{url('staff/'.$staff->id.'/edit')}}" class="p-3 px-5 btn btn-success text-center">
                            <i class="fa fa-trash"></i> edit
                        </a>
                    </div>
                    <div class="float-right w-150">
                        <div class="p-3 text-center">
                        </div>
                    </div>

                    <div class="border-right text-center w-150 px-2 bg-danger text-white">
                        <form action="{{url('staff/'. $staff->id)}}" method="post">
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
