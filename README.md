# Task Management Application - Hướng Dẫn Setup

Ứng dụng quản lý công việc xây dựng bằng Laravel (Backend) + Frontend (HTML/CSS/JS).

## 📋 Yêu Cầu

- PHP 8.2 hoặc cao hơn
- Composer
- Node.js & npm
- SQLite hoặc MySQL
- XAMPP (khuyến khích)

## 🚀 Hướng Dẫn Setup

### 1. Clone hoặc Tải Dự Án

```bash
cd c:\xampp\htdocs\midterm_web
```

### 2. Setup Backend

#### Bước 1: Cài đặt Dependencies PHP

```bash
cd backend
composer install
```

#### Bước 2: Tạo file .env

```bash
cp .env.example .env
```

Hoặc sao chép nội dung từ `backend/.env.example` vào `backend/.env`

#### Bước 3: Tạo Application Key

```bash
php artisan key:generate
```

#### Bước 4: Chạy Migration và Seeding

```bash
# Chạy các migration để tạo bảng dữ liệu
php artisan migrate

# Tạo dữ liệu mẫu (projects, tasks, user admin)
php artisan db:seed
```

#### Bước 5: Link Storage (nếu cần)

```bash
php artisan storage:link
```

#### Bước 6: Cài đặt Dependencies Frontend (tùy chọn)

```bash
npm install
```

### 3. Chạy Ứng Dụng

#### Development Server

```bash
# Từ thư mục backend
php artisan serve
```

Ứng dụng sẽ chạy tại: `http://localhost:8000`

#### Hoặc sử dụng XAMPP

- Đặt dự án trong `C:\xampp\htdocs\midterm_web\backend`
- Start Apache từ XAMPP Control Panel
- Truy cập: `http://localhost/midterm_web/backend/public`

### Tài khoản Test

- **Username**: `test`
- **Password**: `12345678`

## 📁 Cấu Trúc Thư Mục

```
midterm_web-main/
├── backend/                 # Laravel Backend
│   ├── app/
│   │   ├── Http/           # Controllers, Middleware
│   │   └── Models/         # Database Models
│   ├── config/             # Configuration Files
│   ├── database/
│   │   ├── migrations/     # Database Migrations
│   │   └── seeders/        # Database Seeders
│   ├── routes/             # API Routes
│   ├── public/
│   │   └── frontend/       # Static Frontend Files
│   └── .env.example        # Environment Template
└── README.md               # Tài liệu này
```
## 🔧 link demo_drive, demo_youtube, web_deploy, repository

- **demo_drive**: `https://drive.google.com/file/d/1Dzi438InlsG4pZKkm552KG1e70au07lw/view?usp=drive_link`
- **demo_youtube**: `https://www.youtube.com/watch?v=Ux17JpaprTo`
- **web_deploy**: `https://midtermweb-main-production.up.railway.app/auth`
- **repository**: `https://github.com/anhhaotran1706/midterm_web`

## 🔧 Các Lệnh Hữu Ích

### Quản lý Database

```bash
# Chạy tất cả migration
php artisan migrate

# Rollback migration lần cuối
php artisan migrate:rollback

# Rollback tất cả và chạy lại
php artisan migrate:refresh

### API Routes

- **Base URL**: `http://localhost:8000/api`
- Xem chi tiết tại `backend/routes/api.php`

## 🐛 Xử Lý Sự Cố

### Lỗi Permission (storage, bootstrap/cache)

```bash
# Windows (PowerShell as Admin)
icacls "storage" /grant Everyone:F /T
icacls "bootstrap/cache" /grant Everyone:F /T
```

### Database không được tạo

```bash
# Kiểm tra file .env, đảm bảo:
# DB_CONNECTION=sqlite
# Hoặc MySQL được cấu hình đúng

# Tạo file database SQLite
php artisan migrate
```

### Lỗi "Class not found"

```bash
composer dump-autoload
```

## 📚 Tài Liệu Thêm

- [Laravel Documentation](https://laravel.com/docs)
- [API Routes](backend/routes/api.php)
- [Models](backend/app/Models/)

## 📞 Hỗ Trợ

Nếu gặp vấn đề, vui lòng kiểm tra:
1. PHP version: `php -v`
2. Composer: `composer --version`
3. File `.env` được tạo và key được generate
4. Database migration chạy thành công
5. File permissions cho storage & bootstrap/cache

---

**Phiên bản**: 1.0  
**Ngày cập nhật**: May 15, 2026
