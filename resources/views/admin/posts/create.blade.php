@extends('admin.layouts.app')

@section('css')
    <script type="text/javascript" src="/ckeditor/ckeditor.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
@stop
@section('content')
    <div class="container miban">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">Create New Post</div>
                    <div class="panel-body">

                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        @endif

                        {!! Form::open(['url' => '/admin/posts', 'class' => 'form-horizontal', 'files' => true]) !!}

                        @include ('admin.posts.form')

                        {!! Form::close() !!}

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('script')
    <script type="text/javascript">
        CKEDITOR.replace( 'content' );
    </script>

    <script type="text/javascript">
        $('select').select2();
    </script>
@stop