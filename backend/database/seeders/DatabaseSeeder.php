<?php

namespace Database\Seeders;

use App\Models\Project;
use App\Models\Task;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Tạo user admin
        $admin = User::create([
            'name' => env('ADMIN_NAME', 'Admin User'),
            'email' => env('ADMIN_EMAIL', 'admin@example.com'),
            'password' => env('ADMIN_PASSWORD', 'password'),
        ]);

        // Tạo user test
        $testUser = User::create([
            'name' => env('TEST_NAME', 'Test User'),
            'email' => env('TEST_EMAIL', 'test@example.com'),
            'password' => env('TEST_PASSWORD', 'password'),
        ]);

        // Tạo projects cho admin
        $p1 = Project::create(['name' => 'Công việc', 'color' => '#6366f1', 'user_id' => $admin->id]);
        $p2 = Project::create(['name' => 'Cá nhân',   'color' => '#10b981', 'user_id' => $admin->id]);
        $p3 = Project::create(['name' => 'Học tập',   'color' => '#f59e0b', 'user_id' => $admin->id]);

        // Tạo tasks cho admin
        $tasks = [
            ['title' => 'Hoàn thành báo cáo tháng',    'priority' => 'high',   'status' => 'in_progress', 'due_date' => now()->addHours(3),  'project_id' => $p1->id, 'user_id' => $admin->id],
            ['title' => 'Review code pull request',     'priority' => 'medium', 'status' => 'todo',        'due_date' => now()->addHours(5),  'project_id' => $p1->id, 'user_id' => $admin->id],
            ['title' => 'Họp team buổi chiều',          'priority' => 'high',   'status' => 'todo',        'due_date' => now()->addHours(2),  'project_id' => $p1->id, 'user_id' => $admin->id],
            ['title' => 'Mua đồ ăn',                   'priority' => 'low',    'status' => 'todo',        'due_date' => now()->addHours(6),  'project_id' => $p2->id, 'user_id' => $admin->id],
            ['title' => 'Tập thể dục',                 'priority' => 'medium', 'status' => 'done',        'due_date' => now()->subHours(1),  'project_id' => $p2->id, 'user_id' => $admin->id],
            ['title' => 'Ôn tập Laravel',              'priority' => 'high',   'status' => 'in_progress', 'due_date' => now()->addDays(1),   'project_id' => $p3->id, 'user_id' => $admin->id],
            ['title' => 'Làm bài tập PWA',             'priority' => 'high',   'status' => 'todo',        'due_date' => now()->addDays(2),   'project_id' => $p3->id, 'user_id' => $admin->id],
            ['title' => 'Đọc sách Clean Code',         'priority' => 'low',    'status' => 'todo',        'due_date' => now()->addDays(5),   'project_id' => $p3->id, 'user_id' => $admin->id],
            ['title' => 'Task quá hạn cần xử lý',      'priority' => 'high',   'status' => 'todo',        'due_date' => now()->subDays(1),   'project_id' => $p1->id, 'user_id' => $admin->id],
            ['title' => 'Cập nhật dependencies',       'priority' => 'medium', 'status' => 'todo',        'due_date' => now()->addDays(7),   'project_id' => $p1->id, 'user_id' => $admin->id],
        ];

        foreach ($tasks as $task) {
            Task::create($task);
        }

        // Tạo projects cho test user
        $tp1 = Project::create(['name' => 'Dự án Test', 'color' => '#8b5cf6', 'user_id' => $testUser->id]);

        // Tạo tasks cho test user
        $testTasks = [
            ['title' => 'Task test 1', 'priority' => 'high', 'status' => 'todo', 'due_date' => now()->addDays(1), 'project_id' => $tp1->id, 'user_id' => $testUser->id],
            ['title' => 'Task test 2', 'priority' => 'medium', 'status' => 'in_progress', 'due_date' => now()->addDays(2), 'project_id' => $tp1->id, 'user_id' => $testUser->id],
        ];

        foreach ($testTasks as $task) {
            Task::create($task);
        }
    }
}
