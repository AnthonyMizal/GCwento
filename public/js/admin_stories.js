$(document).ready(function () {
  getActiveUsers();
});



function getActiveUsers() {
$.ajax({
  method: "get",
  url: "http://127.0.0.1:8000/getStory",
  dataType: "json",
  success: function (response) {
      
      let user_data = response;
      console.log(user_data)
      // accessing all items in the payload
      let str = `
      <table id="stories_table_values" class="table table-hover top_rated_stories_table table-borderless">
      <thead class="thead-light top_rated_stories_table_header">
        <tr>
          <th scope="col" class="py-4 top_left_header col-3"> TITLE </th>
          <th scope="col" class="py-4 col-3"> GENRE </th>
          <th scope="col" class="py-4 col-2" > AUTHOR </th>
          <th scope="col" class="py-4 col-2" > STATUS </th>
          <th scope="col" class="py-4 top_right_header col-2"> ACTIONS </th>
        </tr>
      </thead>
      <tbody>
      `;
      user_data.forEach((story) => {
          str += `
          <tr>
          <td>${story.title}</td>
          <td> Action </td>
          <td>${story.user.fullname}</td>
          <td class="table_item_status_td"> 
            <div class="table_item_status_dropdown_container">
              <select class="form-control table_item_status_dropdown" id="table_item_status">
                <option value="pending"> Pending </option>
                <option value="publish"> Publish </option>
                <option value="reject"> Reject </option>
              </select>
              <i class="fa fa-filter filter_icon"></i>
            </div>
          </td>
          <td> 
            <button id="account_details_button" type="button" class="btn action_button_ddark_blue"> VIEW </button>
          </td>
        </tr>
          
        `;
        });
        str += `
      </tbody>
    </table>`;

        $(".stories_table_contents").append(str);

        var table = $("#stories_table_values").DataTable({
          language: {
            paginate: {
              next: '<i class="fa fa-chevron-right" aria-hidden="true">',
              previous: '<i class="fa fa-chevron-left" aria-hidden="true">',
            },
          },
          dom: "rtip",
        });
        

        $("#search_input").keyup(function () {
          table.search($("#search_input").val()).draw();
        });
  }
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
account_detail_btn.onclick = function() {
  account_details_modal.style.display = "block";
}

// When the user clicks on <close_modal> (x), close the modal
close_account_detail_modal.onclick = function() {
  account_details_modal.style.display = "none";
}

okay_modal.onclick = function() {
  account_details_modal.style.display = "none";
}
