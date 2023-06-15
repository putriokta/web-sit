<div class="bg-light bg-gradient">
    <div class="container mt-2">
        <div class="text-center py-3">
            <h4>Galeri Kami</h4><hr/>
        </div> 
  
        <div class="row">
  
            @for ($i = 1; $i <= 12 ; $i++)
                
        
            <div class="col-md-3 my-3">
                <div class="card shadow-sm">
                    <div class="wrapper-card-berita">
                        <img src="/img/sekolah.jpg" class="img-card-berita" alt="">
                    </div>
                    <div class="p-3">
                        <h5>Camping</h5>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe debitis rem corrupti placeat earum minima?</p>
                    </div>
                </div>
            </div>
            @endfor
        </div>
    </div><br/>
  </div>