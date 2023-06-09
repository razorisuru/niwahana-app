
  $(document).ready(function() {
    // Capture form submission event
    $('#frm1').submit(function(event) {
      event.preventDefault(); // Prevent form from submitting traditionally

      // Get form data
      var formData = {
        i1: $('#i1').val(),
        l1: $('#l1').val(),
        w1: $('#w1').val()
      };

      // Send form data using AJAX
      $.ajax({
        type: 'POST',
        url: 'insert.php', // PHP script that handles database insertion
        data: formData,
        success: function(response) {
          console.log(response); // Handle success response
        },
        error: function(xhr, status, error) {
          console.error(error); // Handle error
        }
      });
    });
  });

