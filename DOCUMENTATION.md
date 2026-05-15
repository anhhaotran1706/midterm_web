# 📚 Tài Liệu Dự Án

Dưới đây là danh sách các tài liệu hướng dẫn cho dự án Task Management:

## 🚀 Bắt Đầu Nhanh

- **[SETUP_INSTRUCTIONS.md](SETUP_INSTRUCTIONS.md)** - Hướng dẫn setup trong 6 bước
  - Cài đặt dependencies
  - Tạo file .env
  - Khởi chạy server
  - Đăng nhập test

## 📖 Tài Liệu Chi Tiết

- **[README.md](README.md)** - Hướng dẫn toàn diện
  - Yêu cầu hệ thống
  - Cấu trúc thư mục
  - Lệnh hữu ích
  - Xử lý sự cố

- **[ENV_GUIDE.md](ENV_GUIDE.md)** - Hướng dẫn biến môi trường
  - Giải thích từng biến
  - Cấu hình cho development/production
  - Ví dụ file .env
  - Cảnh báo bảo mật

- **[ACCOUNTS.md](ACCOUNTS.md)** - Quản lý tài khoản
  - Tài khoản mặc định
  - Tạo tài khoản mới
  - Thay đổi mật khẩu
  - Tài khoản admin/test

## 🔑 Tài Khoản Test

### Admin
```
Email: admin@example.com
Password: password
```

### Test User
```
Email: test@example.com
Password: test@example.com
```

## 📁 Cấu Trúc File

```
midterm_web-main/
├── README.md              ← Bắt đầu từ đây
├── SETUP_INSTRUCTIONS.md  ← Setup nhanh
├── ENV_GUIDE.md           ← Cấu hình biến môi trường
├── ACCOUNTS.md            ← Quản lý tài khoản
├── DOCUMENTATION.md       ← File này
└── backend/
    ├── .env.example       ← Template .env
    ├── composer.json
    └── ...
```

## ⚡ Lệnh Khởi Động Nhanh

```bash
cd backend
composer install
cp .env.example .env
php artisan key:generate
php artisan migrate:fresh --seed
php artisan serve
```

Truy cập: `http://localhost:8000`

## 🔗 API Endpoints

**Base URL**: `http://localhost:8000/api`

```
POST   /auth/register
POST   /auth/login
POST   /auth/logout
GET    /auth/me

GET    /projects           (danh sách)
POST   /projects           (tạo mới)
GET    /projects/{id}      (chi tiết)
PUT    /projects/{id}      (cập nhật)
DELETE /projects/{id}      (xóa)

GET    /tasks              (danh sách)
POST   /tasks              (tạo mới)
GET    /tasks/{id}         (chi tiết)
PUT    /tasks/{id}         (cập nhật)
DELETE /tasks/{id}         (xóa)
GET    /tasks/upcoming     (sắp tới)
```

## 🎯 Hỗ Trợ & Xử Lý Sự Cố

Nếu gặp vấn đề:

1. ✅ Kiểm tra [README.md](README.md) phần "Xử Lý Sự Cố"
2. ✅ Xem [SETUP_INSTRUCTIONS.md](SETUP_INSTRUCTIONS.md) phần "Support"
3. ✅ Kiểm tra logs: `storage/logs/laravel.log`
4. ✅ Chạy lại: `php artisan migrate:fresh --seed`

## 📱 Frontend

- **Frontend static files**: `backend/public/frontend/`
- **Main app**: `backend/public/frontend/index.html`
- **Service Worker**: `backend/public/frontend/sw.js`
- **Manifest**: `backend/public/frontend/manifest.json` (PWA)

## 🗄️ Database

- **Driver**: SQLite (mặc định) hoặc MySQL
- **File**: `backend/database/database.sqlite`
- **Migrations**: `backend/database/migrations/`
- **Seeders**: `backend/database/seeders/`

## 🔐 Bảo Mật

- Token authentication cho API
- Password hashed với bcrypt
- CORS configuration (nếu có)
- Middleware token.auth cho protected routes

---

## 🎓 Học Thêm

- [Laravel Documentation](https://laravel.com/docs)
- [REST API Best Practices](https://restfulapi.net/)
- [PWA Guide](https://web.dev/progressive-web-apps/)

---

**Phiên bản**: 1.0  
**Ngày cập nhật**: May 15, 2026

Chúc bạn thành công với dự án! 🚀
