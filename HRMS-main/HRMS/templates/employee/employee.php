<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Hyacinth - Employee</title>
  <link rel="stylesheet" href="../../style/employee.css" />

  <!-- DataTables CSS -->
  <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.dataTables.min.css" />

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>

  <!-- DataTables JS -->
  <script src="https://cdn.datatables.net/2.3.2/js/dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>

  <?php require __DIR__ . '/../sidebar/sidebar.html'; ?>
  <?php require __DIR__ . '/empModal.php'; ?>

  <div class="wrap-container">
    <h2>Employee Details</h2>

    <table id="employeeTable" class="display">
      <thead>
        <tr>
          <th>Name</th>
          <th>Phone Number</th>
          <th>Job Title</th>
          <th>Department</th>
          <th>Salary</th>
          <th>Hire Date</th>
          <th>Status</th>
          <th>Action</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>Jane Doe</td>
          <td>09171234567</td>
          <td>HR Officer</td>
          <td>ADMIN</td>
          <td>₱35,000</td>
          <td>2021-06-01</td>
          <td>Active</td>
          <td class="action-btns">
            <button class="edit-btn">Edit</button>
            <button class="delete-btn" data-id="143">Delete</button>
            <button class="view-btn" onclick='showEmployeeDetails({
  name: "John Doe",
  dob: "1990-05-15",
  address: "123 Main St",
  phone: "09123456789",
  email: "john@example.com",
  job: "Software Developer",
  department: "IT",
  salary: "₱50,000",
  hireDate: "2023-01-10",
  status: "Active"
})'>View</button>

          </td>
        </tr>
        <!-- Add more rows as needed -->
      </tbody>
    </table>
  </div>

  <script>
    $(document).ready(function() {
      $('#employeeTable').DataTable();
    });

    // Modal functionality


    const modal = document.getElementById('employeeModal');
    const closeModalBtn = document.querySelector('.close-modal');

    // Example: Attach this to a "View" button
    function showEmployeeDetails(employee) {
      document.getElementById('empName').textContent = employee.name;
      document.getElementById('empDob').textContent = employee.dob;
      document.getElementById('empAddress').textContent = employee.address;
      document.getElementById('empPhone').textContent = employee.phone;
      document.getElementById('empEmail').textContent = employee.email;
      document.getElementById('empJob').textContent = employee.job;
      document.getElementById('empDept').textContent = employee.department;
      document.getElementById('empSalary').textContent = employee.salary;
      document.getElementById('empHire').textContent = employee.hireDate;
      document.getElementById('empStatus').textContent = employee.status;

      modal.style.display = 'flex';
    }

    closeModalBtn.onclick = function() {
      modal.style.display = 'none';
    };

    window.onclick = function(event) {
      if (event.target === modal) {
        modal.style.display = 'none';
      }
    };




  </script>




<script>
  document.addEventListener('DOMContentLoaded', () => {


    document.querySelectorAll('.delete-btn').forEach(button => {

      button.addEventListener('click',function() {


        const ItemId = this.getAttribute('data-id');


        Swal.fire({


          title: 'Are you sure?',
          text: "This is not a warning",

          icon:'warning',

          showCancelButton:true,
          confirmButtonColor: '#e3342f',
          cancelButtonColor: '#6c757d',
          confirmButtonText: 'Yes,please delete it!',


        }).then((result) => {


          if (result.isConfirmed) {

            window.location.href = 'delete.php id = ${ItemID}';
          }

        });

      });

    });

  });
</script>

  <script src="../../js/img.js"></script>
</body>

</html>