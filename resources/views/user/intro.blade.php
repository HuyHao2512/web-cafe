<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <meta name="description" content="" />
            <meta name="author" content="" />
            <title>Giới thiệu</title>
            <link rel="stylesheet"  href="css/styles.css"/>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
            <link rel="stylesheet"  href="css/css-index.css"/>
            <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
            <link rel="icon" type="image/png" href="/template/images/icons/favicon.png"/>
</head>
<style>
    @media screen and (max-width: 1000px) {
        .article img{
            display: none;
        }
  }

    .article{
        text-align: center;
    }

    .article li{
        text-align: justify;
    }
    .article img{
        border-radius:10% ;
        height: 75%;
    width: 75%;
    }
</style>
<body>
    @extends('layouts.header')
    @section('main')
        
    
    <div class="container my-5">
        <div class="row">
            <h1 style="margin-bottom: 48px;">Chào mừng bạn đến với The Coffee House!</h1>
            <div class="col-lg-6">
                <h2>Về chúng tôi</h2>
                <p><i><b>The Coffee House</b></i>  ra đời với sứ mệnh tạo ra những khoảnh khắc đặc biệt cho khách hàng. Từ việc chọn lọc cẩn thận nguồn nguyên liệu cho đến quy trình rang xay cà phê, mỗi bước trong quá trình sản xuất đều được thực hiện với tình yêu và tâm huyết. Chúng tôi tự hào về việc mang lại cho khách hàng những ly cà phê thơm ngon, đậm đà và đầy đủ hương vị.</p>
                <!-- <p>Không chỉ là điểm đến lý tưởng cho những người yêu cà phê, The Coffee House còn là nơi gặp gỡ bạn bè, làm việc hoặc thư giãn sau một ngày làm việc căng thẳng. Với không gian trang trí tinh tế và ấm cúng, khách hàng có thể tận hưởng không gian riêng tư hoặc tham gia vào các buổi gặp gỡ cộng đồng</p> -->
                <p>Mỗi chi nhánh của The Coffee House đều được thiết kế độc đáo, phản ánh sự đa dạng và sự phong phú của văn hóa cà phê. Từ không gian mở rộng với ánh sáng tự nhiên cho đến các khu vườn xanh mướt, mỗi chi nhánh đều mang đến một trải nghiệm độc đáo và tuyệt vời.</p>
                <p>Bên cạnh đó, The Coffee House cũng không ngừng cải tiến và đổi mới để đáp ứng nhu cầu của khách hàng. Chúng tôi không chỉ cung cấp các loại cà phê truyền thống mà còn đầu tư vào việc phát triển các sản phẩm mới, từ các loại đồ uống đặc biệt đến thực đơn phong phú của quán.</p>  
            </div>
            <div class="col-lg-6">
                <img src="https://hrv.hstatic.net/s_1000266602/_creme-brulee.png" alt="The Coffee House" class="img-fluid">
            </div>
            <div class="col-lg-12 article">
                <h1 style="margin-top: 48px; margin-bottom: 48px;">Sứ mệnh của chúng tôi</h2>
                <ol>
                    <div class="row">
                        <div class="col-lg-6">
                            <li><strong>Mang lại trải nghiệm cà phê đẳng cấp:</strong> The Coffee House cam kết mang lại cho
                                khách hàng những trải nghiệm cà phê đẳng cấp nhất. Từ việc chọn lọc cẩn thận nguồn nguyên liệu
                                đến quá trình rang xay cầu kỳ, chúng tôi luôn đảm bảo mỗi ly cà phê có hương vị tuyệt vời
                                nhất.</li>
                            </div>
                            <div class="col-lg-6">
                                <img src="https://file.hstatic.net/1000075078/file/photo_2021-11-25_09-31-52_52c6f13fcc06433db2362281059d1c09.jpg" alt="">
                            </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <img src="https://file.hstatic.net/1000075078/article/thecoffeehouse_caphe_2_aacf152c62064c40ab804a66ffc706d1_master.jpg" alt="">
                        </div>
                        <div class="col-lg-6">
                            <li><strong>Tạo ra không gian gặp gỡ và kết nối:</strong> The Coffee House không chỉ là nơi để
                                thưởng thức cà phê mà còn là một điểm đến lý tưởng để gặp gỡ và kết nối với người khác. Chúng
                                tôi tạo ra một môi trường ấm áp và thoải mái, nơi mọi người có thể chia sẻ, trò chuyện và tạo
                                ra những kỷ niệm đáng nhớ.</li>
                        </div>

                    </div>
                   <div class="row">
                    <div class="col-lg-6">
                        <li><strong>Hỗ trợ và phát triển cộng đồng:</strong> The Coffee House cam kết hỗ trợ và phát triển cộng đồng địa phương. Chúng tôi thúc đẩy các hoạt động từ thiện, đóng góp vào việc xây dựng cộng đồng mạnh mẽ và bền vững. Chúng tôi cũng tạo ra cơ hội việc làm và phát triển cho các nhà cung cấp địa phương, từ việc mua nguyên liệu đến việc hợp tác với các nhà sản xuất địa phương.</li>
                    </div>
                    <div class="col-lg-6" >
                        <img style="background-color: antiquewhite;" src="https://file.hstatic.net/1000075078/file/thinh_93cf92a5395043a2b634af4de08c0163.png" alt="">
                    </div>
                   </div>
                    
                  
                </ol>
               
               
            </div>
            <div class="col-lg-12 history">
                <h1 style="margin-top: -48px; margin-bottom: 24px;">Lịch sử phát triển của The Coffee House</h2>
                <h5>Năm 2014: Sự Khởi Đầu
                </h5>
                <p> <b>The Coffee House được thành lập vào năm 2014</b>  tại thành phố Hồ Chí Minh, Việt Nam. Với sứ mệnh mang lại trải nghiệm cà phê độc đáo và thoải mái, The Coffee House nhanh chóng thu hút sự chú ý của khách hàng với không gian ấm áp và cà phê ngon tuyệt vời.</p>
                <h5>Năm 2015: Mở Rộng Chi Nhánh</h5>
                <p>Sau một năm thành công ban đầu, <b>The Coffee House mở rộng hệ thống chi nhánh</b> của mình sang các thành phố lớn khác ở Việt Nam như Hà Nội, Đà Nẵng, và Cần Thơ. Sự phát triển nhanh chóng của The Coffee House chứng tỏ sức hút của thương hiệu trong lòng người tiêu dùng.</p>
                <h5>Năm 2017: Mở Rộng Quốc Tế</h5>
                <p>Với sự thành công tại Việt Nam, <b>The Coffee House bắt đầu mở rộng thị trường</b> sang các quốc gia khác trong khu vực và quốc tế. Sự ra đời của các chi nhánh quốc tế cũng là bước đi quan trọng trong việc đưa thương hiệu The Coffee House ra ngoài biên giới quốc gia.                </p>
                <h5>Năm 2020: Phát Triển Bền Vững  </h5>
                <p>Với cam kết về phát triển bền vững, The Coffee House thúc đẩy các <b>hoạt động xã hội và môi trường</b> như giảm lượng rác thải và hỗ trợ cộng đồng địa phương. Chương trình này phản ánh cam kết của The Coffee House đối với trách nhiệm xã hội và bảo vệ môi trường.</p>
                <h5>Năm 2022: Khẳng Định Thương Hiệu </h5>
                <p>Với hơn một thập kỷ phát triển, The Coffee House đã khẳng định vị thế của mình là <b>một trong những thương hiệu cà phê hàng đầu tại Việt Nam và khu vực</b>. Sứ mệnh mang lại trải nghiệm cà phê đẳng cấp, tạo ra không gian gặp gỡ và kết nối, cùng với việc hỗ trợ và phát triển cộng đồng, đã giúp The Coffee House thành công và tiếp tục phát triển trong tương lai.                </p>
            </div>
        </div>
    </div>
    @endsection
</html>