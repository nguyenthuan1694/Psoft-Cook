@extends('frontend.layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('frontend/css/introduce.css') }}">
<section>
    <div class="section--default">
        <div class="c-carousel carousel--home" data-interval = "5000">
                <div class="c-carousel-item active">
                    <img src="{{ asset('frontend/images/banner1.jpg') }}" alt="">
                </div>
                <div class="c-carousel-item">
                    <img src="{{ asset('frontend/images/banner2.jpg') }}" alt="">
                </div>
                <div class="c-carousel-item">
                    <img src="{{ asset('frontend/images/banner3.jpg') }}" alt="">
                </div>
            <div class="c-carousel-indicators">
                <ul>
                    <li class="c-carousel-indicator-li active"></li>
                    <li class="c-carousel-indicator-li"></li>
                    <li class="c-carousel-indicator-li"></li>
                </ul>
            </div> 
        </div>
    </div>
</section>
<section>
    <div class="container">
        <div class="container section--default">
            <div class="row">
                <div class="mt-5">
                    <p class="text-center font-weight-bold text-uppercase" style="font-size: 25px; color: #f48120">Tầm nhìn</p>
                    <p>
                        <img class="img-about" style="width: 333px" src="{{ asset('frontend/images/title-1.png') }}" class="d-block" alt="...">
                    </p>
                    <p class="text-center">Cùng với sự phát triển của xã hội và thị trường công nghệ, Công ty Cổ phần công nghệ PSof đã, đang và sẽ nỗ lực không ngừng để trở thành đối tác uy tín đối với các nhà sản xuất Kỹ thuật số hàng đầu thế giới, đồng thời là điểm đến tin cậy của khách hàng Việt Nam.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="mt-5">
                    <p class="text-center font-weight-bold text-uppercase" style="font-size: 25px; color: #f48120">Sứ mệnh</p>
                    <p>
                        <img class="img-about" style="width: 333px" src="{{ asset('frontend/images/title-1.png') }}" class="d-block" alt="...">
                    </p>
                    <p class="text-center">Với mục tiêu mở rộng độ phủ cửa hàng trên toàn quốc, Công ty Cổ phần Bán lẻ Kỹ thuật số FPT hướng tới trở thành Hệ thống bán lẻ các sản phẩm Viễn thông Kỹ thuật số hàng đầu Việt Nam. Cùng với quy mô ngày càng lớn, FPT Shop sẽ cung cấp tới mọi tầng lớp khách hàng những trải nghiệm mua sắm tích cực, thông qua các sản phẩm Kỹ thuật số chính hãng chất lượng cao, giá cả cạnh tranh đi kèm dịch vụ chăm sóc khách hàng thân thiện, được đảm bảo bởi uy tín của doanh nghiệp.</p>
                </div>
            </div>
            <div class="row mt-5">
                <div class="mt-5">
                    <p class="text-center font-weight-bold text-uppercase" style="font-size: 25px; color: #f48120">Giá trị cốt lỗi</p>
                    <p>
                        <img class="img-about" style="width: 333px" src="{{ asset('frontend/images/title-1.png') }}" class="d-block" alt="...">
                    </p>
                    <p class="text-center">Chất lượng: Luôn đi đầu trong việc gây dựng uy tín, trách nhiệm để đảm bảo chất lượng sản phẩm, FPT Retail đem đến cho khách hàng sự an tâm tuyệt đối khi mua sắm các sản phẩm công nghệ.
Tin cậy: : Chữ “tín” chính là điều mà FPT Retail luôn chú trọng trong hoạt động phát triển thương hiệu, là điểm tựa niềm tin vững chắc cho khách hàng, là đối tác tin cậy với các hãng công nghệ.
Thân thiện: Hình ảnh FPT Retail thân thiện với khách hàng và tích cực trong các hoạt động cộng đồng chính là hướng đi lâu dài.
Chăm sóc: Với mục tiêu phục vụ khách hàng là ưu tiên số một, FPT Retail đang ngày càng hoàn thiện hơn chất lượng dịch vụ, đào tạo đội ngũ nhân viên nhiệt tình, trung thực, chân thành, làm hài lòng bất cứ khách hàng nào đến mua sắm.</p>
                </div>
            </div>
        </div>
    </div>
</section>
<section style="background-color: #eeeded8a">
    <div class="container section--default">
        <div class="row mt-5">
            <div class="mt-5">
                <p class="text-center font-weight-bold text-uppercase" style="font-size: 25px; color: #f48120">Giới thiệu chung</p>
                <p>
                    <img class="img-about" style="width: 333px" src="{{ asset('frontend/images/title-1.png') }}" class="d-block" alt="...">
                </p>
                <p>Công ty Cổ phần Bán lẻ Kỹ thuật số FPT (gọi tắt là FPT Retail) được thành lập từ năm 2012 tại Việt Nam, là một thành viên của Tập đoàn FPT, sở hữu 2 chuỗi bán lẻ là FPT Shop và F.Studio By FPT với tổng số cửa hàng là 500 trên khắp 63 tỉnh thành (tính đến tháng 4/2018).</p>
                <p>Hệ thống bán lẻ FPT Shop là chuỗi chuyên bán lẻ các sản phẩm kỹ thuật số di động bao gồm điện thoại di động, máy tính bảng, laptop, phụ kiện và dịch vụ công nghệ… FPT Shop là hệ thống bán lẻ đầu tiên ở Việt Nam đuợc cấp chứng chỉ ISO 9001:2000 về quản lý chất luợng theo tiêu chuẩn quốc tế. Hiện nay, FPT Shop là chuỗi bán lẻ lớn thứ 2 trên thị trường bán lẻ hàng công nghệ.</p>
                <p>Chuỗi cửa hàng F.Studio By FPT: Là chuỗi cửa hàng được ủy quyền chính thức của Apple tại Việt Nam ở cấp độ cao cấp nhất, chuyên kinh doanh các sản phẩm chính hãng của Apple. FPT Retail là công ty đầu tiên có chuỗi bán lẻ với đầy đủ mô hình cửa hàng của Apple bao gồm: Cấp 1 là APR (Apple Premium Reseller), cấp 2 AAR (Apple Authorised Reseller) và iCorner, mang đến cho khách hàng không gian tuyệt vời để trải nghiệm những sản phẩm công nghệ độc đáo, tinh tế của Apple cùng dịch vụ bán hàng và chất lượng chăm sóc khách hàng cao cấp và thân thiện nhất.</p>
                <p>Trong suốt nhiều năm qua, bằng những nỗ lực không mệt mỏi, trung thành với chính sách “tận tâm phục vụ khách hàng”, FPT Retail quyết tâm hoạt động, xây dựng phong cách phục vụ khách hàng cho tất cả các mảng kinh doanh dù mới hay cũ, lấy đó làm nền tảng tăng trưởng bền vững, hoàn thiện hình ảnh một thương hiệu gần gũi, thân thiện và hướng tới mục tiêu phục vụ khách hàng là ưu tiên hàng đầu .</p>
                <p>Luôn đặt khách hàng làm trung tâm trong mọi suy nghĩ và hành động, FPT Shop đã xây dựng được một đội ngũ nhân viên với phong cách làm việc chuyên nghiệp, nhiệt tình và tận tâm với khách hàng. Bên cạnh đó, chúng tôi đã, đang và sẽ tiếp tục xây dựng trung tâm kinh doanh trực tuyến hiện đại nhất để khách hàng có thể tìm thấy FPT Shop dễ dàng và nhanh nhất.</p>
                <p>Sự đầu tư nghiêm túc và nỗ lực không ngừng của FPT Retail đã được cộng đồng ghi nhận qua số lượt khách hàng đến tham quan mua sắm tăng mạnh và ổn định trong suốt nhiều năm qua. Sau 6 năm hoạt động, FPT Retail đã tạo dựng được niềm tin nơi Quý khách hàng khi là nhà bán lẻ đứng thứ 1 về thị phần máy tính xách tay tại Việt Nam (từ năm 2015 đến nay), đứng thứ 2 về thị phần điện thoại và là nhà bán lẻ Apple chính hãng hàng đầu tại Việt Nam với đầy đủ các chuẩn cửa hàng từ cấp độ cao nhất APR và là top 4 nhà bán lẻ hàng đầu Việt Nam.</p>
                <p>Kết thúc năm 2017, FPT Shop đạt doanh thu 13.147 tỉ đồng, lợi nhuận trước thuế đạt 363 tỉ đồng. Trong đó, doanh thu bán hàng trực tuyến đạt 2,034 tỉ đồng, tăng trưởng 68% so với năm 2016 và chiếm 15.47% tổng doanh thu của công ty.</p>
                <p>FPT Retail cũng vinh dự được nhận nhiều giải thưởng: Top 100 giải thưởng “Sản phẩm, dịch vụ uy tín chất lượng” do người tiêu dùng bình chọn (Hội Tiêu chuẩn và bảo vệ người tiêu dùng Việt Nam tổ chức), được vinh danh Thương hiệu mạnh Việt Nam liên tiếp trong 3 năm 2013, 2014, 2015  và năm 2017 (Thời báo Kinh tế Việt Nam tổ chức), Nhà bán lẻ được yêu thích nhất 2016 do Thời báo Kinh tế VN bình chọn. Tính đến tháng 7/2017, FPT Retail lọt vào Top 4 nhà bán lẻ hàng đầu ở Việt Nam, Top 500 nhà bán lẻ hàng đầu Châu Á – Thái Bình Dương (Retail Asia). Tháng 11/2017, FPT Retail đã lọt Top 10 nhà bán lẻ uy tín do Công ty cổ phần Báo cáo đánh giá VN (Vietnam Report) và báo điện tử Vietnamnet tiến hành khảo sát. Theo Euromonitor và Retail Asia Publishing, với doanh thu 15.717 USD / m2, FPT Retail là nhà bán lẻ hiệu quả nhất Việt Nam.</p>
            </div>
        </div>
    </div>
</section>
@endsection