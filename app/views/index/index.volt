<a-scene physics="gravity: 0" ballgenerator>
    <a-assets>
        <img id="boxTexture" src="https://i.imgur.com/mYmmbrp.jpg">
        <img id="skyTexture" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/sechelt.jpg">
        <a-asset-item id="ball" src="files/soccerball.gltf"></a-asset-item>
    </a-assets>

    <!-- Out of the box environment! -->
    <a-entity environment="preset: forest; dressingAmount: 500"></a-entity>
    <a-sky color="#222"></a-sky>

    <a-camera id="camera" wasd-controls look-controls="pointerLockEnabled: true" aframe-injected="" data-aframe-inspector-original-camera="" position="0 2 0">
        <a-cursor scale="2 2 2"></a-cursor>
        <a-text id="gameover" value="GAME OVER" text="anchor: center; width: 6; value: GAME OVER; align: center; color: #ffffff" position="0 0 -8" scale="5 5 5" geometry="primitive: plane; width: 3.97" material="opacity: 0.5; color: #000000" visible="false"></a-text>
        <a-text id="highscoretext" value="High Score : {{ highest.score }}" position="1.5 -0.6 -1" text="width: 2; align: right"></a-text>
        <a-text id="scoretext" value="Score : 0" position="1.5 -0.7 -1" text="width: 2; align: right"></a-text>
    </a-camera>

    <a-entity
        id="goal"
        obj-model="
            obj: files/92-football-goal/football_goal.obj;
            mtl: files/92-football-goal/football_goal.mtl;
        "
        scale="0.02 0.02 0.02"
        position="-5 0 2"
        static-body
    ></a-entity>
</a-scene>
