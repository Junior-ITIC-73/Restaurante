
<link rel="stylesheet" href="datatables/bootstrap.css">
<link rel="stylesheet" href="{{{ asset('datatables/bootstrap4.min.css')}}}">
<link rel="stylesheet" href="{{{ asset('datatables/css/jquery.dataTables.min.css')}}}">
<link rel="stylesheet" href="{{{ asset('datatables/css/estilos.css')}}}">
<style>
body{
background-image: url("img/gris.jpg" );
color:#fff;
background-repeat:no-repeat;
background-size:100% 100%;
background-attachment:fixed;

}
tr th {

opacity: 0.;
background-color: #fff;
border:2px solid #000;
}
table table-hover{
background-color:blue;

}

h1{

opacity: 0.8;


}
.topnav {
overflow: hidden;
background-color: #333;
opacity: 0.8;
}

.topnav a {
float: left;
color: #f2f2f2;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}

.topnav a:hover {
background-color: #ddd;
color: black;
}

.topnav a.active {
background-color: #4CAF50;
color: white;
}
#main {
position: relative;
list-style: none;
background: #6BBE92;
font-weight: 400;
font-size: 0;
text-transform: uppercase;
display: inline-block;
padding: 0;
margin: 50px auto;
top: -140px;
left: 160px;


}
#main li {
font-size: 0.8rem;
display: inline-block;
position: relative;
padding: 15px 20px;
cursor: pointer;
z-index: 5;
min-width: 120px;
}

li {
margin: 0;
}

.drop {
overflow: hidden;
list-style: none;
position: absolute;
padding: 0;
width: 100%;
left: 0;
top: 48px;
}
.drop div {
-webkit-transform: translate(0, -100%);
-moz-transform: translate(0, -100%);
-ms-transform: translate(0, -100%);
transform: translate(0, -100%);
-webkit-transition: all 0.5s 0.1s;
-moz-transition: all 0.5s 0.1s;
-ms-transition: all 0.5s 0.1s;
transition: all 0.5s 0.1s;
position: relative;
}
.drop li {
display: block;
padding: 0;
width: 100%;
background: #3E8760 !important;
}

#marker {
height: 6px;
background: #3E8760 !important;
position: absolute;
bottom: 0;
width: 120px;
z-index: 2;
-webkit-transition: all 0.35s;
-moz-transition: all 0.35s;
-ms-transition: all 0.35s;
transition: all 0.35s;
}

#main li:nth-child(1):hover ul div {
-webkit-transform: translate(0, 0);
-moz-transform: translate(0, 0);
-ms-transform: translate(0, 0);
transform: translate(0, 0);
}
#main li:nth-child(1):hover ~ #marker {
-webkit-transform: translate(0px, 0);
-moz-transform: translate(0px, 0);
-ms-transform: translate(0px, 0);
transform: translate(0px, 0);
}

#main li:nth-child(2):hover ul div {
-webkit-transform: translate(0, 0);
-moz-transform: translate(0, 0);
-ms-transform: translate(0, 0);
transform: translate(0, 0);
}
#main li:nth-child(2):hover ~ #marker {
-webkit-transform: translate(120px, 0);
-moz-transform: translate(120px, 0);
-ms-transform: translate(120px, 0);
transform: translate(120px, 0);
}

#main li:nth-child(3):hover ul div {
-webkit-transform: translate(0, 0);
-moz-transform: translate(0, 0);
-ms-transform: translate(0, 0);
transform: translate(0, 0);
}
#main li:nth-child(3):hover ~ #marker {
-webkit-transform: translate(240px, 0);
-moz-transform: translate(240px, 0);
-ms-transform: translate(240px, 0);
transform: translate(240px, 0);
}

#main li:nth-child(4):hover ul div {
-webkit-transform: translate(0, 0);
-moz-transform: translate(0, 0);
-ms-transform: translate(0, 0);
transform: translate(0, 0);
}
#main li:nth-child(4):hover ~ #marker {
-webkit-transform: translate(360px, 0);
-moz-transform: translate(360px, 0);
-ms-transform: translate(360px, 0);
transform: translate(360px, 0);
}
nav ul li ul div li a{
text-decoration: none;
color: white;
}




input.rounded{

width:280px;
height:38px;

font-size:15px;
text-indent:32px;

border:2px solid #787878;
border-radius:14px;
padding-left:10px;

box-shadow:2px 2px 3px #666;


outline:0;
color:black;
}


input.rounded:focus{

border:2px solid ;
border-color:white;
background-color:#000000;
color:white;
width:300px;
transition:width 1s;


}


}
.registar{

width:280px;
height:38px;

font-size:15px;


border:2px solid #000;
border-radius:14px;
background-color:#3498DB;
color:white;



box-shadow:2px 2px 3px #666;


outline:0;
}
</style>
