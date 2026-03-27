# Sử dụng môi trường PHP 8.2 kết hợp với máy chủ Apache
FROM php:8.2-apache

# Cài đặt các thư viện cần thiết để PHP kết nối được với MySQL
RUN docker-php-ext-install mysqli pdo pdo_mysql

# Copy toàn bộ code từ máy bạn vào thư mục mặc định của Apache trên máy chủ
COPY . /var/www/html/

# Cấp quyền cho Apache truy cập file
RUN chown -R www-data:www-data /var/www/html/

# Mở cổng 80 để truy cập web
EXPOSE 80