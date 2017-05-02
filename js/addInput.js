// Add a new Input on demand
function addInput(){    
    var newInput = document.createElement("input");
        newInput.setAttribute("type", "text");
        newInput.setAttribute("placeholder","Enter here!");

    var parent = document.getElementById("addInputDiv");
        parent.className = "ui input";
        parent.appendChild(newInput);
}
