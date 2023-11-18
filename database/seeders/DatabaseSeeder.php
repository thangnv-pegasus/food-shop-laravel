<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\AboutMe;
use App\Models\Banner;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


        AboutMe::truncate();
        Banner::truncate();
        Product::truncate();

        $arrBanner = [
            [
                'title' => 'Rau quả tươi',
                'content' => 'Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các chị',
                'backgroundImage' => 'https://bizweb.dktcdn.net/100/350/980/themes/802125/assets/col_1.png?1677439224289',
                'backgroundColor' => '#59cca6'

            ],
            [
                'title' => 'Sinh tố hoa quả',
                'content' => 'Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các chị',
                'backgroundImage' => 'https://bizweb.dktcdn.net/100/350/980/themes/802125/assets/col_2.png?1677439224289',
                'backgroundColor' => '#91ad41'

            ],
            [
                'title' => 'Thực phẩm tươi',
                'content' => 'Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các chị',
                'backgroundImage' => 'https://bizweb.dktcdn.net/100/350/980/themes/802125/assets/col_3.png?1677439224289',
                'backgroundColor' => '#e3b375'

            ],
            [
                'title' => 'Hoa quả tươi mát',
                'content' => 'Chúng tôi cam kết 100% các sản phẩm có nguồn gốc xuất xứ rõ ràng, sạch, an toàn và đảm bảo chất lượng ngon nhất giao đến tận tay người tiêu dùng, để san sẻ sự vất vả của các mẹ, các chị',
                'backgroundImage' => 'https://bizweb.dktcdn.net/100/350/980/themes/802125/assets/col_4.png?1677439224289',
                'backgroundColor' => '#ef7f94'

            ]
        ];

        $arrAboutme = [
            [
                'title' => 'Trang trại hữu cơ',
                'content' => 'Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất',
                'imageUrl' => 'https://bizweb.dktcdn.net/100/350/980/themes/802125/assets/icon_uti_1.png?1677439224289'
            ],
            [
                'title' => 'Thực phẩm sạch',
                'content' => 'Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất',
                'imageUrl' => 'https://bizweb.dktcdn.net/100/350/980/themes/802125/assets/icon_uti_2.png?1677439224289'
            ],
            [
                'title' => 'An toàn sinh học',
                'content' => 'Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất',
                'imageUrl' => 'https://bizweb.dktcdn.net/100/350/980/themes/802125/assets/icon_uti_3.png?1677439224289'
            ],
            [
                'title' => 'Đa dạng sinh học',
                'content' => 'Cung cấp 100% thực phẩm sạch đảm bảo an toàn và ngon nhất',
                'imageUrl' => 'https://bizweb.dktcdn.net/100/350/980/themes/802125/assets/icon_uti_4.png?1677439224289'
            ]
        ];

        $arrProducts = [
            [
                "id" => 1,
                'name' => "Chanh tươi",
                'price' => 45000,
                'price_sale' => 30000,
                'brand' => "Đang cập nhật",
                'origin' => "Việt Nam",
                'weigh' => 1,
                'description' => "Các chuyên gia dinh dưỡng khuyên rằng mỗi ngày bạn hãy uống 1 ly nước chanh tươi ấm pha với mật ong để không ngừng nâng cao sức đề kháng, tăng cường hệ thống miễn dịch và bảo vệ sức khỏe",
                'detail' => "<p>Với tính năng đa tác dụng và hiệu quả vượt trội trong cuộc sống hàng ngày, chanh tươi từ lâu đã trở thành thực phẩm quen thuộc trong tủ lạnh nhiều gia đình. Bên cạnh khả năng góp phần giúp chị em làm đẹp, phát huy công dụng trong nhà bếp, vệ sinh nhà cửa, chanh tươi còn có rất nhiều lợi ích đối với sức khỏe mà không phải ai cũng biết.</p><p>Các chuyên gia dinh dưỡng khuyên rằng mỗi ngày bạn hãy uống 1 ly nước chanh tươi ấm pha với mật ong để không ngừng nâng cao sức đề kháng, tăng cường hệ thống miễn dịch và bảo vệ sức khỏe vì trong chanh tươi có chứa rất nhiều kali giúp kích thích hoạt động bộ não, đảm bảo hoạt động của hệ thần kinh, huyết áp ổn định, tăng cường chức năng tiêu hóa, phát huy khả năng thanh lọc cơ thể của thận đẻ bài trừ độc tố, không những thế nguồn vitamin C dồi dào trong chanh tươi còn là thành phần không thế thiếu giúp bạn nâng cao sức đề kháng mỗi ngày nữa đấy.</p>",
                'collection' => 'fruit',
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/10.jpg?v=1553634594520','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/triseothambangchanh1.jpg?v=1553634594520']
            ],
            [
                "id" => 2,
                'name' => "Vải thiều Thanh Hà",
                'price' => 79000,
                'price_sale' => 40000,
                'brand' => "Đang cập nhật",
                'origin' => "Việt Nam",
                'weigh' => 1,
                'collection' => 'fruit',
                'description' => "Mùa hè là thời gian lý tưởng để nhâm nhi nhiều loại trái cây và vải nằm trong số những trái ngon và bổ không thể bỏ qua.",
                'detail' => "<p>Ngoài hương vị “hết chỗ chê”, loại trái cây này còn có giá trị dinh dưỡng và y học vô cùng độc đáo, gồm những tác dụng sau:</p><p>- Kháng ung thư</p><p>- Điều hòa huyết áp</p><p>- Ngăn ngừa các bệnh</p><p>- Giàu Vitamin</p><p>- Tạo ra miễn dịch</p>",
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/676ccb75fcbc84a3db0b69f5af3c22.jpg?v=1553634601407','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/bn.jpg?v=1553634601407']
            ],
            [
                'id' => 3,
                'name' => "Đào đỏ Mỹ",
                'price' => 39000,
                'price_sale' => 30000,
                'brand' => null,
                'origin' => null,
                'collection' => 'fruit',
                'weigh' => null,
                'description' => null,
                'detail' => "<p>Giá trị dinh dưỡng:  Đào là nguồn cung cấp Vitamin C giá trị, và thích hợp cho việc giảm cân</p><p>Chất ngọt trong quả  mận là đường tự nhiên rất tốt cho cơ thể và người bị đái tháo đường. Nước ép quả mận có tác dụng mát, thanh nhiệt, giải nóng, nhuận tràng, dùng làm nước giải khát mùa hè rất tốt.</p><p>Cách chọn Đào: Chọn quả có vỏ màu đỏ thẫm, da trơn và chắc, những quả lớn, không quá cứng hoặc quả mềm là vừa chín tới</p><p>Lưu ý Quý khách hàng: để giữ quả đào tươi ngon lâu hơn, hãy bảo quản đào trong nhiệt độ khoảng 4 độ C</p>",
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/5.jpg?v=1553634600437','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/15.jpg?v=1553634600437']
            ],
            [
                'id' => 4,
                'name' => "Dâu tây Đà Lạt",
                'price' => 480000,
                'price_sale' => 350000,
                'brand' => "Đang cập nhật",
                'collection' => 'fruit',
                'origin' => "Việt Nam",
                'weigh' => 1,
                'description' => "Dâu tây nói chung và dâu tây Đà Lạt nói riêng, từ lâu được biết tới là một loại trái cây rất tốt cho con người",
                'detail' => "<p>Dâu tây nói chung và dâu tây Đà Lạt nói riêng, từ lâu được biết tới là một loại trái cây rất tốt cho con người. Tạp chí Các nhân tố sinh học của Hà Lan đăng kết quả nghiên cứu cho thấy quả dâu tây là một thứ quả đặc biệt có lợi cho sức khỏe con người. Loại quả này chứa nhiều chất bổ hơn cả cà chua (dâu tây chứa chất chống oxy hóa nhiều gấp 10 lần cà chua), quả kiwi, hay hoa lơ xanh, những loại thực phẩm nổi tiếng có giá trị dinh dưỡng cao, được nhiều người ưa dùng. Nhưng giá trị lớn nhất của quả dâu tây mà các nhà khoa học ghi nhận được đó là tác dụng chữa bệnh.</p><p>Theo đông y, dâu tây vị ngọt, chua, tính mát, công hiệu bổ phổi, điều hòa chức năng tiêu hóa, bồi bổ cơ thể, mát máu, giải độc. Dùng chữa các chứng như ho do phổi nóng, cổ họng sưng đau, chán ăn, tiểu ngắn, tiểu gắt, thiếu máu suy nhược, ung nhọt, say rượu.</p>",
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/13.jpg?v=1553634599460','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/d1juuv.png?v=1553634599460']
            ],
            [
                "id" => 5,
                'name' => "Táo xanh Mỹ",
                'price' => 220000,
                'price_sale' => 160000,
                'collection' => 'fruit',
                'brand' => "Đang cập nhật",
                'origin' => "Mỹ",
                'weigh' => 1,
                'description' => "Táo là loại cây ưa khí hậu khô, nóng và ít côn trùng và dịch bệnh. Táo GrannySmith (Táo Xanh) có nguồn gốc từ Úc du nhập vào Mỹ năm 1868. Táo có màu xanh lá, vị chua đậm, rất giòn, nhiều nước.",
                'detail' => "<p>1. Giống và chủng loại</p><p>Táo là loại cây ưa khí hậu khô, nóng và ít côn trùng và dịch bệnh. Táo GrannySmith (Táo Xanh) có nguồn gốc từ Úc du nhập vào Mỹ năm 1868. Táo có màu xanh lá, vị chua đậm, rất giòn, nhiều nước.</p>
                <p>2. Xuất xứ và mùa vụ</p><p>Mỹ, tiểu bang Washington là vùng trồng nhiều táo nhất.</p>
                <p>Ðất đai ở Tiểu bang Washington rất màu mỡ nhờ tro dung nham núi lửa. Một năm trung bình có hơn 300 ngày nắng. Khí hậu khô và nóng nên rất ít gặp các vấn đề về côn trùng và dịch bệnh. Ở đây có một hệ thống tưới tiêu rộng khắp và nguồn cung cấp nước dồi dào từ sông Columbia và vùng núi Cascade. Nên rất thuận lợi cho việc trồng táo.
                Táo xanh Mỹ được thu hoạch vào tháng 10 và ta có thể mua Táo Xanh quanh năm.</p>
                <p>3. Thông tin dinh dưỡng</p>
                <p>Một quả táo cỡ trung bình chứa khoảng 4g chất xơ. Một phần trong số chất xơ đó ở dạng Pectin - loại chất xơ hòa tan có tác dụng giảm lượng cholesterol 'xấu'; Chất xơ phức tạp của táo giúp no lâu hơn mà không bị tiêu thụ nhiều calo (một quả táo bình thường chỉ chứa khoảng 95 calo). Một loại axit có trong vỏ táo là Axit Ursolic làm giảm nguy cơ béo phì, Axit Ursolic thúc đẩy cơ thể đốt cháy calo, tăng việc hình thành cơ và giảm chất béo lâu năm trong cơ thể. Táo là nguồn cung cấp vitamin C tuyệt vời, có tác dụng tăng cường hệ thống miễn dịch. Mỗi quả táo chứa khoảng 8mg vitamin này, vì thế chúng sẽ cung cấp khoảng 14% nhu cầu vitamin C hàng ngày của cơ thể. Cũng giống như quả lê và quả việt quất, táo có mối liên hệ với việc giảm thiểu nguy cơ mắc bệnh tiểu đường túyp 2 nhờ chất chống oxy hóa có tên Anthocyanins, hơn nữa trong táo có chất Triterpenoids có khả năng chống lại các bệnh ung thư gan, ruột kết và ung thư vú.</p><p>4. Lưu ý bảo quản và sử dụng</p>
                <p>Loại táo này đặc biệt được những người làm bánh nướng ở bang Washington ưa thích.</p>
                <p>Những ngày nắng ấm và những đêm hè mát mẻ đã bảo đảm cho táo có độ giòn đặc biệt. Dùng trong món rau trộn, salad rất ngon.</p>
                <p>- Nhiệt độ bảo quản:</p>
                <p>+ Bảo quản kho công nghiệp: từ 0 đến 4 độ C. Táo sẽ giữ được độ tươi, độ giòn trong vòng từ 1-3 tháng. Sau thời gian này, táo sẽ ngọt hơn, độ giòn (PSI) trở nên thấp hơn (xốp hơn).</p>
                ",
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/11.jpg?v=1553634598330','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/14195265ef9d1449d3863328b5a50e.jpg?v=1553634598330']
            ],
            [
                'id' => 6,
                'name' => "Lê xanh Mỹ",
                'price' => 230000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'collection' => 'fruit',
                'origin' => "Mỹ",
                'weigh' => 1,
                'description' => "Theo phân tích khoa học, quả lê chứa protein, lipid, cenlulose, canxi, phốt pho, sắt, caroten, vitamin B1, B2, C, đường gluco, axít acetic...",
                'detail' => "
                    <p>Theo phân tích khoa học, quả lê chứa protein, lipid, cenlulose, canxi, phốt pho, sắt, caroten, vitamin B1, B2, C, đường gluco, axít acetic... Việc ăn lê thường xuyên có tác dụng tốt trong điều trị bệnh cao huyết áp, tim mạch (dẫn tới váng đầu hoa mắt, tim đập loạn nhịp, ù tai), lao phổi, viêm phế quản cấp tính. Hàm lượng vitamin, đường khá phong phú trong quả lê có tác dụng bảo vệ gan, dưỡng gan và lợi tiêu hóa khá tốt.</p>
                    <p>Do lê có tính hàn nên người bị bệnh đau lạnh bụng, đi lỏng không nên dùng; không ăn lê bị dập nát để tránh mắc bệnh đường ruột. Giống như trái táo, trái lê có thể có các màu vàng, xanh, nâu, đỏ hoặc sự kết hợp của hai hay nhiều màu sắc và nó cũng là liều thuốc có lợi cho sức khỏe gia đình bạn.</p>
                ",
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/14.jpg?v=1553634597507','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/lexanh.jpg?v=1553634597507']
            ],
            [
                'id' => 7,
                'name' => "Cam Navel ruột vàng",
                'price' => 340000,
                'price_sale' => 240000,
                'collection' => 'fruit',
                'brand' => "Đang cập nhật",
                'origin' => "Úc",
                'weigh' => 1,
                'description' => "Cam Navel ruột vàng Úc vỏ màu vàng, ruột màu vàng đậm, vị ngọt thanh, không hạt, mọng nước. Thường dùng để ăn chứ không ép nước. Nên chọn quả sáng màu, da mịn, tròn trịa, cầm nặng tay.",
                'detail' => "
                <p>Đặc điểm: Cam Navel ruột vàng Úc vỏ màu vàng, ruột màu vàng đậm, vị ngọt thanh, không hạt, mọng nước. Thường dùng để ăn chứ không ép nước. Nên chọn quả sáng màu, da mịn, tròn trịa, cầm nặng tay.</p>
                <p>Cam Úc có chứa nhiều Vitamin C, có tác dụng hồi phục sức khỏe nhanh, tốt cho da, chống lão hóa, tốt cho người ốm.</p>
                <p>Ăn cam Navel Úc thường xuyên sẽ giúp bảo vệ bạn khỏi mắc các bệnh truyền nhiễm do virus, giảm đáng kể nguy cơ mắc bệnh sỏi thận. Nếu bạn muốn tránh lượng calo dư thừa, hãy thêm cam Navel Úc vào chế độ dinh dưỡng hằng ngày của mình.</p>
                ",
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/4.jpg?v=1553634596937','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/camruotvang.jpg?v=1553634596937']
            ],
            [
                'id' => 8,
                'name' => "Hạt điều trắng",
                'price' => 480000,
                'price_sale' => 380000,
                'brand' => "Đang cập nhật",
                'origin' => "Việt Nam",
                'collection' => 'fruit',
                'weigh' => 1,
                'description' => "Nói về sức tác dụng hàng đầu của hạt điều phải kể đến là tác dụng tốt cho tim mạch. Vì hạt điều chứa nhiều chất béo không bão hòa đơn, chất béo này tìm thấy nhiều trong dầu oliu.",
                'detail' => "
                    <p>Nói về sức tác dụng hàng đầu của hạt điều phải kể đến là tác dụng tốt cho tim mạch. Vì hạt điều chứa nhiều chất béo không bão hòa đơn, chất béo này tìm thấy nhiều trong dầu oliu.</p>
                    <p>Chống oxy hóa, tốt cho xương, bảo vệ răng chắc khỏe<br>
                    Đặc biệt là trị táo bón cực kì hiệu quả, Hạt điều rất giàu kali, sắt, magiê, kẽm và các loại khoáng chất và một loại men có ích giúp kích thích các vi sinh vật có lợi cho đường ruôt phát triển, duy trì nguồn năng lượng trong cơ thể luôn dồi dào, giữ cho đường ruột luôn khỏe mạnh và giải quyết được chứng táo bón.</p>
                    <p>Trị chứng suy nhược cơ thể cực kì hiệu quả. Những bạn mắc chứng suy nhược cơ thể thì nên ăn, nó giúp bạn có nguồn sinh lực dồi vào hồi phục cơ thể. Ở VN mình thì ít dùng hạt điều trong thực đơn hằng ngày, nhưng ở mỹ, hạt điều lại là thực phẩm thiết yếu quan trọng đối với họ. Vì nó giàu dinh dưỡng, ít carb. Mà các nước phương Tây chú trọng ăn nhiều đạm để giữ vóng dáng săn chắc và hạn chế mỡ thừa hơn là các nước châu Á mình, với thói quen ăn giàu tinh bột.</p>
                    <p>Giảm cân: Cái này nghe có vẻ phi lí, vì hạt điều giàu năng lượng như thế làm sao giảm cân được. Nhưng Lê là người đã sử dụng nó để giảm cân, vấn đề là sử dụng thế nào mà thôi.</p>
                    <p>Nguyên tắc giảm cân là ăn đủ dinh dưỡng nhưng tiết chế lượng calori và khống chế được cơn them ăn. Hạt điều đi đầu trong việc cân bằng dinh dưỡng trong khẩu phần ăn hằng ngày, và tạo cảm giác rất no.</p>
                ",
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/799f392ed63934c64a2c8829cfdad6-90347a95-1fc7-4c97-8cd3-42e5c2d0641a.jpg?v=1553634595877','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/2aa3195461c954ef0ab5e054dd2a9b.jpg?v=1553634595877']
            ],
            [
                'id' => 9,
                'name' => 'Quả óc chó',
                'price' => 450000,
                'price_sale' => 430000,
                'brand' => "Đang cập nhật",
                'collection' => 'fruit',
                'origin' => 'Mỹ',
                'weigh' => 1,
                'description' => 'Quả óc chó giúp bà bầu bổ sung các chất dinh dưỡng thiết yếu nhất như Omega-3, Vitamin E, phốt pho và Axit Amin L-Arginne.',
                'detail' => '
                    <p>Quả óc chó giúp bà bầu bổ sung các chất dinh dưỡng thiết yếu nhất như Omega-3, Vitamin E, phốt pho và Axit Amin L-Arginne. Đặc biệt hàm lượng Omega-3 trong quả óc chó lớn hơn 3 lần trong cá hồi, giúp thúc đẩy sự phát triển đại não của thai nhi và trẻ nhỏ. Nếu các mẹ kiên trì ăn quả óc chó trong suốt thời gian thai kỳ, em bé sinh ra sẽ rất thông minh khỏe mạnh.</p>
                    <p>1. Cách sử dụng quả óc chó<br>
                    Dùng kìm kẹp quả óc chó, sau đó ăn phần nhân, phần vẩy ở giữa bỏ, có thể dùng óc chó làm bánh, làm nhân sôcôla, ép lấy dầu, dùng với sữa tươi, ngon hơn khi bỏ óc chó vào lò vi sóng với nhiệt độ 160 độ rồi lấy ra bóc ăn, sẽ có vị thơm và bùi hơn, quả óc chó có hạn sử dụng trong 01 năm nhưng sử dụng tốt nhất trong vòng 2-3 tháng sau khi mở túi.
                    </p>
                    <p>2. Cách ăn quả óc chó<br>
                    Ngày ăn 8 - 10 quả chia đều thành nhiều bữa nhỏ, người ăn kiêng nên ăn trước bữa ăn, uống nhiều nước.
                    </p>
                    <p>3. Cách bảo quản quả óc chó<br>Bảo quản ở nơi thoáng mát khô ráo, không để hở không khí, khi mở túi nên đóng mép kĩ sau mỗi lần sử dụng, có thể cho vào lọ đậy kín bảo quản tốt nhất ở ngăn mát của tủ lạnh.</p>
                ',
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/38f5a71fcbd96417784fa367c87816.jpg?v=1553634593250','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/25d0a6f59078141eea4f314ad9d55e.jpg?v=1553634593250']
            ],
            [
                'id' => 10,
                'name' => "Hạt điều khô",
                'price' => 280000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'collection' => 'fruit',
                'origin' => "Việt Nam",
                'weigh' => 1,
                'description' => "Nói về sức tác dụng hàng đầu của hạt điều phải kể đến là tác dụng tốt cho tim mạch. Vì hạt điều chứa nhiều chất béo không bão hòa đơn, chất béo này tìm thấy nhiều trong dầu oliu.",
                'detail' => "
                    <p>Nói về sức tác dụng hàng đầu của hạt điều phải kể đến là tác dụng tốt cho tim mạch. Vì hạt điều chứa nhiều chất béo không bão hòa đơn, chất béo này tìm thấy nhiều trong dầu oliu.</p>
                    <p>Chống oxy hóa, tốt cho xương, bảo vệ răng chắc khỏe<br>Đặc biệt là trị táo bón cực kì hiệu quả, Hạt điều rất giàu kali, sắt, magiê, kẽm và các loại khoáng chất và một loại men có ích giúp kích thích các vi sinh vật có lợi cho đường ruôt phát triển, duy trì nguồn năng lượng trong cơ thể luôn dồi dào, giữ cho đường ruột luôn khỏe mạnh và giải quyết được chứng táo bón.</p>
                    <p>Trị chứng suy nhược cơ thể cực kì hiệu quả. Những bạn mắc chứng suy nhược cơ thể thì nên ăn, nó giúp bạn có nguồn sinh lực dồi vào hồi phục cơ thể. Ở VN mình thì ít dùng hạt điều trong thực đơn hằng ngày, nhưng ở mỹ, hạt điều lại là thực phẩm thiết yếu quan trọng đối với họ. Vì nó giàu dinh dưỡng, ít carb. Mà các nước phương Tây chú trọng ăn nhiều đạm để giữ vóng dáng săn chắc và hạn chế mỡ thừa hơn là các nước châu Á mình, với thói quen ăn giàu tinh bột.</p>
                    <p>Giảm cân: Cái này nghe có vẻ phi lí, vì hạt điều giàu năng lượng như thế làm sao giảm cân được. Nhưng Lê là người đã sử dụng nó để giảm cân, vấn đề là sử dụng thế nào mà thôi.</p>
                    <p>Nguyên tắc giảm cân là ăn đủ dinh dưỡng nhưng tiết chế lượng calori và khống chế được cơn them ăn. Hạt điều đi đầu trong việc cân bằng dinh dưỡng trong khẩu phần ăn hằng ngày, và tạo cảm giác rất no.</p>
                ",
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/2.jpg?v=1553634592270','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/799f392ed63934c64a2c8829cfdad6.jpg?v=1553634592270']
            ],
            [
                'id' => 11,
                'name' => 'Hạt hạnh nhân',
                'price' => 320000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'origin' => 'Việt Nam',
                'collection' => 'vegetable',
                'weigh' => 1,
                'description' => 'Hạnh nhân rất tốt cho những người phòng ngừa các vấn đề về hàm lượng glucose và cholesterol. Thành phần trong hạt hạnh nhân giúp điều chỉnh, cân bằng 2 chất này, giúp phòng ngừa tiểu đường, mỡ máu, béo phì, thừa cân.',
                'detail' => '<p>Hạnh nhân rất tốt cho những người phòng ngừa các vấn đề về hàm lượng glucose và cholesterol. Thành phần trong hạt hạnh nhân giúp điều chỉnh, cân bằng 2 chất này, giúp phòng ngừa tiểu đường, mỡ máu, béo phì, thừa cân.</p>
                    <p>Tác dụng của hạt hạnh nhân với giảm cân cũng là một lý do nhiều người đang trong quá trình giảm cân hoặc người thừa cân, béo phì sử dụng hạt hạnh nhân để vừa có thể giảm cơn thèm đồ ăn, vừa để giảm cân hoặc kiểm soát cân nặng.</p>
                    <p>- Tác dụng của hạt hạnh nhân với hệ tim mạch rất tốt. Giúp điều hòa huyết áp, phòng tránh nguy cơ mắc các bệnh tim mạch, ung thư và tăng tuổi thọ.</p>
                    <p>- Hạt hạnh nhân giúp phòng ngừa táo bón</p>
                    <p>- Tác dụng của hạnh nhân với bà bầu, trẻ nhỏ rất tích cực. Sử dụng hạt hạnh nhân sẽ cung cấp dinh dưỡng cần thiết, giúp bảo vệ sức khỏe của phụ nữ đang mang thai, thai nhi và trẻ em.</p>
                    <p>- Hạt hạnh nhân giúp da và tóc của bạn được đẹp hơn.</p>
                ',
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/124db5143d68ef4e55938ee056be8d.jpg?v=1553634591287','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/7e251c93607dd471e83e83a91df289.jpg?v=1553634591287']
            ],
            [
                'id' => 12,
                'name' => 'Hành tây đặc biệt',
                'price' => 55000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'origin' => 'Việt Nam',
                'collection' => 'vegetable',
                'weigh' => 1,
                'description' => 'Hành không chỉ là thực phẩm rất gần gũi với con người mà nó còn là vị thuốc chữa bệnh rất công hiệu, tốt cho nhóm người mắc bệnh về đường hô hấp, bệnh hen suyễn, chữa chứng mất ngủ và làm giảm cholesterol.',
                'detail' => '
                    <p>Hành không chỉ là thực phẩm rất gần gũi với con người mà nó còn là vị thuốc chữa bệnh rất công hiệu, tốt cho nhóm người mắc bệnh về đường hô hấp, bệnh hen suyễn, chữa chứng mất ngủ và làm giảm cholesterol. Các hợp chất tự nhiên có trong hành có tác dụng làm dịu những cơn ho, long đờm và khử đờm rất hiệu quả. Hành tây tốt cho nhóm người mắc bệnh hen suyễn, viêm phế quản, lao, viêm xoang và các chứng bệnh nhiễm trùng về đường hô hấp.</p>
                    <p>- Hành tây có tác dụng hạ huyết áp, có lợi cho tim mạch.</p>
                    <p>- Theo nghiên cứu thì hành tây có tác dụng giảm cholesterol (mỡ máu), giúp cho máu lưu thông tốt. Hạn chế cholesterol xấu và làm tăng cholesterol tốt (HDL).</p>
                    <p>- Hành tây là thực phẩm kiêm dược phẩm tốt cho hệ thống tiêu hoá, chống táo bón, đầy hơi và trào ngược axít dạ dày.</p>
                    <p>- Hành tây là thực phẩm tốt cho nhóm phụ nữ mắc bệnh mất kinh, vàng da và liệt sức vì nóng, vì vậy những người ốm mệt có thể ăn cháo hành và phát huy tác dụng tức thì.</p>
                    <p> - Hành các loại, kể cả hành tây có mức độ sát trùng rất mạnh, vì vậy có khả năng ngăn ngừa các chứng bệnh viêm nhiễm đường ruột rất hiệu quả. </p>
                ',
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/16.jpg?v=1553634590390','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/hanhtay4nfqt.jpg?v=1553634590390']
            ],
            [
                'id' => 13,
                'name' => 'Súp lơ trắng',
                'price' => 20000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'collection' => 'vegetable',
                'origin' => 'Việt Nam',
                'weigh' => 1,
                'description' => 'Súp lơ có chứa các thành phần như: Protein 3,5%; gluxit 4,9%; và nhiều khoáng chất, vitamin như: can-xi (26 mg%); phốtpho (51 mg%)',
                'detail' => '
                    <p>Súp lơ có chứa các thành phần như: Protein 3,5%; gluxit 4,9%; và nhiều khoáng chất, vitamin như: can-xi (26 mg%); phốtpho (51 mg%); sắt (1,4 mg%); natri (20 mg%); kali (349 mg%); betacaroten (40 mg%); vitamin B1 (0,11 mg%), vitamin C (70 mg%)… Súp lơ có hai loại trắng và xanh. Loại xanh thường giòn và dai hơn nên có cảm giác ngon hơn, cũng rất tốt cho sức khỏe - giúp ngăn ngừa được nhiều căn bệnh như: Tim mạch, ung thư tuyến tiền liệt, bàng quang, viêm loét dạ dày...</p>
                    <p>Với những người có bệnh dạ dày, bị loét hành tá tràng có thể dùng súp lơ tươi rửa sạch, xay (hay ép) lấy nước. Dùng 200-300 ml nước này trước bữa ăn, dùng 2 lần/ngày, và mỗi đợt trị liệu khoảng 10 ngày như thế. Với những người suy nhược thần kinh thì trong bữa ăn của mình, nên dùng món cháo nấu từ súp lơ (cắt nhỏ) với gạo nếp. Với người có huyết áp cao, thì dùng súp lơ, đường trắng, giấm ăn (vừa đủ), làm cải bắp dầm để dành ăn.</p>
                ',
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/9ea4a2f9dad46485d9c385955275bb.jpg?v=1553634589380','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/lotrang2.jpg?v=1553634589380']
            ],
            [
                'id' => 14,
                'name' => 'Nho mỹ nhập khẩu',
                'price' => 265000,
                'price_sale' => 235000,
                'brand' => "Đang cập nhật",
                'collection' => 'fruit',
                'origin' => 'Mỹ',
                'weigh' => 1,
                'description' => 'Nho Mỹ được biết đến là một trong những loại trái cây được ưa chuộng nhất trên thế giới với vẻ căng trong mọng nước và vị ngọt thanh đặc trưng.',
                'detail' => '
                    <p>Nho Mỹ được biết đến là một trong những loại trái cây được ưa chuộng nhất trên thế giới với vẻ căng trong mọng nước và vị ngọt thanh đặc trưng. Tại đây, nho my được trồng theo những tiêu chuẩn cao nhất của sản phẩm, từ cây giống đến những container vận chuyển, đóng gói đều được các chuyên gia chú ý và tư vấn, để đảm bảo được chất lượng và hương vị của từng quả nho vừa được hái.</p>
                    <p>Một số giống nho Mỹ đặc sắc được ưa chuộng phải kể đến là nho Mỹ đỏ, nho mỹ đen không hạt, nho Mỹ xanh không hạt, nho ngón tay phù thủy. Nhiều người lầm tưởng rằng, chỉ có nho đỏ thì mới có lợi cho sức khỏe nhưng thực ra nho đen Mỹ hay nho xanh cũng đều có những đặc điểm dinh dưỡng riêng của nó:</p>
                    <p>Nho tím rất giàu chất anthocyanin - chất được ví như một loại mỹ phẩm thiên nhiên quý giá chống lại quá trình lão hóa sớm. Nho đen Mỹ lại chứa thành phần tốt cho mái tóc, ăn nhiều nho đen Mỹ giúp bạn có mái tóc mượt mà.</p>
                ',
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/anhnho.jpg?v=1553634588157','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/nhomyden.jpg?v=1553634588157']
            ],
            [
                'id' => 15,
                'name' => 'Nấm Lim xanh',
                'price' => 990000,
                'price_sale' => 890000,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'vegetable',
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Nấm Linh Chi chứa các chất dinh dưỡng có thể giúp cơ thể để duy trì sức khỏe, và cải thiện tình trạng sức khỏe nếu đang bệnh.</p>
                    <p>Nấm Linh Chi tác dụng trên cơ thể chứ không phải trên bệnh. Linh Chi giúp thúc đẩyhệ thống miễn dịch tự nhiên giúp cơ thể luôn cân bằng và lần lượt xử lý riêng một loạt từngvấn đề sức khỏe. Linh Chi thúc đẩy sức khỏe tổng thể, giúp cơ thể luôn hài hòa và giúp duy trì sự cân bằng của cơ thể.</p>
                    <p>Chất chống oxy hóa trung hòa tác dụng oxy hóa của các gốc tự do, tăng cường sự trao đổi chất. Linh Chi là một trong những chống oxy hóa mạnh nhất</p>
                    <p>Nấm Linh Chi giúp duy trì và cải thiện sức khỏe nói chung.</p>
                    <p>Nấm Linh Chi có hơn 200 hoạt chất được biết để cải thiện sức khỏe.Dưới đây là một vài hoạt chất mà khoa học hiện đại đang tập trung vào và cũng là 5 thành phần tạo nên công dụng kì diệu của Nấm Linh Chi.</p>
                    <p><b>1. Polysaccharides</b></p>
                    <p>Polysacchaide là một trong những thành phần hữu hiệu nhất của nấm linh chi, rất được các nhà y dược học coi trọng với những công dụng</p>
                    <p>- Tăng cường hệ thống miễn dịch của cơ thể</p>
                    <p>- Cân bằng lượng đường trong máu và giúp cải thiện chức năng tuyến tụy</p>
                    <p>- Bảo vệ chống lại sự thoái hóa của các tế bào da và loại bỏ các tế bào da chết, giúp cải thiện cấu trúc da và giảm sự xuất hiện của lão hóa</p>
                    <p>- Kiểm soát phá hủy các tế bào khỏe mạnh trong cơ thể</p>
                    <p>- Loại bỏ các độc tố tích lũy</p>
                    <p><b>2. Germanium hữu cơ</b></p>
                    <p>Hàm lượng Germanium trong Linh Chi rất caocao hơn từ 5- 8 lần so với Nhân Sâm, có những công dụng chính như sau:</p>
                    <p>- Tăng oxy trong hệ thống máu</p>
                    <p>- Làm giảm mệt mỏi và tăng cường sức sống cho cơ thể</p>
                    <p>- Tăng cường hệ thống miễn dịch</p>
                    <p>- Làm tăng sự trao đổi chất</p>
                    <p>- Chứa rất nhiều chất chống oxy hóa , giúp kiểm soá t và ngăn chặn các gốc tự do gây tổn hại. Các gốc tự do là nguyên nhân chính của sự thoái hóa tế bào, ung thư và lão hóa.</p>
                    <p>- Hỗ trợ khả năngmiễn dịch tự nhiên của cơ thể để chống lại các tế bào ung thư</p>
                    <p><b>3. Adenosine</b></p>
                    <p>Adenosin là một loại chất có hoạt tính dược lý rất mạnh, cấu tạo cơ bản gồm nucleoside và purine, là một trong những thành phần chủ yếu của Nấm Linh chi. Linh chi có chứa nhiều loại hợp chất diên sinh adenosine có các tác dụng:</p>
                    <p>- Làm giảm cholesterol và mỡ trong cơ thể</p>
                    <p>- Giúp thông thoáng động mạch với những mảng chất béo tích tụ, và hỗ trợ chức năng gan</p>
                    <p>- Cân bằng tỷ lệ trao đổi chất và tăng cường năng lượng</p>
                    <p>- Ngăn ngừa sự phân mảnh của tiểu cầu có thể gây ra tắc nghẽn trong hệ thốngtuần hoàn</p>
                ',
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/2600x600.jpg?v=1553634587223','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/nam111.png?v=1553634587223']
            ],
            [
                'id' => 16,
                'name' => 'Nấm linh chi',
                'price' => 999000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'collection' => 'vegetable',
                'origin' => null,
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Nấm Linh Chi chứa các chất dinh dưỡng có thể giúp cơ thể để duy trì sức khỏe, và cải thiện tình trạng sức khỏe nếu đang bệnh.</p>
                    <p>Nấm Linh Chi tác dụng trên cơ thể chứ không phải trên bệnh. Linh Chi giúp thúc đẩyhệ thống miễn dịch tự nhiên giúp cơ thể luôn cân bằng và lần lượt xử lý riêng một loạt từngvấn đề sức khỏe. Linh Chi thúc đẩy sức khỏe tổng thể, giúp cơ thể luôn hài hòa và giúp duy trì sự cân bằng của cơ thể.</p>
                    <p>Chất chống oxy hóa trung hòa tác dụng oxy hóa của các gốc tự do, tăng cường sự trao đổi chất. Linh Chi là một trong những chống oxy hóa mạnh nhất</p>
                    <p>Nấm Linh Chi giúp duy trì và cải thiện sức khỏe nói chung.</p>
                    <p>Nấm Linh Chi có hơn 200 hoạt chất được biết để cải thiện sức khỏe.Dưới đây là một vài hoạt chất mà khoa học hiện đại đang tập trung vào và cũng là 5 thành phần tạo nên công dụng kì diệu của Nấm Linh Chi.</p>
                    <p><b>1. Polysaccharides</b></p>
                    <p>Polysaccharide là một trong những thành phần hữu hiệu nhất của nấm linh chi, rất được các nhà y dược học coi trọng với những công dụng</p>
                    <p>- Tăng cường hệ thống miễn dịch của cơ thể</p>
                    <p>- Cân bằng lượng đường trong máu và giúp cải thiện chức năng tuyến tụy</p>
                    <p>- Bảo vệ chống lại sự thoái hóa của các tế bào da và loại bỏ các tế bào da chết, giúp cải thiện cấu trúc da và giảm sự xuất hiện của lão hóa</p>
                    <p>- Kiểm soát phá hủy các tế bào khỏe mạnh trong cơ thể</p>
                    <p>- Loại bỏ các độc tố tích lũy</p>
                    <p><b>2. Germanium hữu cơ</b></p>
                    <p>Hàm lượng Germanium trong Linh Chi rất caocao hơn từ 5- 8 lần so với Nhân Sâm, có những công dụng chính như sau:</p>
                    <p>- Tăng oxy trong hệ thống máu</p>
                    <p>- Làm giảm mệt mỏi và tăng cường sức sống cho cơ thể</p>
                    <p>- Tăng cường hệ thống miễn dịch</p>
                    <p>- Làm tăng sự trao đổi chất</p>
                    <p>- Chứa rất nhiều chất chống oxy hóa , giúp kiểm soá t và ngăn chặn các gốc tự do gây tổn hại. Các gốc tự do là nguyên nhân chính của sự thoái hóa tế bào, ung thư và lão hóa.</p>
                    <p>- Hỗ trợ khả năngmiễn dịch tự nhiên của cơ thể để chống lại các tế bào ung thư</p>
                    <p><b>3. Adenosine</b></p>
                    <p>Adenosin là một loại chất có hoạt tính dược lý rất mạnh, cấu tạo cơ bản gồm nucleoside và purine, là một trong những thành phần chủ yếu của Nấm Linh chi. Linh chi có chứa nhiều loại hợp chất diên sinh adenosine có các tác dụng:</p>
                    <p>- Làm giảm cholesterol và mỡ trong cơ thể</p>
                    <p>- Giúp thông thoáng động mạch với những mảng chất béo tích tụ, và hỗ trợ chức năng gan</p>
                    <p>- Cân bằng tỷ lệ trao đổi chất và tăng cường năng lượng</p>
                    <p>- Ngăn ngừa sự phân mảnh của tiểu cầu có thể gây ra tắc nghẽn trong hệ thốngtuần hoàn</p>
                ',
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/babaucothesudungnamlinhchimotc.jpg?v=1553634586397','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/namlinhchido2.jpg?v=1553634586397']
            ],
            [
                'id' => 17,
                'name' => 'Mộc nhĩ đen các loại',
                'price' => 99000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'collection' => 'vegetable',
                'origin' => null,
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Không chỉ là một loại thực phẩm góp phần cho các món ăn thêm ngon, mộc nhĩ cũng có tính chất dược liệu quan trọng và đã được sử dụng như một vị thuốc thảo dược trong các bài thuốc của y học cổ truyền. Có nhiều tác dụng tuyệt vời cho sức khỏe từ mộc nhĩ như chống oxy hóa, ngăn ngừa hiện tượng đông máu, giảm cân, "quý nhân" của làn da,...</p>
                    <p>Mộc nhĩ đen (Nấm mèo, nấm tai mèo) có tên khoa học là Auricularia auricula, là những ký sinh trùng phát triển trên những cây có tán lá rộng hoặc trên những cây đã chết, chủ yếu vào mùa xuân, hạ, thu.</p>
                    <p>Loại nấm này tồn tại và phát triển tại các nước trong khu vực Châu Á và tại một số hòn đảo của Thái Bình Dương, những nơi có khí hậu ẩm ướt, mưa nhiều.</p>
                ',
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/467115898050fac860eab.jpg?v=1553634585757','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/xmocnhiden2600x600jpgpagespeed.jpg?v=1553634585757','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/mocnhirungsapa1.jpg?v=1553634585757']
            ],
            [
                'id' => 18,
                'name' => 'Thịt bò thăn',
                'price' => 46000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'collection' => 'fresh-food',
                'origin' => null,
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Là thực phẩm không thể thiếu trong thực đơn của ấy nào muốn ăn kiêng hay những teens năng chơi thể thao, thịt bò giúp chúng mình tăng cường sức khỏe, ngăn ngừa bệnh tật và thúc đẩy quá trình hình thành các protein mới. Ngoài ra, nó còn hỗ trợ tích cực cho việc phục hồi cơ thể sau những buổi tập luyện mệt mỏi đấy teens ạ!</p>
                    <p>Các ấy có biết, trong 100g thịt bò có tới 28g protein cùng rất nhiều vitaminh B12, B6, khoáng chất cacnitin, kali, kẽm, magie, sắt... cơ đấy! Đồng thời, khối lượng thịt đó sẽ cung cấp cho chúng mình 280kcal năng lượng, gấp đôi so với cá và nhiều loại thịt động vật khác.</p>
                    <p>Điểm đặc biệt của protein trong thịt bò đó là nó chứa nhiều acid amin, acid gốc nitro. Chúng sẽ giúp các ấy biến protein trong thức ăn thành đường hữu cơ để cung cấp cho các hoạt động hàng ngày. Ngoài ra, thịt bò còn chứa acid linoleic và palmiotelic chống lại ung thư và các mầm bệnh khác nữa nhá!</p>
                ',
                'images'=> ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/thitbothan600x6001.jpg?v=1553634585177','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/resize581977f9436242d1b130b95a.jpg?v=1553634585177']
            ],
            [
                'id' => 19,
                'name' => 'Thịt bò Canada nhập khẩu',
                'price' => 480000,
                'price_sale' => 450000,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'fresh-food',
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Chắc các ấy cũng biết, các loại thịt động vật có vai trò hết sức quan trọng trong khẩu phần ăn của chúng mình. Nó tham gia vào quá trình hình thành, thay thế và phân hủy các tế bào trong cơ thể. Bên cạnh đó, thịt động vật còn rất cần thiết cho việc chuyển hóa các chất dinh dưỡng cung cấp cho cơ thể. Quan trọng nhất là protein cùng vitamin và chất khoáng đó mà!</p>
                    <p>Thịt bò</p>
                    <p>Là thực phẩm không thể thiếu trong thực đơn của ấy nào muốn ăn kiêng hay những teens năng chơi thể thao, thịt bò giúp chúng mình tăng cường sức khỏe, ngăn ngừa bệnh tật và thúc đẩy quá trình hình thành các protein mới. Ngoài ra, nó còn hỗ trợ tích cực cho việc phục hồi cơ thể sau những buổi tập luyện mệt mỏi đấy teens ạ!</p>
                    <p>Các ấy có biết, trong 100g thịt bò có tới 28g protein cùng rất nhiều vitaminh B12, B6, khoáng chất cacnitin, kali, kẽm, magie, sắt... cơ đấy! Đồng thời, khối lượng thịt đó sẽ cung cấp cho chúng mình 280kcal năng lượng, gấp đôi so với cá và nhiều loại thịt động vật khác.</p>
                    <p>Điểm đặc biệt của protein trong thịt bò đó là nó chứa nhiều acid amin, acid gốc nitro. Chúng sẽ giúp các ấy biến protein trong thức ăn thành đường hữu cơ để cung cấp cho các hoạt động hàng ngày. Ngoài ra, thịt bò còn chứa acid linoleic và palmiotelic chống lại ung thư và các mầm bệnh khác nữa nhá!</p>
                ',
                'images'=> ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/resize.jpg?v=1553634584570','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/resize2.jpg?v=1553634584570','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/resize1.jpg?v=1553634584570']
            ],
            [
                'id' => 20,
                'name' => 'Rau cải bẹ xanh non',
                'price' => 20000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'vegetable',
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Trong các loại rau cải cải thảo khá được ưa thích bởi nó có vị ngọt, tính mát, lại có tác dụng hạ khí, thanh nhiệt, chứa hàm lượng cao vitamin A, B, C, E. Hàm lượng nguyên tố vi lượng kẽm cao hơn cả so với thịt, cá. Cải thảo nếu nấu chín chứa nhiều vitamin A, C, K, B2, B6, calcium, sắt, mangan, folat, cũng như có nhiều thành phần hoạt chất có ảnh hưởng tốt đối với sức khỏe. Cải thảo vừa có thể dùng nấu canh ăn như các loại rau cải khác, lại cũng có thể ăn sống, muối chua, làm nộm như rau xà lách, nấu lẩu, xào… Khi bạn chế biến cải thảo, bạn không nên nấu cải thảo quá chín sẽ làm cho rau cải mất độ ngon, giòn và các vitamin cũng dễ bị tan mất ở nhiệt độ cao.</p>
                    <p>Những người mắc phải hội chứng trào ngược hoặc dị ứng, khó tiêu với các loại rau cải họ cải, cần hết sức thận trọng với cải thảo. Cũng nên biết thành phần indol có trong cải thảo có thể làm giảm tác dụng của vài loại thuốc giảm đau có chứa thành phần acetaminophen.</p>
                ',
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/raucai458.jpg?v=1553634583713']
            ],
            [
                'id' => 21,
                'name' => 'Chôm Chôm miền nam hoa quả xuất khẩu',
                'price' => 160000,
                'price_sale' => 60000,
                'brand' => "Đang cập nhật",
                'collection' => 'fruit',
                'origin' => null,
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Nhiều người cho rằng ăn nhiều chôm chôm sẽ làm “nóng” cơ thể. Tuy nhiên, có một điều ít người biết hoặc để ý là quả chôm chôm rất 
                    nhiều lợi ích với sức khỏe. Theo kinh nghiệm dân gian, các bộ phận của quả chôm chôm đều có tác dụng trị bệnh. Quả chôm chôm xanh và 
                    vỏ quả có chứa nhiều tanin được dùng để chữa ỉa chảy, kiết lỵ, sốt... với liều 20 - 30g. Ví như, để hạ sốt có thể lấy 15g vỏ chôm chôm, 
                    rửa sạch, sắc uống vài lần trong ngày; để chữa lỵ dùng 10 trái chôm chôm, thái vụn, sắc uống 2 lần trong ngày. Hạt chôm chôm, còn gọi là thiều tử, 
                    vị ngọt, tính ấm, chứa nhiều chất béo không no như olein, arachidin..., có tác dụng tiêu viêm kháng khuẩn, được dùng để chữa bệnh tiểu đường, 
                    viêm niêm mạc miệng, kiết lỵ, các vết loét lâu ngày, điều chỉnh lipid máu, giảm béo và làm đẹp da. Ví như, để chữa tiểu đường có thể dùng 5 hạt 
                    chôm chôm rang chín, giã nhuyễn thành bột, chế thêm nước sôi uống 1 đến 2 lần trong ngày; để giảm béo có thể ăn sống hạt chôm chôm hoặc rang rồi trộn 
                    với các loại thực phẩm khác. Với công dụng điều chỉnh lipid máu. giảm béo và rất giàu vitamin C nên chôm chôm là thứ quả tuyệt vời cho những người bị 
                    vữa xơ động mạch, tăng huyết áp, tăng đường huyết...Tuy nhiên, 
                    vì chứa nhiều chất béo nên nếu ăn quá nhiều hạt chôm chôm có thể xuất hiện cảm giác say say và gây buồn nôn, đầy bụng.</p>
                    <p><i>Những tác dụng có được khi dùng loại quả này như sau:</i></p>
                    <p>• Trị huyết áp cao và tiểu đường</p>
                    <p>Hàng trăm năm nay, người dân Malaysia và Indonesia thường dùng nguyên liệu từ thân cây, hạt và quả chôm chôm làm thuốc truyền thống để chữa một số căn bệnh như huyết áp cao, tiểu đường… Bởi lẽ, chôm chôm rất giàu protein, carbohydrate, chất béo tốt, vitamin C, sắt, phốt pho, canxi, đồng, mangan, kali, sắt, tanin, pectin, polyphenol và flavonoid.</p>
                    <p>• Bổ sung năng lượng</p>
                    <p>Vì quả chôm chôm chứa nhiều nước, carbohydrate và protein với chức năng cung cấp năng lượng cho cơ thể hoạt động. Hơn nữa, chôm chôm cũng làm cho bạn đỡ mệt mỏi và phòng ngừa đầy hơi.</p>
                    <p>• Ngừa ung thư</p>
                    <p>Hàm lượng vitamin C dồi dào trong quả chôm chôm còn có tác dụng giúp cho cơ thể hấp thụ các khoáng chất sắt và đồng dễ dàng hơn. Thêm vào đó, hoạt chất axít gallic trong quả chôm chôm hoạt động như chất chống ôxy hóa mạnh, giúp loại bỏ các gốc tự do gây hại cơ thể và phòng ngừa bệnh ung thư.</p>
                ',
                'images'=>['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/chomchom.jpg?v=1553634582947','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/50rambutan.jpg?v=1553634582947','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/freshrambutansrambutans1.jpg?v=1553634582947','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/large1474ef1ab3cf4b9d98dbcf4bd.jpg?v=1553634582947']
            ],
            [
                'id' => 22,
                'name' => 'Dứa vàng nhập khẩu Mỹ',
                'price' => 180000,
                'price_sale' => 60000,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'fruit',
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Là một nguồn tốt của nhiều chất dinh dưỡng, chẳng hạn như vitamin C, mangan, đồng và folate. Dứa cũng là nguồn duy nhất của bromelain (hợp chất thực vật).</p>
                    <p>Bromelain được gắn liền với nhiều lợi ích sức khỏe, chẳng hạn như tăng cường chức năng miễn dịch, phòng chống ung thư, cải thiện vết thương, chữa bệnh và sức khỏe đường ruột tốt hơn.</p>
                    <p>Dứa ngon hơn khi còn tươi, nhưng bạn cũng có thể thưởng thức dứa theo nhiều cách khác nhau như sấy khô, đóng hộp hoặc là một thành phần trong công thức nấu ăn khác nhau.</p>
                    <p>Dứa có một lớp vỏ thô ráp và có mắt, thịt của quả dứa chín biến đổi từ màu trắng sang màu vàng, có mùi thơm đặc trưng và một hương vị ngọt.</p>
                    <p><b>Giá trị dinh dưỡng</b></p>
                    <p>Dứa tươi có chứa 50 calo trong 100 gram và 83 calo với 165 gram và hầu như. Chúng bao gồm 86% là nước và 13% là carbs không có protein hoặc chất béo</p>
                    <p><b>Carbohydrates</b></p>
                    <p>Carbohydrate trong dứa chủ yếu là các loại đường đơn giản, chẳng hạn như sucrose, fructose và glucose. Chúng cũng chứa một số chất xơ.</p>
                    <p>Với 165 gramdứa chứa 21,7 gram carbs, và 2,3 gam chất xơ, có 19,4 gram carbs được tiêu hóa.</p>
                ',
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/imagepineapple5.jpg?v=1553634581787','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/930801pineapple.jpg?v=1553634581787','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/17172.jpg?v=1553634581787','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/pineappleistockphoto.jpg?v=1553634581787']
            ],
            [
                'id' => 23,
                'name' => 'Cherry chính hãng nhập khẩu Úc',
                'price' => 655000,
                'price_sale' => 355000,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'fruit',
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Cherry  là một trong những loại trái cây nhập khẩu cao cấp rất được ưa chuộng tại Việt Nam. Giống cherry Úc đỏ thường được trồng ở khu vực New South Wales, Victoria và nhiều nhất ở vùng Tasmania. Cherry Úc nhập khẩu thường có màu đỏ thẫm, căng mọng bắt mắt và ăn ngon hơn hẳn cherry ở những vùng khác.</p>
                    <p>Thành phần dinh dưỡng trong trái cherry lý tưởng đến mức các nhà khoa học đã không tiếc lời khen ngợi và 
                    được gọi là “siêu trái cây” - là vua của các loại trai cay. Loại quả quý này chứa hàm lượng vitamin cực kì cao, 
                    thậm chí cao gấp 19 lần hàm lượng vitamin A có trong trái dâu tây hoặc việt quất. Hàm lượng vitamin A cao là một 
                    trong những lợi ích lớn nhất của trái cherry, vì ngoài tác dụng bồi bổ, vitamin A còn được sử đụng để điều trị bệnh ngoài da hiệu quả, 
                    tăng cường thị lực, giúp mắt luôn khỏe mạnh, hạn chế tình trạng quáng gà vào lúc trời gần tối, tăng khả năng nhìn trong trường hợp ánh 
                    sáng bị giảm. Chính vì những giá trị đóng góp cho sức khỏe con người mà giá cherry  thường cao và được nhiều người tìm mua.</p>
                ',
                'images'=> ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/congdungcuaquacherry3jpeg.jpg?v=1553634580863','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/nhungloiichcuaquacherrymanglai.jpg?v=1553634580863','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/cherryeliquid.jpg?v=1553634580863']
            ],
            [
                'id' => 24,
                'name' => 'Chuối Laba nhập khẩu Thái Lan',
                'price' => 90000,
                'price_sale' => 30000,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'fruit',
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Chuối là một trong những loại trái cây được tiêu thụ rộng rãi nhất trên thế giới vì các lý do tốt cho sức khỏe.  Những trái cây có màu vàng mang những giá trị dinh dưỡng lớn với sức khỏe con người. Ngày  nay, chuối được trồng ở ít nhất 107 quốc gia và được xếp hạng thứ tư trong số các loại cây lương thực của thế giới. Tại nước ta chuối cũng được trồng khá phổ biến, khắp cả nước và được bán suốt bốn mùa trong năm.</p>
                    <p>Chuối là một thực phẩm tốt cho tim với chế độ ăn ít chất béo bão hòa và cholesterol. Trong khi nhiều yếu tố ảnh hưởng đến bệnh tim, chế độ ăn ít chất béo bão hòa và cholesterol có thể làm giảm nguy cơ mắc bệnh này.</p>
                    <p><b>Hen suyễn:</b> Một nghiên cứu được tiến hành bởi Imperial College of London cho thấy trẻ em ăn một quả chuối mỗi ngày đã có một cơ hội ít hơn 34% mắc bệnh hen suyễn.</p>
                    <p><b>Ung thư:</b> Tiêu thụ chuối, cam và nước cam trong hai năm đầu tiên  đầu đời có thể làm giảm nguy cơ phát triển bệnh bạch cầu ở trẻ em. Là một nguồn giàu vitamin C, tác dụng của quả chuối có thể giúp chống lại sự hình thành các gốc tự do gây ung thư, chất xơ có trong chuối và các loại trái cây khác liên kết với nhau làm giảm nguy cơ ung thư đại trực tràng</p>
                    <p><b>Sức khỏe tim mạch:</b> Các chất xơ, kali, vitamin C và B6 trong chuối  hỗ trợ sức khỏe tim mạch.  Chuối là một nguồn cung cấp kali, một khoáng chất cần thiết cho việc duy trì huyết áp bình thường và chức năng tim.  Những người tiêu thụ 4069 mg kali mỗi ngày có nguy cơ chống lại tử vong do bệnh tim thiếu máu cục bộ thấp hơn 49% so với những tiêu thụ ít kali hơn (khoảng 1000 mg mỗi ngày). Ăn một quả chuối trong các bữa ăn thường ngày của bạn có thể giúp ngăn ngừa huyết áp cao và bảo vệ chống xơ vữa động mạch.</p>
                    <p><b>Bệnh tiểu đường:</b> Người có khẩu phần ăn nhiều chất xơ sẽ có nồng độ glucose trong máu thấp hơn và bệnh nhân tiểu đường type 2 có thể  cải thiện lượng đường trong máu, lipid và nồng độ insulin. Một quả chuối trung bình cung cấp khoảng 3 gam chất xơ.</p>
                    <p><b>Điều trị tiêu chảy:</b> thực phẩm nhẹ như nước ép táo và chuối được khuyến cáo cho điều trị tiêu chảy. Khi bị tiêu chảy, kali trong cơ thể bị điện giải và mất đi với số lượng lớn làm cho cơ thể cảm thấy yếu ớt . Ăn chuối có thể bổ sung lại lượng kali cơ thể bị mất.</p>
                    <p>Một quả chuối trung bình (khoảng 126 gram) được coi là một phần ăn. Một khẩu phần của chuối chứa 110 calo, 30 gam carbohydrate và 1 gam protein.</p>
                ',
                'images'=>['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/227331.jpg?v=1553634580007','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/bo21600x600.jpg?v=1553634580007','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/chuoilabamin600x600.jpg?v=1553634580007']
            ],
            [
                'id' => 25,
                'name' => 'Lựu đỏ Nam Phi nhập khẩu',
                'price' => 114000,
                'price_sale' => 40000,
                'brand' => "Đang cập nhật",
                'origin' => 'Việt Nam',
                'collection' => 'fruit',
                'weigh' => 1,
                'description' => 'Hạt lựu chín có giá trị dinh dưỡng cao, có tác dụng chống vi khuẩn, chống oxy hóa và tác dụng tẩy giun hiệu quả. Tuy nhiên thực tế đã có trường hợp trẻ em nguy kịch vì tắc ruột do ăn nhiều hạt lựu. Vì vậy, khi ăn không nên nuốt hạt lựu, với người lớn thì cần nhai kỹ trước khi nuốt.',
                'detail' => '
                <p>Với hương vị thơm ngon đặc trưng và giá trị dinh dưỡng đối với sức khỏe, lựu đang được rất nhiều chị em ưa chuộng. Trong quả lựu có chứa nhiều chất oxy hóa, vitamin C và nhiều dưỡng chất khác có tác dụng làm đẹp, tăng cường hệ miễn dịch và bảo vệ sức khỏe. Tuy nhiên, khi ăn lựu cần lưu ý những điều sau đây:</p>
                <p><b>Ăn lựu tốt nhất nên bỏ hạt</b></p>
                <p>Hạt lựu chín có giá trị dinh dưỡng cao, có tác dụng chống vi khuẩn, chống oxy hóa và tác dụng tẩy giun hiệu quả. Tuy nhiên thực tế đã có trường hợp trẻ em nguy kịch vì tắc ruột do ăn nhiều hạt lựu. Vì vậy, khi ăn không nên nuốt hạt lựu, với người lớn thì cần nhai kỹ trước khi nuốt.</p>
                <p>Để tận dụng hết được những dưỡng chất có trong quả lựu, bạn có thể cho lưu ép lấy nước, hoặc có thể kết hợp với một số hoa quả khác như: lê, sơ-ri, xoài hoặc quýt để được cốc nước ngon thơm ngon như ý.</p>
                <p><b>Những người hạn chế ăn lựu</b></p>
                <p>- Những người bị bệnh viêm dạ dày.</p>
                <p>- Những người bị sâu răng hay gặp các vấn đề về răng miệng. Nếu vẫn muốn thưởng thức loại quả này, sau khi ăn bạn phải đánh răng ngay lập tức.</p>
                <p>- Những người bị nóng trong người, đặc biệt là trẻ em.</p>
                <p>- Bệnh nhân bị đái tháo đường, vì lựu có tác dụng kiểm soát lượng đường trong máu, nhưng không phải là loại quả lý tưởng để ăn thường xuyên.</p>
                ',
                'images'=>['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/product7600x600.jpg?v=1553634579280','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/sonduongmoiduongchatluuvataofa.jpg?v=1553634579280','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/luunamphi.jpg?v=1553634579280']
            ],
            [
                'id' => 26,
                'name' => 'Măng cụt chín Miền Nam',
                'price' => 165000,
                'price_sale' => 80000,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'fruit',
                'weigh' => null,
                'description' => null,
                'detail' => '
                <p>Măng cụt có nguồn gốc từ Mã Lai và Indonesia, được trồng từ hàng chục thế kỷ, cây đã được 
                Thuyền Trưởng Cook mô tả khá chi tiết từ năm 1770, và được đưa đến Sri Lanka vào năm 1800, 
                được trồng tại Anh trong các nhà kiếng (green house) từ 1855, sau đó đưa đến West Indies từ giữa thế kỷ 19. 
                Đây là một loại cây đòi hỏi điều kiện thổ nhưỡng khắt khe cần khí hậu nóng và ẩm, cây tăng trưởng rất chậm, 
                sau 2-3 năm cây chỉ cao đến đầu gối, chỉ bắt đầu cho quả sau 10-15 năm.. Cây đã được các nhà truyền giáo du 
                nhập vào Nam Việt Nam từ lâu, trồng nhiều nhất tại Lái Thiêu, Thủ Dầu Một. Việt Nam đã có lúc là nơi có những vườn 
                măng cụt lớn nhất thế giới, với những vườn rộng hàng chục mẫu, có hàng ngàn cây, mỗi cây cho được từ 700 đến 900 quả. 
                Cây hiện được trồng nhiều tại Thái Lan, Kampuchea, Myanmar (Miến điện), Sri Lanka và Philippines.</p>
                <p>
                Hiện có khoảng 100 loài khác nhau được nuôi trồng. <br>
                Măng cụt thuộc loại cây to, trung bình 7-12 m nhưng có thể cao đến 20- 25 m, 
                thân có vỏ màu nâu đen xậm, có nhựa (resin) màu vàng. Lá dày và cứng, bóng, 
                mọc đối, mặt trên của lá có màu xậm hơn mặt dưới, hình thuôn dài 15-25 cm, 
                rộng 6-11 cm, cuống dài 1.2-2.5 cm. Hoa đa tính thường là hoa cái và hoa lưỡng tính. 
                Hoa mọc đơn độc hay từng đôi. Hoa loại lưỡng tính màu trắng hay hồng nhạt, có 4 lá đài và 4 cánh hoa, 
                có 16-17 nhị và bầu noãn có 5-8 ô. Quả hình cầu tròn, đường kính chừng 4-7 cm, có mang đài hoa còn tồn tại; 
                vỏ quả màu đỏ nâu, dai và xốp. Quả chứa 5-8 hạt: quanh hạt có lớp áo bọc màu trắng có vị ngọt, thơm và khá ngon. 
                Cây trổ hoa vào tháng 2-5, ra quả trong các tháng 5-8. (giống Garcinia còn gồm một số cây tương cận, đa số mọc 
                trong vùng Đông Ấn = West Indies, trong đó có thể kể Garcinia cambogia hay Bứa, Garcinia cowa cung cấp quả Cowa-Mangosteen 
                lớn hơn và có khía màu vàng apricot, vị chua; Garcinia indica hay Cocum = Conca cho quả chua, áo hạt màu tím, dùng làm giấm, hạt ép lấy dầu.)
                </p>
                ',
                'images'=>['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/mangcut.jpg?v=1553634578453','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/loiichkhotinchosuckhoetuquaman.jpg?v=1553634578453','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/levimartmangcut600x600.gif?v=1553634578453']
            ],
            [
                'id' => 27,
                'name' => 'Xoài tượng chín vàng Miền Nam',
                'price' => 160000,
                'price_sale' => 55000,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'fruit',
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Có khoảng 100 calo, 1g protein, 25g carbohydrate, 23g đường, khoảng 3g chất xơ và ít nhất là 0,5g chất béo có trong mỗi miễng xoài. Ngoài ra, trong xoài còn có chứa các loại vitamin A, B, C, K và hàm lượng sắt, đồng, canxi, các chất chống oxy hóa khá lớn. </p>
                    <p>Các chất chống oxy hóa trong xoài còn có tác dụng lọc những tia sáng xanh, gây hại cho mắt, nhất là nguy cơ mắc bệnh vàng da có liên quan đến tuổi già. Xoài còn có tác dụng ngăn ngừa các bệnh về hen suyễn, ung thư tiền liệt tuyến và kết trực tràng.</p>
                    <p><b>Tác dụng của xoài đối với bệnh tiểu đường</b></p>
                    <p>Có khá nhiều người cho rằng, xoài có thể làm tăng lượng đường trong máu nhưng trên thực tế, các quan niệm và suy nghĩ này là hoàn toàn sai lầm. Xoài là loại thực phẩm tự nhiên có khả năng giúp ổn định nồng độ insullin trong máu, ngăn chặn insullin trong máu tăng cao, rất hữu ích cho những người mắc bệnh tiểu đường. Không chỉ có quả xoài, mà nếu lá xoài được ngâm trong nước lọc qua đêm, người tiểu đường uống sẽ có tác dụng cải thiện trông thấy.</p>
                    <p><b>Tác dụng của quả xoài đối với bệnh thiếu máu</b></p>
                    <p>Đối với những người bị thiếu máu, xoài có chứa rất nhiều các chất sắt để bổ sung máu. Ngoài ra, chất sắt của xoài còn có thể làm sản sinh thêm lượng máu cần thiết nhất cho cơ thể.</p>
                ',
                'images'=>['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/8xoaicatchu600x600.jpg?v=1553634577340','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/14885169176146366559.jpg?v=1553634577340','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/14740116713719050563.jpg?v=1553634577340','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/97157chk5912015031026001480009.jpg?v=1553634577340']
            ],
            [
                'id' => 28,
                'name' => 'Dưa lưới nhập khẩu Thái Lan',
                'price' => 190000,
                'price_sale' => 80000,
                'brand' => "Đang cập nhật",
                'collection' => 'fruit',
                'origin' => null,
                'weigh' => null,
                'description' => null,
                'detail' => '
                <p>Dưa lưới (Galia) thuộc họ bầu bí, quả dưa này hình tròn hoặc dài, da màu xanh, khi chín thì ngả vàng và có các đường gân trắng đan xen như lưới nên mới được gọi là dưa lưới. Thịt quả dưa lưới màu vàng da cam hoặc nghiêng vàng đỏ như đu đủ trông rất hấp dẫn và giàu caroten, ăn giòn, mát và thơm ngọt, hàm lượng đường cao.</p>
                <p>Được lớp vỏ dày bảo vệ nên trái luôn mọng nước (88%), hàm lượng potassium (300 mg/100g) đáng kể nên dưa lưới có tính năng thanh lọc, lợi niệu, chất xơ (1g/100g) giúp nhuận trường, ít calori (48 Kcal), beta caroten và vitamin C.</p>
                <p>Theo kết quả phân tích định lượng các chất khoáng và vitamin thì cứ 100g dưa lưới có chứa: Acid Folic (21 μg), Nianci (0.734 mg), beta-carotene (2020 μg), Magiê (12 mg), sắt (0,21 mg), canxi (9mg), Vitamin C (36,7 mg), vitamin A (169 μg), năng lượng (34 kcal).</p>
                ',
                'images'=> ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/1754chk59120150818260410800000.jpg?v=1553634576667','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/hatgiongdualuoimui1grande.jpg?v=1553634576667','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/6668620140403101151.jpg?v=1553634576667','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/26600x600.jpg?v=1553634576667','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/2018329152537untitled3.jpg?v=1553634576667']
            ],
            [
                'id' => 29,
                'name' => 'Sầu riêng Miền Nam',
                'price' => 60000,
                'price_sale' => 45000,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'fruit',
                'weigh' => null,
                'description' => null,
                'detail' => '
                <p>Nếu bạn tiêu thụ khoảng 234g sầu riêng điều đó tương đương với bạn hấp thụ khoảng 20% lượng carbohydrate cần trong một ngày. Như thế sầu riêng chính là lựa chọn hoàn hảo dành cho bạn khi đang có nhu cầu bổ sung thêm năng lượng cho cơ thể, bởi lẽ chỉ cần ăn 1/5 trái sầu riêng bạn đã có thể bổ sung nguồn năng lượng cần thiết cho cả một ngày dài.</p>
                <p>Chứa nhiều Vitamin B</p>
                <p>Sầu riêng có chứa một lượng vitamin B khá cao, các vitamin B sẽ có một loạt các lợi ích cho sức khỏe như ngăn ngừa lão hóa và bệnh tim, giúp tăng HDL (cholesterol tốt) và thậm chí có thể giúp cải thiện tâm trạng, giảm bớt trầm cảm.</p>
                ',
                'images'=>['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/dimaybaycoduocmangsaurienghayk.jpg?v=1553634575557','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/sauriengri.jpg?v=1553634575557']
            ],
            [
                'id' => 30,
                'name' => 'Cam Thái nhập khẩu',
                'price' => '80000',
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'fruit',
                'weigh' => null,
                'description' => null,
                'detail' => '
                <p>Theo Viện Nghiên cứu nông học quốc gia Pháp, uống nửa lít nước cam mỗi ngày có thể cải thiện áp lực máu và 
                tái hoạt động của mạch máu (khả năng giãn nở). Chúng ta chỉ nhớ đến hàm lượng vitamin C trong cam chứ ít biết 
                rằng cam chứa một số các thành phần tổng hợp khác có ích cho sức khỏe. Trên thực tế, hàm lượng vitamin C chỉ chiếm 
                khoảng 15-20% trên tổng số các chất kháng oxy hóa trong trái cây này, trong khi những hợp chất khác lại có khả năng 
                chống oxy hóa cao hơn gấp 6 lần so với vitamin C: hesperidin từ flavanoid, có nhiều trong lớp vỏ xơ trắng, màng bao múi cam 
                và một ít trong tép và hạt cam, có khả năng giảm cholesterol xấu (LDL) và tăng cholesterol tốt (HDL). Cam được xem là một 
                “đồng minh” giúp ngăn ngừa các bệnh tim mạch, viêm nhiễm và cả ung thư, ngoài những tính năng mà người ta nhận biết qua những 
                nghiên cứu từ trước đến nay như củng cố hệ miễn nhiễm, chống cảm cúm, giảm tỷ lệ cholesterol xấu, chống viêm, ức chế các tế bào 
                ung thư, xoa dịu các cơn đau ruột, dạ dày, gan và thúc đẩy nhanh quá trình liền sẹo.</p>
                <p>Cam cũng chứa rutin (vitamin P), thành phần giúp mạch máu khỏe hơn; vitamin nhóm B, dưỡng chất không thể thiếu cho hệ thần kinh, các khoáng chất và chất xơ (hòa tan và không hòa tan).</p>
                <p>Khi uống nước cam đều đặn, chúng ta - đặc biệt là trẻ nhỏ - có thể tận hưởng những dưỡng chất từ loại trái cây chua này (ít calori, giàu vitamin) và có thể giúp ngăn ngừa nguy cơ phát triển các bệnh tim mạch ở tuổi trưởng thành. Tuy nhiên, người ta cũng lưu ý rằng cam nguyên trái, chín cây và sạch có chứa nhiều hesperidin hơn, vì qua quá trình vắt ép, thành phần này dễ dàng bị thất thoát.</p>
                <p>Thành phần từ cam được sử dụng rất phong phú từ lá, hoa, vỏ cây và trái đều có thể dùng để hãm thành nước uống có vị đắng nhẹ và hương cam đặc trưng. Nước hãm lá cam có thể giúp hạ hỏa, đặc biệt khi mất ngủ, xoa dịu rối loạn chức năng lưu thông máu.</p>
                ',
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/camuc600x600.jpg?v=1553634575023','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/camruotvangmyvovimart22243b.jpg?v=1553634575023','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/2014040403361303citrusfruits06.jpg?v=1553634575023']
            ],
            [
                'id' => 31,
                'name' => 'Nước ép chanh dây',
                'price' => 65000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'fruit',
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Chanh dây chứa nhiều axcid amin như: prolin, valin, tyrosin, treonin, glycin, leucin, arginin.. 
                    tốt cho người bị suy nhược cơ thể. Loại quả này còn là nguồn cung cấp lượng vitamin C và vitamin A dồi dào. 
                    Vitamin C là vi chất cần thiết cho sự tăng trưởng và phát triển của thai nhi trong giai đoạn đầu của thai kỳ. 
                    Đây cũng là một chất chống oxy hóa mạnh mẽ và duy trì hệ thống miễn dịch khỏe mạnh cho mẹ bầu. Còn vitamin A 
                    giúp cải thiện thị lực và chống nhiễm trùng, hữu ích trong việc chữa thiếu máu, có lợi cho sức khỏe tim mạch, giúp thư giãn, 
                    cũng như giảm các triệu chứng mất ngủ.</p>
                    <p>Ngoài ra, chiết xuất từ chanh dây còn có hiệu quả trong việc tiêu diệt tế bào ung thư. Các dưỡng chất carotenoid và polyphenol dồi dào trong chanh dây là 
                    chất chống oxy hóa mạnh mẽ có thể ức chế sự tăng trưởng của các tế bào ung thư.</p>
                ',
                'images' => ['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/464sinhtothomchanhday.jpg?v=1553634574253','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/cachlamnuocepchanhdaygiupchiem-ce2ccee5-1172-422b-a62d-923f0344a1f0.jpg?v=1553634574253','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/440nuocepchanhday.jpg?v=1553634574253']
            ],
            [
                'id' => 32,
                'name' => 'Nước cam ép',
                'price' => 45000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'fruit',
                'weigh' => null,
                'description' => null,
                'detail' => '
                <p>Nguồn gốc thực sự của cam thực sự là một bí ẩn, nhưng việc trồng cam được cho là đã bắt đầu ở miền đông Châu Á hàng ngàn năm trước đây. 
                Chúng được trồng ở hầu hết các khu vực ấm áp và được bán cam tươi hoặc làm nước ép trái cây.</p>
                <p>Cam chứa rất nhiều chất xơ, vitamin C, thiamin, folate và chất chống oxy hóa. Ngoài việc là thực sự ngon, cam còn có một số đặc tính y tế thú vị. Cam có rất nhiều loại khác nhau như là về kích thước, màu sắc và hương vị.</p>
                <p><b>Carbs</b></p>
                <p>Cam chủ yếu được tạo thành từ carbs và nước, chứa một lượng rất thấp protein và chất béo, ít calo.</p>
                <p>Các loại đường đơn, chẳng hạn như glucose, fructose và sucrose, là hình thức chi phối của các carbohydrate và tác động chính đến hương vị của cam.</p>
                <p>Mặc dù hàm lượng đường của cam có chỉ số glycemic thấp, dao động 31-51. Về giá trị các chỉ số đường huyết có liên quan đến sức khỏe. Các chỉ số glycemic thấp được giải thích bởi thực tế là cam rất giàu polyphenol và chất xơ.</p>
                <p>Cam chủ yếu được tạo thành từ carbs và nước. Xếp hạng thấp về chỉ số đường huyết, do đó, cam không gây đột biến lớn về lượng đường trong máu.<p>
                ',
                'images'=>['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/158102.jpg?v=1553634573533','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/nuoccamepgiupgiaidocganhieuqua.jpg?v=1553634573533']
            ],
            [
                'id' => 33,
                'name' => 'Thịt bò Mỹ',
                'price' => 365000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'fresh-food',
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Chắc các ấy cũng biết, các loại thịt động vật có vai trò hết sức quan trọng trong khẩu phần ăn của chúng mình. Nó tham gia vào quá trình hình thành, thay thế và phân hủy các tế bào trong cơ thể. Bên cạnh đó, thịt động vật còn rất cần thiết cho việc chuyển hóa các chất dinh dưỡng cung cấp cho cơ thể. Quan trọng nhất là protein cùng vitamin và chất khoáng đó mà!</p>
                    <p>Là thực phẩm không thể thiếu trong thực đơn của ấy nào muốn ăn kiêng hay những teens năng chơi thể thao, thịt bò giúp chúng mình tăng cường sức khỏe, ngăn ngừa bệnh tật và thúc đẩy quá trình hình thành các protein mới. Ngoài ra, nó còn hỗ trợ tích cực cho việc phục hồi cơ thể sau những buổi tập luyện mệt mỏi đấy teens ạ!</p>
                    <p>Các ấy có biết, trong 100g thịt bò có tới 28g protein cùng rất nhiều vitaminh B12, B6, khoáng chất cacnitin, kali, kẽm, magie, sắt... cơ đấy! Đồng thời, khối lượng thịt đó sẽ cung cấp cho chúng mình 280kcal năng lượng, gấp đôi so với cá và nhiều loại thịt động vật khác.</p>
                    <p>Điểm đặc biệt của protein trong thịt bò đó là nó chứa nhiều acid amin, acid gốc nitro. Chúng sẽ giúp các ấy biến protein trong thức ăn thành đường hữu cơ để cung cấp cho các hoạt động hàng ngày. Ngoài ra, thịt bò còn chứa acid linoleic và palmiotelic chống lại ung thư và các mầm bệnh khác nữa nhá!</p>
                ',
                'images'=>['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/4921botuoithb.jpg?v=1553634572787','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/thitbothan600x600.jpg?v=1553634572787','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/radongthitbomy4.jpg?v=1553634572787']
            ],
            [
                'id' => 34,
                'name' => 'Thịt lợn nạc vai',
                'price' => 65000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'fresh-food',
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Chất béo trong thịt lợn không phải là chất béo chuyển hóa mà chủ yếu là chất béo không bão hòa đơn và không bão hòa đa. Do đó, thịt lợn phù hợp với các chế độ ăn tốt cho tim mạch hoặc để giảm lượng cholesterol. Thịt lợn rất giàu khoáng chất như phốt pho, selenium, natri, kẽm, kali và đồng. Ngoài ra nó còn chứa hàm lượng sắt và magiê cao, tuy nhiên lượng canxi và mangan thì khá là ít ỏi. Thịt lợn là một nguồn cung vitamin phong phú như vitamin B1, B2, B5, B6, B12 và PP. Vitamin A và E cũng được tìm thấy tuy rất ít. Hàm lượng calo trong 100 gam thịt lợn là 458 calo.</p>
                ',
                'images'=>['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/14611211097538664793.jpg?v=1553634572043','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/duilon7.jpg?v=1553634572043','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/bactom96091.jpg?v=1553634572043']
            ],
            [
                'id' => 35,
                'name' => 'Nấm kim châm',
                'price' => 120000,
                'price_sale' => 90000,
                'brand' => "Đang cập nhật",
                'collection' => 'vegetable',
                'origin' => null,
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Nấm kim châm là loài nấm ăn màu trắng được sử dụng rộng rãi trong văn hóa ẩm thực ở các nước châu Á như là Nhật Bản, Trung Hoa, Triều Tiên, Việt Nam…<br>
                    Nấm kim châm rất bổ dưỡng cho sức khỏe con người</p>
                    <p>Nấm có hình giống với giá đỗ nhưng có kích thước lớn hơn. Mũ của nấm lúc còn non có hình cầu hay là hình bán cầu khi phát triển chuyển sang dạng ô.  Ở cuống nấm có màu trắng hay màu vàng nhạt, ở nửa dưới có màu nâu nhạt.</p>
                    <p>Nấm kim châm là thực phẩm ngon, và bổ nên được nhiều người tiêu dùng Việt Nam rất ưa thích. Các bạn có thể dễ dàng mua được loại nấm này trong những quầy rau quả trong siêu thị, ở chợ và các cửa hàng. Bạn nên mua nấm khi nấm còn tươi với mũ chắc, có màu trắng, và mũ bóng, tránh dùng nấm có thân nhầy nhụa hoặc là hơi nâu.</p>
                    <p>Công dụng của nấm kim châm.</p>
                    <p>Nấm kim châm là một trong những loại nấm có giá trị rất dinh dưỡng cao và rất tốt với một số bệnh như là tăng huyết áp, xơ vữa động mạch, và đái tháo đường. Ở trong nấm có nhiều kẽm và kali nên rất hữu ích cho người già. Bên cạnh đó loại nấm này cũng chứa một chất có tác dụng chống ung thư cực kỳ hiệu quả.</p>
                    <p>Nấm kim châm có chứa nhiều arginine, nó có công dụng phòng chống viêm gan và loét dạ dày.</p>
                    <p>Năm 2005 nhiều nhà nghiên cứu thuộc Đại học Quốc gia Singapore đã chỉ ra rằng ở thân cây nấm kim châm có chứa một số lượng lớn protein làm giúp điều hòa hệ thống miễn dịch. Khi tiến hành thử nghiệm trên động vật cho thấy tác dụng khả quan đối với bệnh ung thư. Và nấm cũng chứa flammutoxin, đây là một loại protein loại cytolytic và cardiotoxic có tác dụng rất tốt cho người hấp thụ thức ăn kém.</p>
                ',
                'images'=>['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/takimcham600x600.jpg?v=1553634571383','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/nambaonguxam.jpg?v=1553634571383','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/fzn0370ll1600x600.jpg?v=1553634571383']
            ],
            [
                'id' => 36,
                'name' => 'Nấm rơm sạch',
                'price' => 190000,
                'price_sale' => null,
                'brand' => "Đang cập nhật",
                'origin' => null,
                'collection' => 'vegetable',
                'weigh' => null,
                'description' => null,
                'detail' => '
                    <p>Trong 100g nấm rơm tươi chứa 90% nước, 3,6% đạm, 0,3% chất béo, 3,2% chất đường, 1,1% chất xơ (cellulose), 0,8% tro, 28mg% Ca, 80mg% P, 1,2% Fe, các vitamine A, B1, B2, C, D, PP… Cứ 100g nấm rơm tươi cho cơ thể 31 calorie.</p>
                    <p>Chu kỳ sinh trưởng và phát triển của nấm rơm rất nhanh chóng (10-12 ngày). Những ngày đầu nấm nhỏ như hạt tấm có màu trắng (giai đoạn đinh ghim), 2-3 ngày sau lớn rất nhanh bằng hạt ngô, quả táo, quả trứng (giai đoạn hình trứng), lúc trưởng thành (giai đoạn phát tán bào tử) trông giống như một chiếc ô dù, có cấu tạo thành các phần hoàn chỉnh. Bã sau khi trồng nấm chế biến thành phân sinh học cao cấp. Ngoài ra, bã nấm còn dùng để nuôi trùn đất, lấy trùn nuôi gia cầm, gia súc và tôm, cá.</p>
                    <p>Ở các quốc gia vùng nhiệt đới rất thích hợp về nhiệt độ để nấm rơm sinh trưởng và phát triển. Nhiệt độ thích hợp để nấm phát triển từ 30-32oC; độ ẩm nguyên liệu (cơ chất) 65-70%; độ ẩm không khí 80%; pH = 7, thoáng khí. Nấm rơm sử dụng dinh dưỡng cellulose (có nhiều trong rơm rạ) trực tiếp từ nguyên liệu trồng.</p>
                ',
                'images'=>['https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/namromtuoi600x600.jpg?v=1553634569637','https://bizweb.dktcdn.net/thumb/1024x1024/100/350/980/products/namromtuoi1.jpg?v=1553634569637']
            
                ]
        ];

        /*
            'id',
            'name',
        'price',
        'price_sale',
        'brand' => "Đang cập nhật",
        'origin',
        'weigh',
        'description',
        'detail'

        */

        foreach ($arrBanner as $key => $value) {
            Banner::create([
                'title' => $value['title'],
                'content' => $value['content'],
                'backgroundImage' => $value['backgroundImage'],
                'backgroundColor' => $value['backgroundColor']
            ]);
        }

        foreach ($arrAboutme as $key => $value) {
            AboutMe::create([
                'title' => $value['title'],
                'content' => $value['content'],
                'imageUrl' => $value['imageUrl']
            ]);
        }

        foreach ($arrProducts as $key => $value) {
            Product::create([
                'id' => $value['id'],
                'name' => $value['name'],
                'price' => $value['price'],
                'price_sale' => $value['price_sale'],
                'brand' => $value['brand'],
                'origin' => $value['origin'],
                'collection' => $value['collection'],
                'weigh' => $value['weigh'],
                'description' => $value['description'],
                'detail' => $value['detail'],
                'images' => $value['images'],
                'sold' => random_int(20,100)
            ]);
        }
    }
}