  <h1 align="center"><b>PETSTORE - KANEPHAN Website</b></h1>

- ## Website Thương Mại Điện Tử Cửa Hàng Thú Cưng
- ## Link demo: ....

- ## ✨ **Tính năng**
    - User
        - Trang người dùng.
        - Đăng ký tài khoản, đăng nhập người dùng
        -	Tìm kiếm phân trang sản phẩm
        -	Xem thêm sản phẩm
        -	Chi tiết sản phẩm
        -	Giỏ hàng
        -	Xem các đơn hàng đã mua
        -	xem trạng thái sản phẩm, thông tin sản phẩm, khách hàng
        -	Thanh toán COD, Thanh toán online VNPAY
    
    - Admin
        -	Trang quản trị
        -	Đăng nhập admin      tk: admin@gmail.com mk: 123
        -	Tổng quan (Dashboard)
        -	Quản lý đơn hàng 
        -	Quản lý sản phẩm 
        -	Quản lý danh mục 
        -	Thêm sửa xóa sản phẩm, danh mục CRUD, Search
        -	Thống kê doanh thu tổng quan
- ## ⌨️ **Công nghệ sử dụng trong project**

  - ### **Back-end, Database**
    - PHP >= 10 (Laravel).
    - MySQL.
  - ### **Front-end**     
    - Xây dựng UI với Html/Css, boostrap
  - ### **Tool Team Work**
    - Git, Github.
    - IDE: Visual Studio Code.
- ## 📦 **Yêu cầu cài đặt Composer + Xampp trước khi chạy**

  ```
  - Composer :https://getcomposer.org/download/
  - Xampp: https://www.apachefriends.org/download.html
  ```

- ## 🔨 **Run project**
 > Bước 1: Giải nén tập tin .rar vừa tải về.

 > Bước 2: Mở Xampp start Apache, MySQL

 > Bước 3: Truy cập localhost/phpmyadmin tạo mới tên Database là larave
        import file shopthucung_laravel/larave.sql và bấm chạy

 > Bước 4: Mở thư mục shopthucung_laravel lên và chạy terminal gõ 2 lệnh sau:

    composer install
    php artisan key:generate

 > Bước 5: Chỉnh lại file .env
        -- các thông số dưới sao cho phù hợp với máy --
        
        DB_CONNECTION=mysql  	//kiểu kết nối
        DB_HOST=127.0.0.1   	//host truy cập
        DB_PORT=3306    	//port mysql
        DB_DATABASE=larave 	//tên database
        DB_USERNAME=root  	//user
        DB_PASSWORD=         	//có pass thì nhập
Bước 6: Cuối cùng chạy lệnh 

php artisan serve

- ## 🌍 **Document API**
  `> browser: http://localhost:{PORT}/api-docs/`
- ## 🖥 **Môi trường hỗ trợ**

  - Modern browsers, Mobile Browser and Internet Explorer 11.
