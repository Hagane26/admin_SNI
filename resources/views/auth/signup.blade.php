@extends('wrapper.layout')

@section('title','Sign Up')

@section('context')
    <div class="position-absolute top-50 start-50 translate-middle">
        <div class="card mb-3" style="width: 800px;">
            <div class="row m-0">
                <div class="col-md-4">
                    <img src="..." class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h3 class="card-title mb-5">Sign Up SNIShop</h3>
                        <form action="/signup-action" method="post">
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
                                    <div class="input-group">
                                        <input type="password" class="form-control" id="password" name="password" onchange="fcpass()">
                                        <div class="input-group-text" onclick="showpass()">
                                            <i class="bi bi-eye-slash" id="eye"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class=" row">
                                <label for="password" class="col-sm-3 col-form-label">Konfirmasi Password</label>
                                <div class="col-sm-7">
                                    <div class="input-group mt-2">
                                        <input type="password" class="form-control" id="password" name="cpassword" onchange="fcpass()">
                                        <div class="input-group-text" onclick="showpass()">
                                            <i class="bi bi-eye-slash" id="eye"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="mb-3 row">
                                <div class="col-sm-3">

                                </div>
                                <div class="col-sm-7">
                                    <span class="badge bg-danger visually-hidden" id="pe1">Password Tidak Sama</span>
                                    <span class="badge bg-danger visually-hidden" id="pe2">Password Kurang dari 8 Karakter</span>
                                </div>
                            </div>

                            <input type="submit" class="btn btn-primary ms-5" value="Create New Account">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('optional')
    <script>

        function fcpass(){
            var pass = document.getElementById('password');
            var cpass = document.getElementById('cpassword');
            var pe1 = document.getElementById('pe1');
            var pe2 = document.getElementById('pe2');
            var minpass = 8;

            if(pass.value != cpass.value){

                pe1.classList.remove('visually-hidden');
            }else{
                console.log("tidak");
                pe1.classList.add('visually-hidden');
            }
        }

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
