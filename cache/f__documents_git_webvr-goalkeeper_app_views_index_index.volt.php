<a-scene physics="debug: true; gravity: 0" ballgenerator>
    <a-assets>
        <img id="boxTexture" src="https://i.imgur.com/mYmmbrp.jpg">
        <img id="skyTexture" src="https://cdn.aframe.io/360-image-gallery-boilerplate/img/sechelt.jpg">
        <a-asset-item id="ball" src="files/soccerball.gltf"></a-asset-item>
    </a-assets>

    <!-- Out of the box environment! -->
    <a-entity environment="preset: forest; dressingAmount: 500"></a-entity>
    <a-sky color="#222"></a-sky>

    <a-camera wasd-controls look-controls="pointerLockEnabled: true" aframe-injected="" data-aframe-inspector-original-camera="" position="0 2 0">
        <a-cursor></a-cursor>
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

    <!-- <a-gltf-model
        src="#ball"
        scale="0.3 0.3 0.3"
        position="0 2 -3"
        animation__rotation="
            property: rotation;
            to: 360 0 0;
            dur: 500;
            loop: true;
            easing: linear;
        "
    ></a-gltf-model> -->
    <!-- dynamic-body="shape: sphere" -->
</a-scene>