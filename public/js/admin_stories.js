$(document).ready(function () {
  getAdminStories();
});



function getAdminStories() {
  var favoriteTbl = $('#stories_table_values').DataTable({
      language: {
          paginate: {
            next: '<i class="fa fa-chevron-right" aria-hidden="true">',
            previous: '<i class="fa fa-chevron-left" aria-hidden="true">',
          },
        },
        dom: "rtip",
  });
  $("#stories_table_values.dataTables_filter").append($("#categoryFilter"));
    
  //Get the column index for the Category column to be used in the method below ($.fn.dataTable.ext.search.push)
  //This tells datatables what column to filter on when a user selects a value from the dropdown.
  //It's important that the text used here (Category) is the same for used in the header of the column to filter
  var categoryIndex = 0;
  $("#stories_table_values th").each(function (i) {
    if ($($(this)).html() == "STATUS") {
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

  $("#search_input").keyup(function () {
      favoriteTbl.search($("#search_input").val()).draw();
    });

    
}

  
//USER ACCOUNT DETAILS MODAL
var account_details_modal = document.getElementById("story_modal");
// Get the button that opens the modal
var account_detail_btn = document.getElementById("account_details_button");
var okay_modal = document.getElementById("close_modal");

// Get the <close_modal> element that closes the modal
var close_account_detail_modal = document.getElementsByClassName("close2")[0];

// When the user clicks on the button, open the modal
function getUserStory(storyID) {
  account_details_modal.style.display = "block";

  // console.log(storyID)
  // Make an AJAX request to retrieve the user data
  $.ajax({
      type: "GET",
      dataType: "JSON",
      url: "/user/story/" + storyID,
      success: function(response) {
          // Populate the modal with the retrieved data
          console.log(response);
          $('#modal_account_penname').text(response[0].user.username);
          $('#modal_account_name').text(response[0].user.fullname);
          $('#modal_story_title').text(response[0].title);
          $('#modal_story_date_created').text(response[0].created_at);
          $('#modal_story_content').text(response[0].content);
          
          // Add more fields as needed
      },
      error: function(xhr, status, error) {
          // Handle the error, e.g., display an error message

      }
  });
}

// When the user clicks on <close_modal> (x), close the modal
close_account_detail_modal.onclick = function() {
  account_details_modal.style.display = "none";
}

okay_modal.onclick = function() {
  account_details_modal.style.display = "none";
}
