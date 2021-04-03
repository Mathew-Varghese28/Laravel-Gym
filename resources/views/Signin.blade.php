@extends("theme")


@section("content")
        
<body background="https://images.pexels.com/photos/4753987/pexels-photo-4753987.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-thumbnail"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

                </div>
                <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <h2 style="color: white;">
                        Sign In
                    </h2>
                    <table class="table table-borderless">
                        <tr>
                            <td><input type="text" class="form-control" placeholder="Username"></td>
                        </tr>
                        <tr>

                            <td><input type="password" class="form-control" placeholder="Password"></td>
                        </tr>
                        <tr>
                           <td> <center><button class="btn btn-success">Login</button></center></td>
                        </tr>
                    </table>
                </div>
            </div>
    </div>
</body>
@endsection