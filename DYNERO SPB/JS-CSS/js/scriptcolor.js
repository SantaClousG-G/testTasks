
const log = console.log;
const items = document.querySelectorAll("div.item");
log(document.querySelectorAll("div.item"))
items.forEach(v => v.onclick = () => {
        if(v.classList.length == 2){
        v.classList.remove("active")
        }
      else{
        v.classList.add("active")
      }
  }
)
