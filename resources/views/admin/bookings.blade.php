<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <!-- Add Font Awesome CDN link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    
    <style>
    /* Table Design */
    .table_design {
        border-collapse: collapse;
        margin: 40px auto;
        width: 80%;
        background-color: #f9f9f9;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        text-align: center;
    }

    .table_design th, .table_design td {
        padding: 15px;
        border: 2px solid white;
    }

    .th_design {
        background-color: #87ceeb;
        color: white;
        font-weight: bold;
    }

    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #f5f5f5;
    }

    /* Button Styles */
    .btn-success {
        background-color: #28a745;
        border-color: #28a745;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-success:hover {
        background-color: #218838;
        border-color: #1e7e34;
    }

    .btn-primary {
        background-color: #007bff;
        border-color: #007bff;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-primary:hover {
        background-color: #0069d9;
        border-color: #0062cc;
    }

    .btn-danger {
        background-color: #dc3545;
        border-color: #dc3545;
        color: white;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s ease;
    }

    .btn-danger:hover {
        background-color: #c82333;
        border-color: #bd2130;
    }

    /* Image Styling */
    img {
        border-radius: 5px;
        transition: transform 0.3s ease;
    }

    img:hover {
        transform: scale(1.1);
    }

    </style>
  </head>
  <body>
    @include('admin.header')
    @include('admin.sidebar')
    
    <div class="page-content">
      <div class="page-header">
        <div class="container-fluid">
          <table class="table_design">
            <tr>
              <th class="th_design">Room_id</th>
              <th class="th_design">Customer name</th>
              <th class="th_design">Email</th>
              <th class="th_design">Phone</th>
              <th class="th_design">Arrival Date</th>
              <th class="th_design">Leaving Date</th>
              <th class="th_design">Status</th>
              <th class="th_design">Room Title</th>
              <th class="th_design">Price</th>
              <th class="th_design">Room image</th>
              <th class="th_design">Delete</th>
              <th class="th_design">Status Update</th>
            </tr>
            @foreach($data as $data)
            <tr>
              <td>{{$data->room_id}}</td>
              <td>{{$data->name}}</td>
              <td>{{$data->email}}</td>
              <td>{{$data->phone}}</td>
              <td>{{$data->start_date}}</td>
              <td>{{$data->end_date}}</td>
              <td>
            
              @if($data->status=='approve')
                <span style="color:#0062cc;"> Approved</span>
              @endif
              @if($data->status=='reject')
                <span style="color:#c82333;"> Rejected</span>
              @endif
              @if($data->status=='waiting')
                <span style="color:chocolate;"> Waiting</span>
              @endif
              </td>
              <td>{{$data->room->room_title}}</td>
              <td>{{$data->room->price}}</td>
              <td><img width="100" height="50" src="/room/{{$data->room->image}}" alt="Room Image"></td>
              <td>
                <a onclick="return confirm('Are you sure you want to delete?')" href="{{ url('delete_booking', $data->id) }}" class="btn btn-danger" role="button" title="Delete Booking">
                  <i class="fa-solid fa-trash"></i>
                </a>
              </td>
              <td>
                <a class="btn btn-success" href="{{url('approve_booking',$data->id)}}">Approved</a>
                <a class="btn btn-primary" href="{{url('reject_booking',$data->id)}}">Rejected</a>
              </td>
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>

    @include('admin.footer')
  </body>
</html>
