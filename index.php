<!DOCTYPE html>
<html>

<head>
    <title>Timetable Generator</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1>Add Course Details</h1>
    <form action="add_course.php" method="post">
        <label for="course_code">Course Code:</label>
        <input type="text" name="course_code" id="course_code"><br><br>
        <label for="course_name">Course Name:</label>
        <input type="text" name="course_name" id="course_name"><br><br>
        <button type="submit">Add Course</button>
    </form>

    <?php
    // Display existing courses (replace with database connection)
    $courses = array("MATH101" => "Mathematics 1", "CS202" => "Data Structures");
    if (count($courses) > 0) {
      echo "<h2>Existing Courses</h2>";
      echo "<table>";
      echo "<tr><th>Course Code</th><th>Course Name</th></tr>";
      foreach ($courses as $code => $name) {
        echo "<tr><td>$code</td><td>$name</td></tr>";
      }
      echo "</table>";
    }
  ?>
</body>

</html>