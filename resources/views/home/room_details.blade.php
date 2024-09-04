<!DOCTYPE html>
<html lang="en">
<head>
   <base href="/public">
   @include('home.css')
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   <style>
      .room_img {
         padding: 20px;
      }
      label {
         display: inline-block;
         width: 200px;
      }
      input {
         width: 100%;
         margin-bottom: 15px;
         padding: 8px;
         box-sizing: border-box;
      }
      .h1_book {
         font-size: 30px;
         font-weight: 600;
         text-align: center;
         margin-bottom: 20px;
      }
   </style>
</head>
<!-- body -->
<body class="main-layout">
   <!-- loader  -->
   <div class="loader_bg">
      <div class="loader"><img src="images/loading.gif" alt="#"/></div>
   </div>
   <!-- end loader -->
   <!-- header -->
   <header>
      @include('home.header')
   </header>
   <div class="our_room">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="titlepage">
                  <h2>Our Room</h2>
                  <p>Lorem Ipsum available, but the majority have suffered </p>
               </div>
            </div>
         </div>
         <div class="row">
            <!-- Room details -->
            <div class="col-md-8">
               <div id="serv_hover" class="room">
                  <div class="room_img">
                     <figure><img style="height: 300px; width: 800px;" src="/room/{{$room->image}}" alt="#"/></figure>
                  </div>
                  <div class="bed_room">
                     <h2>{{$room->room_title}}</h2>
                     <p style="padding: 12px;">{{$room->description}}</p>
                     <h4>Free Wifi: {{$room->wifi}}</h4>
                     <h4>Room Type: {{$room->room_type}}</h4>
                     <h3>Price: {{$room->price}} $</h3>
                  </div>
               </div>
            </div>

            <!-- Book Room Form -->
            <div class="col-md-4">
               <form action="{{url('add_booking', $room->id)}}" method="post">
                  @csrf
                  <h1 class="h1_book">Book Room</h1>
                  <div>
                     @if(session()->has ('message'))
                   <div class="alert alert-success">
                     <button type="button" class="close" data-bs-dismiss="alert">X</button>
                   {{session()->get('message')}}
                   </div>
                     @endif
                  </div>
                  @if($errors)
                     @foreach($errors->all() as $error)
                        <li style="color: red;">{{$error}}</li>
                     @endforeach
                  @endif
                  <div>
                     <label for="name">Name</label>
                     <input type="text" name="name" value="{{ Auth::id() ? Auth::user()->name : '' }}" placeholder="Enter your name" required>
                  </div>
                  <div>
                     <label for="email">Email</label>
                     <input type="email" name="email" value="{{ Auth::id() ? Auth::user()->email : '' }}" placeholder="Enter your email" required>
                  </div>
                  <div>
                     <label for="phone">Phone</label>
                     <input type="number" name="phone" value="{{ Auth::id() ? Auth::user()->Phone : '' }}" placeholder="Enter your phone number" required>
                  </div>
                  <div>
                     <label for="startDate">Start Date</label>
                     <input type="date" name="startDate" id="startDate" required>
                  </div>
                  <div>
                     <label for="endDate">End Date</label>
                     <input type="date" name="endDate" id="endDate" required>
                  </div>
                  <div style="padding-top: 20px;">
                     <input type="submit" class="btn btn-danger" value="Book Room">
                  </div>
               </form>
            </div>
         </div>
      </div>
   </div>

   <!-- footer -->
   @include('home.footer')
   <!-- end footer -->
   <!-- Javascript files -->
   <script src="js/jquery.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <!-- sidebar -->
   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
   <script type="text/javascript">
      $(function() {
         var dtToday = new Date();
         var month = dtToday.getMonth() + 1;
         var day = dtToday.getDate();
         var year = dtToday.getFullYear();
         if (month < 10)
            month = '0' + month.toString();
         if (day < 10)
            day = '0' + day.toString();
         var maxDate = year + '-' + month + '-' + day;
         $('#startDate').attr('min', maxDate);
         $('#endDate').attr('min', maxDate);
      });
   </script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js" integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+" crossorigin="anonymous"></script>
</body>
</html>
