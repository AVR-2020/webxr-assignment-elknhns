var score = 0;
var gameID = -1;

AFRAME.registerComponent('ballgenerator', {
    init: function () {
        let spawner = this.el;
        let scorer = document.getElementById("scoretext");
        // console.log(scorer);
        gameID = setInterval(generateBalls, 2000);

        function generateBalls() {
            if (gameID != -1) {
                let newBall = document.createElement("a-gltf-model");
                newBall.setAttribute("scale", "0.3 0.3 0.3");
                newBall.setAttribute("src", "#ball");
                newBall.setAttribute("velocity", "0 0 15");
                newBall.setAttribute("dynamic-body", "shape: sphere");
                let randomX = Math.random() * 8 - 4;
                let randomY = Math.random() * 2 + 1;
                newBall.setAttribute("position", `${randomX} ${randomY} -30`);
                spawner.appendChild(newBall);
                newBall.addEventListener('click', function () {
                    score++;
                    console.log(score);
                    newBall.parentNode.removeChild(newBall);
                    scorer.setAttribute("value", "Score : " + score);
                });
                newBall.addEventListener('collide', function() {
                    gameID = -1;
                    console.log("GAME OVER");
                });
            }
        }
    }
});