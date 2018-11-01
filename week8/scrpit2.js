

    var loadingButton = document.querySelector("button");
    var loading = document.querySelector("#loading");
    var arrayOfCards;
    var cardsDiv = document.querySelector("#cards");

    function onStreamProcessed(text) {
        arrayOfCards = new Array();
        arrayOfCards = JSON.parse("[" + text + "]")[0];

        var cards = document.querySelector("#cards");
        arrayOfCards.forEach(element => {
            var div = document.createElement("div");
            var title = document.createElement("p");
            var price = document.createElement("p");

            title.innerHTML = element.maker + " " + element.model;
            price.innerHTML = element.price;

            title.classList.add("title");
            price.classList.add("price");

            div.appendChild(title);
            div.appendChild(price);

            div.classList.add("card");

            cards.appendChild(div);
        });
        loading.style = " ";
        loadingButton.textContent = "Loaded";
    }

    function onSuccess(response) {
        response.text().then(onStreamProcessed);
    }
    function onFail(error) {
        loadingButton.textContent = "ERROR";
    }

    loadingButton.addEventListener("click", function(e) {
        loadingButton.textContent = "Loading...";
        loading.style = "display: block";

        fetch("http://demo4296963.mockable.io/listCars").then(onSuccess, onFail)
    });