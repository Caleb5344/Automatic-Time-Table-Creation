<?php
  // Simulate saving course data to database (replace with actual logic)
  $course_code = $_POST["course_code"];
  $course_name = $_POST["course_name"];
  $courses[$course_code] = $course_name;

  // Redirect back to main page
  header("Location: index.php");