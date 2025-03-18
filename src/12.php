<?php
class SchoolProject {
private $students;
public function __construct($students) {
$this->students = $students;
}
public function getStudents() {
return $this->students;
}
public function setStudents($students) {
$this->students = $students;
}
public function addStudent($student) {
array_push($this->students, $student);
}
public function removeStudent($index) {
array_splice($this->students, $index, 1);
}
public function updateStudent($index, $newStudent) {
$this->students[$index] = $newStudent;
}
public function getNumberOfStudents() {
return count($this->students);
}
public function getAverageGrade() {
$total = 0;
foreach ($this->students as $student) {
$total += $student['grade'];
}
return $total / $this->getNumberOfStudents();
}
public function getStudentWithHighestGrade() {
usort($this->students, function($a, $b) {
return $a['grade'] <=> $b['grade'];
});
return end($this->students);
}
public function getStudentWithLowestGrade() {
usort($this->students, function($a, $b) {
return $a['grade'] <=> $b['grade'];
});
return reset($this->students);
}
}
?>