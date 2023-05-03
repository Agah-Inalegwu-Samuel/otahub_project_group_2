<template>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body id="HomeView.vue">
        <div class="contain">
            <div class="video">
                <video src="../assets/animation.mp4"  autoplay muted></video>
            </div>

            <div class="heading">
                <h2>Otukpo Tech Academy</h2>
                <h3>We provide free IT training for young passionate Nigerians to enable them birth their super dreams. Join us as we take a voyage around the shores of <strong>COMPUTER PROGRAMING</strong></h3>
            </div>

            <div class="learn">
                <strong><h2>What you'll learn:</h2></strong>
            </div>

            <div class="row1">
                <div class="col1">
                    <h3>HTML</h3>
                    <h3>CSS</h3>
                    <h3>Javascipt</h3>
                    <h3>Mysql</h3>
                    <h3>Javascipt</h3>
                    <h3>Wordpress</h3>
                    <h3>Php</h3>
                    <h3>lots more...</h3>
                    <a href=""><button type="button">Contact Us<span>&RightArrow;</span></button></a>
                </div>

                <div class="col2">
                    <img src="../assets/best.jpg" class="controller">
                </div>

            </div>
            <div class="hr"><hr></div>
        </div>
    </body>
    </html>
</template>

<script>
export default {
  name: "HomeView",
  props: {
    
  }
}
</script>

<style>
.video{
    background-image: url("../assets/animation.mp4");
}
.contain{
    overflow: hidden;
    background-color: rgb(228, 234, 238);
    color: #000;
}
.video video{
    width: 100%;
    height: 50%;
}
.heading h2{
    font-family: serif;
    font-weight: 900;
    font-size: 70px;
    margin: 40px;
    color: #2c3e50;
    text-align: center;
    padding-left: 100px;
}
.heading h3{
    color: black;
    font-family: monospace;
    padding-left: 20px;
}
.row1{
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin: 30px 0;
}

.col1{
    flex-basis: 40%;
    position: relative;
    margin-left: 50px;
}
.learn{
    margin-top: 40px;
    padding-left: 20px;
}
.col1 h3{
    font-size: 30px;
    color: #272424;
    font-weight: 100;
    margin: 15px 0 10px;
    font-family: italic;

    
}
.col1 h3 a{
    margin: 10px 0;
    font-size: 20px;
    color: #000;
    text-decoration: none;
}
.col1 button{
    width: 140px;
    border: 0;
    padding: 12px 10px;
    outline: none;
    color: #fff;
    background: linear-gradient(rgba(2, 33, 126, 0.913), rgb(11, 4, 22));
    border-radius: 6px;
    cursor: pointer;
    transition: width 1s;
    transition: 1s;
    text-decoration: none;
    margin-top: 40px;
    margin-left: 50px;

}
button span{
    width: 30px;
    display: none;
}
.col1 button:hover span{
    display: block;
    text-decoration: none;
}
.col1 button:hover{
    width: 160px;
    display: flex;
    align-items: center;
    justify-content: space-between;
    text-decoration: none;
}
.col1::after{
    content: "";
    width: 10px;
    height: 80%;
    background: linear-gradient(rgba(2, 33, 126, 0.913), rgb(11, 4, 22));
    position: absolute;
    left: -20px;
    top: 8px;
    text-decoration: none;
}
.col2{
    flex-basis: 50%;
    display: flex;
}
.col2 .controller{
    width: 100%;
    height: 500px;
    border-radius: 10%;
}
.add-btn img{
    width: 35px;
    margin-bottom: 5px;
}
.add-btn{
    text-align: center;
    color: #fff;
    cursor: pointer;
}
.hr{
    border-top: 5px;
}
</style>