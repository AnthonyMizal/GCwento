$(document).ready(function () {
  getUsers();
  $('.status-button').click(function() {
    var userId = $(this).data('user-id');
    var newStatus = $(this).data('status');
    banUser(userId, newStatus);
  });
});


function getUsers () {
var table = $('#users_table_values').DataTable({
  pageLength: 15,
  language: {
    paginate: {
    next: '<i class="fa fa-chevron-right table_right_icon" aria-hidden="true">',
    previous: '<i class="fa fa-chevron-left table_left_icon" aria-hidden="true">'  
    }
    },
    "dom": 'rtip'
  });

$('#search_input_user').keyup( function () {
    table.search($('#search_input_user').val()).draw();
} );
};

function getUserDetails(userID) {
  user_details_modal.style.display = "block";

  // console.log(storyID)
  // Make an AJAX request to retrieve the user data
  $.ajax({
      type: "GET",
      dataType: "JSON",
      url: "/user/detail/" + userID,
      success: function(response) {
          // Populate the modal with the retrieved data
          $('#modal_account_penname').text(response[0].username);
          $('#modal_account_name').text(response[0].fullname);
          $('#modal_account_email').text(response[0].email);
          $('#modal_account_created').text(response[0].created_at);

          $.ajax({
            type: "GET",
            url: "/user/pendingCount/" + userID,
            dataType: "JSON",
            success: function (response) {
              $('#modal_account_pending_count').text(response);
            }
          });

          $.ajax({
            type: "GET",
            url: "/user/publishCount/" + userID,
            dataType: "JSON",
            success: function (response) {
              $('#modal_account_story_count').text(response);
            }
          });

          $.ajax({
            type: "GET",
            url: "/user/rejectCount/" + userID,
            dataType: "JSON",
            success: function (response) {
              $('#modal_account_reject_count').text(response);
            }
          });
          // $('#modal_account_story_count').text(response[0]);
          
          // Add more fields as needed
      },
      error: function(xhr, status, error) {
          // Handle the error, e.g., display an error message
      }
  });
}

function banUser(userId, newStatus) {
  Swal.fire({
    title: 'Confirmation',
    text: 'Do you really want to update the status of this user?',
    icon: 'question',
    showDenyButton: true,
    confirmButtonText: 'Update',
    denyButtonText: 'Cancel',
    confirmButtonColor: '#FF5D5D',
    denyButtonColor: '#c2c2c2',
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: '/users/' + userId,
        type: 'POST',
        data: {
          _method: 'PATCH', // or 'PATCH'
          status: newStatus
        },
        success: function(response) {
          console.log(response.message); // Handle the success response as per your requirements
          Swal.fire({
            title: 'Success!',
            text: 'User successfully banned.',
            icon: 'success',
            confirmButtonText: 'Continue',
            confirmButtonColor: '#4BB1F7',
          }).then((result) => {
            // Reload the Page
            location.reload();
          });
        },
        error: function(error) {
          console.error(error); // Handle the error response as per your requirements
        }
      });
    } else if (result.isDenied) {
      Swal.fire({
        title: 'Error!',
        text: 'Failed to update user status.',
        icon: 'error',
        confirmButtonText: 'OK',
        confirmButtonColor: '#FF5D5D',
      })
    }
  });
}



var okay_modal = document.getElementById("close_modal");

// Get the <close_modal> element that closes the modal
var close_account_detail_modal = document.getElementsByClassName("close2")[0];

// When the user clicks on the button, open the modal


// When the user clicks on <close_modal> (x), close the modal
close_account_detail_modal.onclick = function() {
  user_details_modal.style.display = "none";
}

okay_modal.onclick = function() {
  user_details_modal.style.display = "none";
}

