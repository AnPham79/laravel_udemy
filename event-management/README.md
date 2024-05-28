<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

 - Tạo file API

 - Sử dụng resource để chuyển sang dữ liệu kiểu json

 - Sử dụng postman để test api

 - tạo hàm sử lí load các relationship

 - Xem/Thêm/Sửa/Xóa trên postman

 - Sử dụng trait để sử dụng phương thức load relationship ở nhìu nơi.

 - tìm hiểu về laravel sanctum: 
    Laravel Sanctum cung cấp một hệ thống xác thực token cho các ứng dụng Laravel. 
    Sanctum cho phép mỗi người dùng của ứng dụng bạn tạo nhiều token API cho tài khoản của họ. 
    Các token này có thể được cấp quyền để thực hiện các hành động cụ thể.

 - Cấu hình authentication sanctum để xác thực API, sigle page application, ...

 - tạo AuthController với các phương thức login logout

 - dùng throw để validate 

 - đăng nhập thành công thì insert cái token zô bảng access token

 - bảo vệ routing (show với index thì k cần phải middleware còn edit với delete thì cần);

 - tự động thêm token trong postman request

 - xóa token khi đăng xuất

 - authorization bằng gate (gate::defind trong authServiceProvider và gat::denies trong controller trước cái mình muốn chặn)

 - authorization bằng policies

 - queue

 - notification
