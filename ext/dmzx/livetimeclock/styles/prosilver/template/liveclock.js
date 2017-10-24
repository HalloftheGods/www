////////////// CONFIGURATION /////////////////////////////
// Set the clock's font face:
var myfont_face = "Verdana, Helvetica, Arial, sans-serif";
// Set the clock's font size (in point):
var myfont_size = "9";
// Set the clock's font color:
var myfont_color = "#4C5D77";
// Set the clock's background color:
var myback_color = "transparent";
// Set the text to display before the clock:
var mypre_text = "";
// Set the width of the clock (in pixels):
var mywidth = 290;
// Display the time in 24 or 12 hour time?
// 0 = 24, 1 = 12
var my12_hour = 0;
// How often do you want the clock updated?
// 0 = Never, 1 = Every Second, 2 = Every Minute
// If you pick 0 or 2, the seconds will not be displayed
var myupdate = 1;
// Display the date?
// 0 = No, 1 = Yes
var DisplayDate = 1;
// Display the date before or after?
// 1 = before, 2 = after
var DateBefore = 2;
// Display the days short or long?
// 1 = short, 2 = long
var DayForm = 2;
// Display the months short or long?
// 1 = short, 2 = long
var MonthForm = 2;

/////////////// END CONFIGURATION /////////////////////////
/////////////////////////////////////////////////////////////var mn = "th";
// Global varibale definitions:
var ie4=document.all, ns4=document.layers, ns6=document.getElementById&&!document.all, dn = "", mn = "", old = "";
if(DayForm == 2){var DaysOfWeek = new Array(7);DaysOfWeek[0] = "Sunday";DaysOfWeek[1] = "Monday";DaysOfWeek[2] = "Tuesday";DaysOfWeek[3] = "Wednesday";DaysOfWeek[4] = "Thursday";DaysOfWeek[5] = "Friday";DaysOfWeek[6] = "Saturday";
}else if(DayForm == 1){var DaysOfWeek = new Array(7);DaysOfWeek[0] = "Sun";DaysOfWeek[1] = "Mon";DaysOfWeek[2] = "Tue";DaysOfWeek[3] = "Wed";DaysOfWeek[4] = "Thu";DaysOfWeek[5] = "Fri";DaysOfWeek[6] = "Sat";}
if(MonthForm == 2){var MonthsOfYear = new Array(12);MonthsOfYear[0] = "January";MonthsOfYear[1] = "February";MonthsOfYear[2] = "March";MonthsOfYear[3] = "April";MonthsOfYear[4] = "May";MonthsOfYear[5] = "June";MonthsOfYear[6] = "July";MonthsOfYear[7] = "August";MonthsOfYear[8] = "September";MonthsOfYear[9] = "October";MonthsOfYear[10] = "November";MonthsOfYear[11] = "December";
}else if(MonthForm == 1){var MonthsOfYear = new Array(12);MonthsOfYear[0] = "Jan";MonthsOfYear[1] = "Feb";MonthsOfYear[2] = "Mar";MonthsOfYear[3] = "Apr";MonthsOfYear[4] = "May";MonthsOfYear[5] = "Jun";MonthsOfYear[6] = "Jul";MonthsOfYear[7] = "Aug";MonthsOfYear[8] = "Sep";MonthsOfYear[9] = "Oct";MonthsOfYear[10] = "Nov";MonthsOfYear[11] = "Dec";}
var ClockUpdate = new Array(3);ClockUpdate[0] = 0;ClockUpdate[1] = 1000;ClockUpdate[2] = 60000;
if(ie4||ns6){document.write('<span id="LiveClockIE" style="width: '+mywidth+'px;background-color: '+myback_color+';text-align: center;"></span>');
}else if(document.layers){document.write('<ilayer bgColor="'+myback_color+'" id="ClockPosNS" visibility="hide"><layer width="'+mywidth+'" id="LiveClockNS"></layer></ilayer>');
}else{old = "true"; show_clock();}
// The main part of the script:
function show_clock(){
	if(old == "die"){return;}
	if(ns4){document.ClockPosNS.visibility="show";}
	var Digital = new Date(),day = Digital.getDay(),mday = Digital.getDate(),month = Digital.getMonth(),year = Digital.getFullYear(),hours = Digital.getHours(),minutes = Digital.getMinutes(),seconds = Digital.getSeconds();
	if(mday == 1){mn = "st";}else if(mday == 2){mn = "nd";}else if(mday == 3){mn = "rd";}else if(mday == 21){mn = "st";}else if(mday == 22){mn = "nd";}else if(mday == 23){mn = "rd";}else if(mday == 31){mn = "st";}
	if(my12_hour){dn = "am"; if(hours > 12){dn = "pm"; hours = hours - 12;}if(hours == 0){hours = 12;}}else{dn = "";}
	if(minutes <= 9){minutes = "0"+minutes;}
	if(seconds <= 9){seconds = "0"+seconds;}
	myclock = '';myclock += '<span style="color:'+myfont_color+';font-family:'+myfont_face+';font-size:'+myfont_size+'pt;">It is currently ';myclock += mypre_text;
	if(DateBefore == 1){if(DisplayDate){myclock += DaysOfWeek[day]+' '+mday+' '+MonthsOfYear[month]+' '+year+' - ';};myclock += hours+':'+minutes;if((myupdate < 2) || (myupdate == 0)){myclock += ':'+seconds;};myclock += ' '+dn;
	}else{myclock += hours+':'+minutes;if((myupdate < 2) || (myupdate == 0)){myclock += ':'+seconds;};myclock += ' '+dn;if(DisplayDate){myclock += ' - '+DaysOfWeek[day]+' '+mday+' '+MonthsOfYear[month];}}
	myclock += '</span>';
	if(old == "true"){document.write(myclock); old = "die"; return;}
	if(ns4){clockpos = document.ClockPosNS; liveclock = clockpos.document.LiveClockNS; liveclock.document.write(myclock); liveclock.document.close();}else if(ie4){LiveClockIE.innerHTML = myclock;}else if(ns6){document.getElementById("LiveClockIE").innerHTML = myclock;}
	if(myupdate != 0){setTimeout("show_clock()",ClockUpdate[myupdate]);}
}
setTimeout("show_clock()",500)
