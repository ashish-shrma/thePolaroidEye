@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif


                 <form action="" method="post" enctype="multipart/form-data">
                  <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <div id="target">
                       Click to upload
                          <input type="file" id="upload" name="photo" multiple />
                        </div>
                        <div id="images"></div>


                  </form>











                </div>
            </div>
        </div>
    </div>
</div>
@endsection
