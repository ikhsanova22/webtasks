

function add(){
    var tab = document.getElementById('students');
    if(document.getElementById("name").value==""){
        document.getElementById("name").style.border = "2px solid red";
    }
    if(document.getElementById("surname").value==""){
        document.getElementById("surname").style.border = "2px solid red";	
    }
    if(document.getElementById("faculty").value=="-1"){
        document.getElementById("faculty").style.border="2px solid red";
    }else{
        
    var r = tab.insertRow();
    
    var c1  = r.insertCell(0);
    var c2  = r.insertCell(1);
    var c3  = r.insertCell(2);

    c1.appendChild(document.createTextNode(document.getElementById("name").value));
    c2.appendChild(document.createTextNode(document.getElementById("surname").value));	
    c3.appendChild(document.createTextNode(document.getElementById("faculty").value));		
    }
}

document.getElementById("addStudent").addEventListener("click", add);
