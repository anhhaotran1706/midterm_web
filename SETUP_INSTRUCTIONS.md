# HƯỚNG DẪN SETUP NHANH

Thực hiện các bước sau để setup và chạy dự án:

## Bước 1: Chuẩn Bị Thư Mục

```bash
cd c:\xampp\htdocs\midterm_web-main\midterm_web-main\backend
```

## Bước 2: Cài Đặt Composer Dependencies

```bash
composer install
```

## Bước 3: Tạo File .env

```bash
copy .env.example .env
```

Hoặc tạo file `.env` và sao chép nội dung từ `.env.example`

## Bước 4: Generate Application Key

```bash
php artisan key:generate
```

## Bước 5: Tạo Database & Chạy Migration + Seeding

```bash
# Cách 1: Chạy tất cả migrations và seeders cùng lúc
php artisan migrate:fresh --seed
```

```bash
# Cách 2: Chạy từng bước (nếu cách 1 có lỗi)
php artisan migrate
php artisan db:seed
```

## Bước 6: Khởi Động Server

```bash
php artisan serve
```

Ứng dụng sẽ chạy tại: **http://localhost:8000**

## Đăng Nhập Test

Sau khi chạy seeding, bạn có thể đăng nhập với:

### Tài Khoản Admin
- **Email**: `admin@example.com`
- **Password**: `password`

### Tài Khoản Test
- **Email**: `test@example.com`
- **Password**: `password`

## Các Lệnh Hữu Ích

```bash
# Xem tất cả routes
php artisan route:list

# Vào tinker shell (tương tác trực tiếp với database)
php artisan tinker

# Reset database và seeding
php artisan migrate:fresh --seed

# Xem logs
tail -f storage/logs/laravel.log
```

## Cấu Trúc API Endpoints

**Base URL**: `http://localhost:8000/api`

### Authentication
- `POST /api/auth/register` - Đăng ký tài khoản mới
- `POST /api/auth/login` - Đăng nhập
- `POST /api/auth/logout` - Đăng xuất
- `GET /api/auth/me` - Lấy thông tin user hiện tại

### Projects
- `GET /api/projects` - Lấy tất cả projects
- `POST /api/projects` - Tạo project mới
- `GET /api/projects/{id}` - Lấy chi tiết project
- `PUT /api/projects/{id}` - Cập nhật project
- `DELETE /api/projects/{id}` - Xóa project

### Tasks
- `GET /api/tasks` - Lấy tất cả tasks
- `POST /api/tasks` - Tạo task mới
- `GET /api/tasks/{id}` - Lấy chi tiết task
- `PUT /api/tasks/{id}` - Cập nhật task
- `DELETE /api/tasks/{id}` - Xóa task
- `GET /api/tasks/upcoming` - Lấy các task sắp tới

## Xử Lý Lỗi

### Lỗi: "Call to undefined function Pdo\Mysql"
- Nếu dùng SQLite, có thể bỏ qua. Nếu dùng MySQL, kiểm tra PHP extension `pdo_mysql` đã được bật.

### Lỗi: Database file not found
```bash
# Tạo thư mục nếu cần
mkdir -p database
php artisan migrate
```

### Lỗi Permission Denied (Windows)
```powershell
# Chạy PowerShell as Administrator
icacls "storage" /grant Everyone:F /T
icacls "bootstrap/cache" /grant Everyone:F /T
```

## Support

Nếu gặp vấn đề, kiểm tra:
1. ✅ PHP version >= 8.2: `php -v`
2. ✅ Composer installed: `composer --version`
3. ✅ File `.env` tồn tại
4. ✅ `APP_KEY` được generate
5. ✅ Database migrations chạy thành công
6. ✅ Storage folder có quyền ghi

---

**Chúc bạn thành công!** 🚀
