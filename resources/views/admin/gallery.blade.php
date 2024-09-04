<!DOCTYPE html>
<html>
  <head> 
    @include('admin.css')
    <style>
    /* Container for the gallery images */
    .gallery-row {
        display: flex;
        flex-wrap: wrap;
        justify-content: space-around;
        margin: 20px 0;
    }

    /* Style for each gallery image container */
    .gallery-item {
        flex: 0 0 30%; /* 30% width for 3 images per row */
        margin-bottom: 20px;
    }

    .gallery-item img {
        width: 100%;
        height: 300px; /* Fixed height */
        object-fit: cover; /* Ensures the image covers the area without distortion */
        border-radius: 5px;
        margin-bottom: 20px;
    }
    

    @media (max-width: 768px) {
        .gallery-item {
            flex: 0 0 45%; /* Adjust to 2 images per row on smaller screens */
            margin-bottom: 15px;
        }
    }

    @media (max-width: 480px) {
        .gallery-item {
            flex: 0 0 100%; /* 1 image per row on very small screens */
            margin-bottom: 10px;
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
          <h1 style="font-size: 40px; font-weight: bolder; color:white;">Gallery</h1>
          <div class="gallery-row">
            @foreach($gallary as $gallary)
              <div class="gallery-item">
                <img src="/gallary/{{$gallary->image}}" alt="image">
                <a class="btn btn-success" href="{{url('delete_gallary',$gallary->id)}}">Delete Image</a>
              </div>
            @endforeach
          </div>
         
          <center>
            <form action="{{url('upload_gallary')}}" method="post" enctype="multipart/form-data">
              @csrf
              <div style="padding: 30px;">
                <label for="">Upload Image </label>
                <input type="file" name="image">
              </div>
              <div>
                <input class="btn btn-danger" type="submit" value="Add Image">
              </div>
            </form>
          </center>
        </div>
      </div>
    </div>

    @include('admin.footer')
  </body>
</html>
