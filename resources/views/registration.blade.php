@extends("theme")


@section("content")
        
<body background="https://images.pexels.com/photos/4753987/pexels-photo-4753987.jpeg?auto=compress&cs=tinysrgb&dpr=1&w=500" class="img-thumbnail"  style="height: 100%; background-position: center; background-repeat: no-repeat; background-size: cover;">
    <div class="container">
            <div class="row">
                <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">

                </div>
                <div class="col col-12 col-sm-6 col-md-6 col-lg-6 col-xl-6 col-xxl-6">
                    <h1 style="color: white;"><center>Registration</center>
                        
                    </h1>
                    <table class="table table-borderless">
                        <tr>
                            <td style="color: white;">Name</td>
                            <td><input type="text" class="form-control" placeholder="Name"></td>
                        </tr>
                        <tr>
                            <td style="color: white;">Date Of Birth</td>
                            <td><input type="date" class="form-control" placeholder="Date Of Birth"></td>
                        </tr>
                        <tr>
                            <td style="color: white;">Age</td>
                            <td><input type="text" class="form-control" placeholder="Age"></td>
                        </tr>
                        <tr>
                            <td style="color: white;">Address</td>
                            <td><textarea id="w3review" class="form-control" name="Address" rows="4" cols="50" placeholder="Address"></textarea></td>
                        </tr>
                        <tr>
                            <td style="color: white;">User name</td>
                            <td><input type="text" class="form-control" placeholder="Username"></td>
                        </tr>
                        <tr>
                            <td style="color: white;">Password</td>
                            <td><input type="password" class="form-control" placeholder="Password"></td>
                        </tr>
                        <tr>
                            <td style="color: white;">Conform Password</td>
                            <td><input type="password" class="form-control" placeholder=" Conform Password"></td>
                        </tr>
                        <tr>
                           <td> <center><button class="btn btn-success">Register</button></center></td>
                        </tr>
                        <tr>
                            <td style="color: white;">
                                *The Addmission Fee of the Gym is Rs.1000<br>
                                *The Monthly Fee is Rs.500<br>
                                *The Monthly Fee Must remit before 5th day of the Month<br>
                            </td>
                        </tr>
                        
                    </table>
                </div>
            </div>
    </div>
</body>
@endsection