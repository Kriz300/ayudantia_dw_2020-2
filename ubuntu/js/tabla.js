$(document).ready(function() {
    let currentList = JSON.parse(localStorage.getItem("List"));
    let List = document.getElementById("display");
    let newTrtag;
    let newTdtag;
    let newContent;

    currentList.forEach( ({id, fecha, detalle, trans}) => {
        
        newTrtag = document.createElement("tr");
        newTdtag = document.createElement("td");
        newContent = document.createTextNode(fecha);
        newTdtag.appendChild(newContent);
        newTrtag.appendChild(newTdtag);

        newTdtag = document.createElement("td");
        newContent = document.createTextNode(detalle);
        newTdtag.appendChild(newContent);
        newTrtag.appendChild(newTdtag);

        newTdtag = document.createElement("td");
        newContent = document.createTextNode(trans);
        newTdtag.appendChild(newContent);
        newTrtag.appendChild(newTdtag);

        List.appendChild(newTrtag);
    });
});