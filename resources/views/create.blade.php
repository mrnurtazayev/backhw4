<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
</head>
<body>
    
    <form action="store"  method="post">
     <label for="name">name</label>
     <input type="text" name="name" value="">

     <label for="sname">sname</label>
     <input type="text" name="sname" value="">
     

     <input type="hidden" name="_token" value="{{csrf_token()}}">
     <label for="">Submit</label>
     <input type="submit" name="submit" value="">

    </form>    
</body>
</html>