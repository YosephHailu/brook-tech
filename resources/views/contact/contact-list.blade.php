@extends('dashboard')

@section('dashboard-content')
<div class="card-header">
    <h2>Feedbacks</h2>
</div>
<div class="row">
    @foreach ($feedbacks as $feedback)
    <div class="col-lg-6 col-md-12">
        <div class="card widgets-cards">

            <div class="card-body">
                <h4 class="m-0 ">{{$feedback->name}}</h4>
                <small>{{$feedback->job}}</small>

                <hr class="py-2 my-3">
                <p>{{$feedback->message}}</p>
            </div>

            <div class="card-footer p-0">
                <div class="d-flex">
                    <div class="border-right w-150 px-2 bg-{{$feedback->share ? 'success' : 'warning'}} text-white">
                        <div class="py-3 text-center">
                            <a href="{{url('feedback/'.$feedback->id)}}" class="text-white p-3"> <i class="fa fa-check"></i> {{$feedback->share ? 'Shared' : 'Not shared '}} </a>
                        </div>
                    </div>
                    <div class="float-right w-150 text-center">

                    </div>

                    <div class="border-right text-center w-150 px-2 bg-danger text-white">
                        <form action="{{url('feedback/'. $feedback->id)}}" method="post">
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
