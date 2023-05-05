
var bouns=function(num){

    
for(i=0;i<num.length;i++){
    num[i]=num[i]+5;
}
};
bouns();
marks=[45,55,85];
bouns(marks);
document.write("marks:"+marks);