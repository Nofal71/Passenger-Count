
let main = document.getElementById("main");
let rec = document.getElementById("record");
let data = document.getElementById("data");

function count(){
    document.getElementById("age").value = "";
    document.getElementById("name").value = "";
    document.getElementById("gender").value = "";

  if(data.style.display === "none"){
    data.style.display = "block";
    main.style.display = "none";
    rec.style.display = "none";
  }

}

function Saved(){    
    if(main.style.display === "none"){
        main.style.display = "block";
        data.style.display = "none";
        rec.style.display = "none";
      }
}
function record(){
    if(rec.style.display === "none"){
        rec.style.display = "block";
        main.style.display = "none";
        data.style.display = "none";
      }
}

