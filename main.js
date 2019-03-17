for (var i = 0; i <36 ; i++) {
  document.body.querySelectorAll("input")[i].style.background = "white";
}
for (var i = 1; i < 6; i++) {
document.body.querySelectorAll("input")[i].setAttribute("value"," ");
}
var aList = [ [0,0,0,0,0,0],[0,0,0,0,0,0],[0,0,0,0,0,0],[0,0,0,0,0,0],[0,0,0,0,0,0],[0,0,0,0,0,0]]
function fun(a,b){
  if(aList[a][b] == 1)
    aList[a][b] = 0;
  else {
    aList[a][b] = 1;
  }
  if(aList[a][b] == 1)
    document.body.querySelectorAll("input")[(a*6)+b].style.background = "black";
  else {
      document.body.querySelectorAll("input")[(a*6)+b].style.background = "white";
  }
}

function printList() {
     // alert(aList[0] + "<br>" + aList[1] + "<br>" + aList[2] + "<br>" + aList[3] + "<br>" +aList[4] + "<br>" + aList[5] + "<br>"  );
     var l = ""
     for (var i = 0; i < aList.length; i++) {
       l = l + aList[i].join("")
     }
     document.body.querySelector(".text").value = l;
     alert("all SET")
}
