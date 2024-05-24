<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

// hiểu về route

bài 1 migration task

bài 2 factories task
- php artisan db:seed tạo dự liệu

- php artisan migrate:refresh --seed xóa dữ liệu

trong user factories
public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }

- để tạo email chưa đc xác minh
- Sử dụng phương thức state để thay đổi trạng thái của đối tượng.
- Truyền vào một hàm ẩn danh (fn (array $attributes) => [...]) để định nghĩa trạng thái mới.
- Thiết lập giá trị của trường email_verified_at thành null.
- cột email variety sẽ bị null.
==> dùng để kiếm thử 

bài 3: model and reading data

- load dữ liệu ngay trên route bằng cách gọi tới App\Models\< model >

bài 4: form and csrf protection
- tạo form

bài 5: validation storing data

$request->validate

bài 6: session, error flashmessages

@hàm mới: @errors('< tên cột >')

bài 7 edit

bài 8: keep old values in form

bài 9: Reusability (Route Model Binding Form Requests, Mass Assignment)

bài 10. Reusing Blade Code - Subviews

bài 11: dùng taiwin css