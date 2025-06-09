@extends('wrapper.layout')

@section('title','Sign In Snishop')

@section('context')
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card mb-3" style="width: 700px;">
            <div class="row m-0">
                <div class="col-md-4">
                    <img src="{{ config('app.url') }}:8000/imgs/logo-1.png" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title mb-5">Sign In MinShop</h3>
                        <form action="/signin-action" method="post">
                            @csrf
                            <div class="mb-3 row">
                                <label for="email" class="col-sm-3 col-form-label">Email</label>
                                <div class="col-sm-7">
                                    <input type="email" class="form-control" id="email" name="email">
                                </div>
                            </div>
                            <div class="mb-3 row">
                                <label for="password" class="col-sm-3 col-form-label">Password</label>
                                <div class="col-sm-7">
                                    <div class="input-group mb-3">
                                        <input type="password" class="form-control" id="password" name="password">
                                        <div class="input-group-text" onclick="showpass()">
                                            <i class="bi bi-eye-slash" id="eye"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary ms-5" value="Go Login!">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('optional')
    <script>
        function showpass(){
            var pass_box = document.getElementById('password');
            var eye = document.getElementById('eye')
            if(pass_box.type == "password"){
                pass_box.type = "text";
                eye.classList.remove("bi-eye-slash");
                eye.classList.add("bi-eye");
            }else{
                pass_box.type = "password";
                eye.classList.remove("bi-eye");
                eye.classList.add("bi-eye-slash");
            }
        }
    </script>
@endsection
