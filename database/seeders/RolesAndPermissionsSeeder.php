<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Contracts\Role as RoleContract;
use Spatie\Permission\Contracts\Permission as PermissionContract;


class RolesAndPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        /**
         * Create admin roles and permissions
         */
        $admin_role = app(RoleContract::class)->create(['name' => 'admin']);
        $admin_permissions = [
            'create user',
            'read user',
            'update user',
            'delete user',

            'create foundation',
            'read foundation',
            'update foundation',
            'delete foundation',

            'create role',
            'read role',
            'update role',
            'delete role',

            'create permission',
            'read permission',
            'update permission',
            'delete permission',

            'create post',
            'read post',
            'update post',
            'delete post',

            'create comment',
            'read comment',
            'update comment',
            'delete comment',

            'create category',
            'read category',
            'update category',
            'delete category',

            'create tag',
            'read tag',
            'update tag',
            'delete tag',

            'create media',
            'read media',
            'update media',
            'delete media',

            'create lesson',
            'read lesson',
            'update lesson',
            'delete lesson',

            'create course',
            'read course',
            'update course',
            'delete course',

            'create section',
            'read section',
            'update section',
            'delete section',

            'create question',
            'read question',
            'update question',
            'delete question',

            'create answer',
            'read answer',
            'update answer',
            'delete answer',

            'create quiz',
            'read quiz',
            'update quiz',
            'delete quiz',
            'create exam',

            'read exam',
            'update exam',
            'delete exam',

            'create classroom',
            'read classroom',
            'update classroom',
            'delete classroom',

            'create student',
            'read student',
            'update student',
            'delete student',

            'create teacher',
            'read teacher',
            'update teacher',
            'delete teacher',

            'create parent',
            'read parent',
            'update parent',
            'delete parent',

            'create staff',
            'read staff',
            'update staff',
            'delete staff',

            'create subject',
            'read subject',
            'update subject',
            'delete subject',

            'create assignment',
            'read assignment',
            'update assignment',
            'delete assignment',

            'create attendance',
            'read attendance',
            'update attendance',
            'delete attendance',

            'create event',
            'read event',
            'update event',
            'delete event',

            'create notice',
            'read notice',
            'update notice',
            'delete notice',

            'create fees structures',
            'read fees structures',
            'update fees structures',
            'delete fees structures',

            'create fees payment plan',
            'read fees payment plan',
            'update fees payment plan',
            'delete fees payment plan',

            'create fees payment method',
            'read fees payment method',
            'update fees payment method',
            'delete fees payment method',

            'create invoices',
            'read invoices',
            'update invoices',
            'delete invoices',

            'create expenses',
            'read expenses',
            'update expenses',
            'delete expenses',

            'create library',
            'read library',
            'update library',
            'delete library',

            'create instruments',
            'read instruments',
            'update instruments',
            'delete instruments',

            'create store',
            'read store',
            'update store',
            'delete store',

            'create classes',
            'read classes',
            'update classes',
            'delete classes',

            'create live classes',
            'read live classes',
            'update live classes',
            'delete live classes',

            'create notification',
            'read notification',
            'update notification',
            'delete notification',

            'create schools',
            'read schools',
            'update schools',
            'delete schools',
        ];
        foreach ($admin_permissions as $admin_permission) {
            if (!app(PermissionContract::class)->where('name', $admin_permission)->first())
                app(PermissionContract::class)->create(['name' => $admin_permission]);
        }
        $admin_role->syncPermissions($admin_permissions);

        /**
         * Create teacher permissions and assign to teacher role 
         * 
         */
        
        $teacher_role = app(RoleContract::class)->create(['name' => 'teacher']);
        $teacher_permissions = [
            'create post',
            'read post',
            'update post',
            'delete post',

            'create comment',
            'read comment',
            'update comment',
            'delete comment',

            'create category',
            'read category',
            'update category',
            'delete category',

            'create tag',
            'read tag',
            'update tag',
            'delete tag',

            'create media',
            'read media',
            'update media',
            'delete media',

            'create lesson',
            'read lesson',
            'update lesson',
            'delete lesson',

            'create course',
            'read course',
            'update course',
            'delete course',

            'create section',
            'read section',
            'update section',
            'delete section',

            'create question',
            'read question',
            'update question',
            'delete question',

            'create answer',
            'read answer',
            'update answer',
            'delete answer',

            'create quiz',
            'read quiz',
            'update quiz',
            'delete quiz',
            'create exam',

            'read exam',
            'update exam',
            'delete exam',

            'create classroom',
            'read classroom',
            'update classroom',
            'delete classroom',

            'create student',
            'read student',
            'update student',
            'delete student',

            'create assignment',
            'read assignment',
            'update assignment',
            'delete assignment',

            'create attendance',
            'read attendance',
            'update attendance',
            'delete attendance',

            'create notice',
            'read notice',
            'update notice',
            'delete notice'
        ];
        foreach ($teacher_permissions as $teacher_permission) {
            if (!app(PermissionContract::class)->where('name', $teacher_permission)->first()) {
                app(PermissionContract::class)->create(['name' => $teacher_permission]);
            }
        }
        $teacher_role->syncPermissions($teacher_permissions);

        /**
         * Create student roles and permissions
         */
        $student_role = app(RoleContract::class)->create(['name' => 'student']);
        $student_permissions = [
            'create post',
            'read post',
            'update post',
            'delete post',

            'create comment',
            'read comment',
            'update comment',
            'delete comment',

            'create category',
            'read category',
            'update category',
            'delete category',

            'create tag',
            'read tag',
            'update tag',
            'delete tag',

            'create media',
            'read media',
            'update media',
            'delete media',

            'create answer',
            'read answer',
            'update answer',
            'delete answer',

            'create quiz',
            'read quiz',
            'update quiz',
            'delete quiz',

            'create assignment',
            'read assignment',
            'update assignment',
            'delete assignment',

        ];
        foreach ($student_permissions as $student_permission) {
            if (!app(PermissionContract::class)->where('name', $student_permission)->first())
                app(PermissionContract::class)->create(['name' => $student_permission]);
        }
        $student_role->syncPermissions($student_permissions);

        /**
         * Create parent roles and permissions
         */
        $parent_role = app(RoleContract::class)->create(['name' => 'parent']);
        $parent_permissions = [
            'create student',
            'read student',
            'update student',
            'delete student',

            'create post',
            'read post',
            'update post',
            'delete post',

            'create comment',
            'read comment',
            'update comment',
            'delete comment',

            'create category',
            'read category',
            'update category',
            'delete category',

            'create tag',
            'read tag',
            'update tag',
            'delete tag',

            'create answer',
            'read answer',
            'update answer',
            'delete answer',

        ];
        foreach ($parent_permissions as $parent_permission) {
            if (!app(PermissionContract::class)->where('name', $parent_permission)->first()) {
                app(PermissionContract::class)->create(['name' => $parent_permission]);
            }
        }
        $parent_role->syncPermissions($parent_permissions);

        /**
         * Create accountant roles and permissions
         */
        $accountant_role = app(RoleContract::class)->create(['name' => 'accountant']);
        $accountant_permissions = [
            'create fees structures',
            'read fees structures',
            'update fees structures',
            'delete fees structures',

            'create fees payment plan',
            'read fees payment plan',
            'update fees payment plan',
            'delete fees payment plan',

            'create fees payment method',
            'read fees payment method',
            'update fees payment method',
            'delete fees payment method',

            'create invoices',
            'read invoices',
            'update invoices',
            'delete invoices',

            'create expenses',
            'read expenses',
            'update expenses',
            'delete expenses',

            'read transactions',
        ];
        foreach ($accountant_permissions as $accountant_permission) {
            if (!app(PermissionContract::class)->where('name', $accountant_permission)->first()) {
                app(PermissionContract::class)->create(['name' => $accountant_permission]);
            }
        }
        $accountant_role->syncPermissions($accountant_permissions);

        /**
         * Create event organiser roles and permissions
         */
        $event_organiser_role = app(RoleContract::class)->create(['name' => 'event_organiser']);
        $event_organiser_permissions = [
            'create event',
            'read event',
            'update event',
            'delete event',

            'create event category',
            'read event category',
            'update event category',
            'delete event category',

            'create event tag',
            'read event tag',
            'update event tag',
            'delete event tag',

            'create event venue',
            'read event venue',
            'update event venue',
            'delete event venue',

            'create event type',
            'read event type',
            'update event type',
            'delete event type',

            'create event ticket',
            'read event ticket',
            'update event ticket',
            'delete event ticket',

            'create event attendee',
            'read event attendee',
            'update event attendee',
            'delete event attendee',

            'create event schedule',
            'read event schedule',
            'update event schedule',
            'delete event schedule',

            'create event sponsor',
            'read event sponsor',
            'update event sponsor',
            'delete event sponsor',

            'create event speaker',
            'read event speaker',
            'update event speaker',
            'delete event speaker',

            'create event faq',
            'read event faq',
            'update event faq',
            'delete event faq',

            'create event page',
            'read event page',
            'update event page',
            'delete event page',

            'create event setting',
            'read event setting',
            'update event setting',
            'delete event setting',

            'create event notification',
            'read event notification',
            'update event notification',
            'delete event notification',

            'create event report',
            'read event report',
            'update event report',
            'delete event report',

            'create event template',
            'read event template',
            'update event template',
            'delete event template',

            'create event email',
            'read event email',
            'update event email',
            'delete event email',

            'create event sms',
            'read event sms',
            'update event sms',
            'delete event sms',

            'create event social',
            'read event social',
            'update event social',
            'delete event social',

            'create event payment',
            'read event payment',
            'update event payment',
            'delete event payment',

            'create event payment method',
            'read event payment method',
            'update event payment method',
            'delete event payment method',
        ];
        foreach ($event_organiser_permissions as $event_organiser_permission) {
            if (!app(PermissionContract::class)->where('name', $event_organiser_permission)->exists()) {
                app(PermissionContract::class)->create(['name' => $event_organiser_permission]);
            }
        }
        $event_organiser_role->syncPermissions($event_organiser_permissions);


    }

}
