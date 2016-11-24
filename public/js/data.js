var date;
var starttime;
var task;
var task_location
var TinderboxEvents = {'TODAY' : '<span>Today</span>',};

function getSchedule() {
	jQuery.ajax({
		url: 'http://gabrielbrumea.info/Tinderboxofficial/index.php/schedule/getSchedule',
		contentType: 'application/json',
		type: 'GET',
		async: false,
		success: function(data, status, response) {
			for(var i in data) {
				date = data[i].date;
				var dateExploded = date.split('-');
				var dateNumber = dateExploded[1];
				dateNumber = parseInt(dateNumber);
				function nth(d) {
				  if(d>3 && d<21) return 'th'; // thanks kennebec
				  switch (d % 10) {
				        case 1:  return "st";
				        case 2:  return "nd";
				        case 3:  return "rd";
				        default: return "th";
				    }
				} 
				starttime = data[i].starttime;
				task = data[i].task;
				task_location = data[i].location;
				
				TinderboxEvents[date] = '<span id="container-date"><span class="left-text-span">' + dateNumber + '' + nth(dateNumber) +'</span><span class="text-right-span"><ul class="list-group"><li class="list-group-item date">Start time: ' + starttime +'</li><li class="list-group-item date">Task: ' + task + '</li><li class="list-group-item date">Location: ' + task_location + '</li></ul></span></span>';
			}
		},
		error: function(request, status, error) {
			console.log(request);
		}
	});
	return TinderboxEvents;
};
