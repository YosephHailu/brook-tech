@if(count($errors) > 0)
    @foreach ($errors->all() as $error)
        <div class="alert  alert-danger m-0">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            {{$error}}
        </div>
    @endforeach
@endif

@if (session('success'))
        <div class="alert alert-success  m-0" >
            {{session('success')}}<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>    
@endif

@if (session('error'))
        <div class="alert alert-danger  m-0">
            {{session('error')}}<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>    
@endif