<!-- Employee Details Modal -->
<div id="employeeModal" class="modal">
  <div class="modal-content">
    <div class="modal-header">
      <h2 class="modal-title">
        <svg class="icon-user" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M12 12C14.7614 12 17 9.76142 17 7C17 4.23858 14.7614 2 12 2C9.23858 2 7 4.23858 7 7C7 9.76142 9.23858 12 12 12Z" fill="currentColor" />
          <path d="M12 14C7.58172 14 4 17.5817 4 22H20C20 17.5817 16.4183 14 12 14Z" fill="currentColor" />
        </svg>
        Employee Profile
      </h2>
      <button class="close-modal">
        <svg width="20" height="20" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M18 6L6 18M6 6L18 18" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
        </svg>
      </button>
    </div>

    <div class="modal-body">
      <div class="info-section">
        <h3 class="section-title">Personal Information</h3>
        <div class="info-grid">
          <div class="info-item">
            <label>Full Name</label>
            <div class="info-value" id="empName">John Doe</div>
          </div>
          <div class="info-item">
            <label>Date of Birth</label>
            <div class="info-value" id="empDob">15/03/1985</div>
          </div>
          <div class="info-item">
            <label>Address</label>
            <div class="info-value" id="empAddress">123 Main St, Cityville</div>
          </div>
          <div class="info-item">
            <label>Contact</label>
            <div class="info-value" id="empPhone">(555) 123-4567</div>
          </div>
          <div class="info-item">
            <label>Email</label>
            <div class="info-value" id="empEmail">john.doe@company.com</div>
          </div>
        </div>
      </div>

      <div class="info-section">
        <h3 class="section-title">Employment Details</h3>
        <div class="info-grid">
          <div class="info-item">
            <label>Job Title</label>
            <div class="info-value" id="empJob">Senior Developer</div>
          </div>
          <div class="info-item">
            <label>Department</label>
            <div class="info-value" id="empDept">Engineering</div>
          </div>
          <div class="info-item">
            <label>Salary</label>
            <div class="info-value" id="empSalary">$95,000</div>
          </div>
          <div class="info-item">
            <label>Hire Date</label>
            <div class="info-value" id="empHire">10/06/2015</div>
          </div>
          <div class="info-item">
            <label>Status</label>
            <div class="info-value status-active" id="empStatus">Active</div>
          </div>
        </div>
      </div>
    </div>

    <div class="modal-footer">
      <button class="btn-print">
        <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M6 9V2H18V9" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
          <path d="M6 18H4C2.89543 18 2 17.1046 2 16V11C2 9.89543 2.89543 9 4 9H20C21.1046 9 22 9.89543 22 11V16C22 17.1046 21.1046 18 20 18H18" stroke="currentColor" stroke-width="2" />
          <path d="M18 14H6V22H18V14Z" stroke="currentColor" stroke-width="2" />
        </svg>
        Print Profile
      </button>
    </div>
  </div>
</div>


<script>
  document.querySelector('.btn-print').addEventListener('click', function () {
    const modalBody = document.querySelector('.modal-body').innerHTML;

    const printWindow = window.open('', '', 'width=900,height=700');
    printWindow.document.write(`
      <html>
        <head>
          <title>Print Employee Profile</title>
          <style>
            body {
              font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
              padding: 40px;
              background-color: #f9f9f9;
              color: #333;
            }

            .print-header {
              display: flex;
              align-items: center;
              gap: 20px;
              margin-bottom: 30px;
              border-bottom: 2px solid #444;
              padding-bottom: 10px;
            }

            .print-header img {
              width: 60px;
              height: 60px;
              object-fit: contain;
            }

            .print-header h1 {
              font-size: 24px;
              margin: 0;
              color: #2c3e50;
            }

            h2, h3 {
              margin-bottom: 12px;
              color: #34495e;
            }

            .info-section {
              margin-bottom: 30px;
            }

            .info-grid {
              display: grid;
              grid-template-columns: repeat(2, 1fr);
              gap: 15px 25px;
              background: #fff;
              padding: 20px;
              border: 1px solid #ccc;
              border-radius: 8px;
              box-shadow: 0 2px 4px rgba(0, 0, 0, 0.05);
            }

            .info-item {
              padding-bottom: 10px;
              border-bottom: 1px dashed #ddd;
            }

            label {
              font-weight: bold;
              display: block;
              font-size: 14px;
              color: #555;
            }

            .info-value {
              margin-top: 4px;
              font-size: 16px;
              color: #111;
            }

            .status-active {
              color: green;
              font-weight: bold;
            }

            

            @media print {
              .no-print {
                display: none;
            
              }
              @page {
  margin: 0;
  size: auto;
}

            }
          </style>
        </head>
        <body>
          <div class="print-header">
            <img src="../../images/assets/logo.png" alt="Logo">
            <h1>Hyacinth HRMS - Employee Profile</h1>
          </div>

          ${modalBody}
        </body>
      </html>
    `);

    printWindow.document.close();
    printWindow.focus();
    printWindow.print();
    printWindow.close();
  });
</script>
