/**
 * @author Nisal
 */

var count = 0;

function incrementCount()
{
	count++;
}

function addTextBox()
{
	incrementCount();
	
	//create and store Text into element
	var element = document.createElement("input");
	var space = document.createElement("p");
	
	//setting attributes
	
	element.setAttribute("type","text");
	element.setAttribute("class","form-control input-sm");
	element.setAttribute("name","t"+count);
	element.setAttribute("value","t"+count);
	
	//placing textBox when button click
	
	var place = document.getElementById("tboxR1");

	place.appendChild(element);
	place.appendChild(space);
	
	
}

//add praticluar textBox for get value
function addTextBoxValues()
{
	
	
	//create and store Text into element
	var element = document.createElement("input");
	var space = document.createElement("p");
	
	//setting attributes
	
	element.setAttribute("type","number");
	element.setAttribute("class","form-control input-sm");
	element.setAttribute("name","desRf"+count);
	element.setAttribute("value","desRf"+count);
	
	//placing textBox when button click
	
	var place = document.getElementById("vboxR1");

	place.appendChild(element);
	place.appendChild(space);
	
	
}
