<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
    /* General Table Design */
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
        text-transform: uppercase;
    }

    /* Table Row Styling */
    tr:nth-child(even) {
        background-color: #f2f2f2;
    }

    tr:hover {
        background-color: #e1e1e1;
    }

    /* Button Styles */
    .btn-success, .btn-danger {
        padding: 8px 15px;
        border-radius: 5px;
        color: white;
        text-decoration: none;
        transition: background-color 0.3s ease;
        display: inline-block;
        font-size: 14px;
    }

    .btn-success {
        background-color: #28a745;
    }

    .btn-success:hover {
        background-color: #218838;
    }

    .btn-danger {
        background-color: #dc3545;
    }

    .btn-danger:hover {
        background-color: #c82333;
    }

    /* Image Styling */
    img {
        border-radius: 5px;
        transition: transform 0.3s ease;
    }

    img:hover {
        transform: scale(1.1);
    }

    /* Responsive Design */
    @media (max-width: 768px) {
        .table_design {
            width: 100%;
            font-size: 12px;
        }

        .btn-success, .btn-danger {
            padding: 5px 10px;
            font-size: 12px;
        }
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
              <th class="th_design">Name</th>
              <th class="th_design">Email</th>
              <th class="th_design">Phone</th>
              <th class="th_design">Message</th>
              <th class="th_design">Send Email</th>
             
            </tr>
            @foreach($data as $data)
            <tr>
              <td>{{$data->name}}</td>
           
              <td>{{$data->email}}</td>
              <td>{{$data->phone}}</td>
              <td>{{$data->message}}</td>
              <td><a class="btn btn-success" href="{{url('send_email' ,$data->id)}}">Send Email</a></td>
              
            </tr>
            @endforeach
          </table>
        </div>
      </div>
    </div>

    @include('admin.footer')
  </body>
</html>
