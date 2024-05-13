<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
         <div class="col-md-12">
             <div class="card">
                 <div class="card-header">
                     <h3>Update Author Details</h3>
                     
                 </div>
                 
                 <div class="card-body">
                     <form action="{{ route('author.update',['author'=>$data->id]) }}" method="post" class="form-group">
                         @csrf
                        @method('put')
                         <div>
                             <label for="name">Name :</label>
                             <input type="text" name="name" id="name" value={{ $data->name }}>
                         </div>
                         @if($errors->has('name'))
                         <p><strong class="text-danger">
                             
                             {{ $errors->first('name') }}
                         </strong></p>
                         @endif
                         <div>
                             <label for="email">Email :</label>
                             <input type="text" name="email" id="email" value={{$data->email }}>
                         </div>
                         @if($errors->has('email'))
                         <p><strong class="text-danger">
                             
                             {{ $errors->first('email') }}
                         </strong></p>
                         @endif
                         
                        <p>Status :</p>
                         <div>
                             
                             <label for="status">Active</label>
                             <input type="radio" name="status" id= "status" value=1 @if($data->status == true) checked @endif>
                             <label for="status1">InActive</label>
                             <input type="radio" name="status" id="status1" value=0 @if($data->status == false) checked @endif>
                         </div>
                         <div>
                             <label for="phone">phone :</label>
                             <input type="text" name="phone" id="phone" value={{$data->getProfile->phone}}>
                         </div>
                         @if($errors->has('phone'))
                         <p><strong class="text-danger">
                             
                             {{ $errors->first('phone') }}
                         </strong></p>
                         @endif
                             <div class="form-floating">
                                 <label for="floatingTextarea2">Address :</label>
                                 <textarea class="form-control" id="floatingTextarea2" style="height: 100px" name="address" >{{ $data->getProfile->address }}</textarea>
                               </div>
                               @if($errors->has('address'))
                         <p><strong class="text-danger">
                             
                             {{ $errors->first('address') }}
                         </strong></p>
                         @endif
                         <button type="submit" class="btn btn-success">Update</button> 
                         <a href="{{ route('author.index') }}" class="btn btn-info">close</a>
                     </form>
                 </div>
             </div>
         </div>
        </div>
     </div>
</body>
</html>