class Icon {
    classes;
    label;
    href;
    constructor(classes, label, href = "#") {
        this.classes = classes;
        this.label = label;
        this.href = href;
    }

    toNode() {
        const li = document.createElement("li");

        const i = document.createElement("i");
        i.classList.add(...this.classes);

        const a = document.createElement("a");
        a.href = this.href;
        a.innerText = this.label;

        li.appendChild(i);
        li.appendChild(a);

        return li;
    }
}

const SOCIAL_DATA = [
    new Icon(["fa", "fa-facebook-square"], "Facebook"),
    new Icon(["fa", "fa-instagram"], "Instagram"),
    new Icon(["fa", "fa-twitter-square"], "Twitter"),
    new Icon(["fa", "fa-google-plus-square"], "Google"),
]


const socialSec = document.getElementById("social-sec");
const socialUL = document.createElement("ul")
for (const social of SOCIAL_DATA) {
    socialUL.appendChild(social.toNode());
}
socialSec.appendChild(socialUL)