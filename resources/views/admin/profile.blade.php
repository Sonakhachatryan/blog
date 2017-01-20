@extends('admin.layouts.index')
@section('content')
    <!--banner-->
    <div class="banner">
        <h2>
            <a href="{{ url('admin') }}">Home</a>
            <i class="fa fa-angle-right"></i>
            <span>Profile</span>
        </h2>
    </div>
    <!--//banner-->
    <!--faq-->
    <div class="blank">


        <div class="blank-page">
            <div class="grid-form1">
                <form class="form-horizontal" method="post" action="{{ url('admin/profile') }}" enctype="multipart/form-data">

                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label hor-form">Name</label>
                        <div class="col-sm-10">
                            <input type="text" class="form-control" id="name" name="name" value="{{ $admin->user()->name }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label hor-form">Email</label>
                        <div class="col-sm-10">
                            <input type="email" class="form-control" id="inputEmail3" name="email"value="{{ $admin->user()->email }}">
                        </div>
                    </div>

                    <div class="form-group">
                        <label  class="col-sm-2 control-label hor-form">Avatar</label>
                        <div class="col-sm-10">
                            <label for="image" class="image_label">+</label>
                            <img id="img_prw" src="{{ url('images/admin/'.$admin->user()->image) }}" class="admin_img"/>
                            <input type="file" class="form-control hidden" id="image" name="image">
                        </div>
                    </div>


                    <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--//faq-->
    <!---->
    <div class="copy">
        <p> &copy; 2016 Minimal. All Rights Reserved | Design by <a href="http://w3layouts.com/" target="_blank">W3layouts</a></p>
    </div>
@stop

@section('script')
    <script>

        function readURL(input) {

            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#img_prw').attr('src', e.target.result);
                }

                reader.readAsDataURL(input.files[0]);
            }
        }

        $("#image").change(function(){
            readURL(this);
        });
    </script>
    @stop
