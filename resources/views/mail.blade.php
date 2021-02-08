
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Send Email Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>    

</head>
<body>
    <div class="container" >
        @if(count($errors) >0)
        <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss ="alert">x</button>
            <ul>
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <div class="jumbotron">
            <div class ="row">
                <div class="col">
                    <div class ="card " >
                        <div class="card-header">
                            <center><h1>Send an Email in Laravel</h1></center><br>
                            <center><h2>Make by Kasidach Sangthong</h2></center><br>
                            <center><h3>Student ID:: 6135512045</h3></center>
                        </div>
                        <!-- <div class="alert alert-success">
                        <p>Thanks for join us</p>
                        </div> -->
                            <div class="card-body">
                                <form method="POST" action="{{url('mail/send')}}">
                                    @csrf
                                    <div class="form-group">
                                        <label ><b> From</b></label>
                                        <input type="text" require name="from" value="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Enter Reciever Name</label>
                                        <input type="text" require name="from" value="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Enter Reciever Email</label>
                                        <input type="email" require name="from" value="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Enter Your Subject</label>
                                        <input type="text" require name="from" value="" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label >Enter Your Message</label>
                                        <textarea name="message" id="" cols="30" rows="10"></textarea>
                                    </div>
                                    <div class="form-group">
                                        <input type="submit" name="send" class="btn btn-info" value="Send" />
                                    </div>
                                </form>
                            
                            </div>
                    </div>
                </div>
            
            </div>

        </div>
    </div>
</body>
</html>