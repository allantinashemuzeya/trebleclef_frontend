<?php

namespace App\Http\Services\Students;

use App\Models\User;

interface StudentsInterface
{

    public function getStudents(): array;
    public function getStudent(string $studentId): array;
    public function createStudent(User $user);
    public function updateStudent(string $studentId, array $studentData): array;
    public function deleteStudent(string $studentId): array;

}
