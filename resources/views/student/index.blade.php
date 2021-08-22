<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All  Student</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="section">
        <div class="container">
            <div class="row">
                <h3 style="background:#D3D3D3;">home</h3>
                <div class="col-md-1" style="background:#D3D3D3; height:400px;">
    
                </div>
                <div class="col-md-11" >
                   
                    <div class="row">
                        @foreach ( $student as $item)
                        <div class="col-md-2" style="border: 1px solid green; margin-right:5px; ">
                        
                            
                            <td><img style="height: 120px; width:140px;  margin:10px 0 0 15px;" src="{{ asset('uploads/students/'.$item->profile_image)}}"/></td>
                            <td  >{{ $item->name  }}</td>
                            <td >
                                <a href="{{ url('edit-student/'.$item->id) }}" class="btn btn-primary btn-sm ">Edit</a>
                               
                            </td>
                            <td><form action="{{ url('delete-student/'.$item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm ">Delete</button>
                            </form></td>
                                
                            
                            
                        
                         
                            
                            
                        </div>  
                        @endforeach
                       
                    </div>
                    <a style="margin-top: 20px" href="/add-student" class="btn btn-primary">Add New</a>
                   
               
    
                    
                   
    
                
                  
    
                </div>
            </div>
        </div>
    </div>







 <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>