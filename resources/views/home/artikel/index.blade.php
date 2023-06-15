<div class="bg-light bg-gradient">
    <div class="container mt-2">
      <div class="text-center py-3">
        <h4>Berita Hari Ini</h4><hr/>
      </div> 
  
      <div class="row">
  
        @for ($i = 1; $i <= 12 ; $i++)
            
      
        <div class="col-md-3 my-3">
          <div class="card shadow-sm">
            <div class="wrapper-card-berita">
              <img src="/img/sekolah.jpg" class="img-card-berita" alt="">
            </div>
            <div class="p-3">
              <a href="" class="text-decoration-none"><h5>Camping</h5></a>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe debitis rem corrupti placeat earum minima?</p>
              <a href="" class="text-decoration-none">Selengkapnya &RightArrow;</a>
            </div>
          </div>
        </div>
        @endfor
      </div>
    </div><br/>
  </div>