const auth = firebase.auth();

    fetch('/HRMS/templates/sidebar/sidebar.html')
      .then(response => response.text())
      .then(data => {
        document.getElementById('sidebar-container').innerHTML = data;
        const logoutLink = document.querySelector('.logout-link');
        if (logoutLink) {
          logoutLink.addEventListener('click', function (e) {
            e.preventDefault();

            Swal.fire({
              title: 'Are you sure?',
              text: 'You will be logged out of the system.',
              icon: 'warning',
              showCancelButton: true,
              confirmButtonText: 'Yes, logout',
              cancelButtonText: 'Cancel',
              reverseButtons: true
            }).then((result) => {
              if (result.isConfirmed) {
                auth.signOut().then(() => {
                  Swal.fire({
                    title: 'Logged out!',
                    text: 'You have been successfully logged out.',
                    icon: 'success',
                    timer: 1500,
                    showConfirmButton: false
                  }).then(() => {
                    window.location.replace("/HRMS/templates/auth/login.html?logout=true");
                  });
                }).catch((error) => {
                  Swal.fire('Error', error.message, 'error');
                });
              }
            });
          });
        }
      });