<html lang="en"> 
    <head>
        <meta  charset="UTF-8"/>
        <title>Laravel_slug</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    </head>
    <body>
        <form action="../posts" method="POST" class="col-md-8  col-md-offset-2">
            {{ csrf_field() }}
            <legend>form title</legend>
            <div class="form-group">
                <label for="title">Title</label>
                <input type="title" class="form-control" name="title" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="body">Body</label>
                <input type="body" class="form-control" name="body" value="{{old('body')}}">
            </div>
            <button type="submit" class="btn btn-primary">submit</button>
            
        </form>
    </body>
</html>