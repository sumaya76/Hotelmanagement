<!DOCTYPE html>
<html>
  <head> 
    <base href="/public">
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
    .email{
            font-size: 30px;
            font-weight: bold;
        }
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
          <center>
            <h1 class="mail">Email send to {{$data->name}}</h1>
            <form action="{{url('mail',$data->id)}}" method="post" >
                    @csrf
                    <div class="space">
                        <label for="greeting">Greeting</label>
                        <input type="text" name="greeting">
                    </div>
                    <div class="space">
                        <label for="body">Email Body</label>
                        <textarea name="body"></textarea>
                    </div>
                    <div class="space">
                        <label for="action_Text">Action Text</label>
                        <input type="text" name="action_Text">
                    </div>
                    <div class="space">
                        <label for="action_url">Action Url</label>
                        <input type="text" name="action_url">
                    </div>
                    <div class="space">
                        <label for="end_line">End Line</label>
                        <input type="text" name="end_line">
                    </div>
                    
                    <div class="space">
                       
           <input class="btn btn-primary" type="submit" value="Send Email">
                       
                    </div>
                </form>
          </center>
        </div>
      </div>
    </div>

    @include('admin.footer')
  </body>
</html>
