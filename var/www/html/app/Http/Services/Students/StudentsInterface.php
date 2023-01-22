<?php

namespace App\Http\Services\Students;

interface StudentsInterface
{

    public function getStudents(): array;
    public function getStudent(string $studentId): array;
    public function createStudent(array $studentData): array;
    public function updateStudent(string $studentId, array $studentData): array;
    public function deleteStudent(string $studentId): array;

}
