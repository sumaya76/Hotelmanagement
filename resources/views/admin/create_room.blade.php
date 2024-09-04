<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
        label{
            display: inline-block;
            width: 200px;
        }
        .space{
            padding-top: 20px;
        }
       .main_div{
        text-align: center;
       }
       .heading{
        font-size: xx-large;
        font-weight: 700;
       }
    </style>
  </head>
  <body>
  @include('admin.header')
  @include('admin.sidebar')
    
      <!-- Sidebar Navigation end-->
      <div class="page-content">
        <div class="page-header">
          <div class="container-fluid">
            <div class="main_div">
                <h1 class="heading">Add Rooms</h1>
                <form action="{{url('add_room')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="space">
                        <label for="room_title">Room Title</label>
                        <input type="text" name="title">
                    </div>
                    <div class="space">
                        <label for="description">Description</label>
                       <textarea name="description"></textarea>
                    </div>
                    <div class="space">
                        <label for="price">Price</label>
                        <input type="number" name="price">
                    </div>
                    <div class="space">
                        <label for="Room Type">Room Type</label>
                        <select name="type" >
                            <option selected value ="regular">Regular</option>
                            <option value="premium">Premium</option>
                            <option value="deluxe">Deluxe</option>
                        </select></select>
                    </div>
                    <div class="space">
                        <label for="Wifi">Wifi</label>
                        <select name="wifi" >
                           
                            <option selected value="yes">Yes</option>
                            <option value="no">No</option>
                        </select></select>
                    </div>
                    <div class="space">
                        <label for="image">Upload images</label>
                        <input type="file" name="image">
                       
                    </div>
                    <div class="space">
                       
           <input class="btn btn-primary" type="submit" value="Add Room">
                       
                    </div>
                </form>
            </div>
</div>
</div>
</div>
    @include('admin.footer')
  </body>
</html>