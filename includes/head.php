<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport"  content="width=device-width, initial-scale=1">
        <title></title>
        <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
        <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="css/fawsome.min.css" type="text/css"> 
        <link rel="stylesheet" href="css/main.css" type="text/css">
    </head>
    <body>
        <style type="text/css">/**/
            body , canvas{
                margin: 0;
                padding: 0;
            }
            .flex-main-box {/*Start the main container of the template*/
                display: flex;
                flex-flow: column wrap;
                width: 100%;
                height: 100%;
                background-color: #f0f5f5;
                 
            }/*End the main container*/
            .flex-main-box > #header { /*Start the styling of the header*/
                color: black;
                display: flex;
                flex-flow: row wrap;
                text-align: center;
                align-items: flex-end;
                justify-content: space-between;
                top: 0;
                right: 0;
                left: 0;
                position: fixed;
                font-weight: bold;
                margin-bottom: 50px;
                background-color: #668cff;
                border-bottom: 10px solid #c1d7d9;
                padding: 10px;
            }
            .box-child {
                align-self: center;
            }
            #logodiv > canvas {
                width: 100%;
                height: 100%;
                max-width: 550px;
            }
            .flex-main-box >  #header > .box-child > .head-list {
                list-style: none;
                display: flex;
                flex-flow: row wrap;
                gap: 40px;
            }
            .flex-main-box > #header > .box-child > .head-list li a {
               display: block;
               text-decoration: none;
               color: black;
               font: 32px bold fantasy;
             }
             .flex-main-box > #header > .box-child > .head-list li a:hover {
                border-bottom:5px solid cadetblue;
                font: 33.5px bold Verdana;
                background: #4d79ff;
                color: black;
             }

            @media screen and (max-width: 500px) {
            .flex-main-box >  #header  {
                display: flex;
                flex-flow: column wrap;
                text-align: center;
                align-items: center;
                justify-content: center;
            }
            .box-child {
                align-self: center;
                }
            #logodiv > canvas {
                width: 100%;
                height: 100%;
                max-width: 550px;
                }
            #header > #nav-bar > .head-list {
                display: flex;
                flex-flow: column wrap;
                gap: 5px;
                }
            #header > .box-child > .head-list li a {
                text-decoration: none;
                }
            }
             @media screen and (max-width: 150%) {
                 .flex-main-box {
                     display: flex;
                     flex-flow: row wrap;
                     text-align: center;
                     align-items: center;
                     justify-content: center;
                     margin-top: 1000px;
                     padding-top: 300px;
                 }
             }
                  
            .flex-main-box > #bodycontent {/*Start the styling og the body of the content*/
                display: block;
                width: 100%;
                left: 0;
                right: 0;
                height: auto;
                margin-top: 200px;
                justify-content:center;
                align-items: center;
                margin-bottom: 25px;
             }
            .flex-main-box > #bodycontent > .features {
                display: grid;
                grid-template-columns: auto auto;
                grid-gap: 30px;
                justify-content: start;
             }
             .flex-main-box > #bodycontent > .features > div {
                padding-left: 30px;
                padding-bottom: 20px;
              }
              .flex-main-box > #bodycontent > .features > .icon {
                padding-left: 120px;
                padding-bottom: 20px;
              }
            .flex-main-box > #bodycontent > .features > .icon > label {
                display: block;
                font-size: 100px;
                background-color: #1a0500;
                border-left: 1px solid goldenrod;
                text-align: center;
                width: 130px;
                height: auto;
                margin: 6px;
                padding: 1px;
            }
            .flex-main-box > #bodycontent > .features > .icon > label  i{
                display: block;
                font-size: 100px;
                background-color: #3399ff;
                border-left: 1px solid #000d1a;
                text-align: center;
                color: #0d0d0d;
            }
            .flex-main-box > #bodycontent > .features > .icon > label > i:hover{
                font-size: 103px;
                border-bottom: 3px solid #00284d;
                background-color: #668cff;
                color: #000000;
            }
            .flex-main-box > #bodycontent > .embedVideodiv {
                text-align: center;
                margin-top: 100px;
            }
            .flex-main-box > #bodycontent > .embedVideodiv > h2{
                font: 35px bold Times;
                margin-bottom: 25px;
                color: black;
            }
            .flex-main-box > #bodycontent > .embedVideodiv > h2 > span{
                color: gold;
            }
            .flex-main-box > #bodycontent > .form-info{
                display: grid;
                grid-template-columns: 500px;
                justify-content: center;
                color: black;
                text-align: center;
                margin-top: 25px;
            }
            .flex-main-box > #bodycontent > .form-info > .gridItem > h2{
                color: gold;
                background-color: black;
                font: 35px bold Helvetica, "Brush Script MT", Tahoma;
                text-align: center;
                margin-top: 25px;
            }
            .flex-main-box > #bodycontent > .form-info > .gridItem > h2:hover{
                color: black;
                background-color: gold;
                font: 37px bold  Tahoma, "Lucida Console";
                border-bottom: 5px solid black;
            }
            #bodycontent > .productView { /*Start the product TEMPLATE*/
                display: flex;
                flex-flow: row wrap;
                gap: 20px;
                width: 1000px;
                height: auto;
                justify-content:center;
                align-items: center;
                margin: 20px 0 25px 0;
                margin: auto;  
                width: 75%;
                margin-top: 50px
            }
            #bodycontent > .productView > .cardbox {
                width: 300px;
                height: 350px;
                text-align: center;
                padding: 10px;
                box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
                transition: .3s;
                border-radius: 7px;
             } 
             #bodycontent > .productView > .cardbox > .itemGroup {
                display: block;
                width: 290px;
                padding: 25px;
                padding-top: 5px;
                height: 230px;
                overflow: hidden;
                text-align: center;
             }
             #bodycontent > .productView > .cardbox > .itemGroup > h2 {
                display: block;
                background-color: #ebebe0;
                width: 100%;
             }
             #bodycontent > .productView > .cardbox > .read_morediv  {
                bottom: 0px;
                padding-bottom: 10px;
             }
             #bodycontent > .productView > .cardbox > .read_morediv > .read_moredivbtn {
                margin: 50px  0;
                width: 150px;
                height: 35px;
                background-color: #1aa3ff;
                
             }
             #bodycontent > .productView > .cardbox > .read_morediv > .read_moredivbtn:hover {
                background-color: #fff5e6;
                color: #804d00;
                font: 20px bold small-caption;
                border-bottom: 2px solid #668cff;
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                transition: .3s;
              }
            #bodycontent > .productView > .cardbox:hover{ 
                box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
                
            } /**End the product TEMPLATE**/
            .flex-main-box > #footer {/*Start the footer style*/
                width: 100%;
                height: auto;
                text-align: center;
                bottom: 0;
             }
            .flex-main-box > #footer > .foot-details{
                padding: 25px;
                margin: 25px;
                width: auto;
                text-align: center;
                border-top: 3px solid red;
                background-color: #f5f5ef;
                margin: 0 250px;
                color: #000000;
                font-weight: bold; 
                font-family: "Lucida Console", "Courier New", monospace;
            }/*End the footer*/
            label {
               background-color: background;
            } 
            label:hover{
                background-color: gold; 
            }/*End the styling og the body of the content*/ 
           
            @media screen and (max-width: 100px) {
                 .flex-main-box > #footer {
                     flex: flex;
                     flex-flow: row wrap;
                     margin: 0px 0px;
                     padding: 0px;
                     margin: 0px;
                     max-width: 500px;
                     width: 100%;
                     left: 0;
                 }
             }

         

        </style>