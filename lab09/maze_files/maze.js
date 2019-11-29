/* CSE3026 : Web Application Development
 * Lab 09 - Maze
 */

var loser = null;  // whether the user has hit a wall

window.onload = function() {
    var divArry = $$("div.boundary:not(.example)");
    for (var i=0; i<divArry.length; i++) {
        divArry[i].onmouseover = this.overBoundary;
    }
    $("end").onmouseover = this.overEnd;
    $("start").onclick = this.startClick;
    $("maze").onmouseleave = this.overBoundary;
};

// called when mouse enters the walls; 
// signals the end of the game with a loss
function overBoundary(event) {
    var divArry = $$("div.boundary:not(.example)");
    if (loser === "start"){
        for (var i=0; i<divArry.length; i++) {
            divArry[i].addClassName("youlose");
        }
        $("status").innerHTML = "you lose :(";
        loser = "lose";
    }
    // setTimeout(function(){
    //     alert("you lose :(");
    //  }, 50);
}

// called when mouse is clicked on Start div;
// sets the maze back to its initial playable state
function startClick() {
    var divArry = $$("div.boundary:not(.example)");
    for (var i=0; i<divArry.length; i++) {
        divArry[i].removeClassName("youlose");
    }
    loser = "start";
    $("status").innerHTML = `Start game`;
    
}

// called when mouse is on top of the End div.
// signals the end of the game with a win
function overEnd() {
    if (loser === "start"){
        // alert("you win :)");
        $("status").innerHTML = "you win :)";
    }
    loser = "win";
}

// test for mouse being over document.body so that the player
// can't cheat by going outside the maze
function overBody(event) {

}



