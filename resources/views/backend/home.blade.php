<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <title>Project2</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

    </head>
<body>
    <div class="container">
        <div class="row">
            {{ Session::get('message') }}
        </div><br/>
        <div class="row">
            <button class="btn btn-default">
                <a href="{{url('/dashboard/home')}}">Home</a>
            </button>
            <button class="btn btn-default"><a href="{{url('/dashboard/mission')}}">Mission</a></button>
            <button class="btn btn-default"><a href="{{url('/dashboard/vision')}}">Vision</a></button>
        </div>

        <div class="row">
            <h3>Home</h3>
        </div>
        <div class="row">
            <form class="" action="/dashboard/{{$home->title}}" method="POST">

                <div class="form-group">
                    <h5>Heading</h5>
                    <input type="text" name="heading" value="{{$home->heading}}" placeholder="Heading..."><br/>
                </div>
                <div class="form-group">
                    <label for="description">Description:</label>
                    <textarea class="form-control" rows="8" name="description">{{$home->description}}</textarea>
                </div>
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <button type="submit" class="btn btn-primary">Update</button>
                <button class="btn btn-success">Back</button>

            </form>
        </div>
    </div>


</body>
</html>