// Create the TIMERS object
TIMERS = {};

//
// Save the information from the form by sending it to the server via an
// AJAX GET request. If you have a lot of data you could use POST here
// instead
//
function saveformdata()
{
    // Get the form information and put it in the opt variable
    var opt = {
        bodytemp: document.getElementById('bodytemp').value,
        cut: document.getElementById('cut').value,
        tickbite: document.getElementById('tickbite').value
    };

    // If there's already a timer - cancel it (we're about to create a
    // new one). This means that we don't register many new timers
    if (TIMERS.SAVEDATA) {
        clearTimeout(TIMERS.SAVEDATA);
    }

    // Create the new timer - which runs after a delay of a second
    TIMERS.SAVEDATA = setTimeout(function ()
    {
        // Trigger the AJAX GET request that passes the information
        // to the server (using jQuery)
        $.ajax({
          type: "POST",
          data:{
              bodytemp: document.getElementById('bodytemp').value,
              cut: document.getElementById('cut').value,
              tickbite: document.getElementById('tickbite').value
          },
          success: function(){
          // Add a note to the page that it has been saved
          $('span#savednote')
          .text('Information has been saved')
          .animate({
            opacity: 1
          });
          console.log("hello i work");
        }});

        // Fade out the note after 5 seconds
        setTimeout(function ()
        {
            $('#savednote').animate({
                opacity: 0
            }, 250);
        }, 5000);


        // Now, at the end of the timer function, clear any reference
        // that we have of the timer
        TIMERS.SAVEDATA = null;
    }, 1000);
}
