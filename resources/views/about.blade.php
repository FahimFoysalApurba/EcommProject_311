<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="{{asset('cssfile/header.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BK.com</title>
</head>
<body>
    <nav>
        <label class="logo">BK.com</label>
        <ul>
            <li>
                <Form action="#" method="Post"><input type="text" name="search" placeholder="Search your item"> 
                <button type="submit">Search</button>
                </Form></li>

            <li><a href="/entry">Home</a></li>
            <li><a href="/contact">Contact</a></li> 
            <li><a class="active" href="#">About</a></li>  
           
                
            
        </ul>
    </nav>

    {{View::make('footer')}}
    
    </body>
</html>