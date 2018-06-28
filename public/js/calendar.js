
window.onload = function(){
  width = window.innerWidth;
  fixWindowWidth(width);
  displayCalendar();

  window.addEventListener('resize', ()=> {
    width = window.innerWidth;
    fixWindowWidth(width);
  });


  var fillDays = document.querySelectorAll('.fillDay');
  Array.from(fillDays).forEach(link => {
      link.addEventListener('click', function redirectToNewDiaryEntry() {
        location.href = "/newentry";
      });
  });
}



function fixWindowWidth(width){
  if (innerWidth < 720){
    document.getElementById("layoutrow").classList.add('no-gutters')
  } else {
    document.getElementById("layoutrow").classList.remove('no-gutters')
  }
}

function displayCalendar(){
 var htmlContent ="";
 var FebNumberOfDays ="";
 var counter = 1;
 var dateNow = new Date();
 var month = dateNow.getMonth();
 var nextMonth = month+1; //+1; //Used to match up the current month with the correct start date.
 var prevMonth = month -1;
 var day = dateNow.getDate();
 var year = dateNow.getFullYear();

 //Determing if February (28,or 29)
 if (month == 1){
    if ( (year%100!=0) && (year%4==0) || (year%400==0)){
      FebNumberOfDays = 29;
    }else{
      FebNumberOfDays = 28;
    }
 }

 // names of months and week days.
 var monthNames = ["January","February","March","April","May","June","July","August","September","October","November", "December"];
 var dayNames = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday", "Saturday"];
 var dayPerMonth = ["31", ""+FebNumberOfDays+"","31","30","31","30","31","31","30","31","30","31"]

 // days in previous month and next one , and day of week.
 var nextDate = new Date(nextMonth +' 1 ,'+year);
 var weekdays= nextDate.getDay();
 var weekdays2 = weekdays
 var numOfDays = dayPerMonth[month];

 // this leave a white space for days of pervious month.
 while (weekdays>0){
    htmlContent += "<td class='monthPre'></td>";

 // used in next loop.
     weekdays--;
 }

 // loop to build the calander body.
 while (counter <= numOfDays){

     // When to start new line.
    if (weekdays2 > 6){
        weekdays2 = 0;
        htmlContent += "</tr><tr class='week'>";
    }

    // if counter is current day.
    // highlight current day using the CSS defined in header.
    if (counter == day){
        htmlContent +="<td class='fillDay dayNow' onMouseOver='this.style.background=\"#9febf4\"; this.style.color=\"#000\";' "+
        "onMouseOut='this.style.background=\"#FB785B\"; this.style.color=\"#000\";'>"+counter+"</td>";
    }else if (counter < day){
      if (counter == 1 || counter == 5 || counter == 6 || counter == 7 || counter==13 || counter==15)
        htmlContent +="<td class='fillDay monthNow notToday filled' onMouseOver='this.style.background=\"#9febf4\"'"+
        " onMouseOut='this.style.background=\"#ccc\"'>"+counter+"</td>";
      else {
        htmlContent +="<td class='fillDay monthNow notToday' onMouseOver='this.style.background=\"#9febf4\"'"+
        " onMouseOut='this.style.background=\"#eee\"'>"+counter+"</td>";
      }
    } else {
        htmlContent +="<td class='monthNow notToday' >"+counter+"</td>";
    }
    weekdays2++;
    counter++;
 }

 // building the calendar html body.
 var calendarBody = "<span class='helpicon'><p>?</p></span><table class='calendar col-xs-12  col-sm-12 col-md-8'><tr class='monthNow'><th colspan='7' class='year'><span class='monthnav'>&lt;</span> "
 +monthNames[month]+" "+ year +" <span class='monthnav'>&gt;</span></th></tr>"; 
 calendarBody +="<tr class='dayNames'>  <td>Sun</td>  <td>Mon</td> <td>Tue</td>"+
 "<td>Wed</td> <td>Thu</td> <td>Fri</td> <td>Sat</td> </tr>";
 calendarBody += "<tr class='week'>";
 calendarBody += htmlContent;
 calendarBody += "</tr></table>";
 // set the content of div .

 var layoutrow = document.getElementById("layoutrow");
 layoutrow.innerHTML += calendarBody;

}
