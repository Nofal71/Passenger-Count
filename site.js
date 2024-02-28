
let current = 0;
const names = {};
const ages = {}
let main = document.getElementById("main");
let rec = document.getElementById("record");
let data = document.getElementById("data");

function count(){
    document.getElementById("age").value = "";
    document.getElementById("name").value = "";
    document.getElementById("gender").value = "";
    current++;

  if(data.style.display === "none"){
    data.style.display = "block";
    main.style.display = "none";
    rec.style.display = "none";
  }
    document.getElementById("current").innerHTML = current ;

}

function Saved(){    
    let name = document.getElementById("name").value;
    let age = document.getElementById("age").value;
    names["passanger_",current] = name;
    ages["passanger_age_",current] = age;

    if(main.style.display === "none"){
        main.style.display = "block";
        data.style.display = "none";
        rec.style.display = "none";
      }
}

function displayObjectsAsList(object1 , object2) {
    let listHTML = '<lable>';
    for (let key in object1) {
        if (object1.hasOwnProperty(key)) {
            listHTML += '<lable>' + " Passanger_" + "<br><br>"  + "NAME : " + object1[key]  + "<br>" + " AGE : "+ object2[key] + '</lable>' + "<br><br>";
        } 
    }
    listHTML += '</lable>';
    return listHTML;
}


function record(){
    if(rec.style.display === "none"){
        rec.style.display = "block";
        main.style.display = "none";
        data.style.display = "none";
      }
    document.getElementById("r").innerHTML = displayObjectsAsList(names ,ages);
}

function back(){
    document.getElementById("record").style.display = "none";
    document.getElementById("data").style.display = "none";
    document.getElementById("main").style.display = "block";
}

window.addEventListener('beforeunload', function (e) {
    e.preventDefault();
    e.returnValue = '';
    var confirmationMessage = 'Are you sure you want to leave this page?';
    return confirmationMessage;
});
