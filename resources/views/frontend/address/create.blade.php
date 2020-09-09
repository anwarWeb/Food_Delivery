</<!DOCTYPE html>
<html>
<head>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
   
</head>
<body>

<h1>Add Address</h1>

<div class="container">

<form method="POST" action="{{route('address.store')}}">

        {{ csrf_field() }}

        <div>
          <label >User_id</label>
          <input type="text" name="user_id" placeholder="user_id">
  
        </div>
  

       <div>
          <label >Address1</label>
          <input type="text" name="address" placeholder="Address">

      </div>
      <div>
        <label >Address2</label>
        <input type="text" name="address2" placeholder="Address">

      </div>

      <div>
        <label >City</label>
        <input type="text" name="city" placeholder="city">

      </div>
      <div>
        <label >State</label>
        <input type="text" name="state" placeholder="state">

      </div>
      <div>
        <label >Country</label>
        <input type="text" name="country" placeholder="Country">

      </div>

      <div>
        <label >Zip</label>
        <input type="text" name="zip" placeholder="zip">

      </div>
      
      <div>

            <input type="submit" value="Submit">

      </div>

    </form>  

 </div>   

</body>
</html>