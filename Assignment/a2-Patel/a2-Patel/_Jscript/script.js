// Conversion of Ounce to Milliliter.

var btn=document.getElementById("b1");
var textbox=document.getElementById("txt");
var ans=document.getElementById("result");
var clear=document.getElementById("cle");
btn.onclick=function()
{
    var num=textbox.value;
    ans.innerHTML= num+"Oz = "+Math.round((num*29.57)*100)/100+"mL";
    clear.onclick=function(){
        ans.innerHTML="";
        textbox.focus();
    }
}


//Conversion of  Milliliter to Ounce 

var btn=document.getElementById("b2");
var textbox=document.getElementById("txt");
var ans=document.getElementById("result");

btn.onclick=function()
{
    var num=textbox.value;
    ans.innerHTML= num+"mL = "+Math.round((num/29.57)*100)/100+"Oz";
    clear.onclick=function(){
        ans.innerHTML="";
        textbox.focus();
    }
}


// Conversion of Liter to Milliliter.

var btn=document.getElementById("b3");
var textbox=document.getElementById("txt");
var ans=document.getElementById("result");

btn.onclick=function()
{
    var num=textbox.value;
    ans.innerHTML= num+"L = "+num*1000+"mL";
    clear.onclick=function(){
        ans.innerHTML="";
        textbox.focus();
    }
}


//Conversion of  Milliliter to Liter.

var btn=document.getElementById("b4");
var textbox=document.getElementById("txt");
var ans=document.getElementById("result");

btn.onclick=function()
{
    var num=textbox.value;
    ans.innerHTML= num+"mL = "+Math.round((num/1000)*100)/100+"L";
    clear.onclick=function(){
        ans.innerHTML="";
        textbox.focus();
    }
}


// Conversion of inches to centimeter

var btn=document.getElementById("b5");
var textbox=document.getElementById("txt");
var ans=document.getElementById("result");

btn.onclick=function()
{
    var num=textbox.value;
    ans.innerHTML= num+"in = "+num*2.54+"cm";
    clear.onclick=function(){
        ans.innerHTML="";
        textbox.focus();
    }
}


// Conversion of centimeter to inches

var btn=document.getElementById("b6");
var textbox=document.getElementById("txt");
var ans=document.getElementById("result");

btn.onclick=function()
{
    var num=textbox.value;
    ans.innerHTML= num+"cm = "+Math.round((num/2.54)*100)/100+"in";
    clear.onclick=function(){
        ans.innerHTML="";
        textbox.focus();
    }
}
  
  


  //Conversion of Pounds to Kilograms

var btn=document.getElementById("b7");
var textbox=document.getElementById("txt");
var ans=document.getElementById("result");

btn.onclick=function()
{
    var num=textbox.value;
    
    a=Math.round((num/2.02)*100)/100;
    ans.innerHTML= num+"lbs = "+a+"Kg";
    clear.onclick=function(){
        ans.innerHTML="";
        textbox.focus();
    }
}


// Conversion of Kilograms to Pounds.

var btn=document.getElementById("b8");
var textbox=document.getElementById("txt");
var ans=document.getElementById("result");

btn.onclick=function()
{
    var num=textbox.value;
    ans.innerHTML= num+"Kg = "+Math.round((num*2.02)*100)/100+"lbs";
    clear.onclick=function(){
        ans.innerHTML="";
        textbox.focus();
    }
}
ans.style.color="black";