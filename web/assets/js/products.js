class Card {
    src;
    desc;
    constructor(src, desc) {
        this.src = src;
        this.desc = desc;
    }

    toNode() {
        const item = document.createElement("div");
        item.classList.add("items");

        const card = document.createElement("div");
        card.classList.add("card");

        const img = document.createElement("img");
        img.classList.add("card-img");
        img.src = this.src;

        const h3 = document.createElement("h3");
        h3.classList.add("card-title");
        h3.innerText = this.desc;

        item.appendChild(card);
        card.appendChild(img);
        card.appendChild(h3);

        return item;
    }
}

const PRODUCTS_DATA = [
    new Card("assets/img/product1.jpg", "Excepteur sint occaecat"),
    new Card("assets/img/product2.jpg", "Lorem ipsum dolor"),
    new Card("assets/img/product3.jpg", "cupidatat non proident"),
    new Card("assets/img/product4.jpg", "Duis aute irure"),
    new Card("assets/img/product5.jpg", "magna aliqua"),
    new Card("assets/img/product6.jpg", "Lorem occaecat"),
    new Card("assets/img/product7.jpg", "Occaecat Duis"),
    new Card("assets/img/product8.jpg", "illum qui dolorem eum fugiat")
];

const productsSec = document.getElementById("products-sec");
for (const product of PRODUCTS_DATA) {
    productsSec.appendChild(product.toNode());
}