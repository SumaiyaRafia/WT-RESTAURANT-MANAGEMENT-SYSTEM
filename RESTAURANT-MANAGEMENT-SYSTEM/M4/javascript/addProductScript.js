function idVal() {
        var productId=document.getElementById("productId").value;

        var regex= /^[0-9]{0,11}$/ ;


        if (regex.test(productId)) {
            document.getElementById("productIdErr").innerHTML= "";
            //return true;
            //document.getElementById("username").style.backgroundColor="Green";
            
        }
        else
        {

            //document.getElementById("username").style.backgroundColor="RED";

            document.getElementById("productIdErr").innerHTML= "maximum 11 digit allow and only number";
        }


    }
    
    function nameVal() {
        var productName=document.getElementById("productName").value;

        var regex= /^[a-zA-Z\ ]*$/ ;


        if (regex.test(productName)) {
            document.getElementById("productNameErr").innerHTML= "";
            //return true;
            //document.getElementById("username").style.backgroundColor="Green";
            
        }
        else
        {

            //document.getElementById("username").style.backgroundColor="RED";

            document.getElementById("productNameErr").innerHTML= "Please enter a product name and only alphabet";
        }


    }




    function buyVal() {
        var buyPrice=document.getElementById("buyPrice").value;

        var regex= /^[0-9]*$/ ;


        if (regex.test(buyPrice)) {
            document.getElementById("buyPriceErr").innerHTML= "";
            //return true;
            //document.getElementById("username").style.backgroundColor="Green";
            
        }
        else
        {

            //document.getElementById("username").style.backgroundColor="RED";

            document.getElementById("buyPriceErr").innerHTML= "only number can allow";
        }


    }


    function sellVal() {
        var sellPrice=document.getElementById("sellPrice").value;

        var regex= /^[0-9]*$/ ;


        if (regex.test(sellPrice)) {
            document.getElementById("sellPriceErr").innerHTML= "";
            //return true;
            //document.getElementById("username").style.backgroundColor="Green";
            
        }
        else
        {

            //document.getElementById("username").style.backgroundColor="RED";

            document.getElementById("sellPriceErr").innerHTML= "only number can allow";
        }


    }