@extends('dashboard')

@section('dashboard-content')
<div class="card mb-xl-0">
    <div class="card-header p-3">
        @isset($photoGallery)
        <form action="{{url('photo-gallery/'. $photoGallery->id)}}" method="POST" enctype="multipart/form-data">
            @else
            <form action="/photo-gallery" method="POST" enctype="multipart/form-data">
                @endisset
                @csrf
                <div class="row">
                    <div class="col-md-9 row">
                        <div class="form-group col-6">
                            <label for="label">Label</label>
                            <input required type="text" value="{{$photoGallery->label ?? ''}}" class="form-control" id="label" name="label" placeholder="Enter label">
                        </div>

                        <div class="form-group col-6">
                            <label for="photo">Photo</label>
                            <input type="file" class="form-control" id="photo" name="photo">
                        </div>

                        <div class="form-group col-12">
                            <label for="description">Description</label>
                            <textarea required class="form-control" placeholder="Enter short description" id="description" name="description">{{$photoGallery->description ?? ''}}</textarea>
                        </div>
                    </div>

                    @isset($photoGallery)
                    <input type="hidden" name="_method" value="put">
                    <input type="submit" value="Update" class="btn btn-primary col-3 m-auto">
                    @else
                    <input type="submit" value="Save" class="btn btn-primary col-3 m-auto">

                    @endisset
                </div>
            </form>
    </div>
</div>

<div class="row py-3">
    @foreach ($photoGalleries as $photoGallery)
    <div class="col-lg-4 col-md-12">
        <div class="card card-body">
            {{-- <div class="card-header">
            </div> --}}

            <div class="item-card overflow-hidden">
                <div class="item-card-desc">
                    <a href="#"></a>
                    <div class="card text-center overflow-hidden mb-0">
                        <img src="{{URL::asset('storage/photos/'.$photoGallery->image)}}" alt="img" style="height: 200px" class="cover-image">
                        <div class="item-card-text text-right">
                            <h4 class="mb-2">{{$photoGallery->label}}</h4>
                            <small>{{$photoGallery->description}}</small>
                        </div>
                    </div>
                </div>
            </div>

            <div class="card-footer p-0">
                <div class="row">
                    <div class="border-right col-6 bg-success text-white">
                        <a href="{{url('photo-gallery/'.$photoGallery->id.'/edit')}}" class="p-3 px-5 btn btn-success text-center">
                            <i class="fa fa-edit"></i> Edit
                        </a>
                    </div>
                    <div class="border-right col-6 bg-danger text-white">
                        <form action="{{url('photo-gallery/'. $photoGallery->id)}}" method="post">
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
