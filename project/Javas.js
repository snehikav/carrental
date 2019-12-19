//Created by Project 8 team
"use strict"
var custName,Model, rand;//declaring variables


function start () {
	document.getElementById("returncar").addEventListener("click",returncar,false);
}


function returncar() {//start function

		rand=Math.floor(Math.random()*10);
	    custName = document.getElementById("custTextbox").value;
		Model=document.getElementById("modelTextbox").value;

		document.getElementById("project8").innerHTML= "Hi "+ (custName) + ", your return confirmation for "+ (Model) +" is successful. your confirmation ID is:" + (rand);

}//end function

window.addEventListener("load",start,false);
