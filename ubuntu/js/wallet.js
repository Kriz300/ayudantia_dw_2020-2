const refresh = (wallet) => {
    let currentList = JSON.parse(localStorage.getItem("List"));
    let List = document.getElementById("List");

    while (List.firstChild)
    {
        List.firstChild.remove();
    }

    let newAtag = document.createElement("a");
    let newContent = document.createTextNode('Cargar');
    newAtag.appendChild(newContent);
    newAtag.className = "dropdown-item text-white";
    newAtag.href = "carga.php";
    List.appendChild(newAtag);


    currentList.forEach((transacciones) => {
        wallet += transacciones.trans;
    });

    newAtag = document.createElement("a");
    newContent= document.createTextNode("Saldo: "+wallet);
    newAtag.appendChild(newContent);
    newAtag.className = "dropdown-item text-white";
    newAtag.href = '#';
    List.appendChild(newAtag);

    
    newAtag = document.createElement("a");
    newContent= document.createTextNode("Logout");
    newAtag.appendChild(newContent);
    newAtag.className = "dropdown-item text-white";
    newAtag.href = 'Logout.php';
    List.appendChild(newAtag);
};


const addtoList = (game, cant, wallet) => {
    var detalle = "";
    if (cant < 0) {
        detalle = "Perdiste en: " + game;
    }
    else {
        detalle = "Ganaste en: " + game;
    }
    let currentList = JSON.parse(localStorage.getItem("List"));
    if (currentList)
    {
        currentList.push({"id":game, "fecha": new Date(), "detalle":detalle, "trans":cant});
    }
    else
    {
        currentList = [{"id":game, "fecha": new Date(), "detalle":detalle, "trans":cant}];
    }
    //console.log({"id":game, "fecha": new Date(), "detalle":detalle, "trans":cant});
    localStorage.setItem("List", JSON.stringify(currentList));
    refresh(wallet);
};