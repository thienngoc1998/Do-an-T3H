<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Xiaomi extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for ($i=1;$i<=10;$i++) {
            DB::table('products')->insert([
                'name' => 'Xiaomi ' .$i ,
                'origin' =>'Quốc tế',
                'guarantee' => 1,
                'unit_pr' => 1500,
                'promotion_pr' => 0,
                'status' => 'mới',
                'avatar' => $i.'.jpg',
                'number' => 5,
                'size' => '32GB',
                'producer' => 'xiaomi',
                'active' => 1,
                'hot' => 0,
                'content' =>   'Thiết kế nguyên khối siêu mỏng
                                Điện Thoại iPhone 7 32GB - Hàng Chính Hãng FPT với kích thước 138.3 x 67.1 x 7.1 mm mỏng nhẹ và thiết kế tương tự như bộ đôi iPhone 6s/6s Plus, tuy nhiên phần dải nhựa bắt sóng không cắt ngang mặt lưng như phiên bản cũ mà được chuyển sang phần cạnh trên của sản phẩm. Phím Home vật lý trên điện thoại cũng được thay thế bằng phím cảm ứng nhờ vào sự kết hợp Taptic Engine mới và liên kết với 3D Touch tiện lợi và đẹp mắt.
                                Điện Thoại iPhone 7 32GB - Hàng Chính Hãng
                                Màn hình Retina HD 4.7 inches với  không gian màu rộng và 3D Touch
                                iPhone 7 sở hữu màn hình Retina HD 4.7 inches có độ phân giải 1334 x 750 Pixels, mang đến khả năng cung cấp không gian màu sắc tương tự như các thiết bị kỹ thuật số, giúp màn hình hiển thị rực rỡ và sống động và mang lại cho bạn trải nghiệm hình ảnh ấn tượng.Điện Thoại iPhone 7 32GB - Hàng Chính Hãng
                                Ngoài ra, màn hình được tích hợp tích hợp công nghệ 3D Touch, giúp máy vận hành nhanh chóng hơn khi bạn tương tác với màn hình để sử dụng các ứng dụng tin nhắn, mail, lịch,
                                Hiệu năng mạnh mẽ vượt trội
                                Với thiết kế lõi tứ hoàn toàn mới, chip A10 Fusion có các lõi hiệu suất cao có thể chạy với tốc độ lên đến 2x so với tốc độ của iPhone 6 và giúp giảm điện năng tiêu thụ khoảng 20% để tiết kiệm pin và kéo dài thời gian sử dụng.
                                Ngoài ra, sản phẩm có RAM 2GB và sử dụng hệ điều hành iOS 10, giúp máy vận hành mượt mà, xử lý đa nhiệm hiệu quả để đáp ứng cho nhu cầu sử dụng của bạn. Bộ nhớ trong của điện thoại lên đến 32 GB để bạn thoải mái lưu trữ dữ liệu và cài đặt ứng dụng dễ dàng.
                                Điện Thoại iPhone 7 32GB - Hàng Chính Hãng
                                Bộ đôi camera hoàn hảo
                                iPhone 7 sở hữu bộ đôi camera với camera chính ở phía sau được thiết kế lồi lên so với mặt sau và có kích thước lớn hơn các phiên bản trước, có độ phân giải 12MP và khẩu độ  tăng lên F/1.8  để bạn có thể chụp ảnh hoặc quay video tốt hơn trong điều kiện ánh sáng yếu. Ngoài ra, với tính năng mới tiên tiến như chụp màu rộng và cùng khả năng ổn định hình ảnh quang học giúp giảm rung và giảm mờ nét, hình ảnh và video của bạn sẽ trở nên sống động và chân thật hơn. Thiết bị có bốn đèn flash LED thông minh, sáng hơn 50 phần trăm so với iPhone 6s.
                                Đặc biệt, iPhone 7 cho phép bạn chụp ảnh ở độ phân giải 4K - với hơn 8 triệu điểm ảnh. Và bạn có thể chỉnh sửa video của bạn trong iMovie và chia sẻ ngay lập tức.
                                Với camera phụ ở mặt trước điện thoại với độ phân giải 7MP cùng với các Retina flash phù hợp với ánh sáng xung quanh, mang đến bạn bức ảnh với tông màu da tự nhiên và đẹp mắt. Bạn có thể thỏa sức selfie hoặc video call với bạn bè, người thân một cách nhanh chóng.',
                'cate_id' => 5,
                'user_id' => 2,
                'created_at'=>now(),
                'updated_at'=>now(),
            ]);
        }
    }
}
