var score = 0;
var gameID = -1;

AFRAME.registerComponent('ballgenerator', {
    init: function () {
        let spawner = this.el;
        let scorer = document.getElementById("scoretext");
        let gameover = document.getElementById("gameover");
        let camera = document.getElementById("camera");
        
        gameID = setInterval(generateBalls, 2500);

        function generateBalls() {
            if (gameID != -1) {
                let newBall = document.createElement("a-gltf-model");
                newBall.setAttribute("scale", "0.35 0.35 0.35");
                newBall.setAttribute("src", "#ball");
                newBall.setAttribute("velocity", "0 0 10");
                newBall.setAttribute("dynamic-body", "shape: sphere");
                let randomX = Math.random() * 8 - 4;
                let randomY = Math.random() * 2 + 1;
                newBall.setAttribute("position", `${randomX} ${randomY} -30`);
                spawner.appendChild(newBall);
                newBall.addEventListener('click', function () {
                    score++;
                    console.log("%cBall catched!", "font-size: 2em");
                    newBall.parentNode.removeChild(newBall);
                    scorer.setAttribute("value", "Score : " + score);
                });
                newBall.addEventListener('collide', function() {
                    gameID = -1;
                    console.log("%cGAME OVER", "font-size: 2em");
                    newBall.parentNode.removeChild(newBall);
                    gameover.setAttribute("visible", "true");
                    camera.removeAttribute('wasd-controls');
                    camera.removeAttribute('look-controls');
                });
            }
        }
    }
});