function getAllProduct() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("livesearch").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../view/getAllProduct.php?",true);
    xmlhttp.send();
    return;
}




function getAll() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("livesearch").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../view/getAllEmployee.php?",true);
    xmlhttp.send();
    return;
}


  function showResult(str) {


    //document.getElementById("search").style.backgroundColor="RED";
    if (str.length==0) {

      //document.getElementById("livesearch").innerHTML=""; 
      var xmlhttp = new XMLHttpRequest();
      xmlhttp.onreadystatechange = function() {
        if (this.readyState == 4 && this.status == 200) {
          document.getElementById("livesearch").innerHTML = this.responseText;
        }
      };
      xmlhttp.open("GET","../view/getAllEmployee.php?",true);
      xmlhttp.send();

        //document.getElementById("livesearch").style.border="0px";
        
        //document.getElementById("productTable").innerHTML="";
        return;
    } else {

    document.getElementById("livesearch").innerHTML=""; 
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("livesearch").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../view/getEmployee.php?q="+str,true);
    xmlhttp.send();
  }
}



function addCart(str) {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    alert("added to cart");
    //document.getElementById("livesearch").innerHTML = this.responseText;
    //getAll();

  }
  };
  xmlhttp.open("GET","../view/addCartDone.php?q="+str,true);
  xmlhttp.send();

  






    console.log(str);
    //document.getElementById("demo").style.color = "red";
}



function getCartlist() {

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("livesearch").innerHTML = this.responseText;
      }
    };
    xmlhttp.open("GET","../view/getCartlist.php?",true);
    xmlhttp.send();
    return;
}



function deleteFood(str) {

  var xmlhttp = new XMLHttpRequest();
  xmlhttp.onreadystatechange = function() {
  if (this.readyState == 4 && this.status == 200) {
    document.getElementById("livesearch").innerHTML = this.responseText;
    getAllProduct();
  }
  };
  xmlhttp.open("GET","../view/deleteFoodDone.php?q="+str,true);
  xmlhttp.send();

    console.log(str);
}

function buy() {
  alert("payment method must be added");
}