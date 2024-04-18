var oneStar = document.getElementById("onestar");
var twostars = document.getElementById("twostars");
var threestars = document.getElementById("threestars");
var fourstars = document.getElementById("fourstars");
var fivestars = document.getElementById("fivestars");
var rate = document.getElementById("rate");

switch (star) {
    case '5':
        for (var i = 0; i < 5; i++) {
            var starNode = document.createElement("span");
            createNode(starNode);
            rate.appendChild(starNode);
        }
        break;
    case '4.5':
        for (var i = 0; i < 4; i++) {
            var starNode = document.createElement("span");
            createNode(starNode);
            rate.appendChild(starNode);
        }
        var halfStarNode = document.createElement("span");
        createHalfStarNode(halfStarNode);
        rate.appendChild(halfStarNode);
        for(var j = 0; j<4-i;j++){
            var NullStarNode = document.createElement("span");
            createNullStarNode(NullStarNode);
            rate.appendChild(NullStarNode);
            }
        break;
    case '4':
        for (var i = 0; i < 4; i++) {
            var starNode = document.createElement("span");
            createNode(starNode);
            rate.appendChild(starNode);
        }
        for(var j = 0; j<5-i;j++){
            var NullStarNode = document.createElement("span");
            createNullStarNode(NullStarNode);
            rate.appendChild(NullStarNode);
            }
        break;
    case '3.5':
        for (var i = 0; i < 3; i++) {
            var starNode = document.createElement("span");
            createNode(starNode);
            rate.appendChild(starNode);
        }
        var halfStarNode = document.createElement("span");
        createHalfStarNode(halfStarNode);
        rate.appendChild(halfStarNode);
        for(var j = 0; j<4-i;j++){
            var NullStarNode = document.createElement("span");
            createNullStarNode(NullStarNode);
            rate.appendChild(NullStarNode);
            }
        break;
    case '3':
        for (var i = 0; i < 3; i++) {
            var starNode = document.createElement("span");
            createNode(starNode);
            rate.appendChild(starNode);
        }
        for(var j = 0; j<5-i;j++){
            var NullStarNode = document.createElement("span");
            createNullStarNode(NullStarNode);
            rate.appendChild(NullStarNode);
            }
        break;
    case '2.5':
        for (var i = 0; i < 2; i++) {
            var starNode = document.createElement("span");
            createNode(starNode);
            rate.appendChild(starNode);
        }
        var halfStarNode = document.createElement("span");
        createHalfStarNode(halfStarNode);
        rate.appendChild(halfStarNode);
        for(var j = 0; j<4-i;j++){
            var NullStarNode = document.createElement("span");
            createNullStarNode(NullStarNode);
            rate.appendChild(NullStarNode);
            }
        break;

    case '2':
        for (var i = 0; i < 2; i++) {
            var starNode = document.createElement("span");
            createNode(starNode);
            rate.appendChild(starNode);
        }
        for(var j = 0; j<5-i;j++){
            var NullStarNode = document.createElement("span");
            createNullStarNode(NullStarNode);
            rate.appendChild(NullStarNode);
            }
        break;
    case '1.5':
        for (var i = 0; i < 1; i++) {
            var starNode = document.createElement("span");
            createNode(starNode);
            rate.appendChild(starNode);
        }
        var halfStarNode = document.createElement("span");
        createHalfStarNode(halfStarNode);
        rate.appendChild(halfStarNode);
        for(var j = 0; j<4-i;j++){
        var NullStarNode = document.createElement("span");
        createNullStarNode(NullStarNode);
        rate.appendChild(NullStarNode);
        }
        break;
    case '1':
        for (var i = 0; i < 1; i++) {
            var starNode = document.createElement("span");
            createNode(starNode);
            rate.appendChild(starNode);
        }
        for(var j = 0; j<5-i;j++){
            var NullStarNode = document.createElement("span");
            createNullStarNode(NullStarNode);
            rate.appendChild(NullStarNode);
            }
        break;
    case '0':
        for(var i = 0; i<5;i++){
            var NullStarNode = document.createElement("span");
            createNullStarNode(NullStarNode);
            rate.appendChild(NullStarNode);
        }
    default:
        console.log("default");
// NullStarNode
}

function createNode(node) {
    node.classList.add("fa");
    node.classList.add("fa-star");
    node.classList.add("checked");
    return node;
}

function createHalfStarNode(node) {
    node.classList.add("fa");
    node.classList.add("fa-star-half-full");
    node.classList.add("checked");
    return node;
}
function createNullStarNode(node) { 
    node.classList.add("fa");
    node.classList.add("fa-star-o");
    node.classList.add("checked");
    return node;
}
// Rating comment //
function checkStar1() {
    oneStar.classList.add("checked");
    twostars.classList.remove("checked");
    threestars.classList.remove("checked");
    fourstars.classList.remove("checked");
    fivestars.classList.remove("checked");
    setStar();
}
function checkStar2() {
    twostars.classList.add("checked");
    oneStar.classList.add("checked");
    threestars.classList.remove("checked");
    fourstars.classList.remove("checked");
    fivestars.classList.remove("checked");
    setStar();
}
function checkStar3() {
    oneStar.classList.add("checked");
    threestars.classList.add("checked");
    twostars.classList.add("checked");
    fourstars.classList.remove("checked");
    fivestars.classList.remove("checked");
    
    setStar();
}
function checkStar4() {
    oneStar.classList.add("checked");
    twostars.classList.add("checked");
    threestars.classList.add("checked");
    fourstars.classList.add("checked");
    fivestars.classList.remove("checked");
    
    setStar();
}
function checkStar5() {
    oneStar.classList.add("checked");
    twostars.classList.add("checked");
    threestars.classList.add("checked");
    fourstars.classList.add("checked");
    fivestars.classList.add("checked");
    setStar();
}

function setStar() {
    var oneStar = document.getElementById("onestar");
    var twostars = document.getElementById("twostars");
    var threestars = document.getElementById("threestars");
    var fourstars = document.getElementById("fourstars");
    var fivestars = document.getElementById("fivestars");
    let soSao = document.getElementById("soSao");

    if(oneStar.classList.contains("checked")) {
        soSao.value = 1;
    }
    if(twostars.classList.contains("checked")) {
        soSao.value = 2;
    }
    if(threestars.classList.contains("checked")) {
        soSao.value = 3;
    }
    if(fourstars.classList.contains("checked")) {
        soSao.value = 4;
    }
    if(fivestars.classList.contains("checked")) {
        soSao.value = 5;
    }
}