 

function getData(){
    url= "https://libretranslate.com/languages"
    fetch(url).then((response)=> {
        return response.json();
    }).then((data)=> {
  console.log(data);
    
    
    })
}
getData();

// function appendData(){
// var mainContainer = document.getElementById("mydata");
// for(var i; i< data.length; i++){
// 	var div = document.createElement("div");
// 	var div2 = document.createElement("div2");
// 	div.innerHTML = 'code: ' + data[i].code;
// 	div2.innerHTML = 'name:' + data[i].name;
// 	//div.innerHTML = 'Name: ' + data[i].firstName + ' ' + data[i].lastName;
// 	mainContainer.appendChild(div);
// 	mainContainer.appendChild(div2);
// }
// }
// // appendData();




