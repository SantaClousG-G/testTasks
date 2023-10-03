
let div = document.createElement('div');
div.className = "loader";
div.innerHTML = "";
document.body.appendChild(div)


for(let i = 0; i < 3; i++){
    let div = document.createElement('div');
    div.className = "item";
    div.innerHTML = "popup";
    document.body.appendChild(div)
}