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

$('#search_input').keyup( function () {
    table.search($('#search_input').val()).draw();
} );

//BAN MODAL
var ban_modal = document.getElementById("ban_modal");
// Get the button that opens the modal
var ban_btn = document.getElementById("ban_button");
var cancel_modal = document.getElementById("cancel_modal");

// Get the <close_modal> element that closes the modal
var close_modal = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
ban_btn.onclick = function() {
  ban_modal.style.display = "block";
}

// When the user clicks on <close_modal> (x), close the modal
close_modal.onclick = function() {
  ban_modal.style.display = "none";
}

cancel_modal.onclick = function() {
  ban_modal.style.display = "none";
}


//USER ACCOUNT DETAILS MODAL
var account_details_modal = document.getElementById("account_details_modal");
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

