
function finish(event){
    let fin = event.currentTarget.parentNode;
    fin.setAttribute('data-status','done');
}

let finn = document.querySelectorAll("div button");
for (let butt of finn){
    console.log('button');
    butt.addEventListener('click', finish);
}









