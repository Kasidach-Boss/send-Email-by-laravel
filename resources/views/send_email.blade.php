<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Send Email Form</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-GJzZqFGwb1QTTN6wy59ffF1BuGJpLSa9DkKMp0DgiMDm4iYMj70gZWKYbI706tWS" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  

</head>

<body> 
    <div class="container">
  
   <div class="card">
    <div class="card-header">
            <center><h1>Send an Email in Laravel</h1></center><br>
            <center><h2>Make by Kasidach Sangthong</h2></center><br>
            <center><h3>Student ID:: 6135512045</h3></center>
    </div>
            @if (count($errors) > 0)
            <div class="alert alert-danger">
            <button type="button" class="close" data-dismiss="alert">×</button>
            <ul>
            @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
            @endforeach
            </ul>
            </div>
        @endif
        @if ($message = Session::get('success'))
        <div class="alert alert-success alert-block">
            <button type="button" class="close" data-dismiss="alert">×</button>
                <h6><strong>{{ $message }}</strong><h6>
        </div>
   @endif
    <div class="card-body">
    <form method="post" action="{{url('sendemail/send')}}">
            {{ csrf_field()}}
            <div class="form-group">
                <label for=""><strong><h4>Enter Your Reciever Name</h4></stong></label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><stong><h4>Enter Your Reciever Email</h4></stong></label>
                <input type="text" name="targetemail" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><stong><h4>Enter Your Subject</h4></stong></label>
                <input type="text" name="subject" class="form-control">
            </div>
            <div class="form-group">
                <label for=""><stong><h4>Enter Your Message</h4></stong></label>
                <textarea type="text" name="message" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <input type="submit" name="send" class="btn btn-info" value="Send" style="font-size:25px; width:10%; " />
            </div>
        
        </form>
        </div>
   </div>
   
   
       
    </div>
</body>
</html>