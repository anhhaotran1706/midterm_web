# Hướng Dẫn Biến Môi Trường (.env)

File `.env` chứa tất cả cấu hình cần thiết cho ứng dụng. 

## Tạo File .env

```bash
cd backend
copy .env.example .env
```

Sau đó sửa các giá trị theo nhu cầu của bạn.

## Các Biến Chính

### Cấu Hình Ứng Dụng

| Biến | Mô Tả | Ví Dụ |
|------|-------|-------|
| `APP_NAME` | Tên ứng dụng | `Task Management` |
| `APP_ENV` | Môi trường (local/production) | `local` |
| `APP_KEY` | Application key (tự động generate) | Để trống, chạy `php artisan key:generate` |
| `APP_DEBUG` | Bật debug mode | `true` (local), `false` (production) |
| `APP_URL` | URL cơ sở | `http://localhost:8000` |

### Logging

| Biến | Mô Tả | Giá Trị |
|------|-------|--------|
| `LOG_CHANNEL` | Kênh logging | `single` hoặc `stack` |
| `LOG_LEVEL` | Mức log | `debug`, `info`, `warning`, `error` |

### Database

#### SQLite (mặc định)
```env
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite
```

#### MySQL
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=midterm_web
DB_USERNAME=root
DB_PASSWORD=
```

### Cache & Queue

| Biến | Mô Tả | Giá Trị |
|------|-------|--------|
| `CACHE_STORE` | Nơi lưu cache | `file` hoặc `redis` |
| `QUEUE_CONNECTION` | Xử lý queue | `sync` (đơn giản), `database`, `redis` |

### Session

| Biến | Mô Tả | Giá Trị |
|------|-------|--------|
| `SESSION_DRIVER` | Driver session | `file` hoặc `database` |
| `SESSION_LIFETIME` | Thời gian sống (phút) | `120` |

### Mail (Email)

| Biến | Mô Tả | Ví Dụ |
|------|-------|--------|
| `MAIL_MAILER` | SMTP driver | `log` (dev), `smtp`, `gmail` |
| `MAIL_HOST` | SMTP host | `smtp.mailtrap.io` |
| `MAIL_PORT` | SMTP port | `2525` |
| `MAIL_USERNAME` | Email account | `your-email@gmail.com` |
| `MAIL_PASSWORD` | Email password/app password | `your-app-password` |
| `MAIL_FROM_ADDRESS` | Email pengirim | `hello@example.com` |

### Authentication Token

| Biến | Mô Tả | Giá Trị |
|------|-------|--------|
| `AUTH_TOKEN_EXPIRY` | Token hết hạn sau (giây) | `2592000` (30 ngày) |

### Tài Khoản Admin/Test

| Biến | Mô Tả | Giá Trị |
|------|-------|--------|
| `ADMIN_EMAIL` | Email admin | `admin@example.com` |
| `ADMIN_PASSWORD` | Mật khẩu admin | `password` |
| `ADMIN_NAME` | Tên admin | `Admin User` |
| `TEST_EMAIL` | Email test user | `test@example.com` |
| `TEST_PASSWORD` | Mật khẩu test | `password` |
| `TEST_NAME` | Tên test user | `Test User` |

## Ví Dụ File .env Hoàn Chỉnh

```env
# Application
APP_NAME="Task Management"
APP_ENV=local
APP_KEY=
APP_DEBUG=true
APP_URL=http://localhost:8000

# Logging
LOG_CHANNEL=single
LOG_LEVEL=debug

# Database - SQLite
DB_CONNECTION=sqlite
DB_DATABASE=database/database.sqlite

# Cache & Queue
CACHE_STORE=file
QUEUE_CONNECTION=sync
SESSION_DRIVER=file

# Mail (Development)
MAIL_MAILER=log

# Auth
AUTH_TOKEN_EXPIRY=2592000

# Admin Account
ADMIN_EMAIL=admin@example.com
ADMIN_PASSWORD=password
ADMIN_NAME="Admin User"

# Test Account
TEST_EMAIL=test@example.com
TEST_PASSWORD=password
TEST_NAME="Test User"
```

## Tùy Chỉnh Cho Production

### Bảo Mật

```env
APP_ENV=production
APP_DEBUG=false
```

### Database (MySQL)

```env
DB_CONNECTION=mysql
DB_HOST=your-db-host.com
DB_DATABASE=production_db
DB_USERNAME=db_user
DB_PASSWORD=secure_password
```

### Email (Gmail)

```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-specific-password
MAIL_ENCRYPTION=tls
```

### Cache & Session (Redis)

```env
CACHE_STORE=redis
SESSION_DRIVER=cookie
QUEUE_CONNECTION=redis
```

## Kiểm Tra Cấu Hình

```bash
# Xem tất cả cấu hình
php artisan config:show

# Xem cấu hình cụ thể
php artisan config:show app
php artisan config:show database
```

## Cảnh Báo Bảo Mật

⚠️ **KHÔNG BAO GIỜ**:
- Commit file `.env` lên Git
- Chia sẻ `APP_KEY` công khai
- Để `APP_DEBUG=true` trên production
- Để password database trong `.env` (sử dụng environment variables hoặc secrets management)

## Truy Cập Biến .env Trong Code

```php
// Cách 1: env() helper
$appName = env('APP_NAME', 'default-value');

// Cách 2: Config facade
$appName = config('app.name');

// Cách 3: $_ENV global
$appName = $_ENV['APP_NAME'];
```

---

Để chi tiết hơn, xem [README.md](README.md) hoặc [SETUP_INSTRUCTIONS.md](SETUP_INSTRUCTIONS.md)
