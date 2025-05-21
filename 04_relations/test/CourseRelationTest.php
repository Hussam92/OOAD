<?php

namespace Test;

use PHPUnit\Framework\TestCase;
use Relations\Model\Course;
use Relations\Model\Student;
use Relations\Model\Teacher;

class CourseRelationTest extends TestCase
{
    public function testCourseTeacher(): void
    {
        $course = new Course('Math');

        $teacher = new Teacher('Max Musterlehrer', '01.01.1980', [$course]);

        $course->setTeacher($teacher);

        self::assertEquals($teacher, $course->getTeacher());

        self::assertContains($course, $teacher->getCourses());

        self::assertEmpty($course->getStudents());
    }

    public function testCourseStudents(): void
    {
        $math = new Course('Math');

        $max = new Student('Max Musterschüler', '01.01.1980', 1);
        $marie = new Student('Marie Musterschüler', '01.01.1980', 1);

        self::assertEmpty($math->getStudents());
        self::assertEmpty($max->getCourses());
        self::assertEmpty($marie->getCourses());

        $max->addCourse($math);
        $marie->addCourse($math);

        self::assertContains($math, $max->getCourses());
        self::assertContains($math, $marie->getCourses());

        $math->addStudents($max);
        $math->addStudents($marie);

        self::assertContains($marie, $math->getStudents());
        self::assertContains($marie, $math->getStudents());
    }
}