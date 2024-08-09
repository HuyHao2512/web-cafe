<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>The Coffee House</title>
        <link rel="stylesheet"  href="css/styles.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet"  href="css/css-index.css"/>
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>

</head>
<style>
    #coffee_story .page_header {
    margin: 32px 0 38px;
    }
    h1{
        text-align: center;
        color: #000;
        font-size: 24px;
        position: relative;
        margin-bottom: 8px;
        padding-bottom: 12px;
    }
    .title:after {
        position: absolute;
        content: '';
        width: 124px;
        height: 3px;
        left: calc(50% - 60px);
        bottom: 0;
        background: #E57905;
    }
    .page_content{
        margin-bottom: 32px;
        padding-right: 25%;
        padding-left: 25%;
    }
    .subtitle{
        font-size: 18pt;
        color: #E57905;
    }
    .subtitle a{
        color: #E57905;
        text-decoration: none;
    }
    .card{
        height: 20rem;
        margin: 8px;
        cursor: pointer;
    }
    /* .card:hover{
      cursor:pointer ;
    } */
    .card img{
        height: 50%;
    }
    .article{
    display: flex;
    flex-direction: row;
    flex-wrap: wrap;
    }
    
</style>
<body>
    @extends('layouts.header')
    @section('main')
    <div id="coffee_story">
        
            <div class="container">
                <H1 class="title" style="text-align: center;">Chuyện Nhà</H1>
                <div class="page_content">
                    <span style="font-size: 11pt;">
                        The Coffee House không chỉ là nơi thưởng thức cà phê, mà còn là điểm đến của những cảm xúc. Từ những buổi sáng bình minh đầy hi vọng đến những buổi chiều u buồn hay những cuộc hẹn ngọt ngào, mỗi ly cà phê ở đây đều chứa đựng những khoảnh khắc đầy cảm xúc và kỷ niệm.
                    </span>
                </div>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb subtitle">
                      <li class="breadcrumb-item"><a href="#">The Coffee House</a></li>
                      <li class="breadcrumb-item active " aria-current="page">Coffee Story</li>
                    </ol>
                  </nav>
                <div class="article">
                    
                    <div class="card" style="width: 18rem;">
                      <img src="https://file.hstatic.net/1000075078/article/1200x630_0b0081d93ba6479b934e04e71cbfd102_master.jpg" alt="...">
                      <div class="card-body">
                        <p class="card-text">CHỈ CHỌN CÀ PHÊ MỖI SÁNG NHƯNG CŨNG KHIẾN CUỘC SỐNG CỦA BẠN THÊM THÚ VỊ, TẠI SAO KHÔNG?</p>
                      </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                      <img src="https://file.hstatic.net/1000075078/article/thecoffeehouse_caphehighlight01_de40c0102a954c50a328f7befcdd82bd_master.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">BẮT GẶP SÀI GÒN XƯA TRONG MÓN UỐNG HIỆN ĐẠI CỦA GIỚI TRẺ</p>
                      </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                      <img src="https://file.hstatic.net/1000075078/article/img_4483_master.jpg" class="card-img-top" alt="...">
                      <div class="card-body">
                        <p class="card-text">NGHỆ THUẬT THƯỞNG THỨC CÀ PHÊ PHIN</p>
                      </div>
                    </div>  
                    <div class="card" style="width: 18rem;">
                        <img src="https://file.hstatic.net/1000075078/article/thecoffehouse_ca_phe_01_b4adbd88db6e4ca3b7c2c5934d1a1ed9_master.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <p class="card-text">CÁCH NHẬN BIẾT HƯƠNG VỊ CÀ PHÊ ROBUSTA NGUYÊN CHẤT DỄ DÀNG NHẤT</p>
                    </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                            <img src="https://file.hstatic.net/1000075078/article/_downloader.la_-61e6d5a3a5d26_7b6959cb5b1e4716a4a60869dae53074_master.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                              <p class="card-text">TẠI SAO CÀ PHÊ CÓ VỊ CHUA?
                            </p>
                        </div>
                    </div>
                    <div class="card" style="width: 18rem;">
                            <img src="https://file.hstatic.net/1000075078/article/blog_f80b599183c340bca744c174e7ab2af8_master.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                  <p class="card-text">ESPRESSO LÀ GÌ? CÁCH PHÂN BIỆT CÁC LOẠI ESPRESSO</p>
                            </div>
                    </div>
                  
                </div>
            </div>    

    </div>
        
    @endsection    
    

    
</body>
</html>