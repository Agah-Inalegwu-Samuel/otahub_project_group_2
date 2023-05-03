<template>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>About Us</title>
    </head>
    <body id="">

        <div class="contain">

            <div class="about" id="AboutView.vue">
                <h2>{{title}}</h2>
            </div>

            <div class="about-body">
                <h3>
                Otukpo Tech Academy(OTA) is a is a tech institute proudly supported by a UK charity: <a href="https://thebackhomeproject.org/">The back home project.</a> Our first batch of students where graduated and certified in 2021 since then we've graduated over three batches with the total number of fourty students.
                </h3><br><br>

                <h3>We offer:</h3><br><br>
                <h3><i class="bi bi-check-lg text-success"></i> Week long introduction to coding courses</h3>
                <h3><i class="bi bi-check-lg text-success"></i> 3 month intensive coding bootcamp</h3>
                <h3><i class="bi bi-check-lg text-success"></i> Small class sizes</h3>
                <h3><i class="bi bi-check-lg text-success"></i> Small class sizes</h3>
            </div>
        </div>
    </body>
    </html>
</template>

<script>
export default {
    name: "AboutView.vue",
    props: {
  },
  data() {
    return {
        title: "About Us",
    }
  },
}
</script>

<style>
.about h2{
    font-family: 'Times New Roman', Times, serif;
    margin-top: 200px;
    margin-bottom: 30px;
    margin-left: 120px;
    font-family: italic;
    font-size: 60px;
    color: blue;
}
.about-body{
    color: black;
    font-family: Georgia, 'Times New Roman', Times, serif;
    padding-left: 20px;
    margin-bottom: 200px;
}
.about-body a{
    color: blue;
}
.about-body a:hover{
    text-decoration: none;
    cursor: pointer;
    color: red;
}
</style>