var table = $('#banned_accounts_table_values').DataTable({
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
var unban_modal = document.getElementById("unban_modal");
// Get the button that opens the modal
var btn = document.getElementById("unban_button");
var cancel_modal = document.getElementById("cancel_modal");

// Get the <close_modal> element that closes the modal
var close_modal = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
  unban_modal.style.display = "block";
}

// When the user clicks on <close_modal> (x), close the modal
close_modal.onclick = function() {
  unban_modal.style.display = "none";
}

cancel_modal.onclick = function() {
  unban_modal.style.display = "none";
  }

window.onclick = function(event) {
  if (event.target == unban_modal) {
    unban_modal.style.display = "none";
  }
}

//VIEW BANNED ACCOUNT MODAL
var view_banned_account_modal = document.getElementById("view_banned_user_modal");
// Get the button that opens the modal
var view_banned_account_btn = document.getElementById("view_account_ban_details_button");
var close_modal2_btn = document.getElementById("close_modal");

// Get the <close_modal> element that closes the modal
var close_modal2 = document.getElementsByClassName("close2")[0];

// When the user clicks on the button, open the modal
view_banned_account_btn.onclick = function() {
  view_banned_account_modal.style.display = "block";
}

// When the user clicks on <close_modal> (x), close the modal
close_modal2.onclick = function() {
  view_banned_account_modal.style.display = "none";
}

close_modal2_btn.onclick = function() {
  view_banned_account_modal.style.display = "none";
}


