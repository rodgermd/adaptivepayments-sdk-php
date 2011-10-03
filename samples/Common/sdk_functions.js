
function HideContent() {
}

function ShowContent() {
}

var cX = 0; var cY = 0; var rX = 0; var rY = 0;
function UpdateCursorPosition(e){ cX = e.pageX; cY = e.pageY;}
function UpdateCursorPositionDocAll(e){ cX = event.clientX; cY = event.clientY;}
if(document.all) { document.onmousemove = UpdateCursorPositionDocAll; }
else { document.onmousemove = UpdateCursorPosition; }
function AssignPosition(d) {
if(self.pageYOffset) {
rX = self.pageXOffset;
rY = self.pageYOffset;
}
else if(document.documentElement && document.documentElement.scrollTop) 
{
rX = document.documentElement.scrollLeft;
rY = document.documentElement.scrollTop;
}
else if(document.body)
 {
rX = document.body.scrollLeft;
rY = document.body.scrollTop;
}
if(document.all)
 {
cX += rX; 
cY += rY;
}
d.style.left = (cX+10) + "px";
d.style.top = (cY+10) + "px";
}
function HideContent(d)
 {
if(d.length < 1) { return; }
document.getElementById(d).style.display = "none";
}
function ShowContent(d) 
{
if(d.length < 1) { return; }
var dd = document.getElementById(d);
AssignPosition(dd);
dd.style.display = "block";
}
function ReverseContentDisplay(d) 
{
if(d.length < 1) { return; }
var dd = document.getElementById(d);
AssignPosition(dd);
if(dd.style.display == "none") { dd.style.display = "block"; }
else { dd.style.display = "none"; }
}
//--------- Add and remove receivers---------
function addRow(tableID) {

    var table = document.getElementById(tableID);
    var rowCount = table.rows.length;
    if(rowCount<8)
    {
	    var row = table.insertRow(rowCount);

	    var cell0 = row.insertCell(0);
	    var element0 = document.createElement("label");
	    var textnode = document.createTextNode("Receiver");
	    element0.appendChild(textnode);
	    cell0.appendChild(element0);
	    var element1 = document.createElement("input");
	    element1.type = "checkbox";
	    cell0.appendChild(element1);
	    
	    
	    var cell2 = row.insertCell(1);
	    var element2 = document.createElement("input");
	    element2.type = "text";
	    element2.name = "receiverEmail[]";
	    element2.size = "10";
	    cell2.appendChild(element2);
	
	    var cell3 = row.insertCell(2);
		var element3 = document.createElement("input");
		element3.type = "text";
		element3.name = "receiverAmount[]";
		element3.className="smallfield";
	    cell3.appendChild(element3);
	    
        var cell4 = row.insertCell(3);
        var sel = document.createElement('select');
        sel.name = 'primaryReceiver[]';
	    sel.options[0] = new Option('false', 'false');
	    sel.options[1] = new Option('true', 'true');
	    sel.className="smallfield";
	    cell4.appendChild(sel);
        
    }
}

function deleteRow(tableID) {
    try {
	    var table = document.getElementById(tableID);
	    var rowCount = table.rows.length;
	    if(rowCount>1)
	    {
		    for(var i=2; i<rowCount; i++) {
		        var row = table.rows[i];
		        var chkbox = row.cells[0].childNodes[1];
		        if(null != chkbox && true == chkbox.checked) {
		            table.deleteRow(i);
		            rowCount--;
		            i--;
		        }
		    }
	    }   
    }catch(e) {
        alert(e);
    }
}



