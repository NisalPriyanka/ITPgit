/**
 * @author Nisal
 */

//description values

var count = 0;

function incrementCount()
{
	count++;
}

function addTextBox(name,place)
{
	incrementCount();
	
	//create and store Text into element
	var element = document.createElement("input");
	var space = document.createElement("p");
	
	//setting attributes
	
	element.setAttribute("type","text");
	element.setAttribute("class","form-control input-sm");
	element.setAttribute("name",name+count);
	element.setAttribute("value",name+count);
	
	
	
	//placing textBox when button click
	
	var getplace = document.getElementById(place);

	getplace.appendChild(element);
	getplace.appendChild(space);
	
	
}

//add praticluar textBox for get value
function addTextBoxValues(name,place)
{
	
	
	//create and store Text into element
	var element = document.createElement("input");
	var space = document.createElement("p");
	
	//setting attributes
	
	element.setAttribute("type","number");
	element.setAttribute("class","form-control input-sm");
	element.setAttribute("name",name+count);
	element.setAttribute("value",name+count);
	
	
	
	//placing textBox when button click
	
	var place = document.getElementById(place);

	place.appendChild(element);
	place.appendChild(space);
	
	
}

function deleteTextBox()
{
	
}
