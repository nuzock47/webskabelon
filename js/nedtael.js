var now = new Date();
var seconds = 0;
var e_secLeft = 0;
var minutes = 0;
var e_minsLeft = 0;
var hours = 0;
var e_hoursLeft = 0;
var days = 0;
var msPerDay = 24*60*60*1000;
var e_daysLeft = 0;


function update(event,no)
{
	now = new Date();
	timeLeft = (event - now);
	e_daysLeft = timeLeft/msPerDay;
	days = Math.floor(e_daysLeft);

	e_hoursLeft = (e_daysLeft-days)*24;
	hours = Math.floor(e_hoursLeft);

	e_minsLeft = (e_hoursLeft-hours)*60;
	minutes = Math.floor(e_minsLeft);

	e_secLeft=(e_minsLeft-minutes)*60;
	seconds=Math.floor(e_secLeft);
    
	document.getElementById('days'+no).value = days;
	document.getElementById('hours'+no).value = hours;
	document.getElementById('minutes'+no).value = minutes;
	document.getElementById('seconds'+no).value = seconds;
	
	if (days<0)
	{
		clearInterval('ID'+no);
		document.getElementById('cnt'+no).innerHTML = "EXPIRED";
	}
}
//credit til Bola den almægtig//
