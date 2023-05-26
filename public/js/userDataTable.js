$(document).ready(function () {

    getMyStories();

});

function getMyStories() {
    var favoriteTbl = $('#mystories_table_contents').DataTable({
        language: {
            paginate: {
              next: '<i class="fa fa-chevron-right" aria-hidden="true">',
              previous: '<i class="fa fa-chevron-left" aria-hidden="true">',
            },
          },
          dom: "rtip",
    });
    $("#mystories_table_contents.dataTables_filter").append($("#categoryFilter"));
      
    //Get the column index for the Category column to be used in the method below ($.fn.dataTable.ext.search.push)
    //This tells datatables what column to filter on when a user selects a value from the dropdown.
    //It's important that the text used here (Category) is the same for used in the header of the column to filter
    var categoryIndex = 0;
    $("#mystories_table_contents th").each(function (i) {
      if ($($(this)).html() == "GENRE") {
        categoryIndex = i; return false;
      }
    });

    //Use the built in datatables API to filter the existing rows by the Category column
    $.fn.dataTable.ext.search.push(
      function (settings, data, dataIndex) {
        var selectedItem = $('#categoryFilter').val()
        var category = data[categoryIndex];
        if (selectedItem === "" || category.includes(selectedItem)) {
          return true;
        }
        return false;
      }
    );

    //Set the change event for the Category Filter dropdown to redraw the datatable each time
    //a user selects a new filter.
    $("#categoryFilter").change(function (e) {
        favoriteTbl.draw();
    });

    $("#search_story").keyup(function () {
        favoriteTbl.search($("#search_story").val()).draw();
      });

};


function confirmDelete(storyId) {
  Swal.fire({
    title: 'Confirmation',
    text: 'Are you sure you want to delete this story?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Delete',
    cancelButtonText: 'Cancel',
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    background: '#222222',
    color: '#FFE1BB',
  }).then((result) => {
    if (result.isConfirmed) {
      deleteStory(storyId);
    }
  });
}

function deleteStory(storyId) {
  $.ajaxSetup({
    headers: {
      'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
  });
  $.ajax({
    url: '/stories/index/' + storyId,
    type: 'POST',
    data: {
      _method: 'DELETE'
    },
    success: function(response) {
      console.log(response.message); // Handle the success response as per your requirements
      Swal.fire({
        title: 'Deleted!',
        text: 'The story has been deleted successfully.',
        icon: 'success',
        confirmButtonText: 'OK',
        confirmButtonColor: '#4BB1F7',
        color: '#FFE1BB',
        background: '#222222',
        iconColor: '#5535d4',
      }).then((result) => {
        // Reload the page or perform any other desired action
        location.reload();
      });
    },
    error: function(xhr, status, error) {
      console.error(error); // Handle the error response as per your requirements
      Swal.fire({
        title: 'Error',
        text: 'Failed to delete the story.',
        icon: 'error',
        confirmButtonText: 'OK',
        confirmButtonColor: '#FF5D5D',
        color: '#FFE1BB',
        background: '#222222',
        iconColor: '#5535d4',
      });
    }
  });
}

$('.logout-button').on('click', function() {
  Swal.fire({
    title: 'Confirmation',
    text: 'Are you sure you want to logout?',
    icon: 'question',
    showCancelButton: true,
    background: '#222222',
    confirmButtonText: 'Logout',
    cancelButtonText: 'Cancel',
    confirmButtonColor: '#3085d6',
    cancelButtonColor: '#d33',
    color: '#FFE1BB',
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajax({
        url: '/logout',
        type: 'GET',
        success: function(response) {
          console.log(response.message); // Handle the success response as per your requirements
          Swal.fire({
            title: 'Logged Out',
            text: 'You have been logged out successfully.',
            icon: 'success',
            iconColor: '#5535d4',
            background: '#222222',
            confirmButtonText: 'Proceed',
            confirmButtonColor: '#3085d6',
            color: '#FFE1BB',
          }).then((result) => {
            // Redirect to the desired page or perform any other desired action
            window.location.href = '/';
          });
        },
        error: function(xhr, status, error) {
          console.error(error); // Handle the error response as per your requirements
          Swal.fire({
            title: 'Error',
            text: 'Failed to logout.',
            icon: 'error',
            background: '#222222',
            confirmButtonText: 'Proceed',
            confirmButtonColor: '#3085d6',
            color: '#FFE1BB',
          });
        }
      });
    }
  });
});


