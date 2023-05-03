<template>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact Us</title>
    </head>
    <body id="ContactView.vue">
        <div class="row">
            <div class="column">
                <div class="base1">
                    <h2>{{name}}</h2>
                    <hr color="white" size="3">
                    <h5>admissions@thebackhomeproject.org</h5><br>
                    <h5>WhatsApp: +2348148085283</h5>
                </div>
            </div>
        
        
            <div class="column">
                <div class="base2">
                    <form action="mailto:admissions@thebackhomeproject.org" method="get">
                        <label for="name">Your Name</label><br>
                        <input type="text" required><br><br>
                
                        <label for="email">Your Email</label><br>
                        <input type="text" required><br><br>
                
                        <label for="phone-number">Phone Number</label><br>
                        <input type="number"><br><br>
                
                        <label for="message">Your Message(optional)</label><br>
                        <textarea name="" id="" cols="30" rows="10"></textarea>
                        <button type="submit">Submit Comment</button>
            
                    </form>
                </div>
            </div>
        </div>
    </body>
    </html>
</template>

<script>
export default {
    name: "ContactView",
    props: {

    },
    data() {
        return {
            name: "Lets get in touch",
        }
    },
}
</script>

<style>

.row{
    background: linear-gradient(rgba(2, 33, 126, 0.913), rgb(11, 4, 22));
    color: royalblue;
}
.column{
    float: left;
    width: 50%;
}
.row:after{
    content: "";
    display: table;
    clear: both;
}
.base1 {
    color: white;
    padding-left: 10px;
}
.base1 h2{
    font-family: Garamond, serif ;
    padding-top: 30px;
    padding-bottom: 10px;
    letter-spacing: 2px;
    margin-left: 20px;
}
.base1 hr{
    margin-top: 10px;
    margin-left: 20%;
    width: 60%;
    margin-bottom: 20px;
}

.base1 img{
    width: 25px;
}
.base2 {
    padding-top: 20px;
}
.base2 input{
    width: 80%;
    height: 40px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: none;
    background: white;
    font-size: 15px;
}
.base2 textarea{
    width: 80%;
    height: 150px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: none;
    background: white;
    font-size: 15px;
}
.base2 input:focus{
    border: 1px solid white;
    outline: 0;
}
.base2 textarea:focus{
    border: 1px solid white;
    outline: 0;
}
.base2 label{
    color: white;
    margin-bottom: 30px;
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
}
.base2 button{
    border: 0;
    padding: 10px 30px;
    background: #2b707a;
    font-size: 18px;
    border-radius: 5px;
    color: #fff;
    margin-bottom: 30px;
}
.base2 button:hover {
    background-color: #718a8e;
}
.btp{
    background: #212529;
    width: 100%;
    text-align: center;
    height: 10vh;
}
.btp img{
    height: 25px;
    margin: 30px;
    cursor: pointer;
}

@media only screen and (max-width:700px){
.row{
    background: linear-gradient(rgb(10, 4, 20), rgb(1, 1, 43));
    color: white;
}
.column{
    float: initial;
    width: 100%;
}
.column1{
    float: initial;
    width: 80%;
}
.column1 img{
    height: 50vh;
    padding-top: 10px;
    padding-left: 10%;
    padding-right: 10%;
}
.pops1{
    font-size: 17px;
    text-align: center;
    margin: 12 12;
}

.base1 {
    color: #d6e3e6;
}
.base1 h2{
    font-family: Garamond, serif ;
    padding-top: 30px;
    padding-bottom: 10px;
    letter-spacing: 2px;
    text-align: left;
    margin-left: 20px;
}
.base1 h5{
    margin-left: 20px;
}
.base1 hr{
    margin-top: 10px;
    margin-left: 18%;
    width: 70%;
    margin-bottom: 20px;
}

.base1 img{
    width: 25px;
}
.base2 {
    padding-top: 20px;
}
.base2 input{
    width: 80%;
    height: 40px;
    margin-bottom: 15px;
    border-radius: 5px;
    border: none;
    background: white;
    margin-left: 7%;
}
.base2 textarea{
    width: 80%;
    height: 150px;
    margin-bottom: 10px;
    border-radius: 5px;
    border: none;
    background: white;
    color: black;
    margin-left: 7%;
}
.base2 input:focus{
    border: 1px solid white;
    outline: 0;
}
.base2 textarea:focus{
    border: 1px solid white;
    outline: 0;
}
.base2 label{
    color: #9ac7cf;
    font-family: SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
    margin-left: 7%;
}
.base2 button{
    border: 0;
    padding: 10px 30px;
    background: #2b707a;
    font-size: 18px;
    border-radius: 5px;
    color: #fff;
    margin-left: 7%;
    margin-bottom: 30px;
}
.base2 button:hover {
    background-color: #718a8e;
}
.btp{
    background: #212529;
    width: 100%;
    height: 40px;
}

}




</style>