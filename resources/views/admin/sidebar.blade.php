<div class="d-flex align-items-stretch">
      <!-- Sidebar Navigation-->
      <nav id="sidebar">
        <!-- Sidebar Header-->
        <div class="sidebar-header d-flex align-items-center">
    <div class="lami" style="margin-right: 15px;">
        <img src="admin/img/lami.jpg" alt="lami" class="img-fluid rounded-circle">
    </div>
    <div class="title">
        <br>
        <h1 class="h5">Sumaya Akter</h1>
        <p>Web Developer</p>
    </div>
</div>
        <!-- Sidebar Navidation Menus--><span class="heading">Main</span>
        <ul class="list-unstyled">
                <li class="active"><a href="index.html"> <i class="icon-home"></i>Home </a></li>
                
                <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"> <i class="icon-windows"></i>Hotel Rooms </a>
                  <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                    <li><a href="{{url('create_room')}}">Add Rooms</a></li>
                    <li><a href="{{url('view_room')}}">View Rooms</a></li>
                  
                  </ul>
                </li>
                <li ><a href="{{url('bookings')}}"> <i class="icon-home"></i>Booking </a></li>
                <li ><a href="{{url('view_gallery')}}"> <i class="icon-home"></i>Gallery </a></li>
                <li ><a href="{{url('all_messages')}}"> <i class="icon-home"></i>Message</a></li>
               
      </nav>