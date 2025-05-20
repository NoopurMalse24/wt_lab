<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
<head>
  <title>Employee Management</title>
  <link
    rel="stylesheet"
    href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css"
  />
</head>
<body class="container mt-5">
  <h2 class="mb-4">Employee Management System</h2>

  <!-- Success Message -->
  <?php if (isset($_GET['msg'])): ?>
    <div class="alert alert-success"><?php echo $_GET['msg']; ?></div>
  <?php endif; ?>

  <!-- Form to Add Employee -->
  <form method="POST" action="add_employee.php" class="mb-4">
    <div class="mb-3">
      <label for="name" class="form-label">Name:</label>
      <input type="text" name="name" id="name" required class="form-control" />
    </div>
    <div class="mb-3">
      <label for="email" class="form-label">Email:</label>
      <input type="email" name="email" id="email" required class="form-control" />
    </div>
    <div class="mb-3">
      <label for="position" class="form-label">Position:</label>
      <input type="text" name="position" id="position" required class="form-control" />
    </div>
    <button type="submit" class="btn btn-primary">Add Employee</button>
  </form>

  <!-- Employee List Table -->
  <h4>Current Employees</h4>
  <table class="table table-bordered table-hover">
    <thead class="table-light">
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Email</th>
        <th>Position</th>
        <th>Created At</th>
      </tr>
    </thead>
    <tbody>
      <?php
      $result = $conn->query("SELECT * FROM employees ORDER BY id DESC");
      if ($result->num_rows > 0):
        while ($row = $result->fetch_assoc()):
      ?>
      <tr>
        <td><?php echo $row['id']; ?></td>
        <td><?php echo htmlspecialchars($row['name']); ?></td>
        <td><?php echo htmlspecialchars($row['email']); ?></td>
        <td><?php echo htmlspecialchars($row['position']); ?></td>
        <td><?php echo $row['created_at']; ?></td>
      </tr>
      <?php endwhile; else: ?>
      <tr><td colspan="5" class="text-center">No employees found.</td></tr>
      <?php endif; ?>
    </tbody>
  </table>
</body>
</html>
