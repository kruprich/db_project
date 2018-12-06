//SUBMIT FUNCTIONS

function submit_form()

{

var id=$("#id").val();

var gId=$("#gId").val();

var leagueName=$("#leagueName").val();

var logoURL=$("#logoURL").val();



var dataTosend='id='+id+'&gId='+gId+'&leagueName='+leagueName+'&logoURL='+logoURL;
alert(leagueName + "Added Sucessfully");
$.ajax({

url: '/insertLeague.php',

type: 'POST',

data:dataTosend,

async: true,

success: function (data) {

//alert(idflight + "HELLO");

},

});

}



function submit_form_player()

{

var id=$("#id").val();

var firstName=$("#firstName").val();

var lastName=$("#lastName").val();

var inGameName=$("#inGameName").val();

var hometown=$("#hometown").val();

var region=$("#region").val();

var photoURL=$("#photoURL").val();



var dataTosend='id='+id+'&firstName='+firstName+'&lastName='+lastName+'&inGameName='+inGameName+'&hometown='+hometown+'&region='+region;
alert("Player " + firstName + " " + lastName + " " + "Added Sucessfully");
$.ajax({

url: '/insertPlayer.php',

type: 'POST',

data:dataTosend,

async: true,

success: function (data) {

//alert(idflight + "HELLO");

},

});

}

function submit_form_team()

{

var id=$("#id").val();

var teamName=$("#teamName").val();

var photoURL=$("#photoURL").val();

var logoURL=$("#logoURL").val();

var acronym=$("#acronym").val();

var altLogoURL=$("#altLogoURL").val();

var homeLeague=$("#homeLeague").val();



var dataTosend='id='+id+'&teamName='+teamName+'&photoURL='+photoURL+'&logoURL='+logoURL+'&acronym='+acronym+'&altLogoURL='+altLogoURL+'&homeLeague='+homeLeague;
alert(teamName + " Added Sucessfully");
$.ajax({

url: '/insertTeam.php',

type: 'POST',

data:dataTosend,

async: true,

success: function (data) {

//alert(idflight + "HELLO");

},

});

}


//SEARCH BAR FUNCTIONS