function approveRequest(storyId) {
  Swal.fire({
    title: 'Confirmation',
    text: 'Are you sure you want to approve this request?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Approve',
    cancelButtonText: 'Cancel',
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    background: '#222222',
    color: '#FFE1BB',
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: '/approveRequest/'+storyId,
        type: 'POST',
        success: function(response) {
          console.log(response.message); // Handle the success response as per your requirements
          Swal.fire({
            title: 'Approved',
            text: 'Successfully approved this request.',
            icon: 'success',
            iconColor: '#5535d4',
            background: '#222222',
            confirmButtonText: 'Proceed',
            confirmButtonColor: '#3085d6',
            color: '#FFE1BB',
          }).then((result) => {
            // Redirect to the desired page or perform any other desired action
            location.reload();
          });
        },
        error: function(xhr, status, error) {
          console.error(error); // Handle the error response as per your requirements
          Swal.fire({
            title: 'Error',
            text: 'Failed to update.',
            icon: 'error',
            background: '#222222',
            confirmButtonText: 'Proceed',
            confirmButtonColor: '#3085d6',
            color: '#FFE1BB',
          });
        }
      });
    }
  });
}

function rejectRequest(storyId) {
  Swal.fire({
    title: 'Confirmation',
    text: 'Are you sure you want to reject this request?',
    icon: 'warning',
    showCancelButton: true,
    confirmButtonText: 'Reject',
    cancelButtonText: 'Cancel',
    confirmButtonColor: '#d33',
    cancelButtonColor: '#3085d6',
    background: '#222222',
    color: '#FFE1BB',
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: '/rejectRequest/'+storyId,
        type: 'POST',
        success: function(response) {
          console.log(response.message); // Handle the success response as per your requirements
          Swal.fire({
            title: 'Rejected',
            text: 'Successfully rejected this request.',
            icon: 'success',
            iconColor: '#5535d4',
            background: '#222222',
            confirmButtonText: 'Proceed',
            confirmButtonColor: '#3085d6',
            color: '#FFE1BB',
          }).then((result) => {
            // Redirect to the desired page or perform any other desired action
            location.reload();
          });
        },
        error: function(xhr, status, error) {
          console.error(error); // Handle the error response as per your requirements
          Swal.fire({
            title: 'Error',
            text: 'Failed to update.',
            icon: 'error',
            background: '#222222',
            confirmButtonText: 'Proceed',
            confirmButtonColor: '#3085d6',
            color: '#FFE1BB',
          });
        }
      });
    }
  });
}

function sendRequest(storyId, creatorId, readerId) {
  Swal.fire({
    title: 'Confirmation',
    text: 'Are you sure you want to send a request to read this story?',
    icon: 'question',
    showCancelButton: true,
    confirmButtonText: 'Send Request',
    background: '#222222',
    cancelButtonText: 'Cancel',
    confirmButtonColor: '#4BB1F7',
    cancelButtonColor: '#c2c2c2',
    color: '#FFE1BB',
  }).then((result) => {
    if (result.isConfirmed) {
      $.ajaxSetup({
        headers: {
          'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
      });
      $.ajax({
        url: '/send-request',
        type: 'POST',
        data: {
          story_id: storyId,
          creator_id: creatorId,
          reader_id: readerId
        },
        success: function(response) {
          Swal.fire({
            title: 'Success!',
            text: 'Your request has been sent successfully.',
            icon: 'success',
            confirmButtonText: 'OK',
            confirmButtonColor: '#4BB1F7',
            color: '#FFE1BB',
            background: '#222222',
          }).then((result) => {
            location.reload();
          });
        },
        error: function(xhr, status, error) {
          console.error(error); // Handle the error response as per your requirements
          Swal.fire({
            title: 'Error!',
            text: 'Failed to send the request. Please try again.',
            icon: 'error',
            confirmButtonText: 'OK',
            confirmButtonColor: '#4BB1F7',
            color: '#FFE1BB',
            background: '#222222',
          });
        }
      });
    }
  });
}