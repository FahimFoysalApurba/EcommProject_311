<!-- <h1>This is user's Dashboard</h1>
<br>
<h2>user id, {{session('user')}}</h2> -->
{{View::make('HeadUserDash')}}
<!DOCTYPE html>
<html lang="en">
<head>
  <link rel="stylesheet" href="{{asset('cssfile/display/DisplayProduct.css')}}">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BK.com</title>
</head>
<body>
   

  <div class="display">
  
   
  @foreach($products as $product)

  @if($product["availible_status"]=="availible")


   
  <div class="item-pro">

  <div class="content">

  <a href="detail/{{$product['id']}}">
   <h3>{{$product["name"]}}</h3>
   <img src="{{asset('uploads/products/'.$product->image)}}"  alt="Image"> 
   <h4>Catagory: {{$product["catagory"]}}</h4>
   <h4>Current Status: {{$product["availible_status"]}}</h4>
   <p>{{"description: ".$product["description"]}}</p>
   <h5>{{$product["price"]." taka"}}</h5>
   <button class="cart">Add To Cart</button>
   </a>

   </div>
   </div>
   
   @endif

  @endforeach
  
   
</div>
</body>
</html>
