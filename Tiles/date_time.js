/* <![CDATA[ */
function startclock() {
    //getting date, time and year
    var currentTime = new Date()
    var day = currentTime.getDate()
    var year = currentTime.getFullYear()
    //associating day numbers with their names
    var d = new Date();
    var weekday = new Array(7);
    weekday[0] = "Sunday";
    weekday[1] = "Monday";
    weekday[2] = "Tuesday";
    weekday[3] = "Wednesday";
    weekday[4] = "Thursday";
    weekday[5] = "Friday";
    weekday[6] = "Saturday";
    //associating month numbers with their names
    var m = new Date();
    var month = new Array(11);
    month[0] = "January";
    month[1] = "February";
    month[2] = "March";
    month[3] = "April";
    month[4] = "May";
    month[5] = "June";
    month[6] = "July";
    month[7] = "August";
    month[8] = "September";
    month[9] = "October";
    month[10] = "November";
    month[11] = "December";
    //creating a day, month and year variable
    daydate = weekday[d.getDay()] + " " + month[m.getMonth()] + " " + day + "" + ", " + year;

    //start time collection
    //intitializing final time variable
    var totaltime = ""
    //getting time values and loading hours and minutes from JS new Date()
    var currentTime = new Date();
    var hours = currentTime.getHours();
    var minutes = currentTime.getMinutes();
    //initializing am and pm variable
    var ampm = "";
    //puts "0" in single digit minute values
    if (minutes < 10) {
        minutes = "0" + minutes
    }
    //sets correct am, pm.
    if (hours > 11) {
        ampm = "pm";
    } else {
        ampm = "am";
    }
    //gives hours in 12 hour form
    if (hours > 12) {
        hours = hours - 12;
    }
    //if it is the first hour of the morning sets the hour to "12"
    if (hours == 0) {
        hours = 12;
    }

    totaltime = hours + ":" + minutes + " " + ampm;

    document.getElementById('para1').innerHTML = totaltime;
    document.getElementById('para2').innerHTML = daydate;

    setTimeout('startclock()', 1000);


}
/* ]]> */





