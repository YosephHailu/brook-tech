@extends('dashboard')

@section('dashboard-content')
<div class="card-header">
    <h2>Services</h2>
</div>

<div class="card mb-xl-0">
    <div class="card-header p-3">
        @isset($service)
        <form action="{{url('service/'. $service->id)}}" method="POST" enctype="multipart/form-data">
            @else
            <form action="/service" method="POST" enctype="multipart/form-data">
                @endisset
                @csrf
                <div class="row">
                    <div class="col-md-12 row">
                        <div class="form-group col-sm-6">
                            <label for="label">Title</label>
                            <input required type="text" value="{{$service->title ?? ''}}" class="form-control" id="title" name="title" placeholder="Enter label">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>
                    </div>
                    <div class="col-md-8 row">
                        <div class="form-group col-12">
                            <label for="description">Message</label>
                            <textarea required class="form-control" placeholder="Enter short description" id="description" name="description">{{$service->description ?? ''}}</textarea>

                        </div>
                    </div>


                    @isset($service)
                    <input type="hidden" name="_method" value="put">
                    <input type="submit" value="Update" class="btn btn-primary col-3 mt-4 m-auto">
                    @else
                    <input type="submit" value="Save" class="btn btn-primary col-3 mt-4 m-auto">

                    @endisset
                </div>
            </form>
    </div>
</div>

<div class="row">
    @foreach ($services as $service)
    <div class="col-lg-6 col-md-12">
        <div class="card widgets-cards">
            {{-- <div class="card-header">
            </div> --}}
            <div class="card-body">
                <h4 class="m-0 ">{{$service->title}}</h4>
                <small>{{$service->label}}</small>
                <hr class="py-2 my-3">
                <p>{{$service->description}}</p>
            </div>

            <div class="card-footer p-0">
                <div class="d-flex">

                    <div class="border-right text-center w-150 px-2 bg-success text-white">
                        <a href="{{url('service/'.$service->id.'/edit')}}" class="p-3 px-5 btn btn-success text-center">
                            <i class="fa fa-trash"></i> edit
                        </a>
                    </div>
                    <div class="float-right w-150">
                        <div class="p-3 text-center">
                            {{Carbon\Carbon::parse( $service->created_at)->format('Y-M-D')}}
                        </div>
                    </div>

                    <div class="border-right text-center w-150 px-2 bg-danger text-white">
                        <form action="{{url('service/'. $service->id)}}" method="post">
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
