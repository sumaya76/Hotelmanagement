<div class="gallery">
   <div class="container">
      <div class="row">
         <div class="col-md-12">
            <div class="titlepage">
               <h2>Gallery</h2>
            </div>
         </div>
      </div>
      <div class="row">
         @foreach($gallary as $gallary)
         <div class="col-md-3 col-sm-6">
            <div class="gallery_img">
               <figure>
                  <img src="/gallary/{{$gallary->image}}" alt="#" style="width: 100%; height: 300px; object-fit: cover;"/>
               </figure>
            </div>
         </div>
         @endforeach
      </div>
   </div>
</div>
