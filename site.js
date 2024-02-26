
let current = 0;
const names = {
};
const ages = {
    
}
function count (){
    document.getElementById("age").value = "";
    document.getElementById("name").value = "";
    current++;
    document.getElementById("record").style.display = "none";
    document.getElementById("main").style.display = "none";
    document.getElementById("data").style.display = "block";
    document.getElementById("current").innerHTML = current ;

}

function Saved(){    
    let name = document.getElementById("name").value;
    let age = document.getElementById("age").value;
    names["passanger_",current] = name;
    ages["passanger_age_",current] = age;
    console.log(current)
    console.log(names)
    document.getElementById("record").style.display = "none";
    document.getElementById("main").style.display = "block";
    document.getElementById("data").style.display = "none";
    
}
let i = 1;

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
    document.getElementById("record").style.display = "block";
    document.getElementById("main").style.display = "none";
    document.getElementById("data").style.display = "none";
   
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
